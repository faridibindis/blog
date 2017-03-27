<div class="modal bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="loginModal">
    <div class="modal-dialog modal-sm shadow">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <form class="form-horizontal m15" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="text-center mb15">
                      <h1>Tech Blog</h1>
                    </div>
                    <p class="text-center mb30">Welcome to Tech Blog. Please sign in to your account</p>
                    <div class="form-inputs">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" placeholder="Enter Your Email Address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Enter Your Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg mb15" type="submit">
                      <span>Sign in</span>
                    </button>
                    <p class="text-center">
                      Don't have an account? <a href="{{ route('register') }}" class="text-primary">Sign Up</a> Here
                      <br>
                      <a href="{{ route('password.request') }}" class="text-primary">Forgot Your Password?</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>