<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col">
                    <h3 class="title">thông tin thanh toán</h3>
                    <div class="inputBox">
                        <span>họ và tên :</span>
                        <input type="text" placeholder="Họ tên của bạn">
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>số điện thoại :</span>
                            <input type="text" placeholder="Số điện thoại của bạn">
                        </div>
                        <div class="inputBox">
                            <span>địa chỉ email :</span>
                            <input type="text" placeholder="Email của bạn">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>tỉnh/thành phố :</span>
                            <select name="" id="">
                                <option value="">Chọn tỉnh/thành phố</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <span>quận/huyện :</span>
                            <select name="" id="">
                                <option value="">Chọn quận huyện</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span style="opacity: 0;">...</span>
                            <select name="" id="">
                                <option value="">Chọn xã/phường</option>
                            </select>
                        </div>
                        <div class="inputBox">
                            <span>địa chỉ :</span>
                            <input type="text" placeholder="Ví dụ: số 20, ngõ 90">
                        </div>
                    </div>
                    <div class="inputBox">
                        <input type="checkbox">
                        <span style="color: #444;">giao hàng tới địa điểm khác?</span>
                    </div>
                    <div class="inputBox">
                        <span>ghi địa chỉ đơn hàng (tùy chọn)</span>
                        <textarea placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."></textarea>
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">Đơn hàng của bạn</h3>
                    <table>
                        <tr>
                            <td style="font-weight: 600;">SẢN PHẨM</td>
                            <td>TẠM TÍNH</td>
                        </tr>
                        <tr>
                            <td>DNK Yellow Shoes x 1 <br> VENDOR:</td>
                            <td>120 đ</td>
                        </tr>
                        <tr>
                            <td>Áo dài việt nam x 6 <br> VENDOR:</td>
                            <td>2.000.000 đ</td>
                        </tr>
                        <tr>
                            <td>Anchor Bracelet x 1 <br> VENDOR:</td>
                            <td>150 đ</td>
                        </tr>
                        <tr>
                            <td>Áo dài việt nam màu vàng x 7</td>
                            <td>1.000.000 đ</td>
                        </tr>
                        <tr>
                            <td>Tạm tính</td>
                            <td>3.000.000 đ</td>
                        </tr>
                        <tr>
                            <td style="text-align: left">
                                <div class="inputBox" style="margin:0;">
                                    <label style="font-weight: 600;" for="1">shipping</label> <br>
                                    <input type="radio" name="1" id="">
                                    <span>giao hàng miễn phí</span> <br>
                                    <input type="radio" name="1" id="">
                                    <span>đồng giá 50.000 đ</span> <br>
                                    <small>DNK Yellow Shoes x 1, Áo dài việt nam x 6, Anchor Bracelet x 1</small>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left">
                                <div class="inputBox" style="margin:0;">
                                    <label style="font-weight: 600;" for="2">shipping: áo thun</label> <br>
                                    <input type="radio" name="2" id="">
                                    <span>giao hàng miễn phí</span> <br>
                                    <input type="radio" name="2" id="">
                                    <span>đồng giá 50.000 đ</span><br>
                                    <small>Áo dài việt nam màu vàng x 7</small>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: left">
                                <div class="inputBox" style="margin: 0;">
                                    <input type="radio" name="3" id="">
                                    <span>Chuyển khoản ngân hàng</span><br>
                                    <input type="radio" name="3" id="">
                                    <span>Trả tiền mặt khi nhận hàng</span><br>
                                    <div class="momo">
                                    <input type="radio" name="3" id="">
                                    <span>Quét mã MoMo</span>
                                    <img src="https://upload.wikimedia.org/wikipedia/vi/f/fe/MoMo_Logo.png" alt="">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <input type="submit" value="Tiến hành kiểm tra" class="submit-btn">
        </form>
    </div>
</body>

</html>