<!DOCTYPE html>
<html lang="sk">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Moderné remeslá tradične</title>

    <!-- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="../css/app.css" rel="stylesheet">
</head>

<body style="display: flex; height: 100vh;" >

<header>
    <nav class="navbar navbar-expand-lg   fixed-top bg-white ">
        <div class="col-4"></div>

        <div class="col-4 text-center">
            <img src ="modrotlac.jpg" >

        </div>

        <div class="col-4 d-flex justify-content-center ">
            <nav class="navbar navbar-expand-lg">
                <ul class="nav justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" role="button" id="dropdownMenuLink"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @guest
                                <li><a class="dropdown-item" href="#">Prihlásenie</a></li>
                                <li><a class="dropdown-item" href="/register">Registrácia</a></li>
                            @else
                                <li><a class="dropdown-item" href="#">Informácie o profile</a></li>

                            @endguest


                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</header>




<div class="half-container">
    <a href="blog.html">
        <img class="half-image" src="../../Images/coverPage/CoverPageModern1.jpg" alt="ukazka tradicneho remesla">
        <div class="label" style="color: white"> <strong>BLOGY,</strong><br> ktoré zdôrazňujú historický a kultúrny význam remesiel
        </div>

    </a>

</div>

<div class="half-container">
    <a href="infoPortal.html">
        <img class="half-image" src="../../Images/coverPage/CoverPageModern1.jpg" alt="ukazka moderneho vyuzitia remesiel">
        <div class="label" style="color: saddlebrown " > <strong> INFORMÁCIE, </strong> <br>  vzdelávanie a predaj remeselných výrobkov
        </div>
    </a>
</div>

</body>

</html>
