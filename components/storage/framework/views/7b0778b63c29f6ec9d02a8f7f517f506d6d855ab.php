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
    
	<form wire:submit.prevent="onUpdate">

		<!-- Begin:Insert Header -->
		<div class="col-12 mb-4">
			<div class="card">
				<div class="card-body">

					<div class="form-group">

						<div class="d-flex">
							<label for="insert-header" class="form-label"><?php echo e(__('Insert Header')); ?> </label>

							<div class="form-check form-switch ps-3">
								<input class="form-check-input ms-auto" type="checkbox" wire:model="header_status" checked>
							</div>
						</div>

						<div class="col">
							<textarea class="form-control" id="insert-header" wire:model="insert_header" rows="8"></textarea>
						</div>
					</div>
					<small><?php echo e(__('Add custom scripts inside HEAD tag. You need to have')); ?> <code class="font-weight-bold"><?php echo e(__('SCRIPT')); ?></code> <?php echo e(__('or')); ?> <code class="font-weight-bold"><?php echo e(__('STYLE')); ?></code> <?php echo e(__('tag around scripts.')); ?></small>

				</div>
			</div>
		</div>
		<!-- End:Insert Header -->

		<!-- Begin:Insert Footer -->
		<div class="col-12">
			<div class="card">
				<div class="card-body">

					<div class="form-group">
						
						<div class="d-flex">
							<label for="insert_footer" class="form-label"><?php echo e(__('Insert Footer')); ?> </label>

							<div class="form-check form-switch ps-3">
								<input class="form-check-input ms-auto" type="checkbox" wire:model="footer_status" checked>
							</div>
						</div>

						<div class="col">
							<textarea class="form-control" id="insert_footer" wire:model="insert_footer" rows="8"></textarea>
						</div>
					</div>
					<small><?php echo e(__('Add custom scripts you might want to be loaded in the footer of your website. You need to have')); ?> <code class="font-weight-bold"><?php echo e(__('SCRIPT')); ?></code> <?php echo e(__('or')); ?> <code class="font-weight-bold"><?php echo e(__('STYLE')); ?></code> <?php echo e(__('tag around scripts.')); ?></small>

				</div>
			</div>
		</div>
		<!-- End:Insert Footer -->

		<div class="form-group mt-4">
			<button class="btn bg-gradient-primary float-end">
				<span>
					<div wire:loading wire:target="onUpdate">
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
</script><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/settings/advanced.blade.php ENDPATH**/ ?>