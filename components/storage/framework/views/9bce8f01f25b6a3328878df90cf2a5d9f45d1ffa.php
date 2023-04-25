<div>

    <?php $__currentLoopData = $requirements['requirements']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $requirement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo e(__('PHP')); ?> >= <?php echo e($phpSupportInfo['minimum']); ?></th>
                    <th class="text-end">
                        <strong><?php echo e($phpSupportInfo['current']); ?></strong>
                        <i class="text-gradient fas fa-fw fa-<?php echo e($phpSupportInfo['supported'] ? 'check-circle text-success' : 'exclamation-circle text-danger'); ?>"></i>
                    </th>
                </tr>
            </thead>

            <tbody>

                <?php $__currentLoopData = $requirements['requirements'][$type]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extention => $enabled): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="<?php echo e($enabled ? '' : 'text-danger'); ?>">
                        <td><?php echo e($extention); ?></td>
                        <td class="text-end"><i class="text-gradient fas fa-fw fa-<?php echo e($enabled ? 'check-circle text-success' : 'exclamation-circle text-danger'); ?>"></i></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
            </tbody>
        </table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <table class="table">
        <thead>
            <tr>
                <th colspan="2"><?php echo e(__('Permissions')); ?></th>
            </tr>
        </thead>
         <tbody>

            <?php $__currentLoopData = $permissions['permissions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if( $permission['folder'] == '.env'): ?>

                    <tr class="<?php echo e($permission['permission'] ? '' : 'text-danger'); ?>">
                        <td><input type="text" class="form-control" value="components/<?php echo e($permission['folder']); ?>" onclick="this.select()"></td>
                        <td class="text-end align-middle">
                            <strong><?php echo e($permission['permission'] ? '' : __('The file is not writable!')); ?></strong>
                            <i class="text-gradient fas fa-fw fa-<?php echo e($permission['permission'] ? 'check-circle text-success' : 'exclamation-circle text-danger'); ?>"></i>
                            
                        </td>
                    </tr>

                <?php else: ?>
                    <tr class="<?php echo e($permission['isSet'] ? '' : 'text-danger'); ?>">
                        <td><input type="text" class="form-control" value="components/<?php echo e($permission['folder']); ?>" onclick="this.select()"></td>
                        <td class="text-end align-middle">
                            <strong><?php echo e($permission['permission']); ?></strong>
                            <i class="text-gradient fas fa-fw fa-<?php echo e($permission['isSet'] ? 'check-circle text-success' : 'exclamation-circle text-danger'); ?>"></i>
                        </td>
                    </tr>
                <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php if( !isset($requirements['errors']) && $phpSupportInfo['supported'] && !isset($permissions['errors']) && $permissions['permissions'][0]['permission'] == true): ?>
        <div class="row">
            <div class="col-md-12 text-center">
              <a class="btn bg-gradient-primary mt-3" href="<?php echo e(route('sw_database')); ?>"><?php echo e(__('Continue')); ?></a>
          </div>
        </div>
    <?php endif; ?>

</div>
<?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/frontend/install/requirements.blade.php ENDPATH**/ ?>