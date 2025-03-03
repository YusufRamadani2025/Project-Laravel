
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <style>
    /* *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      outline: none;
      border: none;
      text-decoration: none;
      text-transform: capitalize;
      transition: .2s linear;
    } */

    body {
      background: #2DAA9E;
    }

    /* From Uiverse.io by Spacious74 */ 
    .container {
      border: solid 1px #8d8d8d;
      padding: 20px;
      border-radius: 20px;
      background-color: #77E4C8;
      margin-top: 10px;
    }

    .container .heading {
      font-size: 1.3rem;
      margin-bottom: 20px;
      font-weight: bolder;
    }

    .form {
      max-width: 300px;
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-bottom: 10px;
    }

    .form .btn-container {
      width: 100%;
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .form .btn {
      padding: 5px 15px;
      font-size: 1rem;
      text-transform: uppercase;
      letter-spacing: 3px;
      border-radius: 10px;
      border: solid 1px #1034aa;
      border-bottom: solid 1px #90c2ff;
      background: linear-gradient(135deg, #0034de, #006eff);
      color: #fff;
      font-weight: bolder;
      transition: all 0.2s ease;
      box-shadow: 0px 2px 3px #000d3848, inset 0px 4px 5px #0070f0,
        inset 0px -4px 5px #002cbb;
    }

    .form .btn:active {
      box-shadow: inset 0px 4px 5px #0070f0, inset 0px -4px 5px #002cbb;
      transform: scale(0.995);
    }

    .input-field {
      position: relative;
    }

    .input-field label {
      position: absolute;
      color: #8d8d8d;
      pointer-events: none;
      background-color: transparent;
      left: 15px;
      transform: translateY(0.6rem);
      transition: all 0.3s ease;
    }

    .input-field input {
      padding: 10px 15px;
      font-size: 1rem;
      border-radius: 8px;
      border: solid 1px #8d8d8d;
      letter-spacing: 1px;
      width: 100%;
    }

    .input-field input:focus,
    .input-field input:valid {
      outline: none;
      border: solid 1px #2DAA9E;
    }

    .input-field input:focus ~ label,
    .input-field input:valid ~ label {
      transform: translateY(-51%) translateX(-10px) scale(0.8);
      background-color: #77E4C8;
      padding: 0px 5px;
      color: #000;
      font-weight: bold;
      letter-spacing: 1px;
      border: none;
      border-radius: 100px;
    }

    .form .passicon {
      cursor: pointer;
      font-size: 1.3rem;
      position: absolute;
      top: 6px;
      right: 8px;
    }

    .form .close {
      display: none;
    }

    .text-success{
      font-weight: bold;
      text-align: center;
    }

    th{
      text-align: center;
      color: black;
      font-size: 20px;
    }

    td{
      text-align: center;
      color: black;
    }

    tr:nth-child(even){
      background-color: #2DAA9E;
    }

    
    .vista-button {
      position: relative;
      cursor: pointer;
      padding: 4px 8px;
      border: 1px solid black;
      border-radius: 4px;
      color: #fff;
      text-shadow: 1px 1px #000;
      box-shadow:
        inset 0px 4px 4px -3px #fff0,
        inset 0px -3px 4px -3px #fff;
      background: linear-gradient(#fff, blue 50%, blue 50%);
      isolation: isolate;
      transition:
        0.25s all,
        0.1s background-position;
    }

    .vista-button::after {
      content: "";
      position: absolute;
      z-index: -1;
      inset: 0;
      background: radial-gradient(circle at 50% 150%, #48b9ef, #0000 50%);
      background-size: 300% 50%;
      background-position: 50% 100%;
      background-repeat: no-repeat;
      opacity: 0;
      transition: inherit;
    }

    .vista-button::before {
      content: "";
      position: absolute;
      z-index: -1;
      inset: 0;
      background: radial-gradient(circle at 50% 320%, #48b9ef, #0000 50%);
      background-size: 300% 50%;
      background-position: 50% 0%;
      background-repeat: no-repeat;
      opacity: 0;
      transition: inherit;
    }

    .vista-button:hover {
      box-shadow:
        inset 0px 4px 4px -3px #fff5,
        inset 0px -3px 4px -3px #fff;
    }
    .vista-button:hover::before,
    .vista-button:hover::after {
      opacity: 1;
    }

    .vista-button:active::before,
    .vista-button:active::after {
      opacity: 0;
    }

    .vista-button:active {
      box-shadow:
        inset 0px 4px 4px -3px #000,
        inset 0px -4px 4px -3px #000c,
        inset 0px 0px 24px -3px #000a;
      background-position: 1px 1px;
    }

    .vista-button div {
      transition: 0.1s translate;
    }

    .vista-button:active div {
      translate: 1px 1px;
    }

        

  </style>

  <body>
    <div class="container">
        
      @yield("content")

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
