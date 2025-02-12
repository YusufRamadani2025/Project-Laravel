
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      outline: none;
      border: none;
      text-decoration: none;
      text-transform: capitalize;
      transition: .2s linear;
    }

    .row{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .text-judul{
        text-align: center;
        font-weight: bold;
    }
    .button-input{
      display: flex;
      justify-content: center;
    }
    .text-success{
      font-weight: bold;
      text-align: center;
    }

  </style>

  <body>
    <div class="container-fluid">
        
      @yield("content")

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
