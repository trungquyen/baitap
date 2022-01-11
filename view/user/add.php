<?php
    require "view/template/header.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-1">
                    <h2>Thêm độc giả</h2>
                    <div style="color: red">
                        <?php echo $error; ?>
                    </div>
                </div>

                <form method="post" action="">
                    <div class="form-group mt-1">
                        <label for="txthoten">Nhập họ tên :</label>
                        </br>
                        <input class="w-100" type="text" name="hovaten" value="" />
                    </div>
                    <div class="form-group mt-1">
                        <label for="txthoten">Nhập giới tính :</label>
                        </br>
                        <input class="w-100" type="text" name="gioitinh" value="" />
                    </div>
                    <div class="form-group mt-1">
                        <label for="txthoten">Nhập năm sinh :</label>
                        </br>
                        <input class="w-100" type="text" name="namsinh" value="" />
                    </div>
                    <div class="form-group mt-1">
                        <label for="txthoten">Nhập nghề nghiệp :</label>
                        </br>
                        <input class="w-100" type="text" name="nghenghiep" value="" />
                    </div>
                    <div class="form-group mt-1">
                        <label for="txthoten">Nhập ngày cấp thẻ :</label>
                        </br>
                        <input class="w-100" type="text" name="ngaycapthe" value="" />
                    </div>
                    <div class="form-group mt-1">
                        <label for="txthoten">Nhập ngày hết hạn :</label>
                        </br>
                        <input class="w-100" type="text" name="ngayhethan" value="" />
                    </div>
                    <div class="form-group mt-1">
                        <label for="txthoten">Nhập địa chỉ :</label>
                        </br>
                        <input class="w-100" type="text" name="diachi" value="" />
                    </div>
                    <input class="mt-1" type="submit" name="btnSave" value="Save" />
                </form>
            </div>
        </div>
    </main>
<?php
    require "view/template/footer.php";
?>