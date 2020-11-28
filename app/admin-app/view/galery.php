

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12">
        <div class="x_panel">

<div class="x_title">
			<h2>Galeri Ayarları </h2>
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>

			</ul>
			<div class="clearfix"></div>
		</div>
            <div class="x_content">
                <?php if (isset($adminPageMessage)) : ?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo  $adminPageMessage ?>
                    </div>
                <?php endif; ?>
                <h3 class="text-center">
                    Yeni Fotoğraf
                </h3>
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Yeni Resim Yükle
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <small>Dosya JPG ve PNG Uzantılı Olmalıdır.</small>
                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" name="add-galery" class="btn btn-success">Kaydet</button>
                        </div>
                    </div>
                </form>
                <hr>
                <h3 class="text-center">
                    Mevcut Fotoğraflar
                </h3>
                <div class="row">

                    <?php foreach ($galeryList as $galery) : ?>
                        <div class="col-md-55">
                            <div class="thumbnail">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo publicUrl("img/galery/" . $galery["image_url"]) ?>" alt="image" />
                                    <div class="mask no-caption">
                                    </div>
                                </div>
                                <div class="caption">
                                    <p><a href="<?php echo adminUrl("galery?remove=true&id=" . $galery["id"]) ?>"><i class="fa fa-times"></i>sil</a></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>



                </div>
            </div>
        </div>
    </div>
</div>