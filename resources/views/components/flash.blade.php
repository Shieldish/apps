@props(['message', 'type', 'bg'])
<div class="{{ $bg }} p-4 rounded-lg shadow-md mb-4">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            @if ($type === 'success')
                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4m-4 4l4 4m-4 -4l-4 -4m8 0l-2 -2m0 0l-2 2m2 -2v6"></path>
                </svg>
            @elseif ($type === 'error')
                <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            @endif
        </div>
        <div class="ml-3">
            <h3 class="text-lg font-semibold text-gray-800">
                {{ $message }}
            </h3>
        </div>
    </div>
</div>  
