<div>

    <?php

        $fontawesome = json_decode($fontawesome);

    ?>

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
    
	<div class="row">

		<div class="col-12 col-md-6 mb-4">
			<div class="card">
				<div class="card-body">

					<form wire:submit.prevent="addToMenu">

						<div class="form-group">
							<label for="url" class="form-control-label"><?php echo e(__('Menu items')); ?></label>
							<select class="form-control" wire:model="menu_items">
								<option value selected style="display:none;"><?php echo e(__('Choose an item...')); ?></option>
								<option value="custom"><?php echo e(__('Custom')); ?></option>
								<?php if( !empty($pages) ): ?>
									<optgroup label="<?php echo e(__('Pages')); ?>">
										<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($page['slug']); ?>"><?php echo e(__( $page['title'] )); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</optgroup>
								<?php endif; ?>
								
							</select>
						</div>

						<div class="form-group">
							<label for="text" class="form-control-label"><?php echo e(__('Link Text')); ?></label>
							<input class="form-control" type="text" id="text" wire:model="text">
						</div>

						<?php if( $menu_items == 'custom' ): ?>
							<div class="form-group">
								<label for="url" class="form-control-label"><?php echo e(__('URL')); ?></label>
								<input class="form-control" type="text" id="url" wire:model="url">
							</div>
						<?php endif; ?>

						<div class="form-group" wire:ignore.self>
							<label for="fa-select" class="form-control-label"><?php echo e(__('Add icons?')); ?> (<a href="https://fontawesome.com/v5.15/icons" class="text-gradient text-primary" target="_blank"><?php echo e(__('Browse Font Awesome')); ?></a>)</label>
							<select id="fa-select" class="form-control fa-select" wire:model="icon">
								<optgroup label="<?php echo e(__('Font Awesome')); ?>">
									<option value selected style="display:none;"><?php echo e(__('Choose an icon...')); ?></option>
					                <?php $__currentLoopData = $fontawesome->icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                	<option value="<?php echo e($value); ?>"><?php echo e($value); ?></option>
					                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				            	</optgroup>
							</select>
						</div>

						<div class="form-group mb-4">
							<label for="type" class="form-control-label"><?php echo e(__('Type')); ?></label>
							<select class="form-control" wire:model="type">
								<option value="link"><?php echo e(__('Link')); ?></option>
								<option value="button"><?php echo e(__('Button')); ?></option>
							</select>
						</div>

						<?php if( $type == 'button' ): ?>

							<div class="form-group mb-4">
								<label for="type" class="form-control-label"><?php echo e(__('Class')); ?></label>
								<select class="form-control" wire:model="class">
									<optgroup label="<?php echo e(__('Default Buttons')); ?>">
										<option value="btn-default"><?php echo e(__('Default')); ?></option>
										<option value="btn-primary"><?php echo e(__('Primary')); ?></option>
										<option value="btn-secondary"><?php echo e(__('Secondary')); ?></option>
										<option value="btn-info"><?php echo e(__('Info')); ?></option>
										<option value="btn-success"><?php echo e(__('Success')); ?></option>
										<option value="btn-danger"><?php echo e(__('Danger')); ?></option>
										<option value="btn-warning"><?php echo e(__('Warning')); ?></option>
									</optgroup>
									<optgroup label="<?php echo e(__('Gradient Buttons')); ?>">
										<option value="bg-gradient-default"><?php echo e(__('Default')); ?></option>
										<option value="bg-gradient-primary"><?php echo e(__('Primary')); ?></option>
										<option value="bg-gradient-secondary"><?php echo e(__('Secondary')); ?></option>
										<option value="bg-gradient-info"><?php echo e(__('Info')); ?></option>
										<option value="bg-gradient-success"><?php echo e(__('Success')); ?></option>
										<option value="bg-gradient-danger"><?php echo e(__('Danger')); ?></option>
										<option value="bg-gradient-warning"><?php echo e(__('Warning')); ?></option>
									</optgroup>
									<optgroup label="<?php echo e(__('Outline Buttons')); ?>">
										<option value="btn-outline-default"><?php echo e(__('Default')); ?></option>
										<option value="btn-outline-primary"><?php echo e(__('Primary')); ?></option>
										<option value="btn-outline-secondary"><?php echo e(__('Secondary')); ?></option>
										<option value="btn-outline-info"><?php echo e(__('Info')); ?></option>
										<option value="btn-outline-success"><?php echo e(__('Success')); ?></option>
										<option value="btn-outline-danger"><?php echo e(__('Danger')); ?></option>
										<option value="btn-outline-warning"><?php echo e(__('Warning')); ?></option>
										</optgroup>
								</select>
							</div>

						<?php endif; ?>

						<div class="d-flex">
							<button class="btn bg-gradient-info float-end" wire:click.prevent="addToMenu"><?php echo e(__('Add to Menu')); ?></button>
						</div>

					</form>

				</div>
			</div>
		</div>

		<div class="col-12 col-md-6">
			<div class="card">
				<div class="card-body">
					<div id="nestable" class="dd mw-100">

				    	<?php
				    		function get_menu($menus, $class = 'dd-list') {

				    			$html = '<ol class="'.$class.'">';

				    			foreach($menus as $key => $value) {
				    				$html .= '<li class="dd-item" data-id="'.$value['id'].'">
								    				<div class="float-end btn-handle">
								    					<button class="badge bg-primary border-0" wire:click.prevent="editMenu('.$value['id'].')">'.__('Edit').'</button>
								    					<button class="badge bg-danger border-0" wire:click.prevent="removeMenu('.$value['id'].')">'.__('Delete').'</button>
								    				</div>

								    				<div class="dd-handle">
								    					<span><i class="'.$value['icon'].' pe-1"></i>'.$value['text'].'</span>
								    					<small class="url">'.$value['url'].'</small>
								    				</div>';

											        if( !empty($value['children']) ) {
											            $html .= get_menu($value['children'],'children');
											        }

							    	$html .'</li>';
				    			}

				    			$html .= '</ol>';

				    			return $html;
				    		}

				    		echo get_menu($menus);

				    	?>

					</div>

					<button id="onUpdateMenu" class="btn bg-gradient-primary float-end mt-3"><?php echo e(__('Save Changes')); ?></button>
				</div>
			</div>
		</div>

	</div>

</div>

<style>

.dd .btn-handle {
    transform: translate(-10%, 50%);
}

.btn-handle button{
	cursor: pointer;
}

.dd .dd-handle .url {
    font-weight: 400;
    margin-left: 10px;
}

.dd-handle{
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
	height: 50px;
	padding: 14px 25px;
	cursor: move;
}

.dd-item>button.dd-collapse:before {
    content: '';
}
</style>
<script>
(function( $ ) {
	"use strict";

	jQuery(document).ready(function(){

        const fa_select = new Choices( document.querySelector('#fa-select') );

        jQuery('#fa-select').on('change', function (e) {
        	var data = jQuery(this).find(":selected").val();
        	window.livewire.find('<?php echo e($_instance->id); ?>').set('icon', data);
        });

		jQuery('#nestable').nestable({ serialize: true, maxDepth: 3 });

		jQuery('#onUpdateMenu').click(function(e){
			e.preventDefault();
			var data = jQuery('#nestable').nestable('serialize');
			window.livewire.emit('onUpdateMenu', data)

		});

	});

	document.addEventListener('livewire:load', function () {
		
		window.addEventListener('alert', event => {
			toastr[event.detail.type](event.detail.message);
		});

	});

})( jQuery );
</script><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/settings/menu.blade.php ENDPATH**/ ?>