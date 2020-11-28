<div class="row" style="display: block;">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Hizmetlerimiz </h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <a class="btn btn-primary" href="<?php echo adminUrl("service-add")?>">Yeni Hizmet ekle</a>
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th width="20%" >İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($servicesList as $service): ?>
                        <tr>
                            <td><?php echo $service["title"] ?></td>
                            <td><?php echo $service["content"] ?></td>
                            <td>
                                <a class="btn btn-primary " href="<?php echo adminUrl("service-edit?id=".$service["id"]) ?>">Düzenle</a>
                                <a class="btn btn-danger " href="<?php echo adminUrl("service-edit?remove=true&id=".$service["id"]) ?>">Sil</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>