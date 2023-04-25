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
    
	<?php

		$google_fonts = json_decode($google_fonts, true);

		$timezones = json_decode($timezones, true);

	?>

	<form wire:submit.prevent="onUpdateGeneral">
		<div class="row">
			<div class="col-12 mb-3">
				<div class="card">
					<div class="card-body">
						<table class="table settings">

							<tr>
								<td class="align-middle"><label for="wave-animation-status" class="form-label"><?php echo e(__('Enable Wave Animation')); ?></label></td>
								<td class="w-75">
									<div class="form-switch ps-0">
										<input id="wave-animation-status" class="form-check-input ms-auto" type="checkbox" wire:model="wave_animation_status">
									</div>
								</td>
							</tr>

							<tr>
								<td class="align-middle"><label for="parallax-image" class="form-label"><?php echo e(__('Parallax Image')); ?></label></td>
								<td class="align-middle">
									<div class="input-group">
										<span class="input-group-btn">
											<a id="parallax-image" data-input="parallax-thumbnail" data-preview="parallax-preview" class="btn btn-primary mb-0 parallax-image">
												<i class="fa fa-picture-o"></i> <?php echo e(__('Choose')); ?>

											</a>
										</span>
										<input id="parallax-thumbnail" class="form-control ps-2" type="text" wire:model="parallax_image">
									</div>

									<div class="screenshot w-10 my-2">
										<div class="img-fluid shadow border-radius-xl overlay-preview" style="
											<?php if( $overlay_type == 'solid' ): ?>

											background: <?php echo e($solid_color); ?>;opacity: <?php echo e($opacity); ?>;

											<?php elseif( $overlay_type == 'gradient' ): ?>

											background: <?php echo e($gradient_first_color); ?>;
											background: -moz-linear-gradient( <?php echo e($gradient_position); ?>, <?php echo e($gradient_first_color); ?>, <?php echo e($gradient_second_color); ?>  );
											background: -webkit-linear-gradient( <?php echo e($gradient_position); ?>, <?php echo e($gradient_first_color); ?>, <?php echo e($gradient_second_color); ?> );
											background: linear-gradient( <?php echo e($gradient_position); ?>, <?php echo e($gradient_first_color); ?>, <?php echo e($gradient_second_color); ?> );
											opacity: <?php echo e($opacity); ?>;

											<?php endif; ?>

										"></div>
										<img class="img-fluid shadow border-radius-xl parallax-preview" src="<?php echo e($parallax_image); ?>" style="filter: blur(<?php echo e($blur); ?>px);">
									</div>

								</td>
							</tr>

							<tr>
								<td class="align-middle"><label for="social" class="form-label"><?php echo e(__('Overlay Type')); ?></label></td>
								<td class="align-middle">
									<select class="form-control" wire:model="overlay_type">
										<option value="solid"><?php echo e(__('Solid')); ?></option>
										<option value="gradient"><?php echo e(__('Gradient')); ?></option>
									</select>
								</td>
							</tr>

							<?php if( $overlay_type == 'solid' ): ?>

								<tr>
									<td class="align-middle"><label for="color_picker" class="form-label"><?php echo e(__('Choose Solid Color')); ?></label></td>
									<td class="align-middle"><input class="form-control form-control-color" id="color_picker" wire:model="solid_color" type="color"></td>
								</tr>

							<?php elseif( $overlay_type == 'gradient' ): ?>

								<tr>
									<td class="align-middle"><label for="ads-area-1" class="form-label"><?php echo e(__('Choose Gradient Color')); ?></label></td>
									<td class="align-middle">
										<table class="table">
											<tr>
												<td class="align-middle"><input class="form-control form-control-color" wire:model="gradient_first_color" type="color"></td>
												<td class="align-middle"><input class="form-control form-control-color" wire:model="gradient_second_color" type="color"></td>
												<td class="align-middle">
													<select class="form-control" wire:model="gradient_position">
														<option value="to top" selected="selected"><?php echo e(__('To Top')); ?></option>
														<option value="to right"><?php echo e(__('To Right')); ?></option>
														<option value="to bottom"><?php echo e(__('To Bottom')); ?></option>
														<option value="to left"><?php echo e(__('To Left')); ?></option>
													</select>
												</td>
											</tr>
										</table>
									</td>
								</tr>

							<?php endif; ?>

							<tr>
								<td class="align-middle"><label for="opacity" class="form-label"><?php echo e(__('Opacity')); ?></label></td>
								<td class="align-middle">
									<div class="w-100">
										<input id="opacity" class="form-range overlay-opacity" wire:model="opacity" type="range" min="0" max="1" step="0.1" value="0.2">
										<small class="font-weight-normal d-block"><?php echo e(__('Opacity')); ?>: <span><?php echo e($opacity); ?></span><?php echo e(__('px')); ?></small>
									</div>
								</td>
							</tr>

							<tr>
								<td class="align-middle"><label for="blur" class="form-label"><?php echo e(__('Blur')); ?></label></td>
								<td class="align-middle">
									<div class="w-100">
										<input id="blur" class="form-range background-blur" type="range" wire:model="blur" min="0.0" max="10" step="0.5" value="1.5">
										<small class="font-weight-normal d-block"><?php echo e(__('Blur')); ?>: <span><?php echo e($blur); ?></span><?php echo e(__('px')); ?></small>
									</div>
								</td>
							</tr>

						</table>

					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="card">
					<div class="card-body">

							<table class="table settings">
								<tr>
									<td scope="row"><label for="maintenance_mode" class="form-label"><?php echo e(__('Enable Maintenance Mode')); ?></label></td>
									<td class="w-75">
										<div class="form-check form-switch ps-0">
											<input id="maintenance_mode" class="form-check-input ms-auto" type="checkbox" wire:model="maintenance_mode">
										</div>
									</td>
								</tr>

								<tr>
									<td scope="row"><label for="automatic_language_detection" class="form-label"><?php echo e(__('Enable Automatic Language Detection')); ?></label></td>
									<td class="align-middle">
										<div class="form-check form-switch ps-0">
											<input id="automatic_language_detection" class="form-check-input ms-auto" type="checkbox" wire:model="automatic_language_detection">
										</div>
									</td>
								</tr>

								<tr>
									<td scope="row"><label for="recaptcha_v3" class="form-label"><?php echo e(__('Enable reCAPTCHA v3')); ?></label></td>
									<td class="align-middle">
										<div class="form-check form-switch ps-0">
											<input id="recaptcha_v3" class="form-check-input ms-auto" type="checkbox" wire:model="recaptcha_v3">
										</div>
									</td>
								</tr>

								<tr>
									<td scope="row"><label for="language_switcher" class="form-label"><?php echo e(__('Enable Language Switcher')); ?></label></td>
									<td class="align-middle">
										<div class="form-check form-switch ps-0">
											<input id="language_switcher" class="form-check-input ms-auto" type="checkbox" wire:model="language_switcher">
										</div>
									</td>
								</tr>

								<tr>
									<td class="align-middle"><label for="page-load" class="form-label"><?php echo e(__('Enable Page Load')); ?></label></td>
									<td class="align-middle">
										<div class="form-check form-switch ps-0">
											<input id="page-load" class="form-check-input ms-auto" type="checkbox" wire:model="page_load">
										</div>
									</td>
								</tr>

								<tr>
									<td class="align-middle"><label for="share-icons-status" class="form-label"><?php echo e(__('Enable Share Icons')); ?></label></td>
									<td class="align-middle">
										<div class="form-check form-switch ps-0">
											<input id="share-icons-status" class="form-check-input ms-auto" type="checkbox" wire:model="share_icons_status">
										</div>
									</td>
								</tr>

								<tr>
									<td class="align-middle"><label for="supported-sites" class="form-label"><?php echo e(__('Enable Supported Sites')); ?></label></td>
									<td class="align-middle">
										<div class="form-check form-switch ps-0">
											<input id="supported-sites" class="form-check-input ms-auto" type="checkbox" wire:model="supported_sites">
										</div>
									</td>
								</tr>

								<tr>
									<td class="align-middle"><label for="author-box-status" class="form-label"><?php echo e(__('Enable Author Box')); ?></label></td>
									<td class="align-middle">
										<div class="form-check form-switch ps-0">
											<input id="author-box-status" class="form-check-input ms-auto" type="checkbox" wire:model="author_box_status">
										</div>
									</td>
								</tr>

								<tr>
									<td class="align-middle"><label for="prefix" class="form-label"><?php echo e(__('Prefix for Download Files')); ?></label></td>
									<td class="align-middle"><input id="prefix" type="text" class="form-control" wire:model="prefix"></td>
								</tr>

								<tr>
									<td class="align-middle"><label for="timezone" class="form-label"><?php echo e(__('Timezone')); ?></label></td>
									<td wire:ignore>
										<select id="timezone" class="form-control" wire:model="timezone">
											<?php $__currentLoopData = $timezones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<optgroup label="<?php echo e($value['group']); ?>">

													<?php $__currentLoopData = $value['zones']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2 => $value2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($value2['value']); ?>"><?php echo e($value2['value']); ?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

												</optgroup>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</td>
								</tr>

								<tr>
									<td class="align-middle"><label for="font_family" class="form-label"><?php echo e(__('Font Family')); ?></label></td>
									<td wire:ignore>
										<select id="font_family" class="form-control" wire:model="font_family">
											<optgroup label="<?php echo e(__('Google Fonts')); ?>">
												<?php $__currentLoopData = $google_fonts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

													<option value="<?php echo e($key); ?>"><?php echo e($key); ?></option>

												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

											</optgroup>
										</select>
									</td>
								</tr>

								<tr>
									<td colspan="2">

										<div class="d-flex">

											<label for="social" class="form-label"><?php echo e(__('Social Media')); ?></label>

											<div class="form-check form-switch">
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
									</td>
								</tr>
							</table>
					</div>
				</div>
			</div>

			<div class="form-group mt-4">
				<button class="btn bg-gradient-primary float-end">
					<span>
						<div wire:loading wire:target="onUpdateGeneral">
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

<div>

<script src="<?php echo e(asset('components/public/vendor/laravel-filemanager/js/stand-alone-button.js')); ?>"></script>
<script>
(function( $ ) {
	"use strict";

    document.addEventListener('livewire:load', function () {

        const timezone = new Choices( document.querySelector('#timezone') );
        const font_family = new Choices( document.querySelector('#font_family') );

        jQuery('#timezone').on('change', function (e) {
        	var time_data = jQuery(this).find(":selected").val();
        	window.livewire.find('<?php echo e($_instance->id); ?>').set('timezone', time_data);
        });

        jQuery('#font_family').on('change', function (e) {
        	var font_data = jQuery(this).find(":selected").val();
        	window.livewire.find('<?php echo e($_instance->id); ?>').set('font_family', font_data);
        });

		jQuery('.parallax-image').filemanager('image', {prefix: '<?php echo e(url('/')); ?>/filemanager'});

		jQuery('input#parallax-thumbnail').change(function() { 
			window.livewire.emit('onSetParallaxImage', this.value)
		});

		window.addEventListener('alert', event => {
			toastr[event.detail.type](event.detail.message);
		});

    });

})( jQuery );
</script><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/settings/general.blade.php ENDPATH**/ ?>