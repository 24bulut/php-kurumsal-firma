<div class="page-title">
    <div class="title_left">
        <h3> Slider </h3>
    </div>

</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
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
                        Slider Düzenle
                    </h3>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Mevcut Logo
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <img src="<?php echo publicUrl("img/slider/".$sliderDetails["image_url"]) ?>" height="200px" width="600px" alt="" srcset="">

                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="title" name="title" class="form-control " value="<?php echo $sliderDetails["title"] ?>">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Açıklama
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea name="content"><?php echo $sliderDetails["content"] ?></textarea>
                            <script>
                                CKEDITOR.replace('content');
                            </script>

                        </div>
                    </div>

                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" name="edit-slider" class="btn btn-success">Kaydet</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>