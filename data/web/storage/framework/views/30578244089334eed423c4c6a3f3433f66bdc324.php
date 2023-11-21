<header class="transition-all duration-300 w-full h-14 bg-gray-700 text-white flex justify-center fixed top-0 z-[9] shadow-[0_15px_10px_-15px_rgba(0,0,0,0.3)]">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.container','data' => ['class' => 'w-full px-6 flex justify-between items-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full px-6 flex justify-between items-center']); ?>
        <div class="flex justify-start items-center max-w-[70%]">
            <a href="javascript:void(0)" @click="$store.sidebar.toggle()" class="w-6 h-6 p-4 rounded-full sm:hidden -ml-1 mr-4 flex justify-center items-center">
                <i class="fas fa-bars text-xl"></i>
            </a>
            <a href="" class="text-xl truncate" id="header-title"><?php echo $__env->yieldContent('title', \App\Utils::config(\App\Enums\ConfigKey::AppName)); ?></a>
        </div>
        <div class="flex justify-end items-center space-x-4">
            <?php echo $__env->renderWhen($_is_notice, 'layouts.notice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
            <?php echo $__env->renderWhen($_group->strategies->isNotEmpty(), 'layouts.strategies', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
            <?php echo $__env->make('layouts.user-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</header>
<?php /**PATH /home/site/resources/views/layouts/header.blade.php ENDPATH**/ ?>