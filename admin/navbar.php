<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 5px">
    <div class="navbar-header">
        <a class="navbar-bra" href="#">Sinto Electronics Ltd||P.O BOX 4589-00100 Nairobi Kenya|| Email:info@sinto.co.ke</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span> My Account</a></li>
                <li class="divider"></li>
                <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="index.php"><i class="fa fa-home fa-fw"></i>Dashboard</a>
                </li>

                <li>
                    <a href="sales_person.php"> <i class="fa fa-user"></i>Sales Persons</a>
                </li>
                <li>
                    <a href="product.php"> <i class="fa fa-product-hunt"></i> Products</a>
                </li>
                <li>
                    <a href="supplier.php"> <i class="fa fa-truck"></i> Suppliers</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-copy fa-fw"></i> Reports<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="sales.php"><i class="fa fa-money fa-fw"></i> Sales Report</a>
                        </li>
                        <li>
                            <a href="inventory.php"><i class="fa fa-barcode fa-fw"></i> Inventory Report</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
        </div>

    </div>
    <style>
        body,
        .navbar,
        .navbar-default {
            background-color: darkcyan;
        }

        body,
        .navbar,
        .navbar-default:hover,
        .navbar-default:active {
            color: darkcyan
        }

        a {
            color: white;
            font-weight: 600;
            padding: 10px;
            font-size: 15px;
        }
    </style>
</nav>