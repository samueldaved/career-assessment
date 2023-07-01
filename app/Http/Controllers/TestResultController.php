<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TestResult;
use App\Models\User;
use App\Models\ResultCategory;
use PDF;
//use App\Mail\TestMail;


class TestResultController extends Controller
{
    //show user test result 
    public function show(User $user) {
        if(!$user->takenTest || !$user->finishedTest) {
            return view('result.show', [
                'message' => 'Anda belum melakukan/menyelesaikan semua test',
                'user' => $user
            ]);
        } else {
            $testResult = TestResult::where('user_id', $user->id)->first();
            return view('result.show', [
                'user' => $user,
                'testResult' => [
                    'id' => $testResult->id,
                    'MBTI' => $testResult->mbtiResult,
                    'SDS' => $testResult->sdsResult,
                    'DiSC' => $testResult->discResult
                ],
                'testNames' => ['MBTI', 'SDS', 'DiSC'],
                'labels' => ['D', 'i', 'S', 'C'],
                'charts' => [
                    'Public' => $testResult->discPlusCount,
                    'Private' => $testResult->discMinusCount,
                    'Perceived' => $testResult->discDifferenceCount
                ],
                'categories' => $this->getCategories($testResult)
            ]);
        }
    }

    //create test result for user
    public function create() {
        $this->authorize('create', TestResult::class);

        $this->store();
        
        return redirect('/assessment-test/1');
    }

    public function store() {
        TestResult::create([
            'user_id' => Auth::id()
        ]);
    }

    //delete test result
    public function destroy(TestResult $testResult) {
        $this->authorize('delete', $testResult);

        $user = User::find($testResult->user_id);
        $user->takenTest = false;
        $user->finishedTest = false;
        $user->save();

        $testResult->delete();
        
        return redirect('/result/'.$user->id);
    }

    //get all category based on test result
    public function getCategories(TestResult $testResult) {
        $categories = new Collection;
        $categories->push($this->getMbtiCategory($testResult));
        $categories = $categories->merge($this->getSdsCategory($testResult));
        $categories->push($this->getDiscCategory($testResult));
        $filtered = new Collection;

        foreach($categories as $category) {
            $filtered->push($category->only(['name', 'description', 'strength', 'weakness', 'goals', 'difficulties', 'leadershipCharateristics', 'commonCombination']));
        }

        return $filtered;
    }

    //get mbti category based on test result
    public function getMbtiCategory(TestResult $testResult) {
        $category = ResultCategory::where('name', $testResult->mbtiResult)->first();
        return $category;
    }

    //get sds category based on test result
    public function getSdsCategory(TestResult $testResult) {
        $sdsCategory = new Collection;
        $categoriesLabel = ['R', 'A', 'I', 'S', 'E', 'C'];
        $categories = ['Realistic', 'Artistic', 'Investigative', 'Social', 'Enterprising', 'Conventional'];

        for($i = 0; $i < count($categoriesLabel); $i++) {
            if(Str::contains($testResult->sdsResult, $categoriesLabel[$i])) {
                $sdsCategory->push(ResultCategory::where('name', $categories[$i])->first());
            }
        }

        return $sdsCategory;
        
    }

    //get disc category based on test result
    public function getDiscCategory(TestResult $testResult) {
        
        $categories = ['D', 'i', 'S', 'C'];
        $categoriesLabel = ['Dominant', 'Influence' , 'Steadiness', 'Conscientiousness'];
        for($i = 0; $i < count($categories); $i++) {
            if(Str::contains($testResult->discResult, $categories[$i])) {
                $discCategory = ResultCategory::where('name', $categoriesLabel[$i])->first();
                return $discCategory;
            }
        }

    }

    //download test result as pdf file
    public function download(User $user) {
        $this->authorize('download', TestResult::class);

        $testResult = TestResult::where('user_id', $user->id)->first();
        
        $categories = $this->getCategories($testResult);

        $labels = ['D', 'i', 'S', 'C'];

        $charts = [
            'Public' => $testResult->discPlusCount,
            'Private' => $testResult->discMinusCount,
            'Perceived' => $testResult->discDifferenceCount
        ];

        $result = [
            'MBTI' => $testResult->mbtiResult,
            'SDS' => $testResult->sdsResult,
            'DiSC' => $testResult->discResult
        ];

        
        $data = compact('result', 'categories', 'labels', 'charts', 'user');

        $pdf = PDF::loadView('pdf.result', $data);
    
        return $pdf->download('result.pdf');
        
    }
}
