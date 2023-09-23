<x-layout>
    <a href="/" class="inline-block text-black ml-56 pt-10 pr-2 pl-28 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="pb-40">
        <x-card class="p-10 max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">Create a Prescription</h2>
                <p class="mb-4">
                    Fill in below to create a Prescription
                </p>
            </header>
        
            <form method="POST" action="/prescriptions" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                <label for="first_name" class="inline-block text-lg mb-2">First Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="first_name"
                    placeholder="" value="{{old('first_name')}}" />
        
                @error('first_name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>

                <div class="mb-6">
                <label for="other_name" class="inline-block text-lg mb-2">Other Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="other_name"
                    placeholder="" value="{{old('other_name')}}" />
        
                @error('other_name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
        
                <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="published"
                    placeholder="" value="{{old('email')}}" />
        
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
        
                <div class="mb-6">
                <label for="phone_number" class="inline-block text-lg mb-2">
                    Phone Number
                </label>
                <input class="border border-gray-200 rounded p-2 w-full" name="phone_number" rows="10"
                    placeholder="">{{old('phone_number')}} />
        
                @error('phone_number')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
        
                <div class="mb-6">
                <label for="address" class="inline-block text-lg mb-2">
                    Address
                </label>
                <input class="border border-gray-200 rounded p-2 w-full" name="address" rows="10"
                    placeholder="">{{old('address')}} />
        
                @error('address')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
        
                <div class="mb-6 flex justify-center ">
                    <button class="bg-black text-white py-2 px-4 hover:bg-bmw">
                        Create Patient
                    </button>
                </div>
            </form>
        </x-card>
    </div>
</x-layout>  