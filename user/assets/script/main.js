//header
try {
  const btnSearch = document.querySelector(".btn-search");
  const textSearch = document.querySelector(".text-search");
  const navbar = document.querySelector(".navbar");
  const btnBar = document.querySelector("#menu-btn");

  btnSearch.addEventListener("click", () => {
    if (textSearch.classList.contains("show-search")) {
      textSearch.classList.remove("show-search");
    } else {
      textSearch.classList.add("show-search");
    }
  });

  btnBar.addEventListener("click", () => {
    if (navbar.classList.contains("active")) {
      navbar.classList.remove("active");
    } else {
      navbar.classList.add("active");
    }
  }); 
} catch (error) {
}

//kiểm tra đăng nhập thành công
try {
  const btnUser = document.querySelector(".btn-user");
  const dropdownUser = document.querySelector(".dropdown-user");
  
  btnUser.addEventListener("click", () => {
    if (dropdownUser.classList.contains("show-dropdown-user")) {
      dropdownUser.classList.remove("show-dropdown-user");
    } else {
      dropdownUser.classList.add("show-dropdown-user");
    }
  });
} catch (error) {
}

//products
try {
  const btnCategory = document.querySelector(".parent_category");
  const subCategory = document.querySelector(".sub_category");

  function addHeight(){
    var liHeight = parseInt(getComputedStyle(subCategory.querySelector('li')).height);
    var hightSubCategory = liHeight * subCategory.children.length + 35;
    document.documentElement.style.setProperty('--ul-height', hightSubCategory + 'px');
  }

  btnCategory.addEventListener("click", () => {
    addHeight();
    if (subCategory.classList.contains("show")) {
      subCategory.classList.remove("show");
    } else {
      subCategory.classList.add("show");
    }
  }); 

  const priceElements = document.querySelectorAll(".price");
  for(var priceElement of priceElements ){
    var priceText = priceElement.textContent;
    var price = parseInt(priceText, 10);
    var fommatPrice = price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    priceElement.textContent = fommatPrice + "vnđ";
  }
  
} catch (error) {
}

//detaiProduct + cart
try {
  const decrementButton = document.querySelector('.decrement');
  const incrementButton = document.querySelector('.increment');
  const countInput = document.querySelector('.count');

  decrementButton.addEventListener('click', function() {
      if (countInput.value > 1) {
          countInput.value--;
      }
  });

  incrementButton.addEventListener('click', function() {
      countInput.value++;
  });
} catch (error) {
}