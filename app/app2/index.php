<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh Aplikasi - Lewat ajax</title>
</head>

<body>
  <h1>Hai, <span id="nama"></span></h1>

  <script>
    const element = document.querySelector('#nama');

    // ambil data dengan ajax
    fetch('/app2/api.php')
      .then(r => r.json())
      .then(json => element.innerText = json.nama);
  </script>
</body>

</html>