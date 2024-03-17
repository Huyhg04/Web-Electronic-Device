<div class="nav-menu">
        <div class="grid">
             <ul class="nav-menu-item">  
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="index.php">Giới thiệu</a></li>
            <?php foreach($data['dsdm'] as $dm): ?>
            <li><a href="?mod=product&act=list&iddm=<?=$dm['madm']?>"><?=$dm['tendm']?></a></li>                       
            <?php endforeach; ?>
            <li><a href="">Tin tức</a></li>
            <li><a href="">Liên hệ</a></li>
            </ul>
        </div>
    </div>
<script src="assets/js/dropdown.js"></script>   