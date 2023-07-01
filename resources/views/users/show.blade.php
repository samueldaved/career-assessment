<x-layout>
    <div class="text-center">
        <p class="text-2xl font-bold mt-20 mb-10">BIODATA</p>
        <table class="mx-auto">
            <tbody>
                @foreach($user as $key => $value)
                    <tr>
                        @if($key != 'id')
                            <td class="text-left">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;{{$key}}</td>
                            <td>&emsp;&emsp;:</td>
                            <td class="text-left">&emsp;&emsp;&emsp;{{$value}}</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        

        @can('is-admin')
            <div class="flex justify-center mt-10">
                <div class="mr-4">
                    <button class="rounded-full bg-blue-500 text-black hover:bg-blue-700 hover:text-white h-10 px-10 font-semibold">
                        <i class="fa-solid fa-user-pen"></i>
                        <a href="/users/{{$user['id']}}/edit">Update</a>
                    </button>
                </div>
                <div class="ml-4">
                    <form method="POST" action="/users/{{$user['id']}}">
                        @csrf
                        @method('DELETE')
                        <button class="rounded-full bg-red-500 text-black hover:bg-red-700 hover:text-white h-10 px-10 font-semibold"><i class="fa-solid fa-trash"></i> Hapus</button>
                    </form>
                </div>
            </div>
        @endcan

    </div>
   
</x-layout>