<x-layout>
    <div class="max-w-md mx-auto mt-8">
        <h1 class="text-3xl font-bold text-center mb-6">Post Details</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">

            <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('images/default-post.png') }}"
     alt="Post Image" class="w-full h-48 object-cover rounded-lg mb-4">

            <h2 class="text-2xl font-semibold text-blue-600">{{ $post->title }}</h2>
            <div class="animate-fade-in bg-gray-200 p-2 rounded-lg shadow-sm hover:shadow-md transition duration-200">
                <p class="text-gray-700 text-sm">{{ $post->content }}</p>
            </div>
            <p class="text-gray-500 text-sm mt-4">Posted by {{ $post->user->name }} on {{ $post->created_at->format('F j, Y, g:i a') }}</p>
        </div>
        <div class="mt-6 text-center">
            <a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline">Back to Posts</a>
        </div>
    </div>
</x-layout>

