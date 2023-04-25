<div>

	<div class="card">
		<div class="card-body">

			<div class="table-responsive">
				<table class="table align-items-center mb-0">
					<tbody>
						<tr>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Source')); ?></th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?php echo e(__('Thumbnail')); ?></th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Link')); ?></th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Date')); ?></th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Client IP')); ?></th>
							<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Country')); ?></th>
						</tr>

						<?php if( $downloads->isEmpty() == false ): ?>

						<?php $__currentLoopData = $downloads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $download): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<tr>
							<td class="align-middle">
								<p class="text-xs font-weight-bold mb-0"><?php echo e($download->source); ?></p>
							</td>
							<td class="align-middle">
								<p class="text-xs font-weight-bold mb-0">
									<img src="<?php echo e($download->thumbnail); ?>" alt="thumbnail" class="avatar avatar-xl border-radius-lg shadow">
								</p>
							</td>
							<td class="align-middle">
								<p class="text-xs font-weight-bold mb-0">

									<div class="form-group">
										<a href="<?php echo e($download->link); ?>" target="_blank" class="input-group">
											<input type="text" value="<?php echo e($download->link); ?>" class="form-control cursor-pointer" readonly>
											<span class="input-group-text"><i class="fas fa-external-link-alt"></i></span>
										</a>
									</div>

								</p>
							</td>
							<td class="align-middle">
								<p class="text-xs font-weight-bold mb-0"><?php echo e($download->created_at); ?></p>
							</td>
							<td class="align-middle">
								<p class="text-xs font-weight-bold mb-0"><?php echo e($download->client_ip); ?></p>
							</td>
							<td class="align-middle">
								<p class="text-xs font-weight-bold mb-0"><?php echo e(__('None')); ?></p>
							</td>
						</tr>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<?php else: ?>

						<tr>
							<td class="align-middle"><?php echo e(__('No record found')); ?></td>
						</tr>

						<?php endif; ?>

					</tbody>
				</table>
			</div>

			<div class="float-end">
				<!-- begin:pagination -->
				<?php echo e($downloads->links()); ?>

				<!-- begin:pagination -->
			</div>	

		</div>
	</div>
	
</div>
<?php /**PATH C:\xampp\htdocs\laravel\y2load\components\resources\views/livewire/admin/downloads/showlist.blade.php ENDPATH**/ ?>