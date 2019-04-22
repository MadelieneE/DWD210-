<title>nar</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<style>
    *{
          box-sizing: border-box;
          margin: 0;
          padding: 0;
    }

    html,body{
          height: 100%;
          overflow: hidden;
          font-family: tahoma;
    }

    .page{
          height: 100%;
          background-color: #584e4a;
    }

    .content{
          height: 200%;
          transform-origin: top left;
          transition: transform 0.7s cubic-bezier(1,0.005,0.24,1);
          background-color: #f0f0f0;
    }

    .content_inner{
          height: 50%;
          overflow-y: auto;
          padding: 50px 20%;
    }

    .menu_toggle{
          z-index: 900;
          position: fixed;
          top: 0;
          left: 0;
          display: block;
          cursor: pointer;
          width: 100px;
          height: 80px;
          background-color: #f37272;
          border-bottom-right-radius: 100%;
    }

    .menu_toggle:active i{
          opacity; 0.8;
    }

    .menu_toggle i{
          color: #f0f0f0;
    }

    .menu_toggle .menu_open, .menu_toggle .menu_close{
          position: absolute;
          top: 50%;
          left: 50%;
          margin-top: -15px;
          margin-left: -12px;
          transition: transform 0.7s cubic-bezier(1,0.005,0.24,1);
    }

    .menu_toggle .menu_open{
          transform-origin: -100px -100px;
    }

    .menu_toggle .menu_close{
          transform: rotate(20deg);
          transform-origin: -100px -160px;
    }

    .menu_items{
          position: fixed;
          bottom: 0;
          left: 50px;
          list-stlye: none;
          margin: 0;
          padding: 0;
    }

    .menu_items li{
          height: 60px;
          margin-bottom: 30px;
          transform: translateX(-300px);
          transition: transition 0.7s 0s cubic-bezier(1,0.005,0.24,1);
    }

    .menu_items li:nth-child(2){
          margin-left; 40px;
    }

    .menu_items li:nth-child(3){
          margin-left; 80px;
    }

    .menu_items a{
          display: block;
          text-decoration: none;
          text-transform: uppercase;
          letter-spacing: 2px;
          color: #a4a4a4;
          transition: color 0.2s;
    }

    .menu_items a .icon{
          position: absolute;
          top: 50%;
          left: 50%;
          content: "";
          display: block;
          width: 60px;
          height: 60px;
          margin-left: -33px;
          margin-top: -32px;
          border-radius: 100%;
          border: 2px solid #f0f0f0;
          transition: border-color 0.2s;
    }

    .menu_items a:hover{
          color: #f0f0f0;
    }

    .menu_items a:hover .icon:after{
          border-color: #f37272;
    }

    .menu_items a:hover .icon{
          color: #f37272;
    }

    .real .content{
          transform: rotate(-30deg);
    }

    .real .menu_open{
          transform: rotate(-20deg);
    }

    .real .menu_close{
          transform: rotate(0);
    }

    .real .menu_items li{
          transform: translateX(0);
          transition: transform 0.35s 0.45s cubic-bezier(0.175,0.885,0.32,1.275);
    }

    .real .menu_items li:nth-child(2){
          transition-delay: 0.47s;
    }

    .real .menu_items li:nth-child(3){
          transition-delay: 0.48s;
    }

    h1{
          padding-bottom: 15px;
          border-bottom: 1px solid #ddd;
    }

    body{
          color: #584e4a;
    }

    .social i{
          font-size: 20px;
          background-color: #f37272;
          width: 40px;
          height: 40px;
          line-height: 40px;
          text-align: center;
          color: white;
          border-radius: 50px;
    }

</style>

<body>
<div class="page">
      <span class="menu_toggle">
          <i class="menu_open fa fa-bars fa-lg"></i>
          <i class="menu_open fa fa-times fa-lg"></i>
</div>

<ul class="menu_items">
      <li><a href=""><i class="fa fa-home fa-2x">
      </i>
      More</a>
      </li>\

      <li><a href=""><i class="fa fa-phone fa-2x">
      </i>
      Coffee</a>
      </li>\

      <li><a href=""><i class="fa fa-heart fa-2x">
      </i>
      Please</a>
      </li>\
</ul>

<main class="content">
        <div class="content_inner">
            <h1>Amazing Design Ex</h1>
            <br><br><br>
            <div class="social">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-behance"></i>
                <i class="fa fa-youtube"></i>
            </div>
            <br><br>
            <p>Do <strong>not</strong> push the red button</p>

            <p> 123123123123123123123</p>
        </div>
</main>

<script>
      var $page = $(".page");

          $(".menu_toggle").on("click", function(){
              $page.toggleClass("real");

          });

          $(".content").on("click", function(){
              $page.removeClass("real");

          });

</script>

</body>


