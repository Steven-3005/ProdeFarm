<?php
    require_once("../../models/Menu.php");
    $menu = new Menu();
    $datos = $menu->get_menu_x_rol_id($_SESSION["ROL_ID"]);
?>

<div class="app-menu navbar-menu">

    <div class="navbar-brand-box">

        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="../../assets/images/logo-prodefarm.png" alt="" height="20">
            </span>
            <span class="logo-lg">
                <img src="../../assets/images/logo-prodefarm.png" alt="" height="60">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="../../assets/images/logo-prodefarm.png" alt="" height="20">
            </span>
            <span class="logo-lg">
                <img src="../../assets/images/logo-prodefarm.png" alt="" height="60">
            </span>
        </a>

        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>

    </div>

    <div id="scrollbar">

        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <?php
                    foreach ($datos as $row) {
                       if ($row["MEN_GRUPO"]=="Dashboard" && $row["MEND_PERMI"]=="Si"){
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="<?php echo $row["MEN_RUTA"];?>">
                                        <i class="ri-line-chart-fill"></i> <span data-key="t-widgets"><?php echo $row["MEN_NOM"];?></span>
                                    </a>
                                </li>
                            <?php
                        }
                    }
                ?>

                <li class="menu-title"><span data-key="t-menu">Mantenimiento</span></li>

                <?php
                    foreach ($datos as $row) {
                       if ($row["MEN_GRUPO"]=="Mantenimiento" && $row["MEND_PERMI"]=="Si"){
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="<?php echo $row["MEN_RUTA"];?>">
                                        <i class="ri-list-settings-fill"></i> <span data-key="t-widgets"><?php echo $row["MEN_NOM"];?></span>
                                    </a>
                                </li>
                            <?php
                        }
                    }
                ?>

                <li class="menu-title"><span data-key="t-menu">Modulo de Compra</span></li>

                <?php
                    foreach ($datos as $row) {
                       if ($row["MEN_GRUPO"]=="Compra" && $row["MEND_PERMI"]=="Si"){
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="<?php echo $row["MEN_RUTA"];?>">
                                        <i class="bx bx-first-aid"></i> <span data-key="t-widgets"><?php echo $row["MEN_NOM"];?></span>
                                    </a>
                                </li>
                            <?php
                        }
                    }
                ?>


                <li class="menu-title"><span data-key="t-menu">Modulo de Facturación</span></li>

                <?php
                    foreach ($datos as $row) {
                       if ($row["MEN_GRUPO"]=="Venta" && $row["MEND_PERMI"]=="Si"){
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="<?php echo $row["MEN_RUTA"];?>">
                                        <i class="bx bx-first-aid"></i> <span data-key="t-widgets"><?php echo $row["MEN_NOM"];?></span>
                                    </a>
                                </li>
                            <?php
                        }
                    }
                ?>


            </ul>
        </div>

    </div>

    <div class="sidebar-background"></div>
</div>

<div class="vertical-overlay"></div>