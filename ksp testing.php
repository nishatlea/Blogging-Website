<!DOCTYPE html>
<html lang="en">
<head>
<title>Kuet Sahitto Porishod</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
background-image: url("back5.jpg");


}


/* Style the header */
.header {
  background-image: url("back6.jpg");
  background-repeat: repeat-x;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}
p.dotted{border-style: dotted;}
#para1
{
 margin-top: 20px;
  margin-bottom: 20px;
  margin-right: 20px;
  margin-left: 20px;
}
.center {
  margin: 0px;
  border: 3px solid #73AD21;
 border-radius: 25px;
  padding: 10px;
}
p.normal {
  font-style: normal;
color: rgb(165,42,42);
}
span.a {
  display: inline; /* the default for span */
  width: 100px;
  height: 100px;
  padding: 5px;
  border: 1px solid blue;  
  background-color: yellow; 
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;

}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
#anm {
  width: 100px;
  height: 100px;
  background-color: red;
  position: relative;
  -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 10s; /* Safari 4.0 - 8.0 */
  animation-name: example;
  animation-duration: 4s;
animation-iteration-count: 500;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
  0%   {background-color:red; left:50px; top:0px;}
  25%  {background-color:yellow; left:250px; top:0px;}
  50%  {background-color:blue; left:450px; top:0px;}
  75%  {background-color:green; left:250px; top:0px;}
  100% {background-color:red; left:50px; top:0px;}
}

/* Standard syntax */
@keyframes example {
  0%   {background-color:red; left:50px; top:0px;}
  25%  {background-color:yellow; left:250px; top:0px;}
  50%  {background-color:blue; left:450px; top:0px;}
  75%  {background-color:green; left:250px; top:0px;}
  100% {background-color:red; left:50px; top:0px;}
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}





.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
text-color: blue;
}
</style>
</head>
<body>

<div class="header">
<div class="dropdown">
 <span> <h1>কুয়েট সাহিত্য পরিষদ</h1></span>
<div class="dropdown-content">
<p>কুয়েটিয়ানদের পক্ষ থেকে আপনাকে স্বাগতম </p>
</div>
</div>
</div>
<div class="topnav">

  <a href="http://www.onlinenewspapers.com">সংবাদপত্র</a>
  <a href="https://www.linkedin.com/in/nishat-anjum-lea-817873144">যোগাযোগ </a>
  <a href="https://www.rokomari.com/book
">বইয়ের অর্ডার </a>
<a href="onubad_kobita.php
">অনুবাদ কবিতা  </a>


</div>

<div class="row">
  <div class="column side">
    <h2 >শেষ হল খুলনা বই মেলা  </h2>
    <p >শেষ হলো লেখক-সাহিত্যিক, কবি আর বই প্রেমিকদের মিলন মেলা খুলনার একুশে বইমেলা। তবে সমাপনী অনুষ্ঠান হলো অনেকটা সাদামাটাভাবে। শেষ দিন ছিল মেলায় দর্শনার্থীদের উপচে পড়া ভিড়। তারপরও স্টল মালিকদের কেউ কেউ হিসাব নিকাশ করে লাভের মুখ দেখতে পারছেন না বলে জানান। এ জন্য মেলা কমিটির প্রচার-প্রচারণা না থাকাকে তারা দায়ি করেছেন।<br>

