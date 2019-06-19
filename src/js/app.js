$(document).ready(function(){

  $.ajax({
    'url': '',
    'method':'GET',
    'success': function(data){
      console.log(data);
    },
    'error':function(){
      alert('si è verificato un errore');
    }

  });



});
