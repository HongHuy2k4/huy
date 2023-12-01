<?php
    include_once('user/model/cartModel.php');

    class CartController{
        private $cart_sign;

        public function __construct($conn) {
            $this->cart_sign = new CartModel($conn);
        }

        public function selectCount($usename){
            $result = $this->cart_sign->selectCount($usename);
            $total_cart = 0;
            if($result){
                while($row = mysqli_fetch_array($result)){
                    $total_cart ++;
                }
                echo "
                        <a href='index.php?route=cart' class='fas fa-shopping-cart' id='cart-btn'>
                            <span class='count_cart'>".$total_cart."</span>
                        </a>
                    ";
            }else{
                return 0;
            }
        }

        public function selectData($idsps,$qtys,$idCart){
            $result = $this->cart_sign->selectData($idsps);
            if($result){
                while($row_result = mysqli_fetch_array($result)){
                    $id_pro = $row_result['I_id_pro'];

                    // Sử dụng array_search để tìm vị trí của id_pro trong mảng idsps
                    $count = array_search($id_pro, $idsps);
                    $link_imgs = explode("|", $row_result['T_img_sample_pro']);
                    echo '
                        <div class="row show_item" data-idcart="'.$idCart.'" data-idsp="'.$row_result['I_id_pro'].'">
                            <div class="col-3 show_pro">
                                <input type="checkbox" name="check" id="child_check" data-price="'.$row_result['I_price']*$qtys[$count].'">
                                <img src="'.$link_imgs[0].'" alt="ảnh sản phẩm">
                                <h5 class="name_product">'.$row_result['T_name_pro'].'</h5>
                            </div>
                            <div class="col-2 show_type">
                                
                            </div>
                            <div class="col-2 price_cart">
                                <span class="test">'.$row_result['I_price'].'</span>
                            </div>
                            <div class="col-2 qty">
                                <button type="button" class="decrement">-</button>
                                <input type="input" name="count[]" class="count" require value="'.$qtys[$count].'" min="1" max="99" onchange="updateQty(this)">
                                <button type="button" class="increment">+</button>
                            </div>
                            <div class="col-2 total_price_cart">
                                <span>'.$row_result['I_price']*$qtys[$count].'</span>
                            </div>
                            <div class="col-1">
                                <i class="delete fa-solid fa-trash-can"></i>
                            </div>
                        </div>
                    ';
                }
            }
        }

        public function getIdCart($username){
            $result = $this->cart_sign->getIdCart($username);
            $row = mysqli_fetch_array($result);
            return $row['I_id_cart'];
        }

        public function getIdsps($username){
            $total_cart = $this->cart_sign->selectCount($username);
            $idsps = array();
            while($row = mysqli_fetch_array($total_cart)){
                $idsps[] = $row['I_id_pro'];
            }
            // sort($idsps);
            return $idsps;
        }

        public function getQtys($username){
            $total_cart = $this->cart_sign->selectCount($username);
            $qtys = array();
            while($row = mysqli_fetch_array($total_cart)){
                $qtys[] = $row['I_qty'];
            }
            return $qtys;
        }

        public function updateCart($idCart,$idsps,$counts,$sign){
            $result = $this->cart_sign->updateCart($idCart,$idsps,$counts,$sign);
            if($result){
                return $msg = "success_cart";
            }else{
                return $msg = "fail_cart";
            }
        }

        public function deleteCart($idCart,$idsp){
            return $this->cart_sign->deleteCart($idCart,$idsp);
        }
    }
?>