let navbar = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () =>{
  navbar.classList.toggle('active');
  searchForm.classList.remove('active');
  cartItem.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () =>{
  searchForm.classList.toggle('active');
  navbar.classList.remove('active');
  cartItem.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-container');
document.querySelector('#cart-btn').onclick = () =>{
  cartItem.classList.toggle('active');
  navbar.classList.remove('active');
  searchForm.classList.remove('active');
}

window.onscroll = () =>{
  navbar.classList.remove('active');
  searchForm.classList.remove('active');
  cartItem.classList.remove('active');
}



let btns = document.querySelectorAll("button.btn")

btns.forEach(btn => {
  btn.addEventListener("click", event=>{
    let index = Array.from(btns).indexOf(event.currentTarget)
    let modals = document.querySelectorAll(".modal")
    let modal = modals.item(index);
    modal.style.display = "block";
    window.onclick = function (event) {
        if (event.target == modal) {
          hideModal(modal);
        }}
    modal.querySelector("span").addEventListener("click", event =>{
      hideModal(modal);
    })
  })
})

function hideModal(modal)
{
  let cloneModal = modal.cloneNode(true);
  cloneModal.style.display = "none";
  modal.replaceWith(cloneModal);
}