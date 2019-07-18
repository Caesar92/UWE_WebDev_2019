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

        <!-- Tableau Module -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Maths : 80</h3>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Test name</th>
                            <th scope="col">Coefficent</th>
                            <th scope="col">Mark</th>
                            <th scope="col">Staff comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Writting</th>
                            <td>50%</td>
                            <td>100</td>
                            <td>Very good work.</td>
                        </tr>
                        <tr>
                            <th>Pratice test</th>
                            <td>50%</td>
                            <td>60</td>
                            <td>Can be better. The practice must be egal to the theory</td>
                        </tr>
                    </tbody>
                </table>
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