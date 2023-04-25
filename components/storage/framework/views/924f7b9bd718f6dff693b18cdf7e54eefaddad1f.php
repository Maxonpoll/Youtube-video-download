<div>
        <p class="text-center"><?php echo e(__('Please add your all information.')); ?></p>

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

        <div class="form-group">
            <label for="purchase_code"><?php echo e(__('Purchase code')); ?> ( <a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code" class="text-gradient text-primary" target="_blank"><?php echo e(__('Where Is My Purchase Code?')); ?></a> )</label>
            <input type="text" wire:model="purchase_code" id="purchase_code" class="form-control <?php $__errorArgs = ['purchase_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required />
        </div>

        <form wire:submit.prevent="onCreateDatabase">

            <div class="form-group">
                <label for="database_host"><?php echo e(__('Database Host')); ?></label>
                <input type="text" wire:model="database_host" id="database_host" class="form-control <?php $__errorArgs = ['database_host'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required />
            </div>

            <div class="form-group">
                <label for="database_port"><?php echo e(__('Database Port')); ?></label>
                <input type="text" wire:model="database_port" id="database_port" class="form-control <?php $__errorArgs = ['database_port'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required />
            </div>

            <div class="form-group">
                <label for="database_name"><?php echo e(__('Database Name')); ?></label>
                <input type="text" wire:model="database_name" id="database_name" class="form-control <?php $__errorArgs = ['database_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required />
            </div>

            <div class="form-group">
                <label for="database_username"><?php echo e(__('Username')); ?></label>
                <input type="text" wire:model="database_username" id="database_username" class="form-control <?php $__errorArgs = ['database_username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required />
            </div>

            <div class="form-group">
                <label for="database_password"><?php echo e(__('Password')); ?></label>
                <input type="password" wire:model="database_password" id="database_password" class="form-control <?php $__errorArgs = ['database_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off" />
            </div>

            <div class="col-md-12 text-center">
                <button class="btn bg-gradient-primary mt-3 mb-0">
                    <span>
                        <div wire:loading wire:target="onCreateDatabase">
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

                <?php if( $continue == true ): ?>
                    <a class="btn bg-gradient-info mt-3 mb-0" href="<?php echo e(route('sw_admin')); ?>"><?php echo e(__('Continue')); ?></a>
                <?php endif; ?>

            </div>
        </form>
</div>
<?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/frontend/install/environment.blade.php ENDPATH**/ ?>