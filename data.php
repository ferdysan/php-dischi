<?php

// creo il mio array di dischi musicali

$dischi =[
  [
    'copertina'=>'img/takk.jpg',
    'titolo'=>'Takk',
    'Nome_Artista'=>'Sigur Ros',
    'Anno_di_uscita'=>'2002'
  ],
  [
    'copertina'=>'img/into-the-wild.jpg',
    'titolo'=>'Into The Wild',
    'Nome_Artista'=>'Eddie Vedder',
    'Anno_di_uscita'=>'2007'
  ],
  [
    'copertina'=>'img/radiohead.jpg',
    'titolo'=>'Pablo Honey',
    'Nome_Artista'=>'radiohead',
    'Anno_di_uscita'=>'1998'
  ],
  [
    'copertina'=>'img/dream-theater.jpg',
    'titolo'=>'Train og throug',
    'Nome_Artista'=>'Dream Theater',
    'Anno_di_uscita'=>'2006'
  ]
];


// converto il mio array in un oggetto json per passarlo a ajax
  echo json_encode($dischi);



 ?>
