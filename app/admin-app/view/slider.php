

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
        <div class="x_title">
			<h2>Slider Ayarları </h2>
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
                <form action="" enctype="multipart/form-data" method="post">
                <h3 class="text-center">
                    Yeni Slider
                </h3>
                <div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Başlık
					</label>
					<div class="col-md-6 col-sm-6 ">
						<input type="text" id="title" name="title" class="form-control " value="">
					</div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Açıklama
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <textarea name="content"></textarea>
                        <script>
                            CKEDITOR.replace('content');
                        </script>

                    </div>
                </div>
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
						<button type="submit" name="add-slider" class="btn btn-success">Kaydet</button>
					</div>
				</div>
                </form>
                <hr>
                <h3 class="text-center">
                    Mevcut Sliderler
                </h3>
                <div class="row">

                    <?php foreach ($sliderList as $slider) : ?>
                        <div class="col-md-55">
                            <div class="thumbnail">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="<?php echo publicUrl("img/slider/" . $slider["image_url"]) ?>" alt="image" />
                                    <div class="mask no-caption">
                                    </div>
                                </div>
                                <div class="caption">
                                    <span class="p-2"><a href="<?php echo adminUrl("edit-slider?remove=true&id=" . $slider["id"]) ?>"><i class="fa fa-times"></i>sil</a></span>
                                    <span class="p-2"><a href="<?php echo adminUrl("edit-slider?id=" . $slider["id"]) ?>"><i class="fa fa-edit"></i>Düzenle</a></span>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>



                </div>
            </div>
        </div>
    </div>
</div>