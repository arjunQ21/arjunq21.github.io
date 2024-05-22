<!DOCTYPE html>
<html>
<head>
  <title>Arjun Adhikari - @arjunQ21 - Application and Web Developer | Pokhara, Nepal</title>
  <meta charset="utf-8">
  
  <meta name='viewport' content='width=device-width'>
  <meta name='theme-color' content="#E6F0FF">
  <meta name='keyword' content="app developer, flutter developer, web developer in nepal, full stack developer, web developer portfolio, make websites in nepal, make website in pokhara, make website in kathmandu, Laravel Developer, Full Stack Developer, Front End Developer, PHP Developer">
  <meta name='description' content='Arjun Adhikari (arjunQ21) is a Full Stack Web and Application Developer from Pokhara, Nepal.'>
  <link rel="icon" href="images/favicon.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" type="text/css" href="components.css">
  <link rel="stylesheet" type="text/css" href="popup.css">
  <link rel="stylesheet" type="text/css" href="toast.css">
  <link rel="stylesheet" type="text/css" href="media.css">
  <link rel="stylesheet" type="text/css" href="anim.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script type="text/javascript" src='anim.js'></script>
  <script type="text/javascript" src='popup.js'></script>
  <script type="text/javascript" src='toast.js'></script>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4GRXZ3DS41"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-4GRXZ3DS41');
</script>
</head>
<body>


<div class="cont">
  <div class="gridCont">
    <div class="gridLeft" id='gridLeft'>
      <h4 class='head-text' style='margin-bottom: 0px; color: #999; font-weight: normal;'> Hi there, I am</h4>
          <div class="info head-text">
              <h2 style='letter-spacing: 1px; padding-top: 0px;margin-top: 5px;'>Arjun Adhikari.</h2>
              <div class="profileImage">
                <!-- <img src="profile-300x300.jpg"> -->
                <!-- <img src="images/babi-d-bya.jpg" alt=""> -->
                <img src="images/me-square-400x.png">
              </div>
              <h4 style='letter-spacing: 1px; font-style: italic; color: #555 ; margin: 25px 0px; font-size: 15px;'>I make Apps and Websites.</h4>

              <?php include "contacts.php"; ?>

          </div>
    </div>
    <div class="gridRight">
      <div class="rightItems">
      <span class="smallTitleText">
          About 
        </span>
        <div class="normalText">
        I am a full stack Web and Application Developer from Pokhara, Nepal.
        <div class="mv10"></div>
        Programming is my hobby, passion and career. I have been in the web development industry since 2017 and started App Development since 2020. 
        </div>
          

        <?php include "projects.php"; ?>

        <?php include "tools.php"; ?>
              <br><br>
        <p style='color: #777 ; font-size: 19px;'>I would love to be a part of your next Application/Web Development project 😀
        </p>

        
        <p style='font-weight: normal; letter-spacing: normal ; color: #777; font-size: 15px;'>
          <span>
            Dont have your own project ?
          </span><br>
          You can refer me some clients and get upto 20% commission 😉
        </p>

        <br>

        <p style='text-align: center;'>
        <small>
        Nice day, stranger 😁🙂.
        </small>
        </p>

<br>


      </div><!-- right items -->
    </div><!-- grid right -->
  </div>
</div>
<div id="toast">
  <span>Sample Toast</span>
</div>

<div class="popup_cont">
  <div id="popup">
    <div class="p_title">
      <div class="p_title_text">
        <span>Popup Title looks like this</span>
      </div>
      <div class="p_close">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>
    </div>
    <div class="p_body">
      body of this
    </div>
  </div>
</div>
<input type="text" name="clipboard" id='clipboardInput'>
<script src='script.js'></script>
</body>
</html>