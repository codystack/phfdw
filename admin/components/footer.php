    <!-- footer -->
    <footer class="bg-dark text-white">
      <div class="container py-5">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-5 text-center text-md-left">
          </div>
          <div class="col-md-2 text-center">
            <img class="logo-sm" src="./assets/images/logowhite.svg" alt="Logo">
          </div>
          <div class="col-md-5 text-center text-md-right">
          </div>
        </div>
        <div class="col-md-12 pb-3">
            <p class="copyright text-sm text-center"> © <script>document.write(new Date().getFullYear());</script> PHFDW | All Rights Reserved. <br>Built by <a href="https://thankgodokoro.codes" target="_blank">TeeGee&trade;</a></p>
        </div>
      </div>
    </footer>
    <!-- / footer -->
    <?php include "modal.php"; ?>

    <script src="./assets/js/vendor.js"></script>
    <script src="./assets/js/app.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
		$(function() {
			// Datatables basic
			$('#spacerequest-datatables').DataTable({
				responsive: true
			});
			// Datatables with Buttons
			var datatablesButtons = $('#datatables-buttons').DataTable({
				lengthChange: !1,
				buttons: ["copy", "print"],
				responsive: true
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
		});
	</script>

<script>
		$(function() {
			// Datatables basic
			$('#inforequest-datatables').DataTable({
				responsive: true
			});
			// Datatables with Buttons
			var datatablesButtons = $('#datatables-buttons').DataTable({
				lengthChange: !1,
				buttons: ["copy", "print"],
				responsive: true
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
		});
	</script>

  <!-- Rent Space Modal -->
  <script>
        $(document).ready(function(){
            $('.spaceinfo').click(function(){
            
                var rentid = $(this).data('id');
                
                // AJAX request
                $.ajax({
                    url: './rentselect.php',
                    type: 'post',
                    data: {rentid: rentid},
                    success: function(response){ 
                        // Add response in Modal body
                        $('.modal-body').html(response);
                        // Display Modal
                        $('#viewRentSpaceModal').modal('show'); 
                    }
                });
            });
        });
	</script>
  <!-- Rent Space Modal -->

  <!-- Contact Info Modal -->
  <script>
        $(document).ready(function(){
            $('.contactinfo').click(function(){
            
                var contactid = $(this).data('id');
                
                // AJAX request
                $.ajax({
                    url: './infoselect.php',
                    type: 'post',
                    data: {contactid: contactid},
                    success: function(response){ 
                        // Add response in Modal body
                        $('.modal-body').html(response);
                        // Display Modal
                        $('#viewContactModal').modal('show'); 
                    }
                });
            });
        });
	</script>
  <!-- Contact Info Modal -->

    <?php
    if (isset($_SESSION['message']))
    {
        ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['message_title']; ?>",
                text: "<?php echo $_SESSION['message']; ?>",
                icon: "error",
                buttons: false,
                timer: 3000
            });
        </script>
        <?php
        unset($_SESSION['message']);
    }
    ?>

    <?php
      if (isset($_SESSION['success_message']))
      {
          ?>
          <script>
              swal({
                  title: "<?php echo $_SESSION['success_message_title']; ?>",
                  text: "<?php echo $_SESSION['success_message']; ?>",
                  icon: "success",
                  buttons: false,
                  timer: 3000
              });
          </script>
          <?php
          unset($_SESSION['success_message']);
      }
    ?>
    

  </body>

</html>