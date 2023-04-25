<div>

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

			      <div class="card card-body blur shadow-blur">
			        <div class="row gx-4">

			          <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.profile.avatar')->html();
} elseif ($_instance->childHasBeenRendered('B5PCK4Y')) {
    $componentId = $_instance->getRenderedChildComponentId('B5PCK4Y');
    $componentTag = $_instance->getRenderedChildComponentTagName('B5PCK4Y');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('B5PCK4Y');
} else {
    $response = \Livewire\Livewire::mount('admin.profile.avatar');
    $html = $response->html();
    $_instance->logRenderedChild('B5PCK4Y', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

			        </div>
			      </div>

			      <div class="row py-4">
			        <div class="col-12">

			        	<div class="tab-content">

			        		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.profile.overview')->html();
} elseif ($_instance->childHasBeenRendered('v2inqcf')) {
    $componentId = $_instance->getRenderedChildComponentId('v2inqcf');
    $componentTag = $_instance->getRenderedChildComponentTagName('v2inqcf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('v2inqcf');
} else {
    $response = \Livewire\Livewire::mount('admin.profile.overview');
    $html = $response->html();
    $_instance->logRenderedChild('v2inqcf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

			        		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.profile.update-profile')->html();
} elseif ($_instance->childHasBeenRendered('FD7Cmw5')) {
    $componentId = $_instance->getRenderedChildComponentId('FD7Cmw5');
    $componentTag = $_instance->getRenderedChildComponentTagName('FD7Cmw5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FD7Cmw5');
} else {
    $response = \Livewire\Livewire::mount('admin.profile.update-profile');
    $html = $response->html();
    $_instance->logRenderedChild('FD7Cmw5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

			        		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.profile.change-password')->html();
} elseif ($_instance->childHasBeenRendered('RoA5RRO')) {
    $componentId = $_instance->getRenderedChildComponentId('RoA5RRO');
    $componentTag = $_instance->getRenderedChildComponentTagName('RoA5RRO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('RoA5RRO');
} else {
    $response = \Livewire\Livewire::mount('admin.profile.change-password');
    $html = $response->html();
    $_instance->logRenderedChild('RoA5RRO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

					    </div>

			        </div>
				  </div>


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

</div>

<script src="<?php echo e(asset('components/public/vendor/laravel-filemanager/js/stand-alone-button.js')); ?>"></script>
<script>
(function( $ ) {
	"use strict";
	
    document.addEventListener('livewire:load', function () {

		jQuery('.edit-avatar').filemanager('image', {prefix: '<?php echo e(url('/')); ?>/filemanager'});

		jQuery('input#avatar').change(function() { 
			window.livewire.emit('onSetAvatar', this.value)
		});

		window.addEventListener('alert', event => {
			toastr[event.detail.type](event.detail.message);
		});
	
    });

})( jQuery );
</script><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/profile.blade.php ENDPATH**/ ?>