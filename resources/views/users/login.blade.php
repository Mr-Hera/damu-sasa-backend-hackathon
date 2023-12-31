<x-layout>
    <div class="pb-40">
        <x-card class="p-10 max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>
                <p class="mb-4">Log into your account to view appointments</p>
            </header>
        
            <form method="POST" action="/users/authenticate">
                @csrf
        
                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Email</label>
                    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
            
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
        
                <div class="mb-6">
                    <label for="password" class="inline-block text-lg mb-2">
                        Password
                    </label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                        value="{{old('password')}}" />
            
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
        
                <div class="flex justify-center mb-6">
                    <button type="submit" class="bg-black text-white py-2 px-4 hover:bg-sasa">
                        Log In
                    </button>
                </div>
        
                <div class="flex justify-center mt-8">
                    <p>
                        Don't have an account?
                        <a href="/register" class="text-sasa">Register</a>
                    </p>
                </div>
            </form>
        </x-card>
    </div>
</x-layout>