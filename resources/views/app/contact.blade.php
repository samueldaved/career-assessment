<x-layout>
    <div class="justify-center items-center h-screen mt-20">
        <div class="text-center">
            <p class="my-10 text-2xl font-bold ">Kontak Departemen Human Resources</p>
            @foreach ($user as $key => $value)
                <p class="mb-6">{{$key}} : {{$value}}</p>
            @endforeach
            
        </div>

        <x-test-images />
    </div>

</x-layout>