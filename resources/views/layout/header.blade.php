
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>SegerFlix – Filmes Online, TV Shows & Cinema</title>

</head>
<body>
<!-- header -->
<header class="header">
    <div class="header__content">
        <!-- header logo -->
        <a href="index.html" class="header__logo">
            <img src="img/logo.svg" alt="">
        </a>
        <!-- end header logo -->

        <!-- header menu btn -->
        <button class="header__btn" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <!-- end header menu btn -->
    </div>
</header>
<!-- end header -->

<!-- sidebar -->
<div class="sidebar">
    <!-- sidebar logo -->
    <a href="index.html" class="sidebar__logo">
        <img src="img/logo.svg" alt="">
    </a>
    <!-- end sidebar logo -->

    <!-- sidebar user -->
    <div class="sidebar__user">
        <div class="sidebar__user-img">
            <img src="img/user.svg" alt="">
        </div>

        <div class="sidebar__user-title">
            <span>Admin</span>
            <p>John Doe</p>
        </div>

        <button class="sidebar__user-btn" type="button">
            <i class="icon ion-ios-log-out"></i>
        </button>
    </div>
    <!-- end sidebar user -->

    <!-- sidebar nav -->
    <div class="sidebar__nav-wrap">
        <ul class="sidebar__nav">
            <li class="sidebar__nav-item">
                <a href="index.html" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-keypad"></i> <span>Dashboard</span></a>
            </li>

            <li class="sidebar__nav-item">
                <a href="catalog.html" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Catalogo</span></a>
            </li>

            <!-- collapse -->
          <!--  <li class="sidebar__nav-item">
                <a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false" aria-controls="collapseMenu"><i class="icon ion-ios-copy"></i> <span>Pages</span> <i class="icon ion-md-arrow-dropdown"></i></a>
                <ul class="collapse sidebar__menu" id="collapseMenu">
                    <li><a href="add-item.html">Add item</a></li>
                    <li><a href="edit-user.html">Edit user</a></li>
                    <li><a href="signin.html">Sign in</a></li>
                    <li><a href="signup.html">Sign up</a></li>
                    <li><a href="forgot.html">Forgot password</a></li>
                    <li><a href="404.html">404 page</a></li>
                </ul>
            </li> -->
            <!-- end collapse -->

            <li class="sidebar__nav-item">
                <a href="users.html" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Users</span></a>
            </li>

            <li class="sidebar__nav-item">
                <a href="comments.html" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i> <span>Comments</span></a>
            </li>

            <li class="sidebar__nav-item">
                <a href="reviews.html" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> <span>Reviews</span></a>
            </li>

            <li class="sidebar__nav-item">
                <a href="../main/index.html" class="sidebar__nav-link"><i class="icon ion-ios-arrow-round-back"></i> <span>Back to HotFlix</span></a>
            </li>
        </ul>
    </div>
    <!-- end sidebar nav -->

    <!-- sidebar copyright -->
    <div class="sidebar__copyright">© HOTFLIX, 2019—2021. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>
    <!-- end sidebar copyright -->
</div>
<!-- end sidebar -->

<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/admin.js') }}"></script>

@hasSection('js')
    @yield('js')
@endif

</body>
</html>
