      @extends('main')
      @section('title', '| Home')
      @section('main-content')
        
        <div class="mb25">
          <div class="row">
            <div class="col-sm-8">
              <form>
                <input type="text" class="form-control input-lg" placeholder="Search...">
              </form>
            </div>
            <div class="col-sm-4">
              <div class="panel">
                <div class="panel-body" style="padding: 5px 15px;">
                  <h5 class="pull-left"><small>Today is</small></h5>
                  <h5 class="pull-right"><small>Today is</small></h5>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8">

            <div class="panel">
              <div class="panel-body">
                <h4 style="padding: 10px;">Welcome to Tech Blog<i></i></h4><hr>
                <div class="search-results">
                  <ul class="search-results-list">
                    <li class="search-result">
                      <h4>
                        <a href="javascript:;" class="text-info">Sublime - Web Application Admin Dashboard</a>
                      </h4>
                      <p>Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="panel">
              <div class="panel-body">
                <h3 class="mt0 mb0">Top Posts.</h3>
                <p class="text-muted"><small>Here are trending posts on <strong>Tech Blog</strong></small></p>
                <div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      @endsection
     