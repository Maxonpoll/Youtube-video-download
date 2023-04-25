<?php $attributes = $attributes->exceptProps(['status']); ?>
<?php foreach (array_filter((['status']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php switch( $status ):

    case ( 'success' ): ?>

		  <div class="alert alert-success text-white" role="alert">
		    <?php echo e(session('message')); ?>

		  </div>

        <?php break; ?>

    <?php case ( 'error' ): ?>
    
		  <div class="alert alert-danger text-white" role="alert">
		    <?php echo e(session('message')); ?>

		  </div>

        <?php break; ?>

    <?php default: ?>

<?php endswitch; ?><?php /**PATH C:\xampp\htdocs\laravel\y2load\components\resources\views/components/auth-session-status.blade.php ENDPATH**/ ?>