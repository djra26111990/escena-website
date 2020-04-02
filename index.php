<?php

if (!isset($_POST['submit'])) {

// form was submmitted
//$thankYou="";
}

else

{

$recipient="djra26111990@gmail.com";
$subject="Mensaje de comentario recibido";
$sender=$_POST["sender"];
$senderEmail=$_POST["senderEmail"];
$phone=$_POST["phone"];
$message=$_POST["message"];

$mailBody="Nombre: $sender\nEmail: $senderEmail\nTélefono: $phone\n$message";
mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

//$thankYou="<p>Gracias! su mensaje ha sido enviado!.</p>";

}
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles.css">
  <title>Escena compañia de arte y teatro</title>
  </head>
  <body>
    <section class="section section-top">
      <img src="/img/#" alt="Logo de escena">
      <div>
        <h1>Escena</h1>
        <h2>¿Quiénes Somos?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique eget est ut facilisis. Nulla quis ligula purus. Etiam dictum rhoncus lorem, eu egestas libero accumsan quis. Donec posuere bibendum nisi a rhoncus.</p>   
      </div>
    </section>
    <section class="section section-play-meet">
    <div class="row">    
      <div class="columns">
        <iframe width="360" height="275" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
      </div>
      <div class="columns">
        <h1>Conoce</h1>
        <h3>Nullam sit amet leo cursus, rhoncus justo vitae, mollis diam. Proin gravida justo eu aliquet aliquet.</h3>
      </div>
    </div>
    </section>
    <section class="section section-clases">
      <h1>Clases</h1>
      <div class ="row">
      <div class="columns">
        <h2>Niños</h2>
        <i class="fas fa-child fa-3x"></i>
        <p>Donec id lorem a justo ultricies malesuada. Aenean commodo sit amet metus gravida molestie. Cras nec nulla rhoncus, lacinia leo at, hendrerit odio.</p>
      </div>
      <div class="columns">
        <h2>Jóvenes</h2>
        <i class="fas fa-user fa-3x"></i>
        <p>Donec id lorem a justo ultricies malesuada. Aenean commodo sit amet metus gravida molestie. Cras nec nulla rhoncus, lacinia leo at, hendrerit odio.</p>
      </div>
      </div>
    </section>
    <section class="section section-programa">
      <div>
        <h1>Programa Continuo</h1>
        <p>Nam a feugiat nulla, et interdum leo. Ut imperdiet consequat justo, sed ultrices dui ullamcorper eu. Ut fermentum vulputate libero, sed fringilla mi dapibus eu. In hac habitasse platea dictumst.</p>     
      </div>
    </section>
    <section class="section section-contacto">
    <h1>Contáctanos</h1>
   
    
    <form method="post" action="index.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input class="btn" type="submit" name="submit">
    </form>
    <div class="ui one column grid container">
  <div class="column">
    <div class="ui segment">
      <div class="ui error message hidden"></div>
      <div class="ui success message hidden">
        <div class="header">¡LISTO!</div>
        <p class="header">¡Tu comentario ha sido enviado!</p>
      </div>
      <form method="post" id="form" class="ui form" action="index.php">
        <div class="field">
          <label>Nombre y Apellido</label>
          <input name="sender" data-validation="required">
        <div class="field">
          <label>Email</label>
          <input type="email" name="senderEmail" data-validation="required email">
        </div>
        <div class="field">
          <label>Télefono</label>
          <input name="phone" data-validation="required phone">
        </div>
        <div class="field">
            <label>Mensaje</label>
            <textarea name="message" data-validation=""></textarea>
        </div>

        <input class="btn" type="submit" name="submit">
      </form>
    </div>
  </div>
</div>
    </section>
    <section class="section footer">
        <div class="div-footer">
        <h1>Síguenos: </h1>
        <ul>
            <li><a href="#"><i class="fab fa-facebook-square fa-3x"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram fa-3x"></i></a></li>
        </ul>
        </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js" integrity="sha256-+xf9aJnHocnmrigq2hIDJGBSAnJdF5NH+Ooe5J2PHiI=" crossorigin="anonymous"></script>
    <script src="/js/index.js"></script>
    <script>
        //iniciamos rellax
        var rellax = new Rellax('.rellax');
    </script>
  </body>
</html>