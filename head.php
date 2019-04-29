<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="slick/slick.css" />
    <link rel="stylesheet" href="slick/slick-theme.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <title>DMC</title>
  </head>

  <style>
    html,
    body {
      height: 100%;
      background-image: url("images/prism.png");
    }
    
    .carousel-item {
      height:74vh;
      min-height: 300px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      position: relative;
    }
    .carousel-item:after {
      content: "";
   
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
      background-image: url('images/sliderred.png');
      background-size: cover;
      background-repeat: no-repeat;
    }
    .card-img-top {
    max-height: 200px;
    min-height: 150px;
    object-fit: cover;
}
    .produits .card:hover {
      border: 2px solid red;
    }
   

    .parallax {
      /* The image used */
      background-image: url("images/parallax.jpg");

      /* Set a specific height */
      height: 500px;

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }
    .parallax:after {
      content: " ";
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0; /* Fill the entire space */
      background-color: rgba(0, 0, 0, 0.6);
    }

    
    .alpha {
      z-index: 2000;
    }
    .carousel-caption h2,
    .carousel-caption p {
      z-index: 2000;
    }
    .card-body{
      padding: 0;
     
    }
    
    
    .slider img{
      height: 70px;
    max-width: 100%;
    margin: 0 auto;
    }
    .fa-stack[data-count]:after{
  position:absolute;
  right:0%;
  top:1%;
  content: attr(data-count);
  font-size:30%;
  padding:.6em;
  border-radius:999px;
  line-height:.75em;
  color: white;
  background:rgba(255,0,0,.85);
  text-align:center;
  min-width:2em;
  font-weight:bold;
}
/*footer*/
.col_white_amrc { color:#FFF;}
footer { width:100%; min-height:250px; padding:10px 0px 25px 0px ;}
.pt2 { padding-top:40px ; margin-bottom:20px ;}
footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
.mb10 { padding-bottom:15px ;}
.footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
.footer_ul_amrc li {padding:0px 0px 5px 0px;}
.footer_ul_amrc li a{ color:#CCC;}
.footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
.fleft { float:left;}
.padding-right { padding-right:10px; }

.footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
.footer_ul2_amrc li p { display:table; }
.footer_ul2_amrc li a:hover { text-decoration:none;}
.footer_ul2_amrc li i { margin-top:5px;}

.bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
.foote_bottom_ul_amrc {
	list-style-type:none;
	padding:0px;
	display:table;
	margin-top: 10px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
}
.foote_bottom_ul_amrc li { display:inline;}
.foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

.social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
.social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
.social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li i {  width:20px; height:20px; text-align:center;}
/* end footer */


.nav-link{
  color: black !important;
}
.nav-link:hover{
  color:red !important;
}
.focusedInput:focus {
    border-color: rgba(255,0,0,.85);;
    outline: 0;
    outline: thin dotted \9;
    -moz-box-shadow: 0 0 8px rgba(255,0,0,.85);;
    box-shadow: 0 0 8px rgba(255,0,0,.85) !important;
}
#services{
  background-image: url('images/installation.jpg');
  background-repeat: no-repeat;
  background-size: cover;
}
#alphaServices{
  background:rgba(255, 0, 0, 0.719);
  background-size: cover;
  background-repeat: no-repeat;
}
.black{
  color: black;
}
#services a{
  text-decoration: none;
  color: white;
}
.dropdown-menu{
  margin: 0;
  padding: 0;
  border: none;
  border-radius: 0;
  background-color: #212529;
  
  height: 90vh;
}
.dropdown-menu h6{
color: black !important;
}
.qte{
  width: 40px;
   /* height: 55px;*/
    margin-top: 16px;
    color: #fff;
    border: none;
    background-color: #555;
    text-align: center;
    border-radius: 3px;
    float: right;
  }
  input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}

input[type=number] {
    -moz-appearance:textfield; /* Firefox */
}

  </style>
 


  <script type="text/javascript">
    function ajoutpannier(qteid){
      var quantite   = document.getElementById(qteid).value; 
      var envoi   = "fonctionSite.php?qteid="+qteid+"&quantite="+quantite;
      $.get(envoi);
      //alert(envoi); 
    }
  </script>


  <body>
    <!-- Image and text -->
