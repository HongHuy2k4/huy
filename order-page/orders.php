<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>

<body>

  <section class="orders">

    <h1 class="title">chi tiết hóa đơn</h1>

    <div class="box">
      <p>Mã đơn hãng: <span>31232321</span></p>
      <p>Họ và tên: <span>Huy</span></p>

      <div class="product-container">

        <div class="product">
          <div class="product-info">
            <img src="https://cdn.nguyenkimmall.com/images/product/829/dien-thoai-iphone-14-pro-max-1tb-tim-1.jpg" alt="">
            <span>Sản phẩm 1</span>
            <p>Thông tin sản phẩm</p>
          </div>
          <button class="toggle-review btn" onclick="toggleReview(1)"><i class="fas fa-star"></i></button>
          <div class="review" id="review1">
            <span>Đánh giá sản phẩm 1</span>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span style="font-size: 2rem;">5.0</span>
            </div>
            <textarea style="background-color: #f0f0f0;" name="" id="" cols="30" rows="10" placeholder="Nội dung đánh giá sản phẩm 1..."></textarea>
            <button class="btn" style="border: .2rem solid black; color: #fff; background: orange;">Đánh giá</button>
          </div>
        </div>

        <div class="product">
          <div class="product-info">
            <img src="https://cdn.nguyenkimmall.com/images/product/829/dien-thoai-iphone-14-pro-max-1tb-tim-1.jpg" alt="">
            <span>Sản phẩm 2</span>
            <p>Thông tin sản phẩm</p>
          </div>
          <button class="toggle-review btn" onclick="toggleReview(2)"><i class="fas fa-star"></i></button>
          <div class="review" id="review2">
            <span>Đánh giá sản phẩm 2</span>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <span style="font-size: 2rem;">5.0</span>
            </div>
            <textarea style="background-color: #f0f0f0;" name="" id="" cols="30" rows="10" placeholder="Nội dung đánh giá sản phẩm 1..."></textarea>
            <button class="btn" style="border: .2rem solid black; color: #fff; background: orange;">Đánh giá</button>
          </div>
        </div>

      </div>

    </div>

  </section>









  <script src="script.js"></script>
</body>

</html>