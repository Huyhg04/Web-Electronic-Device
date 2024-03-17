<?php
    //tuong tac voi csdl, bang categories
    function lay_danhmuc($hienthi = 0){
        global $conn;
        $sql = "SELECT * FROM danhmuc";
        if($hienthi == 1){
            $sql.=" WHERE hienthi=1";
        }
        $stmt = $conn -> prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
?>