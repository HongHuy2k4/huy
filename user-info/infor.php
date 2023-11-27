<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="container">
    <form action="">
      <div class="row">
          <h3 class="title">thông tin thanh toán</h3>
          <div class="inputBox">
              <label>họ và tên</label>
              <input type="text" value="Duy Lợi"> <br>
            </div>
          <div class="inputBox">
            <span style="margin-right: 10px;">ngày sinh</span>
            <select name="" id="">
              <option value="">Ngày</option>
            </select>
            <select name="" id="">
              <option value="">Tháng</option>
            </select>
            <select name="" id="">
              <option value="">Năm</option>
            </select>
          </div>
          <div class="inputBox">
            <label for="1">Giới tính</label>
            <input type="radio" name="1">
            <span style="margin-right: 10px;">Nam</span>
            <input type="radio" name="1">
            <span style="margin-right: 10px;">Nữ</span>
            <input type="radio" name="1">
            <span style="margin-right: 10px;">Khác</span>
          </div>
          <div class="inputBox">
            <span style="margin-right: 10px;">địa chỉ</span>
            <input style="width: 500px" type="text" placeholder="Ví dụ: 312 Nguyễn Huệ - A(Phường) - B(Quận) - C(Thành phố)">
          </div>
          <div class="flex">
            <div class="inputBox">
              <span>số điện thoại</span>
             <input type="text" placeholder="+111 222 33344">
            </div>
            <div class="inputBox">
              <span>email :</span> <br>
              <input type="text" placeholder="npc123@gmail.com">
            </div>
          </div>
      </div>

      <input type="submit" value="Lưu thay đổi" class="submit-btn">
    </form>
  </div>
</body>

</html>