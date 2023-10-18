<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="components/loginstyles.css">

</head>
<body>
   

<?php include 'components/user_header.php'; ?>


<div class="topcolumn">
  <div class="column">
    <img src="./images/blog2.png" alt="Group Guys" width="250"  /><br>
    <p2>ความสวยของปีกบนปกผีเสื้อ</p2>
    <p>ผีเสื้อได้ชื่อว่าเป็นแมลงแสนสวย ธรรมชาสร้างสรรค์สรีระของผีเสื้อออก
      มาได้อย่างลงตัว ผีเสื้อจึงคู่ควรกับดอกไม้ซึ่งเป็นพืชที่มี
      อายุขัยสั้นเช่นกันแต่ทั้งดอกไม้และผีเสื้อ</p>
    <img src="./images/blog3.png" alt="Group Guys" width="250"  /><br>
    <p2>การเจริญเติบโต</p2>
    <p>ผีเสื้อมีการเจริญเติบโตแบบโฮโลเมตาโบลัส คือ การเจริญเติบโตที่มีการเปลี่ยนแปลง
      รูปร่างแบบสมบูรณ์ แบ่งได้เป็น 4 ระยะ</p>
  </div>

  <div class="column">
    <img src="./images/blogs1.png" alt="Group Guys" width="500"  /><br>
    <p2>แล้วคุณเชื่อมั้ยยย</p2>
    <p>“ความเชื่อ” เรื่องเหนือสิ่งธรรมชาตินั้น อยู่คู่กับคนไทยมาอย่างช้านาน ไม่ว่าเป็นในเรื่องของบาปบุญ เวณกรรม การทำของใส่หรือที่เราเรียกกันว่า “ไสยศาสตร์” สิ่งเหล่านี้มักจะมีวัตถุนิยมหรือวัตถุมงคลอย่าง “เครื่องรางของขลัง”</p>
  </div>

  <div class="column">
    <h2>คนสายมูห้ามพลาด!!</h2>
    <p2>7 เรื่องราว</p2>
    <p>ผีเสื้อจักรพรรดิที่อพยพเข้ามาอยู่ในเขตอนุรักษ์เม็กซิโกมีจำนวนลดลงอย่าง...</p>
    <p>ผีเสื้อได้ชื่อว่าเป็นแมลงแสนสวย ธรรมชาสร้างสรรค์สรีระของผีเสื้อออก มาได้อย่างลงตัว...</p>
    <p>กองทุนสัตว์ป่าโลกสากล ร่วมกับคณะกรรมการเขตอนุรักษ์แห่งชาติของเม็กซิโก หรือซีโอเอ็นเอเอ็นพี...</p>
    <p>ผีเสื้อประกอบด้วยลำตัวที่ไม่มีโครงกระดูกภายในเช่นเดียวกับแมลงอื่น ๆ แต่มีเปลือกนอกแข็งเป็นสารจำพวก...</p>
    <p>สายมูเตลู ก็คือ ชื่อเรียกของผู้คนที่มี ความเชื่อในเรื่องพลังพิเศษ ศักดิ์สิทธิ์เหนือธรรมชาติ...</p>
    <p>“8 เครื่องรางของขลัง” ที่คนไทยนับถือ 1. ช้องหมูป่า มีลักษณะเป็นเส้นขน พิเศษของหมูป่า ที่ขึ้นอยู่บริเวณ...</p>
    <p>ตั้งแต่เปิดหน้าจอโทรศัพท์มาก็เจอ ‘วอลล์เปเปอร์ไพ่เสริมดวง’ ก่อนจะ ออกจากบ้านก็ต้องเลือก...</p>
  </div>
</div>

<br>
<br>
<br>

<div class="topcolumn">
  <div class="column">
    <div class="color-info">
    <p>5 สีมาแรงในปี 2023</p><br>
    <p>1 <img src="./images/blue.png" alt="Group Guys" width="40"  /><p1> Vibrant Blue</p1></p><br>
    <p>2 <img src="./images/red.png" alt="Group Guys" width="40"  /><p1> Hot Red</p1></p><br>
    <p>3 <img src="./images/brown.png" alt="Group Guys" width="40"  /><p1> Beige & Brown</p1></p><br>
    <p>4 <img src="./images/pink.png" alt="Group Guys" width="40"  /><p1> Modern Pink</p1></p><br>
    <p>5 <img src="./images/green.png" alt="Group Guys" width="40"  /><p1> Pastel Lime</p1></p><br>
  </div>
</div>

<div class="column1"></div>
  
  <div class="column1">
    
    <h3>การตลาด<br>โดยใช้กลยุทธ์ทางการตลาด</h3>
    <p><img src="./images/yellow.png" alt="Group Guys" width="40"  /><p3> พัฒนากลยุทธ์การตลาดเนื้อหา</p3></p><br>
    <p><img src="./images/yellow.png" alt="Group Guys" width="40"  /><p3> แสวงหาโอกาสทางการตลาดร่วมกัน</p3></p><br>
    <p><img src="./images/yellow.png" alt="Group Guys" width="40"  /><p3> ลงทุนในสถานะโซเชียลมีเดียของคุณ</p3></p><br>
    <p><img src="./images/yellow.png" alt="Group Guys" width="40"  /><p3> เพิ่มการมีส่วนร่วมของชุมชน</p3></p><br>
    <p><img src="./images/yellow.png" alt="Group Guys" width="40"  /><p3> เสนอการทดลองใช้ฟรีหรือแหล่งข้อมูลฟรี</p3></p><br>
  </div>

</div>

<div class="topcolumn">
  <div class="column">

  </div>
  <div class="column">
    <img src="./images/butwall.png" alt="Group Guys" width="900"  />
  </div>
  <div class="column">

  </div>
</div>






<?php include 'components/footer.php'; ?>







<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>