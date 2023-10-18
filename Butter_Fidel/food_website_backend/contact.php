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

<section class="contact">
<div class="row">
  <div class="fonttext">
   <br>
    <h1>หากคุณมีคำถามหรือต้องการความช่วยเหลือ โปรดกรอกแบบฟอร์มด้านล่าง เราพยายามอย่างดีที่สุดเพื่อตอบกลับภายใน 1 วันทำการ</h1>
    <h1>Phone Number : 044-9999999</h1>
    <h1>Email : FIDEL@mail.com</h1>
    <h1>Facebook : FIDEL</h1>
    <h1>Instagram : FIDEL</h1>
    <h1>Line : @FIDEL</h1>
  </div>
</div>
  </section>


<section class="contact">

   <div class="row">


      <form action="" method="post">
         <h3>ติดต่อเรา</h3>
         <input type="text" name="name" maxlength="50" class="box" placeholder="ชื่อ" required>
         <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="เบอร์มือถือ" required maxlength="10">
         <input type="email" name="email" maxlength="50" class="box" placeholder="อีเมล" required>
         <textarea name="msg" class="box" required placeholder="ระบุวัตถุประสงค์" maxlength="500" cols="30" rows="10"></textarea>
         <input type="submit" value="ส่ง" name="send" class="btn">
      </form>

   </div>

</section>




<?php include 'components/footer.php'; ?>



<script src="js/script.js"></script>

</body>
</html>