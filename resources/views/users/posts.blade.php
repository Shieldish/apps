<x-layout>
    <h1 class="text-3xl font-bold text-center mt-8 animate-fade-in-down bg-green-500 rounded-lg p-2 text-white shadow-lg w-fit mx-auto">
        Bienvenue sur la page des posts de
        <span class="animate-pulse">{{ $user->name }} :</span> <span class="animate-spin">{{ $posts->total() }} Postes</span>
    </h1>
    <div class="max-w-4xl mx-auto mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($posts as $post)
                <div class="p-6 border rounded-lg shadow hover:shadow-lg transition bg-white">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="w-10 h-10 rounded-full" ">
                        </div>
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-gray-800">{{ $post->user->name }}</h2>
                            <p class="text-sm text-gray-600">{{ $post->user->email }}</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-xl font-semibold text-blue-600">{{ $post->title }}</h3>
                        <p class="text-gray-700 mt-2">{{ Str::limit($post->content, 150) }}</p>
                        <p class="text-gray-500 text-sm mt-4">Créé il y a {{ $post->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="flex justify-end space-x-2 mt-4">
                        <a href="{{ route('posts.edit', $post) }}" class="text-blue-500 hover:text-blue-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M11 17h2v2h-2v-2zm-3.5 0h2v2h-2v-2zm7 0h2v2h-2v-2zM4 7a2 2 0 002-2V3h12v4a2 2 0 01-2 2H6a2 2 0 01-2-2z">
                                </path>
                            </svg>
                            Éditer
                        </a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-red-500 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 12v1a3 3 0 005.026 0V7a3 3 0 00-5.026 0v1a3 3 0 005.026 0V7a3 3 0 00-5.026 0v1a3 3 0 005.026 0zM14 7V4a2 2 0 00-2-2H8a2 2 0 00-2 2v3H5a1 1 0 00-.8 1.2l1.5 8A1.5 1.5 0 009 15.5h6A1.5 1.5 0 0015 14.5l1.5-8A1 1 0 0014 7z">
                                    </path>
                                </svg>
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <p class="text-gray-700">Aucun article.</p>
                </div>
            @endforelse
        </div>
        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>
</x-layout>

