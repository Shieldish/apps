<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['message', 'type', 'bg']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['message', 'type', 'bg']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="<?php echo e($bg); ?> p-4 rounded-lg shadow-md mb-4">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <?php if($type === 'success'): ?>
                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4 -4m-4 4l4 4m-4 -4l-4 -4m8 0l-2 -2m0 0l-2 2m2 -2v6"></path>
                </svg>
            <?php elseif($type === 'error'): ?>
                <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            <?php endif; ?>
        </div>
        <div class="ml-3">
            <h3 class="text-lg font-semibold text-gray-800">
                <?php echo e($message); ?>

            </h3>
        </div>
    </div>
</div>  
<?php /**PATH C:\Users\gabia\Desktop\Laravel\apps\resources\views/components/flash.blade.php ENDPATH**/ ?>