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
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@next/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg==" crossorigin="anonymous"></script>
    <style>
      .header-background {
        /* z-index:50;
        position:absolute;
        top:400px;
        left:6px; */
        color:rgba(255,255,255,0.16);
      }
      .header-font {
          z-index:100;
          position:absolute;
          /* top:400px;
          left:6px; */
          color:rgba(255,255,255,0.9);
      }

      .wicon-background {
        /* z-index:50;
        position:absolute;
        top:400px;
        left:6px; */
        height: 200px;
        color:rgba(255,255,255,0.16);
        font-size:75px;
      }
      .wicon {
          z-index:100;
          position:absolute;
          /* top:400px;
          left:6px; */
          height:200px;
          font-size:75px;
          color:rgba(255,255,255,0.9);
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
        z-index:100;
        position:absolute;
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
        z-index:100;
        position:absolute;
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
        z-index:100;
        position:absolute;
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
        font-size:20px;
      }
      .year-font {
        z-index:100;
        position:absolute;
        /* top:600px;
        left:50px; */
        font-size:20px;
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
      }
      .clock-time-font {
          z-index:100;
          position:absolute;
          /* top:640px;
          left:175px; */
          font-size:80px;
          color:rgba(255,255,255,0.9);
      }

      .clock-sec-background {
        margin-left: 60px;
        /* z-index:50;
        position:absolute;
        top:640px;
        left:175px; */
        color:rgba(255,255,255,0.16);
        font-size:40px;
      }
      .clock-sec-font {
        margin-left: 60px;
        z-index:100;
        position:absolute;
        /* top:640px;
        left:175px; */
        font-size:40px;
        color:rgba(255,255,255,0.9);

      }
      .clock {
        margin-top: 540px;
        margin-left: 90px;
        padding-top: 300px;
        padding-bottom: 0px;
      }
      .real-clock {
        margin-left: 90px;
        font-size:20px;
      }
      .sec-clock {
        margin-left: 90px;
        font-size:20px;
      }
      .per {
        z-index:100;
        position:absolute;
        top: 105px;
        left: 1313px;

      }
      .per-chart {
        border: none;
      }
      
      .cal-y {
        margin-top: 630px;
        margin-left: 350px;
      }
      .cal {
        margin-top: 830px;
        position:absolute;
        /* top:640px;
        left:175px; */
        left: 1250px;
        width: 640px;
      }

    </style>
  </head>
  <body onload="updateTimer()" style="background:black;">
    <!-- header-start : smart house  -->
    <!-- <header class="container-fluid text-center DSEG14 pt-3">
      <div class="row">
        <h1 class="header-background">88888888888</h1>
        <h1 class="header-font">smart!house</h1>
      </div>
    </header> -->
    <!-- header-end : smart house  -->

    <!-- main -->
    <main class="container-fluid m-2">
      <div class="row">

        <!-- column1-start : sidebar -->
        <div class="col">
            <!-- <div class="row">
              <span class="week-background"><span class="DSEG14">sun.!mon.!tue.!wed.!thu.!fri.!sat.</span></span>
              <span id="week" class="week-font"></span>
            </div>
            <div class="row">
              <span class="year-background"><span class="DSEG14">888888888888</span></span>
              <span id="year-day" class="year-font" style="width: 640px;"></span>
            </div> -->
          
            <!-- <div class="row clock">
              <div class="col-5">
                <div class="row">
                  <span class="clock-time-background DSEG14">88:88</span>
                  <span id="DSEG-clock" class="clock-time-font DSEG14" style="width: 319px;"></span>
                </div>
              </div>
              <div class="col DSEG14 d-flex flex-column justify-content-end pb-3">
                <div class="row">
                  clock
                </div>
                <div class="row">
                  <span class="clock-sec-background" style="font-size:15px;">88</span>
                  <span class="clock-sec-font" id="DSEG-clock-sec" style="font-size:15px; width: 373.34px;"></span>
                </div>
              </div>
            </div> -->
          
            <div class="row DSEG14 weather">
              <div class="row text-center">
                <span class="city-background">88888888888888888888</span>
                <span class="city" style="left:1px;"></span>
              </div>

              <span class="col-3">
                <div class="row ps-3">
                  <span class="wicon-background DWEATHER">0</span>
                  <span class="wicon DWEATHER" style="width: 144px;"></span>
                </div>
              </span>
              <div class="col d-flex flex-column justify-content-end pb-3">
                <div class="row">
                  <!-- <div class="col-1 d-flex align-items-center"> -->
                    <!-- <div class="row text-light"> -->
                      <!-- <i class="fa-solid fa-sun"></i> -->
                 <!-- </div> -->
                  <!-- </div> -->
                  <div class="col">
                    <div class="row">
                      <span class="description-background">00000000000000</span>
                      <span class="description" style="width: 440.01px;"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <!-- <div class="col-1 d-flex align-items-center"> -->
                    <!-- <div class="row text-light"> -->
                    <!-- <i class="fa-solid fa-droplet"></i> -->
                 <!-- </div> -->
                  <!-- </div> -->
                  <div class="col">
                    <div class="row">
                      <span class="humidity-background">000000000:0888</span>
                      <span class="humidity" style="width: 440.01px;"></span>
                    </div>
                  </div>

                <div class="row">
                  <!-- <div class="col-1 d-flex align-items-center"> -->
                    <!-- <div class="row"> -->
                      <!-- <i class="fa-solid fa-temperature-three-quarters text-light"></i> -->
                    <!-- </div> -->
                  <!-- </div> -->
                  <div class="col">
                    <div class="row">
                      <span class="temp-background">000000000000:0888888</span>
                      <span class="temp" style="width: 418.01px;"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <!-- <div class="col-1 d-flex align-items-center"> -->
                    <!-- <div class="row"> -->
                    <!-- <i class="fa-solid fa-wind text-light"></i> -->
                    <!-- </div> -->
                  <!-- </div> -->
                  <div class="col">
                    <div class="row">
                      <span class="wind-background">00000000000:08.8000000</span>
                      <span class="wind" style="width: 418.01px;"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row cal-y">
              <span class="year-background"><span class="DSEG14">888888888888</span></span>
              <span id="year-day" class="year-font" style="width: 640px;"></span>
            </div>
          </div>
          
        </div>
        <!-- column1-end : sidebar -->

        <!-- column2-start : mirror-->
        <div class="col">
          <div class="row"></div>
          <div class="row"></div>
          <div class="row">
          <div class="row clock">
              <div class="col-5">
                <div class="row">
                  <span class="clock-time-background DSEG14">88:88</span>
                  <span id="DSEG-clock" class="clock-time-font DSEG14" style="width: 319px;"></span>
                </div>
              </div>
              <div class="col DSEG14 d-flex flex-column justify-content-end pb-3">
                <div class="row real-clock">
                  clock
                </div>
                <div class="row sec-clock">
                  <span class="clock-sec-background" style="font-size:15px;">88</span>
                  <span class="clock-sec-font" id="DSEG-clock-sec" style="font-size:15px; width: 373.34px;"></span>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- column2-end : mirror -->

        <!-- column3-start : houseinfo-bar -->
        <div class="col text-light">
          <div class="chart-wrapper" style="width: 10%;">
            <canvas class="per-chart" id="mychart-doughnut" ></canvas>
            <span class="per">80%</span>
          </div>
          <div class="row"></div>
          <div class="row"></div>
          <div class="row">
          <div class="row cal">
              <span class="week-background"><span class="DSEG14">sun.!mon.!tue.!wed.!thu.!fri.!sat.</span></span>
              <span id="week" class="week-font"></span>
            </div>

          </div>
        </div>
        <!-- column3-end : houseinfo-bat -->

      </div>
    </main>
    
    <footer class="container-fluid text-center DSEG14 pt-1 pb-1">
      <div class="row">
        <span class="header-background">88888888888</span>
        <span class="header-font">smart!house</span>
      </div>
    </footer>

    
    <script>
      var ctx = document.getElementById('mychart-doughnut');
      const percentage = 80 //グラフのパーセンテージ

      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [{
            data: [percentage, 100 - percentage],
            backgroundColor: ['rgba(255, 255, 255, 1)',  'rgba(0, 0, 0, 1)'],
            borderColor: 'rgba(0, 0, 0, 1)',
            borderRadius: 100,
            cutout: '80%', 
            weight: 100,
          }],
        },
      });

    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_CHTML"></script>
  </body>
</html>