মেলার আছিয়া বুক ডিপোর প্রতিনিধি কেএম তুহিন বাবু জানান, বিগত দিনের চেয়ে এবার মেলায় বই বিক্রি বেশি হয়েছে। পুরো মেলার সময় পরিবেশটাও ছিল ভাল। সবশ্রেণির দর্শনার্থী মেলা মাঠে দেখা যায়। শেষ দিন বিক্রি ছিল দ্বিগুণ। তবে মেলার সময় বাড়ানোর জন্য যে দাবি করা হয়েছিল জেলা প্রশাসক তা নাকচ করে দিয়েছেন। কমার্স বুক ডিপোর প্রতিনিধি শাহিন বাশার জানান, মেলার শেষ দিন যে পরিমাণ দর্শনাথী এসেছে তাতে স্টল মালিকরা বেজায় খুশি। প্রতিদিন মেলায় এভাবে দর্শনার্থী আসলে স্টল মালিকার লাভবান হতো। বাংলাদেশ পুস্তক ও বিক্রেতা সমিতির সভাপতি মো. আলমগীর জানান, মেলার সময় বাড়ানোর প্রস্তাব ডিসি নাকচ করে দিয়েছেন। প্রধানমন্ত্রীর আগমনের কারণে তিনি তাদের আবেদন রাখতে পারেননি। এছাড়া বিগত দিনের চেয়ে এবার মেলার পরিবেশ খুব ভাল ছিল। সারা মাসই এত সুন্দর পরিবেশ মেলা কমিটি বিগত দিনে পায়নি। সব মিলিয়ে মেলার সার্বিক অবস্থা সন্তোষজনক ছিল বলে তিনি দাবি করেন। কবি ও সাহিত্যিক আইনুল পারভেজ বলেন, একুশের বই মেলা মঞ্চের অনুষ্ঠানগুলো ভাষা দিবসের গুরুত্ব বহন করে হয়নি। ভাষা দিবস অর্থ শোকের মাস। ভাষার মাসে মেলা মঞ্চে আনন্দ ফুর্তি করা ঠিক নয়। ভাষা শহীদদের স্মরণ রেখে দেশাত্মবোধক গান নিয়মিত  পরিবেশন করা উচিত ছিল বলে তিনি মনে করেন। একুশের আলো খুলনার পরিচালক মাহবুবুল হক বলেন, বুধবার শেষ দিন তাদের টার্গেটের তুলনায় বেশি রক্তের শ্রেণি নির্ণয় কার্যক্রম করা হয়। মেলায় দর্শক সমাগম ছিল চোখে পড়ার মত। খুলনা বুক ডিপোর প্রোপ্রাইটার কেএম আলতাপ হোসেন বলেন, গত বছরের চেয়ে এবার বেচাবিক্রি কম হয়েছে। মেলায় দর্শনার্থী বেশি আসলেও ক্রেতা ছিল কম। এ জন্য মেলা কমিটির প্রচার প্রচারণা না থাকাকে দায়ি করেন তিনি। তিনি বলেন, আাগামী বছর স্টল কমিটি মেলার প্রচারণার দায়িত্ব নেবেন। মূল কমিটির ব্যর্থতার জন্য তারা এ দায়িত্ব নিতে চান বলে জানান। এছাড়া বিগত বছরে সমাপনী অনুষ্ঠানে আমন্ত্রণ জানানো হয় মেলা কমিটির সদস্যসহ কবি সাহিত্যিক আর লেখকদের। কিন্তু এবার তার কোনটাই করা হয়নি। জেলা প্রশাসন আর লাইব্রেরিয়ান নিজস্ব ভাবে সমাপনী অনুষ্ঠান শেষ করেন।</p>
 <br>
<div class="dropdown">
  <button class="dropbtn">কুয়েটিয়ানদের লেখা </button>
  <div class="dropdown-content">
  <a href="golpo.php">গল্প </a>
  <a href="kobita.php">কবিতা </a>
  <a href="rommo.php">রম্য রচনা  </a>
  <a href="test4.php">সদস্য লগ ইন  </a>
  </div>
</div>
<br>
<div class="dropdown">
  <button class="dropbtn">সদস্য হবার ফর্ম  </button>
  <div class="dropdown-content">
  <a href="http://localhost/newproject/sodosso%20form.php">ফর্ম  </a>
  
  </div>
</div>
<br>

 </div>
  <div class="column middle">
<?php
echo "<u> তারিখ  :  ".date("Y.m.d")."( ইংরেজি সন  )<br> </u>";
?>

<center>

<p></p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="kobi.jpg" width="600" height="300">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="kobi2.jpg" width="600" height="300">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="kobi3.jpg" width="600" height="300">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<center>








    <h2>প্রয়াত কবি আল মাহমুদের জীবন সংক্ষেপ </h2>
