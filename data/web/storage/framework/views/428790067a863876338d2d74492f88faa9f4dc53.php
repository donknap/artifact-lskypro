<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="keywords" content="<?php echo e(\App\Utils::config(\App\Enums\ConfigKey::SiteKeywords)); ?>"/>
    <meta name="description" content="<?php echo e(\App\Utils::config(\App\Enums\ConfigKey::SiteDescription)); ?>"/>

    <title><?php echo e(\App\Utils::config(\App\Enums\ConfigKey::AppName)); ?></title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/common.css')); ?>?t=20220817">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>?t=20220817">
</head>
<body class="font-sans antialiased overflow-hidden">
<div class="min-h-screen bg-gray-100" x-data x-cloak>
    <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div
        x-transition:enter="ease-in-out duration-500"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in-out duration-500"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="z-[9] bg-black bg-opacity-75 transition-opacity h-full w-full fixed inset-0 sm:hidden"
        x-show="$store.sidebar.open"
        @click.outside="$store.sidebar.open = false"
        @close.stop="$store.sidebar.open = false"
        @click="$store.sidebar.toggle()"
        style="display: none"
    >

    </div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.container','data' => ['class' => 'flex flex-col overflow-y-auto absolute pb-14 top-14 left-0 right-0 bottom-0 transition-all duration-300 min-h-screen h-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex flex-col overflow-y-auto absolute pb-14 top-14 left-0 right-0 bottom-0 transition-all duration-300 min-h-screen h-full']); ?>
        <?php echo e($slot); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
</body>
<!-- Scripts -->
<script src="<?php echo e(asset('js/app.js')); ?>?t=20220817"></script>
<?php echo $__env->make('common.notice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    // 开关组件默认值
    let setSwitch = function (e) {
        if (e.checked) {
            $(e).closest('.switch').find('input[type=hidden]').remove();
        } else {
            $(e).before('<input type="hidden" name="'+e.name+'" value="0" />');
        }
    }
    $('.switch input[type=checkbox]').each(function () {
        setSwitch(this);
    }).click(function () {
        setSwitch(this);
    });
</script>
<?php if(file_exists(public_path('js/custom.js'))): ?>
<script src="<?php echo e(asset('js/custom.js')); ?>"></script>
<?php endif; ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
</html>
<?php /**PATH /home/site/resources/views/layouts/app.blade.php ENDPATH**/ ?>