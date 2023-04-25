<?php switch( $advertisement->area2_align ):
    case ('left'): ?>
		<div class="area2 d-flex justify-content-start" style="margin:<?php echo e($advertisement->area2_margin); ?>px;">
			<?php echo $advertisement->area2; ?>

		</div>

    <?php break; ?>

    <?php case ('right'): ?>
		<div class="area2 d-flex justify-content-end" style="margin:<?php echo e($advertisement->area2_margin); ?>px;">
			<?php echo $advertisement->area2; ?>

		</div>
    <?php break; ?>

    <?php default: ?>
		<div class="area2 d-flex justify-content-center" style="margin:<?php echo e($advertisement->area2_margin); ?>px;">
			<?php echo $advertisement->area2; ?>

		</div>
<?php endswitch; ?><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/components/frontend/advertisement/area2.blade.php ENDPATH**/ ?>