<p>মীর আবদুস শুকুর আল মাহমুদ (১১ জুলাই ১৯৩৬ – ১৫ ফেব্রুয়ারি ২০১৯) যিনি আল মাহমুদ নামে অধিক পরিচিত, ছিলেন আধুনিক বাংলা সাহিত্যের অন্যতম প্রধান কবি। তিনি একাধারে কবি, ঔপন্যাসিক, প্রাবন্ধিক, ছোটগল্প লেখক, শিশুসাহিত্যিক এবং সাংবাদিক ছিলেন। বিংশ শতাব্দীর দ্বিতীয়াংশে সক্রিয় থেকে তিনি আধুনিক বাংলা কবিতাকে নতুন আঙ্গিকে, চেতনায় ও বাক্‌ভঙ্গীতে বিশেষভাবে সমৃদ্ধ করেছেন। ১৯৭১ সালে বাংলাদেশের স্বাধীনতা যুদ্ধে অংশ নিয়েছেন প্রবাসী সরকারের দায়িত্ব পালনের মধ্য দিয়ে ।তিনি বাংলাদেশের স্বাধীনতা-পরবর্তীকালে প্রতিষ্ঠিত সরকার বিরোধী সংবাদপত্র দৈনিক গণকণ্ঠ (১৯৭২-১৯৭৪) পত্রিকার সম্পাদক ছিলেন।

১৯৫০-এর দশকে যে কয়েকজন লেখক বাংলা ভাষা আন্দোলন, জাতীয়তাবাদ, রাজনীতি, অর্থনৈতিক নিপীড়ন এবং পশ্চিম পাকিস্তানি সরকার বিরোধী আন্দোলন নিয়ে লিখেছেন তাদের মধ্যে মাহমুদ একজন।লোক লোকান্তর (১৯৬৩), কালের কলস (১৯৬৬), সোনালী কাবিন (১৯৭৩), মায়াবী পর্দা দুলে ওঠো ইত্যাদি তাঁর উল্লেখযোগ্য কাব্যগ্রন্থ। কবি আল মাহমুদ তাঁর অনবদ্য গল্প ও উপন্যাসের জন্যও খ্যতি অর্জন করেছিলেন। 
</p>

<h2>বাংলা সাহিত্যের দিকপালসমূহের আলোকচিত্র </h2>
<div class="gallery">
  <a target="_blank" href="robi.jpg">
    <img src="robi.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">রবীন্দ্রনাথ ঠাকুর </div>
</div>

<div class="gallery">
  <a target="_blank" href="hm.jpg">
    <img src="hm.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">হুমায়ূন আহমেদ </div>
</div>

<div class="gallery">
  <a target="_blank" href="kaji.jpg">
    <img src="kaji.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">কাজী নজ্রুল ইসলাম </div>
</div>

<div class="gallery">
  <a target="_blank" href="sm.jpg">
    <img src="sm.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">শীর্ষেন্দু মুখোপধ্যায় </div>


<br>
<br>
<br>

<div id="anm">ধন্যবাদ </div>


</div>
 </div>

  <div class="column side">
      <p class="dotted" >
    <h2>ওয়েবসাইট পরিচিতি </h2>
<p >    বাংলাদেশের শীর্ষস্থানীয় প্রকৌশল বিশ্ববিদ্যালয় খুলনা ইউনিভার্সিটি অব ইঞ্জিনিয়ারিং এন্ড টেকনোলজির শিক্ষার্থীদের পড়ালেখার পাশাপাশি সাহিত্য চর্চার জন্য অনুকূল পরিবেশ তৈরির লক্ষ্যে কুয়েট সাহিত্য পরিষদ গড়ে তোলা হয়েছে  । <br>এই ওয়েবসাইটটির মাধ্যমে কুয়েটে সাহিত্য চর্চার বিভিন্ন দিক যেমন সবার সামনে তুলে 
ধরা হবে তেমনি সাহিত্যের নানা দিক নিয়ে আলোচনা করা হবে। শিক্ষার্থীদের লেখাগুলো এই ওয়েবসাইটে প্রকাশিত হবে ।পাশাপাশি বিভিন্ন বইয়ের পিডিএফ ,বই রিভিউ এবং সাহিত্য আড্ডার ও আয়োজন করা হবে ।
</p>
</p>
  </div>
<div class="column side"> 
<div class="center">
<h3 id="para1";><span class="a"> <u>বই রিভিউ </u> </h3>
বই - চাঁদের পাহাড়<br>
লেখক - বিভূতিভূষণ বন্দ্যোপাধ্যায়</span><br>
<p class="normal">
চাঁদের পাহাড়-এর কাহিনী এক বাঙালি অভিযাত্রীকের ওপর ভিত্তি করে গড়ে উঠেছে, যে ১৯০৯-১৯১০ সাল নাগাদ আফ্রিকা যায়। শঙ্কর রায় চৌধুরী, এই চলচ্চিত্রের নায়ক, গ্র্যাজুয়েশন করার পর পাটকলে চাকরি পায়। কিন্তু সে রোমাঞ্চ খোঁজে। সে আফ্রিকার দুর্গম স্থানে যেতে চায়।

