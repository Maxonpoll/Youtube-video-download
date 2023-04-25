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
					<h6><?php echo e(__('reCAPTCHA v3')); ?> (<a href="https://y2load.com/" target="_blank" class="text-gradient text-primary"><?php echo e(__('How to get Google reCAPTCHA v3 Keys')); ?></a>)</h6>
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
							<td class="align-middle"><label for="facebook_cookies" class="form-label"><?php echo e(__('fr=1KTw0ee3wkqLsn6V6.AWXdQ-RUS9RCckbedTOS5lgnQeo.BhNfv1.qK.AAA.0.0.BhNfv1.AWWIb93YKCo; sb=migqYejCru7G3Gzi5lSreVZ-; datr=migqYUXCBJXkDl8WGU5fRQHH; c_user=100028675263657; xs=50%3AXl609Xc1MdT9GQ%3A2%3A1630152885%3A-1%3A5901%3A%3AAcUOq-QlNfIRzEjODbvZj_JQOgfq5_cK8URzntwTvQ; spin=r.1004354087_b.trunk_t.1630927960_s.1_v.2_')); ?></label></td>
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
							<td class="align-middle"><label for="instagram_cookies" class="form-label"><?php echo e(__('ig_did=4C43A03B-422C-485E-934F-69019CBFEBB1; ig_nrcb=1; csrftoken=qjuKmoeWuPiVMLo4n1fFVKniobNtGNfA; mid=YJIt4wALAAFGI3gtB8mH_6FZnBvb; ds_user_id=47954311609; sessionid=47954311609%3ABKXmgMqgEUfqs2%3A20; fbm_124024574287414=base_domain=.instagram.com; shbid="12302\05447954311609\0541662288425:01f7f9ea78f3e9747df64c582b7e89ce038d5124eb19265f2dbf9242db5dd44357b2a6f7"; shbts="1630752425\05447954311609\0541662288425:01f7fcefa95965c2253dd0d40defdfb4c03537db85404f669cbbf9ce8d3198c2a0e48295"; rur="CLN\0544795431160…5MnExV3NYamcwYXJWUTNzY0l1b2R5dWw3SlR6UmdzZzdNUGdmM2Foek00ZmFIOU8yZ0dnVzV3aDhrSDlwUjNycUFOQWh1TkxzbDJDS2tNZE9PN0hVVWwxdE41QTd0akJzS1RSUVdsdW5ZT0dPTWRmdlJhUTlpRG1ldDRvV0YxIiwib2F1dGhfdG9rZW4iOiJFQUFCd3pMaXhuallCQU1rSlVDdGVqSjZzbTdnREpmZk5aQ0I5dThhejZDcGtrNkJrWkFTRnNUeFR3czFsMEFNT1pCY09QTEU5TTRUSlpDY3hBWkF2bmp1cUxsWkI4SmlKYklIZXBuQVRaQ01hMlIxd0RFalNSWkNiWkJCb3Zxb2lPdFFSRFpDWTBHbkd6WDl3cVNuOVpCUkd1NTJSaTFzaWxScXE5SEZ3VzUwZFJyclI1eEZPS3VSZUg3bCIsImFsZ29yaXRobSI6IkhNQUMtU0hBMjU2IiwiaXNzdWVkX2F0IjoxNjMwOTI4MTM4fQ')); ?></label></td>
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
<?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/settings/api-keys.blade.php ENDPATH**/ ?>