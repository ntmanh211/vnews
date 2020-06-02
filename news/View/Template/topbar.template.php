
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="container">
      <div class="logo"><img src="assets/css/images/logo1.jpg" alt=""></div>
      <div class="header__search bm-search">
        <input type="text" class="text-search" placeholder="Nhập nội dung tìm kiếm">
        <button style="height: 36px; width: 36px;">
          <i class="fas fa-search"></i>
        </button>
      </div>
      <div class="header__user">
        <div class="login show open">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background: #fff;">
              <ul>
                <li class="signup">
                  <a href="#" class="dropdown-item"> <span>Đăng ký</span></a>
                </li>
                <li class="login">
                  <a href="#" class="dropdown-item"> <span>Đăng nhập</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="logged user hidden">
          <a href="#" class="uName thumb" id = "dropdownMenuButton-2" data-toggle = "dropdown" aria-haspopup ="true" aria-explanded = "false">
            <span class="text"> </span>
          </a>
          <div class="user-board bm-dropdown-menu user-board dropdown-menu" aria-labelledby = "dropdownMenuButton-2">
            <ul>
              <li class="infomation">
                <a href="#"><span>Thông tin cá nhân</span></a>
              </li>
              <li class="logout">
                <a href="#"><span>Đăng xuất</span></a>
              </li>
            </ul>
          </div>
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