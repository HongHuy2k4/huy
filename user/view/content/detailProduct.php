<main>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-12 infor"></div>
            <div class="col-md-3 add_cart">
                <form action="" method="POST" class="box">
                    <input type="hidden" name="cart_id" value="1">
                    <h2>Số lượng</h2>
                    <div class="counter">
                        <button type="button" class="decrement">-</button>
                        <input type="input" class="count" require value="1" min="1" max="99">
                        <button type="button" class="increment">+</button>
                    </div>
                    <p class="sub-total">Tổng tiền : <span>1000000<i class="fa-solid fa-dong-sign"></i></span></p>
                    <button type="submit" name="update_cart" class="btn_buy"><i class="fa-solid fa-receipt"></i> Mua ngay</button>
                    <button type="submit" name="update_cart" class="btn_add_cart"><i class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
                </form>
            </div>
        </div>
    </div>
</main>
