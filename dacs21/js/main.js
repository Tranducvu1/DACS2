
var index = 0;
function changeImage (){
var imgs = ["images/index/anhbiaindex.png","images/index/anhbiaindex2.png","images/index/anhchayindex.png"];
document.getElementById('img').src = imgs[index];
index++;
if(index == 3){
index=0;

}
}
setInterval(changeImage,3000);

    const header = document.querySelector("header")
    window.addEventListener("scroll",function(){
if(x>0){
    header.classList.add("sticky")
}
else {
    header.classList.remove("sticky")
}
    })