<div class="col-md-12 col-sm-12 ">
	<div class="x_panel">
		<div class="x_title">
			<h2>Site Ayarları </h2>
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
			<form id="demo-form2" action="" enctype="multipart/form-data" method="POST" data-parsley-validate class="form-horizontal form-label-left">

				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="company_name">Şirket Adı
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="company_name" name="company_name" class="form-control " value="<?php echo $cfg["company_name"] ?>">
					</div>
				</div>

				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">SEO Anahtar Kelimeler
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="site_keywords" name="site_keywords" class="form-control" value="<?php echo $cfg["site_keywords"] ?>">
					</div>
				</div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Site Başlık
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="site_title" name="site_title" class="form-control" value="<?php echo $cfg["site_title"] ?>">
					</div>
				</div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Site Açıklaması
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="site_description" name="site_description" class="form-control" value="<?php echo $cfg["site_description"] ?>">
					</div>
				</div>

				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Yeni Logo Yükle
					</label>
					<div class="col-md-6 col-sm-6 ">
						<small>Dosya PNG Uzantılı Olmalıdır.</small>
						<input type="file" name="logo" class="form-control-file" id="exampleFormControlFile1">
					</div>

				</div>
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Mevcut Logo
					</label>
					<div class="col-md-6 col-sm-6 ">
					<img src="<?php echo publicUrl("img/logo.png")?>" height="180px" width="220px" alt="" srcset="">
						
					</div>
				</div>



				<div class="ln_solid"></div>
				<div class="item form-group">
					<div class="col-md-6 col-sm-6 offset-md-3">
						<button type="submit" name="save-site-config" class="btn btn-success">Kaydet</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>