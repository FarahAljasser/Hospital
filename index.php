<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al Alfarah Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="images/logo.png">
            <h2> مستشفى فرح للعلاج</h2>
        </div>
        <div class="book">
            <p>اهلا بكم في مستشفى فرح للشفاء باذن الله ,, للحجز موعد املأ الاستمارة ادناه . </p>
            <form action="index.php" method="post">
                <input type="text" placeholder="أدخل الاسم" name="name"/>
                <input type="text" placeholder="أدخل البريد الالكتروني" name="email"/>
                <input type="date" name="date"/>
                <input type="submit" value="احجز الان" name="send"/>
            </form>

            <?php

            // الاتصال بالسيرفر او قاعدة
            $host               = "localhost";
            $user               = "root";
            $password      = "";
            $dbName       = "hospital";
        
            $conn = mysqli_connect($host, $user, $password,$dbName);

            // ارسال المعلومات المُدخله بواسطة المريض الى قاعدة البيانات

                $pName          = $_POST['name'];
                $pEmail           = $_POST['email'];
                $pDate            = $_POST['date'];
                $pSend            = $_POST['send'];

            
                if($pSend){
                    $query = "INSERT INTO patients(name,email,date) VALUE('$pName ','$pEmail ','$pDate ')";
                    $result = mysqli_query($conn,$query);
                    echo "<p style='color:green'>" . "تم الحجز" . "</p>";
                }
                else{
                    echo "<p style='color:red'>" . "عفواً حدث خطأ ما .. حاول مجدد " . "</p>";
                }


            ?>


        </div>
    </div>
</body>
</html>