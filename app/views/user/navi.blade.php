<nav class="navbar navbar-default" role="navigation">

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span><a class="navbar-brand" href="#">Brand</a></span>
      {{ Form::open() }}
        <!--<input type="text" class="form-control" />-->
      {{ Form::close() }}
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#">Home</a></li>-->
        <li><a href="/u/{{ Sentry::getUser()->username }}"><span><img src="http://placehold.it/32x32" class="img-circle" width="32" height="32" /></span> {{ Sentry::getUser()->first_name }}</a></li>
        <!--<li><a href="#">Inbox</a></li>
        <li><a href="#">Friends</a></li>-->

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bars fa-lg"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/account">Account</a></li>
            <li><a href="/logout">Sign out</a></li>
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  <!--</div>--><!-- /.container-fluid -->
</nav>