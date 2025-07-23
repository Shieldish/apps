@php use Illuminate\Support\Str; @endphp

<x-layout>

    @if (session()->has('success'))
        <x-flash message="{{ session('success') }}" type="success" bg="bg-green-200"></x-flash>
    @endif

    <div class="flex flex-col md:flex-row gap-6 max-w-6xl mx-auto mt-8">
        <div class="card bg-white p-6 rounded-xl shadow-lg flex-1 animate-fade-in-left">
            <h2 class="text-xl font-semibold mb-4">Bienvenue, {{ Auth::user()->name }}</h2>
            <p class="mb-2"><span class="font-medium">Nom :</span> {{ Auth::user()->name }}</p>
            <p><span class="font-medium">Email :</span> {{ Auth::user()->email }}</p>
        </div>

        <div class="card bg-white p-6 rounded-xl shadow-lg flex-1 animate-fade-in-right">
            <h2 class="text-xl font-semibold mb-4">Statistiques</h2>
            <p class="mb-2"><span class="font-medium">Nombre de posts :</span> {{-- {{ $postCount }} --}}</p>
            <p><span class="font-medium">Nombre de commentaires :</span> {{-- {{ $commentCount }} --}}</p>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('posts.create') }}"
            class="inline-block bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-600 transition">
            Créer un nouveau post
        </a>
    </div>


    <h1 class="text-3xl font-bold text-center mt-8 animate-fade-in-down">
        Bienvenue sur la page des posts
    </h1>

    <div class="grid grid-cols-2 gap-6 max-w-4xl mx-auto mt-8">
        @forelse ($posts as $post)
            <div class="p-6 border rounded-lg shadow hover:shadow-lg transition bg-white">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm text-gray-500">
                        Posté par <span class="font-semibold text-blue-600">
                            <a href="{{ route('posts.user', $post->user->id) }}" class="text-blue-600 hover:underline">
                                {{ $post->user->name ?? 'Inconnu' }}
                            </a>
                        </span>
                    </span>
                    <span class="text-xs text-gray-400">
                        {{ $post->created_at->diffForHumans() }}
                    </span>
                </div>

                <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/default-post.png') }}"
     alt="Post Image" class="w-full h-48 object-cover rounded-lg mb-4">


                <h2 class="text-2xl font-semibold text-gray-800 mb-1">
                    {{ $post->title }}
                </h2>

                <p class="text-gray-700 mb-2">
                    {{ Str::words($post->content, 15, '...') }}
                </p>
                <a href="{{ route('posts.show', $post) }}"
                    class="block text-blue-500 hover:text-blue-700 hover:underline transition">
                    Lire plus...
                </a>
                <div class="flex items-center space-x-2 mt-2">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">
                        Propriétaire : {{ $post->user->name ?? 'Inconnu' }}
                    </span>
                </div>


            </div>
        @empty
            <p class="text-center mt-12 text-gray-500">Aucun post trouvé.</p>
        @endforelse
    </div>

    <div class="mt-8 max-w-2xl mx-auto">
        {{ $posts->links() }}
    </div>

</x-layout>
