<?php use Illuminate\Support\Str; ?>

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

    <div class="flex flex-col md:flex-row gap-6 max-w-6xl mx-auto mt-8">
        <div class="card bg-white p-6 rounded-xl shadow-lg flex-1 animate-fade-in-left">
            <h2 class="text-xl font-semibold mb-4">Bienvenue, <?php echo e(Auth::user()->name); ?></h2>
            <p class="mb-2"><span class="font-medium">Nom :</span> <?php echo e(Auth::user()->name); ?></p>
            <p><span class="font-medium">Email :</span> <?php echo e(Auth::user()->email); ?></p>
        </div>

        <div class="card bg-white p-6 rounded-xl shadow-lg flex-1 animate-fade-in-right">
            <h2 class="text-xl font-semibold mb-4">Statistiques</h2>
            <p class="mb-2"><span class="font-medium">Nombre de posts :</span> </p>
            <p><span class="font-medium">Nombre de commentaires :</span> </p>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="<?php echo e(route('posts.create')); ?>"
            class="inline-block bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-600 transition">
            Créer un nouveau post
        </a>
    </div>


    <h1 class="text-3xl font-bold text-center mt-8 animate-fade-in-down">
        Bienvenue sur la page des posts
    </h1>

    <div class="grid grid-cols-2 gap-6 max-w-4xl mx-auto mt-8">
        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="p-6 border rounded-lg shadow hover:shadow-lg transition bg-white">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm text-gray-500">
                        Posté par <span class="font-semibold text-blue-600">
                            <a href="<?php echo e(route('posts.user', $post->user->id)); ?>" class="text-blue-600 hover:underline">
                                <?php echo e($post->user->name ?? 'Inconnu'); ?>

                            </a>
                        </span>
                    </span>
                    <span class="text-xs text-gray-400">
                        <?php echo e($post->created_at->diffForHumans()); ?>

                    </span>
                </div>

                <img src="<?php echo e($post->image ? asset('storage/' . $post->image) : asset('storage/default-post.png')); ?>"
     alt="Post Image" class="w-full h-48 object-cover rounded-lg mb-4">


                <h2 class="text-2xl font-semibold text-gray-800 mb-1">
                    <?php echo e($post->title); ?>

                </h2>

                <p class="text-gray-700 mb-2">
                    <?php echo e(Str::words($post->content, 15, '...')); ?>

                </p>
                <a href="<?php echo e(route('posts.show', $post)); ?>"
                    class="block text-blue-500 hover:text-blue-700 hover:underline transition">
                    Lire plus...
                </a>
                <div class="flex items-center space-x-2 mt-2">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">
                        Propriétaire : <?php echo e($post->user->name ?? 'Inconnu'); ?>

                    </span>
                </div>


            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-center mt-12 text-gray-500">Aucun post trouvé.</p>
        <?php endif; ?>
    </div>

    <div class="mt-8 max-w-2xl mx-auto">
        <?php echo e($posts->links()); ?>

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
<?php endif; ?>
<?php /**PATH C:\Users\gabia\Desktop\Laravel\apps\resources\views/posts/index.blade.php ENDPATH**/ ?>