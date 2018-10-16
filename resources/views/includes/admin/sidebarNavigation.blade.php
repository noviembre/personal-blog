<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">Navigation</li>

            <li class="nav-item">
                <a href="{{ route('userDashboard') }}" class="nav-link {{ Route::currentRouteName() == 'userDashboard' ? 'active' : ''}}">
                    <i class="icon icon-speedometer"></i> Dashboard
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a href="{{ route('userComments') }}" class="nav-link {{ Route::currentRouteName() == 'userComments' ? 'active' : ''}}">
                    <i class="icon icon-book-open"></i> Comments
                </a>
            </li>








            <!--=============   AUTHOR ROUTES STARTS   =============-->
            @if(Auth::user()->author == true)
            <li class="nav-item nav-dropdown">
               Author
            </li>
            <li class="nav-item">
                <a href="{{ route('authorDashboard') }}" class="nav-link {{ Route::currentRouteName() == 'authorDashboard' ? 'active' : ''}}">
                    <i class="icon icon-speedometer"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('authorPosts') }}" class="nav-link {{ Route::currentRouteName() == 'authorPosts' ? 'active' : ''}}">
                    <i class="icon icon-paper-clip"></i> Post
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('authorComments') }}" class="nav-link {{ Route::currentRouteName() == 'authorComments' ? 'active' : ''}}">
                    <i class="icon icon-grid"></i> Comments
                </a>
            </li>

            @endif
        <!--=============   AUTHOR ROUTES ENDS   =============-->


            <!--=============   ADMIN ROUTES STARTS   =============-->
             @if(Auth::user()->admin == true)

            <li class="nav-item">
                Admin
            </li>
            <li class="nav-item">
                <a href="{{ route('adminDashboard') }}" class="nav-link {{ Route::currentRouteName() == 'adminDashboard' ? 'active' : ''}}">
                    <i class="icon icon-speedometer"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('adminPosts') }}" class="nav-link {{ Route::currentRouteName() == 'adminPosts' ? 'active' : ''}}">
                    <i class="icon icon-paper-clip"></i> Post
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('adminComments') }}" class="nav-link {{ Route::currentRouteName() == 'adminComments' ? 'active' : ''}}">
                    <i class="icon icon-grid"></i> Comments
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('adminUsers') }}" class="nav-link {{ Route::currentRouteName() == 'adminUsers' ? 'active' : ''}}">
                    <i class="icon icon-user"></i> Users
                </a>
            </li>

             @endif
        <!--=============   ADMIN ROUTES ENDS   =============-->




        </ul>
    </nav>
</div>