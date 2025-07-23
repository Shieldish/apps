<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h1 class="text-3xl font-bold text-center mt-8 animate-fade-in-down">Bienvenue sur le tableau de bord</h1>

    <?php if(session()->has('success')): ?>
        <?php if (isset($component)) { $__componentOriginal5168fdb0c14fd91c6598264bc4be63f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.flash','data' => ['message' => ''.e(session('success')).'','type' => 'success','bg' => 'bg-green-200']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => ''.e(session('success')).'','type' => 'success','bg' => 'bg-green-200']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2)): ?>
<?php $attributes = $__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2; ?>
<?php unset($__attributesOriginal5168fdb0c14fd91c6598264bc4be63f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5168fdb0c14fd91c6598264bc4be63f2)): ?>
<?php $component = $__componentOriginal5168fdb0c14fd91c6598264bc4be63f2; ?>
<?php unset($__componentOriginal5168fdb0c14fd91c6598264bc4be63f2); ?>
<?php endif; ?>
    <?php endif; ?>

    <div class="dashboard flex flex-col md:flex-row gap-8 mt-8">
        <!-- Profil -->
        <div class="card bg-white p-6 rounded-xl shadow-lg flex-1 animate-fade-in-left">
            <h2 class="text-xl font-semibold flex items-center gap-2 mb-4">
                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Profil
            </h2>
            <p class="mb-2"><span class="font-medium">Nom :</span> <?php echo e(Auth::user()->name); ?></p>
            <p><span class="font-medium">Email :</span> <?php echo e(Auth::user()->email); ?></p>
        </div>

        <!-- Statistiques -->
        <div class="card bg-white p-6 rounded-xl shadow-lg flex-1 animate-fade-in-up">
            <h2 class="text-xl font-semibold flex items-center gap-2 mb-4">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M11 17a2 2 0 104 0 2 2 0 00-4 0zm-7-2a7 7 0 1114 0A7 7 0 014 15z" />
                </svg>
                Statistiques
            </h2>
            <ul class="space-y-2">
                <li class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h4l2-2h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                    </svg>
                    Articles publiés : <?php echo e(Auth::user()->posts->count()); ?>

                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path
                            d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2"></path>
                        <path
                            d="M15 3h-6a2 2 0 00-2 2v2a2 2 0 002 2h6a2 2 0 002-2V5a2 2 0 00-2-2z"></path>
                    </svg>
                    Commentaires :
                </li>
            </ul>
        </div>

        <!-- Actions rapides -->
        <div class="card bg-white p-6 rounded-xl shadow-lg flex-1 animate-fade-in-right">
            <h2 class="text-xl font-semibold flex items-center gap-2 mb-4">
                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M12 4v16m8-8H4" />
                </svg>
                Actions rapides
            </h2>
            <a href="<?php echo e(route('posts.create')); ?>"
                class="btn inline-flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition duration-200 animate-bounce">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 4v16m8-8H4" />
                </svg>
                Créer un article
            </a>
            <a href="#"
                class="btn inline-flex items-center gap-2 bg-gray-200 text-gray-800 px-4 py-2 rounded-lg shadow hover:bg-gray-300 transition duration-200 mt-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M15.232 5.232l3.536 3.536M9 11l6 6M3 21h18" />
                </svg>
                Modifier le profil
            </a>
        </div>
    </div>

    <!-- Styles animations -->
    <style>
        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.7s ease;
        }

        @keyframes fade-in-left {
            0% {
                opacity: 0;
                transform: translateX(-20px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-fade-in-left {
            animation: fade-in-left 0.7s ease;
        }

        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.7s ease;
        }

        @keyframes fade-in-right {
            0% {
                opacity: 0;
                transform: translateX(20px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-fade-in-right {
            animation: fade-in-right 0.7s ease;
        }
    </style>

    <!-- Liste des articles -->
    <div class="mt-8">
        <h2 class="text-3xl font-bold">Vos derniers articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
            <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition transform hover:scale-105">
                    <a href="<?php echo e(route('posts.show', $post)); ?>" class="block">
                        <img src="<?php echo e($post->image ? asset('storage/' . $post->image) : asset('images/default-post.png')); ?>"
                            alt="Post Image" class="w-full h-48 object-cover rounded-lg mb-4">
                        <h3 class="text-2xl font-semibold text-blue-600"><?php echo e($post->title); ?></h3>
                        <p class="text-gray-700 mt-2"><?php echo e(Str::limit($post->content, 150)); ?></p>
                        <p class="text-gray-500 text-sm mt-4">Créé il y a <?php echo e($post->created_at->diffForHumans()); ?></p>
                    </a>
                    <div class="flex justify-end space-x-2 mt-4">
                        <a href="<?php echo e(route('posts.edit', $post)); ?>" class="text-blue-500 hover:text-blue-700">
                            <svg class="w-5 h-5 inline" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path
                                    d="M11 17h2v2h-2v-2zm-3.5 0h2v2h-2v-2zm7 0h2v2h-2v-2zM4 7a2 2 0 002-2V3h12v2a2 2 0 002 2h1v12a2 2 0 01-2 2H5a2 2 0 01-2-2V7h1zM16 9H8v2h8V9zm0 4H8v2h8v-2z">
                                </path>
                            </svg>
                            Éditer
                        </a>
                        <!-- Bouton Supprimer -->
                        <form method="POST" action="<?php echo e(route('posts.destroy', $post)); ?>" class="inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-500 hover:text-red-700"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer l\'article &quot;<?php echo e(addslashes($post->title)); ?>&quot; ? Cette action est irréversible.')">
                                <svg class="w-5 h-5 inline" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <p class="text-gray-700">Aucun article.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            <?php echo e($posts->links()); ?>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\gabia\Desktop\Laravel\apps\resources\views/users/dashboard.blade.php ENDPATH**/ ?>