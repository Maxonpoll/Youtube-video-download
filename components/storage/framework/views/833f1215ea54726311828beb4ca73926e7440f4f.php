<div>
	
	  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main">
	    
	    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.sidenav-header','data' => []]); ?>
<?php $component->withName('admin.sidenav-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

	    <hr class="horizontal dark mt-0">

	    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.sidebar','data' => []]); ?>
<?php $component->withName('admin.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
	    
	  </aside>
	  
	  <main class="main-content mt-1 border-radius-lg">
	    <!-- Navbar -->
	    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="false">
	     <div class="container-fluid py-1 px-3">

	        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.breadcrumbs','data' => []]); ?>
<?php $component->withName('admin.breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

	        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.navright','data' => []]); ?>
<?php $component->withName('admin.navright'); ?>
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
	   </nav>
	  <!-- End Navbar -->

	  <div class="container-fluid py-4">
	    <div class="row">
	      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
	        <div class="card">
	          <div class="card-body p-3">
	            <div class="row">
	              <div class="col-8">
	                <div class="numbers">
	                  <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php echo e(__('Today')); ?></p>
	                  <h5 class="font-weight-bolder mb-0"><?php echo e($downloadToday); ?></h5>
	                </div>
	              </div>
	              <div class="col-4 text-end">
	                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
	                  <i class="ni ni-cloud-download-95 text-lg opacity-10" aria-hidden="true"></i>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
	        <div class="card">
	          <div class="card-body p-3">
	            <div class="row">
	              <div class="col-8">
	                <div class="numbers">
	                  <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php echo e(__('This week')); ?></p>
	                  <h5 class="font-weight-bolder mb-0"><?php echo e($downloadThisWeek); ?></h5>
	                </div>
	              </div>
	              <div class="col-4 text-end">
	                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
	                  <i class="ni ni-cloud-download-95 text-lg opacity-10" aria-hidden="true"></i>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
	        <div class="card">
	          <div class="card-body p-3">
	            <div class="row">
	              <div class="col-8">
	                <div class="numbers">
	                  <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php echo e(__('Last 30 Days')); ?></p>
	                  <h5 class="font-weight-bolder mb-0"><?php echo e($download30Days); ?></h5>
	                </div>
	              </div>
	              <div class="col-4 text-end">
	                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
	                  <i class="ni ni-cloud-download-95 text-lg opacity-10" aria-hidden="true"></i>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="col-xl-3 col-sm-6">
	        <div class="card">
	          <div class="card-body p-3">
	            <div class="row">
	              <div class="col-8">
	                <div class="numbers">
	                  <p class="text-sm mb-0 text-capitalize font-weight-bold"><?php echo e(__('All time')); ?></p>
	                  <h5 class="font-weight-bolder mb-0"><?php echo e($downloadAll); ?></h5>
	                </div>
	              </div>
	              <div class="col-4 text-end">
	                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
	                  <i class="ni ni-cloud-download-95 text-lg opacity-10" aria-hidden="true"></i>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="row mt-4">
	      <div class="col-lg-12">
	        <div class="card">
	          <div class="card-header pb-0">
	            <h6><?php echo e(__('Overview')); ?></h6>
	          </div>
	          <div class="card-body p-3">
	            <div class="chart">
	              <div class="chartjs-size-monitor">
	                <div class="chartjs-size-monitor-expand">
	                  <div class=""></div>
	                </div>
	                <div class="chartjs-size-monitor-shrink">
	                  <div class=""></div>
	                </div>
	              </div>
	              <canvas id="chart-line" class="chart-canvas chartjs-render-monitor" height="600" width="1762" style="display: block; height: 300px; width: 881px;"></canvas>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="row mt-4">
	      <div class="col-lg-12 mb-lg-0 mb-4">
	        <div class="card">

	          <div class="card-body p-3">
	            <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
	              <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
	              <canvas id="chart-bars" class="chart-canvas chartjs-render-monitor" height="340" style="display: block; height: 170px; width: 609px;" width="1218"></canvas>
	            </div>
	          </div>
	          <h6 class="ms-2 mt-4 mb-0"><?php echo e(__('Downloads per website (Updated daily)')); ?> </h6>
	          <div class="container-fluid border-radius-lg">
	            <div class="row">

	              <?php if( !empty($dlPerSite) ): ?>

	                <?php $__currentLoopData = $dlPerSite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                  <div class="col py-3 ps-0">
	                    <div class="d-flex mb-2">
	                      <p class="text-xs mt-1 mb-0 badge bg-gradient-success"><?php echo e($value['source']); ?></p>
	                    </div>
	                    <h4 class="font-weight-bolder"><?php echo e($value['downloads']); ?></h4>
	                  </div>
	                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	              <?php endif; ?>

	            </div>
	          </div>

	        </div>
	      </div>
	    </div>

	  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin.footer','data' => []]); ?>
<?php $component->withName('admin.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

	  </main>

	<script src="<?php echo e(asset('assets/js/chartjs.min.js')); ?>"></script>

	<script>
	   (function( $ ) {
	    "use strict";
	    
	      var ctx = document.getElementById("chart-bars").getContext("2d");

	      new Chart(ctx, {
	        type: "bar",
	        data: {
	          labels: [
	            <?php $__currentLoopData = $getAllWebsites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	              "<?php echo e($website['source']); ?>",
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	          ],
	          datasets: [{
	            label: "<?php echo e(__('Downloads')); ?>",
	            tension: 0.4,
	            borderWidth: 0,
	            pointRadius: 0,
	            backgroundColor: "#fff",
	            data: [
	            <?php $__currentLoopData = $downloadPerWebsite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $download): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	              "<?php echo e($download['source']); ?>",
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            ],
	            maxBarThickness: 6
	          }, ],
	        },
	        options: {
	          responsive: true,
	          maintainAspectRatio: false,
	          legend: {
	            display: false,
	          },
	          tooltips: {
	            enabled: true,
	            mode: "index",
	            intersect: false,
	          },
	          scales: {
	            yAxes: [{
	              gridLines: {
	                display: false,
	              },
	              ticks: {
	                suggestedMin: 0,
	                suggestedMax: <?php echo e($getMaxDownloadPerWebsite); ?>,
	                beginAtZero: true,
	                padding: 0,
	                fontSize: 14,
	                lineHeight: 3,
	                fontColor: "#fff",
	                fontStyle: 'normal',
	                fontFamily: "Open Sans",
	              },
	            }, ],
	            xAxes: [{
	              gridLines: {
	                display: false,
	              },
	              ticks: {
	                display: false,
	                padding: 20,
	              },
	            }, ],
	          },
	        },
	      });

	      var ctx2 = document.getElementById("chart-line").getContext("2d");
	      
	      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);
	      
	      gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
	      gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
	      gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

	      new Chart(ctx2, {
	        type: "line",
	        data: {
	          labels: [
	            <?php $__currentLoopData = $getAllDays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	              "<?php echo e($day['date']); ?>",
	            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	          ],
	          datasets: [{
	            label: "<?php echo e(__('Total Downloads')); ?>",
	            tension: 0.4,
	            borderWidth: 0,
	            pointRadius: 0,
	            borderColor: "#cb0c9f",
	            borderWidth: 3,
	            backgroundColor: gradientStroke1,
	            data: [
	              <?php $__currentLoopData = $downloadPerDay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $download): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                "<?php echo e($download['downloads']); ?>",
	              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            ],
	            maxBarThickness: 6

	          }
	          ],
	        },
	        options: {
	          responsive: true,
	          maintainAspectRatio: false,
	          legend: {
	            display: false,
	          },
	          tooltips: {
	            enabled: true,
	            mode: "index",
	            intersect: false,
	          },
	          scales: {
	            yAxes: [{
	              gridLines: {
	                borderDash: [2],
	                borderDashOffset: [2],
	                color: '#dee2e6',
	                zeroLineColor: '#dee2e6',
	                zeroLineWidth: 1,
	                zeroLineBorderDash: [2],
	                drawBorder: false,
	              },
	              ticks: {
	                suggestedMin: 0,
	                suggestedMax: <?php echo e($getMaxDownloads); ?>,
	                beginAtZero: true,
	                padding: 10,
	                fontSize: 11,
	                fontColor: '#adb5bd',
	                lineHeight: 3,
	                fontStyle: 'normal',
	                fontFamily: "Open Sans",
	              },
	            }, ],
	            xAxes: [{
	              gridLines: {
	                zeroLineColor: 'rgba(0,0,0,0)',
	                display: false,
	              },
	              ticks: {
	                padding: 10,
	                fontSize: 11,
	                fontColor: '#adb5bd',
	                lineHeight: 3,
	                fontStyle: 'normal',
	                fontFamily: "Open Sans",
	              },
	            }, ],
	          },
	        },
	      });

	    })( jQuery );
	</script>
</div><?php /**PATH C:\xampp\htdocs\laravel\Y2LOAD\components\resources\views/livewire/admin/dashboard.blade.php ENDPATH**/ ?>