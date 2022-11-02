var index = 0;
function changeImage (){
    var img = ["https://xonxen.vn/public/images/gallery/xonxen-shop-collection-new-17032022.webp","https://xonxen.vn/public/images/gallery/xonxen-shop-Outfit-for-summer-17032022.webp","https://xonxen.vn/public/images/gallery/xonxen-shop-summer-collection-18032022.webp"];
    document.getElementById('img').src = imgs[index];
    index++;
    if(index == 3){
        index=0;

    }
}
setInterval(changeImage,1000);