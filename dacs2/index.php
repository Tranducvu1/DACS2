<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/screen-index.css">
        <link rel="stylesheet" href="js/main.js">
        <title>Yody</title>
    </head>
   <body>
    <header>
        <div class="logo">
          <a href="cartegory.html"><img src="images/logo.png"></a>
        </div>
        <div class="menu">   
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Thời trang</a>
                <ul class="sub-menu">
                    <li><a href="">Áo</a></li>  
                            <li><a href="">Áo thun nữ</a></li>
                            <li><a href="">Áo sơ mi nữ</a></li>
                            <li><a href="">Áo khoác nữ</a></li>
                  
                            <li><a href="">Quần</a></li>
                            <li><a href="">Quần Jean nữ</a></li>
                            <li><a href="">Quần Âu nữ</a></li>
                            <li><a href="">Quần Kaki nữ</a></li>
                            <li><a href="">Quần Short nữ</a></li>
             
                            <li><a href="">Váy nữ</a></li>
                            <li><a href="">Chân váy</a></li>
                            <li><a href="">Váy liền thân</a></li>
                </ul> 
            </li> 
            <li><a href="">Blog</a></li>
            <li><a href="">Sale</a></li>
            <li><a href="">Liên hệ</a></li>
            <li><a href="">Hệ thống</a></li>
            <li><a href="">Tra cứu đơn hàng</a></li>
        </div>
        <div class="others">
            <li><input placeholder="Tìm kiếm" type="text"><i class="fa fa-search"></i></li>
            <li><a class="fa fa-paw" href=""></a></li>
            <li><a class="fa fa-user" href=""></a></li>
            <li><a class="fa fa-shopping-bag" href=""></a></li>
        </div>
    </header>
    <main id="main">
        <div class="first-screen">
            <div class="first-screen__left">
                <div class="first-screen__mob-cols">
                    <div class="first-screen__mob-col">
                        <div class="slider-count">
                            <span class="slider-count__text js-main-count"><span>1</span>/3</span>
                        </div>  
                    </div>
                    <div class="first-screen__mob-col">
                        <ul class="first-screen__socials side-socials">
                            <li class="side-socials__item">
                                <a class="side-socials__link" href="https://www.facebook.com/XonxenShopDaNang/">Facebook</a>
                            </li>
                            <li class="side-socials__item">
                                <a  class="side-socials__link" href="https://www.instagram.com/Xonxen.shop">Instagram</a>
                            </li>   
                            <li class="side-socials__item">
                                <a  class="side-socials__link" href="https://shopee.vn/xonxen.shop">Shopee</a>
                            </li>
                            <li class="side-socials__item">
                                <a  class="side-socials__link" href="https://www.lazada.vn/shop/xonxenshop">Lazada</a>
                            </li>
                            <li class="side-socials__item">
                                <a class="side-socials__link" href="https://www.sendo.vn/shop/xonxen-shop">Sendo</a>
                            </li>
                            <li class="side-socials__item">
                                <a  class="side-socials__link" href="https://vt.tiktok.com/ZSddXsgdr/?k=1">Tiktok</a>
                            </li>
                        </ul>                        
                    </div>
                    <div class="first-screen__mob-col js-to-1">
                        <div class="slider-arrows arrows-1 js-main-arrows js-content-1">
                            <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">
                                <span></span>
                            </button>
                            <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">
                                <span></span>
                            </button>
                        </div></div>
                                              
                </div>
                <div class="slick-slide" data-slick-index="1" aria-hidden="true" role="tabpanel" id="slick-slide01" style="width: 910px; position: relative; left: -910px; top: 0px; z-index: 998; opacity: 0; transition: opacity 1000ms ease 0s;" tabindex="-1">
                    <div>
                        <div class="main-slider__item js-slide" data-item="1" style="width: 100%; display: inline-block;"></div>
                    </div>
                </div> 
                `
                <div class="slick-slide" data-slick-index="2" aria-hidden="true" role="tabpanel" id="slick-slide02" style="width: 910px; position: relative; left: -1820px; top: 0px; z-index: 998; opacity: 0; transition: opacity 1000ms ease 0s;" tabindex="-1">
                    <div>
                        <div class="main-slider__item js-slide" data-item="2" style="width: 100%; display: inline-block;"></div>
                    </div>
                </div>


            </div>
            <div class="first-screen__center">
                <div class="main-slider">
                    <div class="main-slider__list-wrap">
                        <div class="main-slider__list js-main-slider loaded">
                                                            <div class="main-slider__item js-slide active">
                                <div class="main-slider__max">
                                    <div class="main-slider__row">
                                        <div class="main-slider__cell">
                                            <div class="main-slider__content">
                                                <span class="main-slider__subtitle category-subtitle"> bộ sưu tập <b>mới</b></span>
                                                <h2 class="main-slider__title">SUMMER COLLECTION</h2>
                                                <a class="main-slider__button button" href="https://xonxen.vn/danh-muc">
                                                    <span class="button__text">Xem ngay</span>
                                                </a>
                                            </div>
                                            <div class="main-slider__image-wrap">
                                                <img class="main-slider__image" id="img" onclick="changeImage()"  src="https://xonxen.vn/public/images/gallery/xonxen-shop-collection-new-17032022.webp"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                            
                                                           
                                                                                                              
                        </div>
                    </div>
                    <div class="main-slider__bg-wrap">
                        <img class="main-slider__bg" src="https://xonxen.vn/public/images/bg-logo.png" alt="xonxenshop">
                        
                    </div>
                </div>
            </div>
            <div class="first-screen__right js-from-1">
                <div class="slider-dots dots-1 js-main-dots"></div>
                <div class="slider-arrows arrows-1 js-main-arrows js-content-1"></div>
            </div>
        </div>
    </main>         
    
    <div class="main-block__top">
        <span class="main-block__subtitle category-subtitle"><b>Yody shop</b> Best sellers</span>
        <h3 class="main-block__title">sản phẩm bán chạy tại Yody shop</h3>
    </div>
    <div class="inner-catalog">    
        <article class="short-item">
            <div class="short-item__all">
                <a class="short-item__image-bg1" href="https://xonxen.vn/san-pham/ao-kieu-caro-co-vuong-80-236">
                    <img class="short-item__image" src="https://xonxen.vn/public/images/san-pham/ao_kiu/80/ao-kieu-nu-xonxen-shop-caro-co-vuong-de-thuong-chat-vai-mem-min-thoang-mat-freesize-ma-80-1.webp" alt="Áo kiểu caro cổ vuông 80">
                </a>
              
                <h4 class="short-item__title">
                    <a class="short-item__link" href="https://xonxen.vn/san-pham/ao-kieu-caro-co-vuong-80-236">Áo kiểu caro cổ...</a>
                </h4>
                <span class="short-item__price"><a class="short-item__link" href="https://xonxen.vn/san-pham/ao-kieu-caro-co-vuong-80-236">89,000 VND</a></span>
                                                </div>
        </article>                  
          
            
                                 
    
        <article class="short-item">
            <div class="short-item__all">
                <a class="short-item__image-bg1" href="https://xonxen.vn/san-pham/yem-quan-dai-ong-rong-2198-518">
                    <img class="short-item__image" src="https://xonxen.vn/public/images/san-pham/21072021/yem-quan-xonxen-shop-yem-quan-dai-ong-rong-ca-tinh-freesize-ma-2198-4.webp" alt="Yếm quần dài ống rộng 2198">
                </a>
             
                <h4 class="short-item__title">
                    <a class="short-item__link" href="https://xonxen.vn/san-pham/yem-quan-dai-ong-rong-2198-518">Yếm quần dài...</a>
                </h4>
                <span class="short-item__price"><a class="short-item__link" href="https://xonxen.vn/san-pham/yem-quan-dai-ong-rong-2198-518">275,000 VND</a></span>
                                                </div>
        </article>                  
          
            
                                 
    
        <article class="short-item">
            <div class="short-item__all">
                <a class="short-item__image-bg1" href="https://xonxen.vn/san-pham/chan-vay-chu-a-dang-dai-hoa-tiet-caro-hinh-thoi-0703-778">
                    <img class="short-item__image" src="https://xonxen.vn/public/images/san-pham/122021/chan-vay-chu-a-dang-dai-hoa-tiet-caro-hinh-thoi-0703-1.webp" alt="Chân váy chữ A dáng dài họa tiết caro hình thoi 0703">
                </a>
              
                <h4 class="short-item__title">
                    <a class="short-item__link" href="https://xonxen.vn/san-pham/chan-vay-chu-a-dang-dai-hoa-tiet-caro-hinh-thoi-0703-778">Chân váy chữ A...</a>
                </h4>
                <span class="short-item__price"><a class="short-item__link" href="https://xonxen.vn/san-pham/chan-vay-chu-a-dang-dai-hoa-tiet-caro-hinh-thoi-0703-778">225,000 VND</a></span>
                                                </div>
        </article>                  
          
            
                                 
    
        <article class="short-item">
            <div class="short-item__all">
                <a class="short-item__image-bg1" href="https://xonxen.vn/san-pham/ao-bet-vai-cham-bi-nut-truoc-67-240">
                    <img class="short-item__image" src="https://xonxen.vn/public/images/san-pham/ao_kiu/67/ao-tre-vai-xonxen-shop-ao-bet-vai-cham-bi-de-thuong-nut-truoc-freesize-ma-67-1.webp" alt="Áo bệt vai chấm bi nút trước 67">
                </a>
                <h4 class="short-item__title">
                    <a class="short-item__link" href="https://xonxen.vn/san-pham/ao-bet-vai-cham-bi-nut-truoc-67-240">Áo bệt vai chấm...</a>
                </h4>
                <span class="short-item__price"><a class="short-item__link" href="https://xonxen.vn/san-pham/ao-bet-vai-cham-bi-nut-truoc-67-240">59,000 VND</a></span>
                                                </div>
        </article>                  
          
            
                                 
    
        <article class="short-item">
            <div class="short-item__all">
                <a class="short-item__image-bg1" href="https://xonxen.vn/san-pham/ao-khoac-ao-blazer-han-quoc-2-tui-nap-266-672">
                    <img class="short-item__image" src="https://xonxen.vn/public/images/san-pham/112021new/ao-khoac-ao-blazer-han-quoc-2-tui-nap-266-1.webp" alt="Áo khoác Áo blazer hàn quốc 2 túi nắp 266">
                </a>
              
                <h4 class="short-item__title">
                    <a class="short-item__link" href="https://xonxen.vn/san-pham/ao-khoac-ao-blazer-han-quoc-2-tui-nap-266-672">Áo khoác Áo...</a>
                </h4>
                <span class="short-item__price"><a class="short-item__link" href="https://xonxen.vn/san-pham/ao-khoac-ao-blazer-han-quoc-2-tui-nap-266-672">565,000 VND</a></span>
                                                </div>
        </article>                  
          
            
                                 
    
        <article class="short-item">
            <div class="short-item__all">
                <a class="short-item__image-bg1" href="https://xonxen.vn/san-pham/quan-short-jean-tron-ulzzang-5535-220">
                    <img class="short-item__image" src="https://xonxen.vn/public/images/san-pham/quan-short/5535/quan-short-jean-nu-tron-cao-cap-XONXEN-shop-ulzzang-hang-xuat-xin-chat-co-gian-size-s-m-l-ma-5535-1.webp" alt="Quần short jean trơn ulzzang 5535">
                </a>
              
                <h4 class="short-item__title">
                    <a class="short-item__link" href="https://xonxen.vn/san-pham/quan-short-jean-tron-ulzzang-5535-220">Quần short jean...</a>
                </h4>
                <span class="short-item__price"><a class="short-item__link" href="https://xonxen.vn/san-pham/quan-short-jean-tron-ulzzang-5535-220">190,000 VND</a></span>
                                                </div>
        </article>                  
          
            
                                 
    
        <article class="short-item">
            <div class="short-item__all">
                <a class="short-item__image-bg1" href="https://xonxen.vn/san-pham/quan-short-jean-theu-hoa-tiet-o-tui-1083-303">
                    <img class="short-item__image" src="https://xonxen.vn/public/images/san-pham/quan-short/1083/quan-short-jean-theu-hoa-tiet-o-tui-sau-xonxen-shop-chat-jean-co-gian-size-s-m-l-ma-1083-1.webp" alt="Quần short jean thêu họa tiết ở túi 1083">
                </a>
                <h4 class="short-item__title">
                    <a class="short-item__link" href="https://xonxen.vn/san-pham/quan-short-jean-theu-hoa-tiet-o-tui-1083-303">Quần short jean...</a>
                </h4>
                <span class="short-item__price"><a class="short-item__link" href="https://xonxen.vn/san-pham/quan-short-jean-theu-hoa-tiet-o-tui-1083-303">220,000 VND</a></span>
                                                </div>
        </article>                  
          
            
                                 
    
        <article class="short-item">
            <div class="short-item__all">
                <a class="short-item__image-bg1" href="https://xonxen.vn/san-pham/ao-kieu-canh-tien-cham-bi-75-231">
                    <img class="short-item__image" src="https://xonxen.vn/public/images/san-pham/ao_kiu/75/ao-sat-nach-nu-xonxen-shop-ao-kieu-canh-tien-cham-bi-de-thuong-free-size-ma-75-1.webp" alt="Áo kiểu cánh tiên chấm bi 75">
                </a>
                <h4 class="short-item__title">
                    <a class="short-item__link" href="https://xonxen.vn/san-pham/ao-kieu-canh-tien-cham-bi-75-231">Áo kiểu cánh...</a>
                </h4>
                <span class="short-item__price"><a class="short-item__link" href="https://xonxen.vn/san-pham/ao-kieu-canh-tien-cham-bi-75-231">59,000 VND</a></span>
                                                </div>
        </article>                  
               
    </div>
<footer class="footer">
    <div class="footer-left">
        <li class="footer-left-top"><strong> Về Yody</strong></li>
        <li class="footer-left-top"><a href=""></a>Liên hệ</li>
        <li class="footer-left-top"><a href=""></a>Tuyển dụng</li>
        <li class="footer-left-top"><a href=""></a>Giới thiệu</li>
        <li class="icons">
              <a style ="color:blue;" href=""class="fa fa-facebook"></a>
              <a style ="color:blue;" href="" class="fa fa-twitter"></a>
              <a style ="color:red";href="" class="fa fa-youtube"></a>
        </li>
    </div>
    <div class="footer-center">
        <ul class="list-menu" style="display:block">
            <li class="fone"><img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/map.svg?1664013466741" alt="location">
                    Công ty cổ phần Thời trang YODY
                    <br>Mã số thuế: 0801206940
                    <br class="tuan">Địa chỉ: Đường Trần Đại Nghĩa - Phường Hòa Hải - Thành phố Đà Nẵng
            </li>
            <li class="fone">
                <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/icon_address.png?1664013466741" alt="shop">
                <a style ="color:black; " target="t_blank" href="https://www.google.com/maps/search/yody">Tìm cửa hàng gần bạn nhất</a>
            </li>
            <li class="fone">
                <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/phone.svg?1664013466741" alt="phone">
                <a  href="">Liên hệ đặt hàng: 02499966868</a>
                <a  href="">Thắc mắc đơn hàng: 02499966868</a>
                <br/>
                <a href="">Góp ý khiếu nại: 1800 2086</a>
            </li>
            <li><img src="https://bizweb.sapocdn.net/100/438/408/themes/878697/assets/email.svg?1665314757034" alt="email"><a style ="color:black; " href="mailto:chamsockhachhang@yody.vn">Email:chamsockhachhang@yody.vn</a>
            </li>
        </ul>
    </div>    
    <div class="footer-center-right">
        <p class="title-menu">HỖ TRỢ KHÁCH HÀNG <i class="fa fa-caret-down" aria-hidden="true"></i></p>
        <ul class="list-menu">
            <li class="li_menu"><a  href="/bang-size-chuan" title="Hướng dẫn chọn size" rel="nofollow">Hướng dẫn chọn size</a></li>
            <li class="li_menu"><a  href="/chinh-sach-khach-hang-than-thiet" title="Chính sách khách hàng thân thiết" rel="nofollow">Chính sách khách hàng thân thiết</a></li>
            <li class="li_menu"><a  href="/chinh-sach-doi-tra" title="Chính sách đổi/trả" rel="nofollow">Chính sách đổi/trả</a></li>
            <li class="li_menu"><a  href="/chinh-sach-bao-mat" title="Chính sách bảo mật" rel="nofollow">Chính sách bảo mật</a></li>
            <li class="li_menu"><a  href="/chinh-sach-giao-nhan-hang-online" title="Thanh toán, giao nhận" rel="nofollow">Thanh toán, giao nhận</a></li>
            <li class="li_menu"><a  href="https://yody.vn/dong-phuc-yody" title="Chính sách Đồng phục" rel="nofollow">Chính sách Đồng phục</a></li>
            <li class="li_menu"><a  href="/chinh-sach-bao-mat-thong-tin-khach-hang-1" title="Chính sách bảo mật thông tin khách hàng" rel="nofollow">Chính sách bảo mật thông tin khách hàng</a></li>
            </ul>
        
    </div>
        <div class="footer-right">
            <p>Nhận các tin tức về thời trang tại Yody</p>
            <form class="mtSubcribeForm" name="mc-embedded-subscribe-form" target="_blank">
                <input id="email" name="EMAIL" type="email" value="" class="input_newsletter subcribe-email form-control" placeholder="Nhập email đăng ký của bạn">
                <button type="submit" id="subscribe" name="subscribe" class="btn btn-subscribe">Đăng ký</button>
                </form>
        </div>
       

</footer>
    </body>
    <script>
        var index = 0;
function changeImage (){
    var imgs = ["https://xonxen.vn/public/images/gallery/xonxen-shop-collection-new-17032022.webp","https://xonxen.vn/public/images/gallery/xonxen-shop-Outfit-for-summer-17032022.webp","https://xonxen.vn/public/images/gallery/xonxen-shop-summer-collection-18032022.webp"];
    document.getElementById('img').src = imgs[index];
    index++;
    if(index == 3){
        index=0;

    }
}
setInterval(changeImage,3000);
    </script>
        <script>
            const header = document.querySelector("header")
            window.addEventListener("scroll",function(){
        if(x>0){
            header.classList.add("sticky")
        }
        else {
            header.classList.remove("sticky")
        }
            })
    