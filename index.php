<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Họ và tên: <input type="text" name="fullname">
        <br>
        Mật khẩu: <input type="Mật khẩu" name="password">
        <br>

        <input type="checkbox" name="remember" value="Ghi nhớ đăng nhập"> Ghi nhớ đăng nhập

        <select name="language" required>
            <option value="" disabled selected>-- Chọn ngôn ngữ --</option>
            <option value="Tiếng Việt">Tiếng Việt</option>
            <option value="English">English</option>
            <option value="Tiếng Trung">Tiếng Trung</option>
            <option value="Tiếng Nhật">Tiếng Nhật</option>
        </select>
        <!-- giới tính -->
        <br>
        Giới tính:
        <input type="radio" name="1" value="Nam"> Nam
        <input type="radio" name="1" value="Nữ"> Nữ
        <input type="radio" name="  " value="Khác"> Khác
        <br>
        Nhập số tuổi: <input type="number" name="age" min="1" max="100">
        <input type="submit" name="submit" value="Đăng Nhập">
        <br>
    </form>
    <?php
    if (isset($_POST["fullname"]) && isset($_POST["password"])) {

        echo "Họ và tên:" . $_POST["fullname"];
        echo "<br>";
        echo "Mật khảu: " . $_POST["password"];
        echo "<br>";
        echo "Họ và tê và mật khẩu:" . $_POST["fullname"] . "/" . $_POST["password"];
        echo "<br>";
    } else {
        echo "Bạn chưa đăng nhập";
    }
    if (isset($_POST["remember"])) {
        echo "Bạn đã chọn ghi nhớ đăng nhập";
    } else {
        echo "Bạn không chọn ghi nhớ đăng nhập";
    }
    echo "<br>";
    if (isset($_POST["language"])) {
        echo "Ngôn ngữ bạn chọn là: " . $_POST["language"];
    } else {
        echo "Bạn chưa chọn ngôn ngữ";
    }
    echo "<br>";
    if (isset($_POST["1"])) {
        echo "Giới tính bạn chọn là: " . $_POST["1"];
    } else {
        echo "Bạn chưa chọn giới tính";
    }
    echo "<br>";
    if (isset($_POST["age"])) {
        echo "Tuổi của bạn là: " . $_POST["age"];
    } else {
        echo "Bạn chưa nhập tuổi";

    }
    ?>
    <br>
    <?php
    empty($_POST["fullname"]) ? $fullname = "Bạn chưa nhập họ và tên" : $fullname = $_POST["fullname"];
    empty($_POST["password"]) ? $password = "Bạn chưa nhập mật khẩu" : $password = $_POST["password"];
    echo "Họ và tên: " . $fullname . "<br>";
    echo "Mật khẩu: " . $password . "<br>";
    if (isset($_POST["remember"])) {
        echo "Bạn đã chọn ghi nhớ đăng nhập";
    } else {
        echo "Bạn không chọn ghi nhớ đăng nhập";
    }
    echo "<br>";
    if (isset($_POST["language"])) {
        echo "Ngôn ngữ bạn chọn là: " . $_POST["language"];
    } else {
        echo "Bạn chưa chọn ngôn ngữ";
    }
    echo "<br>";
    if (isset($_POST["1"])) {
        echo "Giới tính bạn chọn là: " . $_POST["1"];
    } else {
        echo "Bạn chưa chọn giới tính";
    }
    echo "<br>";
    if (isset($_POST["age"])) {
        echo "Tuổi của bạn là: " . $_POST["age"];
    } else {
        echo "Bạn chưa nhập tuổi";
    }

    ?>

</body>

</html>