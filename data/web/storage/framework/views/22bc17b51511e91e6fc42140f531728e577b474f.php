<?php $__env->startSection('title', '仪表盘'); ?>

<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="my-6 md:my-9">
        <div class="space-y-6 md:space-y-0 md:grid md:grid-cols-2 xl:grid-cols-4 md:gap-x-4 xl:gap-x-8 md:gap-y-4 xl:gap-y-8">
            <div class="flex bg-white rounded p-4 space-x-4 shadow-custom">
                <i class="fas fa-images text-amber-500 text-5xl"></i>
                <div class="flex flex-col">
                    <p class="text-gray-700 text-sm">图片数量</p>
                    <p class="text-gray-800 font-semibold text-xl"><?php echo e($user->image_num); ?></p>
                </div>
            </div>
            <div class="flex bg-white rounded p-4 space-x-4 shadow-custom">
                <i class="fas fa-hdd text-red-500 text-5xl"></i>
                <div class="flex flex-col">
                    <p class="text-gray-700 text-sm">可用储存</p>
                    <p class="text-gray-800 font-semibold text-xl"><?php echo e(\App\Utils::formatSize(($user->capacity - $user->use_capacity) * 1024)); ?></p>
                </div>
            </div>
            <div class="flex bg-white rounded p-4 space-x-4 shadow-custom">
                <i class="fas fa-hdd text-green-500 text-5xl"></i>
                <div class="flex flex-col">
                    <p class="text-gray-700 text-sm">使用储存</p>
                    <p class="text-gray-800 font-semibold text-xl"><?php echo e(\App\Utils::formatSize($user->use_capacity * 1024)); ?></p>
                </div>
            </div>
            <div class="flex bg-white rounded p-4 space-x-4 shadow-custom">
                <i class="fas fa-hdd text-emerald-500 text-5xl"></i>
                <div class="flex flex-col">
                    <p class="text-gray-700 text-sm">总储存</p>
                    <p class="text-gray-800 font-semibold text-xl"><?php echo e(\App\Utils::formatSize($user->capacity * 1024)); ?></p>
                </div>
            </div>
        </div>

        <div class="flex md:mt-8 flex-col-reverse md:flex-row space-y-6 md:space-y-0 md:space-x-4">
            <div class="w-full mt-4 md:mt-0">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.box','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('title', null, []); ?> 可使用的策略 <?php $__env->endSlot(); ?>
                     <?php $__env->slot('content', null, []); ?> 
                        <?php if($strategies->isEmpty()): ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.no-data','data' => ['message' => '您所在的组还没有可用的储存策略，请联系管理员。']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('no-data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => '您所在的组还没有可用的储存策略，请联系管理员。']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php else: ?>
                            <div class="divide-y divide-solid">
                                <?php $__currentLoopData = $strategies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strategy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="w-full px-4 py-3">
                                        <p><?php echo e($strategy->name); ?></p>
                                        <span class="text-gray-700 text-sm"><?php echo e($strategy->intro); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
            <div class="flex flex-col md:w-[70%] xl:w-[40%] space-y-8">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.box','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('title', null, []); ?> 我的信息 <?php $__env->endSlot(); ?>
                     <?php $__env->slot('content', null, []); ?> 
                        <div class="px-4 py-3 space-y-3">
                            <div class="flex">
                                <p class="basis-1/3">姓名</p>
                                <p class="basis-2/3 truncate text-gray-800"><?php echo e($user->name); ?></p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/3">邮箱</p>
                                <p class="basis-2/3 truncate text-gray-800"><?php echo e($user->email); ?></p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/3">注册时间</p>
                                <p class="basis-2/3 truncate text-gray-800"><?php echo e($user->created_at); ?></p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/3">注册 IP</p>
                                <p class="basis-2/3 truncate text-gray-800"><?php echo e($user->registered_ip); ?></p>
                            </div>
                            <?php if(\App\Utils::config(\App\Enums\ConfigKey::IsUserNeedVerify) && !$user->email_verified_at): ?>
                                <p class="p-2 text-sm rounded bg-red-400 text-white">
                                    你的账号尚未激活，功能受限，请根据激活邮件指引激活账号，如果你没有收到邮件，请点击
                                    <a id="send-verify-email" href="javascript:void(0)" class="text-green-400">这里</a>
                                    重新发送。
                                </p>
                            <?php endif; ?>
                        </div>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.box','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('box'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('title', null, []); ?> 角色组信息 <?php $__env->endSlot(); ?>
                     <?php $__env->slot('content', null, []); ?> 
                        <div class="px-4 py-3 space-y-3">
                            <div class="flex">
                                <p class="basis-1/2">组名</p>
                                <p class="basis-1/2 truncate text-gray-800"><?php echo e($user->group ? $user->group->name : '系统默认组'); ?></p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">最大文件大小</p>
                                <p class="basis-1/2 truncate text-gray-800"><?php echo e(\App\Utils::formatSize($configs->get(\App\Enums\GroupConfigKey::MaximumFileSize) * 1024)); ?></p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">并发上传数量</p>
                                <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::ConcurrentUploadNum)); ?> 张</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">每分钟上传限制</p>
                                <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::LimitPerMinute)); ?> 张</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">每小时上传限制</p>
                                <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::LimitPerHour)); ?> 张</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">每天上传限制</p>
                                <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::LimitPerDay)); ?> 张</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">每周上传限制</p>
                                <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::LimitPerWeek)); ?> 张</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">每月上传限制</p>
                                <p class="basis-1/2 truncate text-gray-800"><?php echo e($configs->get(\App\Enums\GroupConfigKey::LimitPerMonth)); ?> 张</p>
                            </div>
                        </div>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        </div>
    </div>

    <?php if(\App\Utils::config(\App\Enums\ConfigKey::IsUserNeedVerify) && !$user->email_verified_at): ?>
        <?php $__env->startPush('scripts'); ?>
            <script>
                $('#send-verify-email').click(function () {
                    if (! $(this).attr('disabled')) {
                        $(this).text('发送中...').attr('disabled');
                        axios.post('<?php echo e(route('verification.send')); ?>').then(response => {
                            toastr.success('发送成功，请注意查收。');
                        }).catch(error => {
                            if (error.response.status === 429) {
                                toastr.error('操作频繁，请稍后再试');
                            }
                        }).finally(_ => {
                            $(this).text('这里').attr('disabled');
                        });
                    }
                });
            </script>
        <?php $__env->stopPush(); ?>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /home/site/resources/views/user/dashboard.blade.php ENDPATH**/ ?>