<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>



<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/PhoneMobile.png" alt="" >
            </div>
            <div class="content">
               <h3>ปัญหาเรื่องดวงจะเปลี่ยนไป<br>เพียงแค่ใช้ วอลเปเปอร์</h3>
               <a href="Customwallpaper.php" class="button">Free AI Image Generator ></a>
            </div>
         </div>

  
   </div>

   <div class="topcolumn">
   
  <div class="column">
    <p>BUTTER FIDES คือ วอลเปเปอร์หน้าจอมือถือเสริมดวงมงคลที่คุณสามารถเลือกเรื่องที่ต้องการเสริมความเฮง<br> ความมงคล ได้ตามที่คุณต้องการ เรามีมากถึง 20 เรื่องให้คุณเลือก ไม่ว่าจะเป็น การเงิน การงาน การเรียน ความรัก<br> โชคลาก สุขภาพ เป็นต้น
วอลเปอร์ของเราถูกออกแบบจากหมอดูดวงชื่อดัง ซึ่งในหนังภาพวอลเปเปอร์จะรวม 4 ศาสตร์มงคล<br> ที่วิเคราะห์ตามพื้นดวงและความต้องการให้สำเร็จ ในเรื่องขององค์ประกอบฮวงจุ้ย เรื่องไพ่ยิปซี เรื่องสี และเรื่องตัวเลข<br>
ถ้าคุณรู้สึกว่า คุณต้องการจะได้รับเรื่องราวดีๆ ในชีวิต อยากเจอ ความปัง เปิดรับความเฮง เสริมสิริมงคลให้ตัวเอง วอลเปเปอร์ของเรา<br>ก็จะเป็นอีกหนึ่งตัวช่วยที่จะทำให้คุณได้รับ พลังงานดีๆ ดึงดูดสิ่งดีๆ เข้าในมาชีวิต !!!
โปรดใช้วิจารณญาณและศึกษาหาข้อมูล<br>อย่างละเอียดก่อนสั่งจองวอลเปเปอร์ </p>
  </div>
  
  
   </div>

</section>



<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>



</body>
</html>