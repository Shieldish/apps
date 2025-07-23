<x-layout>
    <!-- Enhanced Hero Header -->
    <div class="relative overflow-hidden bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 rounded-3xl mx-4 mt-8 mb-12">
        <!-- Animated background elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-10 -left-10 w-40 h-40 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute top-20 right-20 w-32 h-32 bg-pink-400/20 rounded-full blur-2xl animate-float-slow"></div>
            <div class="absolute bottom-10 left-1/3 w-24 h-24 bg-cyan-400/20 rounded-full blur-xl animate-float-reverse"></div>
        </div>
        
        <div class="relative px-8 py-16 text-center">
            <div class="inline-flex items-center space-x-3 mb-6">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl 
                          flex items-center justify-center shadow-2xl animate-bounce-gentle">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
            </div>
            
            <h1 class="text-5xl md:text-6xl font-black mb-4">
                <span class="bg-gradient-to-r from-cyan-400 via-violet-400 to-fuchsia-400 
                           bg-clip-text text-transparent animate-gradient-x">
                    Tableau de Bord
                </span>
            </h1>
            
            <p class="text-xl text-white/80 font-medium max-w-2xl mx-auto">
                Bienvenue <span class="text-yellow-300 font-bold">{{ Auth::user()->name }}</span>, 
                gérez votre contenu en toute simplicité
            </p>
            
            <!-- Decorative wave -->
            <div class="absolute bottom-0 left-0 right-0">
                <svg viewBox="0 0 1200 120" fill="none" class="w-full h-16">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="currentColor" class="text-white/10"/>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="currentColor" class="text-white/10"/>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="currentColor" class="text-white/20"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- Flash Message -->
    @if (session()->has('success'))
        <div class="mx-4 mb-8">
            <div class="bg-gradient-to-r from-green-500 to-emerald-600 text-white p-4 rounded-2xl shadow-lg 
                      border border-green-400/20 backdrop-blur-sm animate-slide-down">
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- Enhanced Dashboard Cards -->
    <div class="dashboard max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            
            <!-- Profile Card -->
            <div class="group relative bg-white rounded-3xl shadow-xl hover:shadow-2xl 
                      transform hover:-translate-y-2 transition-all duration-500 overflow-hidden
                      border border-gray-100 hover:border-indigo-200">
                
                <!-- Background Pattern -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/10 to-indigo-500/10 
                          rounded-full transform translate-x-16 -translate-y-16 group-hover:scale-150 
                          transition-transform duration-700"></div>
                
                <div class="relative p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl 
                                      flex items-center justify-center shadow-lg group-hover:scale-110 
                                      transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <span>Profil</span>
                        </h2>
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse shadow-lg"></div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-gray-50 rounded-2xl hover:bg-gray-100 
                                  transition-colors duration-300">
                            <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 
                                      rounded-xl flex items-center justify-center mr-4 shadow-md">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-600">Nom d'utilisateur</p>
                                <p class="text-lg font-bold text-gray-900">{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center p-4 bg-gray-50 rounded-2xl hover:bg-gray-100 
                                  transition-colors duration-300">
                            <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-500 
                                      rounded-xl flex items-center justify-center mr-4 shadow-md">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-600">Adresse email</p>
                                <p class="text-lg font-bold text-gray-900">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics Card -->
            <div class="group relative bg-white rounded-3xl shadow-xl hover:shadow-2xl 
                      transform hover:-translate-y-2 transition-all duration-500 overflow-hidden
                      border border-gray-100 hover:border-green-200">
                
                <!-- Background Pattern -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-400/10 to-emerald-500/10 
                          rounded-full transform translate-x-16 -translate-y-16 group-hover:scale-150 
                          transition-transform duration-700"></div>
                
                <div class="relative p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl 
                                      flex items-center justify-center shadow-lg group-hover:scale-110 
                                      transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <span>Statistiques</span>
                        </h2>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                            <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse" style="animation-delay: 0.2s"></div>
                            <div class="w-2 h-2 bg-purple-400 rounded-full animate-pulse" style="animation-delay: 0.4s"></div>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-gradient-to-r from-indigo-50 to-purple-50 
                                  rounded-2xl hover:from-indigo-100 hover:to-purple-100 transition-all duration-300 
                                  border border-indigo-100">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-500 
                                          rounded-xl flex items-center justify-center mr-4 shadow-md">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Articles publiés</p>
                                    <p class="text-xs text-gray-500">Total de vos publications</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-3xl font-black text-indigo-600">{{ Auth::user()->posts->count() }}</div>
                                <div class="text-xs text-green-600 font-medium flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                    </svg>
                                    Actif
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between p-4 bg-gradient-to-r from-pink-50 to-rose-50 
                                  rounded-2xl hover:from-pink-100 hover:to-rose-100 transition-all duration-300 
                                  border border-pink-100">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-gradient-to-br from-pink-500 to-rose-500 
                                          rounded-xl flex items-center justify-center mr-4 shadow-md">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Commentaires</p>
                                    <p class="text-xs text-gray-500">Interactions totales</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-3xl font-black text-pink-600">0</div>
                                <div class="text-xs text-gray-500 font-medium">Bientôt</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions Card -->
            <div class="group relative bg-white rounded-3xl shadow-xl hover:shadow-2xl 
                      transform hover:-translate-y-2 transition-all duration-500 overflow-hidden
                      border border-gray-100 hover:border-yellow-200">
                
                <!-- Background Pattern -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-yellow-400/10 to-orange-500/10 
                          rounded-full transform translate-x-16 -translate-y-16 group-hover:scale-150 
                          transition-transform duration-700"></div>
                
                <div class="relative p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl 
                                      flex items-center justify-center shadow-lg group-hover:scale-110 
                                      transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <span>Actions</span>
                        </h2>
                        <div class="w-3 h-3 bg-yellow-400 rounded-full animate-ping"></div>
                    </div>
                    
                    <div class="space-y-4">
                        <a href="{{ route('posts.create') }}"
                           class="group/btn flex items-center justify-between w-full p-4 
                                bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700
                                text-white rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 
                                transition-all duration-300">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-xl 
                                          flex items-center justify-center mr-4 group-hover/btn:rotate-12 
                                          transition-transform duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-lg">Créer un article</p>
                                    <p class="text-sm text-white/80">Nouveau contenu</p>
                                </div>
                            </div>
                            <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform duration-300" 
                                 fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        
                        <a href="#"
                           class="group/btn flex items-center justify-between w-full p-4 
                                bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800
                                text-white rounded-2xl shadow-lg hover:shadow-xl transform hover:scale-105 
                                transition-all duration-300">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-xl 
                                          flex items-center justify-center mr-4 group-hover/btn:rotate-12 
                                          transition-transform duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-lg">Modifier le profil</p>
                                    <p class="text-sm text-white/80">Paramètres compte</p>
                                </div>
                            </div>
                            <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform duration-300" 
                                 fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Recent Articles Section -->
        <div class="mt-16">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-4xl font-black text-gray-900 mb-2">Vos derniers articles</h2>
                    <p class="text-lg text-gray-600">Gérez et explorez votre contenu récent</p>
                </div>
                <div class="hidden md:flex items-center space-x-2">
                    <div class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"></div>
                    <div class="w-2 h-2 bg-purple-400 rounded-full animate-pulse" style="animation-delay: 0.2s"></div>
                    <div class="w-2 h-2 bg-pink-400 rounded-full animate-pulse" style="animation-delay: 0.4s"></div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                @forelse ($posts as $post)
                    <article class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl 
                                  transform hover:-translate-y-3 transition-all duration-500 overflow-hidden
                                  border border-gray-100 hover:border-indigo-200">
                        
                        <!-- Image Section -->
                        <div class="relative overflow-hidden">
                            <a href="{{ route('posts.show', $post) }}" class="block">
                                <div class="relative h-56 bg-gray-100">
                                    <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/default-post.png') }}"
                                         alt="Post Image" 
                                         class="w-full h-full object-cover transition-transform duration-700 
                                              group-hover:scale-110">
                                    
                                    <!-- Gradient overlay -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent 
                                              opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                    
                                    <!-- View indicator -->
                                    <div class="absolute inset-0 flex items-center justify-center opacity-0 
                                              group-hover:opacity-100 transition-all duration-500">
                                        <div class="bg-white/90 backdrop-blur-sm rounded-full p-4 
                                                  transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            
                            <!-- Status badge -->
                            <div class="absolute top-4 left-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                                           bg-green-100 text-green-800 border border-green-200 backdrop-blur-sm">
                                    <div class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></div>
                                    Publié
                                </span>
                            </div>
                        </div>

                        <!-- Content Section -->
                        <div class="p-6">
                            <a href="{{ route('posts.show', $post) }}" class="block mb-4">
                                <h3 class="text-xl font-bold text-gray-900 line-clamp-2 mb-3
                                         group-hover:text-indigo-600 transition-colors duration-300">
                                    {{ $post->title }}
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                                    {{ Str::limit($post->content, 120) }}
                                </p>
                            </a>
                            
                            <!-- Timestamp -->
                            <div class="flex items-center text-xs text-gray-500 mb-6">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"/>
                                </svg>
                                <span>{{ $post->created_at->diffForHumans() }}</span>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <a href="{{ route('posts.edit', $post) }}" 
                                   class="inline-flex items-center space-x-2 px-4 py-2 rounded-xl
                                        bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-sm font-medium
                                        hover:from-blue-600 hover:to-indigo-700 transition-all duration-300
                                        transform hover:scale-105 shadow-md hover:shadow-lg group/edit">
                                    <svg class="w-4 h-4 group-hover/edit:rotate-12 transition-transform duration-300" 
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                    <span>Éditer</span>
                                </a>

                                <form method="POST" action="{{ route('posts.destroy', $post) }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer l\'article &quot;{{ addslashes($post->title) }}&quot; ? Cette action est irréversible.')"
                                            class="inline-flex items-center space-x-2 px-4 py-2 rounded-xl
                                                   bg-gradient-to-r from-red-500 to-pink-600 text-white text-sm font-medium
                                                   hover:from-red-600 hover:to-pink-700 transition-all duration-300
                                                   transform hover:scale-105 shadow-md hover:shadow-lg group/delete">
                                        <svg class="w-4 h-4 group-hover/delete:animate-bounce" 
                                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                        <span>Supprimer</span>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Decorative elements -->
                        <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-indigo-400/10 to-purple-500/10 
                                  rounded-full transform translate-x-12 -translate-y-12 group-hover:scale-150 
                                  transition-transform duration-700"></div>
                    </article>
                @empty
                    <!-- Enhanced Empty State -->
                    <div class="col-span-full flex flex-col items-center justify-center py-24">
                        <div class="relative">
                            <!-- Animated background circles -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-40 h-40 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-full 
                                          animate-pulse opacity-50"></div>
                            </div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-32 h-32 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full 
                                          animate-pulse opacity-30" style="animation-delay: 0.5s"></div>
                            </div>
                            
                            <!-- Icon -->
                            <div class="relative w-32 h-32 bg-gradient-to-br from-gray-50 to-gray-100 rounded-full 
                                      flex items-center justify-center shadow-xl border border-gray-200">
                                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" 
                                          d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="text-center max-w-md mt-8">
                            <h3 class="text-3xl font-black text-gray-900 mb-4">Aucun article trouvé</h3>
                            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                                Commencez votre aventure de blogging en créant votre premier article. 
                                Partagez vos idées avec le monde !
                            </p>
                            
                            <a href="{{ route('posts.create') }}" 
                               class="inline-flex items-center px-8 py-4 rounded-2xl 
                                    bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bold text-lg
                                    hover:from-indigo-600 hover:to-purple-700 transition-all duration-300
                                    transform hover:scale-105 shadow-xl hover:shadow-2xl group/create">
                                <svg class="w-6 h-6 mr-3 group-hover/create:rotate-90 transition-transform duration-300" 
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                                Créer mon premier article
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Enhanced Pagination -->
            @if($posts->hasPages())
                <div class="mt-16 flex justify-center">
                    <div class="bg-white rounded-3xl shadow-xl border border-gray-200 p-4">
                        {{ $posts->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Enhanced Custom Animations -->
    <style>
        @keyframes gradient-x {
            0%, 100% { background-size: 200% 200%; background-position: left center; }
            50% { background-size: 200% 200%; background-position: right center; }
        }
        
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        @keyframes float-reverse {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(20px) rotate(-180deg); }
        }
        
        @keyframes bounce-gentle {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes slide-down {
            0% { transform: translateY(-100%); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .animate-gradient-x { animation: gradient-x 3s ease infinite; }
        .animate-float-slow { animation: float-slow 6s ease-in-out infinite; }
        .animate-float-reverse { animation: float-reverse 8s ease-in-out infinite; }
        .animate-bounce-gentle { animation: bounce-gentle 2s ease-in-out infinite; }
        .animate-slide-down { animation: slide-down 0.6s ease-out; }
        .animate-shimmer { animation: shimmer 2s infinite; }
        
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        /* Enhanced hover effects */
        .group:hover .group-hover\:scale-150 {
            transform: scale(1.5);
        }
        
        /* Custom gradients */
        .bg-gradient-to-br {
            background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
        }
        
        /* Backdrop blur fallback */
        .backdrop-blur-sm {
            backdrop-filter: blur(4px);
        }
        
        .backdrop-blur-lg {
            backdrop-filter: blur(16px);
        }
        
        /* Custom shadows */
        .shadow-2xl {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        /* Smooth transitions for all interactive elements */
        * {
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Enhanced focus states */
        button:focus, a:focus {
            outline: 2px solid #6366f1;
            outline-offset: 2px;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #6366f1, #8b5cf6);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #4f46e5, #7c3aed);
        }
    </style>
</x-layout>