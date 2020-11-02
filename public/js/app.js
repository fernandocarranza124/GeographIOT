$.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
     }
 }); 
$('#myajax').click(function(){
       //we will send data and recive data fom our AjaxController
       $.ajax({
          url:'miJqueryAjax',
          data:{'name':"luis"},
          type:'post',
          success: function (response) {
                      alert(response);
          },
          statusCode: {
             404: function() {
                alert('web not found');
             }
          },
          error:function(x,xs,xt){
              //nos dara el error si es que hay alguno
              window.open(JSON.stringify(x));
              //alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
          }
       });
});