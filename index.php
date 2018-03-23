<!DOCTYPE html>
<html lang="en">
<head>
    <title>Star Software task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <h3>Pray times & temperature by city </h3>

    <div calss="row"  id="loading" style="">
        <img src="assets/images/loading.gif" class="loading-img"/>
        <span id="loading-info"></span>
    </div>

    <ul class="nav nav-pills" >
        <li class="active"><a data-toggle="pill" href="#egypt-tab">Egypt</a></li>
        <li><a data-toggle="pill" href="#germany-tab">Germany</a></li>
    </ul>

    <div class="tab-content">
        <div id="egypt-tab" class="tab-pane fade in active">
            <div class="form-group">
                <label for="sel1">Select City:</label>
                <select class="form-control" id="egypt_cities">
                    <option></option>
                    <option>Cairo</option>
                    <option>Alexandria</option>
                    <option>Luxor</option>
                    <option>Asyut</option>
                    <option>El Faiyum</option>
                    <option>Bur Said</option>
                    <option>Suez</option>
                    <option>Hurghada</option>
                    <option>Kom Ombo</option>
                    <option>El Minya</option>
                    <option>Siwa</option>
                    <option>Giza</option>
                    <option>El Arish</option>
                    <option>El Tur</option>
                    <option>Bur Safaga</option>
                    <option>Berenice</option>
                    <option>Sohag</option>
                    <option>Girga</option>
                    <option>Qena</option>
                    <option>Isna</option>
                    <option>Rashid</option>
                    <option>Beni Suef</option>
                    <option>Beni Mazar</option>
                    <option>Mallawi</option>
                    <option>Samalut</option>
                    <option>Salum</option>
                    <option>El Alamein</option>
                    <option>Matruh</option>
                    <option>Dumyat</option>
                    <option>El Mansura</option>
                    <option>Ismailia</option>
                    <option>Tanta</option>
                    <option>Kafr el Sheikh</option>
                    <option>Zagazig</option>
                    <option>Benha</option>
                </select>
            </div>

        </div>
        <div id="germany-tab" class="tab-pane fade">
            <div class="form-group">
                <label for="sel1">Select City:</label>
                <select class="form-control" id="germany_cities">
                    <option></option>
                    <option>Mainz</option>
                    <option>Schwerin</option>
                    <option>Bielefeld</option>
                    <option>Dortmund</option>
                    <option>Duisburg</option>
                    <option>Wuppertal</option>
                    <option>Essen</option>
                    <option>Karlsruhe</option>
                    <option>Heidelberg</option>
                    <option>Kassel</option>
                    <option>Oldenburg</option>
                    <option>Emden</option>
                    <option>Braunschweig</option>
                    <option>Erfurt</option>
                    <option>Coburg</option>
                    <option>Augsburg</option>
                    <option>Furth</option>
                    <option>Chemnitz</option>
                    <option>Bonn</option>
                    <option>Ulm</option>
                    <option>Mannheim</option>
                    <option>Freiburg</option>
                    <option>Giessen</option>
                    <option>Wiesbaden</option>
                    <option>Bremerhaven</option>
                    <option>Hannover</option>
                    <option>Gottingen</option>
                    <option>Gera</option>
                    <option>Jena</option>
                    <option>Flensburg</option>
                    <option>Lubeck</option>
                    <option>Kiel</option>
                    <option>Koblenz</option>
                    <option>Saarbrucken</option>
                    <option>Regensburg</option>

                    <option>Rosenheim</option>
                    <option>Hof</option>
                    <option>Wurzburg</option>
                    <option>Ingolstadt</option>
                    <option>Cottbus</option>
                    <option>Potsdam</option>
                    <option>Magdeburg</option>
                    <option>Leipzig</option>
                    <option>Stralsund</option>
                    <option>Rostock</option>
                    <option>Stuttgart</option>
                    <option>Bremen</option>
                    <option>Cologne</option>
                    <option>Dresden</option>
                    <option>Frankfurt</option>
                    <option>Hamburg</option>
                    <option>Munich</option>
                    <option>Berlin</option>
                </select>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="alert alert-danger" id="result-alert" >
            <strong>Error!</strong>
        </div>
    </div>

    <dev class="row" id="prayTimes">
        <div id="Fajr-time" class="col-lg-4 col-md-4 col-xs-12 col-sm-12 showData">

        </div>
        <div id="Dhuhr-time" class="col-lg-4 col-md-4 col-xs-12 col-sm-12 showData">

        </div>
        <div id="Asr-time" class="col-lg-4 col-md-4 col-xs-12 col-sm-12 showData">

        </div>
        <div id="Maghrib-time" class="col-lg-4 col-md-4 col-xs-12 col-sm-12 showData">

        </div>
        <div id="Isha-time" class="col-lg-4 col-md-4 col-xs-12 col-sm-12 showData">

        </div>
    </dev>
    <div class="row">
        <div id="temp-data" class="col-lg-4 col-md-4 col-xs-12 col-sm-12 showData">

        </div>
    </div>

</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/js/requester.js"></script>
<script>
    jQuery(document).ready(function() {
        var DataRequester = new Requester();

    });
</script>