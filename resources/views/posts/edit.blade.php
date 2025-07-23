<x-layout>

 
    <div class="max-w-2xl mx-auto mt-8 flex items-center">
        <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M3 12h18M3 12l6-6m-6 6l6 6" />
        </svg>
        <a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline">Back to Posts</a>
    </div>

    <h1 class="text-3xl font-bold text-center mt-8 animate-fade-in-down">Modifier le post</h1>

    <div class="max-w-2xl mx-auto mt-8 bg-white p-8 rounded-lg shadow">
        <form method="POST" action="{{ route('posts.update', $post) }}" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Titre
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') ring-2 ring-red-500 @enderror" id="title" type="text" name="title" value="{{ old('title', $post->title) }}" required>
                @error('title')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                    Contenu
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 @error('content') ring-2 ring-red-500 @enderror" id="content" name="content" rows="8" required>{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Modifier le post</button>
        </form>
    </div>



</x-layout>