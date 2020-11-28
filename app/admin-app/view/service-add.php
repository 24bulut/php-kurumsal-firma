<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Hizmet ekle </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php if (isset($adminPageMessage)):?>
                
                <div class="alert alert-secondary" role="alert">
                    <?php echo $adminPageMessage ?>
                </div>
            <?php endif;?>
            <br />
            <form id="demo-form2" action="" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="company_name">Başlık
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="title" name="title" class="form-control " value="">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Açıklama
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <textarea name="content"></textarea>
                        <script>
                            CKEDITOR.replace('content');
                        </script>

                    </div>
                </div>


                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" name="add-service" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>