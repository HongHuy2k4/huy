<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $birthday = $_POST["birthday"];
    $sex = $_POST["sex"];
    $address = $_POST["address"];
    $province = $_POST["province"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $user_id = $_POST["user_id"];

    $errorMessage = ''; // Khởi tạo biến thông báo lỗi

    // Kiểm tra xem số điện thoại có đúng 10 chữ số không
    if (strlen($number) !== 10 || !is_numeric($number)) {
        $errorMessage .= "Số điện thoại không hợp lệ. Vui lòng nhập đúng 10 chữ số.<br>";
    }

    // Kiểm tra định dạng email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage .= "Địa chỉ email không hợp lệ. Vui lòng nhập đúng định dạng email.<br>";
    }

    // Nếu có lỗi, bạn có thể chuyển hướng trở lại trang form với thông báo lỗi
    if (!empty($errorMessage)) {
        header("Location: info.php?error_message=" . urlencode($errorMessage));
        exit();
    }

    // Chuyển số điện thoại thành chuỗi
    $number = strval($number);

    // Kết hợp giá trị từ các select và input thành một giá trị address
    $address = "{$address} | {$province}";

    $update_profile = $conn->prepare("UPDATE `users` SET T_name=?, D_day_of_birth=?, T_sex=?, T_address=?, T_number_phone=?, T_email=? WHERE I_id_user=?");
    $update_profile->bind_param('ssssssi', $name, $birthday, $sex, $address, $number, $email, $user_id);
    $update_profile->execute();

    header("Location: info.php");
    exit();
}
?>
