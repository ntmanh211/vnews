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
                <th width="50%">Nguồn tin</th>
                <th width="40%"></th>
              </tr>
            </thead>
            <tbody id="classlist_body">
              <tr>
                <td>1</td>
                <td>vnexpress</td>
                <td>
                  <button class="btn btn-primary" onclick="loadClassInfo(this.value)" data-toggle="modal" data-target="#sourceUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#sourceDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>nguoilaodong</td>
                <td>
                  <button class="btn btn-primary" onclick="loadClassInfo(this.value)" data-toggle="modal" data-target="#sourceUpdateModal"><i class="fas fa-edit fsize14"></i></button>
                  <button class="btn btn-warning" onclick="delClassFunction(this.value)" data-toggle="modal" data-target="#sourceDeleteModal"><i class="fas fa-trash-alt fsize14"></i></button>
                </td>
              </tr>
            </tbody>
          </table>

          <div class="modal fade" id="sourceUpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cập nhật nguồn tin</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Tên nguồn</label>
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

          <div class="modal fade" id="sourceDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Xóa nguồn tin</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Xóa nguồn tin.</p>
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

      <?php getTemplate("footer", $viewParams); ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
 

<?php getTemplate("footer", $viewParams); ?>
