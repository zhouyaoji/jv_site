<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<html><!-- xmlns="http://www.w3.org/1999/xhtml"> -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="public relations and marketing for events and products"/>
  <meta name="keywords" content="concerts,shows,events,art,galleries,products,venue,marketing,pr,public relations, Julie Vano, Jules Vano, Vano"/>
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.0r4/build/fonts/fonts-min.css" />
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.0r4/build/container/assets/skins/sam/container.css" />

  <?php include("css/style.css"); ?>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <link type="text/css" href="../js/css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="Stylesheet" />	
  <script type="text/javascript" src="../js/js/jquery-1.3.2.min.js"></script>
   <script type="text/javascript" src="../js/js/jquery-ui-1.7.2.custom.min.js"></script>

</head>
<body class="yui-skin-sam">
  </script>
<?php //include("html/header.inc"); ?>
<div id='header'>
<object width="600" height="100">
<param name="movie" value="flash/jules_vano_banner.swf">
<embed src="flash/jules_vano_banner.swf" width="600" height="100">
</embed>
</object>
</div>
<div id='main'>
  <div id='nav'>
    <div id='menu'>
      <div id='home'><span id='home_link'>HOME</span></div>
      <p class='menu_separator'>|</p>
      <div id='clients'><span id='clients_link'>CLIENTS</span></div>
      <p class='menu_separator'>|</p>
      <div id='events'><span id='events_link'>EVENTS</span></div>
      <p class='menu_separator'>|</p>
      <div id='contact'><span id='contact_link'>CONTACT</span></div>
      <p class='menu_separator'>|</p>
      <div id='about'><span id='about_link'>ABOUT</span></div>
    </div>
  </div>
 <div id='main_body'>
   <div id='image_container'>
   <img src='images/image01.jpg' width='300px' height='310px'/>
   </div>
   <div id='body_text'>
     Body text
   </div>
   <div id='contact_form'>
    <?php include("html/form.inc"); ?>
   </div>
</div>
<?php //include("html/content.inc"); ?>
<?php //include("footer.inc"); ?>
<script type='text/javascript'>
  // Set text, images, and selected flag.
 init=0;
  function initialize(){
    if(init==0)
    {
      $("#nav div span").css({"color":"white"});
      $("#nav div span").hover(function(){
        $(this).css({ "background-color":"black","text-decoration":"underline"});
        },
        function(){
        $(this).css({"background-color":"transparent","text-decoration":"none"});
      });
      $("#home span").css({ "text-decoration":"none", "color": "black" });
      $("#home span").hover(function(){
        $("#home span").css({ "background-color":"transparent","text-decoration":"none"});
      });
    }else{
     $("#home span").hover(function(){
        $("#home span").css({ "background-color":"black","text-decoration":"underline"});
      });
   }
      init++;
  }
  var current_img = "home_link";
  var contacts_txt = "<?php echo str_replace("\n","",file_get_contents("html/form.html")); ?>";
  var about_txt = "<?php echo str_replace("\n","",file_get_contents("html/about.inc")); ?>";
  var home = { "txt":"Home body", "img": "images/image_01.jpg", "selected":true};
  var contact = { "txt": contacts_txt, "img": "images/image_02.jpg", "selected":false};
  var events = { "txt": "Events body", "img":"images/image_03.jpg", "selected":false};
  var about = { "txt": about_txt,"img":"images/image_04.jpg", "selected":false};
  var clients = { "txt":"Clients body", "img": "images/image_05.jpg", "selected":false};
  // Save each object to another object for references
  var content_containers = { "home_link": home,
                        "contact_link": contact,
                        "events_link": events,
                        "about_link":about,
                        "clients_link": clients };

  initialize(); 
  $('#nav div span').click(function(){
    var info = this.id;
    $("#nav div span").css("color","white"); 
  // Set up links 
    $("#nav div span").hover(function(){
      $(this).css({ "text-decoration":"underline","background-color":"black"});
    },
    function(){
      $("#nav div span").css({"background-color":"transparent","text-decoration":"none"});
   });
  $("#"+info).css("color","black");
  $("#"+info).css("text-decoration","none");
  $("#"+info).hover(function(){
    $(this).css({ "text-decoration":"none","background-color":"transparent"});
  });
  if(info=="contact_link"){
    $("#contact_form").css("display","block");
    $("#body_text").css("display","none");
  }else{
    $("#contact_form").css("display","none");
    $("#body_text").css("display","block");
    $("#body_text").html(content_containers[info].txt);
 }
 if(!content_containers[info].selected){
    $("#image_container img").fadeOut(500,function(){
       content_containers[info].selected=true;
       content_containers[current_img].selected=false;
       current_img=info;
       $("#image_container img").attr("src",content_containers[info].img);
    });
   setTimeout(function(){$("#image_container img").fadeIn(500);},500);
  }
});
 </script>
  <?php include("js/form.js"); ?>
</body>
</html>
