<?php $__env->startSection('title', '| View Post'); ?>
<?php $__env->startSection('main-content'); ?>
	<p class="lead">This is the blog post</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>