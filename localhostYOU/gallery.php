<?php
session_start();

?>
<?php include('header.php'); ?>
<style>
    .row {
  margin: 15px;
}
</style>

<script>
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).Lightbox();
});
</script>

<br>
<div class="container">
  <div class="row">
    <a href="assets/gallery/galery1.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="assets/gallery/galery1.jpg" class="img-fluid rounded">
    </a>
    <a href="#" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="assets/gallery/galery2.jpg" class="img-fluid rounded">
    </a>
    <a href="#" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="assets/gallery/galery3.jpg" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="#" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="assets/gallery/galery4.jpg" class="img-fluid rounded">
    </a>
    <a href="#" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="assets/gallery/galery5.jpg" class="img-fluid rounded">
    </a>
    <a href="#" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="assets/gallery/galery8.jpg" class="img-fluid rounded">
    </a>
  </div>
  <div class="row">
    <a href="#" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="assets/gallery/galery7.jpg" class="img-fluid rounded">
    </a>
    <a href="#" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="assets/gallery/galery9.jpg" class="img-fluid rounded">
    </a>
    <a href="#" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="assets/gallery/galery6.jpg" class="img-fluid rounded">
    </a>
  </div>
</div>











<?php include('footer.php'); ?>