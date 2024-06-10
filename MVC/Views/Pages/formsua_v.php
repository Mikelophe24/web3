<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<link rel="stylesheet" href="h<?php echo URLROOT ?>/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="h<?php echo URLROOT ?>/Public/Css/dinhdang7.css">
    <script src="h<?php echo URLROOT ?>/Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="h<?php echo URLROOT ?>/Public/Js/popper.min.js"></script>
    <script src="h<?php echo URLROOT ?>/Public/Js/bootstrap.min.js"></script>
<body>
<form method="post" action="<?php echo URLROOT ?>/formchinh_ctrl/suadl">
    <div class="form-group">
        <?php 
            if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                while($row=mysqli_fetch_array($data['dulieu'])){
        ?>
       <label for="myID">ID môn học</label>
        <input type="text" id = "myID" class="form-control dd1" placeholder="ID Văn Bằng" name="txtID" value="<?php echo $row['id'] ?> " readonly>
        <label for="myTenVanBang">Tên Văn Bằng</label>
        <input type="text" id="myTenVanBang" class="form-control" placeholder="Tên Văn Bằng" name="txtTenVanBang" value="<?php echo $row['tenvb'] ?> " required>
        <label for="mySoHieuVanBang">Số Hiệu Văn Bằng</label>
        <input type="text" id="mySoHieuVanBang" class="form-control" placeholder="Số Hiệu Văn Bằng" name="txtSoHieuVanBang" value="<?php echo $row['sohieuvb'] ?> " required>
        <br>
        <?php
                }
            }
        ?>   
        <br>
        <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>
        <a href="./formchinh_ctrl/timkiem1"  class="btn btn-primary" name="btnQuayLai">Quay Lại</a>                       
    </div>
</form>
</body>
</html>