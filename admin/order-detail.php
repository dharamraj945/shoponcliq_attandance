<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/order-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 10:58:28 GMT -->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Multikart - Premium Admin Template</title>

    <!-- Google font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&amp;display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>


    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none w-auto">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="blur-up lazyloaded d-block d-lg-none"
                                src="assets/images/dashboard/multikart-logo-black.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="mobile-sidebar w-auto">
                    <div class="media-body text-end switch-sm">
                        <label class="switch"><a href="javascript:void(0)"><i id="sidebar-toggle"
                                    data-feather="align-left"></i></a></label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        <li>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                                        class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                                </div>
                            </form>
                        </li>
                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize-2"></i></a></li>
                        <li class="onhover-dropdown"><a class="txt-dark" href="javascript:void(0)">
                                <h6>EN</h6>
                            </a>
                            <ul class="language-dropdown onhover-show-div p-20">
                                <li><a href="javascript:void(0)" data-lng="en"><i class="flag-icon flag-icon-is"></i>
                                        English</a></li>
                                <li><a href="javascript:void(0)" data-lng="es"><i class="flag-icon flag-icon-um"></i>
                                        Spanish</a></li>
                                <li><a href="javascript:void(0)" data-lng="pt"><i class="flag-icon flag-icon-uy"></i>
                                        Portuguese</a></li>
                                <li><a href="javascript:void(0)" data-lng="fr"><i class="flag-icon flag-icon-nz"></i>
                                        French</a></li>
                            </ul>
                        </li>
                        <li class="onhover-dropdown"><i data-feather="bell"></i><span
                                class="badge badge-pill badge-primary pull-right notification-badge">3</span><span
                                class="dot"></span>
                            <ul class="notification-dropdown onhover-show-div p-0">
                                <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0"><span><i class="shopping-color"
                                                        data-feather="shopping-bag"></i></span>Your order ready for
                                                Ship..!</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-success"><span><i class="download-color font-success"
                                                        data-feather="download"></i></span>Download Complete</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-body">
                                            <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger"
                                                        data-feather="alert-circle"></i></span>250 MB trash files</h6>
                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="bg-light txt-dark"><a href="javascript:void(0)">All</a> notification</li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)"><i class="right_side_toggle"
                                    data-feather="message-square"></i><span class="dot"></span></a></li>
                        <li class="onhover-dropdown">
                            <div class="media align-items-center"><img
                                    class="align-self-center pull-right img-50 blur-up lazyloaded"
                                    src="assets/images/dashboard/user3.html" alt="header-user">
                                <div class="dotted-animation"><span class="animate-circle"></span><span
                                        class="main-circle"></span></div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20">
                                <li><a href="javascript:void(0)"><i data-feather="user"></i>Edit Profile</a></li>
                                <li><a href="javascript:void(0)"><i data-feather="mail"></i>Inbox</a></li>
                                <li><a href="javascript:void(0)"><i data-feather="lock"></i>Lock Screen</a></li>
                                <li><a href="javascript:void(0)"><i data-feather="settings"></i>Settings</a></li>
                                <li><a href="javascript:void(0)"><i data-feather="log-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded"
                                src="assets/images/dashboard/multikart-logo.png" alt=""></a></div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                            aria-hidden="true"></i></a>
                    <div class="sidebar-user">
                        <img class="img-60" src="assets/images/dashboard/user3.html" alt="#">
                        <div>
                            <h6 class="f-14">JOHN</h6>
                            <p>general manager.</p>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li>
                            <a class="sidebar-header" href="index.html">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="box"></i>
                                <span>Products</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-circle"></i>
                                        <span>Physical</span>
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>

                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="category.html">
                                                <i class="fa fa-circle"></i>Category
                                            </a>
                                        </li>

                                        <li>
                                            <a href="category-sub.html">
                                                <i class="fa fa-circle"></i>Sub Category</a>
                                        </li>

                                        <li>
                                            <a href="product-list.html">
                                                <i class="fa fa-circle"></i>Product List</a>
                                        </li>

                                        <li>
                                            <a href="product-detail.html">
                                                <i class="fa fa-circle"></i>Product Detail</a>
                                        </li>

                                        <li>
                                            <a href="add-product.html">
                                                <i class="fa fa-circle"></i>Add Product
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-circle"></i>
                                        <span>Digital</span>
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>

                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="category-digital.html">
                                                <i class="fa fa-circle"></i>Category
                                            </a>
                                        </li>

                                        <li>
                                            <a href="category-digitalsub.html">
                                                <i class="fa fa-circle"></i>Sub Category
                                            </a>
                                        </li>

                                        <li>
                                            <a href="product-listdigital.html">
                                                <i class="fa fa-circle"></i>Product List
                                            </a>
                                        </li>

                                        <li>
                                            <a href="add-digital-product.html">
                                                <i class="fa fa-circle"></i>Add Product
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="product-review.html">
                                        <i class="fa fa-circle"></i>
                                        <span>product Review</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="archive"></i>
                                <span>Orders</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="order-list.html">
                                        <i class="fa fa-circle"></i>
                                        <span>Order List</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="order-tracking.html">
                                        <i class="fa fa-circle"></i>
                                        <span>Order Tracking</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="order-detail.html">
                                        <i class="fa fa-circle"></i>
                                        <span>Order Details</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="dollar-sign"></i>
                                <span>Sales</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="order.html">
                                        <i class="fa fa-circle"></i>Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="transactions.html">
                                        <i class="fa fa-circle"></i>Transactions
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="tag"></i>
                                <span>Coupons</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="coupon-list.html">
                                        <i class="fa fa-circle"></i>List Coupons
                                    </a>
                                </li>
                                <li>
                                    <a href="coupon-create.html">
                                        <i class="fa fa-circle"></i>Create Coupons
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="clipboard"></i>
                                <span>Pages</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="pages-list.html">
                                        <i class="fa fa-circle"></i>List Page
                                    </a>
                                </li>
                                <li>
                                    <a href="page-create.html">
                                        <i class="fa fa-circle"></i>Create Page
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="media.html">
                                <i data-feather="camera"></i>
                                <span>Media</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="align-left"></i>
                                <span>Menus</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="menu-list.html">
                                        <i class="fa fa-circle"></i>Menu Lists
                                    </a>
                                </li>
                                <li>
                                    <a href="create-menu.html">
                                        <i class="fa fa-circle"></i>Create Menu
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="user-plus"></i>
                                <span>Users</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="user-list.html">
                                        <i class="fa fa-circle"></i>User List
                                    </a>
                                </li>
                                <li>
                                    <a href="create-user.html">
                                        <i class="fa fa-circle"></i>Create User
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="users"></i>
                                <span>Vendors</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="list-vendor.html">
                                        <i class="fa fa-circle"></i>Vendor List
                                    </a>
                                </li>
                                <li>
                                    <a href="create-vendors.html">
                                        <i class="fa fa-circle"></i>Create Vendor
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="chrome"></i>
                                <span>Localization</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="translations.html"><i class="fa fa-circle"></i>Translations
                                    </a>
                                </li>
                                <li>
                                    <a href="currency-rates.html"><i class="fa fa-circle"></i>Currency Rates
                                    </a>
                                </li>
                                <li>
                                    <a href="taxes.html"><i class="fa fa-circle"></i>Taxes
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="support-ticket.html"><i
                                    data-feather="phone"></i><span>Support Ticket</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="reports.html"><i
                                    data-feather="bar-chart"></i><span>Reports</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)"><i
                                    data-feather="settings"></i><span>Settings</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="profile.html"><i class="fa fa-circle"></i>Profile
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a class="sidebar-header" href="invoice.html"><i
                                    data-feather="archive"></i><span>Invoice</span></a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="forgot-password.html">
                                <i data-feather="key"></i>
                                <span>Forgot Password</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="login.html">
                                <i data-feather="log-in"></i>
                                <span>Login</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <!-- Right sidebar Start-->
            <div class="right-sidebar" id="right_side_bar">
                <div>
                    <div class="container p-0">
                        <div class="modal-header p-l-20 p-r-20">
                            <div class="col-sm-8 p-0">
                                <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                            </div>
                            <div class="col-sm-4 text-end p-0">
                                <i class="me-2" data-feather="settings"></i>
                            </div>
                        </div>
                    </div>
                    <div class="friend-list-search mt-0">
                        <input type="text" placeholder="search friend">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="p-l-30 p-r-30 friend-list-name">
                        <div class="chat-box">
                            <div class="people-list friend-list">
                                <ul class="list">
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Vincent Porter</div>
                                            <div class="status">Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user1.html" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Ain Chavez</div>
                                            <div class="status">28 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user2.html" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Kori Thomas</div>
                                            <div class="status">Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user3.html" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Erica Hughes</div>
                                            <div class="status">Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user3.html" alt="">
                                        <div class="status-circle offline"></div>
                                        <div class="about">
                                            <div class="name">Ginger Johnston</div>
                                            <div class="status">2 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/user5.html" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Prasanth Anand</div>
                                            <div class="status">2 hour ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img class="rounded-circle user-image blur-up lazyloaded"
                                            src="assets/images/dashboard/designer.html" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Hileri Jecno</div>
                                            <div class="status">Online</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right sidebar Ends-->

            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Order Details
                                        <small>Multikart Admin panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i data-feather="home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">Menus</li>
                                    <li class="breadcrumb-item active">Order Details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="bg-inner cart-section order-details-table">
                                        <div class="row g-4">
                                            <div class="col-xl-8">
                                                <div class="card-details-title">
                                                    <h3>Order Number <span>#31684321</span></h3>
                                                </div>
                                                <div class="table-responsive table-details">
                                                    <table class="table cart-table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">Items</th>
                                                                <th class="text-end" colspan="2">
                                                                    <a href="javascript:void(0)"
                                                                        class="theme-color">Edit Items</a>
                                                                </th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr class="table-order">
                                                                <td>
                                                                    <a href="javascript:void(0)">
                                                                        <img src="assets/images/fashion/1.jpg"
                                                                            class="img-fluid blur-up lazyload" alt="">
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <p>Product Name</p>
                                                                    <h5>Outwear & Coats</h5>
                                                                </td>
                                                                <td>
                                                                    <p>Quantity</p>
                                                                    <h5>1</h5>
                                                                </td>
                                                                <td>
                                                                    <p>Price</p>
                                                                    <h5>$63.54</h5>
                                                                </td>
                                                            </tr>

                                                            <tr class="table-order">
                                                                <td>
                                                                    <a href="javascript:void(0)">
                                                                        <img src="assets/images/fashion/2.jpg"
                                                                            class="img-fluid blur-up lazyload" alt="">
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <p>Product Name</p>
                                                                    <h5>Slim Fit Plastic Coat</h5>
                                                                </td>
                                                                <td>
                                                                    <p>Quantity</p>
                                                                    <h5>5</h5>
                                                                </td>
                                                                <td>
                                                                    <p>Price</p>
                                                                    <h5>$63.54</h5>
                                                                </td>
                                                            </tr>

                                                            <tr class="table-order">
                                                                <td>
                                                                    <a href="javascript:void(0)">
                                                                        <img src="assets/images/fashion/3.jpg"
                                                                            class="img-fluid blur-up lazyload" alt="">
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <p>Product Name</p>
                                                                    <h5>Men's Sweatshirt</h5>
                                                                </td>
                                                                <td>
                                                                    <p>Quantity</p>
                                                                    <h5>1</h5>
                                                                </td>
                                                                <td>
                                                                    <p>Price</p>
                                                                    <h5>$63.54</h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>

                                                        <tfoot>
                                                            <tr class="table-order">
                                                                <td colspan="3">
                                                                    <h5>Subtotal :</h5>
                                                                </td>
                                                                <td>
                                                                    <h4>$55.00</h4>
                                                                </td>
                                                            </tr>

                                                            <tr class="table-order">
                                                                <td colspan="3">
                                                                    <h5>Shipping :</h5>
                                                                </td>
                                                                <td>
                                                                    <h4>$12.00</h4>
                                                                </td>
                                                            </tr>

                                                            <tr class="table-order">
                                                                <td colspan="3">
                                                                    <h5>Tax(GST) :</h5>
                                                                </td>
                                                                <td>
                                                                    <h4>$10.00</h4>
                                                                </td>
                                                            </tr>

                                                            <tr class="table-order">
                                                                <td colspan="3">
                                                                    <h4 class="theme-color fw-bold">Total Price :</h4>
                                                                </td>
                                                                <td>
                                                                    <h4 class="theme-color fw-bold">$6935.00</h4>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="col-xl-4">
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="order-success">
                                                            <h4>summery</h4>
                                                            <ul class="order-details">
                                                                <li>Order ID: 5563853658932</li>
                                                                <li>Order Date: October 22, 2021</li>
                                                                <li>Order Total: $907.28</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="order-success">
                                                            <h4>shipping address</h4>
                                                            <ul class="order-details">
                                                                <li>Gerg Harvell</li>
                                                                <li>568, Suite Ave.</li>
                                                                <li>Austrlia, 235153 Contact No. 48465465465</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="order-success">
                                                            <div class="payment-mode">
                                                                <h4>payment method</h4>
                                                                <p>Pay on Delivery (Cash/Card). Cash on delivery (COD)
                                                                    available. Card/Net banking acceptance subject to
                                                                    device availability.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="order-success">
                                                            <div class="delivery-sec">
                                                                <h3>expected date of delivery: <span>october 22,
                                                                        2021</span></h3>
                                                                <a href="order-tracking.html">track order</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- section end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright text-start">
                            <p class="mb-0">Copyright 2019 © Multikart All rights reserved.</p>
                        </div>
                        <div class="col-md-6 pull-right text-end">
                            <p class=" mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

</body>


<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/order-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 10:58:29 GMT -->
</html>