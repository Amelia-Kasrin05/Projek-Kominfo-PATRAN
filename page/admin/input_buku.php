<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="review-tab-pro-inner">
            <ul id="myTab3" class="tab-review-design">
                <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Tambah User</a></li>
            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit">
                <form method="post" class="form-group" action="tambah_buku.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="review-content-section">
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                    <input type="text" name="nama" placeholder="Nama" class="form-control" required>
                                </div>
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                    <input type="text" name="username" placeholder="Username" class="form-control" required>
                                </div>
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="text-center custom-pro-edt-ds">
                                <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" name="simpan">Add</button>
                                <button type="button" class="btn btn-ctl-bt waves-effect waves-light" onclick="window.location='input_buku.php';">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
