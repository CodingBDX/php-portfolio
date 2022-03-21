<?php
  $conn = mysqli_connect('localhost', 'admin', 'admin', 'contact_db') or die('connection failed');
  if(isset($_POST['send'])){
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$number = mysqli_real_escape_string($conn, $_POST['number']);
$msg = mysqli_real_escape_string($conn, $_POST['message']);
$select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
if(mysqli_num_rows($select_message) > 0){
  $message[] = 'i receive message';
}else {
  mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUE('$name', '$email', '$number', '$msg') ") or die('query failed');
  $message[] = 'message send success';

}
  };
?>

<!DOCTYPE html>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<?php
if(isset($$message)){
  foreach($$message as $$message){
    echo '
<div class="message">
  <span>'.$messagew.'</span>
  <i class="fas fa-times" onclick="this.parentElement.remove"></i>
</div>';
  }
}
?>
  <!-- header section start  -->
<header class="header">
  <div id="menu-btn" class="fas fa-bars"></div>
  <a href="#" class="logo">Portfolio</a>
  <nav class="navbar">
    <a href="#home" class="active">home</a>
    <a href="#about">about</a>
    <a href="#services">service</a>
    <a href="#portfolio">portfolio</a>
    <a href="#contact">contact</a>


  </nav>

  <div class="follow">
    <a href="" class="fab fa-facebook"></a>
    <a href="" class="fab fa-twitter"></a>
    <a href="" class="fab fa-linkedin"></a>
    <a href="" class="fab fa-github"></a>

  </div>
</header>
  <!-- header section close  -->
<!-- general section begin -->
<section id="home" class="home">
  <div class="image">
    <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80" alt="" srcset="">
  </div>
  <div class="content" data-aos="fade-right data-aos-offset="300"
     data-aos-easing="ease-in-sine">
    <h3>hey i'm codingbdx from france</h3>
    <span>i try to learn coding with all language</span>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, sunt illum blanditiis repudiandae nobis ab hic facilis deleniti reprehenderit nisi ipsum quasi corporis totam animi inventore rerum. .</p>
    <a href="#about" class="btn">#about me#</a>
  </div>
</section>
<!-- general section end -->

<!-- about section begin -->
<section id="about" class="about">
  <h1 class="heading" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500"><span>biography</span></h1>
  <div class="biography">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A consectetur odio quibusdam, nemo quisquam natus minima quae id ullam sed necessitatibus facilis perspiciatis impedit, ut delectus et voluptatum dolorem veniam.</p>
    <div class="bio">
      <h3><span>name :</span>lolo</h3>
      <h3><span>email :</span>lolo@lolo.com</h3>
      <h3><span>adress :</span>bla rue street, austria</h3>
      <h3><span>phone :</span>+08975465443</h3>
      <h3><span>experiences :</span>+ 20 years</h3>



    </div>
    <a href="#" class="btn">Download CV </a>
  </div>

  <div class="skills">
  <h1 class="heading" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500"><span>skills</span></h1>
  <div class="progress">
    <div class="bar" data-aos="fade-up-right"><h3><span>HTML</span><span>95%</span></h3></div>
    <div class="bar" data-aos="fade-up-left"><h3><span>CSS</span><span>95%</span></h3></div>
    <div class="bar" data-aos="fade-up-right"><h3><span>PHP</span><span>55%</span></h3></div>
    <div class="bar" data-aos="fade-up-left"><h3><span>Javascript</span><span>75%</span></h3></div>

  </div>

  </div>

  <div class="edu-exp">
  <h1 class="heading" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500"><span>education & experience</span></h1>
  <div class="row">
    <div class="box-container" data-aos="flip-left">
      <h3 class="title">education</h3>
      <div class="box">
        <span>
          (2019 - 2020)
        </span>
        <h3>jack et haricot</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nam deserunt doloribus fugit esse, quasi fugiat nesciunt, totam magnam explicabo aperiam ipsum ut!</p>
      </div>
      <div class="box">
        <span>
          (2019 - 2020)
        </span>
        <h3>jack et haricot</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nam deserunt doloribus fugit esse, quasi fugiat nesciunt, totam magnam explicabo aperiam ipsum ut!</p>
      </div>
      <div class="box">
        <span>
          (2019 - 2020)
        </span>
        <h3>jack et haricot</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nam deserunt doloribus fugit esse, quasi fugiat nesciunt, totam magnam explicabo aperiam ipsum ut!</p>
      </div>
      <div class="box">
        <span>
          (2019 - 2020)
        </span>
        <h3>jack et haricot</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nam deserunt doloribus fugit esse, quasi fugiat nesciunt, totam magnam explicabo aperiam ipsum ut!</p>
      </div>
    </div>


    <div class="box-container" data-aos="flip-right">
      <h3 class="title" >experience</h3>
      <div class="box">
        <span>
          (2019 - 2020)
        </span>
        <h3>jack et haricot</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nam deserunt doloribus fugit esse, quasi fugiat nesciunt, totam magnam explicabo aperiam ipsum ut!</p>
      </div>
      <div class="box">
        <span>
          (2019 - 2020)
        </span>
        <h3>jack et haricot</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nam deserunt doloribus fugit esse, quasi fugiat nesciunt, totam magnam explicabo aperiam ipsum ut!</p>
      </div>
      <div class="box">
        <span>
          (2019 - 2020)
        </span>
        <h3>jack et haricot</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nam deserunt doloribus fugit esse, quasi fugiat nesciunt, totam magnam explicabo aperiam ipsum ut!</p>
      </div>
      <div class="box">
        <span>
          (2019 - 2020)
        </span>
        <h3>jack et haricot</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nam deserunt doloribus fugit esse, quasi fugiat nesciunt, totam magnam explicabo aperiam ipsum ut!</p>
      </div>
    </div>
  </div>


  </div>
