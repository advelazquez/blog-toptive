<script type="text/javascript">
  $(document).ready(function(){

    fetch_data();

    function fetch_data()
    {

      $.ajax({
        url:"fetch.php",
        success:function(data)
        {
          $('tbody').html(data);

        }
      })
    }
  });

</script>

<script type="text/javascript">

  $(document).ready(function(){

    $('#publicar').on('submit', function(event){

      event.preventDefault();

      // controles de validacion
      if($('#title').val() == ''){

        alert("Debe ingresar nombre");

      }else if($('#description').val() == ''){

        alert("Debe ingresar apellido");

      }else{
        // envio datos por ajax a action.php
        var form_data = $(this).serialize();
        $.ajax({
          url:"../action.php",
          method:"POST",
          data:form_data
        });
        window.location.href = '../'; // redirijo a los posts
        document.getElementById("title").value = ""; // limpio campo
        document.getElementById("description").value = ""; // limpio campo

      }
    });
  });
</script>
