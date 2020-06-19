<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Project Resources TeamTreehouse https://www.w3schools.com/tags/att_meta_http_equiv.asp-->
  <!-- Refresh 20 seg the page-->
  <meta http-equiv="refresh" content="20">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/styles.php">
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <!-- Import of file functions.php', use funtion printQuote()-->
      <?php require_once 'inc/functions.php'; printQuote();?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>