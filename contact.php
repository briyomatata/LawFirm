<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us</title>
</head>
<body>

<?php

$a = $_POST['a'];
$b = $_POST['b'];
$ans = $_POST['ans'];
$spam = $a + $b;
if($ans == $spam){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];


    $to = "otienobriyo@gmail.com, $email";
    $subject = $name."\x10 ";
    $headers = "From: Otieno Matata <brianokanga8@gmail.com>";
    $email_message = '
    
    Dear '.$name.'
    Thank you very much to contact us. You contact information below:

        Name : '.$name'
        Email : '.$email'
        Number : '.$number'
        Message : '.$message'


        ';

        mail($to, $subject, $email_message, $headers);

        echo '<p><font color= "green"><strong>Message has been sent successfully.</strong></font>'
}



?>



    <div class="container">
        <?php @include 'header.php'; ?>

        <section class="contact">
            <h1 class="heading">Contact Us</h1>

            <form action="" method ="post" id="contact-form">
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

                <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
                <script>
   const constraints = {
       name: {
           presence: { allowEmpty: false }
       },
       email: {
           presence: { allowEmpty: false },
           email: true
       },
       number: {
           presence: { allowEmpty: false }
       },
       message: {
           presence: { allowEmpty: false }
       }
   };
   const form = document.getElementById('contact-form');

   form.addEventListener('submit', function (event) {
     const formValues = {
         name: form.elements.name.value,
         email: form.elements.email.value,
         number: form.elements.number.value,
         message: form.elements.message.value
     };

     const errors = validate(formValues, constraints);

     if (errors) {
       event.preventDefault();
       const errorMessage = Object
           .values(errors)
           .map(function (fieldValues) { return fieldValues.join(', ')})
           .join("\n");

       alert(errorMessage);
     }
   }, false);
</script>


if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $message = $_POST['message'];
  
   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($number)) {
       $errors[] = 'Number is empty';
   }

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }
}

                <input type="submit" value="send message" name="send" class="btn">
            </form>
        </section>

        <?php @include 'footer.php'; ?>
    </div>
</body>
</html>