</section>
<!-- about section end -->

<!-- service section start -->
<section id="services" class="services">

  <h1 class="heading" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500"><span>services</span></h1>
  <div class="box-container">

    <div class="box">
      <i class="fas fa-code"></i>
      <h3>web developer</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem vero voluptatum quod aut, earum nam doloribus autem minus at eius repellat. Illum, assumenda excepturi mollitia doloribus enim nam commodi quo!</p>
    </div>
    <div class="box">
      <i class="fas fa-paint-brush"></i>
      <h3>web design</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem vero voluptatum quod aut, earum nam doloribus autem minus at eius repellat. Illum, assumenda excepturi mollitia doloribus enim nam commodi quo!</p>
    </div>

    <div class="box">
      <i class="fab fa-bootstrap"></i>
      <h3>use bootstrap</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem vero voluptatum quod aut, earum nam doloribus autem minus at eius repellat. Illum, assumenda excepturi mollitia doloribus enim nam commodi quo!</p>
    </div>

    <div class="box">
      <i class="fas fa-chart-line"></i>
      <h3>use chart delivery</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem vero voluptatum quod aut, earum nam doloribus autem minus at eius repellat. Illum, assumenda excepturi mollitia doloribus enim nam commodi quo!</p>
    </div>

    <div class="box">
      <i class="fas fa-bullhorn"></i>
      <h3>digital marketing</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem vero voluptatum quod aut, earum nam doloribus autem minus at eius repellat. Illum, assumenda excepturi mollitia doloribus enim nam commodi quo!</p>
    </div>
  </div>
</section>
<section id="portfolio" class="portfolio">
<h1 class="heading" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500"><span>portfolio</span></h1>

<div class="box-container">
  <div class="box" data-aos="zoom-in">
    <img src="https://cdn.dribbble.com/users/4684322/screenshots/17772465/media/1961d7b6011c3348285ba6a56c60fd66.png" alt="">
    <h3>Create with react+javascript+crud</h3>
    <span>(2022)</span>
  </div>

   <div class="box" data-aos="zoom-in">
    <img src="https://cdn.dribbble.com/userupload/2413490/file/original-38f207659d8da54501846fea7faa21ef.jpg?filters:format(webp)?filters%3Aformat%28webp%29=&compress=1&resize=1600x1200" alt="">
    <h3>web developer</h3>
    <span>(2022)</span>
  </div>

   <div class="box" data-aos="zoom-in">
    <img src="https://cdn.dribbble.com/users/3840995/screenshots/17765874/media/d4656760ca9823f835675839b60aa4a5.jpg" alt="">
    <h3>web developer</h3>
    <span> ( 2022 ) </span>
  </div>

   <div class="box" data-aos="zoom-in">
    <img src="https://cdn.dribbble.com/userupload/2413726/file/original-6b7d31fd40ad733d4963d0ee52ba630d.jpg?filters:format(webp)?filters%3Aformat%28webp%29=&compress=1&resize=1600x1200" alt="">
    <h3>web developer</h3>
    <span>(2022)</span>
  </div>
</div>
</section>
<!-- service section end -->

<!-- contact section start -->
<section id="contact" class="contact">
  <h1 class="heading"><span>contact</span></h1>
  <form action="" method="post">
    <div class="flex">
 
      <input type="name" placeholder="enter your name" name="name" class="box" required>


      <input required type="email" placeholder="enter your email" name="email" class="box">


    </div>
    <label for="">your number</label>
      <input required min="0" type="number" placeholder="enter your number" name="number" class="box">
      <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
<input type="submit" value="send message" name="send" class="btn">
  </form>
</section>

<div class="credit">&copy;copyright <?php echo date('Y:m'); ?></div>
<!-- contact section end -->
  <script src="script.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>