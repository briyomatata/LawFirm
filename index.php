<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page
    </title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>








<div class="container">

<?php @include 'header.php'; ?>

<section class="home" id="home">
        <div class="home-container">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Briyoo</div>
                <div class="text-3">And I'm a <span> Lawyer</span></div>
                <a href="#">Hire Me</a>
            </div>
        </div>

        <!-- <span class="auto-typed"> </span> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            var typed = new Typed(".auto-typed"{
                string: ["Lawyer"],
                typeSpeed:100,
                backSpeed:100,
                loop: true
            })
        </script> -->

    </section>

    <!-- about section -->

    <section class="about" id="about">
        <div class="max-width">
            <h2 class="about-title">About Me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="./images/lool.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">
                        I'm a Kenyan and I'm a <span>Lawyer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        <a href="#">Practise Area</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Practise Area -->

    <section class="practice">
    <div class="p-container">
        <h1 class="p-title">
            Practise Area
        </h1>
        <div class="p-row">
            <div class="p-card">
                <div class="card-header">
                    <h2>Law Section</h2>
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo obcaecati similique omnis delectus quo? 
                
                    </p>
                    <a href="" class="button">Read More</a>
                </div>
            </div>

            <div class="p-card">
                <div class="card-header">
                    <h2>Law Section</h2>
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo obcaecati similique omnis delectus quo? 
                    </p>
                    <a href="" class="button">Read More</a>
                </div>
            </div>

            <div class="p-card">
                <div class="card-header">
                    <h2>Law Section</h2>
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo obcaecati similique omnis delectus quo? 
                    </p>
                    <a href="" class="button">Read More</a>
                </div>
            </div>

            <div class="p-card">
                <div class="card-header">
                    <h2>Law Section</h2>
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo obcaecati similique omnis delectus quo? 
                    </p>
                    <a href="" class="button">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- contact Us -->

    <section class="contact">
            <h1 class="heading">Contact Me</h1>

            <form action="" method ="post">
                <div class="flex">
                    <div class="inputBox">
                        <span>Your name</span>
                        <input type="text" placeholder = "enter your name" name= "name" required>
                    </div>

                    <div class="inputBox">
                        <span>Your email</span>
                        <input type="email" placeholder = "enter your email" name= "email" required>
                    </div>

                    <div class="inputBox">
                        <span>Your number</span>
                        <input type="number" placeholder = "enter your number" name= "number" required>
                    </div>

                    <div class="inputBox">
                        <span>Your message</span>
                        <textarea name="message" placeholder = "enter your message"  required cols="30" rows="10"></textarea>
                    </div>
                </div>

                <input type="submit" value="send message" name="send" class="btn">
            </form>
        </section>

    <?php @include 'footer.php'; ?>
</div>

<!-- custom js -->
<script src="index.js"></script>
    
</body>
</html>