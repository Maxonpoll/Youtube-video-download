<div>

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

        <?php if( $page->type == '404' ): ?>
        
          <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.404','data' => ['pageTrans' => $pageTrans]]); ?>
<?php $component->withName('frontend.404'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['pageTrans' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pageTrans)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
          
        <?php elseif( $page->type == 'login' ): ?>

          <section>
            <div class="page-header min-vh-100">
              <div class="container">
                <div class="row">
                  <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                    <div class="card card-plain">
                      <div class="card-header pb-0 text-start">
                        <h4 class="font-weight-bolder"><?php echo e(__('Sign In')); ?></h4>
                        <p class="mb-0"><?php echo e(__('Enter your email and password to sign in')); ?></p>
                      </div>

                      <div class="card-body">

                        <!-- Validation Errors -->
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                        <form wire:submit.prevent="onLogin">
              
                          <div class="mb-3">
                            <input class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('Email')); ?>" type="email" wire:model="email" required autofocus />
                          </div>
                          <div class="mb-3">
                            <input class="form-control form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('Password')); ?>" type="password" wire:model="password" required />
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" wire:model="remember_me" id="remember_me">
                            <label class="form-check-label" for="remember_me"><?php echo e(__('Remember me')); ?></label>
                          </div>
                          <div class="text-center">
                            <button class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                              <div wire:loading wire:target="onLogin">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.loading','data' => []]); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                              </div>
                              <?php echo e(__('Sign In')); ?></button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>

                  <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                    <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                      <img src="<?php echo e(asset('assets/img/shapes/pattern-lines.svg')); ?>" alt="pattern-lines" class="position-absolute opacity-4 start-0">
                      <div class="position-relative">
                        <img class="max-width-500 w-100 position-relative z-index-2" src="<?php echo e(asset('assets/img/illustrations/chat.png')); ?>">
                      </div>
                      <h4 class="mt-5 text-white font-weight-bolder"><?php echo e(__('Welcome back!')); ?></h4>
                      <p class="text-white"><?php echo e(__('Login with your email address and password to keep connected with us.')); ?></p>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </section>
      
        <?php else: ?>

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
                    <h1 class="text-white"><?php echo e(__($pageTrans->title)); ?></h1>
                    <h2 class="lead text-white letter-normal my-3"><?php echo e(__($pageTrans->subtitle)); ?></h2>
                  </div>

                  <?php if( $page->ads_status == true && $advertisement->area1_status == true && $advertisement->area1 != null ): ?>
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

                  <?php if( $page->type == 'downloader' || $page->type == 'home' ): ?>

                    <form wire:submit.prevent="onDownload" id="formDownload">

                      <div class="col-lg-8 z-index-2 border-radius-xl mx-auto py-3">

                        <div class="row bg-white shadow border-radius-md py-3 p-2 position-relative">
                          <div class="col-12 col-lg-10 mb-lg-0 mb-2">
                            <div class="input-group">
                              <input type="text" class="form-control form-control-lg" id="link" wire:model="link" placeholder="<?php echo e(__('Paste the URL here to start downloading...')); ?>" required>
                              <span class="input-group-text">
                                <button type="button" id="paste" class="btn-tooltip mb-0 border-0 bg-white text-dark" wire:ignore>
                                  <i class="far fa-clipboard fa-lg"></i>
                                </button>
                              </span>
                            </div>
                          </div>

                          <div class="col-12 col-lg-2 ps-lg-0">
                            <button class="btn bg-gradient-primary w-100 mb-0 h-100 position-relative z-index-2 p-lg-0">
                              <span>
                                <div wire:loading.inline wire:target="onDownload">
                                  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.loading','data' => []]); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                                </div>
                                <span wire:target="onDownload" class="text-capitalize btn-download"><?php echo e(__('Download')); ?></span>
                              </span>
                            </button>
                          </div>
                        </div>

                      </div>
                    </form>

                    <div class="text-center h-0" wire:loading wire:target="onDownload">
                        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                    </div>

                    <div class="col-lg-8 mx-auto">
                      <!-- Session Status -->
                      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-session-status','data' => ['class' => 'mb-4','status' => session('status')]]); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                      <!-- Validation Errors -->
                      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]]); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>

                   <?php endif; ?>

                  <?php if( $page->ads_status == true && $advertisement->area2_status == true && $advertisement->area2 != null ): ?>
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
                  <svg class="waves" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
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

          <?php if( !empty($data) ): ?>
          
            <section id="download-box" class="pt-3 pb-4" wire:loading.remove wire:target="onDownload">
              <div class="container">

                <div class="row">
                  <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
                    <div class="row">

                      <div class="col-md-4 position-relative">

                        <div class="p-3">
                          <div class="card-header p-0 position-relative z-index-1">
                            <a href="javascript:;" class="d-block">

                              <?php if( !empty( $data['thumbnail'] ) ): ?>

                                <img src="<?php echo e($data['thumbnail']); ?>" class="w-100 border-radius-lg shadow">

                              <?php else: ?>
                                <img src="<?php echo e(asset('assets/img/no-thumb.jpg')); ?>" class="w-100 border-radius-lg shadow">
                              <?php endif; ?>
                              
                            </a>
                          </div>

                          <?php if( !empty( $data['title'] ) ): ?>

                            <h6 class="mt-3"><?php echo e($data['title']); ?></h6>

                          <?php endif; ?>

                          <?php if( !empty( $data['duration'] ) ): ?>
                            <p class="text-sm"><?php echo e(__('Duration')); ?>: <?php echo e($data['duration']); ?></p>
                          <?php endif; ?>
                        
                            <?php if( $general->share_icons_status == true ): ?>

                              <div class="social-share">
                                <div class="share-icons-sm relative">

                                    <a wire:ignore href="https://www.facebook.com/sharer.php?u=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                        onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','facebook','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                        data-label="Facebook"
                                        rel="noopener noreferrer nofollow"
                                        target="_blank"
                                        class="btn btn-facebook btn-simple rounded p-2">
                                        <i class="fab fa-facebook"></i>
                                    </a>

                                    <a wire:ignore href="https://twitter.com/share?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                        onclick="window.open('https://twitter.com/share?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','twitter','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                        rel="noopener noreferrer nofollow"
                                        target="_blank"
                                        class="btn btn-twitter btn-simple rounded p-2">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a wire:ignore href="https://www.pinterest.com/pin-builder/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&media=<?php echo e($page->featured_image); ?>&description=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>" wire:ignore
                                        onclick="window.open('https://www.pinterest.com/pin-builder/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&media=<?php echo e($page->featured_image); ?>&description=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>','pinterest','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                        rel="noopener noreferrer nofollow"
                                        target="_blank"
                                        class="btn btn-pinterest btn-simple rounded p-2">
                                        <i class="fab fa-pinterest"></i>
                                    </a>

                                    <a wire:ignore href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                        onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','linkedin','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                        rel="noopener noreferrer nofollow"
                                        target="_blank"
                                        class="btn btn-linkedin btn-simple rounded p-2">
                                        <i class="fab fa-linkedin"></i>
                                    </a>

                                    <a wire:ignore href="https://www.reddit.com/submit?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&title=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>"
                                        onclick="window.open('https://www.reddit.com/submit?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&title=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>','reddit','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                        rel="noopener noreferrer nofollow"
                                        target="_blank"
                                        class="btn btn-reddit btn-simple rounded p-2">
                                        <i class="fab fa-reddit"></i>
                                    </a>

                                    <a wire:ignore href="https://tumblr.com/widgets/share/tool?canonicalUrl=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                        onclick="window.open('https://tumblr.com/widgets/share/tool?canonicalUrl=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','tumblr','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                        target="_blank"
                                        class="btn btn-tumblr btn-simple rounded p-2"
                                        rel="noopener noreferrer nofollow">
                                        <i class="fab fa-tumblr"></i>
                                    </a>

                                </div>
                              </div>
                            <?php endif; ?>
                          </div>

                        <hr class="vertical dark">
                      </div>

                      <div class="col-md-8 position-relative">
                        <div class="p-3">

                          <?php if( !empty( $data['links'] ) ): ?>

                            
                            <ul class="nav nav-pills nav-fill p-1 rounded-bottom-0" role="tablist">

                                <?php switch( $data['source'] ):

                                    case ('SoundCloud'): ?>
                                          <li class="nav-item">
                                              <a class="nav-link mb-0 px-0 py-1 active" href="javascript:;" id="audio-tab" data-bs-toggle="tab" data-bs-target="#audio">
                                                  <span class="ms-1"><?php echo e(__('Audio')); ?></span>
                                              </a>
                                          </li>
                                        <?php break; ?>

                                    <?php case ('Youtube'): ?>
                                          <li class="nav-item">
                                              <a class="nav-link mb-0 px-0 py-1 active" href="javascript:;" id="video-tab" data-bs-toggle="tab" data-bs-target="#video">
                                                  <span class="ms-1"><?php echo e(__('Video')); ?></span>
                                              </a>
                                          </li>

                                          <li class="nav-item">
                                              <a class="nav-link mb-0 px-0 py-1" href="javascript:;" id="video-without-sound-tab" data-bs-toggle="tab" data-bs-target="#video-without-sound">
                                                  <span class="ms-1"><?php echo e(__('Video without Sound')); ?></span>
                                              </a>
                                          </li>

                                          <li class="nav-item">
                                              <a class="nav-link mb-0 px-0 py-1" href="javascript:;" id="audio-tab" data-bs-toggle="tab" data-bs-target="#audio">
                                                  <span class="ms-1"><?php echo e(__('Audio')); ?></span>
                                              </a>
                                          </li>
                                        <?php break; ?>

                                    <?php case ('TikTok'): ?>
                                          <li class="nav-item">
                                              <a class="nav-link mb-0 px-0 py-1 active" href="javascript:;" id="video-tab" data-bs-toggle="tab" data-bs-target="#video">
                                                  <span class="ms-1"><?php echo e(__('Video')); ?></span>
                                              </a>
                                          </li>

                                          <li class="nav-item">
                                              <a class="nav-link mb-0 px-0 py-1" href="javascript:;" id="audio-tab" data-bs-toggle="tab" data-bs-target="#audio">
                                                  <span class="ms-1"><?php echo e(__('Audio')); ?></span>
                                              </a>
                                          </li>
                                        <?php break; ?>

                                    <?php default: ?>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1 active" href="javascript:;" id="video-tab" data-bs-toggle="tab" data-bs-target="#video">
                                                <span class="ms-1"><?php echo e(__('Download Information')); ?></span>
                                            </a>
                                        </li>
                                <?php endswitch; ?>

                            </ul>

                            <div class="tab-content">

                                <div class="card h-100 tab-pane fade <?php echo e(($data['source'] != 'SoundCloud') ? 'active show' : ''); ?> rounded-top-0" id="video" role="tabpanel" aria-labelledby="video-tab">
                                    <div class="card-body table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th><?php echo e(__('Resolution')); ?></th>
                                                    <th><?php echo e(__('Size')); ?></th>
                                                    <th><?php echo e(__('Download')); ?></th>
                                                </tr>                                          

                                                <?php $__currentLoopData = $data['links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  
                                                  <?php if( ($value['type'] === "mp4" && $value['mute'] === false) || $value['type'] === "jpg" ): ?>
                                                    
                                                    <tr>
                                                      <td class="align-middle py-4">

                                                          <?php if( !empty( $value['quality'] ) ): ?>
                                                            <span class="d-block">
                                                              <?php echo e($value['quality']); ?> (.<?php echo e(($value['type'] == 'progressive') ? 'mp3' : $value['type']); ?>)

                                                              <?php switch( $value['quality'] ):
                                                                  case ('4320p'): ?>
                                                                  <?php case ('4320p50'): ?>
                                                                  <?php case ('4320p60'): ?>
                                                                  <?php case ('4320P'): ?>
                                                                  <?php case ('4320P50'): ?>
                                                                  <?php case ('4320P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('8K')); ?></span>
                                                                    <?php break; ?>

                                                                  <?php case ('2880p'): ?>
                                                                  <?php case ('2880p50'): ?>
                                                                  <?php case ('2880p60'): ?>
                                                                  <?php case ('2880P'): ?>
                                                                  <?php case ('2880P50'): ?>
                                                                  <?php case ('2880P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('5K')); ?></span>
                                                                    <?php break; ?>

                                                                  <?php case ('2160p'): ?>
                                                                  <?php case ('2160p50'): ?>
                                                                  <?php case ('2160p60'): ?>
                                                                  <?php case ('2160P'): ?>
                                                                  <?php case ('2160P50'): ?>
                                                                  <?php case ('2160P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('4K')); ?></span>
                                                                    <?php break; ?>

                                                                  <?php case ('1440p'): ?>
                                                                  <?php case ('1440p50'): ?>
                                                                  <?php case ('1440p60'): ?>
                                                                  <?php case ('1440P'): ?>
                                                                  <?php case ('1440P50'): ?>
                                                                  <?php case ('1440P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('2K')); ?></span>
                                                                    <?php break; ?>

                                                                  <?php case ('1080p'): ?>
                                                                  <?php case ('1080p50'): ?>
                                                                  <?php case ('1080p60'): ?>
                                                                  <?php case ('1080P'): ?>
                                                                  <?php case ('1080P50'): ?>
                                                                  <?php case ('1080P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('Full HD')); ?></span>
                                                                    <?php break; ?>

                                                                  <?php case ('720p'): ?>
                                                                  <?php case ('720p50'): ?>
                                                                  <?php case ('720p60'): ?>
                                                                  <?php case ('720P'): ?>
                                                                  <?php case ('720P50'): ?>
                                                                  <?php case ('720P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('HD')); ?></span>
                                                                    <?php break; ?>

                                                                  <?php default: ?>
                                                              <?php endswitch; ?>

                                                              <?php if( !empty($value['watermark']) && $value['watermark'] == true ): ?>
                                                                <span class="badge bg-gradient-success"><?php echo e(__('No Watermark')); ?></span>
                                                              <?php endif; ?>

                                                            </span>
                                                          <?php endif; ?>

                                                      </td>
                                                      <td class="align-middle">
                                                            <?php if( $value['size'] != 0 ): ?>
                                                              <span class="d-block"><?php echo e($value['size']); ?></span>
                                                            <?php endif; ?>
                                                      </td>

                                                      <td class="align-middle">
                                                          <a class="btn bg-gradient-success mb-0" href="<?php echo e($value['url']); ?>" title="<?php echo e(__('Download')); ?>" onclick="window.location.href='<?php echo e($value['filename']); ?>.<?php echo e($value['type']); ?>'">
                                                            <span class="d-block"><i class="fas fa-download fa-fw"></i> <?php echo e(__('Download')); ?></span>
                                                          </a>
                                                      </td>

                                                    </tr>

                                                  <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                               

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            
                                <div class="card h-100 tab-pane fade rounded-top-0" id="video-without-sound" role="tabpanel" aria-labelledby="video-without-sound-tab">
                                    <div class="card-body table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th><?php echo e(__('Resolution')); ?></th>
                                                    <th><?php echo e(__('Size')); ?></th>
                                                    <th><?php echo e(__('Download')); ?></th>
                                                </tr>                                          

                                                <?php $__currentLoopData = $data['links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <?php if( ($data['source'] === 'Youtube' && $value['mute'] === true) || ($value['type'] === "mp4" && $value['mute'] === true) ): ?>
                                                    <tr>
                                                      <td class="align-middle py-4">

                                                          <?php if( !empty( $value['quality'] ) ): ?>
                                                            <span class="d-block">
                                                              <?php echo e($value['quality']); ?> (.<?php echo e(($value['type'] == 'progressive') ? 'mp3' : $value['type']); ?>)

                                                              <?php switch( $value['quality'] ):
                                                                  case ('4320p'): ?>
                                                                  <?php case ('4320p50'): ?>
                                                                  <?php case ('4320p60'): ?>
                                                                  <?php case ('4320P'): ?>
                                                                  <?php case ('4320P50'): ?>
                                                                  <?php case ('4320P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('8K')); ?></span>
                                                                    <?php break; ?>

                                                                 <?php case ('2880p'): ?>
                                                                  <?php case ('2880p50'): ?>
                                                                  <?php case ('2880p60'): ?>
                                                                  <?php case ('2880P'): ?>
                                                                  <?php case ('2880P50'): ?>
                                                                  <?php case ('2880P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('5K')); ?></span>
                                                                    <?php break; ?>

                                                                  <?php case ('2160p'): ?>
                                                                  <?php case ('2160p50'): ?>
                                                                  <?php case ('2160p60'): ?>
                                                                  <?php case ('2160P'): ?>
                                                                  <?php case ('2160P50'): ?>
                                                                  <?php case ('2160P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('4K')); ?></span>
                                                                    <?php break; ?>

                                                                  <?php case ('1440p'): ?>
                                                                  <?php case ('1440p50'): ?>
                                                                  <?php case ('1440p60'): ?>
                                                                  <?php case ('1440P'): ?>
                                                                  <?php case ('1440P50'): ?>
                                                                  <?php case ('1440P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('2K')); ?></span>
                                                                    <?php break; ?>

                                                                  <?php case ('1080p'): ?>
                                                                  <?php case ('1080p50'): ?>
                                                                  <?php case ('1080p60'): ?>
                                                                  <?php case ('1080P'): ?>
                                                                  <?php case ('1080P50'): ?>
                                                                  <?php case ('1080P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('Full HD')); ?></span>
                                                                    <?php break; ?>

                                                                  <?php case ('720p'): ?>
                                                                  <?php case ('720p50'): ?>
                                                                  <?php case ('720p60'): ?>
                                                                  <?php case ('720P'): ?>
                                                                  <?php case ('720P50'): ?>
                                                                  <?php case ('720P60'): ?>
                                                                      <span class="badge bg-gradient-danger"><?php echo e(__('HD')); ?></span>
                                                                    <?php break; ?>

                                                                  <?php default: ?>
                                                              <?php endswitch; ?>

                                                            </span>
                                                          <?php endif; ?>

                                                      </td>
                                                      <td class="align-middle">
                                                            <?php if( $value['size'] != 0 ): ?>
                                                              <span class="d-block"><?php echo e($value['size']); ?></span>
                                                            <?php endif; ?>
                                                      </td>

                                                      <td class="align-middle">
                                                          <a class="btn bg-gradient-success mb-0" href="<?php echo e($value['url']); ?>" title="<?php echo e(__('Download')); ?>" onclick="window.location.href='<?php echo e($value['filename']); ?>.<?php echo e($value['type']); ?>'">
                                                            <span class="d-block"><i class="fas fa-download fa-fw"></i> <?php echo e(__('Download')); ?></span>
                                                          </a>
                                                      </td>

                                                    </tr>
                                                  <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                               

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card h-100 tab-pane fade <?php echo e(($data['source'] == 'SoundCloud') ? 'active show' : ''); ?> rounded-top-0" id="audio" role="tabpanel" aria-labelledby="audio-tab">
                                    <div class="card-body table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th><?php echo e(__('Resolution')); ?></th>
                                                    <th><?php echo e(__('Size')); ?></th>
                                                    <th><?php echo e(__('Download')); ?></th>
                                                </tr>                                          

                                                <?php $__currentLoopData = $data['links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <?php if( !empty( $value['type'] ) && ( $value['type'] == 'mp3' || $value['type'] == 'm4a' || $value['type'] == 'hls' || preg_match('/.*kbps.*/', $value['quality'], $matches) ) ): ?>
                                                    <tr>
                                                      <td class="align-middle py-4">

                                                          <?php if( !empty( $value['quality'] ) ): ?>
                                                            <span class="d-block">
                                                              <?php echo e($value['quality']); ?> (.<?php echo e(($value['type'] == 'progressive') ? 'mp3' : $value['type']); ?>)
                                                            </span>
                                                          <?php endif; ?>

                                                      </td>
                                                      <td class="align-middle">
                                                            <?php if( $value['size'] != 0 ): ?>
                                                              <span class="d-block"><?php echo e($value['size']); ?></span>
                                                            <?php endif; ?>
                                                      </td>

                                                      <td class="align-middle">
                                                            <a class="btn bg-gradient-success mb-0" href="<?php echo e($value['url']); ?>" title="<?php echo e(__('Download')); ?>" onclick="window.location.href='<?php echo e($value['filename']); ?>.<?php echo e($value['type']); ?>'">
                                                              <span class="d-block"><i class="fas fa-download fa-fw"></i> <?php echo e(__('Download')); ?></span>
                                                            </a>
                                                      </td>

                                                    </tr>
                                                  <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                               

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                          <?php else: ?>

                            <div class="alert alert-danger" role="alert">
                                <?php echo e(__('No data found!')); ?>

                            </div>

                          <?php endif; ?>

                        </div>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </section>

          <?php endif; ?>

          <?php if( $general->supported_sites == true && !empty($supported_sites) && ( $page->type == 'downloader' || $page->type == 'home' ) ): ?>
            <section class="my-3">
              <div class="container">
                <div class="row">
                  <div class="info-horizontal bg-gray-100 border-radius-xl p-4">
                    <h5 class="text-center text-gradient text-dark"><?php echo e(__('Supported Resources')); ?></h5>
                    <div class="is-divider"></div>
                    <div class="row">
                        <?php $__currentLoopData = $supported_sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supported_site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="col">
                            <div class="card card-plain text-center">
                              <a href="<?php echo e(url('/') . '/' .  $supported_site['link']); ?>">
                                <img class="avatar avatar-md shadow" src="<?php echo e($supported_site['image']); ?>">
                                <div class="card-body px-0">
                                  <h6 class="card-title"><?php echo e($supported_site['title']); ?></h6>
                                </div>
                              </a>
                            </div>
                          </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          <?php endif; ?>

          <section class="my-3">
              <div class="container">
                  <div class="row">
                      <div class="info-horizontal bg-gray-100 border-radius-xl p-5">

                          <?php if( $page->ads_status == true && $advertisement->area3_status == true && $advertisement->area3 != null ): ?>
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

                          <div id="page-content">

                            <?php if( Auth::user() ): ?>
                              <div class="d-flex justify-content-center">
                                <a href="<?php echo e(localization()->getLocalizedURL($pageTrans->locale, route('edit-page-translations', $pageTrans->translations[0]['id']), [], true)); ?>" class="btn btn-primary"><?php echo e(__('Edit Page')); ?></a>
                              </div>
                            <?php endif; ?>

                            <?php echo $pageTrans->description; ?>


                            <?php switch( $page->type ):

                                case ('report'): ?>
                                      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.report')->html();
} elseif ($_instance->childHasBeenRendered('OGXM3rJ')) {
    $componentId = $_instance->getRenderedChildComponentId('OGXM3rJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('OGXM3rJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OGXM3rJ');
} else {
    $response = \Livewire\Livewire::mount('frontend.report');
    $html = $response->html();
    $_instance->logRenderedChild('OGXM3rJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    <?php break; ?>

                                <?php case ('contact'): ?>
                                      <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('frontend.contact')->html();
} elseif ($_instance->childHasBeenRendered('Glht3px')) {
    $componentId = $_instance->getRenderedChildComponentId('Glht3px');
    $componentTag = $_instance->getRenderedChildComponentTagName('Glht3px');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Glht3px');
} else {
    $response = \Livewire\Livewire::mount('frontend.contact');
    $html = $response->html();
    $_instance->logRenderedChild('Glht3px', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    <?php break; ?>

                                <?php default: ?>
                            <?php endswitch; ?>
   
                          </div>

                          <?php if( $general->share_icons_status == true ): ?>

                            <div class="social-share text-center">
                              <div class="is-divider"></div>
                              <div class="share-icons relative">

                                  <a wire:ignore href="https://www.facebook.com/sharer.php?u=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                      onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','facebook','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                      data-label="Facebook"
                                      rel="noopener noreferrer nofollow"
                                      target="_blank"
                                      class="btn btn-facebook btn-simple rounded p-2">
                                      <i class="fab fa-facebook"></i>
                                  </a>

                                  <a wire:ignore href="https://twitter.com/share?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                      onclick="window.open('https://twitter.com/share?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','twitter','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                      rel="noopener noreferrer nofollow"
                                      target="_blank"
                                      class="btn btn-twitter btn-simple rounded p-2">
                                      <i class="fab fa-twitter"></i>
                                  </a>

                                  <a wire:ignore href="https://www.pinterest.com/pin-builder/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&media=<?php echo e($page->featured_image); ?>&description=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>"
                                      onclick="window.open('https://www.pinterest.com/pin-builder/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&media=<?php echo e($page->featured_image); ?>&description=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>','pinterest','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                      rel="noopener noreferrer nofollow"
                                      target="_blank"
                                      class="btn btn-pinterest btn-simple rounded p-2">
                                      <i class="fab fa-pinterest"></i>
                                  </a>

                                  <a wire:ignore href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                      onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','linkedin','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                      rel="noopener noreferrer nofollow"
                                      target="_blank"
                                      class="btn btn-linkedin btn-simple rounded p-2">
                                      <i class="fab fa-linkedin"></i>
                                  </a>

                                  <a wire:ignore href="https://www.reddit.com/submit?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&title=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>"
                                      onclick="window.open('https://www.reddit.com/submit?url=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>&title=<?php echo e(str_replace(' ', '%20', $pageTrans->title)); ?>','reddit','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                      rel="noopener noreferrer nofollow"
                                      target="_blank"
                                      class="btn btn-reddit btn-simple rounded p-2">
                                      <i class="fab fa-reddit"></i>
                                  </a>

                                  <a wire:ignore href="https://tumblr.com/widgets/share/tool?canonicalUrl=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>"
                                      onclick="window.open('https://tumblr.com/widgets/share/tool?canonicalUrl=<?php echo e(($page->type == 'home') ? route('home') : route('page', $page->slug )); ?>','tumblr','height=500,width=800,resizable=1,scrollbars=yes'); return false;"
                                      target="_blank"
                                      class="btn btn-tumblr btn-simple rounded p-2"
                                      rel="noopener noreferrer nofollow">
                                      <i class="fab fa-tumblr"></i>
                                  </a>

                              </div>
                            </div>
                          <?php endif; ?>

                          <?php if( $page->ads_status == true && $advertisement->area4_status == true && $advertisement->area4 != null ): ?>
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

                          <?php if( $general->author_box_status == true ): ?>

                            <hr class="horizontal dark">
                            <div class="card card-profile card-plain mt-4">
                              <div class="row">

                                <div class="col-lg-2">
                                  <a href="javascript:;">
                                    <div class="position-relative">
                                      <div class="blur-shadow-image">
                                        <img class="w-100 rounded-3 shadow-lg" src="<?php echo e($profile->avatar); ?>">
                                      </div>
                                    </div>
                                  </a>
                                </div>

                                <div class="col-lg-10 ps-0 my-auto">
                                  <div class="card-body text-start py-0">

                                    <div class="p-md-0 pt-3">
                                      <h5 class="font-weight-bolder mb-0"><?php echo e($profile->fullname); ?></h5>
                                      <p class="text-uppercase text-sm font-weight-bold mb-2"><?php echo e($profile->position); ?></p>
                                    </div>

                                    <p class="mb-4"><?php echo e(__($profile->bio)); ?></p>

                                    <?php if( ($profile->social_status == true) && !empty($profile->user_socials) ): ?>

                                      <?php $__currentLoopData = $profile->user_socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <a class="btn btn-<?php echo e($element->name); ?> btn-simple mb-0 ps-1 pe-2 py-0" href="<?php echo e($element->url); ?>" target="blank">
                                          <i class="fab fa-<?php echo e($element->name); ?> fa-lg" aria-hidden="true"></i>
                                        </a>

                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php endif; ?>

                                  </div>
                                </div>

                              </div>
                            </div>

                          <?php endif; ?>

                      </div>
                  </div>
              </div>
          </section>

        <?php endif; ?>

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
                
                <div class="col-md-12 col-lg-<?php echo e(($notice->button == true) ? '10' : '12'); ?> my-auto <?php echo e($notice->align); ?>">
                  <?php echo __(GrahamCampbell\Security\Facades\Security::clean($notice->notice)); ?>

                </div>

                <?php if( $notice->button == true): ?>
                  <div class="col-md-12 col-lg-2 my-auto p-2">
                      <button id="acceptCookies" target="_blank" class="btn btn-sm bg-white mb-0 text-capitalize"> <?php echo e(__('Accept all cookies')); ?> </button>
                  </div>
                <?php endif; ?>

                <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">x</button>

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

        <script>
           (function( $ ) {
              "use strict";

                document.addEventListener('livewire:load', function () {

                      document.getElementById('paste').addEventListener('click', function(paste) {

                          paste = document.getElementById('paste');

                          '<i class="far fa-trash-alt fa-lg"></i>' === paste.innerHTML ? (link.value = "", paste.innerHTML = '<i class="far fa-clipboard fa-lg"></i>') : navigator.clipboard.readText().then(function(clipText) {
                              
                              window.livewire.find('<?php echo e($_instance->id); ?>').set('link', clipText);

                          }, paste.innerHTML = '<i class="far fa-trash-alt fa-lg"></i>');

                      });

                    <?php if( !empty( Request::get('url') ) ): ?>
                      window.livewire.find('<?php echo e($_instance->id); ?>').set('link', '<?php echo e(Request::get('url')); ?>' );
                    <?php endif; ?>
                });

          })( jQuery );
        </script>

        <?php if( $advanced->footer_status == true && $advanced->insert_footer != null ): ?>
          <?php echo $advanced->insert_footer; ?>

        <?php endif; ?>

</div>
<?php /**PATH C:\xampp\htdocs\laravel\y2load\components\resources\views/livewire/frontend/pages.blade.php ENDPATH**/ ?>