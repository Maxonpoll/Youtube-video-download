<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(__($pageTrans->title)); ?></title>

        <link rel="shortcut icon" href="<?php echo e($header->favicon); ?>"/>

        <meta name="description" content="<?php echo e(__($pageTrans->short_description)); ?>" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
        <meta property="og:locale" content="<?php echo e(localization()->getCurrentLocaleRegional()); ?>">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo e(__($pageTrans->title)); ?>">
        <meta property="og:description" content="<?php echo e(__($pageTrans->short_description)); ?>">
        <meta property="og:url" content="<?php echo e(url()->current()); ?>">
        <meta property="og:site_name" content="<?php echo e(__($pageTrans->title)); ?>">
        <meta property="og:updated_time" content="<?php 

          echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', ''.$page->updated_at.'' )->toIso8601String();

        ?>">

        <?php if( !empty($page->featured_image) ): ?>
<meta property="og:image" content="<?php echo e($page->featured_image); ?>">
        <meta property="og:image:secure_url" content="<?php echo e($page->featured_image); ?>">
        <meta property="og:image:width" content="<?php echo e(Image::make($page->featured_image)->width()); ?>">
        <meta property="og:image:height" content="<?php echo e(Image::make($page->featured_image)->height()); ?>">
        <meta property="og:image:alt" content="<?php echo e(__($pageTrans->title)); ?>">
        <meta property="og:image:type" content="<?php echo e(File::extension($page->featured_image)); ?>">
        <?php endif; ?>

        <?php
        if ( !empty($twitter['url']) ) {

          $pregCheck = preg_match('/(?:https?:\/\/)?(?:mobile\.)?(?:www\.)?(?:twitter.com\/)(?:[@])?([A-Za-z0-9-_\.]+)(?:\/status\/(?:[a-z0-9]{0,}))?(?:\?.(?:\=.)?(?:\&.)?)?/', $twitter['url'], $match);

          if ( $pregCheck ){
            echo '<meta name="twitter:title" content="'.__($pageTrans->title).'">
        <meta name="twitter:description" content="'.__($pageTrans->short_description).'">
        <meta name="twitter:site" content="@'.$match[1].'">
        <meta name="twitter:creator" content="@'.$match[1].'">';
          }

        }
        ?>

        <?php if( !empty($page->featured_image) ): ?>
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:image" content="<?php echo e($page->featured_image); ?>">
        <?php endif; ?>

    <?php $__currentLoopData = localization()->getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link rel="alternate" hreflang="<?php echo e($properties->key()); ?>" href="<?php echo e(localization()->getLocalizedURL($properties->key(), null, [], false)); ?>" />
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if( $general->page_load == true ): ?>

        <!-- Pace -->
        <script src="<?php echo e(asset('assets/js/pace.min.js')); ?>"></script>

        <link rel="stylesheet" href="<?php echo e(asset('assets/css/pace-theme-default.min.css')); ?>">

        <?php endif; ?>

        <!-- Icons -->
        <link href="<?php echo e(asset('assets/css/nucleo-icons.css')); ?>" rel="stylesheet">

        <!-- Font Awesome -->
        <link type="text/css" href="<?php echo e(asset('assets/css/fontawesome.min.css')); ?>" rel="stylesheet">

        <!-- Theme CSS -->
        <link type="text/css" href="<?php echo e(asset('assets/css/main.min.css')); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link type="text/css" href="<?php echo e(asset('assets/css/custom.css')); ?>" rel="stylesheet">
        
        <?php if( !empty($general->font_family) ): ?>

          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo e($general->font_family); ?>">

          <style>
            body, .card .card-body {
              font-family: <?php echo e($general->font_family); ?> !important;
            }
          </style>

        <?php endif; ?>

        <?php if( $advanced->header_status == true && $advanced->insert_header != null ): ?>
          <?php echo $advanced->insert_header; ?>

        <?php endif; ?>
        
        <?php echo \Livewire\Livewire::styles(); ?>


    </head>
    <body>

      <?php if( $general->maintenance_mode == true && !Auth::user() && $page->type != 'login' ): ?>
        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.maintenance')->html();
} elseif ($_instance->childHasBeenRendered('MX84Ulo')) {
    $componentId = $_instance->getRenderedChildComponentId('MX84Ulo');
    $componentTag = $_instance->getRenderedChildComponentTagName('MX84Ulo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MX84Ulo');
} else {
    $response = \Livewire\Livewire::mount('frontend.maintenance');
    $html = $response->html();
    $_instance->logRenderedChild('MX84Ulo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

      <?php else: ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.pages', [
              'page'            => $page,
              'pageTrans'       => $pageTrans,
              'homeTitle'       => $homeTitle,
              'general'         => $general,
              'profile'         => $profile,
              'menus'           => $menus,
              'header'          => $header,
              'footer'          => $footer,
              'notice'          => $notice,
              'supported_sites' => $supported_sites,
              'advanced'        => $advanced,
              'advertisement'   => $advertisement,
              'api_key'         => $api_key,
              'socials'         => $socials,
              'twitter'         => $twitter
            ])->html();
} elseif ($_instance->childHasBeenRendered('NKpeMIA')) {
    $componentId = $_instance->getRenderedChildComponentId('NKpeMIA');
    $componentTag = $_instance->getRenderedChildComponentTagName('NKpeMIA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NKpeMIA');
} else {
    $response = \Livewire\Livewire::mount('frontend.pages', [
              'page'            => $page,
              'pageTrans'       => $pageTrans,
              'homeTitle'       => $homeTitle,
              'general'         => $general,
              'profile'         => $profile,
              'menus'           => $menus,
              'header'          => $header,
              'footer'          => $footer,
              'notice'          => $notice,
              'supported_sites' => $supported_sites,
              'advanced'        => $advanced,
              'advertisement'   => $advertisement,
              'api_key'         => $api_key,
              'socials'         => $socials,
              'twitter'         => $twitter
            ]);
    $html = $response->html();
    $_instance->logRenderedChild('NKpeMIA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php echo \Livewire\Livewire::scripts(); ?>


      <?php endif; ?>

    </body>
</html><?php /**PATH C:\xampp\htdocs\laravel\y2load\components\resources\views/frontend/pages.blade.php ENDPATH**/ ?>