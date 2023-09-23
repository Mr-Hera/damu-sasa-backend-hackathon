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
                <label for="medicine_name" class="inline-block text-lg mb-2">Medicine Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="medicine_name"
                    placeholder="" value="{{old('medicine_name')}}" />
        
                @error('medicine_name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
        
                <div class="mb-6">
                <label for="dosage" class="inline-block text-lg mb-2">Dosage</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="published"
                    placeholder="" value="{{old('dosage')}}" />
        
                @error('dosage')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
        
                <div class="mb-6">
                <label for="duration" class="inline-block text-lg mb-2">
                    Duration
                </label>
                <input class="border border-gray-200 rounded p-2 w-full" name="duration" rows="10"
                    placeholder="">{{old('duration')}} />
        
                @error('duration')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
        
                <div class="mb-6 flex justify-center ">
                    <button class="bg-black text-white py-2 px-4 hover:bg-bmw">
                        Create Prescription
                    </button>
                </div>
            </form>
        </x-card>
    </div>
</x-layout>  