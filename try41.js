
$(function(){

  $(".openModalLink").click(function(e) {
      e.preventDefault();       
      $("#myModalTitle").html('Hello, my name is '+$(this).data('name')+'!');
      $("#myModalID").val($(this).data('id'));

      $('#myModal').modal('show');

  });

  $("#myModalButton").click(function(){
      $.ajax({
             url: 'try41.php',
             data: {
               id: $("#myModalID").val()
             },
             dataType: 'json',
             success: function(data)
             {                 

              $('#myModal').find('#modalAlert').addClass('alert-success');
              $('#myModal').find('#modalAlert').html(data.message).show; 
              $('#myModal').find('#modalAlert').removeClass('hidden');

             }
       });    
  });

});