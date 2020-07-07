<script>
$(document).ready(function(){

// script for update data into db for every 1 sec

setInterval(function(){
  update_last_activity();
}, 1000);


function update_last_activity()
{
  $.ajax({
    url: "update_last_activity.php",
    success: function(){

    }
  });
}

});
</script>