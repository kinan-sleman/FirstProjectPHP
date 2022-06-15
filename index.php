<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>
    <link rel="stylesheet" href="main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-primary text-white">
  <div  class="container-fluid row">
    <div class="col">
     <a class="navbar-brand" href="#">
        <img style="width:40px; border-radius:50%; height:40px; object-fit:cover;" src="img/image5.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      </a>
    </div>
    <div class="col-auto">
      <span dir="ltr">
        <form  method="POST"><button class="btn btn-dark " type="submit" name="LOGOUT">LOGOUT</button></form>
      </span>
    </div>
    <div class="col-3">
      <span id="kinan" dir="rtl" style="font-size:33px; font-family: serif;font-style: italic;">
        kinan sleman
      </span>
  </div>
    
    
  </div>

</nav>
<?php 
    $userName = "kinansleman";
    $password = "12345";
    session_start();
    if(isset($_SESSION['userName']) && isset($_SESSION['password']) && isset($_SESSION['login'])){
        if($_SESSION['userName'] === $userName && $_SESSION['password'] === $password){
            echo "<div dir='rtl' class='alert m-5 alert-success'> أهلاً و سهلاً بك .."  . $_SESSION['userName']. "</div>";
            echo "
            <div>
                
            </div>
            <div> </div>
             ";
        }
        if(isset($_POST['LOGOUT'])){
            session_unset();
            echo "<script> location.replace('login.php'); </script>";
        }
    }
    else{
        echo "<script> location.replace('login.php'); </script>";
    }
?>
<div class="m-3">
<div class="card">
    <div class="card-body">
      <h5 dir="rtl" class="card-title">سوق الحميدية</h5>
      <p dir="rtl" class="card-text">سوق الحميدية من أشهر أسواق دمشق في سوريا، وأهم وأشهر أسواق الشرق على الإطلاق، وأكثرها جمالًا ورونقًا، وقد وصفه المؤرخون بأنه فسيح رائع البناء، ووصفوه بأنه مدينة تجارية صناعية في قلب دمشق القديمة، ووصفه الباحثون بأنه درة الأسواق وأجملها ، وهو مغطًى بالكامل بسقف من الحديد مليء بالثقوب الصغيرة التي تنفذ منها الشمس أثناء النهار ومبلط بالحجر - البازلت الأسود - ويعد ملتقى الزائرين والسياح من كافة بقاع الدنيا.</p>
    </div>
    <img src="img/image6.jpg" class="card-img-bottom" style="height:75%; object-fit:cover;" alt="...">
  </div> 
  <div class="card">
  <div class="card-body">
    <h5 dir="rtl" class="card-title">الجامع الأموي</h5>
    <p dir="rtl" class="card-text">بدأ بناء الجامع الأموي في عام 705م على يد الوليد بن عبد الملك، وقد حشد له صنّاعاً من الفرس والهنود، وأوفد إمبراطور بيزنطة مئة فنان يوناني للمشاركة في التزيين،[4] ونال قسطاً وافراً من المدح والوصف، لا سيَّما من الرحالة والمؤرخين والأدباء الذين مرّوا بدمشق عبر العصور وأطروا بشكل خاص على زينة سقف المسجد وجدرانه الفسيفسائية الملونة، والرخام المستعمل في البناء. إلا أن أغلبها طُمس بناءً على فتاوى بعدم جوزاها حتى أُعيد اكتشافها وترميمها عام 1928. وقد وصفها المؤرخ فيليب حتي بأنها "تمثل الصناعة الأهلية السورية وليس الفن اليوناني أو البيزنطي.".</p>
  </div>
  <img src="img/image7.jpg" class="card-img-bottom" alt="...">
</div>
<div class="card">
  <div class="card-body">
    <h5 dir="rtl" class="card-title">جبال الألب</h5>
    <p dir="rtl" class="card-text">جبال الألب (بالإيطالية: Alpi)‏، (بالفرنسية: Alpes)‏، و(بالألمانية: Alpen) هي سلسلة جبال في أوروبا تمتد من النمسا وسلوفينيا شرقاً، مروراً بإيطاليا وسويسرا وليختنشتاين وألمانيا وحتى فرنسا غرباً. وكلمة ألب تعني أبيض باللغة اللاتينية. أعلى قمة في سلسلة الألب هي قمة مون بلون أي القمة البيضاء الواقعة على الحدود الفرنسية-الإيطالية ويبلغ ارتفاعه 4810 متراً..</p>
  </div>
  <img src="img/image8.jpg" class="card-img-bottom" alt="...">
</div>

</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
