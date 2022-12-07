<x-app-layout>
    <div class="bg-white xl:w-1/2 mx-auto rounded-lg shadow-md mt-4 overflow-hidden">
        <div class="bg-purple-800 text-white"style="background: {{ $announcement->titleColor }}">
            <h3 class="text-2xl text-center font-bold px-4 py-4">{{ $announcement->titleText }}</h3>
        </div>
        <div class="text-gray-600 px-5 py-5">

            @if ($announcement->imageUpload)
                <img src="{{ asset($announcement->imageUpload) }}" alt="image" class="mx-auto">
            @endif

            @if ($announcement->imageUploadFilePond)
                <img src="{{ asset($announcement->imageUploadFilePond) }}" alt="image" class="mx-auto">
            @endif

            <div class="content mt-4">{!! $announcement->content !!}</div>

            <p class="mt-6 mx-auto">
                <a href="{{ $announcement->buttonLink }}" class="bg-purple-800 text-white inline-block rounded-xl font-semibold px-8 py-4" style="background: {{ $announcement->buttonColor }}">{{ $announcement->buttonText }}</a>
            </p>
        </div>
    </div>
</x-app-layout>
