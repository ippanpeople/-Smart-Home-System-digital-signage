<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <script src="js/test.js"></script> -->
    <script src="js/time2.js"></script>
    <!-- <script src="js/weather.js"></script> -->
    <script src="js/webSocket.js"></script>
    <!-- <script src="js/webSocket2.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@next/dist/chartjs-adapter-date-fns.bundle.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg==" crossorigin="anonymous"></script>
    <style>

    </style>
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-item">
        <div class="fa-stack icons" onclick="send_mode('on2')">
          <i class="fa fa-circle fa-stack-2x" style="color:#ADADAD;"></i>
          <i id="tv-on_off 00" class="fa fa-power-off fa-stack-1x fa-inverse" style="color:black;"></i>
        </div>
      </div>
      <div class="grid-item">
        <div class="fa-stack icons">
          <i id="indicator" class="fa fa-angle-double-up fa-stack-1x fa-inverse"></i>
        </div>
      </div>
      <div class="grid-item icons">
        <a href="./dashboard_mobile_setting.php" class="fa-stack">
          <i class="fa fa-circle fa-stack-2x" style="color:#ADADAD;"></i>
          <i id="settop-on_off 07" class="fa fa-gear fa-stack-1x fa-inverse" style="color:black;"></i>
        </a>
      </div>
      <div class="grid-item-narrow">
          <span class="deco DSEG14">ON/OFF</span>
      </div>
      <div class="grid-item-narrow"></div>
      <div class="grid-item-narrow">
          <span class="deco DSEG14">Set-btn</span>
      </div>
    </div>
    <div class="grid-container" id="temp-display">
      <div class="display-frame backlight" style="background-image: url(data:image/png;base64,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);">
        <span class="time-reading D7MI mask">88:88</span>
        <div class="second-line">
          <span class="mask D7MI" id="">88.8</span>
          <span class="mask smaller DSEG14">C</span>
          <span class="humidity mask D7MI" id="">88.8</span>
          <span class="mask smaller DSEG14">%RH</span>
        </div>
          <span id="time-value" class="time-reading D7MI"></span>
          <div class="second-line-display">
            <span id="temperature" class="second-reading-mask D7MI">00.0</span>
            <span class="smaller DSEG14">C</span>
            <span id="humidity" class="humidity second-reading-mask D7MI">00.0</span>
            <span class="smaller DSEG14">%RH</span>
          </div>
      </div>
    </div>
    <div class="grid-container">
      <div class="grid-item" onclick="send_mode('up2')">
        <div class="fa-stack icons">
          <i id="settop-volume_up 02" class="fa fa-plus fa-stack-1x fa-inverse" style="color:#ADADAD;"></i>
        </div>
      </div>
      <div class="grid-item">
        <div class="fa-stack icons">
        </div>
      </div>
      <div class="grid-item">
        <div class="fa-stack icons" onclick="send_mode('b12')">
          <i id="settop-channel_up 03" class="fa fa-chevron-up fa-stack-1x fa-inverse" style="color:#ADADAD;"></i>
        </div>
      </div>
      <div class="grid-item">
        <div class="fa-stack">
          <span class="deco DSEG14">Volume</span>
        </div>
      </div>
      <div class="grid-item"></div>
      <div class="grid-item">
        <div class="fa-stack">
          <span class="deco DSEG14">Channel</span>
        </div>
      </div>
      <div class="grid-item">
        <div class="fa-stack icons" onclick="send_mode('d2')">
          <i id="settop-volume_down 05" class="fa fa-minus fa-stack-1x fa-inverse" style="color:#ADADAD;"></i>
        </div>
      </div>
      <div class="grid-item">
        <div class="fa-stack icons">
        </div>
      </div>

      <div class="grid-item icons">
        <div class="fa-stack" onclick="send_mode('b22')">
          <i id="settop-channel_dn 06" class="fa fa-chevron-down fa-stack-1x fa-inverse" style="color:#ADADAD;"></i>
        </div>
      </div>
    </div>

    <script>
            var temp = []

            let house_info = {
            fetchInfo: function(){
              fetch('http://192.168.0.232:5000/')
              .then((response) => response.json())
              .then((data) => this.displayInfo(data));
            },
            displayInfo: function(data){
              const { Temperature } = data;
              const { Humidity } = data;
              
              document.querySelector("#temperature").innerText = Temperature;
              document.querySelector("#humidity").innerText = Humidity;

            }
          }
          function house(){
            house_info.fetchInfo()
            // console.log("get!!")
          }    

          var Timer = setInterval("house()",1000);

          ////////////////////////////////////////////
          window.onload = function () {
            
            updateTimer()
          }
        </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_CHTML"></script>

  </body>

</html>