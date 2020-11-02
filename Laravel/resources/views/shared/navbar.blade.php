<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PHP Laravel 5</a>
        </div>

        <!-- Navbar Right -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li class="active"><a href="/public_html_1/home">Home</a></li>
                @else
                    <li class="active"><a href="/public_html_1/home">Home</a></li>
                    <li><a href="/public_html_1/page1">Create Message</a></li>
                    <li><a href="/public_html_1/page2">View Messages</a></li>
                    <li><a href="/public_html_1/blog">Blog</a></li>
                    <li><a href="/page4"></a></li>
    		    @endif
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      @if (Auth::check())
                          @role('manager')
                              <li><a href="/public_html_1/admin/home">Admin</a></li>
                          @endrole
                          <li><a href="/public_html_1/users/logout">Logout</a></li>
                      @else
                        <li><a href="/public_html_1/users/register">Register</a></li>
                        <li><a href="/public_html_1/users/login">Login</a></li>
                      @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


