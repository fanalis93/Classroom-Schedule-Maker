
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Classroom Schedule Maker</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Table-Fixed-Header.css">
    <link rel="stylesheet" href="assets/css/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.css">
    <link rel="stylesheet" href="assets/css/DataTable-Examples.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Improved-v10.css">
    <link rel="stylesheet" href="assets/css/header-1.css">
    <link rel="stylesheet" href="assets/css/header-2.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/fh-3.1.7/sc-2.0.2/datatables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/PHP-Contact-Form-dark-1.css">
    <link rel="stylesheet" href="assets/css/PHP-Contact-Form-dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/TD-BS4-Simple-Contact-Form-1.css">
    <link rel="stylesheet" href="assets/css/TD-BS4-Simple-Contact-Form.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding:0px;">
        <div class="container">
            <div><a class="navbar-brand" href="#">Classroom Schedule Maker</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" data-bs-hover-animate="jello" href="index.php" style="border-color: rgba(0,0,0,0.9);color: rgba(254,254,254,0.9);">Dashboard </a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-bs-hover-animate="jello" href="team.html" style="color: rgb(255,255,255);">Team</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <section class="td-form">
        <div class="row td-form-wrapper">
            <div class="col td-glass">
                <form class="td-form-wrapper" action="connInsert.php" method = "POST">
                    <h2 class="text-center">Insert New Schedule</h2>
                    <div class="form-group">
                        <div class="col-md-12"><label for="name">Student ID</label>
                            <div class="d-flex"><input class="form-control d-flex" type="text" autocomplete="off" id="stud_id" placeholder="student id" name="stud_id"></div>
                        </div>
                        <div class="col-md-12"><label for="name">Lecturer ID</label>
                            <div class="d-flex"><input class="form-control d-flex" type="text" autocomplete="off" id="lec_id" placeholder="lecturer id" name="lec_id"></div>
                        </div>
                        <div class="col-md-12"><label for="name">Class ID</label>
                            <div class="d-flex"><input class="form-control d-flex" type="text" autocomplete="off" id="class_id" placeholder="class id" required="" name="class_id"></div>
                        </div>
                        <div class="col-md-12"><label for="name">Staff ID</label>
                            <div class="d-flex"><input class="form-control d-flex" type="text" autocomplete="off" id="staff_id" placeholder="staff id" name="staff_id"></div>
                        </div>
                        <div class="col-md-12"><label for="name">Purpose</label>
                            <div class="d-flex"><input class="form-control d-flex" type="text" autocomplete="off" id="condition" placeholder="Test/Quiz?Class/Under Maintenance/Discussion" required="" name="class_condition"></div>
                        </div>
                        <div class="col-md-12"><label for="subject">Start Time</label>
                            <div class="d-flex td-input-container"><input class="form-control" type="text" autocomplete="off" placeholder="2020-08-02 14:00:00" id="start_time" required="" name="start_time"></div>
                        </div>
                        <div class="col-md-12"><label for="subject">End Time</label>
                            <div class="d-flex td-input-container"><input class="form-control" type="text" autocomplete="off" placeholder="2020-08-02 14:00:00" id="end_time" required="" name="end_time"></div>
                        </div>
                        <div class="col-md-12"><button class="btn btn-dark float-right" type="submit" value="SUBMIT" name="save">Insert Schedule</button></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="assets/js/DataTable-Examples.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.21/fh-3.1.7/sc-2.0.2/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark-1.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark.js"></script>
</body>

</html>