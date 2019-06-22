<?php

 include 'data.php';

 $artista_selezionato = $_GET['artista'];

 $dischi_artista =[];

 foreach ($dischi as $disco) {
    if($disco['Nome_Artista'] ==  $artista_selezionato){
      $dischi_artista[] = $disco;
    }
 }



  echo json_encode($dischi_artista);


 ?>
