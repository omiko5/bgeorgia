<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- css linkebi  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- fonti  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!--  css fili  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header dasawkisi  -->

<section class="header">

   <a href="home.php" class="logo">მოგზაურობა საქართველოში</a>

   <nav class="navbar">
      <a href="home.php">მთავარი</a>
      <a href="package.php">პაკეტი</a>
      <a href="Login.php">პროფილი</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<!-- booking section starts  -->

<section class="booking">

   

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>სახელი :</span>
            <input type="text" placeholder="ჩაწერეთ თქვენი სახელი" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="ჩაწერეთ თქვენი Email" name="email">
         </div>
         <div class="inputBox">
            <span>ტ-ნომერი :</span>
            <input type="number" placeholder="ჩაწერეთ თქვენი ტ-ნომერი" name="phone">
         </div>
         <div class="inputBox">
            <span>მისამართი :</span>
            <input type="text" placeholder="ჩაწერეთ თქვენი მისამართი " name="address">
         </div>
         <div class="inputBox">
            <span>აირჩიეთ დანიშნულები ადგილი :</span>
            <input type="text" placeholder="ჩაწერეთ არჩეული ადგილი" name="location">
         </div>
         <div class="inputBox">
            <span>რაოდენობა :</span>
            <input type="number" placeholder="ჩაწერთ მგზავრების რაოდენობა" name="guests">
         </div>
         <div class="inputBox">
            <span>დაწყების დრო :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>დამთავრების დრო :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="დასტური" class="btn" name="send">
      

   </form>

</section>

<!-- swiperi js linki  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js filis linki  -->
<script src="js/script.js"></script>

</body>
</html>