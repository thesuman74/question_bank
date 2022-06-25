<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New is Dimond</title>

    <!-- google fonts cdn link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap"
      rel="stylesheet"
    />

    <!--font awsome cdn link-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- header section starts -->
    <header>
      <a href="#" class="logo"
        ><i class="fas fa-user-graduate"></i>New Is Dimond</a
      >

      <nav class="navbar">
        <ul>
          <li><a href="#home">home</a></li>
          <li><a href="#about">about us</a></li>
          <li><a href="#course">faculty</a></li>
          
          <li><a href="#contact">contact</a></li>
        </ul>
      </nav>

      <div id="login" class="fas fa-user-circle"></div>
    </header>
    <!-- header section ends -->

    <!-- login form  -->

    <div class="login-form">
      <form action="">
        <h3>login</h3>
        <input type="email" placeholder="username" class="box" />
        <input type="password" placeholder="password" class="box" />
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">register now</a></p>
        <input type="submit" class="btn" value="login" />
        <i class="fas fa-times"></i>
      </form>
    </div>

    <!-- home section starts  -->

    <section class="home" id="home">
      <h1>education from home</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum neque
        aliquid similique error velit placeat vitae accusantium est nam magnam?
      </p>
      <a href="#"><button class="btn">get started</button></a>

      <div class="shape"></div>
    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
      <div class="image">
        <img src="images/about-img.svg" alt="" />
      </div>

      <div class="content">
        <h3>why choose us?</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam
          aperiam quaerat dolor voluptas nobis voluptates illum? Inventore
          voluptas dolore voluptates.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex delectus
          ducimus dignissimos pariatur. Amet sed distinctio earum dolorum nulla,
          in obcaecati aliquid modi quos magni ducimus culpa nobis laudantium
          incidunt.
        </p>
        <a href="#"><button class="btn">learn more</button></a>
      </div>
    </section>

    <!-- about section ends -->

    <!-- course section starts  -->

    <section class="course" id="course">
      <h1 class="heading">our popular courses</h1>

      <div class="box-container">
        <div class="box">
          <img src="images/course1.jpg" alt="" />
         
          <div class="content">
           
            <a href="faculty/software/software_sem.php" class="title">Software</a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
              beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non
              debitis!
            </p>
            
          </div>
        </div>

        <div class="box">
          <img src="images/course2.jpg" alt="" />
       
          <div class="content">
          
            <a href="#" class="title">Computer Engineering </a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
              beatae. Modi quos excepturi id quibusdam? Molestiae quis nihil non
              debitis!
            </p>
            
          </div>
        </div>
    </section>

    <!-- contact section starts  -->

    <section class="contact" id="contact">
      <h1 class="heading">contact us</h1>

      <div class="row">
        <form action="">
          <input type="text" placeholder="full name" class="box" />
          <input type="email" placeholder="your email" class="box" />
          <input type="password" placeholder="your password" class="box" />
          <input type="number" placeholder="your number" class="box" />
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            class="box address"
            placeholder="your address"
          ></textarea>
          <input type="submit" class="btn" value="send now" />
        </form>

        <div class="image">
          <img src="images/contact-img.png" alt="" />
        </div>
      </div>
    </section>

    <!-- contact section ends -->

        <?php include 'footer.php'?>;


    <!-- jquery cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link -->
    <script src="js/script.js"></script>
  </body>
</html>
