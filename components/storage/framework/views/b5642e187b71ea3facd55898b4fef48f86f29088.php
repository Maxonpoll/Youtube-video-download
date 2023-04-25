<?php switch( $advertisement->area1_align ):
    case ('left'): ?>
		<div class="area1 d-flex justify-content-start" style="margin:<?php echo e($advertisement->area1_margin); ?>px;">
			<?php echo $advertisement->area1; ?>

		</div>

    <?php break; ?>

    <?php case ('right'): ?>
		<div class="area1 d-flex justify-content-end" style="margin:<?php echo e($advertisement->area1_margin); ?>px;">
			<?php echo $advertisement->area1; ?>

		</div>
    <?php break; ?>

    <?php default: ?>
		<div class="area1 d-flex justify-content-center" style="margin:<?php echo e($advertisement->area1_margin); ?>px;">
			<?php echo $advertisement->area1; ?>

		</div>
<?php endswitch; ?><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/components/frontend/advertisement/area1.blade.php ENDPATH**/ ?>