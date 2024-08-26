
<?php

function inicializarPlantilla($dir, $scripts = []) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <?php
            include 'head.php';
            ?>
        </head>

        <body>
            <div id="global-loader">
                <div class="whirly-loader"> </div>
            </div>
            <div class="main-wrapper">
                <div class="header">
                    <?php
                    include 'header.php';
                    ?>
                </div>

                <?php
                //include $sidebar;
                include 'sidebar.php';
                include 'sidebarCollapsed.php';
                include 'sidebarHorizontal.php';
                ?>
                <div class="page-wrapper">
                    <div class="content">
                        <?php include_once $dir . "/content.php"; ?>
                    </div>
                </div>
            </div>
            <div class="customizer-links" id="setdata">
                <ul class="sticky-sidebar">
                    <li class="sidebar-icons">
                        <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Tema">
                            <i data-feather="settings" class="feather-five"></i>
                        </a>
                    </li>
                </ul>
            </div>

             <?php
             include 'scripts.php';
            foreach ($scripts as $script) {
                echo '<script src="' . $script . '"></script>';
            }
            ?>
        </body>
    </html>
    <?php
}
?>
