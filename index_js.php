<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="public/css/app.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  </head>
  <body>









<!-- integro handlebars -->

<script id="template_card_film" type="text/x-handlebars-template">
  <div class="container">
         <div class="card_album">
           <div class="copertina">
             <img src=" {{copertina}} " alt="">
           </div>
           <div class="info_disco">
            <p>Titolo :{{titolo}}  </p>
            <p>Artista : {{artista}}  </p>
            <p>Anno di uscita : {{anno}} </p>
           </div>
         </div>
  </div>
</script>

<script src="public/js/app.js"></script>


  </body>
</html>
