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
    <?php
    include 'connect.php';

    if (isset($_POST['user_id'])) {
      $user_id = $_POST['user_id'];
    } else {
      $user_id = 2;
    }

    $select_profile = $conn->prepare("SELECT * FROM users WHERE I_id_user = ?");
    $select_profile->execute([$user_id]);

    if ($select_profile->rowCount() > 0) {
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
    ?>

      <form action="process.php" method="post">
        <input type="hidden" name="user_id" value="<?= $user_id ?>">

        <div class="row">
          <h3 class="title">thông tin thanh toán</h3>
          <div class="inputBox">
            <label>họ và tên</label>
            <input type="text" name="name" value="<?= $fetch_profile['T_name']; ?>"> <br>
          </div>
          <div class="inputBox">
            <span style="margin-right: 10px;">ngày sinh</span>
            <input type="date" placeholder="Vui lòng nhập ngày sinh" name="birthday" value="<?= $fetch_profile['D_day_of_birth']; ?>">
          </div>

          <div class="inputBox">
            <label for="sex">Giới tính</label>
            <input type="radio" name="sex" value="Nam" <?php echo ($fetch_profile['T_sex'] == 'Nam') ? 'checked' : ''; ?>>
            <span style="margin-right: 10px;">Nam</span>
            <input type="radio" name="sex" value="Nữ" <?php echo ($fetch_profile['T_sex'] == 'Nữ') ? 'checked' : ''; ?>>
            <span style="margin-right: 10px;">Nữ</span>
            <input type="radio" name="sex" value="Khác" <?php echo ($fetch_profile['T_sex'] == 'Khác') ? 'checked' : ''; ?>>
            <span style="margin-right: 10px;">Khác</span>
          </div>

          <div class="inputBox">
            <span style="margin-right: 10px;">địa chỉ</span>
            <input style="width: 500px" type="text" name="address" value="<?= $fetch_profile['T_address']; ?>" placeholder="Ví dụ: 312 Nguyễn Huệ - A(Quận) - B(Thành phố) - C(Nước)" readonly>
            <a style="display: block; width: 30%; text-align: center; text-decoration: none;" class="submit-btn" href="update_address.php">Cập nhật địa chỉ</a>
          </div>

          <div class="flex">
            <div class="inputBox">
              <span>số điện thoại</span>
              <input type="number" name="number" value="<?= $fetch_profile['T_number_phone']; ?>" placeholder="+111 222 33344" maxlength="10">
            </div>
            <div class="inputBox">
              <span>email :</span> <br>
              <input type="email" name="email" value="<?= $fetch_profile['T_email']; ?>" placeholder="npc123@gmail.com">
            </div>
          </div>
        </div>

        <input type="submit" name="submit" value="Lưu thay đổi" class="submit-btn">
      </form>

    <?php



    } else {
      echo "Không tìm thấy thông tin người dùng.";
    }
    ?>
  </div>





  <script src="script.js"></script>
</body>

</html>
