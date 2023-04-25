<?php
	$mobileMenu = '';
?>

<ul class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="navbarDropdownMenuLink">

 	<div class="d-none d-lg-block">
		 <?php $__currentLoopData = $childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		 		
				<?php
				 	$mobileMenu .='<h6 class="dropdown-header text-dark font-weight-bolder px-0">
								 	<a href="'.( ($child['menu_items']  == 'custom') ? $child['url'] : route('home') . '/' . $child['url'] ).'">'. __($child['text']) .'</a>
								 </h6>';
				?>
				
				
			 <li class="nav-item dropdown dropdown-hover dropdown-subitem">
			 	<a class="dropdown-item border-radius-md ps-3 d-flex align-items-center justify-content-between mb-1" href="<?php echo e(( $child['menu_items']  == 'custom' ) ? $child['url'] : route('home') . '/' . $child['url']); ?>"><?php echo e(__($child['text'])); ?>

			 		
			 		<?php if( count($child['children']) ): ?>
			 			<img src="<?php echo e(asset('assets/img/down-arrow.svg')); ?>" alt="down-arrow" class="arrow">
			 		<?php endif; ?>
			 	</a>

			 	<?php if(count($child['children'])): ?>
			 		<div class="dropdown-menu mt-0 py-3 px-2 mt-3">

					 	<?php $__currentLoopData = $child['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        	<a class="dropdown-item ps-3 border-radius-md mb-1" href="<?php echo e(( $value['menu_items']  == 'custom' ) ? $value['url'] : route('home') . '/' . $value['url']); ?>"><?php echo e(__($value['text'])); ?></a>

                        	
                        	<?php
                        		$mobileMenu .= '<a class="dropdown-item border-radius-md" href="'. ( $value['menu_items']  == 'custom' ) ? $value['url'] : route('home') . '/' . $value['url'] .'">'. __($value['text']) .'</a>';
                        	?>
                        	

					 	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				 	</div>
			 	<?php endif; ?>
			 </li>
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	 </div>

	<div class="row d-lg-none">
		<div class="col-12 d-flex justify-content-center flex-column">
			<?php echo GrahamCampbell\Security\Facades\Security::clean($mobileMenu); ?>

		</div>
	</div>

 </ul><?php /**PATH C:\xampp\htdocs\laravel\y2load\components\resources\views/components/frontend/menu.blade.php ENDPATH**/ ?>