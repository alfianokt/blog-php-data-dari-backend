<?php if (!defined('ALF')) die('Cant render page') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh Aplikasi - Render ke variabel JS</title>
</head>

<body>
  <h1>Hai, <span id="nama"></span></h1>

  <script>
    const element = document.querySelector('#nama');

    // update nama
    // untuk string jangan lupa pakai
    // tanda kutip
    element.innerText = "<?= $nama ?>";
  </script>
</body>

</html>