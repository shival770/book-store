<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="https://www.rainbowbookstore.org/wp-content/uploads/books-768x432.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Choose our online bookstore for a vast collection of books across genres at competitive prices. Enjoy fast delivery, secure payments, and a user-friendly shopping experience. Get personalized recommendations, exclusive e-books, and audiobooks for convenient reading. Earn loyalty rewards and access special discounts. Engage with a community of readers through reviews and discussions. Our eco-friendly packaging supports sustainability. Experience hassle-free shopping with our reliable service and customer support</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>"The audiobook collection is a game-changer! I can listen to my favorite books on the go. The website is easy to use, and the quality of service is top-notch."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>James Thompson</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"I needed a rare book for my research, and I found it here at the best price. The customer service team was super helpful and responsive!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sophia Martinez</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"I bought books as gifts, and the special packaging option was amazing. My friends loved them! Fast delivery and great customer support."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Liam Anderson</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"I love the wide selection of books and the affordable prices! The delivery was quick, and the packaging was eco-friendly. Definitely my go-to bookstore!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> Priya Sharma</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"The personalized recommendations are spot-on! I discovered some amazing books I wouldn’t have found elsewhere. The checkout process was smooth and hassle-free.".</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> Rahul Verma</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"I’ve been ordering from this bookstore for months, and I’m always impressed. The discounts, loyalty rewards, and exclusive deals keep me coming back!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Yuki Nakamura</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="https://tse2.mm.bing.net/th?id=OIF.jGK5Lda2UGxICUeR9xA5Ow&pid=Api&P=0&h=180" alt="J.K. Rowling">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>J.K. Rowling</h3>
      </div>

      <div class="box">
         <img src="https://www.thenews.com.pk/assets/uploads/updates/2025-02-04/l_1279464_011511_updates.jpg" alt="Neil Gaiman ">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Neil Gaiman </h3>
      </div>

      <div class="box">
         <img src="https://i1.wp.com/about.ebooks.com/wp-content/uploads/2017/10/Kazuo-Ishiguro.jpg?fit=1085%2C812&ssl=1" alt="Kazuo Ishiguro">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Kazuo Ishiguro</h3>
      </div>

      <div class="box">
         <img src="https://worldcelebritybiography.com/wp-content/uploads/2023/09/7777777777777777.webp" alt="Chetan Bhagat ">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chetan Bhagat </h3>
      </div>

      <div class="box">
         <img src="https://images.newrepublic.com/f4cfd071e5b901acb0291beae2191ee0a5fc8af4.jpeg?auto=compress&ar=3:2&fit=crop&crop=faces&q=65&fm=jpg&ixlib=react-9.0.2&w=4742" alt="Arundhati Roy">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Arundhati Roy</h3>
      </div>

      <div class="box">
         <img src="https://www.frontlist.in/storage/uploads/2019/08/Amish-Tripathi.jpg" alt="Amish Tripathi">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Amish Tripathi</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>