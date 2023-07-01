<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\TestResult;

class TestController extends Controller
{
    //show test page
    public function show(Test $test) {
        $user = Auth::user();
        
        if($user->finishedTest) {
            return view('test.show', [
                'message' => 'Anda sudah melakukan test',
                'user' => $user
            ]);
        }

        if(!$user->takenTest) {
            $user->takenTest = !$user->takenTest;
            $user->save();
            return redirect('result/create');
        }
        
        return view('test.show', [
            'test' => $test
        ]);
    }

    //check MBTI test and get the test result
    public function checkMbtiTest(Request $request) {
        $formFields = $request->validate([
            'answer'    => 'required'
        ]);

        $mbtiResult = $this->getMbtiResult($formFields);
        
        $testResult = TestResult::where('user_id', Auth::id())->first();
        $testResult->mbtiResult = $mbtiResult;
        $testResult->save();

        return redirect('/assessment-test/2');
          
    }

    //get the MBTI test result
    public function getMbtiResult($answers){
       
        $countE = 0;
        $countI = 0;
        $countN = 0;
        $countS = 0;
        $countF = 0;
        $countT = 0;
        $countJ = 0;
        $countP = 0;
        
        foreach($answers as $answer) {
            for($i = 1; $i <= count($answer); $i++) {
                if ($answer[$i] == "I") {
                    $countI++;  
                } elseif ($answer[$i] == "E") {
                    $countE++;
                } elseif ($answer[$i] == "N") {
                    $countN++;
                } elseif ($answer[$i] == "S") {
                    $countS++;
                } elseif ($answer[$i] == "F") {
                    $countF++;
                } elseif ($answer[$i] == "T") {
                    $countT++;
                } elseif ($answer[$i] == "J") {
                    $countJ++;
                } else {
                    $countP++;
                }
            }
        }
        
        $subCategoryOne = (max($countE, $countI) == $countE) ? 'E' : 'I';
        $subCategoryTwo = (max($countN, $countS) == $countN) ? 'N' : 'S';
        $subCategoryThree = (max($countF, $countT) == $countF) ? 'F' : 'T';
        $subCategoryFour = (max($countJ, $countP) == $countJ) ? 'J' : 'P';

        $mbtiResult = $subCategoryOne.$subCategoryTwo.$subCategoryThree.$subCategoryFour;

        return $mbtiResult;
    }

    //check SDS test and get the result
    public function checkSdsTest(Request $request) {
        $formFields = $request->validate([
            'R' => 'nullable',
            'I' => 'nullable',
            'A' => 'nullable',
            'S' => 'nullable',
            'E' => 'nullable',
            'C' => 'nullable',
        ]);

        $sdsResult;

        //if form not null
        if($formFields == null) {
            //default SDS result
            $sdsResult = 'RIA';
        } else {
            
            $sdsResult = $this->getSdsResult($formFields);
        }
    
        $testResult = TestResult::where('user_id', Auth::id())->first();
        $testResult->sdsResult = $sdsResult;
        $testResult->save();

        return redirect('/assessment-test/3');
    }

    //get SDS test result
    public function getSdsResult($answers) {

        $category = [
            'R' => 0,
            'I' => 0,
            'A' => 0,
            'S' => 0,
            'E' => 0,
            'C' => 0
        ];

        foreach($answers as $answer => $value) {
            $category[$answer] = count($value);
        }

       $result = "";

       for($i = 0; $i < 3; $i++){
            $maxResult = array_search(max($category), $category);
            $result = $result.$maxResult;
            unset($category[$maxResult]);
       }

       return $result;

    }

    //validate DiSC test and get the result
    public function checkDiscTest(Request $request) {
        $formFields = $request->validate([
            'plus' => 'required',
            'minus' => 'required',
        ]);

        $discResult = $this->getDiscResult($formFields);

        $testResult = TestResult::where('user_id', Auth::id())->first();
        $testResult->discResult = $discResult;
        $testResult->save();

        $user = Auth::user();
        $user->finishedTest = !$user->finishedTest;
        $user->save();

        return redirect('result/'.Auth::id());
    }

    //get DiSC test result
    public function getDiscResult($answers) {
        $categories = ['D', 'i', 'S', 'C'];

        $categoriesPlusCount = [
            'D' => 0,
            'i' => 0,
            'S' => 0,
            'C' => 0
        ];

        $categoriesMinusCount  = [
            'D' => 0,
            'i' => 0,
            'S' => 0,
            'C' => 0
        ];

        $categoriesDifferenceCount  = [
            'D' => 0,
            'i' => 0,
            'S' => 0,
            'C' => 0
        ];

        foreach($answers as $answerCategory => $answerCategory_value) {
            if($answerCategory == 'plus') {
                foreach($answerCategory_value as $answer => $answer_value) {
                    $categoriesPlusCount[$answer_value]++;
                }
            } else {
                foreach($answerCategory_value as $answer => $answer_value) {
                    $categoriesMinusCount[$answer_value]++;
                }
            }   
        }

        foreach($categories as $category) {
            $categoriesDifferenceCount[$category] = $categoriesPlusCount[$category] - $categoriesMinusCount[$category];
        }

        $testResult = TestResult::where('user_id', Auth::id())->first();
        $testResult->discPlusCount = $categoriesPlusCount;
        $testResult->discMinusCount = $categoriesMinusCount;
        $testResult->discDifferenceCount = $categoriesDifferenceCount;
        $testResult->save();

        return $this->getCategoryResult($categoriesDifferenceCount);
    }

    //get the category result from difference result DiSC
    public function getCategoryResult($categoriesCount) {
        $max = array_search(max($categoriesCount), $categoriesCount);
        $secondMaxValue = 0;
        $secondMax = "";
        
        foreach($categoriesCount as $key => $value) {
            if($key != $max) {
                if($secondMaxValue == 0) {
                    $secondMaxValue = $value;
                }

                if($value > $secondMaxValue) {
                    $secondMaxValue = $value;
                }
            }
        }

        $secondMax = array_search($secondMaxValue, $categoriesCount);
        
        return $max.$secondMax;

    }
}
