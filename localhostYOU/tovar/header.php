<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
    <title></title>
</head>
<body>

<header>
  <div class="logo">
    <a href="index.php"><img src="../assets/image/logo.png" alt="logo" width="100px" height="20px"></a>
  </div>

  <nav>
    <ul class="menu">
      <li><a href="../index.php">Главная</a></li>
      <li><a href="../contact.php">Контакты</a></li>
      <li><a href="../catalog.php">Каталог</a></li>
      <li><a href="../gallery.php">Галерея</a></li>
      <li><a href="../map.php">Местоположение</a></li>
     
    </ul>
  </nav>
<!-- Элемент <a>, при нажатии на который будет открываться модальное окно -->
<a href="#" id="myLink">Профиль</a>

<!-- HTML-элемент модального окна -->
<div id="modal" class="modal">
  <div class="modal-content">
    
    <div class="form-container">
    <!-- Профиль -->
 
<div class="cart">
  
  <div class="top-container">
    
    
    
    <div class="ml-3">
      <h5 class="name"><?= $_SESSION['user']['full_name'] ?></h5>
      <p class="mail"><?= $_SESSION['user']['email'] ?></p>
    </div>
  </div>


  <div class="wishlist-border pt-2">
   <a href="catalog.php" class="recent-orders">Каталог</a>
  </div>
  <div class="wishlist-border pt-2">
    <a href="map.php" class="recent-orders">Мы тут</a>
  </div>
  <div class="wishlist-border pt-2">
    <a href="auth.php" class="recent-orders">Авторизоваться</a>
  </div>
  <div class="fashion-studio-border pt-2">
    <span class="fashion-studio"><a href="vendor/logout.php" class="recent-orders">Выход</a></span>
  </div>
  
</div>
</div>
</div>

  </div>
</div>

<script>
// Получение ссылки на элемент <a>
var link = document.getElementById("myLink");

// Получение ссылки на модальное окно
var modal = document.getElementById("modal");

// Получение элемента <span>, который используется для закрытия модального окна
var close = document.getElementsByClassName("close")[0];

// Добавление обработчика событий, который открывает модальное окно при нажатии на элемент <a>
link.onclick = function(event) {
  event.preventDefault(); // Остановить действие по умолчанию
  modal.style.display = "block";
}

// Добавление обработчика событий, который закрывает модальное окно при клике на затененный фон за его пределами
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</header>

<main>

