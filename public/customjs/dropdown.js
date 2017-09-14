$(document).ready(function){
  $('#state').on('change',function(e){
    console.log(e);
    var sta_id = e.target.value;
    //ajax
    $.get('/ajax-town/' + sta_id, function(data){
        //success data
        console.log(data);
      });
    });
  });,s
