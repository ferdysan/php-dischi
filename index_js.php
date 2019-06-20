<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="public/css/app.css">
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src"https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js" charset="utf-8"></script>
  </head>
  <body>

    <div class="container">

    </div>









<!-- integro handlebars -->

<script id="template_card_film" type="text/x-handlebars-template">

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

</script>

<script src="public/js/app.js"></script>


  </body>
</html>
