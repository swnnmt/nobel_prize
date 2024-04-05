//Chạy silde và chạy con trỏ nút theo slide
const imgPositon=document.querySelectorAll(".aspect-ratio-169 img")
const imgContainer=document.querySelector(".aspect-ratio-169")
const dotItem= document.querySelectorAll(".dot")
let index =0;
let imgNumber=imgPositon.length;
// console.log(imgPositon);
imgPositon.forEach(function(image,index){
  image.style.left=index*100+"%"
  dotItem[index].addEventListener("click",function(){
    slider(index);
  })
})
function imgSlide(){
    index++;
    if(index>=imgNumber){
        index=0;
    }
    slider(index)
}
function slider(index){
    imgContainer.style.left="-"+index*100+"%";
    const dotActive=document.querySelector(".active")
    dotActive.classList.remove("active");
    dotItem[index].classList.add("active");
}
setInterval(imgSlide,5000)
// search
    document.getElementById("searchIcon").onclick = function() {
        document.querySelector(".search").style.display = "";
    };
    document.getElementById("hinde_search").onclick = function() {
        document.querySelector(".search").style.display = "none";
    };
