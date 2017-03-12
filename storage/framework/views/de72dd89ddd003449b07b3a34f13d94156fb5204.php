<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Tech Blog <?php echo $__env->yieldContent('title'); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="/favicon.ico">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <!-- page level plugin styles -->
  <!-- /page level plugin styles -->

  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link rel="stylesheet" href="<?php echo e(URL::asset('vendor/bootstrap/dist/css/bootstrap.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('vendor/perfect-scrollbar/css/perfect-scrollbar.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('styles/roboto.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('styles/font-awesome.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('styles/panel.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('styles/feather.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('styles/animate.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('styles/urban.css')); ?>">
   <?php echo $__env->yieldContent('stylesheets'); ?>
  <!-- endbuild -->

</head>
