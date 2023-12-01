// menu btn
let navbar = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () =>{
  navbar.classList.toggle('active');
  searchForm.classList.remove('active');
  cartItem.classList.remove('active');
}


const mainImage = document.querySelector(".main-image img");
const thumbnails = document.querySelectorAll(".thumbnail img");

thumbnails.forEach((thumbnail) => {
    thumbnail.addEventListener("click", () => {
        mainImage.src = thumbnail.src;
    });
});

thumbnails.forEach((thumbnail) => {
    thumbnail.addEventListener("click", () => {
        thumbnails.forEach((t) => t.parentElement.classList.remove("selected-thumbnail"));
        thumbnail.parentElement.classList.add("selected-thumbnail");
        mainImage.src = thumbnail.src;
    });
});

const decrementButtons = document.querySelectorAll('.decrement');
const incrementButtons = document.querySelectorAll('.increment');
const countInputs = document.querySelectorAll('.count');
const priceElements = document.querySelectorAll('.price h1');
const totalElements = document.querySelectorAll('.sub-total span');
const prices = [];

function updateTotalPrice(index) {
  const qty = parseInt(countInputs[index].value, 10);
  const price = parseFloat(prices[index]);
  const total = qty * price;
  var fommatTotal = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  totalElements[index].textContent = fommatTotal + "đ";

  // Store the total value in the productTotals array
//   productTotals[index] = total;

  // Recalculate total price when a checkbox is checked or unchecked
//   recalculateTotalPrice();
}

// function recalculateTotalPrice() {
//   totalPrice = 0;
//   printTotalPrices.length = 0; // Clear the array

//   productTotals.forEach(function (total, index) {
//     if (childCheckboxes[index].checked) {
//       totalPrice += total;
//       printTotalPrices.push(total);
//     }
//   });

//   // Update the displayed total price
//   var fommatTotalPrice = totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
//   document.querySelector('.total_price').textContent = fommatTotalPrice + "Đ";
//   document.querySelector('.price').textContent = fommatTotalPrice + "Đ";
// }

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

var counters = document.querySelectorAll('.star-counter');
var bars = document.querySelectorAll('.progress-bar');
const totalStar = document.querySelector('#total-star');

// Đảo ngược mảng bars
bars = Array.from(bars).reverse();

counters.forEach(function(counter, index) {
  var count = parseFloat(counter.textContent);
  var total = parseFloat(totalStar.textContent); // Sử dụng giá trị PHP $count

  if (total > 0 && count != 0) {
    var percentage = ((total - count) / total) * 100;
    bars[index].style.width = percentage + '%';
  }else{
    bars[index].style.width = 0 + '%';
  }
});

$('.likes').click(function(){
  var clickedElement = $(this);
  var idcmt = clickedElement.closest('.likes').data('idcmt');
  var idUser = clickedElement.closest('.likes').data('iduser');
  var idsp = clickedElement.closest('.likes').data('idsp');
  var idUserOfCmt = clickedElement.closest('.likes').data('iduserofcmt');
  var likes = clickedElement.closest('.likes').find('i');
  var likeCount = clickedElement.closest('.likes').find('.like-count');
  var totalLikes = clickedElement.closest('.box').find('.total-likes');
  var newLikeCount = parseInt(likeCount.text()); // Chuyển đổi thành số
  var newTotalLikes = parseInt(totalLikes.text());
  if (idcmt && idUser > 0 && idsp && idUserOfCmt) {
    $.ajax({
      method: "get",
      url: "../../../index.php?route=detailProduct",
      data: {sign: "likes", idcmt: idcmt, idUser: idUser, idsp: idsp, idUserOfCmt:idUserOfCmt},
      success: function(response) {
        console.log(response);
        if (response.includes('thêm thành công')) {
          likes.css("color", "blue");
          newLikeCount++;
          newTotalLikes++;
          likeCount.text(newLikeCount);
          totalLikes.text(newTotalLikes);
        } else if(response.includes('xóa thành công')){
          likes.css("color", "");
          newLikeCount--;
          newTotalLikes--;
          likeCount.text(newLikeCount);
          totalLikes.text(newTotalLikes);
        }
      },
      error: function(error) {
        console.error(error);
      }
    });
  } else {
    Swal.fire({
      title: "Bạn cần đăng nhập để thực hiện được chức năng này!",
      icon: "warning",
      customClass: {
          popup: "custom-size"
      }
    });
  }
});


