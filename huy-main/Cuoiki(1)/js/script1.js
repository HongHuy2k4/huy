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

    function increaseQuantity() {
      const quantityInput = document.getElementById("quantity");
      quantityInput.value = parseInt(quantityInput.value) + 1;
    }
  
    function decreaseQuantity() {
      const quantityInput = document.getElementById("quantity");
      const currentValue = parseInt(quantityInput.value);
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
    }

    