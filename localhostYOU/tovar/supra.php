<?php
session_start();

?>
<?php include('header.php'); ?>


<div class="container d-flex justify-content-center">
     <figure class="card card-product-grid card-lg">
         <a href="#" class="img-wrap" data-abc="true">
             <img src="../assets/cars/supra.png">
             </a>
         <figcaption class="info-wrap">
             <div class="row">
                 <div class="col-md-9 col-xs-9">
                    
                     <a href="#" class="title" data-abc="true">TOYOTA SUPRA</a> 
                     
                 <span class="rated">Б/У</span> 
                </div>
                 <div class="col-md-3 col-xs-3">
                     
                 </div>
             </div>
         </figcaption>
         <div class="bottom-wrap-payment">
             <figcaption class="info-wrap">
                 <div class="row">
                     <div class="col-md-9 col-xs-9"> 
                        <a href="#" class="title" data-abc="true">Цвет кузова: Серый </a>
                        <a href="#" class="title" data-abc="true">Год выпуска: 1994</a>
                        <a href="#" class="title" data-abc="true">Пробег: 192.000</a>
                        <a href="#" class="title" data-abc="true">Двигатель: 225 л.с. </a>
                        <a href="#" class="title" data-abc="true">Коробка: АКПП</a>
                        <a href="#" class="title" data-abc="true">Кузов: Купе</a>
                        <a href="#" class="title" data-abc="true">Привод: Задний привод</a>
                        <a href="#" class="title" data-abc="true">Топливо: Бензин</a>
                         
                         </div>
                    
                 </div>
             </figcaption>
             </figcaption>
         <div class="bottom-wrap-payment">
             <figcaption class="info-wrap">
                 <div class="row">
                     <div class="col-md-9 col-xs-9"> 
                        <a href="#" class="title" data-abc="true">2.200.000 ₽</a>
                         <span class="rated">VISA, Mastercard, МИР, Bitcoin</span>
                         </div>
                     <div class="col-md-3 col-xs-3">
                         <div class="rating text-right">от 27 933 ₽/месяц</div>
                     </div>
                 </div>
             </figcaption>
         </div>
         <div class="bottom-wrap">
             <a href="https://novosibirsk.drom.ru/toyota/supra/49190938.html" class="btn btn-primary float-right" data-abc="true">Оформить заказ</a>
             <div class="price-wrap"> 
                <a href="../catalog.php" class="btn btn-warning float-left" data-abc="true"> Отмена заказа </a>
             </div>
         </div>
     </figure>
 </div>
 <style>
    body{
        background-color: #EEEEEE
    }
    a{
        text-decoration: none !important
    }
    .card-product-list, .card-product-grid{
        margin-bottom: 0
    }
    .card{
        width: 500px;
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 23px;
        margin-top: 50px
    }

    .card-product-grid:hover{
        -webkit-box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
        box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
        -webkit-transition: .3s;
        transition: .3s
    }
    .card-product-grid .img-wrap{
        border-radius: 0.2rem 0.2rem 0 0;
        height: 220px
    }
    .card.img-wrap{
        overflow: hidden
    }
    .card-lg .img-wrap{
        height: 280px
    }
    .card-product-grid .img-wrap{
        border-radius: 0.2rem 0.2rem 0 0;
        height: 275px;
        padding: 16px
    }
    [class*='card-product']
    .img-wrap img{
        height: 100%;
        max-width: 100%;
        width: auto;
        display: inline-block;
        -o-object-fit: cover;
        object-fit: cover
    }
    .img-wrap{
        text-align: center;
        display: block
    }
    .card-product-grid .info-wrap{
        overflow: hidden;
        padding: 18px 20px
    }
    [class*='card-product'] 
    a.title{
        color: #212529;
        display: block
    }
    .rating-stars{
        display: inline-block;
        vertical-align: middle;
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative;
        white-space: nowrap;
        clear: both
    }
    .rating-stars li.stars-active{
        z-index: 2;
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden
    }
    .rating-stars li{
        display: block;
        text-overflow: clip;
        white-space: nowrap;
        z-index: 1
    }
    .card-product-grid .bottom-wrap{
        padding: 18px;
        border-top: 1px solid #e4e4e4
    }
    .bottom-wrap-payment{
        padding: 0px;
        border-top: 1px solid #e4e4e4
    }
    .rated{
        font-size: 10px;
        color: #b3b4b6
    }
    .btn{
        display: inline-block;
        font-weight: 600;
        color: #343a40;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.45rem 0.85rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.2rem
    }
    .btn-primary{
        color: #fff;
        background-color: #3167eb;
        border-color: #3167eb
    }
    .fa{
        color: #FF5722
    }
 </style>

<?php include('footer.php'); ?>