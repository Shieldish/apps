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
    <h1 class="text-3xl font-bold mb-6 text-center">Login</h1>

    <form method="POST" action="<?php echo e(route('login')); ?>" class="max-w-md mx-auto bg-white p-8 rounded shadow">
        <?php echo csrf_field(); ?>

        
        <div class="mb-4">
            <label for="email" class="block text-gray-700 mb-2">Email:</label>
            <input id="email" type="email" name="email" required autofocus
                value="<?php echo e(old('email')); ?>"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ring-2 ring-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        
        <div class="mb-6 relative">
            <label for="password" class="block text-gray-700 mb-2">Password:</label>
            <input id="password" type="password" name="password" required
                class="w-full px-3 py-2 border border-gray-300 rounded pr-10 focus:outline-none focus:ring-2 focus:ring-blue-500 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> ring-2 ring-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            
            
            <span class="absolute top-9 right-3 cursor-pointer text-gray-600" onclick="togglePasswordVisibility()">
                👁️
            </span>

            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        
        <div class="mb-6 flex items-center">
            <input id="remember" type="checkbox" name="remember" class="mr-2" <?php echo e(old('remember') ? 'checked' : ''); ?>>
            <label for="remember" class="text-gray-700 select-none">Remember Me</label>
        </div>

        
        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Login</button>

        
        <div class="mt-4 text-center">
            <a href="<?php echo e(route('register')); ?>" class="text-blue-600 hover:underline">Don't have an account? Register</a>
        </div>
        <div class="mt-2 text-center">
            <a href="#" class="text-blue-600 hover:underline">Forgot your password?</a>
            
        </div>
    </form>

    
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        }
    </script>
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
<?php /**PATH C:\Users\gabia\Desktop\Laravel\apps\resources\views/auth/login.blade.php ENDPATH**/ ?>