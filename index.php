<!DOCTYPE HTML>
<html lang = "th">
    <head>
        <meta charset = "utf-8">
        <title>ระบบเข้าใช้คอมพิวเตอร์ โรงเรียนเตรียมอุดมศึกษา</title>

        <link href="css/theme.css" rel="stylesheet"/>
        
<style>
    @font-face {
        font-family: Kanit;
        src: url(fonts/Kanit-Regular.ttf)
    }
</style>
    </head>

    <body>
        <p class = "header"><IMG id = "TUlogo" src = "pictures/phrakiao.png">ระบบเข้าใช้คอมพิวเตอร์</p>

        <center><div class = "login"><form method = "post" action = "landing.php" autocomplete = "off">
            <input type = "hidden" name = "username" value = root>
            <input type = "hidden" name = "password">

            <label for = "login_name">ชื่อผู้ใช้</label><br>
            <input id = "login_name" type = "text" name = "login_name"><br><br>
            
            <label for = "login_name">รหัสผ่าน</label><br>
            <input id = "login_pass" type = "password" name = "login_pass"><br>
            </div>
            <input class = "login" type = "submit" value = "> เข้าสู่ระบบ <">
        </form></center>

        <footer>
            <a class = "footerlink" href="http://www.triamudom.ac.th">โรงเรียนเตรียมอุดมศึกษา</a>
        </footer>
    </body>