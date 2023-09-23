<x-layout>
    <a href="/" class="inline-block text-black ml-56 pt-10 pr-2 pl-28 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="pb-40">
        <x-card class="p-10 max-w-lg mx-auto mt-24">
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">Create an Appointment</h2>
                <p class="mb-4">
                    Fill in below to create an appointment
                </p>
            </header>
        
            <form method="POST" action="/appointments" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                <label for="start_time" class="inline-block text-lg mb-2">Start Time</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="start_time"
                    placeholder="Example: September 23, 11am" value="{{old('start_time')}}" />
        
                @error('start_time')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
        
                <div class="mb-6">
                <label for="end_time" class="inline-block text-lg mb-2">End Time</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="published"
                    placeholder="Example: September 23, 2p.m" value="{{old('end_time')}}" />
        
                @error('end_time')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
        
                <div class="mb-6">
                <label for="comment" class="inline-block text-lg mb-2">
                    Comment
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="comment" rows="10"
                    placeholder="Include comments here...">{{old('comment')}}</textarea>
        
                @error('comment')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
        
                <div class="mb-6 flex justify-center ">
                    <button class="bg-black text-white py-2 px-4 hover:bg-bmw">
                        Create Appointment
                    </button>
                </div>
            </form>
        </x-card>
    </div>
</x-layout>  