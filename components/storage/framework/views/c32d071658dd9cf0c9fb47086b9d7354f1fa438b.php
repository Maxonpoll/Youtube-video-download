<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo e(__('Y2load Installer')); ?></title>
        <link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.png')); ?>"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome.min.css')); ?>">
        <link type="text/css" href="<?php echo e(asset('assets/css/main.min.css')); ?>" rel="stylesheet" />
        <link href="<?php echo e(asset('assets/css/install.css')); ?>" rel="stylesheet" />
        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body>

        <section>
            <div class="page-header min-vh-100" style="background-image: url( <?php echo e(asset('assets/img/background.jpg')); ?> );">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="card">
                                
                                <div class="card-header p-0">
                                    <div class="header">
                                        <h1 class="header-title">

                                            <?php switch( Route::currentRouteName() ):
                                                case ( 'sw_install' ): ?>
                                                        <?php echo e(__('Welcome To Y2load!')); ?>

                                                    <?php break; ?>

                                                <?php case ( 'sw_requirements' ): ?>
                                                        <?php echo e(__('Server Requirements')); ?>

                                                    <?php break; ?>

                                                <?php case ( 'sw_database' ): ?>
                                                        <?php echo e(__('Database Configuration')); ?>

                                                    <?php break; ?>
                                                    
                                                <?php case ( 'sw_admin' ): ?>
                                                       <?php echo e(__('Create An Admin Account')); ?>

                                                    <?php break; ?>

                                                <?php case ( 'sw_import' ): ?>
                                                        <?php echo e(__('Import Demo Content')); ?>

                                                    <?php break; ?>

                                                <?php case ( 'sw_finished' ): ?>
                                                        <?php echo e(__('Your Website is Ready!')); ?>

                                                    <?php break; ?>

                                                <?php default: ?>
                                            <?php endswitch; ?>
                                            
                                        </h1>
                                    </div>

                                    <ul class="step">
                                        <li class="step-divider"></li>
                                        <li class="step-item <?php echo e(Route::is('sw_finished') ? 'active' : ''); ?>">
                                            <a href="javascript:void(0)">
                                                <i class="step-icon fas fa-check"></i>
                                            </a>
                                        </li>

                                        <li class="step-divider"></li>
                                        <li class="step-item <?php echo e(Route::is('sw_import') ? 'active' : ''); ?>">
                                            <a href="javascript:void(0)">
                                                <i class="step-icon fas fa-sync-alt"></i>
                                            </a>
                                        </li>

                                        <li class="step-divider"></li>
                                        <li class="step-item <?php echo e(Route::is('sw_admin') ? 'active' : ''); ?>">
                                            <a href="javascript:void(0)">
                                                <i class="step-icon fas fa-user"></i>
                                            </a>
                                        </li>

                                        <li class="step-divider"></li>
                                        <li class="step-item <?php echo e(Route::is('sw_database') ? 'active' : ''); ?>">
                                            <a href="javascript:void(0)">
                                                <i class="step-icon fas fa-server"></i>
                                            </a>
                                        </li>

                                        <li class="step-divider"></li>
                                        <li class="step-item <?php echo e(Route::is('sw_requirements') ? 'active' : ''); ?>">
                                            <a href="javascript:void(0)">
                                                <i class="step-icon fas fa-list"></i>
                                            </a>
                                        </li>

                                        <li class="step-divider"></li>
                                        <li class="step-item <?php echo e(Route::is('sw_install') ? 'active' : ''); ?>">
                                            <a href="javascript:void(0)">
                                                <i class="step-icon fas fa-home"></i>
                                            </a>
                                        </li>
                                        <li class="step-divider"></li>
                                    </ul>
                                </div>

                                <div class="card-body">

                                    <?php switch( Request::path() ):

                                        case ( 'install' ): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.install.welcome')->html();
} elseif ($_instance->childHasBeenRendered('mFvchlG')) {
    $componentId = $_instance->getRenderedChildComponentId('mFvchlG');
    $componentTag = $_instance->getRenderedChildComponentTagName('mFvchlG');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('mFvchlG');
} else {
    $response = \Livewire\Livewire::mount('frontend.install.welcome');
    $html = $response->html();
    $_instance->logRenderedChild('mFvchlG', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                            <?php break; ?>

                                        <?php case ( 'install/requirements' ): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.install.requirements')->html();
} elseif ($_instance->childHasBeenRendered('5Rx1GGA')) {
    $componentId = $_instance->getRenderedChildComponentId('5Rx1GGA');
    $componentTag = $_instance->getRenderedChildComponentTagName('5Rx1GGA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5Rx1GGA');
} else {
    $response = \Livewire\Livewire::mount('frontend.install.requirements');
    $html = $response->html();
    $_instance->logRenderedChild('5Rx1GGA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                            <?php break; ?>

                                        <?php case ( 'install/database' ): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.install.environment')->html();
} elseif ($_instance->childHasBeenRendered('iO2x2EZ')) {
    $componentId = $_instance->getRenderedChildComponentId('iO2x2EZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('iO2x2EZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iO2x2EZ');
} else {
    $response = \Livewire\Livewire::mount('frontend.install.environment');
    $html = $response->html();
    $_instance->logRenderedChild('iO2x2EZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                            <?php break; ?>

                                        <?php case ( 'install/admin' ): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.install.admin')->html();
} elseif ($_instance->childHasBeenRendered('fnbzAeM')) {
    $componentId = $_instance->getRenderedChildComponentId('fnbzAeM');
    $componentTag = $_instance->getRenderedChildComponentTagName('fnbzAeM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fnbzAeM');
} else {
    $response = \Livewire\Livewire::mount('frontend.install.admin');
    $html = $response->html();
    $_instance->logRenderedChild('fnbzAeM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                            <?php break; ?>


                                        <?php case ( 'install/import' ): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.install.import')->html();
} elseif ($_instance->childHasBeenRendered('6XFRCYE')) {
    $componentId = $_instance->getRenderedChildComponentId('6XFRCYE');
    $componentTag = $_instance->getRenderedChildComponentTagName('6XFRCYE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6XFRCYE');
} else {
    $response = \Livewire\Livewire::mount('frontend.install.import');
    $html = $response->html();
    $_instance->logRenderedChild('6XFRCYE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                            <?php break; ?>

                                        <?php case ( 'install/finished' ): ?>
                                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.install.finished')->html();
} elseif ($_instance->childHasBeenRendered('2E4TFpW')) {
    $componentId = $_instance->getRenderedChildComponentId('2E4TFpW');
    $componentTag = $_instance->getRenderedChildComponentTagName('2E4TFpW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2E4TFpW');
} else {
    $response = \Livewire\Livewire::mount('frontend.install.finished');
    $html = $response->html();
    $_instance->logRenderedChild('2E4TFpW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                            <?php break; ?>

                                        <?php default: ?>
                                            <p><?php echo e(trans('install.oops')); ?></p>
                                    <?php endswitch; ?>
                                    
                              </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\asif\components\resources\views/frontend/install.blade.php ENDPATH**/ ?>