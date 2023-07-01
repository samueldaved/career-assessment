<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .center {
            margin: auto;
        }
        .text-center {
            text-align: center;
        }
        .text-left {
            text-align: left;
        }
        .text-justify {
            text-align: justify;
        }
        .img-center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }
        .title {
            font-size: 40px;
            font-weight: bold;
        }
        .category-title {
            font-size: 20px;
            font-weight: bold;
        }
        .attribute-title {
            font-size: 14px;
            font-weight: bold;
        }
        
    </style>

     
    <title>Hasil Test Psikologi</title>
</head>

<body>
    
    <p class="title text-center">Hasil Test Kandidat {{$user->name}}</p>
    @foreach($result as $key => $value)
        @if($key != 'id' && $key != 'userId')
            <div class="center">
                <img class="img-center" src="{{'data:image/png;base64,'.base64_encode(file_get_contents(storage_path('app/public/'.$key.'.jpeg')))}}" alt="{{$key}}">
                <p class="text-center">Hasil Test {{$key}} Anda adalah : {{$value}}</p>
            </div>  
        @endif
    @endforeach

    <div class="center text-left">
        @foreach($categories as $category)
            @foreach($category as $attribute => $attributeValue)
                @if($attribute != 'description' && $attribute != 'name' && $attributeValue != null)
                    <br>
                    @if($attribute == 'commonCombination')
                        <p class="attribute-title">Common Combination</p>
                    @else
                        <p class="attribute-title">{{ucfirst($attribute)}}</p>
                    @endif
                    
                    @if(is_array($attributeValue) || is_object($attributeValue))
                        <ul>
                        @for ($k = 0; $k < count($attributeValue); $k++)
                            &emsp;
                            <li>{{$attributeValue[$k]}}</li>
                        @endfor  
                        </ul>
                    @endif 
                      
                @else
                    @if($attribute == 'name')
                        <br>
                        <p class="text-left category-title">{{$attributeValue}}</p>
                    @else
                        <p class="text-justify">{{$attributeValue}}</p>
                    @endif      
                @endif  
            @endforeach
        @endforeach
    </div>
    
</body>
</html>