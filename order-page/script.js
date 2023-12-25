// Trong hàm toggleReview(number)

function toggleReview(number) {
  var reviewId = "review" + number;
  var reviewDiv = document.getElementById(reviewId);

  if (window.getComputedStyle(reviewDiv).display === 'none') {
    reviewDiv.style.display = 'block';
  } else {
    reviewDiv.style.display = 'none';
  }

  var stars = reviewDiv.querySelector('.stars');
  var starIcons = stars.querySelectorAll('i');
  var ratingSpan = stars.querySelector('span'); // Thêm dòng này để lấy thẻ span

  var clicked = false; // Biến để kiểm tra xem có đang ở chế độ click không

  // Thêm sự kiện cho từng icon sao
  starIcons.forEach(function(star, index) {
    star.addEventListener('mouseover', function() {
      if (!clicked) {
        // Chuyển màu của các icon sao từ 0 đến index thành màu vàng
        for (var i = 0; i <= index; i++) {
          starIcons[i].style.color = 'gold';
        }

        // Cập nhật số trong thẻ span với 1 chữ số thập phân
        ratingSpan.textContent = (index + 1).toFixed(1);

        // Đặt lại màu và số của những sao không được chọn
        for (var i = index + 1; i < starIcons.length; i++) {
          starIcons[i].style.color = 'gray';
        }
      }
    });

    star.addEventListener('mouseout', function() {
      if (!clicked) {
        // Chuyển màu của tất cả icon sao về màu xám khi rê chuột ra khỏi sao
        starIcons.forEach(function(singleStar) {
          singleStar.style.color = 'gray';
        });

        // Đặt lại số trong thẻ span khi rê chuột ra khỏi sao
        ratingSpan.textContent = number.toFixed(1); // Số của sao được chọn trước đó
      }
    });

    star.addEventListener('click', function() {
      clicked = true; // Chuyển sang chế độ click
      console.log(index + 1); // Log số của sao khi bấm vào
    });
  });

  // Thêm sự kiện cho `.stars` để thoát chế độ click khi rê chuột ra khỏi nó
  stars.addEventListener('mouseout', function() {
    clicked = false; // Trở lại chế độ rê chuột
  });
}
