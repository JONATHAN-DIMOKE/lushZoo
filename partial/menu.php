<?php

if($_SESSION['user']['typeUtilisateur'] == "Admin"){
    echo '
    <aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Plannifier reservation</span>
                    </a>
                    <ul class="sub">
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="glyphicon.html">glyphicon</a></li>
                        <li><a href="grids.html">Grids</a></li>
                    </ul>
                </li>
                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-bullhorn"></i>
                        <span>Gerer compte users</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Maintenir plateforme</span>
                    </a>
                    <ul class="sub">
                        <li><a href="basic_table.html">Basic Table</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                    </ul>
                </li>
              
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
    ';
}
else{
    echo '
    <aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="dispatcher.php?action=form_reservation">
                        <i class="fa fa-book"></i>
                        <span>Reserver visite</span>
                    </a>
                   
                </li>
                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-bullhorn"></i>
                        <span>Payer facture</span>
                    </a>
                </li>
                
              
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
    ';
}