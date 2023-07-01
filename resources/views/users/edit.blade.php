<x-layout>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-xl mx-auto mt-24">
            <header class="text-center">
                <p class="text-2xl font-bold mb-4">Edit Kandidat</p>
            </header>
            
            <form method="POST" action="/users/{{$user->id}}">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="username" class="inline-block text-lg mb-2">
                        Username
                    </label>
                    <input class="text-box" name="username" value="{{$user->username}}"/>

                    @error('username')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="inline-block text-lg mb-2">
                        Password(kosongkan jika tidak ada perubahan)
                    </label>
                    <input type="password" class="text-box" name="password""/>

                    @error('password')
                        <p class="error-message">{{$user->password}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-2">
                        Nama
                    </label>
                    <input class="text-box" name="name" value="{{$user->name}}"/>

                    @error('name')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <p class="inline-block text-lg mb-2">Role</p><br>
                    
                    <input type="radio" name="role" value="User" @if(old('role', 'User') == 'User') checked="checked" @endif required 
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="role" class="ml-2 text-sm font-medium">User</label><br>

                    <input type="radio" name="role" value="HRD" @if(old('role') == 'HRD') checked="checked" @endif required 
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="role" class="ml-2 text-sm font-medium">HRD</label>
                </div>
                
                <div class="mb-6">
                    <p class="inline-block text-lg mb-2">Gender</p><br>
                    
                    <input type="radio" name="gender" value="Laki-laki" {{ ($user->gender == "Laki-laki") ? "checked" : ""}} required 
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="gender" class="ml-2 text-sm font-medium">Laki-laki</label><br>

                    <input type="radio" name="gender" value="Perempuan" {{ ($user->gender == "Perempuan") ? "checked" : ""}} required 
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="gender" class="ml-2 text-sm font-medium">Perempuan</label>
                </div>

                <div class="mb-6">
                    <label for="birthplace" class="inline-block text-lg mb-2">
                        Tempat Lahir
                    </label>
                    <input class="text-box" name="birthplace" value="{{$user->birthplace}}"/>

                    @error('birthplace')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="birthday" class="inline-block text-lg mb-2">Tanggal Lahir</label>
                    <input type="date" id="birthday" name="birthday" value="{{$user->birthday}}"> 
  
                    @error('birthday')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="address" class="inline-block text-lg mb-2">
                        Alamat
                    </label>
                    <input class="text-box" name="address" value="{{$user->address}}"/>

                    @error('address')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">
                        Email
                    </label>
                    <input class="text-box" name="email" value="{{$user->email}}"/>

                    @error('email')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="phone" class="inline-block text-lg mb-2">
                        Nomor Telepon
                    </label>
                    <input class="text-box" name="phone" value="{{$user->phone}}"/>

                    @error('phone')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="department" class="inline-block text-lg mb-2">
                        Departemen
                    </label>
                    <input class="text-box" name="department" value="{{$user->department}}"/>

                    @error('department')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex justify-center text-center mt-10">
                    <div class="mr-4">
                        <button class="btn-primary">
                            <a href="/user-setting">Kembali</a>
                        </button>
                    </div>
                    <div class="ml-4">
                        <button type="submit" class="btn-primary">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>