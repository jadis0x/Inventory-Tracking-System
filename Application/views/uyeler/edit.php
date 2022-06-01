<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php
                helper::flashDataView("statu");
                ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Kullanıcı Düzenle</h3>
                    </div>

                    <form role="form" action="<?= SITE_URL; ?>/kullanici/update/<?= $params['data']['id']; ?>" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Kullanıcı Adı: </label>
                                <input type="text" class="form-control" name="ad" value="<?= $params['data']['ad']; ?>">
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label>E-Mail: </label>
                                <input type="text" class="form-control" name="email" value="<?= $params['data']['email']; ?>">
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label>Şifre: </label>
                                <input type="text" class="form-control" name="sifre">
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label>İzinler</label>
                                <br>
                                <?php
                                foreach (IZINLER as $key => $value) {
                                ?>
                                    <input type="checkbox" <?php if(in_array($key,explode(',',$params['data']['yetki']))){echo 'checked';} ?> name="izinler[]" value="<?= $key; ?>"> <?= $value; ?><br>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>