<?php
$data = $_REQUEST;
if(!empty($data)){
  file_put_contents('email.txt', date("Y-m-d H:i:s") . '---' . json_encode($data) . PHP_EOL, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Thank You!</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/normalize/6.0.0/normalize.css">

    <style>
      .container {
        margin: 2em auto;
        max-width: 38.75em;
      }
    </style>

  </head>

  <body>

    <main id="content">
      <div class="container">
        <div class="thank-you">
          <p class="success">Thank you for your message. I&rsquo;ll be in touch soon.</br>感谢您的来信，IFU的小伙伴会尽快回复您!</p>
        </div>
      </div>
    </main>

  </body>

</html>
