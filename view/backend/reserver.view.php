<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Form_validation :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstcssBackend-css -->
    <link rel="stylesheet" href="cssBackend/bootstrap.min.css" >
    <!-- //bootstcssBackend-css -->
    <!-- Custom CSS -->
    <link href="cssBackend/style.css" rel='stylesheet' type='text/css' />
    <link href="cssBackend/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="cssBackend/font.css" type="text/css"/>
    <link href="cssBackend/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="jsBackend/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
    <!--header start-->
    <?php require_once "partial/header.php"?>
    <!--header end-->
    <!--sidebar start-->
    <?php require_once "partial/menu.php"?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Reserver visite
                                <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                            </header>
                            <div class="panel-body">
                                <div class=" form">
                                    <form class="cmxform form-horizontal " id="commentForm" method="post" action="dispatcher.php?action=passerReservation" novalidate="novalidate">
                                        <div class="form-group ">
                                            <label for="cname" class="control-label col-lg-3">Date reservation</label>
                                            <div class="col-lg-6">
                                                <input class=" form-control" id="dateReserv" name="dateReserv" minlength="2" type="date" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="form-group col-md-4">
                                                <label for="cemail" class="control-label col-lg-6">Heure debut</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control " id="heureDebut" type="time" name="heureDebut" required="">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="curl" class="control-label col-lg-6">Heure fin</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control " id="heureFin" type="time" name="heureFin">
                                                </div>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>

                                        <div class="form-group ">
                                            <label for="ccomment" class="control-label col-lg-3">Nombre visiteur</label>
                                            <div class="col-lg-6">
                                                <input class="form-control " id="nbreVisiteur" type="number" name="nbreVisiteur">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-3 col-lg-6">
                                                <button class="btn btn-primary" type="submit">Reserver maintenant</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </section>
                    </div>


                </div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Lister reservations
                <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
            </header>
            <div class="panel-body">
                <div class=" form">
                    <table class="table table-responsive" id="myTable">
                        <strong><caption style="text-align: center"></caption></strong>
                        <thead>
                        <tr>
                            <th scope="col" id="nomComplet">Date reserv</th>
                            <th scope="col" id="nomComplet">H. debut</th>
                            <th scope="col" id="nomComplet">H. fin</th>
                            <th scope="col" id="nomComplet">Nbre visiteur</th>
                            <th scope="col" id="nomComplet"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($listReserv as $reservation){
                            echo '<tr>';
                            echo '<td>'.$reservation['dateReserv'].'</td>';
                            echo '<td>'.$reservation['heureDebut'].'</td>';
                            echo '<td>'.$reservation['heureFin'].'</td>';
                            echo '<td>'.$reservation['nbreVisiteur'].'</td>';
                            echo '<td><a href="dispatcher.php?action=payerFact&idReserv='.$reservation['id'].'" class="btn btn-info">Payer facture</a></td>';
                            echo '</tr>';
                        }
                        ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </section>
    </div>
</div>
                <!-- page end-->
            </div>
        </section>
        <!-- footer -->
       <?php require_once "partial/footer.php"?>
        <!-- / footer -->
    </section>

    <!--main content end-->
</section>
<script src="jsBackend/bootstrap.js"></script>
<script src="jsBackend/jquery.dcjqaccordion.2.7.js"></script>
<script src="jsBackend/scripts.js"></script>
<script src="jsBackend/jquery.slimscroll.js"></script>
<script src="jsBackend/jquery.nicescroll.js"></script>
<!--[if lte IE 8]>
<script language="javascript" type="textjsBacekjsBackendpt" src="jsBackend/flot-chart/excanvas.min.js"></script>
<![endif]-->
<script src="jsBackend/jquery.scrollTo.js"></script>

<script src="jsBackend/jquery.dataTables.min.js"></script>
<script src="jsBackend/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
        $('#myTable').dataTable();
    })
</script>
</body>
</html>
