<?php
//tuong tac voi csdl, bang categories
function login($email, $pass)
{
    global $conn;
    $sql = "SELECT * FROM user WHERE email = '" . $email . "' AND password = '" . $pass . "'";     
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch(); //chi lay 1 san pham
}

function signup($email, $password, $password_repeat) {
    global $conn;

    if ($password !== $password_repeat) {
        return "Mật khẩu và mật khẩu lặp lại không trùng khớp.";
    }

    $sql = "INSERT INTO user (`email`, `password`) VALUES (:email, :matkhau)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":matkhau", $password); // Sử dụng mật khẩu thô, không mã hóa

    if ($stmt->execute()) {
        return "Đăng ký thành công.";
    } else {
        return "Lỗi khi thực hiện đăng ký.";
    }
}




function checkMail($email)
{
    global $conn;
    $sql = "SELECT * FROM user WHERE email = '" . $email . "'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetch();
}
function get_users()
{
    global $conn;
    $sql = "SELECT * FROM user";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
}
function count_user()
{
   global $conn;
   $sql = "SELECT count(*) AS soluonguser from user";
   $stmt = $conn->prepare($sql);
   $stmt->execute();
   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   return $stmt->fetch();
}
?>