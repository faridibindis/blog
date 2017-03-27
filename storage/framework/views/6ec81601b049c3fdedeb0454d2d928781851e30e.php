      
      <?php $__env->startSection('title', '| Home'); ?>
      <?php $__env->startSection('main-content'); ?>
        
        <div class="mb0">
          <div class="row">
            <div class="col-sm-8">
              <form>
                <input type="text" class="form-control input-lg" placeholder="Search..." style="box-shadow: 0 0 1px rgba(0,0,0,.2);">
              </form>
            </div>
            <div class="col-sm-4">
              <div class="panel shadow">
                <div class="panel-body" style="padding: 5px 15px;">
                  <h5 class="pull-left"><small>Today is <?php echo e(date("l jS \of F Y")); ?></small></h5>
                  <h5 class="pull-right"><small>Time</small></h5>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8">
            <div class="panel shadow">
              <div class="panel-body">
                <h4 style="padding: 10px;">Posts Feed <i class="icon-paper"></i></h4><hr>
                <div class="search-results">
                  <ul class="search-results-list">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <li class="search-result">
                        <h4>
                          <a href="<?php echo e(route('blog.single', $post->slug)); ?>"><?php echo e($post->title); ?></a>
                        </h4>
                        <p><?php echo e(substr(strip_tags($post->body), 0,300)); ?><?php echo e(strlen(strip_tags($post->body)) > 300 ? "..." : ""); ?></p>
                        <div class="mt20 mb0">
                          <a href="<?php echo e(route('blog.single', $post->slug)); ?>" class="btn btn-default btn-outline">Read More >></a>
                        </div>
                      </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                  <div class="text-center">
                      <?php echo $posts->links();; ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <?php echo $__env->make('partials._topposts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>
        </div>
      <?php $__env->stopSection(); ?>
     
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>