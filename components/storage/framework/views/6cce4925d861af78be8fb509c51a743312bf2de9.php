<section class="my-10">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 my-auto">
        <h1 class="display-1 text-bolder text-gradient text-danger"><?php echo e($pageTrans->title); ?></h1>
        <h2><?php echo e($pageTrans->subtitle); ?></h2>
        <p class="lead"><?php echo GrahamCampbell\Security\Facades\Security::clean($pageTrans->description); ?></p>
        <a class="btn bg-gradient-dark mt-4" href="<?php echo e(route('home')); ?>"><?php echo e(__('Go to Homepage')); ?></a>
      </div>
      <div class="col-lg-6 my-auto position-relative">
        <img class="w-100 position-relative" src="<?php echo e(asset('assets/img/illustrations/error-404.png')); ?>" alt="404-error">
      </div>
    </div>
  </div>
</section><?php /**PATH C:\xampp\htdocs\laravel\y2load\components\resources\views/components/frontend/404.blade.php ENDPATH**/ ?>