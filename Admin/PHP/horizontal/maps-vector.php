<?php require 'includes/header_start.php'; ?>

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

<?php require 'includes/header_end.php'; ?>


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                    <li class="breadcrumb-item"><a href="#">Components</a></li>
                                    <li class="breadcrumb-item"><a href="#">Maps</a></li>
                                    <li class="breadcrumb-item active">Vector Map</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Vector Map</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title">World Map</h4>

                            <div id="world-map-markers" style="height: 500px"></div>

                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title">USA Map</h4>

                            <div id="usa" style="height: 400px"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title">India Map</h4>

                            <div id="india" style="height: 400px"></div>

                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title">UK Map</h4>

                            <div id="uk" style="height: 400px"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title">Chicago Map</h4>

                            <div id="chicago" style="height: 400px"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title">Australia Map</h4>

                            <div id="australia" style="height: 400px"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title">Canada Map</h4>

                            <div id="canada" style="height: 400px"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title">Germany Map</h4>

                            <div id="germany" style="height: 400px"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title">Asia Map</h4>

                            <div id="asia" style="height: 400px"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->


        <?php require 'includes/footer_start.php'; ?>

        <!-- Jvector map -->
        <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../plugins/jvectormap/gdp-data.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-de-mill.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-in-mill.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-asia-mill.js"></script>
        <script src="assets/pages/jquery.jvectormap.init.js"></script>

        <?php require 'includes/footer_end.php'; ?>