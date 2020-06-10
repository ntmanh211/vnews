<?php if(!defined('__CONTROLLER__')) return; ?>
<?php getTemplate("header", $viewParams); ?>

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
              <form class="user" method="POST" action="?action=register">
                <table>
                  <thead>
                      <tr>
                          <th>Email</th>
                          <th>Họ tên</th>
                          <th>Ngày Sinh</th>
                          <th>Giới tính</th>
                          <th>Quan tâm</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : ?>
                          <tr>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['birthday']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['care']; ?></td>
                          </tr>
                      <?php endwhile; ?>
                  </tbody>
              </table>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Chỉnh sửa
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