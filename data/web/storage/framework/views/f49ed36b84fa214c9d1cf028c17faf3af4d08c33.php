<!-- Strategies dropdown -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('trigger', null, []); ?> 
        <button type="button" class="bg-gray-800 flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open strategies menu</span>
            <div class="h-8 w-8 rounded-full flex items-center justify-center bg-white">
                <i class="fas fa-server text-gray-900"></i>
            </div>
            <span class="px-2 sm:block hidden" id="strategy-selected" data-id="0">获取中...</span>
        </button>
     <?php $__env->endSlot(); ?>

         <?php $__env->slot('content', null, []); ?> 
            <div id="strategies">
            <?php $__currentLoopData = $_group->strategies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strategy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['dataId' => ''.e($strategy->id).'','href' => 'javascript:void(0)','@click' => 'open = false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-id' => ''.e($strategy->id).'','href' => 'javascript:void(0)','@click' => 'open = false']); ?><?php echo e($strategy->name); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        let defaultStrategy = <?php echo e(Auth::check() ? Auth::user()->configs->get('default_strategy') : 0); ?> || (localStorage.getItem('strategy') || 0);
        let setStrategy = function (id) {
            let isSelected = false;
            $('#strategies a').each(function () {
                if (parseInt($(this).data('id')) === parseInt(id)) {
                    localStorage.setItem('strategy', id)
                    $('#strategy-selected').text($(this).text()).data('id', id);
                    isSelected = true;

                    <?php if(Auth::check()): ?>
                        if (defaultStrategy != id) {
                            axios.put('<?php echo e(route('settings.strategy.set')); ?>', {id: id}).then(response => {
                                if (! response.data.status) {
                                    toastr.error(response.data.message);
                                }
                            });
                        }
                    <?php endif; ?>
                }
            });
            if (! isSelected) {
                let $first = $('#strategies a:first-child');
                localStorage.setItem('strategy', $first.data('id'))
                $('#strategy-selected').text($first.text()).data('id', $first.data('id'));
            }
        };

        setStrategy(defaultStrategy);

        $('#strategies a').click(function () {
            setStrategy($(this).data('id'))
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/site/resources/views/layouts/strategies.blade.php ENDPATH**/ ?>