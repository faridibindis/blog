<?php $__env->startSection('title', '| Create New Post'); ?>

<?php $__env->startSection('stylesheets'); ?>

	<?php echo Html::style('css/parsley.css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel mb25">
		      <div class="panel-heading border">
		        <h3>Create New Post</h3>
		      </div>
		      <div class="panel-body">
		        <div class="row no-margin">
		          <div class="col-lg-12">
		          	<?php echo Form::open(['route' => 'post.store', 'class' => 'form-horizontal bordered-group', 'data-parsley-validate' => '']); ?>

		          		<div class="form-group">
						    <?php echo e(Form::label('title', 'Title:')); ?>

						    <?php echo e(Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))); ?>

					    </div>
					    <div class="form-group">
						    <?php echo e(Form::label('body', 'Body:')); ?>

						    <?php echo e(Form::textarea('body', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))); ?>

						</div>
						<div class="form-group">
					    	<?php echo e(Form::button('Create Post', array('class' => 'btn btn-primary btn-block', 'type' => 'submit'))); ?>

					    </div>
					<?php echo Form::close(); ?>

		          </div>
		        </div>
		      </div>
		    </div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

	<?php echo Html::script('js/parsley.min.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>