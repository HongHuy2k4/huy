<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHOP</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./script.js">
</head>

<body>
  <?php
  include('inc/header.php');
  ?>

  <!-- slider section starts -->
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="https://ben.com.vn/tin-tuc/wp-content/uploads/2021/09/cach-san-sale-0d-tren-shopee-5-750x503.png" style="width:100%">
      <div class="text">1 / 3</div>
    </div>

    <div class="mySlides fade">
      <img src="https://channel.mediacdn.vn/2019/12/13/photo-1-1576238187083500921790.jpg" style="width:100%">
      <div class="text">2 / 3</div>

    </div>

    <div class="mySlides fade">
      <img src="https://halotravel.vn/wp-content/uploads/2021/10/san-sale-shopee.png" style="width:100%">
      <div class="text">3 / 3</div>

    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <!-- slider section ends -->

  <!-- icons section starts -->
    <div class="icons-container">
      <div class="icons">
        <img src="https://dosi-in.com/images/detailed/42/CDL11_1.jpg" alt="">
        <div class="info">
          <h3>Áo</h3>
        </div>
      </div>

      <div class="icons">
        <img src="https://static.zara.net/photos///2023/I/0/3/p/6706/551/401/2/w/824/6706551401_6_1_1.jpg?ts=1691062108819" alt="">
        <div class="info">
          <h3>Quần</h3>
        </div>
      </div>

      <div class="icons">
        <img src="https://routine.vn/media/amasty/amoptmobile/catalog/product/cache/5b5632a96492396f42c72e22fdd64763/g/i/giay-10s23sho005_black_3__1_jpg.webp" alt="">
        <div class="info">
          <h3>Giày</h3>
        </div>
      </div>

      <div class="icons">
        <img src="https://vn-live-01.slatic.net/p/a426fc3c69732f960e76eb095d756467.jpg" alt="">
        <div class="info">
          <h3>Kính</h3>
        </div>
      </div>

      <div class="icons">
        <img src="https://product.hstatic.net/1000281824/product/nt5177_k80zbanv-1-p99b-hinh_nghieng_trai-0_31cddc7b84af47d691e1d8982da1c9f0_master.jpeg" alt="">
        <div class="info">
          <h3>Balo</h3>
        </div>
      </div>

      <div class="icons">
        <img src="https://lh3.googleusercontent.com/kcpy4igmneD9VeCOQcn94WgkcTdehn0MMMdUzcLqBmwuUC81QleOj0jCDL0of1FsHPEI0onnNIbaUzOW2F07zP0Jvl808D-U9kOPC0fvTP5lNIKBeg=w570-e365" alt="">
        <div class="info">
          <h3>free delivery</h3>
        </div>
      </div>

      <div class="icons">
        <img src="https://thanhhungwatch.vn/uploads/dong_ho_lobinni_L3601_(4).png" alt="">
        <div class="info">
          <h3>Đồng hồ</h3>
        </div>
      </div>

      <div class="icons">
        <img src="https://zshop.vn/blogs/wp-content/uploads/2019/04/4-e1560154793954.png" alt="">
        <div class="info">
          <h3>Máy ảnh</h3>
        </div>
      </div>

      <div class="icons">
        <img src="https://cdn.tgdd.vn/Products/Images/42/228702/sharp-aquos-zero-5g-basic-141320-111356-600x600.jpg" alt="">
        <div class="info">
          <h3>Điện thoại</h3>
        </div>
      </div>

      <div class="icons">
        <img src="https://laptops.vn/uploads/laptop-man-hinh-cam-ung-asus-vivobook-tp412fa-ec599t_1633688415_640.jpg" alt="">
        <div class="info">
          <h3>Laptop</h3>
        </div>
      </div>
    </div>
  <!-- icons section ends -->

  <!-- products section starts -->
  <section class="products" id="products">
    <h1 class="heading"> latest <span>products</span> </h1>
    <div class="box-container">
      <div class="box">
        <img src="https://kingkongsportwear.vn/wp-content/uploads/2023/01/z4067747139840_dbb0b60b7188ae6968c87962641b0bbb-300x300.jpg" alt="PRODUCT">
        <h3>Áo thun oversize</h3>
        <div class="price">$12.99 <span>$19.99</span> </div>
        <button class="btn">Đặt ngay</button>
      </div>
      <div class="box">
        <img src="https://media3.scdn.vn/img4/2022/03_21/hRDi4o6itfdThhuB9EHe.jpg" alt="PRODUCT">
        <h3>Quần kaki ống suông</h3>
        <div class="price">$12.99 <span>$19.99</span> </div>
        <button class="btn">Đặt ngay</button>
      </div>
      <div class="box">
        <img src="https://vn-test-11.slatic.net/p/fd3087967caf65e14a0fde9786f9cc13.jpg_1500x1500q80.jpg" alt="PRODUCT">
        <h3>Giày sneaker thể thao</h3>
        <div class="price">$15.99 <span>$19.99</span> </div>
        <button class="btn">Đặt ngay</button>
      </div>
      <div class="box">
        <img src="https://cf.shopee.vn/file/ba94ae06da8ed1162371bc8aebe3c08a" alt="PRODUCT">
        <h3>Kính 0 độ MS10</h3>
        <div class="price">$15.99 <span>$19.99</span> </span> </div>
        <button class="btn">Đặt ngay</button>
      </div>
      <div class="box">
        <img src="https://product.hstatic.net/1000365849/product/basic_backpack_nau_1_1.5_7e38280297564e978a984c8724e7adf6_master.jpg" alt="PRODUCT">
        <h3>Balo Camelia basic</h3>
        <div class="price">$15.99 <span>$19.99</span> </div>
        <button class="btn">Đặt ngay</button>
      </div>
      <div class="box">
        <img src="https://zerdio.com.vn/wp-content/uploads/2023/03/mu-noi-nu-mnn05-7.jpg" alt="PRODUCT">
        <h3>Mũ nồi MNNO5</h3>
        <div class="price">$15.99 <span>$19.99</span> </div>
        <button class="btn">Đặt ngay</button>
      </div>
      <div class="box">
        <img src="https://file.hstatic.net/200000507891/file/al-3024m_88142190855e43e385c57775f65a0a69_grande.jpg" alt="PRODUCT">
        <h3>Đồng hồ cơ AL-3024M</h3>
        <div class="price">$15.99 <span>$19.99</span> </div>
        <button class="btn">Đặt ngay</button>
      </div>
      <div class="box">
        <img src="https://www.winwinstore.vn/wp-content/uploads/2021/10/may-anh-fujifilm-x-t30-ii-silver-1.jpeg" alt="PRODUCT">
        <h3>Máy ảnh Fujifilm</h3>
        <div class="price">$12.99 <span>$19.99</span> </div>
        <button class="btn">Đặt ngay</button>
      </div>
    </div>
  </section>
  <!-- products section ends -->

  <?php
  include('inc/footer.php');
  ?>

  <script src="./js/script.js"></script>
</body>

</html>