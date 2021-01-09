<?= $this->include('header')  ?>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-sm navbar-light white scrolling-navbar ">
            <div class="container" id="topheader">
                <!-- Brand
                <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
                    <strong class="blue-text">MDB</strong>
                </a> -->
                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="active nav-item" id="1">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="active nav-item" id="5">
                            <a class="nav-link" href="olimpiade">Kompetisi</a>
                        </li>
                        <?php if (session()->has('admin')) {  ?>

                            <li class="nav-item" id="3">
                                <a class="nav-link" href="dashboard">Dashboard</a>
                            </li>

                        <?php }  ?>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <?php if (!session()->has('admin')) {  ?>
                            <li class="nav-item" id="3">
                                <a class="nav-link" href="login">Login</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item" id="3">
                                <a class="nav-link" href="logout">Logout</a>
                            </li>
                        <?php }  ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <!-- SCRIPTS -->
    <script type="text/javascript" src="<?= base_url('js/jquery-3.4.1.min.js') ?>"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?= base_url('js/popper.min.js') ?>"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?= base_url('js/mdb.min.js') ?>"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>


    <?= $this->renderSection('content') ?>

</body>

</html>