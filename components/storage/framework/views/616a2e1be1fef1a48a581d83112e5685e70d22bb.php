<div>

    <!-- Validation Errors -->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    
	<form wire:submit.prevent="onUpdateHeader" wire:ignore>

		<div class="card">
			<div class="card-body">
				<table class="table settings">

						<tr>
							<td class="align-middle"><label for="logo" class="form-label"><?php echo e(__('Logo')); ?></label></td>
							<td class="align-middle">
								<div class="input-group">
									<span class="input-group-btn">
										<a data-input="logo" class="btn btn-primary mb-0 logo">
											<i class="fa fa-picture-o"></i> <?php echo e(__('Choose')); ?>

										</a>
									</span>
									<input id="logo" class="form-control ps-2" type="text" wire:model="logo">
								</div>
							</td>
						</tr>

						<tr>
							<td class="align-middle"><label for="favicon" class="form-label"><?php echo e(__('Favicon')); ?></label></td>
							<td class="align-middle">
								<div class="input-group">
									<span class="input-group-btn">
										<a data-input="favicon" class="btn btn-primary mb-0 favicon">
											<i class="fa fa-picture-o"></i> <?php echo e(__('Choose')); ?>

										</a>
									</span>
									<input id="favicon" class="form-control ps-2" type="text" wire:model="favicon">
								</div>
							</td>
						</tr>

						<tr>
							<td class="align-middle"><label for="sticky-header" class="form-label"><?php echo e(__('Sticky Header')); ?></label></td>
							<td class="align-middle">
								<div class="form-check form-switch ps-0">
									<input id="sticky-header" class="form-check-input ms-auto" type="checkbox" wire:model="sticky_header">
								</div>
							</td>
						</tr>

				</table>
			</div>
		</div>

		<div class="form-group mt-4">
			<button class="btn bg-gradient-primary float-end">
				<span>
					<div wire:loading wire:target="onUpdateHeader">
						<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.loading','data' => []]); ?>
<?php $component->withName('loading'); ?>
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
					<span><?php echo e(__('Save Changes')); ?></span>
				</span>
			</button>
		</div>

	</form>

</div>

<script src="<?php echo e(asset('components/public/vendor/laravel-filemanager/js/stand-alone-button.js')); ?>"></script>
<script>
(function( $ ) {
	"use strict";

    document.addEventListener('livewire:load', function () {

		jQuery('.logo, .favicon').filemanager('image', {prefix: '<?php echo e(url('/')); ?>/filemanager'});

		jQuery('input#logo').change(function() { 
			window.livewire.emit('onSetLogo', this.value)
		});

		jQuery('input#favicon').change(function() { 
			window.livewire.emit('onSetFavicon', this.value)
		});

		window.addEventListener('alert', event => {
			toastr[event.detail.type](event.detail.message);
		});
	
    });

})( jQuery );
</script><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/settings/header.blade.php ENDPATH**/ ?>