
    <main>
<div class="grid">
    <div class="box_sp">      
    <div class="containerfull_sp"> 
            <?php foreach($data['dssp'] as $sp): ?>  
        <div class="form">          
                <img src="<?=$sp['anh']?>" alt="">
                <div class="tensp"><?=$sp['tensp']?></div>
                <div class="giasp"><?= number_format($sp['giakhuyenmai'], 0, ".", ",")?>đ 
                                <del class="giasp_sale"><?=number_format($sp['gia'], 0, ".", ",")?>đ</del></div>                                                                                        
                <a href="?mod=product&act=detail&id=<?=$sp['masp']?>" class="btn btn--normal">CHI TIẾT</a>   
        </div>           
        <?php endforeach; ?>
    </div>
    </div>    
</div>
    </main>