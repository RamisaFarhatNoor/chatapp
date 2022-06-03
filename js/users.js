const search_bar=document.querySelector(".users .search input");
const search_btn=document.querySelector(".users .search button");
search_btn.onclick= ()=>{
    search_bar.classList.toggle("active");
    search_bar.focus();
    search_btn.classList.toggle("active");
}