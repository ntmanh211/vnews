
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <p>Friday, December 05, 2045</p>
            </ul>
          </div>
          <div class="header_search bm-search">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Stìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="header_top_right">
            
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="assets/css/images/logo.jpg" alt=""></a></div>
          
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="#">CT - XH</a></li>
          <li><a href="#">Giáo dục</a></li>
          <li><a href="#">Kinh doanh</a></li>
          <li><a href="#">KH - CN</a></li>
          <li><a href="#">Pháp luật</a></li>
          <li><a href="#">Sức khỏe</a></li>
          <li><a href="#">Thể thao</a></li>
          <li><a href="#">Văn hóa</a></li>
          <li><a href="#">Xe cộ</a></li>
          <li><a href="#">Đời sống</a></li>
        </ul>
      </div>
    </nav>
    <!-- Changepass Modal-->
    <div class="modal fade" id="changepassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đổi mật khẩu</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="changepassForm" method="POST">
                        <input type="password" name="oldpass" class="form-control" placeholder="Nhập mật khẩu cũ" style="margin-bottom: 20px;">
                        <input type="password" name="newpass" class="form-control" placeholder="Nhập mật khẩu mới" style="margin-bottom: 20px;">
                        <input type="password" name="newpass2" class="form-control" placeholder="Nhập lại mật khẩu mới" style="margin-bottom: 20px;">
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" name="changepassBtn" form="changepassForm">Đổi mật khẩu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bạn muốn đăng xuất?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Bạn muốn đăng xuất?</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="?action=logoutact">Đăng xuất</a>
            </div>
            </div>
    </div>
    </div>
</nav>