<?php $__env->startSection('title', '| Contact'); ?>
<?php $__env->startSection('main-content'); ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel mb25 shadow">
		      <div class="panel-heading border">
		        <h3>Please fill the contact form below</h3>
		      </div>
		      <div class="panel-body">
		        <div class="row no-margin">
		          <div class="col-lg-12">
		            <form class="form-horizontal bordered-group" role="form">
		              <div class="form-group">
		                <label class="col-sm-3 control-label">Full Name</label>
		                <div class="col-sm-8">
		                  <input type="text" class="form-control" placeholder="Enter your full name">
		                </div>
		              </div>
		              <div class="form-group">
		                <label class="col-sm-3 control-label">Email</label>
		                <div class="col-sm-8">
		                  <input type="email" class="form-control" placeholder="Enter your email address">
		                </div>
		              </div>
		              <div class="form-group">
		                <label class="col-sm-3 control-label">Message</label>
		                <div class="col-sm-8">
		                  <textarea class="form-control" placeholder="Message" rows="10" cols="50" style="resize: none;"></textarea>
		                </div>
		              </div>
		              <div class="form-group">
		                <button class="btn btn-primary btn-block">Submit Message</button>
		              </div>
		            </form>
		          </div>
		        </div>
		      </div>
		    </div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>