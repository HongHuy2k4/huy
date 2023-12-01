<?php
    class CartModel{
        private $conn; 

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function selectCount($username){
            $sql = "SELECT cp.* FROM cart_pro cp
            JOIN cart c ON cp.I_id_cart = c.I_id_cart
            JOIN users u ON c.I_id_user = u.I_id_user
            WHERE u.T_user_name = '$username'";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }


        public function selectData($idsps){
            if(!empty($idsps)){
                $idspsString = implode(",", $idsps);
                $sql = "SELECT * FROM product WHERE I_id_pro IN ($idspsString) ORDER BY FIELD(I_id_pro, $idspsString)";
                $result = mysqli_query($this->conn, $sql);

                return $result;
            }else{
                return false;
            }
        }

        public function getIdCart($username){
            $sql = "SELECT c.I_id_cart FROM cart c
            JOIN users u ON c.I_id_user = u.I_id_user
            WHERE u.T_user_name = '$username'";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }

        public function updateCart($idCart,$idsps,$counts,$sign){
            $idspsString = implode(",", $idsps);
            $countsString = implode(",", $counts);

            // Tạo câu truy vấn SQL để kiểm tra xem đã có dữ liệu với các I_id_pro trong danh sách chưa
            $checkIfExistsQuery = "SELECT I_id_pro, I_qty FROM cart_pro WHERE I_id_pro IN ($idspsString) AND I_id_cart = $idCart";
            $checkIfExistsResult = mysqli_query($this->conn, $checkIfExistsQuery);
            $existingData = [];

            // Lấy danh sách các I_id_pro và I_qty đã tồn tại trong bảng cart_pro
            while ($row = mysqli_fetch_assoc($checkIfExistsResult)) {
                $existingData[$row['I_id_pro']] = $row['I_qty'];
            }

            foreach ($idsps as $index => $id) {
                $count = $counts[$index];

                // Kiểm tra xem I_id_pro có tồn tại không
                if (array_key_exists($id, $existingData)) {
                    // Nếu tồn tại, kiểm tra giá trị của biến $sign
                    if ($sign === "true") {
                        // Cập nhật bằng cách cộng dồn qty sẵn có với count
                        $newQty = $existingData[$id] + $count;
                    } else {
                        // Cập nhật bằng giá trị mới $count
                        $newQty = $count;
                    }

                    // Thực hiện lệnh UPDATE
                    $updateQuery = "UPDATE cart_pro SET I_qty = $newQty WHERE I_id_pro = $id AND I_id_cart = $idCart";
                    $updateResult = mysqli_query($this->conn, $updateQuery);
                    if (!$updateResult) {
                        return false; // Xử lý lỗi nếu có
                    }
                } else {
                    // Nếu không tồn tại, thêm mới với giá trị qty bằng $count
                    $insertQuery = "INSERT INTO cart_pro (I_id_cart, I_id_pro, I_qty) VALUES ($idCart, $id, $count)";
                    $insertResult = mysqli_query($this->conn, $insertQuery);
                    if (!$insertResult) {
                        return false; // Xử lý lỗi nếu có
                    }
                }
            }
            return true;
        }    
        
        public function deleteCart($idCart,$idsp){
            $sql = "DELETE FROM cart_pro WHERE I_id_cart = $idCart AND I_id_pro = $idsp";
            $result = mysqli_query($this->conn,$sql);
            return $result;
        }
    }
?>