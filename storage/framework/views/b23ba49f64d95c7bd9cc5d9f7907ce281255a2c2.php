<?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

  <?php echo $__env->make('partials._quicklauncher', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="app layout-fixed-header">

    <!-- sidebar panel -->
      <?php echo $__env->make('partials._sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- /sidebar panel -->

    <!-- content panel -->
    <div class="main-panel">

      <!-- top header -->
      <?php echo $__env->make('partials._nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- /top header -->

      <!-- main area -->
      <div class="main-content">
      <?php echo $__env->make('partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->yieldContent('main-content'); ?>
      </div>
      <!-- /main area -->
    </div>
    <!-- /content panel -->

    <!-- bottom footer -->
    <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- /bottom footer -->

   
  </div>
  <?php if(Auth::guest()): ?>  
    <?php echo $__env->make('partials._loginModal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>
  <?php echo $__env->make('partials._javascript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
