
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>форма</title>
    <link rel="stylesheet" href="assets/css/forma.css">

<section>
    <div class="container2">
    <div class="form-container">
  <form id="myForm" method="POST" class="form1">
   <h2 class="h22">Reverse Form</h2>
   <label for="email" class="labels">Email:</label>
   <input type="email" id="email" name="email" required class="inputs">

   <label for="fullname" class="labels">Full Name:</label>
   <input type="text" id="fullname" name="fullname" required class="inputs">

   <label for="appeal" class="labels">Appeal:</label>
   <textarea id="appeal" name="appeal" required  class="teaxt"></textarea>

   <input type="submit" value="Submit" class="inputs">
  </form>
 </div>
 </div>
 </section>
 <script>
  const form = document.querySelector('#myForm');

  form.addEventListener('submit', async (e) => {
     e.preventDefault();
     const formData = new FormData(form);
     const responseData = await fetch('/submit', {
       method: 'POST',
       body: formData,
     });

     const results = await responseData.text();
     console.log(results);

     form.reset();
  });
 </script>