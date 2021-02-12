<div class="sidebar" data-color="orange" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
        -->
    <div class="logo">
        <a href="" class="simple-text logo-normal">
        <strong>Marcrohon WMS</strong>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="./dashboard.html">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/user*') ? 'active' : '' }}">
                <a class="nav-link" href="#" id="navbarUserDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">lock</i>
                    <p>System User</p>
                </a>
                <div class="dropdown-menu pb-3" aria-labelledby="navbarUserDropdownMenuLink">
                    <a class="dropdown-item" href="#">New User</a>
                    <a class="dropdown-item" href="#">View Users</a>
                </div>
            </li>
            <li class="nav-item dropdown {{ (Request::is('admin/register-customer') || Request::is('admin/customer-lists')) ? 'active' : '' }}">
                <a class="nav-link" href="#" id="navbarAccountDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">persons</i>
                    <p>Client Account</p>
                </a>
                <div class="dropdown-menu pb-3" aria-labelledby="navbarAccountDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('admin.register_customer') }}">New Client Account</a>
                    <a class="dropdown-item" href="{{ route('view_customers') }}">View Accounts</a>
                    <a class="dropdown-item" href="#">Bill and Payments</a>
                </div>
            </li>
            <li class="nav-item dropdown {{ Request::is('admin/transactions*') ? 'active' : '' }}">
                <a class="nav-link" href="#" id="navbarAccountDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">store</i>
                    <p>Transactions</p>
                </a>
                <div class="dropdown-menu pb-3" aria-labelledby="navbarAccountDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('new_transaction') }}">New Transaction</a>
                    <a class="dropdown-item" href="">View Transactions</a>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./tables.html">
                    <i class="material-icons">settings</i>
                    <p>System Setup</p>
                </a>
            </li>
            <!-- <li class="nav-item ">
                <a class="nav-link" href="./typography.html">
                    <i class="material-icons">library_books</i>
                    <p>Typography</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./notifications.html">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>