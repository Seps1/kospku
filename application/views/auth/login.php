<section>
	<div class="page-header min-vh-100">
		<div class="login-box">
			<h2>Login</h2>
			<form role="form" method="post" action="<?= base_url('Auth'); ?>">
				<div class="user-box">
					<input type="email" name="email" required="">
					<label>Email</label>
				</div>
				<div class="user-box">
					<input type="password" name="password" required="">
					<label>Password</label>
				</div>
				<br /><a>
				<button style="background-color: Transparent; color: cyan;">Login</button></a>
				<a href="<?= base_url() ?>Auth/register">Daftar</a>
			</form>
		</div>
		<div class="card-footer text-center pt-0 px-lg-2 px-1">
			<p class="mb-4 text-sm mx-auto">

			</p>
		</div>
		<div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
		</div>
	</div>
</section>