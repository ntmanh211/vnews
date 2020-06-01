<?php getTemplate("header", $viewParams); ?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php getTemplate("sidebar"); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php getTemplate("topbar"); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <table class="table table-striped">
            <thead>
              <tr>
                <th width="10%">ID</th>
                <th width="60%">Nhãn</th>
                <th width="30%"></th>
              </tr>
            </thead>
            <tbody id="classlist_body">
              <tr>
                <td>1</td>
                <td>Chính trị - Xã hội</td>
                <td>
                  <button class="btn btn-primary" onclick="" data-toggle="modal" data-target="#topicUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#topicDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Đời sống</td>
                <td>
                  <button class="btn btn-primary" onclick="" data-toggle="modal" data-target="#topicUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#topicDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Giáo dục</td>
                <td>
                  <button class="btn btn-primary" onclick="loadClassInfo(this.value)" data-toggle="modal" data-target="#topicUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#topicDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Kinh doanh</td>
                <td>
                  <button class="btn btn-primary" onclick="loadClassInfo(this.value)" data-toggle="modal" data-target="#topicUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#topicDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Khoa học - Công nghệ</td>
                <td>
                  <button class="btn btn-primary" onclick="loadClassInfo(this.value)" data-toggle="modal" data-target="#topicUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#topicDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Pháp luật</td>
                <td>
                  <button class="btn btn-primary" onclick="loadClassInfo(this.value)" data-toggle="modal" data-target="#topicUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#topicDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>Sức khỏe</td>
                <td>
                  <button class="btn btn-primary" onclick="loadClassInfo(this.value)" data-toggle="modal" data-target="#topicUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#topicDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>Thể thao</td>
                <td>
                  <button class="btn btn-primary" onclick="loadClassInfo(this.value)" data-toggle="modal" data-target="#topicUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#topicDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td>Văn hóa</td>
                <td>
                  <button class="btn btn-primary" onclick="loadClassInfo(this.value)" data-toggle="modal" data-target="#topicUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#topicDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>Xe cộ</td>
                <td>
                  <button class="btn btn-primary" onclick="loadClassInfo(this.value)" data-toggle="modal" data-target="#topicUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#topicDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="modal fade" id="topicUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cập nhật chủ đề</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Tên chủ đề</label>
                      <input type="text" class="form-control" id="recipient-name">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Thoát</button>
                  <button class="btn btn-primary" href="">Cập nhật</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="topicDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Xóa chủ đề</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Xóa chủ đề.</p>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Thoát</button>
                  <button class="btn btn-primary" href="">Xóa</button>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php getTemplate("footer", $viewParams); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

 

</body>