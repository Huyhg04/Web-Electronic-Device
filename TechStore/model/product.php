<?php
function get_products($madm = 0, $start = 0, $limit = 0)
{
   global $conn;
   $sql = "SELECT * FROM products p JOIN danhmuc d ON p.madm = d.madm";
   if ($madm != 0) {
      $sql .= " WHERE p.madm= " . $madm;
   }
   if ($limit != 0) {
      $sql .= " LIMIT " . $start . "," . $limit;
   }
   $stmt = $conn->prepare($sql);
   $stmt->execute();
   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   return $stmt->fetchAll();
}

function search_products($keyword)
{
   global $conn;
   $sql = "SELECT * FROM products p JOIN danhmuc d ON p.madm = d.madm WHERE p.tensp LIKE :keyword";
   $stmt = $conn->prepare($sql);
   $stmt->bindParam(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);
   $stmt->execute();
   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   $results = $stmt->fetchAll();

   if (count($results) === 0) {
       return "Không có sản phẩm phù hợp với từ khóa tìm kiếm.";
   } else {
       return $results;
   }
}


function get_product($id)
{
   global $conn;
   $sql = "SELECT p.*, d.tendm FROM products p JOIN danhmuc d 
      ON p.madm = d.madm WHERE p.masp =$id";

   $stmt = $conn->prepare($sql);
   $stmt->execute();
   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   return $stmt->fetch(); //chi lay 1 san pham
}

function count_products()
{
   global $conn;
   $sql = "SELECT count(*) AS soluong from products";
   $stmt = $conn->prepare($sql);
   $stmt->execute();
   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   return $stmt->fetch(); //chi lay 1 san pham
}

function add_product($tensp, $gia, $giakhuyenmai, $mota, $targetFile, $madm)
{
    global $conn;

    // Kiểm tra xem tệp ảnh đã tải lên
    if (isset($_FILES["anh"]) && $_FILES["anh"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = 'assets/img/'; // Đường dẫn thư mục lưu trữ ảnh
        $targetFile = $uploadDir . basename($_FILES["anh"]["name"]);

        // Kiểm tra file ảnh
        $check = getimagesize($_FILES["anh"]["tmp_name"]);
        if ($check === false) {
            return "Ảnh không hợp lệ.";
        }

        // Di chuyển hình ảnh đã tải lên vào thư mục
        if (move_uploaded_file($_FILES["anh"]["tmp_name"], $targetFile)) {
            // Sử dụng PDO để thực hiện truy vấn
            $sql = "INSERT INTO products (tensp, gia, giakhuyenmai, mota, anh, madm) 
                    VALUES (:tensp, :gia, :giakhuyenmai, :mota, :anh, :madm)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":tensp", $tensp);
            $stmt->bindParam(":gia", $gia);
            $stmt->bindParam(":giakhuyenmai", $giakhuyenmai);
            // $stmt->bindParam(":soluong", $soluong);
            $stmt->bindParam(":mota", $mota);
            $stmt->bindParam(":anh", $targetFile);
            $stmt->bindParam(":madm", $madm);

            if ($stmt->execute()) {
                return "Thêm sản phẩm thành công.";
            } else {
                return "Lỗi: " . implode(", ", $stmt->errorInfo());
            }
        } else {
            return "Lỗi khi tải lên ảnh.";
        }
    } else {
        return "Không có tệp ảnh hoặc có lỗi khi tải lên.";
    }
}

function update_product($masp, $tensp, $gia, $giakhuyenmai, $mota , $anh, $madm)
{
    // Kiểm tra xem tệp ảnh đã tải lên
    if (isset($_FILES["anh"]) && $_FILES["anh"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = 'assets/img/'; // Đường dẫn thư mục lưu trữ ảnh
        $targetFile = $uploadDir . basename($_FILES["anh"]["name"]);

        // Kiểm tra file ảnh
        $check = getimagesize($_FILES["anh"]["tmp_name"]);
        if ($check === false) {
            return "Ảnh không hợp lệ.";
        }

        // Di chuyển hình ảnh đã tải lên vào thư mục
        if (move_uploaded_file($_FILES["anh"]["tmp_name"], $targetFile)) {
            // Sử dụng PDO để thực hiện truy vấn
            global $conn;
            $sql = "UPDATE products SET tensp = :tensp, gia = :gia, giakhuyenmai = :giakhuyenmai, mota = :mota, anh = :anh, madm = :madm WHERE masp = :masp";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":masp", $masp);
            $stmt->bindParam(":tensp", $tensp);
            $stmt->bindParam(":gia", $gia);
            $stmt->bindParam(":giakhuyenmai", $giakhuyenmai);
            $stmt->bindParam(":mota", $mota);
            $stmt->bindParam(":anh", $targetFile);
            $stmt->bindParam(":madm", $madm);

            if ($stmt->execute()) {
                return "Cập nhật sản phẩm thành công.";
            } else {
                return "Lỗi: " . implode(", ", $stmt->errorInfo());
            }
        } else {
            return "Lỗi khi tải lên ảnh.";
        }
    } else {
        return "Không có tệp ảnh hoặc có lỗi khi tải lên.";
    }
}
function delete_product($id)
{
   global $conn;
   $sql = "DELETE FROM products WHERE masp=:id";
   // $sql = "SELECT * FROM user WHERE email =:email and matkhau =:pass ";      
   $stmt = $conn->prepare($sql);
   $stmt->bindParam(":id", $id);
   // $stmt->execute();
   return $stmt->execute();
   // $stmt->setFetchMode(PDO::FETCH_ASSOC);
   // return $stmt->fetch(); //chi lay 1 san pham
}

?>