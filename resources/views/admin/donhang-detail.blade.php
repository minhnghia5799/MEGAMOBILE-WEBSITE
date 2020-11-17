<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.layout.head')
</head>
  @include('admin.layout.sidebar')
<body class="">

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" name="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form> -->
            <ul class="navbar-nav">
              <!-- <li class="nav-item">
                <a class="nav-link btn-magnify" href="#pablo">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <!-- <div class="col-md-4"> -->
            <!-- <div class="card card-user"> -->
              <!-- <div class="image">
                <img src="admin/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="admin/img/mike.jpg" alt="...">
                    <h5 class="title">Chet Faker</h5>
                  </a>
                  <p class="description">
                    @chetfaker
                  </p>
                </div>
                <p class="description text-center">
                  "I like the way you work it
                  <br> No diggity
                  <br> I wanna bag it up"
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <h5>12
                        <br>
                        <small>Files</small>
                      </h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5>2GB
                        <br>
                        <small>Used</small>
                      </h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <h5>24,6$
                        <br>
                        <small>Spent</small>
                      </h5>
                    </div>
                  </div>
                </div>
              </div> -->
            <!-- </div>
            <div class="card"> -->
              <!-- <div class="card-header">
                <h4 class="card-title">Team Members</h4>
              </div>
              <div class="card-body">
                <ul class="list-unstyled team-members">
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="admin/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        DJ Khaled
                        <br />
                        <span class="text-muted">
                          <small>Offline</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="admin/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-md-7 col-7">
                        Creative Tim
                        <br />
                        <span class="text-success">
                          <small>Available</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                          <img src="admin/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-ms-7 col-7">
                        Flume
                        <br />
                        <span class="text-danger">
                          <small>Busy</small>
                        </span>
                      </div>
                      <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                </ul>
              </div> -->
            <!-- </div> -->
          <!-- </div> -->
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Chi tiết đơn hàng</h5>
              </div>
              <div class="card-body">
                
                <?php
                  // require_once SITE_ROOT."/Dao/ShippingInfocontentDao.php";
                  // require_once SITE_ROOT."/Dao/ProductsDao.php";
                  // $dao1= new ShippingInfocontentDao();
                  // $dao2= new ProductsDao();

                  // $list = $dao1->getShippingInfocontentByIdship($_GET['id']);
                  // $tong = 0;
                  // for ($i = 0; $i < Count($list); $i++)
                  // {
                  //   $sp = $dao2->getProductById($list[$i]->getProductId());
                  
                  //   $tong = $tong + $list[$i]->getAmount() * $sp->getSale();
                ?>
                  
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Id đơn hàng</label>
                        <input type="text" class="form-control" name="idDonHang" value="{{$DonHang[0]->idDonHang}}">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Id khách hàng</label>
                        <input type="number" class="form-control" name="idKhachHang" value="{{$DonHang[0]->idKhachHang}}">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Tình trạng</label>
                        <input type="" class="form-control" name="TinhTrang" value="{{$DonHang[0]->TinhTrang}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Ngày tạo</label>
                        <input type="" class="form-control" name="NgayTao" value="">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Tổng tiền</label>
                        <input type="number" class="form-control" name="TongTien" value="{{$DonHang[0]->TongTien}}">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Coupon</label>
                        <input type="nmber" class="form-control" name="Coupon" value="{{$DonHang[0]->Coupon}}">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Mã sản phẩm
                      </th>
                      <th>
                        Giá lúc mua
                      </th>
                    </thead>
                   <tbody>
                    @foreach($DonHang as $DonHangDT)

                    <tr>
                    <td>{{$DonHangDT->idDonHang}}</td>
                    <td>{{$DonHangDT->GiaLucMua}}</td>

                    <td>

                    </td>
                    </tr>
                    
                    @endforeach
                   </tbody>
                  </table>
                </div>
              </div>


                  <!-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Sửa</label>
                        <textarea class="form-control textarea"><?php /*echo $tong; */?></textarea>
                      </div>
                    </div>
                  </div> -->
                  <form action="capnhattrangthai/{{$DonHangDT->idDonHang}}" method="post">
                  @csrf
                    Thay đổi trạng thái đơn hàng:
                    <select name="tinhtrangdonhang" id="" >
                    <option value="Chờ xử lý">Chờ xử lý</option>
                    <option value="Đang xử lý">Đang xử lý</option>
                    <option value="Đang giao">Đang giao</option>
                    <option value="Thành công">Thành công</option>
                    <option value="Thất bại">Thất bại</option>
                    <option value="Hủy">Hủy</option>
                    </select>
                    <div class="row">
                    <div class="update ml-auto mr-auto">
                      <input type="submit" class="btn btn-primary btn-round" value="Cập nhật">
                    </div>
                    </div>
                    </form>

                
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('admin.layout.footer')
    </div>
  </div>
@include('admin.layout.script')
</body>

</html>
