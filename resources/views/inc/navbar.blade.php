
  <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container"  >
        <a class="navbar-brand" href="{{ url('/home') }}">
            <div>ISMIS v0.1</div>
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/" style="background: #0984e3; border-radius: 20px; padding: 7px; margin-right: 10px;">Student Enrollment</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="/management" style="background:#0984e3; border-radius: 20px; padding: 7px; margin-right: 10px;">Student Management</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/subject" style="background:#0984e3; border-radius: 20px; padding: 7px; margin-right: 10px;">Managed Subject</a>
                </li>
            </ul>
           
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                  <button class="btn btn-warning"> {{Auth::user()->user_type}} </button>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <li><a href="/home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            
                            

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </li>
                </ul>
            </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>