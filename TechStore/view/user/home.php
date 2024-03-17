 <!-- banner -->
 <div class="grid">
    <div class="full-home-banners-wrapper">
        <div class="containner">
         <div class="full-home-banners">
             <div class="full-home-banner__main-banner">
                 <img  class="slide" alt="Banner"  src="assets/img/banner_iPad_Pro.jpg">
                 <img  class="slide" alt="Banner"  src="assets/img/banner_ip14.png">
                 <img  class="slide" alt="Banner"  src="assets/img/banner_iPad_Pro.jpg">
                 <div class="ctrl-icon">
                      <i class="main-banner-icon--next fa-solid fa-chevron-left" id="prev"></i>
                     <i class="main-banner-icon--prex fa-solid fa-chevron-right" id="next"></i>
                 </div>           
             </div>
             <div class="full-home-banners__right-wrapper">
                 <a href="">
                     <img alt="Banner"  src="assets/img/banner_ip14.png">
                 </a>
                 <a href="">
                     <img  alt="Banner" src="assets/img/banner_iPad_Pro.jpg">
                 </a>
             </div>
         </div>
        </div>
    </div>
</div>
<div class="grid">
     <div class="containerfull_banner">
         <a href=""><img src="assets/img/img_3banner_1.webp" alt=""></a>
        <a href=""><img src="assets/img/img_3banner_2.webp" alt=""></a>
        <a href=""><img src="assets/img/img_3banner_3.webp" alt=""></a>        
    </div>
</div> 
<div class="grid">
    <div class="box-sale">
          <div class="box-sale-item">
              <div class="time-sale">
                  <img class="time-sale-img" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/fb1088de81e42c4e538967ec12cb5caa.png" alt="">
              </div>
              <a href="">Xem tất cả<i class="main-banner-icon fa-solid fa-chevron-right"></i></a>
           </div>
      <div class="box-sale-sp">                                                                                                                         
    </div>
          </div>
          </div>
<div class="grid">
    <div class="box_dm">
        <div class="item_dm">
            <a href="?mod=product&act=list&iddm=1"><img src="assets/img/cate_1.webp" alt=""></a>
            <span>Iphone</span>
        </div>
        <div class="item_dm">
            <a href="?mod=product&act=list&iddm=2"><img src="assets/img/cate_2.webp" alt=""></a>
            <span>Iphone</span>
        </div>
        <div class="item_dm">
            <a href="?mod=product&act=list&iddm=3"><img src="assets/img/cate_3.webp" alt=""></a>
            <span>Iphone</span>
        </div>
        <div class="item_dm">
            <a href="?mod=product&act=list&iddm=4"><img src="assets/img/cate_4.webp" alt=""></a>
            <span>Iphone</span>
        </div>
        <div class="item_dm">
            <a href="?mod=product&act=list&iddm=5"><img src="assets/img/cate_5.webp" alt=""></a>
            <span>Iphone</span>
        </div>
        <div class="item_dm">
            <a href="?mod=product&act=list&iddm=6"><img src="assets/img/cate_6.webp" alt=""></a>
            <span>Iphone</span>
        </div>
    </div>
</div>  

<div class="grid">
    <div class="box_sp">
    <h1>Iphone</h1>
    <div class="containerfull_sp">
        <?php foreach($data['dssp']['iphone'] as $sp): ?>  
        <div class="form">          
                <img src="<?=$sp['anh']?>" alt="">
                <div class="tensp"><?=$sp['tensp']?></div>
                <div class="giasp"><?= number_format($sp['giakhuyenmai'], 0, ".", ",")?>đ 
                                <del class="giasp_sale"><?=number_format($sp['gia'], 0, ".", ",")?>đ</del></div>                                                                                        
                <a href="?mod=product&act=detail&id=<?=$sp['masp']?>" class="btn_chitiet">CHI TIẾT</a>   
        </div>           
        <?php endforeach; ?>
    </div>
            <button class="btn-sp"><a href="">Xem tất cả ></a></button>
    </div>    
</div>
<div class="grid">
    <div class="box_sp">
    <h1>MacBook</h1>
    <div class="containerfull_sp">
        <?php foreach($data['dssp']['samsung'] as $sp): ?>  
        <div class="form">          
                <img src="<?=$sp['anh']?>" alt="">
                <div class="tensp"><?=$sp['tensp']?></div>
                <div class="giasp"><?= number_format($sp['giakhuyenmai'], 0, ".", ",")?>đ 
                                <del class="giasp_sale"><?=number_format($sp['gia'], 0, ".", ",")?>đ</del></div>                                                                                        
                <a href="?mod=product&act=detail&id=<?=$sp['masp']?>" class="btn_chitiet">CHI TIẾT</a>   
        </div>           
        <?php endforeach; ?>
    </div>
            <button class="btn-sp"><a href="">Xem tất cả ></a></button>
    </div>    
</div>
<div class="grid">
    <div class="banner_center">
        <img class="banner_center-img" src="assets/img/banner3.jpg" alt="">
    </div>
</div>
<div class="grid">
    <div class="box_sp">
    <h1>Apple Watch</h1>
    <div class="containerfull_sp">
        <?php foreach($data['dssp']['xiaomi'] as $sp): ?>  
        <div class="form">          
                <img src="<?=$sp['anh']?>" alt="">
                <div class="tensp"><?=$sp['tensp']?></div>
                <div class="giasp"><?= number_format($sp['giakhuyenmai'], 0, ".", ",")?>đ 
                                <del class="giasp_sale"><?=number_format($sp['gia'], 0, ".", ",")?>đ</del></div>                                                                                        
                <a href="?mod=product&act=detail&id=<?=$sp['masp']?>" class="btn_chitiet">CHI TIẾT</a>   
        </div>           
        <?php endforeach; ?>
    </div>
            <button class="btn-sp"><a href="">Xem tất cả ></a></button>
    </div>    
</div>
       
         
<script src="assets/js/slideshow.js"></script>  

