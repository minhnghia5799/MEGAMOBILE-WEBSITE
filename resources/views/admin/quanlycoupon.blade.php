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

<body class="">
  <div class="wrapper ">
  @include('admin.layout.sidebar')
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
            <form>
              <div style="display:none" class="input-group no-border">
                <a href=""><input type="button" value="Thêm"  name="themsach"></a>  
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            
          </div>
        </div>
      </nav>
      
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Mã Coupon
                      </th>
                      <th>
                        Ngày bắt đầu
                      </th>
                      <th>
                        Ngày kết thúc
                      </th>
                      <th   >
                        Giá trị
                      </th>
                      <th>
                        Tình trạng
                      </th>
                      <!-- <th>
                        Chức năng
                      </th> -->
                    </thead>
                      <tbody>
                          @foreach($Coupon as $DanhSachCoupon)
                          @if ($DanhSachCoupon->TinhTrang=='con hieu luc')
                          <tr>
                          <td>{{$DanhSachCoupon->MaCoupon}}</td>
                          <td>{{$DanhSachCoupon->NgayBD}}</td>
                          <td>{{$DanhSachCoupon->NgayKT}}</td>
                          <td>{{$DanhSachCoupon->GiaTri}}</td>
                          <td>{{$DanhSachCoupon->TinhTrang}}</td>
                          <td><a href="quanlycoupon/{{$DanhSachCoupon->MaCoupon}}"><input type="button" name="ancoupon" value="Ẩn" ><a href=""><input type="button" name="sua" value="Sửa" ></td>
                          </tr>
                          @endif
                          @endforeach
                      </tbody>
                  </table>
                  <form action="themcoupon" method="POST">
                    @csrf
                    Coupon mới:
                    <br> 
                    Mã Coupon <input type="text" name='MaCoupon'> <br>
                    Ngày bắt đầu <input type="date" name='NgayBD'> <br>
                    Ngày kết thúc <input type="date" name='NgayKT'> <br>
                    Giá trị <input type="text" name='GiaTri'> <br>
                    <input type="submit" value="Thêm Coupon">
                  </form>
                </div>
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
