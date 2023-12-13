<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $birthday = $_POST["birthday"];
    $sex = $_POST["sex"];
    $address = $_POST["address"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $user_id = $_POST["user_id"];

    $update_profile = $conn->prepare("UPDATE `users` SET T_name=?, D_day_of_birth=?, T_sex=?, T_address=?, T_number_phone=?, T_email=? WHERE I_id_user=?");
    $update_profile->execute([$name, $birthday, $sex, $address, $number, $email, $user_id]);

    header("Location: info.php");
    exit();
}
?>
