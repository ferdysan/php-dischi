var $ = require('jquery');
// var Handlebars = require('handlebars');


$(document).ready(function(){
  // preparo le variabili per handlebars

  // vado a prendermi il mio template e a salvarlo in una variabile leggendone l'html
  var template_card_film = $('#template_card_film').html();

  var lista_function = Handlebars.compile(template_card_film);

  $.ajax({
    'url': 'http://localhost:8888/boolean/esercizi_pom/php-dischi/data.php',
    'method':'GET',
    'success': function(data){

      var array_php = JSON.parse(data);

      for (var album in array_php) {

        variabili_card_film ={
          'copertina': array_php[album].copertina,
          'titolo': array_php[album].titolo,
          'artista':array_php[album].Nome_Artista,
          'anno':array_php[album].Anno_di_uscita
        }

        var html_finale = lista_function(variabili_card_film);
        $('.container').append(html_finale);
      }

    },
    'error':function(){
      alert('si è verificato un errore');
    }

  });



});
