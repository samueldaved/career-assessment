<x-layout>

    <p class="mt-12 mb-4 font-bold text-2xl text-center">Daftar Kandidat</p>
    <table class="mx-auto">
        <tbody>
            @if(count($users) == 0)
                <p class="my-4 font-semibold text-xl text-center">Tidak ada kandidat</p>
            @else
                @foreach($users as $user)
                    <tr>
                        <td class="p-3">{{$user->username}}-{{$user->name}}</td>
                        <td class="p-3">
                            <div>
                                <button class="btn-primary">
                                    <a href="/users/{{$user->id}}">Biodata</a>
                                </button>
                            </div> 
                        </td>   
                        <td class="p-3">
                            <div>
                                <button class="btn-primary">
                                    <a href="/result/{{$user->id}}">Hasil Test</a>
                                </button>
                            </div> 
                        </td>
                    </tr>
                @endforeach
            @endif
            
        </tbody>
    </table>

    @can('is-admin')
        
        <p class="mt-12 mb-4 font-bold text-2xl text-center">Daftar HRD</p>
        <table class="mx-auto">
            <tbody>
                @if(count($hrds) == 0)
                    <p class="my-4 font-semibold text-xl text-center">Tidak ada HRD</p>
                @else
                    @foreach($hrds as $hrd)
                        <tr>
                            <td class="text-left p-3">{{$hrd->username}}-{{$hrd->name}}</td>
                            <td class="p-3">
                                <div>
                                    <button class="btn-primary">
                                        <a href="/users/{{$hrd->id}}">Biodata</a>
                                    </button>
                                </div> 
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

        <div class="mt-10 text-center">
            <button class="rounded-full bg-lime-500 text-black hover:bg-lime-700 hover:text-white h-10 px-10 font-semibold">
                <i class="fa-solid fa-user-plus"></i> 
                <a href="users/create">Tambah</a>
            </button>
        </div>
    @endcan
    
</x-layout>