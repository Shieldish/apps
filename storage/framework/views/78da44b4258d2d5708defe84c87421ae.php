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
    <div class="max-w-md mx-auto mt-8">
        <h1 class="text-3xl font-bold text-center mb-6">Post Details</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">

            <img src="<?php echo e($post->image ? asset('storage/' . $post->image) : asset('storage/default-post.png')); ?>"
     alt="Post Image" class="w-full h-48 object-cover rounded-lg mb-4">

            <h2 class="text-2xl font-semibold text-blue-600"><?php echo e($post->title); ?></h2>
            <div class="animate-fade-in bg-gray-200 p-2 rounded-lg shadow-sm hover:shadow-md transition duration-200">
                <p class="text-gray-700 text-sm"><?php echo e($post->content); ?></p>
            </div>
            <p class="text-gray-500 text-sm mt-4">Posted by <?php echo e($post->user->name); ?> on <?php echo e($post->created_at->format('F j, Y, g:i a')); ?></p>
        </div>
        <div class="mt-6 text-center">
            <a href="<?php echo e(route('posts.index')); ?>" class="text-blue-600 hover:underline">Back to Posts</a>
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
<?php endif; ?>

<?php /**PATH C:\Users\gabia\Desktop\Laravel\apps\resources\views/posts/show.blade.php ENDPATH**/ ?>