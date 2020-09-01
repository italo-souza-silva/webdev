<html>
	<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
		<script type="text/javascript">      
      $(".toggleForms").click(function() {            
        $("#SignUpForm").toggle();
        $("#LogInForm").toggle();                     
      });

      $('#diary').bind('input propertychange', function() {
        $.ajax({
          method: "POST",
          url: "updatedatabase.php",
          data: { content: $("#diary").val() }
        });
      });
      
      
     </script>
	</body>
</html>