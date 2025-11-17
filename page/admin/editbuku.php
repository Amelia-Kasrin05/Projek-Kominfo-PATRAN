<link href="../../css/bootstrap.min.css" rel="stylesheet">
<?php
include"../../config.php";
$e=$_GET['id'];
$edit=mysqli_query($con,"SELECT * FROM tb_user WHERE id_user='$e'");
$book = mysqli_fetch_array($edit);
?>
<div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i>Edit User</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                	<form method="post" class="form-group" action="e_book.php" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" name="nama" placeholder="Nama" class="form-control"  value =" <?php  echo $book['nama'];?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" name="username" placeholder="username" class="form-control" value =" <?php  echo $book['username'];?>">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" name="password" placeholder="Password" class="form-control" value =" <?php  echo $book['password'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" name="simpan">Add
														</button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light"><a href="product-edit.html">Reset</a>
														</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>