<x-layout>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-xl mx-auto mt-24">
            <header class="text-center">
                <p class="mb-4">Selamat Datang di C.A.T</p>
                <h2 class="text-2xl font-bold mb-1">
                    Career Assessment Test
                </h2>  
            </header>

            <x-test-images />
            
            <form method="POST" action="/login">
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

                <div type="submit" class="mb-6 flex items-center justify-center">
                    <button class="btn-primary">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>