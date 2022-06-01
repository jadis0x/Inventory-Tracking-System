<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php
                helper::flashDataView("statu");
                ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">"<?= $params['data']['ad']; ?>" düzenle</h3>
                    </div>

                    <form role="form" action="<?= SITE_URL; ?>/category/update/<?= $params['data']['id']; ?>" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Kategori Adı: </label>
                                <input type="text" class="form-control" name="ad" value="<?= $params['data']['ad']; ?>">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Düzenle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>