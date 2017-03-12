<?php if(Session::has('success')): ?>
	
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     	<strong>Success:</strong> <?php echo e(Session::get('success')); ?>

    </div>

<?php endif; ?>

<?php if(count($errors) > 0): ?>
	
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     	<strong>Errors:</strong>
     	<ul>
     		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	     		<li><?php echo e($error); ?></li>
	     	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     	</ul>
    </div>

<?php endif; ?>