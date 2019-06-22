var $ = require('jquery');
// var Handlebars = require('handlebars');

$(document).ready(function(){
  // preparo le variabili per handlebars

  // vado a prendermi il mio template e a salvarlo in una variabile leggendone l'html
  var template_card_film = $('#template_card_film').html();

  var lista_function = Handlebars.compile(template_card_film);

  $.ajax({
    'url': 'http://localhost:8888/boolean/esercizi_pom/php-dischi/database/data.php',
    'method':'GET',
    'success': function(data){

      var array_php = JSON.parse(data);

      stampa_dischi(array_php);
      popola_select(array_php);

    },
    'error':function(){
      alert('si è verificato un errore');
    }

  });

  $('.artisti_dischi').change(function(){

    var artista_selezionato = $(this).val();


    $.ajax({
      'url':'http://localhost:8888/boolean/esercizi_pom/php-dischi/database/filtro_artista.php',
      'method':'GET',
      'data':{
        'artista': artista_selezionato
      },
      'success': function(response){

        console.log(response);

        var dischi_artista = JSON.parse(response);

        stampa_dischi(dischi_artista);
      }

    });

  });



  function stampa_dischi(dischi){


    for (var album in dischi) {

      variabili_card_film ={
        'copertina': dischi[album].copertina,
        'titolo': dischi[album].titolo,
        'artista':dischi[album].Nome_Artista,
        'anno':dischi[album].Anno_di_uscita
      }

      var html_finale = lista_function(variabili_card_film);
      $('.container').append(html_finale);
    }
  }

  function popola_select(dischi){
      array_artisti=[];

      for (var i = 0; i < dischi.length; i++) {
         var disco = dischi[i];
          if (! array_artisti.includes(disco['Nome_Artista'])) {
             array_artisti.push(disco['Nome_Artista']);
          }
      }

      for (var i = 0; i < array_artisti.length; i++) {
        var artista = array_artisti[i];
           $('.artisti_dischi').append('<option>'+ artista + '</option>');

        }

  }


});
