<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- JS Bootstrap -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- CSS-->
    <link rel="stylesheet" href="../css/home.css">

    <script src="../js/home.js"></script>

</head>

<body>

    <nav class="navbar navbar-light bg-red_UWE">

        <img src="../image/logo_UWE.jpg" class="img_Logo" alt="Responsive image" />

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div>
                        <table>
                            <tr>
                                <span>
                                    <th scope="col" class="username" style="width:150px">César GONNOT</th>
                                    <th scope="col" class="imageAccount"></th>
                                </span>
                            </tr>
                        </table>
                    </div>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="bodyOfPage">

        <!-- Tableau information Etudiant -->
        <div class="card">
            <div class="card-body">
                <div>
                    <h3 style="display:inline-block">What module do you see ?</h3>
                    <span class="text-right">
                        <a href="#" class="btn btn-outline-success text-center btn-show">Show all module</a>
                    </span>
                </div>
                <div class="container">
                    <div style="margin-left: 5%; margin-right: auto">
                        <?php
                        require_once("../../model/")
                        foreach ($tabModule as $module) {
                            echo "<button onclick=\"location.href='\../../controler/AccueilStaff.ctrl.php'\" type=\"button\" class=\"btn btn-info btn-lg\">".$module[0]."</button>";
                        }
                        <button type="button" class="btn btn-info btn-lg">Web Programming</button>
                        <button type="button" class="btn btn-info btn-lg">Web Design</button>
                        <button type="button" class="btn btn-info btn-lg">Legal Ethical Social and Professional
                            Issues</button>
                        <button type="button" class="btn btn-info btn-lg">Content Management System</button>
                        <button type="button" class="btn btn-info btn-lg">WebDevelopmentFrameworks</button>
                        <button type="button" class="btn btn-info btn-lg">WebTechnologies</button>
                        ?>                    
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn btn-lg btn-success text-center">Add new module</a>
                </div>

            </div>
        </div>

        <!-- Tableau Module -->
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <div>
                        <h3 style="display:inline-block">List and mean student's</h3>
                        <span class="text-right">
                            <a href="#" class="btn btn-outline-success text-center btn-show">Show only student who are
                                in
                                make up test (all module)</a>
                        </span>
                    </div>
                </div>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Lastname</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Module Mean</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Gonnot</th>
                            <td>César</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <th>Camus</th>
                            <td>Albert</td>
                            <td>80</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="#" class="btn btn-lg btn-success text-center">Show list module (to edit it)</a>
                </div>
            </div>
        </div>
    </div>



    <div class="container footer fixed-bottom">
        <div class="row">
            <div class="col-md footerText">
                One of three columns
            </div>
            <div class="col-md footerText">
                One of three columns
            </div>
            <div class="col-md footerText">
                One of three columns
            </div>
        </div>
        <div class="row">
            <div class="col-md footerText">
                One of three columns
            </div>
            <div class="col-md footerText">
                One of three columns
            </div>
            <div class="col-md footerText">
                One of three columns
            </div>
        </div>
    </div>
</body>




</html>