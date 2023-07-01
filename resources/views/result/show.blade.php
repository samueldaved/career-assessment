<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<x-layout>
    <div>  
        <div class="mt-10 text-center">
            @isset($message)
                <p class="text-2xl font-bold mt-4 mb-10">{{$message}}</p>
                @can('is-user')   
                    <div>
                        <button class="btn-primary">
                            <a href="/assessment-test/1">Lakukan Test</a>
                        </button>
                    </div>
                @else 
                    <div>
                        <button class="btn-primary">
                            <a href="/user-setting">Kembali</a>
                        </button>
                    </div>
                @endcan
            @else
                @can('is-hrd')
                    
                    <div class="items-center mr-10 flex flex-row-reverse">
                        <div class="mt-10 text-center">
                            <button class="btn-primary">
                                <i class="fa-solid fa-arrow-down"></i>
                                <a href="/result/download/{{$user->id}}" target="_blank">Download Hasil Test</a>
                            </button>
                        </div>
                    </div>
                    
                @endcan

                <p class="my-20 text-4xl font-bold">Hasil Test Kandidat {{$user->name}}</p>

                <table class="mt-10 mx-auto">
                    @foreach($testResult as $key => $value)
                        @if($key != 'id' && $key != 'userId')
                            <tr>
                                <td class="py-3">
                                    <img class="w-24 h-24 mr-4 my-4 border-8 border-black" src="{{ asset('images/'.$key.'.jpeg') }}" alt="{{$key}}">
                                </td>
                                <td class="pl-3 py-3">
                                    <p>Hasil Test {{$key}} Anda adalah : {{$value}}</p>
                                </td>
                            </tr> 
                        @endif
                    @endforeach
                </table>
                
                <div class="flex flex-row justify-center">
                    @foreach($charts as $chart => $value)
                        
                        <div class="max-w-lg">
                            <canvas id="{{$chart}}" height="100px"></canvas>
                            @can('is-hrd')
                                <button class="mt-4 btn-primary" id="{{$chart}}" onclick="download(this.id)">Download</button>             
                            @endcan
                            <script type="text/javascript">
                                var labels =  {{ Js::from($labels) }};
                                var datas =  {{ Js::from($value) }};
                        
                                var data = {
                                    labels: labels,
                                    datasets: [{
                                        label: {{Js::from($chart)}} + ' Self',
                                        backgroundColor: 'white',
                                        borderColor: 'blue',
                                        data: datas,
                                    }]
                                };
                        
                                var config = {
                                    type: 'line',
                                    data: data,
                                    options: {
                                        bezierCurve : false,
                                        animation: {
                                        }
                                    }
                                };
                        
                                var {{$chart}} = new Chart(
                                    document.getElementById({{Js::from($chart)}}),
                                    config
                                );
                                           
                            </script>

                        </div>
                    @endforeach

                    <script type="text/javascript">
                        function download(clicked_id){
                            var name = "{{$user->name}}";
                            imageLink = document.createElement('a');
                            canvas = document.getElementById(clicked_id);
                            imageLink.download = name + '-' + clicked_id + '.png';
                            imageLink.href = canvas.toDataURL('image/png', 1);
                            imageLink.click();
                        }
                    </script>
                </div>
                
                <div class="mx-auto mt-4 max-w-4xl text-left">
                    @php
                        $index = 0;
                    @endphp
                    
                    @foreach($categories as $category)
                        
                            @if($index <= 1)
                                <p class="mt-8 mb-4 text-center text-2xl font-bold">{{$testNames[$index]}} Result</p>
                            @elseif($index == 4)
                                <p class="mt-8 mb-4 text-center text-2xl font-bold">{{$testNames[$index - 2]}} Result</p>
                            @endif

                            @php
                                $index++;
                            @endphp

                            @foreach($category as $attribute => $attributeValue)
                                @if($attribute != 'description' && $attribute != 'name' && $attributeValue != null)
                                    @if($attribute == 'commonCombination')
                                        <p class="font-bold">Common Combination</p>
                                    @else
                                        <p class="font-bold">{{ucfirst($attribute)}}</p>
                                    @endif

                                    @if(is_array($attributeValue) || is_object($attributeValue))
                                        <ul class="mb-4 list-disc">
                                            @for ($k = 0; $k < count($attributeValue); $k++)
                                                <li>{{$attributeValue[$k]}}</li>
                                            @endfor  
                                        </ul>
                                    @endif 
                                    
                                        
                                @else
                                    @if($attribute == 'name')
                                        <p class="my-6 font-bold text-xl">{{$attributeValue}}</p>
                                    @else
                                        <p class="my-4 text-justify">{{$attributeValue}}</p>
                                    @endif      
                                @endif  
                            @endforeach
                        
                    @endforeach
                </div>
                

                @can('is-admin')
                    <form method="POST" action="/result/{{$testResult['id']}}">
                        @csrf
                        @method('DELETE')
                        <button class="mt-4 rounded-full bg-red-500 text-black hover:bg-red-700 hover:text-white h-10 px-10 font-semibold"><i class="fa-solid fa-trash"></i> Hapus Hasil Test</button>
                    </form>
                @endcan
            @endisset
        </div>
    </div>
</x-layout>
    


 
