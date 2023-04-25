<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(__('Y2load Dashboard')); ?></title>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.headerAssets','data' => []]); ?>
<?php $component->withName('admin.headerAssets'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <?php echo \Livewire\Livewire::styles(); ?>


</head>
<body class="g-sidenav-show bg-gray-100">

    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main">
        
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.sidenav-header','data' => []]); ?>
<?php $component->withName('admin.sidenav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

        <hr class="horizontal dark mt-0">

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.sidebar','data' => []]); ?>
<?php $component->withName('admin.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        
    </aside>
    
    <main class="main-content mt-1 border-radius-lg">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="false">
             <div class="container-fluid py-1 px-3">

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.breadcrumbs','data' => []]); ?>
<?php $component->withName('admin.breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.navright','data' => []]); ?>
<?php $component->withName('admin.navright'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

             </div>
           </nav>
          <!-- End Navbar -->

            <div class="container-fluid py-4">
              <div class="row">
                <div class="col">

                        <?php switch(true):

                            case ( Route::is('page-translations') ): ?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.pages.translations.showlist', ['page_id' => request()->route('page_id') ])->html();
} elseif ($_instance->childHasBeenRendered('VrBHcCN')) {
    $componentId = $_instance->getRenderedChildComponentId('VrBHcCN');
    $componentTag = $_instance->getRenderedChildComponentTagName('VrBHcCN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VrBHcCN');
} else {
    $response = \Livewire\Livewire::mount('admin.pages.translations.showlist', ['page_id' => request()->route('page_id') ]);
    $html = $response->html();
    $_instance->logRenderedChild('VrBHcCN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                <?php break; ?>

                           <?php case ( Route::is('create-page-translations') ): ?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.pages.translations.create', ['page_id' => request()->route('page_id') ])->html();
} elseif ($_instance->childHasBeenRendered('MY05g1Q')) {
    $componentId = $_instance->getRenderedChildComponentId('MY05g1Q');
    $componentTag = $_instance->getRenderedChildComponentTagName('MY05g1Q');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MY05g1Q');
} else {
    $response = \Livewire\Livewire::mount('admin.pages.translations.create', ['page_id' => request()->route('page_id') ]);
    $html = $response->html();
    $_instance->logRenderedChild('MY05g1Q', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                <?php break; ?>

                           <?php case ( Route::is('edit-page-translations') ): ?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.pages.translations.edit', ['trans_id' => request()->route('trans_id')])->html();
} elseif ($_instance->childHasBeenRendered('k6ujq7j')) {
    $componentId = $_instance->getRenderedChildComponentId('k6ujq7j');
    $componentTag = $_instance->getRenderedChildComponentTagName('k6ujq7j');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('k6ujq7j');
} else {
    $response = \Livewire\Livewire::mount('admin.pages.translations.edit', ['trans_id' => request()->route('trans_id')]);
    $html = $response->html();
    $_instance->logRenderedChild('k6ujq7j', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                <?php break; ?>

                            <?php default: ?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.pages.showlist')->html();
} elseif ($_instance->childHasBeenRendered('OwAEHmq')) {
    $componentId = $_instance->getRenderedChildComponentId('OwAEHmq');
    $componentTag = $_instance->getRenderedChildComponentTagName('OwAEHmq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OwAEHmq');
} else {
    $response = \Livewire\Livewire::mount('admin.pages.showlist');
    $html = $response->html();
    $_instance->logRenderedChild('OwAEHmq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php endswitch; ?>

                </div>
              </div>
            </div>
            
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.footer','data' => []]); ?>
<?php $component->withName('admin.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    </main>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.footerAssets','data' => []]); ?>
<?php $component->withName('admin.footerAssets'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <?php echo \Livewire\Livewire::scripts(); ?>


</body>
</html><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/admin/pages.blade.php ENDPATH**/ ?>