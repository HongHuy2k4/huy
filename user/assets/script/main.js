const btnSearch = document.querySelector(".btn-search");
const textSearch = document.querySelector(".text-search");
const navbar = document.querySelector(".navbar");
const btnBar = document.querySelector("#menu-btn");

btnSearch.addEventListener("click", ()=>{
    if(textSearch.classList.contains("show")){
        textSearch.classList.remove("show");
    }else{
        textSearch.classList.add("show");   
    }
})

btnBar.addEventListener("click", ()=>{
    if(navbar.classList.contains("active")){
        navbar.classList.remove("active");
    }else{
        navbar.classList.add("active");   
    }
})