$('.comments').click(function(){
  var idUser = $(this).data('iduser');
  var idsp = $(this).data('idsp');
  var idcmt = $(this).data('idcmt');
  var commentBox = $(this).closest('.react').find('.comment-box');
  var btnSubmit = $(this).closest('.react').find('.comment-box').find('.btn-submit');
  var content = $(this).closest('.react').find('.comment-box').find('#comment').val();
  if(idUser > 0){
    
    if(commentBox.css('display') == "none"){
      commentBox.css("display", "block");
    }else{
      commentBox.css("display", "none");
    }
    $(btnSubmit).click(function(){
      var content = $('#comment').val();
      // sendData(idsp,content);
      console.log(idcmt);
    })
  }else{
    Swal.fire({
      title: "Bạn cần đăng nhập để thực hiện được chức năng này!",
      icon: "warning",
      customClass: {
          popup: "custom-size"
      }
    });
  }
});

// Sử dụng sự kiện input để theo dõi thay đổi trong textarea
$('#comment').on('input', function() {
  autoExpandTextarea(this);
});

// Sử dụng sự kiện keyup để theo dõi khi người dùng xóa nội dung
$('#comment').on('keyup', function(e) {
  if (e.keyCode == 8 || e.keyCode == 46) { // Backspace or Delete key
      autoExpandTextarea(this);
  }
});

function autoExpandTextarea(textarea) {
  // Tính toán số hàng của textarea
  var rows = textarea.value.split('\n').length + 1;

  // Đặt chiều cao của textarea dựa vào số hàng
  var lineHeight = parseInt($(textarea).css('line-height'), 10);
  var newHeight = rows * lineHeight + 'px';

  $(textarea).css('height', newHeight);
}

$('#comment').on('keydown', function (e) {
  var idsp = $(this).closest('.react').find('.comments').data('idsp');
  var idcmt = $(this).closest('.react').find('.comments').data('idcmt');
  var content = $(this).val();
  console.log(idsp);
  // Kiểm tra nếu phím Enter được nhấn (mã ASCII: 13) và không nhấn Shift
  if (e.which === 13 && !e.shiftKey) {
      // Ngăn chặn hành động mặc định của phím Enter (ngăn không cho xuống dòng)
      e.preventDefault();

      // Gửi dữ liệu thông qua Ajax ở đây
      // sendData(idsp,content);
      console.log(idcmt);
  }
});

function sendData(idsp,content){
  var idUser = $('.likes').data('iduser');
  console.log(idcmt);
  // $.ajax({
  //   method: "get",
  //   url: "../../../index.php?route=detailProduct",
  //   data: {sign: "addComment", idsp: idsp, idUser: idUser, idcmt: idcmt, content: content},
  //   success: function(response) {
  //     console.log(response);
  //     if (response.includes('thêm comment thành công')) {
  //       var commentText = $('#comment').val().replace(/\n/g, "<br>");
  //       var username = $("#username").val();
  //       var words = username.split(" ");
  //       var wordCount = words.length;
  //       var resultWord = '';

  //       // Xử lý nếu tên chỉ có một chữ
  //       if (wordCount === 1) {
  //           resultWord = words[0].charAt(0).toUpperCase();
  //       } else {
  //           // Tên có nhiều hơn một chữ
  //           resultWord += words[wordCount - 2].charAt(0).toUpperCase();
  //           resultWord += words[wordCount - 1].charAt(0).toUpperCase();
  //       }
  //       $(".total-sub-react").prepend('<div class="sub-react"><div class="heading"><div class="logo">'
  //       + resultWord +'</div><h4>'+username+' <span>| Ngày hiện tại</span></h4></div><p>' + commentText + '</p></div>');
  //       $("#comment").val("");
  //     } else if(response.includes('thêm comment thất bại')){
  //       console.log("thêm thất bại");
  //     }
  //   },
  //   error: function(error) {
  //     console.error(error);
  //   }
  // });
}

