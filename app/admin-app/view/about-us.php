<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Hakkımızda Ayarları </h2>
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
            <br />
            <form id="demo-form2" action="" method="POST" data-parsley-validate class="form-horizontal form-label-left">


                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Açıklama
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <textarea name="about-us"><?php echo $cfg["about_us"] ?></textarea>
                        <script>
                            CKEDITOR.replace('about-us');
                        </script>

                    </div>
                </div>


                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" name="edit-aboutus" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>