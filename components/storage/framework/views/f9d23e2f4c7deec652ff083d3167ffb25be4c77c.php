<div class="card h-100 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" wire:ignore.self>
	<div class="card-header pb-0 p-3">
		<h6 class="mb-0"><?php echo e(__('Update Profile')); ?></h6>
	</div>
	<div class="card-body p-3">

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

		<form wire:submit.prevent="onUpdateProfile">
			<div class="form-group">
				<label for="fullname" class="form-control-label"><?php echo e(__('Full Name')); ?></label>
				<input class="form-control <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" wire:model="fullname" id="fullname">
			</div>

			<div class="form-group">
				<label for="position" class="form-control-label"><?php echo e(__('Position')); ?></label>
				<input class="form-control <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" wire:model="position" id="position">
			</div>

			<div class="form-group">
				<label for="phone" class="form-control-label"><?php echo e(__('Phone')); ?></label>
				<input class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" wire:model="phone" id="phone">
			</div>

			<div class="form-group">
				<label for="email" class="form-control-label"><?php echo e(__('Email')); ?></label>
				<input class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" wire:model="email" id="email" required>
			</div>

			<div class="form-group">
				<label for="address" class="form-control-label"><?php echo e(__('Address')); ?></label>
				<input class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" wire:model="address" id="address">
			</div>

			<div class="form-group">
				<label for="bio" class="form-control-label"><?php echo e(__('Description')); ?></label>
				<input class="form-control <?php $__errorArgs = ['bio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" wire:model="bio" id="bio">
			</div>
			
			<div class="form-group">

				<div class="d-flex">
					<label for="social" class="form-label"><?php echo e(__('Social')); ?></label>
					<div class="form-check form-switch ps-3">
						<input class="form-check-input ms-auto" type="checkbox" wire:model="social_status">
					</div>
				</div>

				<?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								<select class="form-control" wire:model="socials.<?php echo e($index); ?>.name">
									<option value="facebook"><?php echo e(__('Facebook')); ?></option>
									<option value="twitter"><?php echo e(__('Twitter')); ?></option>
									<option value="instagram"><?php echo e(__('Instagram')); ?></option>
									<option value="youtube"><?php echo e(__('Youtube')); ?></option>
									<option value="linkedin"><?php echo e(__('Linkedin')); ?></option>
									<option value="skype"><?php echo e(__('Skype')); ?></option>
									<option value="github"><?php echo e(__('Github')); ?></option>
									<option value="behance"><?php echo e(__('Behance')); ?></option>
									<option value="dribbble"><?php echo e(__('Dribble')); ?></option>
									<option value="flickr"><?php echo e(__('Flickr')); ?></option>
									<option value="pinterest"><?php echo e(__('Pinterest')); ?></option>
									<option value="tumblr"><?php echo e(__('Tumblr')); ?></option>
									<option value="vimeo"><?php echo e(__('Vimeo')); ?></option>
									<option value="vk"><?php echo e(__('VK')); ?></option>
									<option value="telegram"><?php echo e(__('Telegram')); ?></option>
									<option value="reddit"><?php echo e(__('Reddit')); ?></option>
									<option value="whatsapp"><?php echo e(__('WhatsApp')); ?></option>
								</select>
								<?php $__errorArgs = [ 'socials.' . $index . '.name' ];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="URL" wire:model="socials.<?php echo e($index); ?>.url">
								<?php $__errorArgs = [ 'socials.' . $index . '.url' ];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
						</div>

						<?php if( $index == 0 ): ?>

							<div class="col-md-2">
								<button class="btn text-white btn-info w-100" wire:click.prevent="addSocial( <?php echo e($i); ?> )"><?php echo e(__('Add new')); ?></button>
							</div>

						<?php else: ?>
							<div class="col-md-2">
								<button class="btn btn-danger w-100" wire:click.prevent="onDeleteSocial(<?php echo e($social['id']); ?>)"><?php echo e(__('Remove')); ?></button>
							</div>
						<?php endif; ?>

					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				<?php $__currentLoopData = $inputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								<select wire:model="name.<?php echo e($value); ?>" class="form-control">
									<option value selected style="display:none;"><?php echo e(__('Choose a social...')); ?></option>
									<option value="facebook"><?php echo e(__('Facebook')); ?></option>
									<option value="twitter"><?php echo e(__('Twitter')); ?></option>
									<option value="instagram"><?php echo e(__('Instagram')); ?></option>
									<option value="youtube"><?php echo e(__('Youtube')); ?></option>
									<option value="linkedin"><?php echo e(__('Linkedin')); ?></option>
									<option value="skype"><?php echo e(__('Skype')); ?></option>
									<option value="github"><?php echo e(__('Github')); ?></option>
									<option value="behance"><?php echo e(__('Behance')); ?></option>
									<option value="dribbble"><?php echo e(__('Dribble')); ?></option>
									<option value="flickr"><?php echo e(__('Flickr')); ?></option>
									<option value="pinterest"><?php echo e(__('Pinterest')); ?></option>
									<option value="tumblr"><?php echo e(__('Tumblr')); ?></option>
									<option value="vimeo"><?php echo e(__('Vimeo')); ?></option>
									<option value="vk"><?php echo e(__('VK')); ?></option>
									<option value="telegram"><?php echo e(__('Telegram')); ?></option>
									<option value="reddit"><?php echo e(__('Reddit')); ?></option>
									<option value="whatsapp"><?php echo e(__('WhatsApp')); ?></option>
								</select>
								<?php $__errorArgs = [ 'name.' . $value ];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="URL" wire:model="url.<?php echo e($value); ?>">
								<?php $__errorArgs = [ 'url.' . $value ];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
						</div>
						<div class="col-md-2">
							<button class="btn btn-danger w-100" wire:click.prevent="removeSocial(<?php echo e($key); ?>)"><?php echo e(__('Remove')); ?></button>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>

			<div class="form-group text-end mb-0">
				<button class="btn bg-gradient-primary">
					<span>
						<div wire:loading wire:target="onUpdateProfile">
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
</div>

<?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/profile/update-profile.blade.php ENDPATH**/ ?>