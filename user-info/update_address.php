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

    if (isset($_POST['submit'])) {

      $address = $_POST['house'] . ', ' . $_POST['street'] . ', ' . $_POST['district'] . ', ' . $_POST['city'] . ', ' . $_POST['country'];

      $update_address = $conn->prepare("UPDATE `users` set T_address = ? WHERE I_id_user = ?");
      $update_address->execute([$address, $user_id]);

      header("Location: info.php");
      exit();
    }
    ?>

    <form action="" method="post">
      <input type="hidden" name="user_id" value="<?= $user_id ?>">

      <div class="row">
        <h3 class="title">Cập nhật địa chỉ</h3>
        <div class="inputBox">
          <label>Số nhà</label>
          <input class="w100" type="text" name="house" placeholder="nhập số nhà">
        </div>
        <div class="inputBox">
          <label>Tên đường</label>
          <input class="w100" type="text" name="street" placeholder="nhập tên đường">
        </div>
        <div class="inputBox">
          <label>Tên quận</label>
          <input class="w100" type="text" name="district" placeholder="nhập tên quận">
        </div>
        <div class="inputBox">
          <label>Tên thành phố</label>
          <input class="w100" type="text" name="city" placeholder="nhập thành phố">
        </div>
        <div class="inputBox">
          <label>Tên nước</label>
          <input class="w100" type="text" name="country" placeholder="nhập tên nước"> 
        </div>
      </div>

      <input type="submit" name="submit" value="Cập nhật địa chỉ" class="submit-btn">
    </form>

  </div>
</body>

</html>