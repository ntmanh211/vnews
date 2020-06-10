<?php if(!defined('__CONTROLLER__')) return; ?>
<?php getTemplate("header", $viewParams); ?>
<?php
$link = mysqli_connect('localhost', 'root', '', 'recommend_news');
mysqli_set_charset($link, "utf8");
$email = $_SESSION['email'];
$sql = "SELECT * FROM `account` WHERE email = '$email'";
    $result = mysqli_query($link, $sql);
    if(!$result) {
        $kq =  " không có thông tin người dùng";
    }
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<body class="bg-gradient-primary">

  <div class="container" style="width: 555px;">
    <div class="row justify-content-center">

    <div class="col-xl-5 col-lg-12 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Thông tin cá nhân</h1>
              </div>
              <div>
                <p>Name: <?php echo $row['name']; ?></p>
                <p>Birthday: <?php echo $row['birthday']; ?></p>
                <p>Email: <?php echo $row['email']; ?></p>
                <p>Gender: <?php echo $row['gender']; ?></p>
                <p>Role: <?php echo $row['role']; ?></p>
                <a href="?link=repair"><button type="submit" class="btn btn-primary btn-user btn-block">
                  Chỉnh sửa
                </button></a>
                
              </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>