<div>

		<button class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#addNewPage"><i class="fas fa-plus fa-fw"></i> <?php echo e(__('Add New Page')); ?></button>

		<!-- begin:Form Search -->
		<form id="formSearchPage">
			<div class="input-group mb-3">
				<input type="text" class="form-control form-control-lg" wire:model="searchQuery" placeholder="<?php echo e(__('Search with title...')); ?>">
			</div>
		</form>
		<!-- end:Form Search -->

		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table align-items-center">
						<tbody>
							<tr>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Slug')); ?></th>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?php echo e(__('Page Type')); ?></th>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Latest updates')); ?></th>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?php echo e(__('Default Language')); ?></th>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?php echo e(__('Translation Progress')); ?></th>
								<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Action')); ?></th>
							</tr>

							<?php if( $pages->isNotEmpty() ): ?>

								<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

									<tr>
										<td class="align-middle">
											<div class="d-flex px-2 py-1">
												<div>
													<img src="<?php echo e(($page->featured_image) ? $page->featured_image : asset('assets/img/no-thumb.jpg')); ?>" class="avatar avatar-sm me-3">
												</div>
												<div class="d-flex align-items-center">
													<h6 class="mb-0 text-xs"><?php echo e($page->slug); ?></h6>
												</div>
											</div>
										</td>
										<td class="align-middle">
											<p class="text-xs font-weight-bold mb-0"><?php echo e($page->type); ?></p>
										</td>
										<td class="align-middle">
											<span class="text-secondary text-xs font-weight-bold"><?php echo e($page->updated_at); ?></span>
										</td>
										<td class="align-middle">
											<img src="<?php echo e(asset('assets/img/flags/' . $default_lang . '.svg')); ?>" class="lang-menu mx-auto"> 
										</td>

										<td class="align-middle">

											<?php $__currentLoopData = $translation_progress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												<?php if($value['page_id'] == $page->id): ?>

													<?php if($value['progress'] == $total_lang): ?>
														<span class="badge bg-gradient-success"><?php echo e($value['progress']); ?>/<?php echo e($total_lang); ?></span>
													<?php else: ?>
														<span class="badge bg-gradient-secondary"><?php echo e($value['progress']); ?>/<?php echo e($total_lang); ?></span>
													<?php endif; ?>
													
												<?php endif; ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											
										</td>
										<td class="align-middle w-25">
											<a href="<?php echo e(route('page-translations', $page->id )); ?>" class="btn btn-sm btn-primary mb-0" title="<?php echo e(__('Translations')); ?>"><i class="fas fa-language fa-fw"></i> Translations</a>
											<a wire:click="onShowEditPageModal( <?php echo e($page->id); ?> )" class="btn btn-sm btn-info mb-0" title="<?php echo e(__('Edit')); ?>"><i class="fas fa-edit fa-fw"></i> <?php echo e(__('Edit')); ?></a>
											<a wire:click="onDeleteConfirmPage( <?php echo e($page->id); ?> )" class="btn btn-sm btn-danger mb-0" title="<?php echo e(__('Delete')); ?>"><i class="fas fa-trash fa-fw"></i> <?php echo e(__('Delete')); ?></a>
										</td>
									</tr>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<?php else: ?>

								<tr>
									<td class="align-middle"><?php echo e(__('No record found')); ?></td>
								</tr>

							<?php endif; ?>

						</tbody>
					</table>
				</div>

				<div class="float-end">
					<!-- begin:pagination -->
					<?php echo e($pages->links()); ?>

					<!-- begin:pagination -->
				</div>
				
			</div>
		</div>

	    <!-- Begin::Add New Page -->
	    <div class="modal fade" id="addNewPage" tabindex="-1" role="dialog" aria-labelledby="addNewPageLabel" aria-hidden="true">
	      <div class="modal-dialog modal-dialog-centered">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="addNewPageModalLabel"><?php echo e(__('Add New Page')); ?></h5>
	            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>

	          <div class="modal-body">
	            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.pages.create')->html();
} elseif ($_instance->childHasBeenRendered('i3iNu9F')) {
    $componentId = $_instance->getRenderedChildComponentId('i3iNu9F');
    $componentTag = $_instance->getRenderedChildComponentTagName('i3iNu9F');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('i3iNu9F');
} else {
    $response = \Livewire\Livewire::mount('admin.pages.create');
    $html = $response->html();
    $_instance->logRenderedChild('i3iNu9F', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	          </div>

	        </div>
	      </div>
	    </div>
	    <!-- End::Add New Page -->

	    <!-- Begin::Edit Page -->
	    <div class="modal fade" id="editPage" tabindex="-1" role="dialog" aria-labelledby="editPageLabel" aria-hidden="true">
	      <div class="modal-dialog modal-dialog-centered">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="editPageModalLabel"><?php echo e(__('Edit Page')); ?></h5>
	            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>

	          <div class="modal-body">
	            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.pages.edit')->html();
} elseif ($_instance->childHasBeenRendered('9zTJmI6')) {
    $componentId = $_instance->getRenderedChildComponentId('9zTJmI6');
    $componentTag = $_instance->getRenderedChildComponentTagName('9zTJmI6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9zTJmI6');
} else {
    $response = \Livewire\Livewire::mount('admin.pages.edit');
    $html = $response->html();
    $_instance->logRenderedChild('9zTJmI6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	          </div>

	        </div>
	      </div>
	    </div>
	    <!-- End::Edit Page -->

</div>

<script src="<?php echo e(asset('components/public/vendor/laravel-filemanager/js/stand-alone-button.js')); ?>"></script>
<script>
(function( $ ) {
	"use strict";

	document.addEventListener('livewire:load', function () {

		window.addEventListener('swal:modal', event => {

			const swalWithBootstrapButtons = Swal.mixin({
			  customClass: {
			    confirmButton: 'btn bg-gradient-success',
			    cancelButton: 'btn bg-gradient-danger'
			  },
			  buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
			  title: event.detail.title,
			  text: event.detail.text,
			  icon: event.detail.type,
			  showCancelButton: true,
			  confirmButtonText: "<?php echo e(__('Yes, delete it!')); ?>",
			  cancelButtonText: "<?php echo e(__('Cancel')); ?>"
			}).then((result) => {
			  if (result.isConfirmed) {
			    window.livewire.emit('onDeletePage', event.detail.id)
			  }
			});
	
		});

		window.addEventListener('closeModal', event => {
			$('#' + event.detail.id).modal('hide');
		});

		window.addEventListener('showModal', event => {
			$('#' + event.detail.id).modal('show');
		});
			
		window.addEventListener('alert', event => {
			toastr[event.detail.type](event.detail.message);
		});

	});

})( jQuery );
</script><?php /**PATH C:\xampp\htdocs\asif\components\resources\views/livewire/admin/pages/showlist.blade.php ENDPATH**/ ?>