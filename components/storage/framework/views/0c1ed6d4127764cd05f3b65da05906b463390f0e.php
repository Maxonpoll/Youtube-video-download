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
    
    <form wire:submit.prevent="onEditPage(<?php echo e($this->page_id); ?>)">

        <div class="form-group">
            <label for="edit_slug" class="form-label"><?php echo e(__('Slug')); ?></label>
            <div class="input-group">
                <input class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" wire:model="slug" id="edit_slug" required>
                <button type="button" class="btn btn-sm bg-gradient-info mb-0" wire:click="createSlug"><?php echo e(__('Create slug')); ?></button>
            </div>
            <small><?php echo e(__('Generate SEO-Friendly URL Slug.')); ?></small>
        </div>

        <div class="form-group">
            <label for="edit_type" class="form-label"><?php echo e(__('Page Type')); ?></label>
            <select class="form-control" wire:model="type" id="edit_type">
                <option value selected style="display:none;"><?php echo e(__('Choose a Page Type...')); ?></option>
                <option value="default"><?php echo e(__('Default')); ?></option>
                <option value="downloader"><?php echo e(__('Downloader')); ?></option>
                <option value="home"><?php echo e(__('Home')); ?></option>
                <option value="contact"><?php echo e(__('Contact')); ?></option>
                <option value="report"><?php echo e(__('Report')); ?></option>
                <option value="login"><?php echo e(__('Login')); ?></option>
                <option value="404"><?php echo e(__('404')); ?></option>
            </select>
        </div>

        <div class="form-group">
            <label for="edit_featured_image" class="form-label"><?php echo e(__('Featured image')); ?></label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="edit_featured_image" data-input="thumbnail_edit" class="btn btn-primary mb-0 featured-image">
                        <i class="fa fa-picture-o"></i> <?php echo e(__('Choose')); ?>

                    </a>
                </span>
                <input id="thumbnail_edit" class="form-control ps-2" type="text" wire:model="featured_image">
            </div>
            <small><?php echo e(__('This image will show up on search engines.')); ?></small>
        </div>

        <div class="float-end mt-3">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
            <button type="submit" class="btn bg-gradient-primary">
                <span>
                    <div wire:loading wire:target="onEditPage(<?php echo e($this->page_id); ?>)">
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
                    <span><?php echo e(__('Save changes')); ?></span>
                </span>
            </button>
        </div>
    </form>

</div>
<script>
(function( $ ) {
    "use strict";

    document.addEventListener('livewire:load', function () {

        jQuery('.featured-image').filemanager('image', {prefix: '<?php echo e(url('/')); ?>/filemanager'});

        jQuery('input#thumbnail_edit').change(function() { 
            window.livewire.emit('onSetFeaturedImage', this.value)
        });

    });
    
})( jQuery );
</script>
<?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/pages/edit.blade.php ENDPATH**/ ?>