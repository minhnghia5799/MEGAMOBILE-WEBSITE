<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
      <div class="logo">
        <a href="?page=home" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('admin/img/logo-small.png')}}">
          </div>
        </a>
        <a href="?page=home" class="simple-text logo-normal">
        LIBRO BOOKSTORE
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
          <li class="active ">
            <a href="./chitietdonhang.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Chi tiết đơn hàng</p>
            </a>
          </li>
          <li >
            <a href="?page=admin&dashboard=quanlysach">
              <i class="nc-icon nc-tile-56"></i>
              <p>Quản lý sách</p>
            </a>
          </li>
          <li >
            <a href="?page=admin&dashboard=quanlyloaisach">
              <i class="nc-icon nc-tile-56"></i>
              <p>Quản lý loại sách</p>
            </a>
          </li>
          <li >
            <a href="?page=admin&dashboard=quanlydonhang">
              <i class="nc-icon nc-tile-56"></i>
              <p>Quản lý đơn hàng</p>
            </a>
          </li>
        </ul>
      </div>
    </div>