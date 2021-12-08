<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="/js/app.js"></script>
    <title>Document</title>
</head>
<body>
    <nav>
        <ul class="topnav">
            <li class="top_item">
                <a href="#" class="logo">LOGO</a>
            </li>
{{--            <li><a href="#"></a></li>--}}
{{--            <li><a href="#"></a></li>--}}
{{--            <li><a href="#"></a></li>--}}
            <li class="nav_dropdown">
                <a href="#" class="">Settings</a>
                <div class="dropdown">
                    <a href="#">Profile</a>
                    <a href="#">Logout</a>
                </div>
            </li>

        </ul>
    </nav>
    <main class="content-wrapper">
        <ul class="sidenav" role="navigation">
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="#" class="dd">Product</a>
                <div class="dropdown">
                    <a href="#">Add Category</a>
                    <a href="#">Add Product</a>
                </div>
            </li>
            <li>
                <a href="#" class="dd">Inventory Details</a>
                <div class="dropdown">
                    <a href="#">View Product</a>
                </div>
            </li>
            <li><a href="#">Sales Report</a></li>
            <li>
                <a href="#" class="dd">Invoice Details</a>
                <div class="dropdown">
                    <a href="#">Purchase Info</a>
                </div>
            </li>
            <li>
                <a href="#" class="dd">Order List</a>
                <div class="dropdown">
                    <a href="#">View all Purchase</a>
                    <a href="#">Checkout Item</a>
                </div>
            </li>
        </ul>
        <section class="content">
            @yield('content')

        </section>

    </main>

    <script src="/js/scripts.js"></script>
</body>
</html>
