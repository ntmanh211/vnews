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
                <h1 class="h4 text-gray-900 mb-4">Sửa thông tin người dùng</h1>
              </div>
              <form class="user" method="POST" action="?action=repair">
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" placeholder="<?php echo $row['email']; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputName" name="name" placeholder="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group">
                  <input type="birthday" class="form-control form-control-user" id="exampleInputBirthday" name="birthday" placeholder="<?php echo $row['birthday']; ?>">
                </div>
                <div class="form-group">
                    <label>Giới tính:</label>
                    <label class="gender">Nam
                        <input type="radio" checked="checked" name="gender">
                        <span class="checkmark"></span>
                    </label>
                    <label class="gender">Nữ
                        <input type="radio" name="gender">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-group">
                  <label>Quan tâm:</label>
                  <!-- <input type="care" class="form-control form-control-user" id="exampleInputCare" placeholder="Quan tâm"> -->
                  
                <div class="row">
                  
                  <div class="category col-lg-6">
                    <label><input type="checkbox" name="care[]" value="1">Chính trị - Xã hội</label>
                    <label><input type="checkbox" name="care[]" value="1">Đời sống</label>
                    <label><input type="checkbox" name="care[]" value="1">Giáo dục</label>
                    <label><input type="checkbox" name="care[]" value="1">Kinh doanh</label>
                    <label><input type="checkbox" name="care[]" value="1">Khoa học công nghệ</label>
                  </div>
                  <div class="category col-lg-6">
                    <label><input type="checkbox" name="care[]" value="1">Pháp luật</label>
                    <label><input type="checkbox" name="care[]" value="1">Sức khỏe</label>
                    <label><input type="checkbox" name="care[]" value="1">Thể thao</label>
                    <label><input type="checkbox" name="care[]" value="1">Văn hóa</label>
                    <label><input type="checkbox" name="care[]" value="1">Xe cộ</label>
                  </div>
                  
                </div>
                <div class="form-group row">
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Update
                </button>
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