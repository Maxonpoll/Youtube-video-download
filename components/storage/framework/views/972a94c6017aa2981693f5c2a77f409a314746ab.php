<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
    <div class="ms-md-auto pe-md-3 d-flex align-items-center"></div>
    <ul class="navbar-nav justify-content-end">

        <!-- Begin:Lang Menu -->
        <?php
            $mobileLangMenu = '';
        ?>

        <li class="nav-item dropdown pe-4 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                 <img src="<?php echo e(asset('assets/img/flags/' . localization()->getCurrentLocale() . '.svg')); ?>" class="lang-menu me-1 my-auto">
                 <img src="<?php echo e(asset('assets/img/down-arrow-dark.svg')); ?>" alt="down-arrow" class="arrow ms-1">
            </a>

            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <?php $__currentLoopData = localization()->getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="mb-2">
                      <a class="dropdown-item border-radius-md mb-1" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(localization()->getLocalizedURL($localeCode, null, [], true)); ?>">
                        <img src="<?php echo e(asset('assets/img/flags/' . $properties->key() . '.svg')); ?>" class="lang-menu me-1 my-auto"> <?php echo e($properties->native()); ?>

                      </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
        <!-- End:Lang Menu -->

        <li class="nav-item dropdown pe-2 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user cursor-pointer"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">

                <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="<?php echo e(route('profile')); ?>">
                        <div class="d-flex py-1">
                            <h6 class="text-sm font-weight-normal mb-1"><?php echo e(__('Profile')); ?></h6>
                        </div>
                    </a>
                </li>

                <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="<?php echo e(route('home')); ?>" target="_blank">
                        <div class="d-flex py-1">
                            <h6 class="text-sm font-weight-normal mb-1"><?php echo e(__('Go to Website')); ?></h6>
                        </div>
                    </a>
                </li>

                <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="https://y2load.com"  target="_blank">
                        <div class="d-flex py-1">
                            <h6 class="text-sm font-weight-normal mb-1"><?php echo e(__('Get Support')); ?></h6>
                        </div>
                    </a>
                </li>

                <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="<?php echo e(route('logout')); ?>">
                        <div class="d-flex py-1">
                            <h6 class="text-sm font-weight-normal mb-1"><?php echo e(__('Logout')); ?></h6>
                        </div>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
            </a>
        </li>
    </ul>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\y2load\components\resources\views/components/admin/navright.blade.php ENDPATH**/ ?>