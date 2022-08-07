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
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <script src="js/test.js"></script> -->
    <script src="js/time.js"></script>
    <script src="js/weather.js"></script>
    <script src="js/webSocket.js"></script>
    <!-- <script src="js/webSocket2.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@next/dist/chartjs-adapter-date-fns.bundle.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg==" crossorigin="anonymous"></script>
    <style>
      .header-background {
        /* z-index:50;
        position:absolute;
        top:400px;
        left:6px; */
        font-size: 10px;
        color:rgba(255,255,255,0.16);
      }
      .header-font {
          z-index:100;
          position:absolute;
          /* top:400px;
          left:6px; */
          font-size: 10px;
          color:rgba(255,255,255,0.9);
      }

      .wicon-background {
        /* z-index:50;
        position:absolute;
        top:400px;
        left:6px; */
        z-index:50;
        position:absolute;
        color:rgba(255,255,255,0.16);
        font-size:90px;
        top: 110px;
      }
      .wicon {
          z-index:100;
          position:absolute;
          /* top:400px;
          left:6px; */
          font-size:90px;
          color:rgba(255,255,255,0.9);
          top: 110px;
      }

      .description {
        z-index:100;
        position:absolute;
        /* top:450px;
        left:180px; */
        font-size:10px;
        color:rgba(255,255,255,0.9);
    }
    .description-background {
        /* z-index:50;
        position:absolute;
        top:450px;
        left:180px; */
        color:rgba(255,255,255,0.16);
        font-size:10px;
    }

      .humidity {
        /* z-index:100;
        position:absolute; */
        /* top:470px;
        left:188px; */
        font-size:15px;
        color:rgba(255,255,255,0.9);
      }
      .humidity-background{
          /* z-index:50;
          position:absolute;
          top:470px;
          left:188px; */
          color:rgba(255,255,255,0.16);
          font-size:15px;
      }

      .temp {
        /* z-index:100;
        position:absolute; */
        /* top:400px;
        left:160px; */
        font-size:15px;
        color:rgba(255,255,255,0.9);
      }
      .temp-background {
        /* z-index:50;
        position:absolute;
        top:400px;
        left:160px; */
        color:rgba(255,255,255,0.16);
        font-size:15px;
      }

      .wind {
        /* z-index:100;
        position:absolute; */
        /* top:490px;
        left:100px; */
        font-size:15px;
        color:rgba(255,255,255,0.9);
      }
    .wind-background {
        /* z-index:50;
        position:absolute;
        top:490px;
        left:100px; */
        /* z-index:50;
        position:absolute; */
        color:rgba(255,255,255,0.16);
        font-size:15px;
    }

    .city {
      z-index:100;
      position:absolute;
      /* top:330px;
      left:6px; */
      width: 638px;
      font-size:36px;
      color:rgba(255,255,255,0.9);
    }
    .city-background {
        /* z-index:50;
        position:absolute; */
        color:rgba(255,255,255,0.16);
        /* top:330px;
        left:6px; */
        font-size:36px;
    }

      .year-background {
        color:rgba(255,255,255,0.16);
        font-size:40px;
      }
      .year-font {
        z-index:100;
        position:absolute;
        /* top:600px;
        left:50px; */
        font-size:40px;
        color:rgba(255,255,255,0.9);
      }

      .week-background {
          /* top:600px;
          left:50px; */
          font-size:17px;
          color:rgba(255,255,255,0.16);
          width: 374px;
      }
      .week-font {
          z-index:100;
          position:absolute;
          width: 374px;
          /* top:600px;
          left:50px; */
          top: 29.9px;
          font-size:17px;
          color:rgba(255,255,255,0.9);
      }

      .clock-time-background {
        /* z-index:50;
        position:absolute;
        top:640px;
        left:175px; */
        color:rgba(255,255,255,0.16);
        font-size:80px;
        height: 110px;
      }
      .clock-time-font {
        z-index:100;
        position:absolute;
        /* top:640px;
        left:175px; */
        font-size:80px;
        color:rgba(255,255,255,0.9);
        height: 110px;
      }

      .clock-sec-background {
        /* margin-left: 60px; */
        /* z-index:50;
        position:absolute;
        top:640px;
        left:175px; */
        color:rgba(255,255,255,0.16);
        font-size:40px;
      }
      .clock-sec-font {
        /* margin-left: 60px; */
        z-index:100;
        position:absolute;
        /* top:640px;
        left:175px; */
        font-size:40px;
        color:rgba(255,255,255,0.9);
      }
      .clock {
        /* margin-top: 540px;
        margin-left: 90px;
        padding-top: 300px;
        padding-bottom: 0px; */
      }
      .real-clock {
        /* margin-left: 90px; */
        font-size:20px;
      }
      .sec-clock {
        /* margin-left: 90px; */
        font-size:20px;
      }
      .per {
        z-index:100;
        position:absolute;
        /* top: 105px;
        left: 1313px; */

      }
      .per-chart {
        border: none;
      }
      
      .cal-y {
        /* margin-top: 630px;
        margin-left: 350px; */
      }
      .cal {
        /* margin-top: 830px;
        position:absolute;
        /* top:640px;
        left:175px; */
        /* left: 1250px; */
        /* width: 640px; */ 
      }
      body {
        height: 1880px;
        background-image: url(data:image/png;base64,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);
      }
      main {
        margin-top: 50px;
        margin-bottom: 40px;
        background-color: rgba(14, 10, 25, 0.1);
        background-image: url(data:image/png;base64,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);
        width: 95%;
        height: 1800px;
        border-radius: 60px 0px 60px 10px;
      }
      #left_line {
        border-radius: 60px 0px 60px 10px;
      }
      #right_line {
        border-radius: 0px 60px 10px 60px;
      }
      #b {
        z-index:100;
        position:absolute;
        height: 36px;
        color: white;
        top: 50px;
        left: 290px;
        font-size: 50px;
      }
      #b-background {
        z-index:50;
        position:absolute;
        height: 36px;
        color:rgba(255,255,255,0.16);
        top: 50px;
        left: 290px;
        font-size: 50px;
      }
      #f {
        z-index:100;
        position:absolute;
        height: 36px;
        color: white;
        top: 69px;
        left: 450px;
        font-size: 10px;
      }
      #f-background {
        z-index:50;
        position:absolute;
        height: 36px;
        color:rgba(255,255,255,0.16);
        top: 69px;
        left: 450px;
        font-size: 10px;
      }
      .in-temp {
        font-size: 7px;
      }

      .box1 {
        border-radius: 6px 20px 0px 6px;
        width: 127px;
      }

    .re{transform:rotate(90deg);
        -ms-transform:rotate(90deg); /* Internet Explorer 9*/
        -moz-transform:rotate(90deg); /* Firefox */
        -webkit-transform:rotate(90deg); /* Safari 和 Chrome */
        -o-transform:rotate(90deg); /* Opera */
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
    }
    .mesg-bg {
      /* z-index:100;
      position:absolute; */
      /* top:640px;
      left:175px; */
      /* font-size:30px;
      color:rgba(255,255,255,0.12); */
      /* height: 110px; */
    }
    .mesg-font {
      /* z-index:100;
      position:absolute;
      left: -11.5px; */

      /* top:640px;
      left:175px; */
      font-size:30px;
      color:rgba(255,255,255,0.9);
      /* height: 110px; */
    }
    #ex_chart {max-width:340px;max-height:150px;}
    #cover {
      border-radius: 6px 20px 0px 6px;
      width: 309px;
      background-color: black;
      left: 39px;
      top: 1364px;
      background-image: url(data:image/png;base64,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);
      position:absolute;
      z-index:100;
    }
    </style>
  </head>
  <body  style="background:black;">
    <!-- main -->
    <main class="mx-auto">

      <div class="row">
        <div class="col-2 border border-3 border-light ms-5" id="left_line"></div>
        <div class="col">
          <div class="row text-center DSEG14 ">
            <!-- <span class="header-background">88888888888</span>
            <span class="header-font" style="width: 664px;">smart!house</span> -->
          </div>
        </div>
        <div class="col-2 border border-light me-5" id="right_line"></div>
        <hr>
      </div>

      <div class="row mb-3">
        <div class="col-3">
          <div class="row DSEG14 ms-5">
            <span class="header-background">88888:88888</span>
            <span class="header-font" style="width: 225px;">team!:!KO-F</span>
          </div>
          <div class="row DSEG14 ms-5">
            <span class="header-background">88888888:888888888888</span>
            <span class="header-font" style="width: 225px;">project!:!smart-house</span>
          </div>
        </div>
        <div class="col-3 DWEATHER">
          <div class="row"> <span id="b-background" style="width: 225px;">a</span> </div>
          <div class="row"><span id="b" style="width: 225px;">b</span></div>
        </div>
        <div class="col D7SEGG ">
          <div class="row"><span id="f-background" style="width: 160px;"><span class="D7SEGG">88</span><span class="DSEG14">888</span><br><span class="DSEG14">88888888888</span></span></div>
          <div class="row"><span id="f" style="width: 160px;"><span class="D7SEGG">75</span><span class="DSEG14">EGG</span><br><span class="DSEG14">raspi!X!iot</span></span></div>
        </div>
        <div class="col-3">
          <div class="row DSEG14 ms-5">
            <span class="header-background">!!!!!!88888888888</span>
            <span class="header-font" style="width: 202px;">!!!!!!ecc!college</span>
          </div>
          <div class="row DSEG14 ms-5">
            <span class="header-background">!!!!8888888888888</span>
            <span class="header-font" style="width: 202px;">!!!!team-f!@!IE2A</span>
          </div>
        </div>
      </div>

      <div class="row border border-light mx-4"></div>

      <div class="row">

        <div class="row">
          <div class="col-4 ps-5">
            <div class="row">
              <span class="clock-time-background D7MBI" style="height: 110px;">88:88</span>
              <span id="DSEG-clock" class="clock-time-font D7MBI" style="width: 319px; height: 110px;"></span>
            </div>
          </div>
          <div class="col-4 DSEG14 d-flex flex-column justify-content-end pb-3">
            <div class="row real-clock text-light">
              clock
            </div>
            <div class="row sec-clock">
              <span class="clock-sec-background" style="font-size:15px;">88</span>
              <span class="clock-sec-font" id="DSEG-clock-sec" style="font-size:15px; width: 60px;"></span>
            </div>
          </div>


          <div class="col text-end p-0">
            <div class="row ps-3">
              <span class="wicon-background DWEATHER" style="width: 130px; height: 60px;">0</span>
              <span class="wicon DWEATHER" style="width: 130px; height: 60px;"></span>
            </div>
          </div>

          <div class="col-2 DSEG14 border-bottom me-3 mb-3">
            <div class="row text-end">
                <span class="city-background">88888</span>
                <span class="city" style="left: 855px; width: 171px;"></span>
              </div>
              <div class="row">
                <span class="description-background">00000000000000</span>
                <span class="description" style="width: 40.01px;"></span>
             </div>
          </div>


        </div>

        <div class="row">
          <div class="col-9 ps-5">
            <div class="row">
              <span class="year-background"><span class="D14LI">8888888888</span><span class="week-background"><span class="D14LI">888.</span></span></span>
              <span id="year-day" class="year-font" style="width: 640px;"></span>
            </div>
          </div>

          <div class="col DSEG14">
            <div class="row text-end">
              <!-- <span class="temp-background" style="width: 256px;">000000000000:0888888</span> -->
              <span class="temp" style="width: 256px; left: 784px;"></span>
            </div>
            <div class="row text-end">
              <!-- <span class="humidity-background" style="width: 256px;">000000000:0888</span> -->
              <span class="humidity" style="width: 256px; left: 784px;"></span>
            </div>
            <div class="row text-end">
            <!-- <span class="wind-background" style="width: 256px; left: 768px;">00000000000:08.8000000</span> -->
            <span class="wind" style="width: 256px; left: 769px;"></span>
          </div>

          </div>
        </div>
  
        <div class="row border border-light mx-auto mt-2" style="width: 978px;"></div>

        <div class="row mt-3 text-light DSEG14">
          <div class="col-4">!!html. css. javascript.</div>
          <div class="col"></div>
          <div class="col-3">python. shellscript.</div>
        </div>
        <div class="row my-3 text-light DSEG14">
          <div class="col-1 text-center" style="font-size: 60px;">+</div>
          <div class="col"></div>
          <div class="col-3 text-end" style="font-size: 60px;">+</div>
        </div>
        
        <div class="row text-center DSEG14" style="margin-bottom: 200px;">
          <!-- <span class="mesg-bg">88888888888888</span> -->
          <span class="mesg-font">hello!stranger</span>
          <!-- <input type="text" placeholder="Type..." id="text">
          <input type="button" value="submit" onclick="send()">
          <p id='connection'></p>
          <p id='option'></p>
          <p id='enter'></p> -->
      </div>

        <div class="row text-light DSEG14 in-temp ms-2">
          <div class="col-2 box1 p-0" style="border-style: inset;">!indoor<br>!temperature:<br>!!!!!<span id="temperature" style="font-size:20px;">20</span>°C</div>
          <div class="col"></div>
          <div class="col-1 re pt-5">web!rtc</div>
        </div>

        <div class="row text-light DSEG14" >
          <div class="col-1 text-center" style="font-size: 60px;">-</div>
          <div class="col"></div>
          <div class="col-3 text-end" style="font-size: 60px;">-</div>
        </div>

        <div class="row text-light DSEG14 in-temp mb-3 ms-2">
          <div class="col-2 box1 p-0" style="border-style: inset;">!indoor<br>!humidity:<br>!!!!!!<span id="humidity" style="font-size:20px;">45</span>%</div>
          <div class="col"></div>
          <div class="col-1 re pt-5">IR!control</div>
        </div>

        <!-- <div class="row" style="margin-top: 50px;">
          <div class="col-8"></div>
          <div class="col text-end">
            <img src="./Capture-removebg-preview.png" alt="" style="width: 60%; height: auto;">
          </div>
        </div> -->

        <div class="row" style="margin-top: 50px;">
          <div class="col-8"></div>
          <div class="col text-end">
            <img src="./topLevelAssembly (002) (1).png" alt="" style="width: 60%; height: auto;">
          </div>
        </div>

        <div class="row text-light DSEG14 my-5">
          <div class="col">
            <div class="row border" id="cover">!!!!!!!!!!!TEM</div>
            <div id="chartContainer" style="height: 80px; width: 100%;"></div>
          </div>
          <div class="col">
            <div class="row border" id="cover">!!!!!!!!!!!TEM</div>
            <div id="chartContainer2" style="height: 80px; width: 100%;"></div>
          </div>
          <div class="col"></div>
        </div>

        <div class="row DSEG14 text-light">

          <div class="col-3 ms-5" style="border-style: inset; border-radius: 6px 20px 3px 6px; width: 200px;">
            <div class="row">

            </div>
            <div class="row"></div>
            <div class="row">
              
            </div>
          </div>

          <div class="col-3">
            <div class="row m-3" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
              <span onclick="" style="font-size: 3px;">!remote!control-1</span>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">on/off</div>
                <div class="col" onclick="recode_mode('on1')">re</div>
                <div class="col" onclick="send_mode('on1')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">up!!</div>
                <div class="col" onclick="recode_mode('up1')">!!re</div>
                <div class="col" onclick="send_mode('up1')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">down</div>
                <div class="col" onclick="recode_mode('d1')">!!re</div>
                <div class="col" onclick="send_mode('d1')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">bt1</div>
                <div class="col" onclick="recode_mode('b11')">!!re</div>
                <div class="col" onclick="send_mode('b11')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">bt2</div>
                <div class="col" onclick="recode_mode('b21')">!!re</div>
                <div class="col" onclick="send_mode('b21')">se</div>
            </div>
          </div>
          <div class="col-3">
            <div class="row m-3" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
              <span onclick="" style="font-size: 3px;">!remote!control-2</span>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">on/off</div>
                <div class="col" onclick="recode_mode('on2')">re</div>
                <div class="col" onclick="send_mode('on2')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">up!!</div>
                <div class="col" onclick="recode_mode('up2')">!!re</div>
                <div class="col" onclick="send_mode('up2')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">down</div>
                <div class="col" onclick="recode_mode('d2')">!!re</div>
                <div class="col" onclick="send_mode('d2')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">bt1</div>
                <div class="col" onclick="recode_mode('b12')">!!re</div>
                <div class="col" onclick="send_mode('b12')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">bt2</div>
                <div class="col" onclick="recode_mode('b22')">!!re</div>
                <div class="col" onclick="send_mode('b22')">se</div>
            </div>
          </div>
          <div class="col-3">
            <div class="row m-3" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
              <span onclick="" style="font-size: 3px;">!remote!control-3</span>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">on/off</div>
                <div class="col" onclick="recode_mode('on3')">re</div>
                <div class="col" onclick="send_mode('on3')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">up!!</div>
                <div class="col" onclick="recode_mode('up3')">!!re</div>
                <div class="col" onclick="send_mode('up3')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">down</div>
                <div class="col" onclick="recode_mode('d3')">!!re</div>
                <div class="col" onclick="send_mode('d3')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">bt1</div>
                <div class="col" onclick="recode_mode('b13')">!!re</div>
                <div class="col" onclick="send_mode('b13')">se</div>
            </div>
            <div class="row m-1" style="border-style: inset; border-radius: 6px 20px 3px 6px;">
                <div class="col">bt2</div>
                <div class="col" onclick="recode_mode('b23')">!!re</div>
                <div class="col" onclick="send_mode('b23')">se</div>
            </div>
          </div>

        </div>

        <div class="row border border-light ms-4 mt-5" style="width: 978px;"></div>

      <div class="row text-light text-center mt-5 DSEG14">
        <p><&copy; 2022 team-f-koi/p>
      </div>

    </main>
        <script>
            var temp = []

            let house_info = {
            fetchInfo: function(){
              fetch('http://10.0.0.108:5000/')
              .then((response) => response.json())
              .then((data) => this.displayInfo(data));
            },
            displayInfo: function(data){
              const { Temperature } = data;
              const { Humidity } = data;
              
              document.querySelector("#temperature").innerText = Temperature;
              document.querySelector("#humidity").innerText = Humidity;
              document.querySelector(".canvasjs-chart-credit").innerText = "";

            }
          }
          function house(){
            house_info.fetchInfo()
            // console.log("get!!")
          }    

          var Timer = setInterval("house()",1000);

          ////////////////////////////////////////////
          window.onload = function () {
            
            var temp = []; // dataPoints
            var chart = new CanvasJS.Chart("chartContainer", {
              backgroundColor: "rgba(14, 10, 25, 0.08)",
              title :{
                fontColor: "white",
                text: "",
                fontFamily: "DSEG14",
              },
              axisX:{
                labelFontFamily: "DSEG14",
                labelFontColor: "rgba(14, 10, 25, 0.08)",
              },
              axisY:{
                labelFontFamily: "DSEG14",
                labelFontColor: "white",
              },
              data: [{
                type: "line",
                color: "white",
                lineColor:"white",
                lineThickness: 0.2,
                dataPoints: temp
              }]
            });

            var xVal = 0;
            var yVal = 100; 
            var updateInterval = 1000;
            var dataLength = 20; // number of dataPoints visible at any point

            var updateChart = function (count) {

              count = count || 1;

              for (var j = 0; j < count; j++) {
                yVal = Number(document.querySelector("#temperature").innerText)
                temp.push({
                  x: xVal,
                  y: yVal
                });
                xVal++;
              }

              if (temp.length > dataLength) {
                temp.shift();
              }

              chart.render();
            };

            updateChart(dataLength);
            setInterval(function(){updateChart()}, updateInterval);
            updateTimer()
          }
        </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_CHTML"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </body>
</html>