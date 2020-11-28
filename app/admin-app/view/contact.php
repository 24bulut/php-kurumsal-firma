<div class="col-md-12 col-sm-12 ">
	<div class="x_panel">
		<div class="x_title">
			<h2>İletişim Ayarları </h2>
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>

			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br />
			<?php if (isset($adminPageMessage)) : ?>
				<div class="alert alert-warning" role="alert">
					<?php echo  $adminPageMessage ?>
				</div>
			<?php endif; ?>
			<form id="demo-form2" action="" method="POST" data-parsley-validate class="form-horizontal form-label-left">

				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="company_name">Telefon 1
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="phone1" name="phone1" class="form-control " value="<?php echo $cfg["phone1"] ?>">
					</div>
				</div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Telefon 2
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="phone2" name="phone2" class="form-control" value="<?php echo $cfg["phone2"] ?>">
					</div>
				</div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">E-mail
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="email" name="email" class="form-control" value="<?php echo $cfg["email"] ?>">
					</div>
				</div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Google Maps Code
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="google_maps_code" name="google_maps_code" class="form-control" value="<?php echo $cfg["google_maps_code"] ?>">
					</div>
				</div>


				<div class="ln_solid"></div>
				<div class="item form-group">
					<div class="col-md-6 col-sm-6 offset-md-3">
						<button type="submit" name="save-contact" class="btn btn-success">Kaydet</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>