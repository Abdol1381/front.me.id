<?php
include_once 'inc/config.php';
include_once 'inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Document</title>
  <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
<!-- style  -->
<style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,500,600,700|Chivo:300,400,700,700i,900");
   .wow:first-child {
       /* visibility: hidden; */
     }
 
          @media (max-width: 800px){
   .con-warn{
     color: red;
     display: block!important;
   }
   .converter {
     display: none!important;
   }
   
  }
 /********************** Custom Button Styling ************************/
 .blood-button {
   /***-webkit-box-flex: 1;
       -ms-flex: 1 1 auto;
           flex: 1 1 auto;***/
   padding: 10px 20px;
   border: 2px solid #6a3433;
   text-align: center;
   text-transform: uppercase;
   position: relative;
   overflow: hidden;
   -webkit-transition: .3s;
   transition: .3s;
   text-decoration: none !important;
   margin-top: 10px;
   white-space: nowrap !important;
   color: #6a3433;
 }
 @media (hover) {
 .blood-button:after {
   position: absolute;
   -webkit-transition: .3s;
   transition: .3s;
   content: '';
   width: 0;
   left: 50%;
   bottom: 0;
   height: 3px;
   background: #6a3433;
   color: #6a3433;
 }
 
 .blood-button:hover:after {
   width: 100%;
   left: 0;
 
 }
 }
 .blood-button-solid {
   /***-webkit-box-flex: 1;
       -ms-flex: 1 1 auto;
           flex: 1 1 auto;***/
   padding: 10px 20px;
   border: 2px solid #6a3433;
   text-align: center;
   text-transform: uppercase;
   position: relative;
   overflow: hidden;
   -webkit-transition: .3s;
   transition: .3s;
   text-decoration: none !important;
   margin-top: 10px;
   background: #6a3433;
   color: #fff !important;
 }
 @media (hover) {
 .blood-button-solid:after {
   position: absolute;
   -webkit-transition: .3s;
   transition: .3s;
   content: '';
   width: 0;
   left: 50%;
   bottom: 0;
   height: 3px;
   background: #6a3433;
 }
 
 .blood-button-solid:hover {
   background: #fff;
   color: #6a3433 !important;
 }
 .blood-button-solid:hover:after {
   width: 100%;
   left: 0;
 }
 } 
 
 
 .red-button {
   /***-webkit-box-flex: 1;
       -ms-flex: 1 1 auto;
           flex: 1 1 auto;***/
   padding: 10px 20px;
   border: 2px solid #CC1632;
   text-align: center;
   text-transform: uppercase;
   position: relative;
   overflow: hidden;
   -webkit-transition: .3s;
   transition: .3s;
   text-decoration: none !important;
   margin-top: 10px;
   white-space: nowrap !important;
   color: #CC1632;
 }
 @media (hover) {
 .red-button:after {
   position: absolute;
   -webkit-transition: .3s;
   transition: .3s;
   content: '';
   width: 0;
   left: 50%;
   bottom: 0;
   height: 3px;
   background: #CC1632;
   color: #CC1632;
 }
 
 .red-button:hover:after {
   width: 100%;
   left: 0;
 
 }
 }
 .red-button-solid {
   /***-webkit-box-flex: 1;
       -ms-flex: 1 1 auto;
           flex: 1 1 auto;***/
   padding: 10px 20px;
   border: 2px solid #CC1632;
   text-align: center;
   text-transform: uppercase;
   position: relative;
   overflow: hidden;
   -webkit-transition: .3s;
   transition: .3s;
   text-decoration: none !important;
   margin-top: 10px;
   background: #CC1632;
   color: #fff !important;
 }
 @media (hover) {
 .red-button-solid:after {
   position: absolute;
   -webkit-transition: .3s;
   transition: .3s;
   content: '';
   width: 0;
   left: 50%;
   bottom: 0;
   height: 3px;
   background: #CC1632;
 }
 
 .red-button-solid:hover {
   background: #fff;
   color: #CC1632 !important;
 }
 .red-button-solid:hover:after {
   width: 100%;
   left: 0;
 }
 }   
 
 .gold-button {
   /***-webkit-box-flex: 1;
       -ms-flex: 1 1 auto;
           flex: 1 1 auto;***/
   padding: 10px 20px;
   border: 2px solid #efd777;
   text-align: center;
   text-transform: uppercase;
   position: relative;
   overflow: hidden;
   -webkit-transition: .3s;
   transition: .3s;
   text-decoration: none !important;
   margin-top: 10px;
   white-space: nowrap !important;
   color: #efd777;
 }
 @media (hover) {
 .gold-button:after {
   position: absolute;
   -webkit-transition: .3s;
   transition: .3s;
   content: '';
   width: 0;
   left: 50%;
   bottom: 0;
   height: 3px;
   background: #efd777;
   color: #efd777;
 }
 
 .gold-button:hover:after {
   width: 100%;
   left: 0;
 
 }
 }
 .gold-button-solid {
   /***-webkit-box-flex: 1;
       -ms-flex: 1 1 auto;
           flex: 1 1 auto;***/
   padding: 10px 20px;
   border: 2px solid #efd777;
   text-align: center;
   text-transform: uppercase;
   position: relative;
   overflow: hidden;
   -webkit-transition: .3s;
   transition: .3s;
   text-decoration: none !important;
   margin-top: 10px;
   background: #041e37;
   color: #fff !important;
   border-radius: 5px;
 }
 @media (hover) {
 .gold-button-solid:after {
   position: absolute;
   -webkit-transition: .3s;
   transition: .3s;
   content: '';
   width: 0;
   left: 50%;
   bottom: 0;
   height: 3px;
   background: #efd777;
 }
 
 .gold-button-solid:hover {
   border: 2px solid #041e37;
   background: transparent;
   color: #fff !important;
 }
 .gold-button-solid:hover:after {
   width: 100%;
   left: 0;
 }
 }
 
 .blue-button {
   /***-webkit-box-flex: 1;
       -ms-flex: 1 1 auto;
           flex: 1 1 auto;***/
   padding: 10px 20px;
   border: 2px solid #016696;
   text-align: center;
   text-transform: uppercase;
   position: relative;
   overflow: hidden;
   -webkit-transition: .3s;
   transition: .3s;
   text-decoration: none !important;
   margin-top: 10px;
   white-space: nowrap !important;
   color: #016696;
 }
 @media (hover) {
 .blue-button:after {
   position: absolute;
   -webkit-transition: .3s;
   transition: .3s;
   content: '';
   width: 0;
   left: 50%;
   bottom: 0;
   height: 3px;
   background: #016696;
   color: #016696;
 }
 
 .blue-button:hover:after {
   width: 100%;
   left: 0;
 
 }
 }
 .blue-button-solid {
   /***-webkit-box-flex: 1;
       -ms-flex: 1 1 auto;
           flex: 1 1 auto;***/
   padding: 10px 20px;
   border: 2px solid #016696;
   text-align: center;
   text-transform: uppercase;
   position: relative;
   overflow: hidden;
   -webkit-transition: .3s;
   transition: .3s;
   text-decoration: none !important;
   margin-top: 10px;
   background: #016696;
   color: #fff !important;
 }
 @media (hover) {
 .blue-button-solid:after {
   position: absolute;
   -webkit-transition: .3s;
   transition: .3s;
   content: '';
   width: 0;
   left: 50%;
   bottom: 0;
   height: 3px;
   background: #016696;
 }
 
 .blue-button-solid:hover {
   background: #fff;
   color: #016696 !important;
 }
 .blue-button-solid:hover:after {
   width: 100%;
   left: 0;
 }
 }  
 
 .lemon-button {
   /***-webkit-box-flex: 1;
       -ms-flex: 1 1 auto;
           flex: 1 1 auto;***/
   padding: 10px 20px;
   border: 2px solid #8DC63F;
   text-align: center;
   text-transform: uppercase;
   position: relative;
   overflow: hidden;
   -webkit-transition: .3s;
   transition: .3s;
   text-decoration: none !important;
   margin-top: 10px;
   white-space: nowrap !important;
   color: #8DC63F;
 }
 @media (hover) {
 .lemon-button:after {
   position: absolute;
   -webkit-transition: .3s;
   transition: .3s;
   content: '';
   width: 0;
   left: 50%;
   bottom: 0;
   height: 3px;
   background: #8DC63F;
   color: #8DC63F;
 }
 
 .lemon-button:hover:after {
   width: 100%;
   left: 0;
 
 }
 }
 .lemon-button-solid {
   /***-webkit-box-flex: 1;
       -ms-flex: 1 1 auto;
           flex: 1 1 auto;***/
   padding: 10px 20px;
   border: 2px solid #8DC63F;
   text-align: center;
   text-transform: uppercase;
   position: relative;
   overflow: hidden;
   -webkit-transition: .3s;
   transition: .3s;
   text-decoration: none !important;
   margin-top: 10px;
   background: #8DC63F;
   color: #fff !important;
 }
 @media (hover) {
 .lemon-button-solid:after {
   position: absolute;
   -webkit-transition: .3s;
   transition: .3s;
   content: '';
   width: 0;
   left: 50%;
   bottom: 0;
   height: 3px;
   background: #8DC63F;
 }
 
 .lemon-button-solid:hover {
   background: #fff;
   color: #8DC63F !important;
 }
 .lemon-button-solid:hover:after {
   width: 100%;
   left: 0;
 }
 }
 
 .amk_pBlock{
   background: #062b1f;
   border-radius: 15px;
   overflow: hidden;
   text-align: center;
   margin-bottom: 20px;
 }
 
 .amk_pTitle h3{
   color: #e9d16f;
   line-height: 63px;
   font-size: 18px!important;
   font-weight: 300!important;
   font-family: 'Roboto Slab';
 }
 
 .amk_pBlock .amk_pBox h4 {
 
     font-size: 45px;
     font-weight: 400;
     color: #e9d16f;
     margin: 20px 0 10px;
     font-family: 'Roboto Slab';
 
 }
  .amk_pBlock .amk_pBox h5 {
 
     font-size: 18px;
     font-weight: 400;
     color: #e9d16f;
     text-decoration: underline;
     text-transform: uppercase;
     font-family: 'Roboto Slab';
 }
 
  .amk_pBlock .amk_pBox ul {
 
     font-size: 17px;
     font-weight: 300;
     color: #FFF;
     line-height: 30px;
     margin: 10px 0 25px;
     font-family: 'Roboto Slab';
 }
 
  .amk_pBlock .amk_pBox .amk_btn2 {
    text-decoration: none;
     background: #e9d16f;
     font-size: 20px;
     font-weight: 700;
     color: #041e37;
     text-transform: uppercase;
     display: inline-block;
     width: 154px;
     height: 47px;
     line-height: 47px;
     border: 1px solid #7e7d55;
     border-radius: 5px;
     font-family: 'Roboto Slab';
 }
 
 .amk_btn2 {
 text-decoration: none;
     background: #e9d16f;
     font-size: 20px;
     color: #041e37;
     text-transform: uppercase;
     display: inline-block;
     width: 154px;
     height: 47px;
     line-height: 47px;
     border: 1px solid #e9d16f;
     border-radius: 5px;
     font-family: 'Roboto Slab';
     text-align: center;
 }
 
 #amk_benefits  h3 {
 
     /*font-size: 28px;*/
     font-weight: 700;
     color: #041e37;
     font-family: 'Roboto';
     text-align: center;
 }
 
 #amk_benefits  p {
 
     font-size: 16px;
     font-weight: 300;
     color: #3d4c58;
     text-align: center!important;
     font-family: 'Roboto';
     line-height: 1.5;
     margin-top: 1.5rem;
 }
 
 #amk_footer{
   margin-bottom: 20px;
   padding: 0px 40px;
 }
 
 #amk_footer h3::after {
 
     content: "";
     display: block;
     background: #e9d16f;
     height: 4px;
     width: 98px;
     margin: 15px 0 0;
 
 }
 
 #amk_footer h3 {
 
     font-size: 25px;
     font-weight: 700;
     color: #f2da7b;
     line-height: 27px;
     text-transform: uppercase;
     margin: 0 0 38px;
     font-family: 'Roboto Slab';
     text-align: left!important;
 }
 
 .amk_fBox2 ul {
 
     font-size: 13px;
     font-weight: 700;
     color: #FFF;
     text-transform: uppercase;
     font-family: 'Roboto Slab';
 
 }
 
 .amk_fBox2 ul li:nth-child(2n+1) {
     float: left;
 }
 .amk_fBox2 ul li {
     width: auto;
     height: 34px;
     line-height: 35px;
 
 }
 .amk_fBox2 ul li a {
 
     color: #FFF;
     padding-left: 22px;
 
 }
 .amk_fBox2 ul li:nth-child(2n) {
     float: right;
 }
 
 .amk_fBox3 ul li {
 
     font-weight: 700;
     text-transform: uppercase;
     margin: 0 0 18px;
     font-family: 'Roboto Slab', sans-serif;
 }
 
 .amk_fBox3 ul li h4 {
 
     font-size: 12px;
     color: #e9d16f;
     text-decoration: underline;
      font-family: 'Roboto Slab', sans-serif;
 
 }
 .amk_fBox3 ul li p {
     font-size: 12px;
     color: #FFF;
     line-height: 20px;
      font-family: 'Roboto Slab', sans-serif;
 }
 
 
 
 #amk_footis h3 {
 
     font-size: 25px;
     font-weight: 700;
     color: #041e37;
     line-height: 27px;
     text-transform: uppercase;
     margin: 0 0 38px;
     font-family: 'Roboto Slab';
     text-align: center;!important;
 }
 
 
 .p-say{
   border: 3px solid #ff0000!important;
 height: 100px!important;
 width: 100px!important;
 }
 
 .p-say2{
   border: 1px solid #ccc!important;
 height: 100px!important;
 width: 100px!important;
 }
 
 .p-say2:hover{
   border: 1px solid #ff0000!important;
 }
 
  .slider {
         width: 50%;
         margin: 100px auto;
     }
 
     .slick-slide {
       margin: 0px 20px;
     }
 
     .slick-slide img {
       width: 100%;
     }
 
     .slick-prev:before,
     .slick-next:before {
       color: black;
     }
 
 
     .slick-slide {
       transition: all ease-in-out .3s;
       /*opacity: .2;*/
     }
     
     .slick-active {
       /*opacity: .5;*/
     }
 
     .slick-current {
       /*opacity: 1;*/
     }
 
 .kis{
   max-width: 100%;
   height: auto;
   vertical-align: middle;
 }
 
 .kis2{
   text-align: center;
   font-weight: bold;
 }
 
 .kis3{
   padding: 15px;
     transition: .5s;
     margin-bottom: 20px;
     background: #3498db;
     border: 1px solid #3498db;
     text-align: center;
     background: #ea0117;
     border: 1px solid #ea0117;
     color: #fff;
 }
 
 .service-wrapper{
     padding: 30px;
     transition: .5s;
     margin-bottom: 20px;
     text-align: center;
 }
 
 /*.ser-title{
   color: #fff;
 }
 
 .ser-title:hover{
   color: #ea0117!important;
 }*/
 
 .kis3:hover{
  background: #fff;
  color: #ea0117!important;
   
 }
 
 .kis4{
   padding-top: 5px;
 
     margin-bottom: 20px;
     background: #3498db;
     border: 1px solid #3498db;
     text-align: center;
     background: #ea0117;
     border: 1px solid #ea0117;
     color: #fff;
     padding-bottom: 20px;
 
 }
 
 .kis4, .service-icon1:hover{
   background-color: #ea0117;
   color: #fff;
   border: 1px solid #ea0117;
   transition-property: all;
    transition-timing-function: ease-in-out;
    transition-delay: .5s;
    transition-duration: .5s;
 }
 
 .service-icon1{
   padding-top: 20px;
   padding-left: 10px;
   padding-right: 10px;
   background-color: #fff;
   color:#333;
   letter-spacing: .12em;
   border: 1px solid #fff;
   font-family: Montserrat, sans-serif;
 }
 
 .ser-title2{
   border-bottom: 1px solid #ea0117;
   padding-bottom: 4px
 }
 
 .ser-title3{
 
   margin-bottom: 10px;
 font-size: 50px;
 font-weight: 1800;
 transition: ease-out .5s;
 }
 
 .counter-thumb{
   background-color: #ea0117;
 border: 5px solid #ea0117;
 width: 150px;
 height: 150px;
 border-radius: 100%;
 -moz-border-radius: 100%;
 -webkit-border-radius: 100%;
 line-height: 30px;
 margin: 0 auto;
 padding: 30px 0px;
 }
 
 .p-say{
   border: 1px solid #3498db;
 border-radius: 50%;
 cursor: pointer;
 display: inline-block !important;
 height: 80px;
 margin-bottom: 30px;
 margin-top: 36px;
 outline: 0 none;
 width: 80px;
 }
 
  #btss{
   color: #fff;
    font-size: 16px;
     text-transform: uppercase;
      font-family: Montserrat, sans-serif;
       border: 2px solid #32CD32;
        border-radius: 25px;
         padding: 10px 20px;
         margin-right: 20px;
         margin-bottom: 50px;
  }
 
  #btss:hover{
  background-color: #041e37;
  transition: ease-out .5s;
  color: #fff;
  font-weight: bold;
  }
 
  .cow{
     color: #334e5e;
  }
  .gain{
     color: #32CD32;
  }
  .lost{
     color: #8B0000;
  }
 
 .nav-item:hover{
     border-bottom: 4px solid #efd777;
 }
 
 .nav-link{
   color: #fff!important;
 }
 
 .nav-link:hover{
     color: #efd777!important;
 }
 
 /***************/
  .header-bg{
     background-attachment: fixed;
     background-size: cover;
     background-position: center center;
 
 }
 .header-area{
     position: relative;
     padding: 10px 0;
     z-index: 27;
    
 }
 .header-area:after{
     position: absolute;
     left: 0;
     top: 0;
     width: 100%;
     height: 100%;
     background:  #000;
     opacity: .1;
     content: "";
     z-index: -1;
 }
 
 .hdcont h1 {
     text-shadow: 1px 1px 2px #333;
     color: #fff !important;
     text-align: center;
     font-weight: 100;
     font-family: 'Roboto Condensed', sans-serif;
     text-transform: uppercase;
     
 
 }
 
 .panel-heading {
 
     background: #1B334D !important;
     padding: 15px 25px !important;
     border-radius: 3px;
     color: #fff !important;
     text-decoration: none !important;
     font-family: 'Roboto Condensed', sans-serif;
     margin-bottom: 2px;
 
 }
 
 .panel-title a, panel-title i {
 
     vertical-align: top !important;
     color: #efd777;
 
 }
 
 .panel-body p{
   font-family: 'Roboto Condensed', sans-serif;
   margin-top: 2px;
   font-size: 14px;
   color: #000;
   padding: 15px 25px;
 }
 
 .panel-title i {
 
     float: right !important;
 
 }
 .material-icons {
 
     font-weight: normal;
     font-style: normal;
     /*font-size: 24px;*/
     line-height: 1;
     letter-spacing: normal;
     text-transform: none;
     display: inline-block;
     white-space: nowrap;
     word-wrap: normal;
     direction: ltr;
     -moz-font-feature-settings: 'liga';
     -moz-osx-font-smoothing: grayscale;
 
 }
 
 .platform_box {
 
     border: 0px solid #fff;
         border-bottom-color: rgb(255, 255, 255);
         border-bottom-style: solid;
         border-bottom-width: 0px;
     background: none;
     padding: 15px 0;
     border-radius: 3px;
     width: 100%;
     display: inline-block;
     vertical-align: top;
     color: #777;
     text-align: center;
     border-bottom: 1px solid #ccc;
 
 }
 
 .platform_box i {
 
     font-size: 44px;
     color: #EFD777;
     padding: 10px !important;
     margin: 0 !important;
 
 }
 
 .platform_box h6 {
 
     font-size: 20px;
     margin-bottom: 0px;
     color: #1B334D;
     font-weight: 400 !important;
 
 }
 
 .platform_box span {
 
     font-size: 14px;
     padding: 10px !important;
     color: #999;
     font-weight: 300 !important;
     margin: 0 !important;
 
 }
 
 @media (min-width: 1200px){
   .header-bg{
     height: 550px!important;
   }
 
   #h33{
     margin-top: 5%!important;
   }
 }
 
 @media (max-width: 1200px){
   .header-bg{
     height: 550px!important;
   }
 
   #h33{
     margin-top: 5%!important;
   }
 }
 
 @media (max-width: 1100px){
   .header-bg{
     height: 600px!important;
   }
 
   #h33{
     margin-top: 5%!important;
   }
   .posil{
     left: 7%!important;
   }
 }
 
 @media (max-width: 1000px){
   .header-bg{
     height: 550px!important;
   }
 
   #h33{
     margin-top: 5%!important;
   }
   .posil{
       left: 8%!important;
   }
 }
 
 @media (max-width: 980px){
   .header-bg{
     height: 630px!important;
   }
 
   #h33{
     margin-top: 5%!important;
   }
   
 }
 
 @media (max-width: 950px){
   .header-bg{
     height: 600px!important;
   }
 
   #h33{
     margin-top: 5%!important;
   }
 }
 
 @media (max-width: 900px){
   .header-bg{
     height: 550px!important;
   }
 
   #h33{
     margin-top: 5%!important;
   }
 }
 @media (max-width: 850px){
   .header-bg{
     height: 450px!important;
      }
   #h11{
     font-size: 30px;
     color: rgba(23, 110, 76, 0.4)!important;
   }
 
 .benefiter{
   /*background: url('images/background image.jpg') no-repeat center top / cover!important;*/
 }
   
 
   #h22{
     font-size: 16px!important;
     line-height: -15!important; 
   }
   .posil{
     left: 7%;
   }
   #h33{
     font-size: 27px;
     margin-top: 20px!important;
   }
 
   #h44{
     font-size: 20px!important;    
   }
 }
 @media (max-width: 780px){
   .header-bg{
     height: 350px!important;
      }
   #h11{
     font-size: 25px;
     color: rgba(23, 110, 76, 0.4)!important;
   }
   #h22{
     font-size: 14px!important;
     line-height: -15!important; 
   }
   .posil{
     left: 7%;
   }
   #h33{
     font-size: 23px;
     margin-top: 20px!important;
   }
 
   #h44{
     font-size: 18px!important;    
   }
 }
 @media (max-width: 776px) {
   .header-bg{
     height: 350px!important;
      }
   #h11{
     font-size: 25px;
     color: rgba(23, 110, 76, 0.4)!important;
   }
   #h22{
     font-size: 14px!important;
     line-height: -15!important; 
   }
   .posil{
     left: 8%;
   }
   #h33{
     font-size: 23px;
     margin-top: 20px!important;
   }
 
   #h44{
     font-size: 18px!important;    
   }
 }
  @media (max-width: 775px){
 
   .header-bg{
     height: 350px!important;
      }
   #h11{
     font-size: 25px;
     color: rgba(23, 110, 76, 0.4)!important;
   }
   #h22{
     font-size: 14px!important;
     line-height: -15!important; 
   }
   .posil{
     /*right: 7%!important;*/
   }
   #h33{
     font-size: 23px;
     margin-top: 20px!important;
   }
 
   #h44{
     font-size: 18px!important;    
   }
  }
 
 @media (max-width: 770px){
 
     .header-bg{
     height: 350px!important;
      }
   #h11{
     font-size: 25px;
     color: rgba(23, 110, 76, 0.4)!important;
   }
   #h22{
     font-size: 14px!important;
     line-height: -15!important; 
   }
   .posil{
     left: 1%;
   }
   #h33{
     font-size: 23px;
     margin-top: 20px!important;
   }
 
   #h44{
     font-size: 18px!important;    
   }
   
  }
 
  @media (max-width: 760px){
 
   .header-bg{
     height: 350px!important;
      }
   #h11{
     font-size: 25px;
     color: rgba(23, 110, 76, 0.4)!important;
   }
   #h22{
     font-size: 14px!important;
     line-height: -15!important; 
   }
   .posil{
     left: -1%!important;
   }
   #h33{
     font-size: 23px;
     margin-top: 20px!important;
   }
 
   #h44{
     font-size: 18px!important;    
   }
 
  }
  @media (max-width: 750px){
 .header-bg{
     height: 350px!important;
      }
   #h11{
     font-size: 25px;
     color: rgba(23, 110, 76, 0.4)!important;
   }
   #h22{
     font-size: 14px!important;
     line-height: -15!important; 
   }
   .posil{
     left: -1%!important;
   }
   #h33{
     font-size: 23px;
     margin-top: 20px!important;
   }
 
   #h44{
     font-size: 18px!important;    
   }
 
  }
  @media (max-width: 600px){
   .header-bg{
     height: 450px!important;
   }
   #h11{
     font-size: 25px;
     color: rgba(23, 110, 76, 0.4)!important;
   }
   #h22{
     font-size: 14px!important;
     line-height: -15!important;   
   }
   #h33{
     font-size: 23px;
     margin-top: 20px!important;
   }
 
   #h44{
     font-size: 18px!important;    
   }
 
   .posil{
     left: 0%!important;
   }
 
  }
 
  
 
  @media (max-width: 450px){
     
   .header-bg{
     height: 500px!important;
   }
   #h11{
     font-size: 25px;
     color: rgba(23, 110, 76, 0.4)!important;
   }
   #h22{
     font-size: 14px!important;
     line-height: -15!important;   
   }
   #h33{
     font-size: 23px;
     margin-top: 20px!important;
   }
 
   #h44{
     font-size: 18px!important;    
   }
  }
 
  @media (max-width: 400px){
 
   .header-bg{
     height: 500px!important;
   }
   #h11{
     font-size: 25px;
     color: rgba(23, 110, 76, 0.4)!important;
   }
   #h22{
     font-size: 14px!important;
     line-height: -15!important;   
   }
   #h33{
     font-size: 23px;
     margin-top: 20px!important;
   }
 
   #h44{
     font-size: 18px!important;    
   }
     
  }
 
  @media (max-width: 340px){
 
   .header-bg{
     height: 580px!important;
   }
   #h11{
     font-size: 25px;
     color: rgba(23, 110, 76, 0.4)!important;
   }
   #h22{
     font-size: 14px!important;
     line-height: -15!important;
     }
   #h33{
     font-size: 23px;
     margin-top: 20px!important;
   }
 
   #h44{
     font-size: 18px!important;    
   }
  }
 
 
     </style>
