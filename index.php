<?php
include 'data.php';
  // echo "<pre>";
  // var_dump($dischi);
  // echo "</pre>";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="public/css/app.css">
  </head>
  <body>

    <div class="container">
      <?php
      // posso usare un foreach solo 'value' perchè la struttura del mio array me lo permette in quanto le sue chiavi sono gli indici numerici standard
      foreach ($dischi as $disco) {
           ?>
           <div class="card_album">
             <div class="copertina">
               <img src="<?php echo $disco['copertina'] ?>" alt="">
             </div>
             <div class="info_disco">
              <p>Titolo : <?php echo $disco['titolo']  ?></p>
              <p>Artista : <?php echo $disco['Nome_Artista']  ?></p>
              <p>Anno di uscita : <?php  echo $disco['Anno_di_uscita']  ?></p>
             </div>
           </div>
<?php


}
 ?>


    </div>

  </body>
</html>
