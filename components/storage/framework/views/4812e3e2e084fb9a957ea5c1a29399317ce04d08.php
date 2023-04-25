<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(__('Blog')); ?></title>

        <link rel="shortcut icon" href="<?php echo e($header->favicon); ?>"/>

        <meta name="description" content="<?php echo e(__('Get all the latest news on updates, support issues and tutorials.')); ?>" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
        <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
        <meta property="og:locale" content="<?php echo e(localization()->getCurrentLocaleRegional()); ?>">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo e(__('Blog')); ?>">
        <meta property="og:description" content="<?php echo e(__('Get all the latest news on updates, support issues and tutorials.')); ?>">
        <meta property="og:url" content="<?php echo e(url()->current()); ?>">
        <meta property="og:site_name" content="<?php echo e(__('Blog')); ?>">
        <meta property="og:updated_time" content="<?php 

          echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', ''.$page->updated_at.'' )->toIso8601String();

        ?>">

        <?php if( !empty($page->featured_image) ): ?>
<meta property="og:image" content="<?php echo e($page->featured_image); ?>">
        <meta property="og:image:secure_url" content="<?php echo e($page->featured_image); ?>">
        <meta property="og:image:width" content="<?php echo e(Image::make($page->featured_image)->width()); ?>">
        <meta property="og:image:height" content="<?php echo e(Image::make($page->featured_image)->height()); ?>">
        <meta property="og:image:alt" content="<?php echo e(__('Blog')); ?>">
        <meta property="og:image:type" content="<?php echo e(File::extension($page->featured_image)); ?>">
        <?php endif; ?>

        <?php
        if ( !empty($twitter['url']) ) {

          $pregCheck = preg_match('/(?:https?:\/\/)?(?:mobile\.)?(?:www\.)?(?:twitter.com\/)(?:[@])?([A-Za-z0-9-_\.]+)(?:\/status\/(?:[a-z0-9]{0,}))?(?:\?.(?:\=.)?(?:\&.)?)?/', $twitter['url'], $match);

          if ( $pregCheck ){
            echo '<meta name="twitter:title" content="'.__('Blog').'">
        <meta name="twitter:description" content="'.__('Get all the latest news on updates, support issues and tutorials.').'">
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
        <script rel="preload" src="<?php echo e(asset('assets/js/pace.min.js')); ?>"></script>

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

    </head>
    <body>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.navbar','data' => ['header' => $header,'homeTitle' => $homeTitle,'menus' => $menus,'general' => $general]]); ?>
<?php $component->withName('frontend.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['header' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($header),'homeTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($homeTitle),'menus' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($menus),'general' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($general)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

          <header class="header-2">

            <div class="page-header min-vh-75 relative">
                <div class="img-fluid shadow overlay-preview" style="
                  <?php if( $general->overlay_type == 'solid' ): ?>

                  background: <?php echo e($general->solid_color); ?>;opacity: <?php echo e($general->opacity); ?>;

                  <?php elseif( $general->overlay_type == 'gradient' ): ?>

                  background: <?php echo e($general->gradient_first_color); ?>;
                  background: -moz-linear-gradient( <?php echo e($general->gradient_position); ?>, <?php echo e($general->gradient_first_color); ?>, <?php echo e($general->gradient_second_color); ?>  );
                  background: -webkit-linear-gradient( <?php echo e($general->gradient_position); ?>, <?php echo e($general->gradient_first_color); ?>, <?php echo e($general->gradient_second_color); ?> );
                  background: linear-gradient( <?php echo e($general->gradient_position); ?>, <?php echo e($general->gradient_first_color); ?>, <?php echo e($general->gradient_second_color); ?> );
                  opacity: <?php echo e($general->opacity); ?>;

                  <?php endif; ?>

                "></div>

              <?php if( !empty($general->parallax_image) ): ?>
                <img class="position-absolute start-0 top-0 w-100 parallax-image" src="<?php echo e($general->parallax_image); ?>" alt="Parallax Image" style="filter: blur(<?php echo e($general->blur); ?>px);">
              <?php else: ?>
                <img class="position-absolute start-0 top-0 w-100 parallax-image" src="<?php echo e(asset('assets/img/home-background.jpg')); ?>" alt="Parallax Image" style="filter: blur(<?php echo e($general->blur); ?>px);">
              <?php endif; ?>
              
              <div class="container">
                <div class="row">

                  <div class="col-lg-7 text-center mx-auto">
                    <h1 class="text-white pt-3 mt-n5"><?php echo e(__('Our Blog')); ?></h1>
                    <h2 class="lead text-white letter-normal my-3"><?php echo e(__('Stay up to date with the latest news')); ?></h2>
                  </div>

                  <?php if( $advertisement->area1_status == true && $advertisement->area1 != null ): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.area1','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.area1'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                  <?php endif; ?>

                  <?php if( $advertisement->area2_status == true && $advertisement->area2 != null ): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.area2','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.area2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                  <?php endif; ?>

                </div>
              </div>

              <?php if( $general->wave_animation_status == true): ?>

                <div class="position-absolute w-100 z-index-1 bottom-0">
                  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                      <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="moving-waves">
                      <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                      <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                      <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                      <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                      <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                      <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
                    </g>
                  </svg>
                </div>

              <?php endif; ?>

            </div>
          </header>

          <section class="my-3">
              <div class="container">
                  <div class="row">
                      <div class="info-horizontal">

                          <?php if( $advertisement->area3_status == true && $advertisement->area3 != null ): ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.area3','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.area3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                          <?php endif; ?>

                          <div id="blog-content">


                            <div class="row">

                              <?php $__currentLoopData = $pageTrans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pageTran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <div class="col-lg-4 col-sm-6">
                                    <div class="card card-plain card-blog">
                                      <div class="card-image border-radius-lg position-relative">
                                        <a href="<?php echo e(localization()->getLocalizedURL(app()->getLocale(), $pageTran->slug, [], true)); ?>">
                                          <img class="w-100 border-radius-lg move-on-hover shadow" src="<?php echo e(($pageTran->featured_image) ? $pageTran->featured_image : asset('assets/img/no-thumb.jpg')); ?>">
                                        </a>
                                      </div>
                                      <div class="card-body px-0">
                                        <h5>
                                          <a href="<?php echo e(localization()->getLocalizedURL(app()->getLocale(), $pageTran->slug, [], true)); ?>" class="text-dark font-weight-bold"><?php echo e($pageTran->title); ?></a>
                                        </h5>
                                        <p><?php echo e($pageTran->short_description); ?></p>

                                        <a href="<?php echo e(localization()->getLocalizedURL(app()->getLocale(), $pageTran->slug, [], true)); ?>" class="text-info icon-move-right"><?php echo e(__('Read More')); ?>

                                          <i class="fas fa-arrow-right text-sm" aria-hidden="true"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>

                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                            <div class="d-flex justify-content-center mt-4">
                              <?php echo e($pageTrans->links()); ?>

                            </div>

                          </div>

                          <?php if( $advertisement->area4_status == true && $advertisement->area4 != null ): ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.advertisement.area4','data' => ['advertisement' => $advertisement]]); ?>
<?php $component->withName('frontend.advertisement.area4'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['advertisement' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($advertisement)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                          <?php endif; ?>

                      </div>
                  </div>
              </div>
          </section>

        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.footer','data' => ['footer' => $footer,'general' => $general,'socials' => $socials]]); ?>
<?php $component->withName('frontend.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['footer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($footer),'general' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($general),'socials' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($socials)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

        <!-- jQuery -->
        <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>

        <!-- Popper JS -->
        <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>

        <!-- Bootstrap JS -->
        <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
        
        <!-- Theme JS -->
        <script src="<?php echo e(asset('assets/js/main.min.js')); ?>"></script>

        <?php if( $general->recaptcha_v3 == true && !empty($api_key->recaptcha_public_api_key ) ): ?>
          <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e($api_key->recaptcha_public_api_key); ?>"></script>
        <?php endif; ?>

        <?php if(Cookie::get('cookies') == null): ?>

          <?php if( $notice->status == true ): ?>
              <div class="row notice alert <?php echo e($notice->background); ?>" role="alert">
                
                <div class="col-md-12 col-lg-10 my-auto <?php echo e($notice->align); ?>">
                  <?php echo __(GrahamCampbell\Security\Facades\Security::clean($notice->notice)); ?>

                </div>

                <div class="col-md-12 col-lg-2 my-auto p-2">

                  <?php if( $notice->button == true): ?>
                    <button id="acceptCookies" target="_blank" class="btn btn-sm bg-white mb-0 text-capitalize"> <?php echo e(__('Accept all cookies')); ?> </button>
                  <?php endif; ?>

                  <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">x</button>
                </div>

              </div>
              <script>
                 (function( $ ) {
                    "use strict";
             
                        $("#acceptCookies").click(function(){
                            jQuery.ajax({
                                type : 'get',
                                url : '<?php echo e(url('/')); ?>/cookies/accept',
                                success: function(e) {
                                    jQuery('.notice').remove();
                                }
                            });
                        });

                })( jQuery );
              </script>
          <?php endif; ?>

        <?php endif; ?>

        <?php if( $advanced->footer_status == true && $advanced->insert_footer != null ): ?>
          <?php echo $advanced->insert_footer; ?>

        <?php endif; ?>

    </body>
</html><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/frontend/blog.blade.php ENDPATH**/ ?>