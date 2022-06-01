<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php
                helper::flashDataView("statu");
                ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Yeni Müşteri Oluştur</h3>
                    </div>

                    <form role="form" action="<?= SITE_URL; ?>/musteriler/send" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Ad: </label>
                                <input type="text" class="form-control" name="ad">
                            </div>

                            <div class="form-group">
                                <label>Soyad: </label>
                                <input type="text" class="form-control" name="soyad">
                            </div>

                            <div class="form-group">
                                <label>Şirket: </label>
                                <input type="text" class="form-control" name="sirket">
                            </div>

                            <div class="form-group">
                                <label>E-Mail: </label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="form-group">
                                <label>Telefon: </label>
                                <input type="tel" class="form-control" name="telefon">
                            </div>

                            <div class="form-group">
                                <label>Adres: </label>
                                <input type="text" class="form-control" name="adres">
                            </div>

                            <div class="form-group">
                                <label>T.C: </label>
                                <input type="text" class="form-control" name="tc">
                            </div>


                            <div class="form-group">
                                <label>Not: </label>
                                <input type="text" class="form-control" name="notu">
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