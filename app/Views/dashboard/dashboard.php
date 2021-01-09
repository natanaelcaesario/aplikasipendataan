<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Universitas Kristen Krida Wacana</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">

    <!-- search -->
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <style>
        @media (min-width: 1200px) {

            .navbar,
            .page-footer,
            main {
                padding-left: 270px;
            }
        }
    </style>
</head>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">
            <br>
            <center>
                <a class=" waves-effect" href="profil">
                    <img src="img/logo.png" class="img-fluid" width="80px">
                </a>
            </center>
            <br>
            <p class="text-center">Universitas Kristen Krida Wacana</p>
            <div class="list-group list-group-flush">
                <a href="dashboard" class="list-group-item waves-effect active" id="1">
                    <i class="fas fa-chart-pie mr-3"></i>Dashboard
                </a>
                <a href="kompetisi" class="list-group-item list-group-item-action waves-effect" id="2">
                    <i class="fas fa-user mr-3"></i>Data Kompetisi</a>

                <a href="logout" class="list-group-item list-group-item-action waves-effect" id="5">
                    <i class="fas fa-sign-out-alt mr-3"></i>Logout</a>
            </div>
        </div>

        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 ">
        <div class="container-fluid ">
            <?= $this->renderSection('content') ?>
        </div>
    </main>
    <!--Main layout-->

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-demo.js"></script>

</body>

</html>