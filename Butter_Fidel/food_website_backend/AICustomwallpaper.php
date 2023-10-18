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

   <style>   
        .container {
            text-align: center;
            font-size: 16px;
        }
        
        .classform {
            border-radius: 2px;
            border-color: black;
            border-width: 1px;
            border-style: solid;
        }

        #downloadButton {
            padding: 8px 18px;
            font-size: 16px;
        }
    </style>

</head>
<body>
   

<?php include 'components/user_header.php'; ?>


<div class="topcolumn">

       <div class="container">

        <br><br><br><br><br><br>
        <br><br><br><br>

    <form class="classform">
        <label for="numbers">Choose a day : </label>
        <select name="numbers" id="numbers">
            <option value="1">Monday</option>
            <option value="2">Tuesday</option>
            <option value="3">Wednesday</option>
            <option value="4">Thursday</option>
            <option value="5">Friday</option>
            <option value="6">Saturday</option>
            <option value="7">Sunday</option>
        </select>

            <button id="downloadButton">Download</button>     

    </form>
    
    <br><br>

    <img id="downloadedImage" src="" alt="Downloaded Image">

         <br><br><br><br><br><br>
         <br><br><br><br>

</div>


    <script>
        document.getElementById('downloadButton').addEventListener('click', function() {
            
            var selectedNumber = document.getElementById('numbers').value;
            
            var imageUrl = 'images/' + selectedNumber + '.png'; 

            document.getElementById('downloadedImage').src = imageUrl;

            var imageWindow = window.open(imageUrl, '_blank');
            imageWindow.focus();
        });
    </script>


</div>


<?php include 'components/footer.php'; ?>



<script src="js/script.js"></script>

</body>
</html>