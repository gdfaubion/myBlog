<!DOCTYPE html>
<html lang="en">
  <head>

    <link href='https://fonts.googleapis.com/css?family=Poller+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <script src="/js/jquery.js"></script>
    <title>CSS3 Robot</title>
    <style>
      .main-container {
    max-width: 920px;
    margin: 0 auto;
    padding: 0 20px 0 20px;
  } 
  header, button {
    font-family: 'Fjalla One', sans-serif;
  }
  button {
    font-size: 20px;
    border-radius: 8%;
    background-color: #000;
    color: #fff;
    border: 2px solid #000;
    padding: 5px;
  }
  button:hover {
    color: #000;
    background-color: #fff;
    cursor: pointer;
  }
  .robot {
    position: relative;
    left: 200px;
  }

  .beep {
    width: 5px;
    height: 0;
    border: 5px solid transparent;
    border-top: 10px solid #413F3F;
    border-bottom: 80px solid #888;
    position: relative;
    left: 140px;
  }

  @keyframes blink {
    50% {
      background: radial-gradient(circle, red 15%, transparent 40%), #66C6CC;
      background-size: 75px 150px;
    }
  }
  @-webkit-keyframes blink {
    50% {
      background: -webkit-radial-gradient(circle, red 15%, transparent 40%), #66C6CC;
      background-size: 75px 150px;
    }
  }
  @-moz-keyframes blink {
    50% {
      background: -moz-radial-gradient(circle, red 15%, transparent 40%), #66C6CC;
      background-size: 75px 150px;
    }
  }
  .laser {
    animation: blink .5s infinite;
    -webkit-animation: blink .5s infinite;
    -moz-animation: blink .5s infinite;
  }
  .brain {
    background: radial-gradient(circle, white 15%, transparent 40%), #66C6CC;
    background: -moz-radial-gradient(circle, white 15%, transparent 40%), #66C6CC; 
    background: -webkit-radial-gradient(circle, white 15%, transparent 40%), #66C6CC;
    background-size: 75px 150px;
    height: 150px;
    width: 150px;
    border-radius: 60px 60px 10px 10px;
    border-bottom: 40px solid #413F3F;
    position: relative;
    left: 70px;
  }
  .torso {
    height: 0;
    width: 140px;
    border-top: 300px solid #66C6CC;
    border-left: 75px solid transparent;
    border-right: 75px solid transparent;
    border-radius: 20px 20px 100px 100px;
  }
  .left {
    font-family: 'Poller One', verdana, arial, sans-serif;
    font-weight: bold;
    font-size: 250px;
    color: #413F3F;
    transform: rotate(200deg);
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    position: relative;
    top: -320px;
    left: -190px;
    z-index: -1;
  }
  .right {
    font-family: 'Poller One', verdana, arial, sans-serif;
    font-weight: bold;
    font-size: 250px;
    color: #413F3F;
    transform: scaleY(-1) rotate(20deg);
    -webkit-transform: scaleY(-1) rotate(20deg);
    -moz-transform: scaleY(-1) rotate(20deg);
    position: relative;
    top: -620px;
    left: 190px;
    z-index: -1;
  }
  .foot {
    height: 40px;
    width: 40px;
    background: #ccc;
    border-radius: 40px;
    border: 15px solid #999;
    position: relative;
    left: 110px;
    top: -10px;
    z-index: -1;
  }
    </style>
  </head>

  <body>
    <div class="main-container">
      <header>
        <h1>Simple Robot!</h1>
        <h3>You can turn the laser eyes on or off and change the background color by using the buttons below!</h3>
        <button class="flash">Laser Eyes</button>
        <button class="color">Background Color</button>
      </header>

      <div class="robot">
        <div class="beep"></div>
        <div class="brain"></div>
        <div class="torso">
          <div class="left">j</div>
          <div class="right">j</div>
        </div>
        <div class="foot"></div>
      </div>

    </div>

    <script>
      // When eyes button is clicked, toggle laser class on brain
      $(".flash").click(function() {
        $(".brain").toggleClass('laser');
      });

      // When color button is clicked...
      $(".color").click(function() {
        // assign each named color a random number 0-255
        var red = Math.floor(Math.random() * 255);
        var green = Math.floor(Math.random() * 255);
        var blue = Math.floor(Math.random() * 255);
        
        // Generate the RGBA value from red, green, and blue
        var randomRGBA = 'rgba('+red+','+green+','+blue+',1)'
        
        // and change the body's background to our random color
        $('body').css('background', randomRGBA);
        //Display the RGBA value in an alert window
      });
    </script>
  </body>
</html>