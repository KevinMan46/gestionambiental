<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Ambiental UNAS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v17.0" nonce="7w40lZYm"></script>
    <style>
        body {
        background: #eee;
        }

        .name {
        color: blue;
        }

        .work {
        font-weight: bold;
        font-size: 15px;
        }

        .about span {
        font-size: 13px;
        }

        .v-profile {
        color: blue;
        cursor: pointer;
        }

        .box {
        -webkit-box-shadow: 13px 12px 5px -10px rgba(196,194,196,0.72);
        -moz-box-shadow: 13px 12px 5px -10px rgba(196,194,196,0.72);
        box-shadow: 13px 12px 5px -10px rgba(196,194,196,0.72);
        }

        .col-md-3 {
        margin-top: 10px;
        }
    </style>

    <?php
    include("nav.php");
    ?>

    <div class="container text-center mt-5 mb-2">
        <h1 class="mb-0">Últimos eventos</h1>
        <div class="fb-page" data-href="https://www.facebook.com/comiteambientalunas/" data-tabs="timeline" data-width="500" data-height="900" data-small-header="true" 
            data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/comiteambientalunas/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/comiteambientalunas/">Comité Ambiental UNAS</a></blockquote>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>