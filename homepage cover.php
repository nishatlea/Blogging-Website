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
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
text-color: blue;
}
</style>
</head>
</html>