@props(['appointment'])

<a href="/appointments/{{ $appointment->id }}" class="flex flex-col items-left p-6 space-y-6 border md:w-1/4 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 md:hover:shadow-2xl duration-300 ...">
    <h5 class="max-w-sm text-2xl font-bold text-center md:hover:text-bmw md:text-3xl md:text-left">
        {{ $appointment->start_time }}
    </h5>
    {{-- <BiDotsVerticalRounded />  --}}
    <p class="mx-w-sm text-2xl text-center md:text-left">
        {{ $appointment->end_time }}
    </p>
    <p class="border flex justify-center mr-64 bg-black text-white pb-1 mx-w-sm text-2xl text-center hover:bg-bmw md:text-left">
        {{ substr($appointment->comments, -14) }}
    </p>
    <button class="mx-w-sm pt-6 text-center md:text-center">
        View
    </button>
</a>