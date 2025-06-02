<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .dripped { font-family: 'Signatura Monoline';
    font-size: 24px;}

   

    </style>
    <form action="" method="post">
        Họ và tên: <input type="text" name="fullname">
        <br>
        Password: <input type="Mật khẩu" name="password">
        <br>
        Đăng kí môn học:
        <input type="checkbox" name="mon" value="HTML"> HTML
        <input type="checkbox" name="mon" value="CSS"> CSS
        <BR>
        Giới tính:
        <input type="radio" name="1" value="Nam"> Nam
        <input type="radio" name="1" value="Nữ"> Nữ
        <br>
        <div class="nectar-responsive-text font_size_desktop_85px font_size_phone_45px nectar-link-underline-effect" style="color: #0a0a0a;"><p class="dripped" style="line-height: 1.2;text-align: left">Get dripped &amp; chill!</p>

         <p class="dripped" style="line-height: 1.2;text-align: left">Thành phố:</p>
        </div>
        <select name="language" required>
            <option value="" disabled selected>-- Chọn thành phố --</option>
            <option value="Hà Nội">Hà Nội</option>
            <option value="Hải Phòng">Hải Phòng</option>
            <option value="Thái Bình">Thái Bình</option>
            <option value="Hưng Yên">Hưng Yên</option>
            <option value="TP.Hồ Chí Minh">TP.Hồ Chí Minh</option>
        </select>
        <br>
        Tin Nhắn:
        <br>
        <textarea name="message" ></textarea>
        <br>
        <input type="submit" name="submit" value="Gửi"  >
        </form>
    <?php
    if (isset($_POST["fullname"]) && isset($_POST["password"])) {
        echo "Họ và tên: " . $_POST["fullname"];
        echo "<br>";
        echo "Mật khẩu: " . $_POST["password"];
        echo "<br>";
    } else {
        echo "Bạn chưa đăng nhập";
    }
    if (isset($_POST["mon"])) {
        echo "Bạn đã đăng kí môn học: ".$_POST["mon"]; ;

        echo "<br>";
    } else {
        echo "Bạn chưa đăng kí môn học";
        echo "<br>";
    }
     if (isset($_POST["1"])) {
        echo "Giới tính bạn chọn là: " . $_POST["1"];
        echo "<br>";
    } else {
        echo "Bạn chưa chọn giới tính";
        echo "<br>";
    }
    if (isset($_POST["language"])) {
        echo "Thành phố bạn chọn là: " . $_POST["language"];
        echo "<br>";
    } else {
        echo "Bạn chưa chọn thành phố";
        echo "<br>";
    }
    if (isset($_POST["message"])) {
        echo "Tin nhắn của bạn là: " . $_POST["message"];
        echo "<br>";
    } else {
        echo "Bạn chưa nhập tin nhắn";
        echo "<br>";
    }
    ?>
    <h1>Bài 2</h1>
    <form action="" method="post">
        <H3>Danh sách cách môn Học</H3>
            <Input type="checkbox" name="monhoc" value="Thiết kế Web">Thiết kế Web</Input><br>
            <Input type="checkbox" name="monhoc" value="Lập trình Web">Lập trình Web</Input><br>
            <Input type="checkbox" name="monhoc" value="Lập trình Windows">Lập trình Windows</Input><br>
            <Input type="checkbox" name="monhoc" value="Thực hành Lập trình Windows">Thực hành Lập trình Windows</Input><br>
            <Input type="checkbox" name="monhoc" value="Lập trình Android">Lập trình Android</Input><br>
        <H3>Ca Học</H3>
        <input type="radio" name="cahoc" value="Ca sáng"> Ca sáng <br>
        <input type="radio" name="cahoc" value="Ca Chiều"> Ca chiều <br>
        <input type="radio" name="cahoc" value="Ca tối"> Ca tối <br>
    </form>
</body>
</html>