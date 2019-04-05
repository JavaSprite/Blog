<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="{{ route('home') }}">Blog</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	      <ul class="nav navbar-nav navbar-right">
	        @if (Auth::check())
		        <li class="nav-item"><a class="nav-link" href="#">当前用户</a></li>

		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">个人中心</a></li>
		            <li><a class="dropdown-item" href="{{route('users.edit', Auth::user())}}">编辑资料</a></li>
		            <li>
		            	<a class="dropdown-item" id="logout" href="#">
			              <form action="{{ route('logout') }}" method="POST">
			                {{ csrf_field() }}
			                {{ method_field('DELETE') }}
			                <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
			              </form>
			            </a>
		            </li>
		          </ul>
		        </li>
		    @else
		        <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助</a></li>
		        <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">登录</a></li>
		    @endif
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>