</head>
<body>
<section style="padding:9px 0px;background-color: rgb(200, 150, 46) !important; visibility: visible; animation-duration: 2s;" class="top-header wow fadeInTop animated" data-wow-duration="2s">
    <div class="container" style="max-width: 1140px;">
        <div class="row">
        <div class="col-md-12">
          <div style="background-color: #c8962e; color: rgba(255,255,255, 0.8)!important">
            <div style="float: left; font-family: 'Montserrat', sans-serif; font-weight: bold; font-size: 14px; padding-bottom: 5px">
              <span class="" style="margin-right: 10px;"><img src="images/icons/email.png">
                  <a href="mailto:support@Coinbitory.com" style="color: rgba(255,255,255, 0.8); font-family: 'Montserrat', sans-serif; font-weight: bold;"> support@Coinbitory.com</a>
                </span> 
                <!-- <span style="font-family: 'Montserrat', sans-serif;">
                  <span class=""><img src="images/icons/phone.png"></span> For VIP members Only
                </span> -->               
            </div>
            <div style="float: right; font-family: 'Montserrat', sans-serif; font-size: 14px">
            <?php if(!isset($_SESSION["email"])): ?>
              <span class="fa fa-sign-in"></span> <span style="margin-right: 10px;"><a style="color: rgba(255,255,255, 0.8); font-weight: bold" href="login.php">SIGN IN</a></span>
              <span class="fa fa-user-plus"></span> <span style="margin-right: 10px;"><a style="color: rgba(255,255,255, 0.8); font-weight: bold" href="register.php">SIGN UP</a></span> 
             <?php else: ?>
              <span style="margin-right: 10px;">
              <?php echo $_SESSION["email"]  ?>
             </span>
              <?php endif; ?>
              <div style="float: right;" id="google_translate_element"><div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage" class="goog-te-gadget-simple" style="white-space: nowrap;"><img src="https://www.google.com/images/cleardot.gif" class="goog-te-gadget-icon" alt="" style="background-image: url(&quot;https://translate.googleapis.com/translate_static/img/te_ctrl3.gif&quot;); background-position: -65px 0px;"><span style="vertical-align: middle;"><a aria-haspopup="true" class="goog-te-menu-value" href="javascript:void(0)"><span>Select Language</span><img src="https://www.google.com/images/cleardot.gif" alt="" width="1" height="1"><span style="border-left: 1px solid rgb(187, 187, 187);">​</span><img src="https://www.google.com/images/cleardot.gif" alt="" width="1" height="1"><span aria-hidden="true" style="color: rgb(118, 118, 118);">▼</span></a></span></div></div></div>

              <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            </div>
            <div style="clear: both"></div>
          </div>
        </div>
    </div>
  </div>
