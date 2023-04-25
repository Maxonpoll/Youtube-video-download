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
    
	<form wire:submit.prevent="onUpdateAPIKeys" class="row">

		<!-- Begin:reCAPTCHA v3 -->
		<div class="col-12 mb-4">
			<div class="card">
				<div class="card-body">
					<h6><?php echo e(__('reCAPTCHA v3')); ?> (<a href="https://y2load.com" target="_blank" class="text-gradient text-primary"><?php echo e(__('How to get Google reCAPTCHA v3 Keys')); ?></a>)</h6>
					<hr>
					<table class="table settings">
						<tr>
							<td class="align-middle"><label for="username" class="form-label"><?php echo e(__('Site Key')); ?></label></td>
							<td class="align-middle">
								<input type="text" class="form-control" wire:model="recaptcha_public_api_key">
							</td>
						</tr>

						<tr>
							<td class="align-middle"><label for="password" class="form-label"><?php echo e(__('Secret Key')); ?></label></td>
							<td class="align-middle">
								<input type="text" class="form-control" wire:model="recaptcha_private_api_key">
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!-- End:reCAPTCHA v3 -->

		<!-- Begin:Twitter -->

		<!-- End:Twitter -->

		<!-- Begin:Facebook -->
		<div class="col-12 mb-4">
			<div class="card">
				<div class="card-body">
					<h6><?php echo e(__('Facebook')); ?> (<a href="https://y2load.com" target="_blank" class="text-gradient text-primary"><?php echo e(__('How to get Facebook Cookies')); ?></a>)</h6>
					<hr>
					<table class="table settings">
						<tr>
							<td class="align-middle"><label for="facebook_cookies" class="form-label"><?php echo e(__('Cookies')); ?></label></td>
							<td class="align-middle">
								<textarea class="form-control" wire:model="facebook_cookies" rows="5"></textarea>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!-- End:Facebook -->

		<!-- Begin:Instagram -->
		<div class="col-12 mb-4">
			<div class="card">
				<div class="card-body">
					<h6><?php echo e(__('Instagram')); ?> (<a href="https://y2load.com" target="_blank" class="text-gradient text-primary"><?php echo e(__('How to get Instagram Cookies')); ?></a>)</h6>
					<hr>
					<table class="table settings">
						<tr>
							<td class="align-middle"><label for="instagram_cookies" class="form-label"><?php echo e(__('Cookies')); ?></label></td>
							<td class="align-middle">
								<textarea class="form-control" wire:model="instagram_cookies" rows="5"></textarea>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<!-- End:Instagram -->

		<div class="form-group">
			<button class="btn bg-gradient-primary float-end">
				<span>
					<div wire:loading wire:target="onUpdateAPIKeys">
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
</script>
<?php /**PATH C:\xampp\htdocs\laravel\y2load\components\resources\views/livewire/admin/settings/api-keys.blade.php ENDPATH**/ ?>