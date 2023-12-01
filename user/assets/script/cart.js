try {
    document.addEventListener('DOMContentLoaded', function() {
      const decrementButtons = document.querySelectorAll('.decrement');
      const incrementButtons = document.querySelectorAll('.increment');
      const countInputs = document.querySelectorAll('.count');
      const priceElements = document.querySelectorAll('.price_cart span');
      const totalElements = document.querySelectorAll('.total_price_cart span');
      const parentCheckbox = document.getElementById('parent_check');
      const childCheckboxes = document.querySelectorAll('input[name="check"]');
      const prices = [];
      const printTotalPrices = [];
      const productTotals = [];
  
      function updateTotalPrice(index) {
        const qty = parseInt(countInputs[index].value, 10);
        const price = parseFloat(prices[index]);
        const total = qty * price;
        var fommatTotal = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        totalElements[index].textContent = fommatTotal + "đ";
  
        // Store the total value in the productTotals array
        productTotals[index] = total;
  
        // Recalculate total price when a checkbox is checked or unchecked
        recalculateTotalPrice();
      }
  
      function recalculateTotalPrice() {
        totalPrice = 0;
        printTotalPrices.length = 0; // Clear the array
  
        productTotals.forEach(function (total, index) {
          if (childCheckboxes[index].checked) {
            totalPrice += total;
            printTotalPrices.push(total);
          }
        });
  
        // Update the displayed total price
        var fommatTotalPrice = totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        document.querySelector('.total_price').textContent = fommatTotalPrice + "Đ";
        document.querySelector('.price').textContent = fommatTotalPrice + "Đ";
      }
  
      decrementButtons.forEach(function (decrementButton, index) {
        decrementButton.addEventListener('click', function () {
          if (countInputs[index].value > 1) {
            countInputs[index].value--;
            updateTotalPrice(index);
          }
        });
      });
  
      incrementButtons.forEach(function (incrementButton, index) {
        incrementButton.addEventListener('click', function () {
          countInputs[index].value++;
          updateTotalPrice(index);
        });
      });
  
      countInputs.forEach(function (countInput, index) {
        countInput.addEventListener('change', function () {
          updateTotalPrice(index);
        });
      });
  
      priceElements.forEach(function (priceElement, index) {
        var priceText = priceElement.textContent;
        var price = parseInt(priceText.replace(/[^\d.]/g, ''), 10);
        prices.push(price);
        var fommatPrice = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        priceElement.textContent = fommatPrice + "đ";
      });
  
      totalElements.forEach(function (totalElement, index) {
        updateTotalPrice(index);
      });
  
      parentCheckbox.addEventListener('change', function () {
        childCheckboxes.forEach(function (checkbox) {
          checkbox.checked = parentCheckbox.checked;
        });
  
        // Recalculate total price when the parent checkbox is changed
        recalculateTotalPrice();
      });
  
      childCheckboxes.forEach(function (checkbox, index) {
        checkbox.addEventListener('change', function () {
          updateTotalPrice(index);
        });
      });
  
      $('.delete').click(function(){
        var idcart = $(this).closest('.show_item').data('idcart');
        var idsp = $(this).closest('.show_item').data('idsp');
        var showItem = $(this).closest('.show_item');
  
       if (idcart && idsp) {
        $.ajax({
          method: "post",
          url: "../../../index.php?route=cart", // Thay đổi đường dẫn tới tệp controller của bạn
          data: {delete: "delete", idcart: idcart, idsp: idsp },
          success: function(response) {
            // Xử lý phản hồi từ server (nếu cần)
            console.log(response);
            showItem.fadeOut(500, function() {
              $(this).remove(); // Xóa hoặc ẩn .show_item sau khi fadeOut
            });
          },
          error: function(error) {
            // Xử lý lỗi (nếu có)
            console.error(error);
          }
        });
      } else {
      console.log("Không có giá trị idcart hoặc idsp");
    }
      })
    });
} catch (error) {
    console.log(error);
}