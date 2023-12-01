<?php
  include("database/connect.php");
  include("user/controller/detailProductController.php");

  $detailProductController = new DetailProductController($conn);

  if(isset($_GET['idType'])){
    $idType = $_GET['idType'];
  }else{
    $idType = $detailProductController->getIdType($_GET['idsp']);
  }

  if(isset($_GET['sign'])){
    if($_GET['sign'] == "likes"){
      $resultSign = $detailProductController->checkLike($_GET['idcmt'],$_GET['idUser'],$_GET['idUserOfCmt']);
      echo $resultSign;
    }else if($_GET['sign'] == "comment"){
      $resultSign = $detailProductController->checkComment($_GET['idcmt'],$_GET['idUser'],$_GET['idsp']);
      echo $resultSign;
    }else if($_GET['sign'] == "addComment"){
      $resultSign = $detailProductController->addComment($_GET['idcmt'],$_GET['idUser'],$_GET['idsp'],$_GET['content']);
      echo $resultSign;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./user/assets/css/detailProduct.css">
</head>

<body>
  <!-- product sections starts -->
  <section class="product">
    <div class="row show-pro">
      <?php
      $detailProductController->select($_GET['idsp'], $idType);  
      ?>
    </div>
  </section>
  <!-- product sections ends -->

  <!-- comment sections starts -->
  <section class="comment">
    <div class="wrap">
      <?php
        $detailProductController->selectReview($_GET['idsp']);
        $detailProductController->selectComment($_GET['idsp']);
      ?>
      
      </div>
    </div>
  </section>
  <!-- comment sections ends -->
  <script src="user/assets/script/detailProduct.js"></script>
</body>

</html>