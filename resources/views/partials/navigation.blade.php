<!-- <nav class="navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="/">Chirpy</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            @if (Auth::check())
                <ul class="nav navbar-nav">
                    <li><a href="#">Timeline</a></li>
                    <li><a href="#">Friends</a></li>
                    <form class="navbar-form navbar-left" role="search" action="#">
                        <div class="form-group">
                            <input type="text" name="query" class="form-control search" placeholder="Find Friends">
                        </div>
                        <button type="submit" class="btn btn-sm btn-raised btn-info">Search</button>
                    </form>
                </ul>
            @endif
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    <li class="dropdown">
                      <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->username }}<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Update profile</a></li>
                        <li><a href="#">Sign out</a></li>
                      </ul>
                    </li>
                 @else
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                 @endif
            </ul>
        </div>
    </div>
</nav> -->


<nav class="navbar navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Chirpy</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if (Auth::check())
          <ul class="nav navbar-nav">
            <li><a href="#">Timeline</a></li>
            <li><a href="#">Friends</a></li>
          </ul>
          <div class="col-sm-3 col-md-3">
              <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Find a friend" name="query">
                    <div class="input-group-btn">
                        <button class="btn btn-default btn-search" type="submit"><i class="glyphicon glyphicon-search"></i> Search</button>
                    </div>
                </div>
              </form>
          </div>
      @endif
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->username }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Update Profile</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
        @else
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.End of container -->
</nav>
