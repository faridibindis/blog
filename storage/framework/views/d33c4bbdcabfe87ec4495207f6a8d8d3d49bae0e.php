<?php $__env->startSection('title', '| View Post'); ?>
<?php $__env->startSection('main-content'); ?>
	<div class="row">
        <div class="col-sm-9">
			<div class="panel shadow">
		      	<div class="panel-body">
			        <h4 style=""><?php echo e($post->title); ?></h4><hr>
			        <div style="padding: 10px">
			        	<?php echo $post->body; ?>

			        </div>
			        <hr>
			        <div class="pull-left">
			        	Tags: 
			        	<?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			        		<span class="label label-default"><?php echo e($tag->name); ?></span>
			        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			        </div>
			        <div class="pull-right">
			        	<div class="composer-options" style="display: inline-flex;">
			        		<?php echo Html::decode(Html::linkRoute('post.edit','<span class="fa fa-edit"></span>', array($post->id), array('class' => 'btn btn-primary btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Edit Post', 'data-original-title' => 'Edit Post'))); ?>


			        		<?php echo Form::open(['route' => ['post.destroy', $post->id], 'method' => 'DELETE']); ?>


			        			<?php echo e(Form::button('<span class="fa fa-trash-o"></span>', array('class' => 'btn btn-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Delete Post', 'data-original-title' => 'Delete Post', 'type' => 'submit', 'style' => 'margin-left:5px'))); ?>


			        		<?php echo Form::close(); ?>

			            </div>
			        </div>
		      	</div>
		    </div>

		    
		</div>
		<div class="col-sm-3">
			<div class="panel shadow">
			  	<div class="panel-body">
			    	<h3 class="mt0 mb0">Post Details</h3><hr>
			    	<div style="padding: 10px">
			    		<p>
			    			<small>URL <i class="icon-globe"></i>: <strong><a href="<?php echo e(route('blog.single', $post->slug)); ?>"><?php echo e(route('blog.single', $post->slug)); ?></a></strong></small>
			    		</p>
			    		<p>
			    			<small>Category: <strong><?php echo e($post->category->name); ?></strong></small>
			    		</p>
			    		<p>
			    			<small>Created on: <strong><?php echo e(date('F j, Y H:i', strtotime($post->created_at))); ?></strong></small>
			    		</p>
			    		<p>
			    			<small>Last Updated: <strong><?php echo e(date('F j, Y H:i', strtotime($post->updated_at))); ?></strong></small>
			    		</p>
			    		<hr>
			    		<?php echo Html::linkRoute('post.index','<< See All Posts', array(), array('class' => 'btn btn-default btn-sm btn-block')); ?>

			    	</div>
			  	</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

	<script type="text/javascript">
		$(function () {
		  	$('[data-toggle="tooltip"]').tooltip()
		})
	</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>