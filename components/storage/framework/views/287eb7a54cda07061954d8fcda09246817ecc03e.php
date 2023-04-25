<div class="container position-sticky z-index-sticky <?php if($header->sticky_header): ?> top-0 <?php endif; ?>">
  <div class="row">
    <div class="col-12">

      <!-- Begin::Navbar -->
      <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid">
          <a class="navbar-brand font-weight-bolder ms-sm-3" title="<?php echo e(__($homeTitle)); ?>" href="<?php echo e(route('home')); ?>">
            <?php if( !empty($header->logo) ): ?>
              <div class="logo-image">
                <img src="<?php echo e($header->logo); ?>">
              </div>
            <?php else: ?>
              <?php echo e($homeTitle); ?>

            <?php endif; ?>
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>

          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100 justify-content-center justify-content-md-end align-items-center align-items-md-end" id="navigation">

            <ul class="navbar-nav navbar-nav-hover">

                <!-- Begin:Lang Menu -->
                <?php if( $general->language_switcher == true ): ?>

                  <?php
                    $mobileLangMenu = '';
                  ?>

                  <li class="nav-item dropdown dropdown-hover mx-2 my-auto">
                     <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="navbarDropdownMenuLang" data-bs-toggle="dropdown" aria-expanded="false">
                     <img src="<?php echo e(asset('assets/img/flags/' . localization()->getCurrentLocale() . '.svg')); ?>" class="lang-menu me-1 my-auto"> 
                     <?php echo e(localization()->getCurrentLocaleNative()); ?>

                     <img src="<?php echo e(asset('assets/img/down-arrow-dark.svg')); ?>" alt="down-arrow" class="arrow ms-1">
                     </a>
                     <ul class="dropdown-menu dropdown-menu-animation p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="navbarDropdownMenuLang">
                        <div class="d-none d-lg-block">
                           <?php $__currentLoopData = localization()->getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php
                              $mobileLangMenu .='<h6 class="dropdown-header text-dark font-weight-bolder px-0">
                                      <img src="'.asset('assets/img/flags/' . $properties->key() . '.svg').'" class="lang-menu me-1 my-auto"> 
                                      <a href="'. url('/') . '/' .  $properties->key() .'">'.$properties->native().'</a>
                                     </h6>';
                            ?>

                           <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                              <a class="dropdown-item border-radius-md mb-1" rel="alternate" hreflang="<?php echo e($properties->key()); ?>" href="<?php echo e(url('/') . '/' .  $properties->key()); ?>">
                                <img src="<?php echo e(asset('assets/img/flags/' . $properties->key() . '.svg')); ?>" class="lang-menu me-1 my-auto"> <?php echo e($properties->native()); ?>

                              </a>
                           </li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="row d-lg-none">
                          <div class="col-12 d-flex justify-content-center flex-column">

                            <?php echo GrahamCampbell\Security\Facades\Security::clean($mobileLangMenu); ?>


                          </div>
                        </div>

                     </ul>
                  </li>
                  
                <?php endif; ?>
                <!-- End:Lang Menu -->
                
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <?php if( count($value['children']) ): ?>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="<?php echo e(($value['type'] == 'button') ? 'btn btn-sm btn-round text-capitalize mb-lg-0 me-1 ' . $value['class'] : 'nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center'); ?>" href="<?php echo e(( $value['menu_items']  == 'custom' ) ? $value['url'] : route('home') . '/' . $value['url']); ?>" id="navbarDropdownMenuLink<?php echo e($key); ?>" data-bs-toggle="dropdown" aria-expanded="false">
                           <?php if( !empty($value['icon']) ): ?>
                             <i class="<?php echo e($value['icon']); ?> fa-fw"></i>
                           <?php endif; ?>
                           <?php echo e(__($value['text'])); ?>

                           <img src="<?php echo e(asset('assets/img/down-arrow-dark.svg')); ?>" alt="down-arrow" class="arrow ms-1">
                        </a>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.menu','data' => ['childs' => $value['children']]]); ?>
<?php $component->withName('frontend.menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['childs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value['children'])]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </li>

                  <?php else: ?>
                    <li class="nav-item mx-2 my-auto">
                        <a class="<?php echo e(($value['type'] == 'button') ? 'btn btn-sm btn-round text-capitalize mb-lg-0 me-1 ' . $value['class'] : 'nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center'); ?>" href="<?php echo e(( $value['menu_items']  == 'custom' ) ? $value['url'] : route('home') . '/' . $value['url']); ?>">
                           <?php if( !empty($value['icon']) ): ?>
                             <i class="<?php echo e($value['icon']); ?> fa-fw"></i>
                           <?php endif; ?>
                          <?php echo e(__($value['text'])); ?>

                        </a>
                    </li>
                  <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End::Navbar -->
    </div>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\y2load\components\resources\views/components/frontend/navbar.blade.php ENDPATH**/ ?>