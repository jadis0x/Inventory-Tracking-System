<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php
                helper::flashDataView("statu");
                ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">"<?= $params['data']['ad']; ?> <?= $params['data']['soyad']; ?>" düzenle</h3>
                    </div>

                    <form role="form" action="<?= SITE_URL; ?>/musteriler/update/<?= $params['data']['id']; ?>" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Ad: </label>
                                <input type="text" class="form-control" name="ad" value="<?= $params['data']['ad']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Soyad: </label>
                                <input type="text" class="form-control" name="soyad" value="<?= $params['data']['soyad']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Şirket: </label>
                                <input type="text" class="form-control" name="sirket" value="<?= $params['data']['sirket']; ?>">
                            </div>

                            <div class="form-group">
                                <label>E-Mail: </label>
                                <input type="email" class="form-control" name="email" value="<?= $params['data']['email']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Telefon: </label>
                                <input type="tel" class="form-control" name="telefon" value="<?= $params['data']['telefon']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Adres: </label>
                                <input type="text" class="form-control" name="adres" value="<?= $params['data']['adres']; ?>">
                            </div>

                            <div class="form-group">
                                <label>T.C: </label>
                                <input type="text" class="form-control" name="tc" value="<?= $params['data']['tc']; ?>">
                            </div>


                            <div class="form-group">
                                <label>Not: </label>
                                <input type="text" class="form-control" name="notu" value="<?= $params['data']['notu']; ?>">
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