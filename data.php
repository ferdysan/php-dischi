<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot) in due modi diversi:
1 - Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
2 - Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso handlebars.
Utilizzare: Html, Sass, JS, jQuery, handlebars, Php

*Opzionale*:
A - Attraverso un’altra chiamata ajax, filtrare gli album per artista
B - Attraverso un’altra chiamata ajax, ordinare gli album per data di uscita. (edited)
I dati da visualizzare per ogni disco sono:
- immagine di copertina
- titolo album
- nome artista
- anno d'uscita -->

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






 ?>