Header 1 half work
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<style>
    *{
          box-sizing: border-box;
          margin: 0;
          padding: 0;
    }


    header{
          height: 100%;
          font-family: tahoma;
          overflow: hidden;
    }

    .page{
          height: 100%;
          background-color: #584e4a;
    }

    .content{
          height: 200%;
          transform-origin: top left;
          transition: transform 0.7s cubic-bezier(1,0.005,0.24,1);
          background-color: #f0f0f0;
    }

    .content_inner{
          height: 50%;
          overflow-y: auto;
          padding: 50px 20%;
    }

    .menu_toggle{
          z-index: 900;
          position: fixed;
          top: 0;
          left: 0;
          display: block;
          cursor: pointer;
          width: 100px;
          height: 80px;
          background-color: #f37272;
          border-bottom-right-radius: 100%;
    }

    .menu_toggle: active i{
          opacity: 0.8;
    }

    .menu_toggle i{
          color: #f0f0f0;
    }

    .menu_toggle .menu_open, .menu_toggle .menu_close{
          position: absolute;
          top: 50%;
          left: 50%;
          margin-top: -15px;
          margin-left: -12px;
          transition: transform 0.7s cubic-bezier(1,0.005,0.24,1);
    }

    .menu_toggle .menu_open{
          transform-origin: -100px -100px;
    }

    .menu_toggle .menu_close{
          transform:rotate(20deg);
          transform-origin: -100px -160px;
    }

    .menu_items{
          position: fixed;
          bottom: 0;
          left: 50px;
          list-stlye: none;
          margin: 0;
          padding: 0;
    }

    .menu_items li{
          height: 60px;
          margin-bottom: 30px;
          transform: translateX(-300px);
          transition: transition 0.7s 0s cubic-bezier(1,0.005,0.24,1);
    }

    .menu_items li: nth-child(2){
          margin-left; 40px;
    }

    .menu_items li: nth-child(3){
          margin-left; 80px;
    }

    .menu_items a{
          display: block;
          text-decoration: none;
          text-transform: uppercase;
          letter-spacing: 2px;
          color: #a4a4a4;
          transition: color 0.2s;
    }

    .menu_items a .icon{
          position: absolute;
          top: 50%;
          left: 50%;
          content: "";
          display: block;
          width: 60px;
          height: 60px;
          margin-left: -33px;
          margin-top: -32px;
          border-radius: 100%;
          border: 2px solid #f0f0f0;
          transition: border-color 0.2s;
    }

    .menu_items a: hover{
          color: #f0f0f0;
    }

    .menu_items a: hover .icon: after{
          border-color: #f37272;
    }

    .menu_items a: hover .icon{
          color: #f37272;
    }

    .real .content{
          transform: rotate(-30deg);
    }

    .real .menu_open{
          transform: rotate(-20deg);
    }

    .real .menu_close{
          transform: rotate(0);
    }

    .real .menu_items li{
          transform: translateX(0);
          transition: transform 0.35s 0.45s cubic-bezier(0.175,0.885,0.32,1.275);
    }

    .real .menu_items li: nth-child(2){
          transition-delay: 0.47s;
    }

    .real .menu_items li: nth-child(3){
          transition-delay: 0.48s;
    }

    h1{
          padding-bottom: 15px;
          border-bottom: 1px solid #ddd;
    }

    body{
          color: #584e4a;
    }

    .social i{
          font-size: 20px;
          background-color: #f37272;
          width: 40px;
          height: 40px;
          line-height: 40px;
          text-align: center;
          color: white;
          border-radius: 50px;
    }

</style>
<header>
<div class="page">
      <span class="menu_toggle">
          <i class="menu_open fa fa-bars fa-lg"></i>
          <i class="menu_open fa fa-times fa-lg"></i>
</div>

<ul class="menu_items">
      <li><a href=""><i class="fa fa-home fa-2x">
      </i>
      More</a>
      </li>

      <li><a href=""><i class="fa fa-phone fa-2x">
      </i>
      Coffee</a>
      </li>

      <li><a href=""><i class="fa fa-heart fa-2x">
      </i>
      Please</a>
      </li>
</ul>

<main class="content">
        <div class="content_inner">
            <h1>Amazing Design Ex</h1>
            <br><br><br>
            <div class="social">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
                <i class="fa fa-behance"></i>
                <i class="fa fa-youtube"></i>
            </div>
            <br><br>
            <p>Do <strong>not</strong> push the red button</p>

            <p> 123123123123123123123</p>
        </div>
</main>

<script>

      var $page = $(".page");

          $(".menu_toggle").on("click", function(){
              $page.toggleClass("real");

          });

          $(".content").on("click", function(){
              $page.removeClass("real");

          });

</script>
</header>


Header 2

<header class="sticky-top">

  <div class= "top_navbar_container">

      <?php wp_nav_menu(
            array(
                "theme_location" => "top-menu",
                "menu_class" => "navigation"
            )
        );?>

  </div>

</header>

<style>
header{
    background:#fff;
    width: 100%;
    height:100px;
}

.top_navbar_container{


}
<style>




test FP

<div style="width:100%; height:750px; background-color:green;">
  banner area
</div>

<div style="width:100%; height:400px; background-color:yellow;">
  youtube video, media link
