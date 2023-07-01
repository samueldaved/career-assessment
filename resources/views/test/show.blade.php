<x-layout>
        @isset($message)
            <div class="text-center mt-10">
                <p class="text-center text-2xl font-bold mt-4 mb-10">{{$message}}</p>
                
                <div>
                    <button class="btn-primary text-center">
                        <a href="/result/{{$user->id}}">Hasil Test</a>
                    </button>
                </div>
            </div>
            
        @else
            <div class="border border-orange-700 rounded p-10 max-w-2xl mx-auto mt-12">
                <form method="POST" action="/assessment-test/{{$test->id}}" encytype="multipart/form-data">
                    @csrf
                    <p class="text-center text-xl font-bold mb-8">Test {{$test->name}}</p>
                    @if($test->name == 'DiSC')
                        <p class="text-left font-semibold mt-4">Jangan memilih kategori + dan - yang sama!</p>
                    @endif

                    @php
                        $i = 1;
                    @endphp
                    @foreach($test->question as $question)
                        @if($test->name == 'MBTI')
                            <p>{{$question->id}}. {{$question->body}}</p>
                        @elseif($test->name == 'DiSC')
                            <p>{{$i}}. {{$question->body}}</p>
                            @php
                                $i++;
                            @endphp
                        @else
                            <p class="mb-4">&emsp;&ensp;{{$question->body}}</p>
                        @endif
                        
                        @if($test->name == 'MBTI')
                            <div class="flex my-4">
                                @foreach($question->answer as $answer)
                                    <div class="flex items-center justify-center mr-4">
                                        &emsp;
                                        <input id="inline-radio" type="radio" name="answer[{{$question->id}}]" value="{{$answer->label}}" @if(old('answer[{{$question->id}}]') == '{{$answer->id}}') checked @endif required 
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="answer[{{$question->id}}]" class="ml-2 text-sm font-medium">{{$answer->body}}</label>
                                    </div>

                                @endforeach
                            </div>
                        @elseif($test->name == 'SDS')
                            @foreach($question->answer as $answer)
                                <div class="flex items-center mb-4">
                                    &emsp;&ensp;
                                    <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2" id="default-checkbox" type="checkbox" name="{{$answer->label}}[]" value="{{$answer->label}}[{{$answer->id}}]">
                                    <label for="{{$answer->label}}[]" class="ml-2 text-sm font-medium">{{$answer->body}}</label>
                                </div>
                            @endforeach
                        @else
                            <pre> &emsp;&ensp;+&emsp;&ensp;-</pre>
                            @foreach($question->answer as $answer)
                                <div class="flex items-center mb-4">
                                    &emsp;
                                    <input class="w-4 h-4 ml-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"id="default-radio-1" type="radio" value="{{$answer->label}}" name="plus[{{$question->id}}]" required>
                                    <input class="w-4 h-4 ml-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2" id="default-radio-2" type="radio" value="{{$answer->label}}" name="minus[{{$question->id}}]" required>
                                    <label for="minus[{{$question->id}}]" class="text-sm font-medium ml-2">{{$answer->body}}</label>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                    
                    <div class="my-6 flex items-center justify-center">      
                        <button type="submit" class="btn-primary">
                            {{$test->name == 'DiSC' ? 'Selesai' : 'Lanjut'}}
                        </button>    
                    </div>
                    
                </form>
            </div>
        @endisset
    
</x-layout>