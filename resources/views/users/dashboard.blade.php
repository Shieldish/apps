<x-layout>
    <h1 class="text-3xl font-bold text-center mt-8 animate-fade-in-down">Bienvenue sur le tableau de bord</h1>

    <div class="dashboard flex flex-col md:flex-row gap-8 mt-8">
        <div class="card bg-white p-6 rounded-xl shadow-lg flex-1 animate-fade-in-left">
            <h2 class="text-xl font-semibold flex items-center gap-2 mb-4">
                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                Profil
            </h2>
            <p class="mb-2"><span class="font-medium">Nom :</span> {{ Auth::user()->name }}</p>
            <p><span class="font-medium">Email :</span> {{ Auth::user()->email }}</p>
        </div>

        <div class="card bg-white p-6 rounded-xl shadow-lg flex-1 animate-fade-in-up">
            <h2 class="text-xl font-semibold flex items-center gap-2 mb-4">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M11 17a2 2 0 104 0 2 2 0 00-4 0zm-7-2a7 7 0 1114 0A7 7 0 014 15z" /></svg>
                Statistiques
            </h2>
            <ul class="space-y-2">
                <li class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h4l2-2h4a2 2 0 012 2v12a2 2 0 01-2 2z" /></svg>
                    Articles publiés :
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2"></path><path d="M15 3h-6a2 2 0 00-2 2v2a2 2 0 002 2h6a2 2 0 002-2V5a2 2 0 00-2-2z"></path></svg>
                    Commentaires :
                </li>
            </ul>
        </div>

        <div class="card bg-white p-6 rounded-xl shadow-lg flex-1 animate-fade-in-right">
            <h2 class="text-xl font-semibold flex items-center gap-2 mb-4">
                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4" /></svg>
                Actions rapides
            </h2>
            <a href="#" class="btn inline-flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition duration-200 animate-bounce">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4" /></svg>
                Créer un article
            </a>
            <a href="#" class="btn inline-flex items-center gap-2 bg-gray-200 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-gray-300 transition duration-200 mt-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15.232 5.232l3.536 3.536M9 11l6 6M3 21h18" /></svg>
                Modifier le profil
            </a>
        </div>
    </div>

    <style>
        @keyframes fade-in-down {
            0% { opacity: 0; transform: translateY(-20px);}
            100% { opacity: 1; transform: translateY(0);}
        }
        .animate-fade-in-down { animation: fade-in-down 0.7s ease; }
        @keyframes fade-in-left {
            0% { opacity: 0; transform: translateX(-20px);}
            100% { opacity: 1; transform: translateX(0);}
        }
        .animate-fade-in-left { animation: fade-in-left 0.7s ease; }
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px);}
            100% { opacity: 1; transform: translateY(0);}
        }
        .animate-fade-in-up { animation: fade-in-up 0.7s ease; }
        @keyframes fade-in-right {
            0% { opacity: 0; transform: translateX(20px);}
            100% { opacity: 1; transform: translateX(0);}
        }
        .animate-fade-in-right { animation: fade-in-right 0.7s ease; }
    </style>
</x-layout>