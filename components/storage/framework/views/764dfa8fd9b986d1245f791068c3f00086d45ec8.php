<div class="card h-100 tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab" wire:ignore.self>
	<div class="card-header pb-0 p-3">
		<h6 class="mb-0"><?php echo e(__('Overview')); ?></h6>
	</div>
	<div class="card-body p-3">

		<p class="text-sm"><?php echo e($profile->bio); ?></p>
		<hr class="horizontal gray-light my-4" />
		<ul class="list-group">
			<li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark"><?php echo e(__('Full Name')); ?>:</strong> <?php echo e($profile->fullname); ?></li>
			<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"><?php echo e(__('Position')); ?>:</strong> <?php echo e($profile->position); ?></li>
			<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"><?php echo e(__('Mobile')); ?>:</strong> <?php echo e($profile->phone); ?></li>
			<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"><?php echo e(__('Email')); ?>:</strong> <?php echo e($profile->email); ?></li>
			<li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"><?php echo e(__('Address')); ?>:</strong> <?php echo e($profile->address); ?></li>

			<?php if( $profile->social_status == true): ?>
				<?php if( $socials != null ): ?>

					<li class="list-group-item border-0 ps-0 pb-0">
						<strong class="text-dark text-sm">Social:</strong> &nbsp;
						<?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<a class="btn btn-<?php echo e($social['name']); ?> btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
								<i class="fab fa-<?php echo e($social['name']); ?> fa-lg" aria-hidden="true"></i>
							</a>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</li>

				<?php endif; ?>
			<?php endif; ?>

		</ul>

	</div>
</div>
<?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/profile/overview.blade.php ENDPATH**/ ?>