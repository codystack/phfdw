<?php
session_start();
require_once "../controller/adminauth.php";
?>
<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=author content="ThankGod Okoro">
    <meta property="og:url" content="https://phfashionweek.com/"/>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="TG&trade; :: Web + App Developer, UI/UX Designer, Product Designer & Graphic Designer." />
    <meta name="og:description" content="The Port Harcourt Fashion and Design Week is a three-day fashion event targeted at promoting sustainable development through stimulating youths who have interest and potentials in the fashion industry, with the necessary tools that will enable, encourage and support their aspirations of being successful and economically empowered youths.">
    <meta name="keywords" content="Port Harcourt,PH,Pitakwa,PHFDW,Fashion,Port Harcourt Fashion & Design Week,Design,Week,Bole,Fish,Oil and Gas,Slay,Velisco">
    <link rel="shortcut icon" href="./assets/images/favicon.png"/>
    <title>Admin Login :: PHFDW&trade;</title>
    <link rel="stylesheet" href="./assets/css/vendor.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />

  </head>
  <body>

    <div class="viewport">
      <div class="image image-overlay" style="background-image:url(./assets/images/background.jpg)"></div>
      <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
          <div class="col-md-6 col-lg-5">
            <div class="accordion-group accordion-group-portal" data-accordion-group>
              <div class="accordion" data-accordion>
                <div class="accordion-control" data-control>
                  <h5>Sign In</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput2">Password</label>
                        <input type="password" class="form-control" name="password">
                      </div>
                      <button name="adminlogin_btn" class="btn btn-dark btn-block">Sign In</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <script src="./assets/js/vendor.js"></script>
    <script src="./assets/js/app.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
            timer: 4000
        });
      </script>
    <?php
        unset($_SESSION['message']);
      }
    ?>

  </body>


</html>