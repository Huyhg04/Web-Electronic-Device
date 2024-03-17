<div class="grid">
    <div class="box_sp">
    <h1>Sản phẩm tìm kiếm</h1>
    <div class="containerfull_sp">
        <?php foreach($data['dssp'] as $sp): ?>  
        <div class="form">          
                <img src="<?=$sp['anh']?>" alt="">
                <div class="tensp"><?=$sp['tensp']?></div>
                <div class="giasp"><?= number_format($sp['giakhuyenmai'], 0, ".", ",")?>đ 
                                <del class="giasp_sale"><?=number_format($sp['gia'], 0, ".", ",")?>đ</del></div>                                                                                        
                <a href="?mod=product&act=detail&id=<?=$sp['masp']?>" class="btn_chitiet">CHI TIẾT</a>   
        </div>           
        <?php endforeach; ?>
    </div>
    <?php if (isset($errorMessage) && $_POST['']) {
                        echo $errorMessage;}
                 ?>
    </div>    
</div>