<section style="font-weight: lighter; font-family: Montserrat, sans-serif; visibility: visible; animation-duration: 2s; animation-name: fadeInDown;" id="toper" class="header  navigation wow fadeInDown" data-wow-duration="2s">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <nav class="navbar navbar-expand-md">
                  <a class="navbar-brand" href="index.php">
                      <img src="images/logo.png" alt="logo" width="150px">
                  </a>
                  <button style="color: #fff" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="tf-ion-android-menu"></span>
                  </button>
                  <div style="display: flex !important;" class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul style="text-transform: uppercase;" class="navbar-nav ml-auto">
                          <li class="nav-item">
                              <a class="nav-link" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="account-type.php">Account Type</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="faq.php">F.A.Q</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="terms.php">Terms</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="contact.php">Contact Us</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="about.php">About Us</a>
                          </li>
                      </ul>
                  </div>
              </nav>        
          </div>
      </div>
  </div>
</section>
</div>



 <main role="main">

 <section>
    <div style="background-image: url('images/icons/slider.jpg'); color: #fff; vertical-align: baseline; border-top: 8px solid #2c3e50; border-bottom: 5px solid #efd777; " class="">
        <div class="row">
            <div class="col-md-12">
              <div style="padding: 60px 30px 60px 30px; box-sizing: border-box !important;" class="hdcont">
                <h1>SIGN IN
