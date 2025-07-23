<x-layout>
    <h1
        class="text-4xl font-extrabold text-center mt-8 bg-gradient-to-r from-purple-600 via-pink-500 to-red-500 
               text-white rounded-2xl px-6 py-4 shadow-2xl w-fit mx-auto animate-fade-in-down tracking-wide">
        Bienvenue sur la page des posts de
        <span class="ml-2 text-yellow-300 animate-bounce drop-shadow-xl">
            {{ $user->name }}
        </span> :
        <span class="ml-2 text-green-300 animate-spin-slow drop-shadow-lg">
            {{ $posts->total() }} Postes
        </span>
    </h1>

    <div class="max-w-6xl mx-auto mt-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($posts as $post)
                <div
                    class="group relative p-6 rounded-2xl shadow-lg bg-gradient-to-br from-white to-gray-100 border border-gray-200 
                           hover:shadow-2xl hover:scale-105 transform transition-all duration-300 ease-in-out">
                    <div class="flex items-center space-x-4">
                        <img src="https://i.pravatar.cc/150?img={{ rand(1, 70) }}"
                             alt="{{ $post->user->name }}"
                             class="w-12 h-12 rounded-full border-2 border-indigo-400 shadow-md group-hover:scale-110 transition">
                        <div>
                            <h2 class="text-lg font-bold text-gray-800 group-hover:text-indigo-600">{{ $post->user->name }}</h2>
                            <p class="text-sm text-gray-500">{{ $post->user->email }}</p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/default-post.png') }}"
                             alt="Post Image"
                             class="w-full h-48 object-cover rounded-xl shadow-lg mb-4 transition duration-300 hover:scale-105">
                        <h3 class="text-xl font-bold text-blue-600 group-hover:text-blue-800 transition">{{ $post->title }}</h3>
                        <p class="text-gray-700 mt-2 text-sm">{{ Str::limit($post->content, 150) }}</p>
                        <p class="text-gray-400 text-xs mt-3 italic">Créé {{ $post->created_at->diffForHumans() }}</p>
                    </div>

                    <div class="flex justify-between mt-6">
                        <a href="{{ route('posts.edit', $post) }}"
                           class="flex items-center text-indigo-600 hover:text-indigo-800 transition space-x-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24">
                                <path
                                    d="M11 17h2v2h-2v-2zm-3.5 0h2v2h-2v-2zm7 0h2v2h-2v-2zM4 7a2 2 0 002-2V3h12v4a2 2 0 
                                       01-2 2H6a2 2 0 01-2-2z"></path>
                            </svg>
                            <span class="text-sm font-semibold">Éditer</span>
                        </a>

                        <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Supprimer ce post ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="flex items-center text-red-500 hover:text-red-700 transition space-x-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 12v1a3 
                                           3 0 005.026 0V7a3 3 0 00-5.026 0v1a3 3 0 005.026 0zM14 7V4a2 2 0 
                                           00-2-2H8a2 2 0 00-2 2v3H5a1 1 0 00-.8 1.2l1.5 8A1.5 1.5 0 
                                           009 15.5h6A1.5 1.5 0 0015 14.5l1.5-8A1 1 0 0014 7z">
                                    </path>
                                </svg>
                                <span class="text-sm font-semibold">Supprimer</span>
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="bg-red-100 p-6 rounded-xl shadow text-center text-red-800 font-semibold">
                    Aucun article trouvé.
                </div>
            @endforelse
        </div>

        <div class="mt-10 text-center">
            {{ $posts->links() }}
        </div>
    </div>
</x-layout>
