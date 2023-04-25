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
    
	<form wire:submit.prevent="onUpdateADS">

		<div class="row">
			<!-- Begin:Ads Area 1 -->
			<div class="col-12 col-lg-6 mb-4">
				<div class="card">
					<div class="card-body">

						<div class="form-group">

							<div class="d-flex">
								<label for="ads-area-1" class="form-label"><?php echo e(__('Ads Area 1')); ?> </label>

								<div class="form-check form-switch ps-3">
									<input class="form-check-input ms-auto" type="checkbox" wire:model="area1_status">
								</div>
							</div>

							<div class="col">
								<textarea class="form-control" id="ads-area-1" wire:model="area1" rows="5"></textarea>
							</div>

						</div>

						<div class="row">
							<div class="input-group">

								<div class="col-12 col-md-6 pe-md-4">
									<div class="input-group">
										<button class="btn btn-outline-secondary mb-0" type="button"><?php echo e(__('Align')); ?></button>
										<select name="align" class="form-control ps-3" wire:model="area1_align">
											<option value="left"><?php echo e(__('Left')); ?></option>
											<option value="right"><?php echo e(__('Right')); ?></option>
											<option value="center"><?php echo e(__('Center')); ?></option>
										</select>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<button class="btn btn-outline-secondary mb-0" type="button"><?php echo e(__('Margin')); ?></button>
										<input type="number" class="form-control ps-3" wire:model="area1_margin" value="10">
										<span class="input-group-text"><?php echo e(__('px')); ?></span>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- End:Ads Area 1 -->

			<!-- Begin:Ads Area 2 -->
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-body">

						<div class="form-group">
							<div class="d-flex">
								<label for="ads-area-2" class="form-label"><?php echo e(__('Ads Area 2')); ?> </label>

								<div class="form-check form-switch ps-3">
									<input class="form-check-input ms-auto" type="checkbox" wire:model="area2_status">
								</div>
							</div>

							<div class="col">
								<textarea class="form-control" id="ads-area-2" rows="5" wire:model="area2"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="input-group">

								<div class="col-12 col-md-6 pe-md-4">
									<div class="input-group">
										<button class="btn btn-outline-secondary mb-0" type="button"><?php echo e(__('Align')); ?></button>
										<select name="align" class="form-control ps-3" wire:model="area2_align">
											<option value="left"><?php echo e(__('Left')); ?></option>
											<option value="right"><?php echo e(__('Right')); ?></option>
											<option value="center"><?php echo e(__('Center')); ?></option>
										</select>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<button class="btn btn-outline-secondary mb-0" type="button"><?php echo e(__('Margin')); ?></button>
										<input type="number" class="form-control ps-3" value="10" wire:model="area2_margin">
										<span class="input-group-text"><?php echo e(__('px')); ?></span>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- End:Ads Area 2 -->

			<!-- Begin:Ads Area 3 -->
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-body">

						<div class="form-group">
							<div class="d-flex">
								<label for="ads-area-3" class="form-label"><?php echo e(__('Ads Area 3')); ?> </label>

								<div class="form-check form-switch ps-3">
									<input class="form-check-input ms-auto" type="checkbox" wire:model="area3_status">
								</div>
							</div>

							<div class="col">
								<textarea class="form-control" id="ads-area-3" rows="5" wire:model="area3"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="input-group">

								<div class="col-12 col-md-6 pe-md-4">
									<div class="input-group">
										<button class="btn btn-outline-secondary mb-0" type="button"><?php echo e(__('Align')); ?></button>
										<select name="align" class="form-control ps-3" wire:model="area3_align">
											<option value="left"><?php echo e(__('Left')); ?></option>
											<option value="right"><?php echo e(__('Right')); ?></option>
											<option value="center"><?php echo e(__('Center')); ?></option>
										</select>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<button class="btn btn-outline-secondary mb-0" type="button"><?php echo e(__('Margin')); ?></button>
										<input type="number" class="form-control ps-3" value="10" wire:model="area3_margin">
										<span class="input-group-text"><?php echo e(__('px')); ?></span>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- End:Ads Area 3 -->

			<!-- Begin:Ads Area 4 -->
			<div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-body">

						<div class="form-group">
							<div class="d-flex">
								<label for="ads-area-4" class="form-label"><?php echo e(__('Ads Area 4')); ?> </label>

								<div class="form-check form-switch ps-3">
									<input class="form-check-input ms-auto" type="checkbox" wire:model="area4_status">
								</div>
							</div>

							<div class="col">
								<textarea class="form-control" id="ads-area-4" rows="5" wire:model="area4"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="input-group">

								<div class="col-12 col-md-6 pe-md-4">
									<div class="input-group">
										<button class="btn btn-outline-secondary mb-0" type="button"><?php echo e(__('Align')); ?></button>
										<select name="align" class="form-control ps-3" wire:model="area4_align">
											<option value="left"><?php echo e(__('Left')); ?></option>
											<option value="right"><?php echo e(__('Right')); ?></option>
											<option value="center"><?php echo e(__('Center')); ?></option>
										</select>
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="input-group">
										<button class="btn btn-outline-secondary mb-0" type="button"><?php echo e(__('Margin')); ?></button>
										<input type="number" class="form-control ps-3" value="10" wire:model="area4_margin">
										<span class="input-group-text"><?php echo e(__('px')); ?></span>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- End:Ads Area 4 -->

			<div class="col-12 mt-3">
				<div class="card">
					<div class="card-body">
						<h6 class="badge bg-gradient-primary"><?php echo e(__('Enable or Disable Ads on the specified page')); ?></h6>
						<table class="table">
							<tbody>
								<tr>
									<th><?php echo e(__('Page Slug')); ?></th>
									<th><?php echo e(__('Page Type')); ?></th>
									<th><?php echo e(__('Status')); ?></th>
								</tr>
								<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td class="align-middle py-3"><?php echo e($page['slug']); ?></td>
										<td class="align-middle"><?php echo e($page['type']); ?></td>
										<td class="align-middle">
											<div class="form-check form-switch ps-0">
												<input class="form-check-input ms-auto" type="checkbox" wire:model="pages.<?php echo e($index); ?>.ads_status">
											</div>
										</td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</tbody>
						</table>

					</div>
				</div>
			</div>

			<div class="form-group mt-4">
				<button class="btn bg-gradient-primary float-end">
					<span>
						<div wire:loading wire:target="onUpdateADS">
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
</script><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/settings/advertisement.blade.php ENDPATH**/ ?>