</h1>
              </div>
            </div>



        </div>
    </div>
 </section>
 <div class="container" style="padding-top: 5%; background-color: #e2e2e2; ">
      
      <div class="row" style="padding-top: 3%">
      <div class="col-md-7" style="padding-bottom: 2%">
                  <div style="padding: 4%; border: 1px solid #ccc; background-color: #fff">
              <div>
                  <form action="inc/functions/register" method="POST">
                      <input type="hidden" name="csrf_token" value="68da7a44b2af6454e29c20aaedd0af6f">                    <div class="">
                          <div class="form-group">
                              <label>Full Name</label>
                              <input class="form-control" type="text" placeholder="Type your name" name="fullname" required="">
                          </div>
  
                          <div class="form-group">
                              <label>Email address</label>
                              <input class="form-control" type="email" placeholder="Type your email" name="email" required="">
                          </div>
  
                          <div class="form-group">
                              <label>Mobile Number</label>
                              <input class="form-control" type="text" placeholder="Mobile Number With Country Code" name="phone" required="">
                          </div>
         
                          <div class="form-group">
                              <label>Country</label>
                              <select name="country" class="form-control" required="">
                                  <option value="">Select Country</option>
                                  <option value="United States">United States</option> 
                                  <option value="United Kingdom">United Kingdom</option> 
                                  <option value="Afghanistan">Afghanistan</option> 
                                  <option value="Albania">Albania</option> 
                                  <option value="Algeria">Algeria</option> 
                                  <option value="American Samoa">American Samoa</option> 
                                  <option value="Andorra">Andorra</option> 
                                  <option value="Angola">Angola</option> 
                                  <option value="Anguilla">Anguilla</option> 
                                  <option value="Antarctica">Antarctica</option> 
                                  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                  <option value="Argentina">Argentina</option> 
                                  <option value="Armenia">Armenia</option> 
                                  <option value="Aruba">Aruba</option> 
                                  <option value="Australia">Australia</option> 
                                  <option value="Austria">Austria</option> 
                                  <option value="Azerbaijan">Azerbaijan</option> 
                                  <option value="Bahamas">Bahamas</option> 
                                  <option value="Bahrain">Bahrain</option> 
                                  <option value="Bangladesh">Bangladesh</option> 
                                  <option value="Barbados">Barbados</option> 
                                  <option value="Belarus">Belarus</option> 
                                  <option value="Belgium">Belgium</option> 
                                  <option value="Belize">Belize</option> 
                                  <option value="Benin">Benin</option> 
                                  <option value="Bermuda">Bermuda</option> 
                                  <option value="Bhutan">Bhutan</option> 
                                  <option value="Bolivia">Bolivia</option> 
                                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                  <option value="Botswana">Botswana</option> 
                                  <option value="Bouvet Island">Bouvet Island</option> 
                                  <option value="Brazil">Brazil</option> 
                                  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                  <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                  <option value="Bulgaria">Bulgaria</option> 
                                  <option value="Burkina Faso">Burkina Faso</option> 
                                  <option value="Burundi">Burundi</option> 
                                  <option value="Cambodia">Cambodia</option> 
                                  <option value="Cameroon">Cameroon</option> 
                                  <option value="Canada">Canada</option> 
                                  <option value="Cape Verde">Cape Verde</option> 
                                  <option value="Cayman Islands">Cayman Islands</option> 
                                  <option value="Central African Republic">Central African Republic</option> 
                                  <option value="Chad">Chad</option> 
                                  <option value="Chile">Chile</option> 
                                  <option value="China">China</option> 
                                  <option value="Christmas Island">Christmas Island</option> 
                                  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                  <option value="Colombia">Colombia</option> 
                                  <option value="Comoros">Comoros</option> 
                                  <option value="Congo">Congo</option> 
                                  <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                  <option value="Cook Islands">Cook Islands</option> 
                                  <option value="Costa Rica">Costa Rica</option> 
                                  <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                  <option value="Croatia">Croatia</option> 
                                  <option value="Cuba">Cuba</option> 
                                  <option value="Cyprus">Cyprus</option> 
                                  <option value="Czech Republic">Czech Republic</option> 
                                  <option value="Denmark">Denmark</option> 
                                  <option value="Djibouti">Djibouti</option> 
                                  <option value="Dominica">Dominica</option> 
                                  <option value="Dominican Republic">Dominican Republic</option> 
                                  <option value="Ecuador">Ecuador</option> 
                                  <option value="Egypt">Egypt</option> 
                                  <option value="El Salvador">El Salvador</option> 
                                  <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                  <option value="Eritrea">Eritrea</option> 
                                  <option value="Estonia">Estonia</option> 
                                  <option value="Ethiopia">Ethiopia</option> 
                                  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                  <option value="Faroe Islands">Faroe Islands</option> 
                                  <option value="Fiji">Fiji</option> 
                                  <option value="Finland">Finland</option> 
                                  <option value="France">France</option> 
                                  <option value="French Guiana">French Guiana</option> 
                                  <option value="French Polynesia">French Polynesia</option> 
                                  <option value="French Southern Territories">French Southern Territories</option> 
                                  <option value="Gabon">Gabon</option> 
                                  <option value="Gambia">Gambia</option> 
                                  <option value="Georgia">Georgia</option> 
                                  <option value="Germany">Germany</option> 
                                  <option value="Ghana">Ghana</option> 
                                  <option value="Gibraltar">Gibraltar</option> 
                                  <option value="Greece">Greece</option> 
                                  <option value="Greenland">Greenland</option> 
                                  <option value="Grenada">Grenada</option> 
                                  <option value="Guadeloupe">Guadeloupe</option> 
                                  <option value="Guam">Guam</option> 
                                  <option value="Guatemala">Guatemala</option> 
                                  <option value="Guinea">Guinea</option> 
                                  <option value="Guinea-bissau">Guinea-bissau</option> 
                                  <option value="Guyana">Guyana</option> 
                                  <option value="Haiti">Haiti</option> 
                                  <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                  <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                  <option value="Honduras">Honduras</option> 
                                  <option value="Hong Kong">Hong Kong</option> 
                                  <option value="Hungary">Hungary</option> 
                                  <option value="Iceland">Iceland</option> 
                                  <option value="India">India</option> 
                                  <option value="Indonesia">Indonesia</option> 
                                  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                  <option value="Iraq">Iraq</option> 
                                  <option value="Ireland">Ireland</option> 
                                  <option value="Israel">Israel</option> 
                                  <option value="Italy">Italy</option> 
                                  <option value="Jamaica">Jamaica</option> 
                                  <option value="Japan">Japan</option> 
                                  <option value="Jordan">Jordan</option> 
                                  <option value="Kazakhstan">Kazakhstan</option> 
                                  <option value="Kenya">Kenya</option> 
                                  <option value="Kiribati">Kiribati</option> 
                                  <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                  <option value="Korea, Republic of">Korea, Republic of</option> 
                                  <option value="Kuwait">Kuwait</option> 
                                  <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                  <option value="Latvia">Latvia</option> 
                                  <option value="Lebanon">Lebanon</option> 
                                  <option value="Lesotho">Lesotho</option> 
                                  <option value="Liberia">Liberia</option> 
                                  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                  <option value="Liechtenstein">Liechtenstein</option> 
                                  <option value="Lithuania">Lithuania</option> 
                                  <option value="Luxembourg">Luxembourg</option> 
                                  <option value="Macao">Macao</option> 
                                  <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                  <option value="Madagascar">Madagascar</option> 
                                  <option value="Malawi">Malawi</option> 
                                  <option value="Malaysia">Malaysia</option> 
                                  <option value="Maldives">Maldives</option> 
                                  <option value="Mali">Mali</option> 
                                  <option value="Malta">Malta</option> 
                                  <option value="Marshall Islands">Marshall Islands</option> 
                                  <option value="Martinique">Martinique</option> 
                                  <option value="Mauritania">Mauritania</option> 
                                  <option value="Mauritius">Mauritius</option> 
                                  <option value="Mayotte">Mayotte</option> 
                                  <option value="Mexico">Mexico</option> 
                                  <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                  <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                  <option value="Monaco">Monaco</option> 
                                  <option value="Mongolia">Mongolia</option> 
                                  <option value="Montserrat">Montserrat</option> 
                                  <option value="Morocco">Morocco</option> 
                                  <option value="Mozambique">Mozambique</option> 
                                  <option value="Myanmar">Myanmar</option> 
                                  <option value="Namibia">Namibia</option> 
                                  <option value="Nauru">Nauru</option> 
                                  <option value="Nepal">Nepal</option> 
                                  <option value="Netherlands">Netherlands</option> 
                                  <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                  <option value="New Caledonia">New Caledonia</option> 
                                  <option value="New Zealand">New Zealand</option> 
                                  <option value="Nicaragua">Nicaragua</option> 
                                  <option value="Niger">Niger</option> 
                                  <option value="Nigeria">Nigeria</option> 
                                  <option value="Niue">Niue</option> 
                                  <option value="Norfolk Island">Norfolk Island</option> 
                                  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                  <option value="Norway">Norway</option> 
                                  <option value="Oman">Oman</option> 
                                  <option value="Pakistan">Pakistan</option> 
                                  <option value="Palau">Palau</option> 
                                  <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                  <option value="Panama">Panama</option> 
                                  <option value="Papua New Guinea">Papua New Guinea</option> 
                                  <option value="Paraguay">Paraguay</option> 
                                  <option value="Peru">Peru</option> 
                                  <option value="Philippines">Philippines</option> 
                                  <option value="Pitcairn">Pitcairn</option> 
                                  <option value="Poland">Poland</option> 
                                  <option value="Portugal">Portugal</option> 
                                  <option value="Puerto Rico">Puerto Rico</option> 
                                  <option value="Qatar">Qatar</option> 
                                  <option value="Reunion">Reunion</option> 
                                  <option value="Romania">Romania</option> 
                                  <option value="Russian Federation">Russian Federation</option> 
                                  <option value="Rwanda">Rwanda</option> 
                                  <option value="Saint Helena">Saint Helena</option> 
                                  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                  <option value="Saint Lucia">Saint Lucia</option> 
                                  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                  <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                  <option value="Samoa">Samoa</option> 
                                  <option value="San Marino">San Marino</option> 
                                  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                  <option value="Saudi Arabia">Saudi Arabia</option> 
                                  <option value="Senegal">Senegal</option> 
                                  <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                  <option value="Seychelles">Seychelles</option> 
                                  <option value="Sierra Leone">Sierra Leone</option> 
                                  <option value="Singapore">Singapore</option> 
                                  <option value="Slovakia">Slovakia</option> 
                                  <option value="Slovenia">Slovenia</option> 
                                  <option value="Solomon Islands">Solomon Islands</option> 
                                  <option value="Somalia">Somalia</option> 
                                  <option value="South Africa">South Africa</option> 
                                  <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                  <option value="Spain">Spain</option> 
                                  <option value="Sri Lanka">Sri Lanka</option> 
                                  <option value="Sudan">Sudan</option> 
                                  <option value="Suriname">Suriname</option> 
                                  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                  <option value="Swaziland">Swaziland</option> 
                                  <option value="Sweden">Sweden</option> 
                                  <option value="Switzerland">Switzerland</option> 
                                  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                  <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                  <option value="Tajikistan">Tajikistan</option> 
                                  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                  <option value="Thailand">Thailand</option> 
                                  <option value="Timor-leste">Timor-leste</option> 
                                  <option value="Togo">Togo</option> 
                                  <option value="Tokelau">Tokelau</option> 
                                  <option value="Tonga">Tonga</option> 
                                  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                  <option value="Tunisia">Tunisia</option> 
                                  <option value="Turkey">Turkey</option> 
                                  <option value="Turkmenistan">Turkmenistan</option> 
                                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                  <option value="Tuvalu">Tuvalu</option> 
                                  <option value="Uganda">Uganda</option> 
                                  <option value="Ukraine">Ukraine</option> 
                                  <option value="United Arab Emirates">United Arab Emirates</option> 
                                  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                  <option value="Uruguay">Uruguay</option> 
                                  <option value="Uzbekistan">Uzbekistan</option> 
                                  <option value="Vanuatu">Vanuatu</option> 
                                  <option value="Venezuela">Venezuela</option> 
                                  <option value="Viet Nam">Viet Nam</option> 
                                  <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                  <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                  <option value="Western Sahara">Western Sahara</option> 
                                  <option value="Yemen">Yemen</option> 
                                  <option value="Zambia">Zambia</option> 
                                  <option value="Zimbabwe">Zimbabwe</option>
                              </select>
                          </div>
  
                          <div class="form-group">
                              <label>Gender</label><br>
                              <select name="gender" class="form-control" required="">
                                <option value="">I am</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select>
                          </div>
  
                          <div class="form-group">
                              <label for="account_type">Account Type</label><br>
                              <select name="account_type" class="form-control" required="">
                                  <option value="">---Choose Account Type---</option>
                                  <option value="CLASSIC">CLASSIC - Minimum Deposit $300</option>
                                  <option value="STANDARD">STANDARD - Minimum Deposit $1,000</option>
                                  <option value="PREMIUM">PREMIUM - Minimum Deposit $5,000</option>
                                  <option value="VIP">VIP - Minimum Deposit $10,000</option>
                              </select>
                          </div>
  
                          <div class="form-group">
                              <label>Account Currency</label><br>
                              <select name="currency" class="form-control" required="">
                                  <option value="">---Select Currency---</option>
                                  <option value="$">$ USD</option>
                                  <option value="€">€ EUR</option>
                                  <option value="£">£ GBP</option>
                              </select>
                          </div>
  
                          <div class="form-group">
                              <label>Password</label>
                              <input placeholder="Type your Password" class="form-control" type="password" name="password" required="">
                              
                          </div>
                          <div class="form-group">
                              <label>Confirm Password</label>
                              <input placeholder="Retype your Password" class="form-control" type="password" name="confirm_password" required="">
                          </div>
  
                          <div class="submit-btn-area">
                              <center><button style="margin-top: 20px; cursor: pointer; font-family: 'Chivo', sans-serif; border-radius: 0px" class="blue-button-solid" id="form_submit" name="signup" type="submit">SIGN UP <i class="fa fa-user-plus"></i></button>
                              </center>
                          </div>
  
                          <div class="form-footer text-center mt-5">
                              <p class="text-muted">Already have an account? <a href="login.php">Sign in</a></p>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>    
      <div class="col-md-1"></div>
     <div class="col-md-3" style="background-image: url('images/icons/reg-banner.jpg'); background-repeat: no-repeat; background-size: contain;">  </div>
      
      </div>
      <div class="row" style="background-color: #467a99; padding: 2%; color: #fff; font-family: 'Roboto Condensed', sans-serif;">
       
            <div class="col-md-6">
              <div class="register_bonus--item">
                  <h2 class="register_bonus--item_header" style="font-family: 'Roboto Condensed', sans-serif; font-weight: normal;">After registering you will receive:</h2>
                  <ul class="register_bonus--item_list">
                                                                      <li>
                              <img class="register_bonus--item_list-image" alt="" src="images/icons/perc.png" title="">
                              <span>Access to the best platform for trading CFDs, Forex and Options</span>
                          </li>
                                                                          <li>
                                  <div class="register_bonus--item_separator"></div>
                              </li>
                                                  <li>
                              <img class="register_bonus--item_list-image" alt="" src="images/icons/user.png" title="">
                              <span>Personal manager</span>
                          </li>
                                                                          <li>
                                  <div class="register_bonus--item_separator"></div>
                              </li>
                                                  <li>
                              <img class="register_bonus--item_list-image" alt="" src="images/icons/card.png" title="">
                              <span>Two books about trading CFDs, Forex and Option</span>
                          </li>
                                                                          <li>
                                  <div class="register_bonus--item_separator"></div>
                              </li>
                                                  <li>
                              <img class="register_bonus--item_list-image" alt="" src="images/icons/tv.png" title="">
                              <span>Weekly webinars from professional brokers</span>
                          </li>
                                                                          <li>
                                  <div class="register_bonus--item_separator"></div>
                              </li>
                                                  <li>
                              <img class="register_bonus--item_list-image" alt="" src="images/icons/video.png" title="">
                              <span>Access to educational videos</span>
                          </li>
                                      </ul>
              </div>
            </div>
  
            <div class="col-md-6">
  
              <div class="register_bonus--item">
                  <h2 class="register_bonus--item_header" style="font-family: 'Roboto Condensed', sans-serif;">We provide:</h2>
                  <ul class="register_bonus--item_list">
                                                                      <li>
                              <img class="register_bonus--item_list-image" alt="" src="images/icons/check.png" title="">
                              <span>The most advanced trading platform for trading CFDs, Forex and Options</span>
                          </li>
                                                                      <li>
                              <div class="register_bonus--item_separator"></div>
                          </li>
                                                  <li>
                              <img class="register_bonus--item_list-image" alt="" src="images/icons/check.png" title="">
                              <span>A wide range of trading tools</span>
                          </li>
                                                                      <li>
                              <div class="register_bonus--item_separator"></div>
                          </li>
                                                  <li>
                              <img class="register_bonus--item_list-image" alt="" src="images/icons/check.png" title="">
                              <span>5 account types to suit every type of trader</span>
                          </li>
                                                                      <li>
                              <div class="register_bonus--item_separator"></div>
                          </li>
                                                  <li>
                              <img class="register_bonus--item_list-image" alt="" src="images/icons/check.png" title="">
                              <span>Daily markets analysis</span>
                          </li>
                                                                      <li>
                              <div class="register_bonus--item_separator"></div>
                          </li>
                                                  <li>
                              <img class="register_bonus--item_list-image" alt="" src="images/icons/check.png" title="">
                              <span>Over 90 assets</span>
                          </li>
                      </ul>
              </div>
          </div>
      </div>
    </div>
    <br>

        <section class="" style="background-color: #062b1f; padding-top: 80px">
          <div class="container">
            <div class="row" style="">
              <div class="number col-md-3" id="amk_footer">
                <div class="wow bounce" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounce;">
                  <img src="images/footer-ribbon.png" style="max-width: 100%;">
                  <p style="font-family: 'Roboto Slab', sans-serif; text-align: center; margin-top: 20px; color: #d5d5d5; font-size: 12px; font-weight: 300; ">A FIRM FOR CRYPTO CURRENCY INVESTMENT SOLUTION
                  </p>
                </div> 
            </div>
          
            <div class="number col-md-4" id="amk_footer">
                <div class="amk_fBox2 amk_left wow bounce" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounce;">
                  <h3 text-align:="" left;"="">Quick Links</h3>
                    <ul>
                <li>
                  <a href="index.php">Home</a>
                </li>
        
                <li><a href="about.php">About us</a></li>
                <li><a href="faq.php">FAQs</a></li>
                <li><a href="terms.php">Terms</a></li>
                <li><a href="contact.php">Contact Us</a></li>
              </ul>
                </div> 
            </div>
        
            <div class="number col-md-5" id="amk_footer">
                    <div class="amk_fBox3 amk_right wow bounce" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: bounce;">
              <h3>Contact Information</h3>
              <ul>
                <li>
                  <h4>Website Address</h4>
                  <p style="text-transform: lowercase;">www.Coinbitory.com</p>
                </li>
                <!-- <li>
                  <h4>Telephone Number</h4>
                  <p>Available for VIP members</p>
                </li>
                 --><li>
                  <h4>Email</h4>
                  <p style="text-transform: lowercase;">support@Coinbitory.com</p>
                </li>
              </ul>
            </div>
                </div> 
            </div>
        </div>
              <!-- End container -->
        </section>
   <section class="call-to-action section-sm" style="background-color: #fff;">
          <div class="container">
            <div class="row">
                    <div class="col-md-12  wow wobble" id="amk_footis" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: wobble;">
                      <h3>PAYMENT METHOD</h3>
                        <!-- <h3 style="text-transform: uppercase; font-family: Montserrat, sans-serif; color: #000; font-weight: bold; text-align: center;">PAYMENT METHOD <span style="color: #ff0000">WE ACCEPT</span></h3>
                <div><center><hr style="width: 30%; border: 2px solid #ff0000"></center></div> -->
                    </div>
                </div>




                <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
                
                <div class="container">
                  <!-- <h2>Our  Partners</h2> -->
                  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
                  
                  <div class="container">
                     <section class="customer-logos slider" style="margin: 10px auto;">
                        <div class="slide"><img src="images/aa1.png"></div>
                        <div class="slide"><img src="images/aa2.jpg"></div>
                        <div class="slide"><img src="images/aa3.jpg"></div>
                        <div class="slide"><img src="images/aa4.jpg"></div>
                        <div class="slide"><img src="images/aa5.jpg"></div>
                        <div class="slide"><img src="images/1541730479h7.jpg"></div>
                        <div class="slide"><img src="images/1515746172h7.jpg"></div>
                        <div class="slide"><img src="images/1508826560h4.jpg"></div>
                        <div class="slide"><img src="images/1508826576h5.jpg"></div>


                     </section>
                  </div>
                </div>







         		<!-- End row -->
          </div>   	<!-- End container -->
        </section>
        <footer style="background-color: #062b1f!important;" id="footer" class="bg-one">
 
          <div class="footer-bottom">
            <h5>© Copyright 2022Coinbitory. All right reserved.</h5>
            
          </div>
        </footer>
  
  </main>
  <script src="js/scroll.js"></script>
  <script src="js/script.js"></script>
<script>
  $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>

</body>
</html>

