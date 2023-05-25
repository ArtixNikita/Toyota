<?php
session_start();

?>
<?php include('header.php'); ?>




<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/css/catalog.css">


<div class="container">
    <br>
    <h4 class="text-center">Каталог автомобилей в наличии</h2>
	<br>
	<div class="row" id="ads">

    <div class="col-md-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">NEW</span>
                <span class="card-notify-year">2015</span>
                <img class="img-fluid" src="assets/cars/carolla.png" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Б/У</span>
                <span class="card-detail-badge">1.312.000 ₽</span>
                <span class="card-detail-badge">95.300</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>Toyota Corolla</h5>
                </div>
                <a class="ad-btn" href="tovar/carolla.php"> Посмотреть</a>
                
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">NEW</span>
                <span class="card-notify-year">2016</span>
                <img class="img-fluid" src="assets/cars/camry.png"  />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Б/У</span>
                <span class="card-detail-badge">1.575.000 ₽ </span>
                <span class="card-detail-badge">96.480</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>Toyota camry</h5>
                </div>
                <a class="ad-btn" href="tovar/camry.php">Посмотреть</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">NEW</span>
                <span class="card-notify-year">1994</span>
                <img class="img-fluid" src="assets/cars/supra.png"  />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Б/У</span>
                <span class="card-detail-badge">2.200.000 ₽</span>
                <span class="card-detail-badge">192.000</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>Toyota Supra</h5>
                </div>
                <a class="ad-btn" href="tovar/supra.php">посмотреть</a>
            </div>
        </div>
    </div>

    </div>
</div>

<div class="container">
   
    
	
	<div class="row" id="ads">


    <div class="col-md-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">NEW</span>
                <span class="card-notify-year">2018</span>
                <img class="img-fluid" src="assets/cars/Avanza.jpg"  />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Б/У</span>
                <span class="card-detail-badge">1.700.000 ₽</span>
                <span class="card-detail-badge">92.000</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>toyota Avanza</h5>
                </div>
                <a class="ad-btn" href="tovar/avanza.php">посмотреть</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card rounded" >
            <div class="card-image">
                <span class="card-notify-badge">NEW</span>
                <span class="card-notify-year">2021</span>
                <img class="img-fluid" src="assets/cars/hilux.jpg"  />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Новый</span>
                <span class="card-detail-badge">6.376.000 ₽</span>
                <span class="card-detail-badge">0</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>toyota Hilux</h5>
                </div>
                <a class="ad-btn" href="tovar/hilux.php">посмотреть</a>
            </div>
        </div>
    </div>

    
    <div class="col-md-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge">NEW</span>
                <span class="card-notify-year">2020</span>
                <img class="img-fluid" src="assets/cars/yaris.jpg" />
            </div>
            <div class="card-image-overlay m-auto">
                <span class="card-detail-badge">Б/У</span>
                <span class="card-detail-badge">1.189.000 ₽</span>
                <span class="card-detail-badge">66.000</span>
            </div>
            <div class="card-body text-center">
                <div class="ad-title m-auto">
                    <h5>toyota Yaris</h5>
                </div>
                <a class="ad-btn" href="tovar/yaris.php">посмотреть</a>
            </div>
        </div>
    </div>

</div>
</div>

















  <?php include('footer.php'); ?>

  