অবশেষে তার গ্রামের এক অধিবাসী, যে আফ্রিকায় কাজ করে, তার সহায়তায় সে আফ্রিকায় ক্লার্ক হিসেবে কাজ পায় এবং উগান্ডা রেলওয়েতে চাকরি পায়। কিন্তু সেখানে মানুষখেকো সিংহ, প্রথম বিশ্বযুদ্ধ-এর আগের সমস্যা থাকে। ইতিমধ্যে সিংহের সাথে তার যুদ্ধ হয়। এছাড়াও এখানে ব্ল্যাক মাম্বা সাপের আক্রমণ হয়। এখানেই সে পর্তুগিজ অভিযাত্রীক ও স্বর্ণসন্ধানী ডিয়েগো আলভারেজ-এর দেখা পায়। আলভারেজ তাকে তার সময়ের ঘটনা বলে। সে এবং তার সঙ্গী জিম কার্টার পৃথিবীর সবচেয়ে বড় হীরক খনির সন্ধান পায়। কিন্তু ভয়ংকর জন্তু বুনিপ জিমকে মেরে ফেলে এবং আলভারেজ ফিরে আসতে বাধ্য হয়।

সব শুনে শঙ্কর ক্লার্কের চাকরি ছেড়ে দিয়ে আলভারেজের সাথে খনি অনুসন্ধানে বের হয়। তারা ঘন জঙ্গলে প্রবেশ করে। পথে তাদের অবর্ণনীয় অসুবিধা হয়। জ্বলন্ত আগ্নেয়গিরি তাদের পথে বিরাট বাধা হয়ে দাঁড়ায়। এক পর্যায়ে আলভারেজকেও সেই বুনিপ মেরে ফেলে। শঙ্কর একা হয়ে পড়ে।

সে সত্যতার খোঁজে বের হয়। সে বুনিপের গুহা খুঁজে পায়। সে নিজের অজান্তেই হীরকের খনি খুঁজে পায়। সেই গুহায় সে পথ হারিয়ে ফেলে। এক পর্যায়ে কিছু পাথরের সহায়তায় সে গুহা থেকে বের হতে সক্ষম হয়। সে সাথে করে কিছু পাথর নিয়ে আসে। আসলে সেই পাথরগুলো আর কিছুই নয়, কাঁচা হীরা। সে ইতালীয় অভিযাত্রীক আত্তিলীয় গাত্তির নোট থেকে জানতে পারে, আসলে সে যেই গুহায় পৌছেছিল, সেই গুহায়ই বিখ্যাত হীরক খনি, যার জন্য জন ও আলভারেজ তাদের জীবন হারিয়েছে।

কিন্তু সে ততক্ষণে কালাহারি মরুভূমিতে পথ হারিয়েছে। নিজের প্রাণ বাঁচানোই তখন দুষ্কর। মরুভূমিতে সে জলের অভাবে প্রায় মৃত্যুবরণ করেছিল। তার মাথার উপর শকুনেরা ঘোরাফেরা শুরু করে। পথে সিংহের সাথে তার যুদ্ধ হয়। অবশেষে এক সার্ভে টিম তাকে খুঁজে পায় এবং মুমূর্ষু অবস্থায় সলসবেরি, রোডেশিয়ায় নিয়ে গিয়ে বাঁচায়।

শঙ্কর বইয়ের শেষে বলে যে সে আবার বড় দল নিয়ে এসে এই হীরক খনির সন্ধান করবে, যার জন্য আলভারেজ, কার্টার ও আত্তিলীয় জীবন দিয়েছে।
</p>
</div>
</div>
</div>
</div>
<div>
<i class="fas fa-cloud"></i>
<i class="fas fa-heart"></i>
<i class="fas fa-car"></i>
<i class="fas fa-file"></i>
<i class="fas fa-bars"></i>
<i class="fas fa-cloud" style="font-size:24px;"></i>
<i class="fas fa-cloud" style="font-size:36px;"></i>
<i class="fas fa-cloud" style="font-size:48px;color:red;"></i>
<i class="fas fa-cloud" style="font-size:60px;color:lightblue;"></i>
</div>
<div class="footer">
  <p>created by nishat@1607009</p>
</div>
  
</body>
</html>
