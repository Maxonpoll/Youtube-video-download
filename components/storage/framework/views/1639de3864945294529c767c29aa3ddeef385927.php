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
    
	<form wire:submit.prevent="onUpdateNotice">

		<!-- Begin:GDPR Privacy Notice -->
		<div class="col-12 mb-4">
			<div class="card">
				<div class="card-body">

					<div class="form-group">
						
						<div class="d-flex">
							<label for="ads-area-1" class="form-label"><?php echo e(__('GDPR Privacy Notice')); ?></label>
							<div class="form-check form-switch ps-3">
								<input class="form-check-input ms-auto" type="checkbox" wire:model="status">
							</div>
						</div>

						<div class="col">
							<textarea class="form-control" id="ads-area-1" rows="8" wire:model="notice"></textarea>
						</div>
					</div>
					
					<div class="row">
						<div class="input-group">

							<div class="col-12 col-md-4 pe-md-4 mb-3">
								<div class="input-group">
									<button class="btn bg-gradient-secondary mb-0" type="button"><?php echo e(__('Align')); ?></button>
									<select name="align" class="form-control ps-3" wire:model="align">
										<option value="text-start"><?php echo e(__('Left')); ?></option>
										<option value="text-end"><?php echo e(__('Right')); ?></option>
										<option value="text-center"><?php echo e(__('Center')); ?></option>
									</select>
								</div>
							</div>

							<div class="col-12 col-md-4 pe-md-4 mb-3">
								<div class="input-group">
									<button class="btn bg-gradient-secondary mb-0" type="button"><?php echo e(__('Background Color')); ?></button>
									<select class="form-control ps-3" wire:model="background">
										<optgroup label="<?php echo e(__('Default Backgrounds')); ?>">
											<option value="bg-default"><?php echo e(__('Default')); ?></option>
											<option value="bg-primary"><?php echo e(__('Primary')); ?></option>
											<option value="bg-secondary"><?php echo e(__('Secondary')); ?></option>
											<option value="bg-info"><?php echo e(__('Info')); ?></option>
											<option value="bg-success"><?php echo e(__('Success')); ?></option>
											<option value="bg-danger"><?php echo e(__('Danger')); ?></option>
											<option value="bg-warning"><?php echo e(__('Warning')); ?></option>
										</optgroup>
										<optgroup label="Gradient Backgrounds">
											<option value="bg-gradient-default"><?php echo e(__('Default')); ?></option>
											<option value="bg-gradient-primary"><?php echo e(__('Primary')); ?></option>
											<option value="bg-gradient-secondary"><?php echo e(__('Secondary')); ?></option>
											<option value="bg-gradient-info"><?php echo e(__('Info')); ?></option>
											<option value="bg-gradient-success"><?php echo e(__('Success')); ?></option>
											<option value="bg-gradient-danger"><?php echo e(__('Danger')); ?></option>
											<option value="bg-gradient-warning"><?php echo e(__('Warning')); ?></option>
										</optgroup>
									</select>
								</div>
							</div>

							<div class="col-12 col-md-4">
								<div class="input-group">
									<button class="btn bg-gradient-secondary mb-0" type="button"><?php echo e(__('Enable Button')); ?></button>
									<select class="form-control ps-3" wire:model="button">
										<option value="1"><?php echo e(__('Yes')); ?></option>
										<option value="0"><?php echo e(__('No')); ?></option>
									</select>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End:GDPR Privacy Notice -->

<div class="form-group mt-3">
			<button class="btn bg-gradient-primary float-end">
				<span>
					<div wire:loading wire:target="onUpdateNotice">
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

<script>
(function( $ ) {
	"use strict";

	document.addEventListener('livewire:load', function () {
		
		window.addEventListener('alert', event => {
			toastr[event.detail.type](event.detail.message);
		});
		
	});

})( jQuery );
</script><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/settings/gdpr.blade.php ENDPATH**/ ?>