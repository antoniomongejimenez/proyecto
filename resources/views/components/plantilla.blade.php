<x-guest-layout>
    <div class="container mx-auto mt-4">
        <div class="flex flex-1 flex-col items-center">
            @if (session()->has('error'))
                <div class="bg-red-100 rounded-lg p-4 mt-4 mb-4 text-sm text-red-700"
                    role="alert">
                    <span class="font-semibold">Error:</span>
                    {{ session('error') }}
                </div>
            @endif

            @if (session()->has('success'))
                <div class="bg-green-100 rounded-lg p-4 mt-4 mb-4 text-sm text-green-700"
                    role="alert">
                    {{ session('success') }}
                </div>
            @endif

            {{ $slot }}
        </div>
    </div>
</x-guest-layout>
