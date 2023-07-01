<x-layout>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-xl mx-auto mt-24">
            <header class="text-center">
                <p class="text-2xl font-bold mb-4">Insert Kandidat</p>
            </header>
            
            <form method="POST" action="/users">
                @csrf
                <div class="mb-6">
                    <label for="username" class="inline-block text-lg mb-2">
                        Username
                    </label>
                    <input class="text-box" name="username" value="{{old('username')}}"/>

                    @error('username')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="inline-block text-lg mb-2">
                        Password
                    </label>
                    <input type="password" class="text-box" name="password"/>

                    @error('password')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="name" class="inline-block text-lg mb-2">
                        Nama
                    </label>
                    <input class="text-box" name="name" value="{{old('name')}}"/>

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
                    
                    <input type="radio" name="gender" value="Laki-laki" @if(old('gender', 'Laki-laki') == 'Laki-laki') checked="checked" @endif required 
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="gender" class="ml-2 text-sm font-medium">Laki-laki</label><br>

                    <input type="radio" name="gender" value="Perempuan" @if(old('gender') == 'Perempuan') checked="checked" @endif required 
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                    <label for="gender" class="ml-2 text-sm font-medium">Perempuan</label>
                </div>

                <div class="mb-6">
                    <label for="birthplace" class="inline-block text-lg mb-2">
                        Tempat Lahir
                    </label>
                    <input class="text-box" name="birthplace" value="{{old('birthplace')}}"/>

                    @error('birthplace')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="birthday" class="inline-block text-lg mb-2">Tanggal Lahir</label>
                    <input type="date" id="birthday" name="birthday" value="{{old('birthday')}}"> 
  
                    @error('birthday')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="address" class="inline-block text-lg mb-2">
                        Alamat
                    </label>
                    <input class="text-box" name="address" value="{{old('address')}}"/>

                    @error('address')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">
                        Email
                    </label>
                    <input class="text-box" name="email" value="{{old('email')}}"/>

                    @error('email')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="phone" class="inline-block text-lg mb-2">
                        Nomor Telepon
                    </label>
                    <input class="text-box" name="phone" value="{{old('phone')}}"/>

                    @error('phone')
                        <p class="error-message">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="department" class="inline-block text-lg mb-2">
                        Departemen
                    </label>
                    <input class="text-box" name="department" value="{{old('department')}}"/>

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
                            Insert
                        </button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</x-layout>