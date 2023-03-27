<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiperi  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- fontis linkebi  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- css failebi  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- headeri iwkeba   -->

<section class="header">

   <a href="home.php" class="logo">მოგზაურობა საქართველოში</a>

   <nav class="navbar">
      <a href="home.php">მთავარი</a>
      <a href="package.php">პაკეტი</a>
      <a href="Login.php">პროფილი</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- headeri mtavrdeba  -->

<!-- home iwkeba s  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/georgia1.jpg) no-repeat" img src="images/img-1.jpg">
            <div class="content">
               <span></span>
               <h3> ტურისტული სერვისი</h3>
               <a href="package.php" class="btn">დეტალურად</a>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- home damtavreba -->


<!-- home about iwkeba   -->

<section class="home-about">

   <div class="image">
      <img src="images/lurji.png" alt="">
   </div>

   <div class="content">
      <h3>about georgia</h3>
      <p>Georgia is a country located in the Caucasus, at the intersection of Eastern Europe and Western Asia. It is bounded by the Black Sea to the west, by Russia to the north and east, by Turkey to the southwest, by Armenia to the south, and by Azerbaijan to the southeast. The country covers an area of 69,700 square kilometres. </p>
      <a href="https://en.wikipedia.org/wiki/Georgia_(country)" class="btn"  >Read more</a>
   </div>

</section>

<!-- home about mtavrdeba -->

<!-- servisi  -->

<section class="home-packages">

   <h1 class="heading-title"> ჩვენი სერვისი </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/ks.png" alt="">
         </div>
         <div class="content">
            <h3>კაცხის სვეტი</h3>
            <p>კაცხის კირქვის ბუნებრივი სვეტი აუცილებლად უნდა მოინახულო.</p>
            <a href="Login.php" class="btn">არჩევა</a>
            <a href="https://ka.wikipedia.org/wiki/%E1%83%99%E1%83%90%E1%83%AA%E1%83%AE%E1%83%98%E1%83%A1_%E1%83%A1%E1%83%95%E1%83%94%E1%83%A2%E1%83%98"  class="btn">ინფორმაცია</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/mestia.png" alt="">
         </div>
         <div class="content">
            <h3>თეთნულდი</h3>
            <p>თეთნულდი მთის ფერდობი ზღვის დონიდან 1,600-3,165 მეტრის სიმაღლეზეა</p>
            <a href="Login.php" class="btn">არჩევა</a>
            <a href="https://ka.wikipedia.org/wiki/%E1%83%97%E1%83%94%E1%83%97%E1%83%9C%E1%83%A3%E1%83%9A%E1%83%93%E1%83%98" class="btn">ინფორმაცია</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/sairme.png" alt="">
         </div>
         <div class="content">
            <h3>საირმე</h3>
            <p>საირმეში 4 სხვადასხვა მინერალური და თერმული წყალი ამოდის</p>
            <a href="Login.php" class="btn">არჩევა</a>
            <a href="https://ka.wikipedia.org/wiki/%E1%83%A1%E1%83%90%E1%83%98%E1%83%A0%E1%83%9B%E1%83%94" class="btn">ინფორმაცია</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">ყველა პაკეტი</a> </div>

</section>

<!-- servisis dasasruli -->

<!--  linki js  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js linki  -->
<script src="js/script.js"></script>

</body>
</html>