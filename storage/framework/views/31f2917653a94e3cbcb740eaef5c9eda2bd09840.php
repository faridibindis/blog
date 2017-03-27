<?php $__env->startSection('title', '| Create New Post'); ?>

<?php $__env->startSection('stylesheets'); ?>

	<?php echo Html::style('css/parsley.css'); ?>

	<?php echo Html::style('vendor/select2/dist/css/select2.css'); ?>


	<?php echo Html::script('vendor/tinymce/js/tinymce/tinymce.js'); ?>


	<script type="text/javascript">
		// Initialize
			tinymce.init({
				selector: '#post_body',
				menubar: false,
				plugins: 'link code'
			});
	</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel mb25 shadow">
		      <div class="panel-heading border">
		        <h4>Create New Post <i class="fa fa-file-text-o"></i></h4>
		      </div>
		      <div class="panel-body">
		        <div class="row no-margin">
		          <div class="col-lg-12">
		          	<?php echo Form::open(['route' => 'post.store', 'class' => 'form-horizontal bordered-group', 'data-parsley-validate' => '']); ?>

		          		<div class="form-group">
		          				<?php echo e(Form::label('title', 'Title:', ['class' => 'col-md-1 control-label'])); ?>

		          			
		          			<div class="col-md-11">
		          				<?php echo e(Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'placeholder' => 'Give your post a Title'))); ?>

		          			</div> 
					    </div>
					    <div class="form-group">
					    	<?php echo e(Form::label('slug', 'URL:', ['class' => 'col-md-1 control-label'])); ?>

					  
					    	<div class="col-md-11">
					    		<?php echo e(Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255', 'placeholder' => 'URL'))); ?>

					    	</div>
					    </div>
					    <div class="form-group">
					    	<?php echo e(Form::label('category', 'Category:', ['class' => 'col-md-1 control-label'])); ?>

					    	
					    	<div class="col-md-11">
					    		<select class="form-control" name="category_id">
					    			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    				<option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
					    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                    </select>
					    	</div>
					    </div> 
					    <div class="form-group">
					    	<?php echo e(Form::label('tags', 'Tags:', ['class' => 'col-md-1 control-label'])); ?>

					    	
					    	<div class="col-md-11">
					    		<select class="form-control select2-multi" name="tags[]" multiple="multiple">
					    			<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    				<option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
					    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                    </select>
					    	</div>
					    </div> 
					    <div class="form-group">
						    <?php echo e(Form::label('body', 'Body:', ['class' => 'col-md-1 control-label'])); ?>

						    <div class="col-md-11">
						    	<?php echo e(Form::textarea('body', null, array('id' => 'post_body','rows' => '8', 'class' => 'form-control', 'placeholder' => 'Post Body'))); ?>

						    </div>
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


	<script type="text/javascript">
		$(function () {
		  	$('[data-toggle="tooltip"]').tooltip()
		})
	</script>

	<?php echo Html::script('vendor/select2/dist/js/select2.js'); ?>


	<script type="text/javascript">
		$(".select2-multi").select2();
	</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>