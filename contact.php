<?php
if(isset($_POST['submit'])){
    $conn = mysqli_connect("localhost", "root", "", "webpage");
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $message = mysqli_real_escape_string($conn, $_POST["customerNote"]);
    $query = "INSERT INTO `webnews`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
    mysqli_query($conn, $query);
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ca41be26d7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="contact.css">
    <title>Contact</title>
</head>
<body>
    <section id="header">
        <div class="lavender">
            <a href="#"><img src="imageslavender.jpg" alt=""></a> 
            <a href="#" >Lavender Haze</a>
          
        </div>
        
        <div>
          <ul id="navbar">
            <li><a href="Accueil.html" >Home</a></li>
            <li><a href="Boutique.html">Shop</a></li>
            <li><a href="Blog.html">About Us</a></li>
            <li><a href="contact.html" class="active"><i class="fa-regular fa-user"></i></a></li>
            
            
          </ul>
        </div>
      </section>
     
      <section id="contact_header">
        <h2> Visit us or Contact us today!</h2>
        <span> You are Welcome !</span>
      </section>
      <section id="contact-details">
        <div class="details">
            
            
            <h2>CONTACT DETAILS</h2>

        
          <li>
            <i class="fa-solid fa-map"></i>
            <p>gabes gabes gabes</p>
          </li>
          <li>
            <i class="far fa-envelope"></i>
            <p>marwan.maryam@mahmood.ensi</p>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i>
            <p>001 1023 567</p>
          </li>
          <li>
            <i class="far fa-clock"></i>
            <p>24/7 hh</p>
          </li>

        
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.334577842102!2d-95.53402622381444!3d30.198996811230412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8647304367ff4ca3%3A0x755c64bf348dbb94!2sLavender%20Haze%20Ct%2C%20The%20Woodlands%2C%20TX%2077381%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2stn!4v1682523233806!5m2!1sfr!2stn" width="750 " height="295" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

          </iframe>          
        </div>
      </div>
      
      <div class="formulaire">
          <form id="form" name="myform" method="post" action="contact.php"  onsubmit="return validateform()" >
          <h2>CONTACT US HERE</h2>
            
            <p type="Name:" form="name" ><input type="text" id="name" name="name" required="" placeholder="Write your name here.."></input></p>
            <p id="error"> A name should not contain Number !</p>
            <p type="Email:"><input type="text" id="email" name="email" required="" placeholder="Let us know how to contact you back.."></input></p>
            <p id="error1"> An email should have @ !</p>

            <p type="Phone Number:"><input type="tel" id="phone" name="phone" required=""placeholder="Let us know your phone number.."></input></p>
            <p id="error2"> No characters in phone numbers !</p>
            <p id="error3"> 8 Digits Phone Number !</p>
            <p type="Message:"><textarea rows="4" class="textmessage" id="message" required="" name="customerNote"   placeholder="what would you like to tell us"></textarea></p>
         <button id="botoon" type="submit" name="submit" value="Submit">Send Message</button>
          <div>
            <span class="fa fa-phone"></span>001 1023 567
            <span class="fa fa-envelope-o"></span> contact@company.com
          </div>
        </form>
      </div>

      </section> 
      <script src="contact.js"></script>
    
</body>
</html>