<!DOCTYPE html>
<html lang="en">
<head>
	@include('shop.layout.loaded_css_login')
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="?page=signup" method="post">
					<span class="login100-form-title">
						Đăng Ký
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa nhập tài khoản">
						<input class="input100" type="text" name="un" placeholder="Tên tài khoản">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Bạn chưa nhập mật khẩu">
						<input class="input100" type="password" name="pw" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-32" data-validate = "Bạn chưa nhập lại mật khẩu">
						<input class="input100" type="password" name="rpw" placeholder="Nhập lại mật khẩu">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-b-64">
						<button class="login100-form-btn">
							Đăng ký
						</button>
					</div>

					<!-- <div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Bạn chưa có tài khoản?
						</span>

						<a href="?page=signup" class="txt3">
							Đăng ký ngay
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	
	@include('shop.layout.loaded_js_login')

</body>
</html>