</div>


<div style="width:100%; height:600px; background-color:red;">
  photo area
</div>

<div style="width:100%; height:600px; background-color:white;">
  shop aera
</div>


Header 3 work with no background

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<style>
    *{
          box-sizing: border-box;
          margin: 0;
          padding: 0;
    }


    header{
          font-family: tahoma;
          overflow: hidden;
    }

    .page{
          height: 100%;
          background-image: url("wp-content\gallery\aramat\The-Events-Calendar-_-WordPress.org-Google-Chrome-27_2_2019-10_28_26-AM.png");
          background-color: white;
    }


    .content{
          transform-origin: top left;
          transition: transform 0.7s cubic-bezier(1,0.005,0.24,1);
          background-color: #f0f0f0;
    }

    .content_inner{
          overflow-y: auto;
          height: 100%;
    }

    .menu_toggle{
          z-index: 900;
          position: fixed;
          top: 10;
          left: 0;
          display: block;
          cursor: pointer;
          width: 100px;
          height: 80px;
          background-color: black;
          border-bottom-right-radius: 100%;
    }

    .menu_toggle: active i{
          opacity: 0.8;
    }

    .menu_toggle i{
          color: #f0f0f0;
    }

    .menu_toggle .menu_open, .menu_toggle .menu_close{
          position: absolute;
          top: 50%;
          left: 50%;
          margin-top: -15px;
          margin-left: -12px;
          transition: transform 0.7s cubic-bezier(1,0.005,0.24,1);
    }

    .menu_toggle .menu_open{
          transform-origin: -100px -100px;
    }

    .menu_toggle .menu_close{
          transform:rotate(20deg);
          transform-origin: -100px -160px;
    }

    .menu_items{
          position: fixed;
          bottom: 0;
          left: 50px;
          list-stlye: none;
          margin: 0;
          padding: 0;
    }

    .menu_items li{
          height: 60px;
          margin-bottom: 30px;
          transform: translateX(-300px);
          transition: transition 0.7s 0s cubic-bezier(1,0.005,0.24,1);
    }

    .menu_items li: nth-child(2){
          margin-left; 40px;
    }

    .menu_items li: nth-child(3){
          margin-left; 80px;
    }

    .menu_items a{
          display: block;
          text-decoration: none;
          text-transform: uppercase;
          letter-spacing: 2px;
          color: black;
          transition: color 0.2s;
    }

    .menu_items a .icon{
          position: absolute;
          top: 50%;
          left: 50%;
          content: "";
          display: block;
          width: 60px;
          height: 60px;
          margin-left: -33px;
          margin-top: -32px;
          border-radius: 100%;
          border: 2px solid #f0f0f0;
          transition: border-color 0.2s;
    }

    .menu_items a: hover{
          color: #f0f0f0;
    }

    .menu_items a: hover .icon: after{
          border-color: #f37272;
    }

    .menu_items a: hover .icon{
          color: black;
    }

    .real .content{
          transform: rotate(-30deg);
    }

    .real .menu_open{
          transform: rotate(-20deg);
    }

    .real .menu_close{
          transform: rotate(0);
    }

    .real .menu_items li{
          transform: translateX(0);
          transition: transform 0.35s 0.45s cubic-bezier(0.175,0.885,0.32,1.275);
    }

    .real .menu_items li: nth-child(2){
          transition-delay: 0.47s;
    }

    .real .menu_items li: nth-child(3){
          transition-delay: 0.48s;
    }

    h1{
          padding-bottom: 15px;
          border-bottom: 1px solid #ddd;
    }

    body{
          color: #584e4a;
    }

    .social i{
          font-size: 20px;
          background-color: black;
          width: 40px;
          height: 40px;
          line-height: 40px;
          text-align: center;
          color: white;
          border-radius: 50px;
    }

</style>


<header>
<div class="page">
      <span class="menu_toggle">
          <i class="menu_open fa fa-bars fa-lg"></i>
          <i class="menu_close fa fa-times fa-lg"></i>
</div>

<ul class="menu_items">
      <li><a href="#song"><i class="fa fa-music fa-2x">
      </i>
      Song</a>
      </li>

      <li><a href="#event"><i class="fa fa-hand-spock-o fa-2x">
      </i>
      Event</a>
      </li>

      <li><a href="#gallery"><i class="fa fa-picture-o fa-2x">
      </i>
      Photo</a>
      </li>

      <li><a href="#shop"><i class="fa fa-gift fa-2x">
      </i>
      Shop</a>
      </li>
</ul>

<main class="content">
        <div class="content_inner">
                <img src="wp-content\gallery\aramat\The-Events-Calendar-_-WordPress.org-Google-Chrome-27_2_2019-10_28_26-AM.png" alt="band photo" width="100%">
        </div>
</main>

<script>

      var $page = $(".page");

          $(".menu_toggle").on("click", function(){
              $page.toggleClass("real");

          });

          $(".content").on("click", function(){
              $page.removeClass("real");

          });

</script>
</header>
