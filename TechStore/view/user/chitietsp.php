<link rel="stylesheet" href="assets/css/chitietsp.css">
<div class="container">
<div class="grid">
<form method="POST" action="">
    <div class="product-details">
        <div class="product-left">
            <div class="product-img">
                <img src="<?=$data['sp']['anh']?>" alt="">
            </div>
            <div class="product-img-item">
                <img src="<?=$data['sp']['anh']?>" alt="">
                <img src="<?=$data['sp']['anh']?>" alt="">
                <img src="<?=$data['sp']['anh']?>" alt="">
            </div>
            <div class="product-itemthongtin">
                <div class="product-item-icon">
                    Chia sẻ: 
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
                <div class="product-item-favourite">
                    <i class="fa-regular fa-heart"></i><a href="">(Đã thích 7,5k)</a>
                </div>
            </div>
        </div>
        <div class="product-right">
            <div class="product-name"><?=$data['sp']['tensp']?></div>
            <div class="product-avaluate">
                <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                </div>
                <div class="avaluates">
                    <span class="avaluates-quality">1,5k</span>
                    <span class="avaluates-text">Đánh giá</span>
                </div>                   
                <div class="sold">
                    <span class="avaluates-quality">1,5k</span>
                    <span class="avaluates-text">Đã bán</span>
                </div>                   
            </div>
            <div class="product-price">
                <div class="price">
                     <span class="price-old"><?=$data['sp']['giakhuyenmai'] ?>VNĐ</span>
                    <span class="price-current"><?=$data['sp']['gia'] ?>VNĐ</span>
                </div>               
            </div>
            <div class="product-quality">
                <label for="">Số lượng:</label>
                <div class="prodcut-qualitys">
                <button type="button" id="increaseQuantity">+</button>
                <input type="number" name="soluong" min="1" value="1">
                <button type="button" id="decreaseQuantity">-</button>
                </div>                 
            </div>
            <div class="product-btn">  
                <input type="hidden" name="product_id" value="<?=$data['sp']['masp'] ?>">
                <input type="hidden" name="product_img" value="<?=$data['sp']['anh'] ?>">
                <input type="hidden" name="product_name" value="<?=$data['sp']['tensp'] ?>">
                <input type="hidden" name="product_price" value="<?=$data['sp']['gia'] ?>">                                 
                <input type="hidden" name="product_category" value="<?=$data['sp']['tendm'] ?>">                                 
                <input type="submit" name="addcart" value="THÊM VÀO GIỎ" class="btn btn-normal">
                <input type="submit" name="buynow" value="MUA NGAY" class="btn btn--primary">                
            </div>
               </form> 
            <div class="product-bottom">
                <div class="prodcut-bottom-items">
                    <div class="prodcut-bottom-item">
                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/6c502a2641457578b0d5f5153b53dd5d.png" alt="">
                        <div class="prodcut-bottom-item-text">7 Ngày miễn phí đổi trả</div>
                    </div>
                    <div class="prodcut-bottom-item">
                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/511aca04cc3ba9234ab0e4fcf20768a2.png" alt="">
                        <div class="prodcut-bottom-item-text">Hàng chính hãng 100%</div>
                    </div>
                    <div class="prodcut-bottom-item">
                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/16ead7e0a68c3cff9f32910e4be08122.png" alt="">
                        <div class="prodcut-bottom-item-text">Miễn phí vận chuyển</div>
                    </div>
                </div> 
            </div>
        </div>      
    </div>
 
</div>
</div>
<script src="assets/js/quantity.js"></script>
