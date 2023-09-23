<x-layout>
    <div class="container flex flex-col items-center px-6 pt-16 mx-auto justify-center">
        
        <div class="container flex flex-col justify-center pt-6 mx-auto mt-10 space-y-12 md:space-y-0 md:space-x-10 md:flex-row">
            {{-- removed md:hover:border-blue-800 and replaced with  md:shadow-2xl --}}
            @unless (count($prescriptions) == 0)
                @foreach ($prescriptions as $prescription)
                    <x-prescription-card :prescription='$prescription' />
                @endforeach
                
            @endunless
        </div>
    </div>
    {{-- pagination controls --}}
    <div class="mt-28 mx-10 p-10">
        {{-- {{ $appointments->links() }} --}}
    </div>
</x-layout>