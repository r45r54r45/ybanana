<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>banana</title>
  <!-- Bootstrap core CSS -->
  <link rel="apple-touch-startup-image" href="/src/img/splash2.png" >
  <link rel="apple-touch-icon" href="/src/img/main_logo.png" />
  <link rel="apple-touch-icon-precomposed" href="/src/img/main_logo.png" />

  <link rel="stylesheet" type="text/css" href="/src/css/addtohomescreen.css">
  <script src="/src/js/addtohomescreen.js"></script>
  <script>
    addToHomescreen();
  </script>

  <link href="/src/css/bootstrap.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  <link href="/src/css/common.css" rel="stylesheet" type="text/css">
  <style>
html {
	height: 100%;
}
body {
	height: 100%;
}
</style>
</head>
<body style="font-family: 'Open Sans','Nanum Gothic', sans-serif;">
  <div data-role="header" class="container-fluid bam-background center-align" id="nav-top" style="padding:0;">
    <div class="back_arrow"><img src="/src/img/backbtn.png" style="height: 18px;" ></div>
    <div class="noti notification"><img id="noti_img" src="/src/img/noti_on.png" style="height: 30px;" >
    <span class="notification" id="noti_num" style="position: absolute;
    top: 7px;
    font-size: 13px;
    font-weight: 100;
    left: 12px;
    color: white;"></span>
  </div>
    <div class="help_button"><img src="/src/img/help_btn.png" style="height: 18px;" ></div>
    <span class="nav-font-color nav-font-valign" id="page_title" style="font-family:'Montserrat'; color:white;text-shadow: 0 0px 0 #eee !important; font-weight:100"></span>
  </div>
  <!-- notification -->
  <div class="modal fade" id="noti_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    margin-top: 53px;
    margin-left: -10px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 5px 15px 20px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div id="noti_body" class="modal-body" style="    padding: 5px;">
        <!-- <div class="card_holder">
          <div id="more_phonebook" onclick="parent.moveto('more_phonebook');" class="card pointer" style="height:50px; margin-bottom:10px; position:relative; padding:5px 10px;">
            <div style="border-right:2px solid #fcd90d;height:100%;width:100%;padding-right:5px;">
              <div style="text-align:right;">
                <span style="font-size: 15px;" name="noti_title">연세대학교 내선 번호</span>
              </div>
              <div style="text-align:right; margin-top:-5px;">
                <span style="font-size: 10px;"    name="noti_content">phonebook</span>
              </div>
            </div>
          </div>
        </div> -->

      </div>

    </div>
  </div>
</div>
<div id="makelong" style="background-color:#ffffff;overflow:auto;-webkit-overflow-scrolling:touch;width:100%;position:absolute;top:64px;">

  <iframe id="contents" frameBorder="0" height="100%">

  </iframe>

</div>

  <div data-role="footer" class="container-fluid" style="padding:0;" id="nav-bottom">
    <ul class="nav nav-pills">
      <li id="menu1" class="center-align nav-bottom-border nav-bottom-5">
        <img class="img img-responsive" src="/src/img/1home_o.png"/>
      </li>
      <li id="menu2" class="center-align nav-bottom-border nav-bottom-5">  <img class="img img-responsive" src="/src/img/2shuttle.png" /></li>
      <li id="menu3" class="center-align nav-bottom-border nav-bottom-5">  <img class="img img-responsive" src="/src/img/3menu.png" /></li>
      <li id="menu4" class="center-align nav-bottom-border nav-bottom-5">  <img class="img img-responsive" src="/src/img/4link.png" /></li>
      <li id="menu5" class="center-align nav-bottom-border nav-bottom-5" style="border:none" >  <img class="img img-responsive" src="/src/img/5more.png"/></li>
    </ul>
  </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/src/js/jquery.js"></script>
  <script src="/src/js/new_js.js"></script>
  <script src="/src/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>
</html>
