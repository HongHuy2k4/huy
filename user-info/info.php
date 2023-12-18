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

    $errorMessage = isset($_GET['error_message']) ? $_GET['error_message'] : '';
    $select_profile = $conn->prepare("SELECT * FROM users WHERE I_id_user = ?");
    $select_profile->bind_param('i', $user_id);
    $select_profile->execute();
    $result = $select_profile->get_result();

    if ($result->num_rows > 0) {
      $fetch_profile = $result->fetch_assoc();
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
            <div class="flex">
              <span>Địa chỉ</span>
              <select class="inputBox" name="" id="province">
              </select>
              <select class="inputBox" name="" id="district">
                <option value="">chọn quận</option>
              </select>
              <select class="inputBox" name="" id="ward">
                <option value="">chọn phường</option>
              </select>
            </div>

            <input style="width: 400px;" type="text" name="address" placeholder="Vui lòng nhập số nhà và tên đường">

            <input type="hidden" name="province" id="result">
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
          <span class="error-message"><?= $errorMessage; ?></span>
        </div>

        <input type="submit" name="submit" value="Lưu thay đổi" class="submit-btn">
      </form>

    <?php
    } else {
      echo "Không tìm thấy thông tin người dùng.";
    }
    ?>
  </div>





  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
  <script>
    const host = "https://provinces.open-api.vn/api/";
    var callAPI = (api) => {
      return axios.get(api).then((response) => {
        renderData(response.data, "province");
      });
    };
    callAPI("https://provinces.open-api.vn/api/?depth=1");
    var callApiDistrict = (api) => {
      return axios.get(api).then((response) => {
        renderData(response.data.districts, "district");
      });
    };
    var callApiWard = (api) => {
      return axios.get(api).then((response) => {
        renderData(response.data.wards, "ward");
      });
    };

    var renderData = (array, select) => {
      let row = ' <option disable value="">chọn</option>';
      array.forEach((element) => {
        row += `<option value="${element.code}">${element.name}</option>`;
      });
      document.querySelector("#" + select).innerHTML = row;
    };

    $("#province").change(() => {
      callApiDistrict(host + "p/" + $("#province").val() + "?depth=2");
      printResult();
    });
    $("#district").change(() => {
      callApiWard(host + "d/" + $("#district").val() + "?depth=2");
      printResult();
    });
    $("#ward").change(() => {
      printResult();
    });

    var printResult = () => {
      if ($("#district").val() !== "" && $("#province").val() !== "" && $("#ward").val() !== "") {
        let result =
          $("#ward option:selected").text() +
          " | " +
          $("#district option:selected").text() +
          " | " +
          $("#province option:selected").text();
        $("#result").val(result); // Sử dụng .val() để đặt giá trị cho input
      }
    };
  </script>



</body>

</html>