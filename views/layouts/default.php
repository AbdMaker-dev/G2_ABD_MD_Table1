<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gestion location</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
          <!--================ Menu =================-->
                <?php include_once('nave.php'); ?>
          <!-- ================ Slide ================= -->	
                <?php include_once('slide.php'); ?>
          <!--================ Corp de la page =================-->
          <section class="cart_area">
              <div class="container">
                  <div class="cart_inner">
                      <div class="table-responsive">
                          <!--================ Contenue de la page =================-->
                          <?php echo $contues ; ?>
                      </div>
                  </div>
              </div>
          </section>

      <!--================ Les scriptes js de la page =================-->
      <script src="../assets/js/jquery-3.2.1.min.js"></script>
      <script src="../assets/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/main.js"></script>
</body>
</html>