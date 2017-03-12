@include('partials._head')
<body>

  @include('partials._quicklauncher')

  <div class="app layout-fixed-header">

    <!-- sidebar panel -->
      @include('partials._sidebar')
    <!-- /sidebar panel -->

    <!-- content panel -->
    <div class="main-panel">

      <!-- top header -->
      @include('partials._nav')
      <!-- /top header -->

      <!-- main area -->
      <div class="main-content">
      @yield('main-content')
      </div>
      <!-- /main area -->
    </div>
    <!-- /content panel -->

    <!-- bottom footer -->
    @include('partials._footer')
    <!-- /bottom footer -->

   
  </div>

  @include('partials._javascript')
</body>

</html>