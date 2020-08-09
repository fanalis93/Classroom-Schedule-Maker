
<?php
$username = 'fanalis';
$password = 'freak';
$connection_string = 'localhost/xe';
$connection = oci_connect($username,$password,$connection_string);
?>
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
    <h2 class="text-center">Lecturers</h2>
    <div class="container">
        <div class="card" id="TableSorterCard">
            <div class="modal fade" role="dialog" tabindex="-1" id="tablehelpModal" aria-labeledby="tablehelpModal" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Table Filtering Options</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width:1%">Priority</th>
                                            <th style="width:9%">Operator</th>
                                            <th style="width:30%">Description</th>
                                            <th style="width:60%">Examples</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><code>|</code>&nbsp;or&nbsp;&nbsp;<code>OR</code><br></td>
                                            <td>Logical "or" (Vertical bar). Filter the column for content that matches text from either side of the bar.<br></td>
                                            <td><code>&lt;20 | &gt;40</code>&nbsp;(matches a column cell with either "&lt;20" or "&gt;40")<br></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><code>&amp;&amp;</code>&nbsp;or <code>AND</code><br></td>
                                            <td>Logical "and". Filter the column for content that matches text from either side of the operator.<br></td>
                                            <td><code>&gt;20 &amp;&amp; &gt;40</code>&nbsp;(matches a column cell that contains both "&gt;20" and "&lt;40")<br></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><code>/\d/</code><br></td>
                                            <td>Add any regex to the query to use in the query ("mig" flags can be included&nbsp;<code>/\w/mig</code>)<br></td>
                                            <td><code>/b[aeiou]g/i</code>&nbsp;(finds "bag", "beg", "BIG", "Bug", etc);<code>&gt;/r$/</code>&nbsp;(matches text that ends with an "r")<br></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><code>&lt; &lt;= &gt;= &gt;</code><br></td>
                                            <td>Find alphabetical or numerical values less than or greater than or equal to the filtered query .<br></td>
                                            <td><code>&lt;=10</code>&nbsp;(find values greater than or equal to 10)<br></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><code>!</code>&nbsp;or&nbsp;<code>!=</code><br></td>
                                            <td>Not operator, or not exactly match. Filter the column with content that&nbsp;<strong>do not</strong>&nbsp;match the query. Include an equal (<code>=</code>), single (<code>'</code>) or double quote (<code>"</code>)
                                                to exactly&nbsp;<em>not</em>&nbsp;match a filter.<br><br><br></td>
                                            <td><code>!e</code>&nbsp;(find text that doesn't contain an "e");<code>!"ELISA"</code>&nbsp;(find content that does not exactly match "ELISA")<br></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td><code>"</code>&nbsp;or&nbsp;<code>=</code><br></td>
                                            <td>To exactly match the search query, add a quote, apostrophe or equal sign to the beginning and/or end of the query<br></td>
                                            <td><code>abc"</code>&nbsp;or&nbsp;<code>abc=</code>&nbsp;(exactly match "abc")<br></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td><code>-</code>&nbsp;or <code>to</code><br></td>
                                            <td>Find a range of values. Make sure there is a space before and after the dash (or the word "to").<br></td>
                                            <td><code>10 - 30</code>&nbsp;or&nbsp;<code>10 to 30</code>&nbsp;(match values between 10 and 30)<br></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td><code>?</code><br></td>
                                            <td>Wildcard for a single, non-space character.<br></td>
                                            <td><code>S?c</code>&nbsp;(finds "Sec" and "Soc", but not "Seec")<br></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td><code>*</code><br></td>
                                            <td>Wildcard for zero or more non-space characters.<br></td>
                                            <td><code>B*k</code>&nbsp;(matches "Black" and "Book")<br></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td><code>~</code><br></td>
                                            <td>Perform a fuzzy search (matches sequential characters) by adding a tilde to the beginning of the query<br></td>
                                            <td><code>~bee</code>&nbsp;(matches "Bruce Lee" and "Brenda Dexter"), or&nbsp;<code>~piano</code>&nbsp;(matches "Philip Aaron Wong")<br></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>text<br></td>
                                            <td>Any text entered in the filter will&nbsp;<strong>match</strong>&nbsp;text found within the column<br></td>
                                            <td><code>abc</code>&nbsp;(finds "abc", "abcd", "abcde", etc);<code>SEC</code>&nbsp;(finds "SEC" and "Analytical SEC")<br></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-danger" type="button" data-dismiss="modal">Close</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable-1">
                        <thead>
                                <tr>
                                    <th>Lecturer ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Designation</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <?php 
                            $getres = oci_parse($connection,'SELECT * FROM lecturers');
                            oci_execute($getres);
                            while(($row=oci_fetch_array($getres,OCI_BOTH)) != false){
                                ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row[0] ?></td>
                                    <td><?php echo $row[1] ?></td>
                                    <td><?php echo $row[2] ?></td>
                                    <td><?php echo $row[3] ?></td>
                                    <td><?php echo $row[4] ?></td>
                                    <td><?php echo $row[5] ?></td>
                                </tr>
                            </tbody>
                            <?php
                            }
                            oci_free_statement($getres);
                            oci_close($connection);
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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