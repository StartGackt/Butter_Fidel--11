<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

 
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<?php include 'components/user_header.php'; ?>

<div class="topcolumn">
  <div class="column">
    <h1>Open</h1>
    <h2>Wallpaper</h2>
    <p>A hand-drawn illustration library.</p><br>
    <div class="signin-box">
      <a href="AICustomwallpaper.php" class="button2">Make and AI Design</a>
  </div>
  </div>

  <div class="column">
    <img src="./images/blackg.png" alt="Group Guys" width="700"  /><br>
    
  </div>
</div>
</div>

<div class="topcolumn">
  <div class="column">
    <img src="./images/person1.png" alt="Group Guys" width="600"  /><br>
  </div>

  <div class="column">
    <h1>Mix & Match.</h1>
    <p>เว็บไซต์ทำการสร้างสรรค์ผลงานจาก AI โดยการใช้ข้อมูล
      ของผีเสื้อและมูเตลูมาผสมรวมกันเพื่อให้เกิดความน่าสนใจและเข้ากัน เพื่อสร้างความแตกต่าง</p><br>
      <p>*ลวยลายของผีเสื้อและมูเตลู<br>
        *เปลี่ยนวอลเปเปอร์มูเตลูปกติให้เข้ากับลวยลายของผีเสื้อเพื่อให้ รู้สึกถึงความแปลกใหม่<br>
        *จัดการใช้ AI ให้สร้างสรรค์ผลงานได้จากวันเดือนปี สี และผีเสื้อ</p><br>
  </div>
</div>
</div>

<div class="topcolumn">
  <div class="column">
    <h1>Create wallpapers with AI</h1>
    <p>คุณสามารถใช้ AI ช่วยออกแบบภาพวอลเปเปอร์ที่มีรูปแบบลวยลายของผีเสื้อ 
      ตามวันเดือนปีเกิด สี และชนิดของผีเสื้อต่างๆ 
      ที่กำหนดให้ช่วยสร้างสรรค์รูปแบบของวอลเปเปอร์ออกมาให้กับผู้ใช้บริการ</p><br>
  </div>

  <div class="column">
    <img src="./images/person2.png" alt="Group Guys" width="600"  /><br>
    
  </div>
</div>
</div>



<?php include 'components/footer.php'; ?>



<script src="js/script.js"></script>

</body>
</html>