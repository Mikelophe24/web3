<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<link rel="stylesheet" href="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC/Public/Css/dinhdang7.css">
    <script src="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC/Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC/Public/Js/popper.min.js"></script>
    <script src="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC/Public/Js/bootstrap.min.js"></script>
<body>
<form method="post" action="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC%20%C4%91%E1%BB%81%202/formthem_ctrl/themmoi">
    <div class="form-group">
        <label for="myID">ID Văn Bằng</label>
        <input type="text" id = "myID" class="form-control dd1" placeholder="ID môn học" name="txtID" value="<?php if(isset($data['id'])) echo $data['id'] ?>" required>
        <label for="myTenVanBang">Tên Văn Bằng</label>
        <input type="text" id="myTenVanBang" class="form-control" placeholder="Tên Văn Bằng" name="txtTenVanBang" value="<?php if(isset($data['tenvb'])) echo $data['tenvb'] ?>" required>
        <label for="mySoHieuVanBang">Số Hiệu Văn Bằng</label>
        <input type="text" id="mySoHieuVanBang" class="form-control" placeholder="Số Hiệu Văn Bằng" name="txtSoHieuVanBang" value="<?php if(isset($data['sohieuvb'])) echo $data['sohieuvb'] ?>" required>
        <br>
        <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>   
        <a href="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC%20%C4%91%E1%BB%81%202/formchinh_ctrl/timkiem1"  class="btn btn-primary" name="btnQuayLai">Quay Lại</a>                      
    </div>
</form>
</body>
</html>