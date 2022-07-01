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
  <style type="text/css">
   @import url("https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,500,600,700|Chivo:300,400,700,700i,900");
   
  .wow:first-child {
      visibility: hidden;
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
.gen-quest{
    background-color:transparent !important;
    border:none !important;
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
    color: #efd777 !important;
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

    font-weight: bold;
    font-style: normal;
   
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
    <div style="background-image: url('images/icons/slider.jpg'); color: #fff; vertical-align: baseline;" class="">
        <div class="row">
            <div class="col-md-12">
              <div style="padding: 60px 30px 60px 30px; box-sizing: border-box !important;" class="hdcont">
                <h1>ABOUT US

</h1>
              </div>
            </div>



        </div>
    </div>
 </section>
 <section class="counter section-sm" style=" background: url('images/icons/about.jpg') no-repeat center top / cover!important; border-top: 5px solid #00006f;">
    <div class="container" style="background-color: transparent; padding-bottom: 20px; margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <div class="wow slideInLeft" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: slideInLeft;">
                <h3 style="text-transform: uppercase; font-family: 'Roboto Slab', sans-serif; color: #e9d16f; font-weight: 700; line-height: 34px; text-align: center;">ABOUT Coinbitory</h3>
                        <center><hr style="width: 30%; border: 2px solid #e9d16f"></center>
            </div>
        </div>
    </div>
        <div class="row wow slideInRight" data-wow-duration="2s" style="margin-top: 20px; visibility: visible; animation-duration: 2s; animation-name: slideInRight;">
            
            <div class="col-md-12">
                <div>
                    <center>
                    <iframe width="720" height="486" style="max-width: 100%; border: 10px solid #FFF; border-radius: 3px" src="https://www.youtube.com/embed/GmOzih6I1zs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                </center>

                    <p style="font-size: 13px; font-family: 'Montserrat'; font-weight: 300; color: #FFF; text-align: center; margin: 24px 0;">Coinbitory is a legally operating company. We were one of the first to invest in cryptocurrencies. Coinbitory is a leading blockchain investment company.
                    <br><br>Our mission is to act as a catalyst for universal adoption and blockchain innovation. We focus only on investing in cryptocurrency . Our team has experience in both traditional financing and emerging mining technology. We invest, among others, in cryptocurrencies such as BTC, XRP, ETC, and ETH. We also give a chance to new, dynamically developing ICO projects that bring huge profits in an amazingly short time.
                    <br><br>Our team consists only of qualified people connected with the financial industry for years, who are also passionate about the fledgling but very strong cryptocurrency market and mining technology. They constantly monitor the market to provide you - our investors with even greater profits. Having strong relationships with the most promising entrepreneurs and other leading investors in the industry, Coinbitory implements an investment strategy, building a diversified portfolio and adjusting the added value to its portfolio companies. 
                    <br><br> Coinbitory using advanced investment techniques, such as financial leverage, guarantees huge profits even at the currently fluctuating rate of cryptocurrencies. When starting cooperation with us you have a 100% guarantee that you will not lose your funds, but you can only gain. </p>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 60px">
            <div class="col-md-12 wow slideInRight" data-wow-duration="2s" data-wow-delay="1s" style="margin-bottom: 20px; visibility: visible; animation-duration: 2s; animation-delay: 1s; animation-name: slideInRight;">
                <div class="" style="visibility: visible;">
                  <center>
                  <h1 style="text-transform: uppercase; font-family: 'Roboto Slab', sans-serif; color: #e9d16f; font-weight: 700;  text-align: center; ">Our Office Overview</h1>
                  <br><br>
                  <img src="images/icons/oSlider.jpg" style="max-width: 100%;">
                  </center>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #fff; padding: 3% 0px;">
    <div class="container">
        <div class="row">
        <!-- Striped table start -->
                    <div class="col-lg-6 col-md-6 mt-6  wow fadeInLeft" data-wow-duration="2s" style="margin-bottom: 10px; visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">
                        <h2 style="text-transform: uppercase; font-family: 'Roboto Slab', sans-serif; color: #041e37; font-weight: 700; line-height: 34px; text-align: center;">Bitcon Price Chart</h2>
<br><br>
                        <div class="amk_priceChart">
        <div class="btcwdgt-chart btcwdgt btcwdgt-headlines btcwdgt-light btcwdgt-clean" bw-cash="true" bw-theme="light">    <div class="btcwdgt-header">      <h2 title="Bitcoin Cash price">        <span>$</span><span>106.87</span>      </h2>      <h4>BCH/USD</h4>      <div class="stats">        <div>MktCap<span class="mkt-cap">—.–</span></div>        <div>High<span class="high">$463.68</span></div>        <div>Low<span class="low">$105.32</span></div>        <div>Supply<span class="supply">—.–</span></div>        <div>Blocks<span class="blocks">—</span></div>      </div>      <p class="changes up">        <strong class="arrow up"></strong><span class="pct">1.5%</span><span class="amt">$1.55</span>      </p>      <p class="date-wrap"><span class="date">Jun 29, 2022 1:34 PM</span></p>    </div>    <div class="btcwdgt-body" style="width: 520px !important;       height:292.5px !important">      <canvas class="c" style="width: 520px; height: 292.5px;" width="650" height="365"></canvas>      <canvas class="i" style="width: 520px; height: 292.5px;" width="650" height="365"></canvas>    </div>    <div class="btcwdgt-footer">      <a href="https://www.bitcoin.com/widgets/?utm_source=www.coinbitory.com&amp;utm_medium=widget&amp;utm_campaign=Chart%20Widget" class="embed" title="Embed this widget">&lt;/&gt;</a>      <a href="https://www.bitcoin.com/?utm_source=www.coinbitory.com&amp;utm_medium=widget&amp;utm_campaign=Chart%20Widget" class="logo" title="Powered by bitcoin.com"><span>bitcoin.com</span></a>    </div></div>
<script>
  (function(b,i,t,C,O,I,N) {
    window.addEventListener('load',function() {
      if(b.getElementById(C))return;
      I=b.createElement(i),N=b.getElementsByTagName(i)[0];
      I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
    },false)
  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
</script>
            </div>
            </div>

            <div class="col-lg-6 col-md-6 mt-6  wow fadeInLeft" data-wow-duration="2s" style="margin-bottom: 10px; visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">
                        <h2 style="text-transform: uppercase; font-family: 'Roboto Slab', sans-serif; color: #041e37; font-weight: 700; line-height: 34px; text-align: center;">Company Information</h2>
                <br><br>
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 10px">
                            <img src="images/icons/certificate.png">
                        </div>
                        <div class="col-md-6">
                            <div style="border-left: 10px solid #041e37; padding-left: 10px">
                                <h5 style="font-family: 'Roboto Slab', sans-serif; color: #041e37; font-weight: 700;  text-align: left; line-height: 25px">
                                            Company Name
                                </h5>
                                <h2 style="text-transform: capitalize; font-family: 'Roboto Slab', sans-serif; color: #041e37; font-weight: 700; text-align: left;">Coinbitory LTD
                                </h2>
                                <br><br>
                                <h6 style="font-family: 'Roboto Slab', sans-serif; color: #041e37; font-weight: 700;  text-align: left; line-height: 25px">
                                            Company Number
                                </h6>
                                <h3 style="text-transform: capitalize; font-family: 'Roboto Slab', sans-serif; color: #041e37; font-weight: 700; text-align: left;">#11445991
                                </h3>
                                        
                                
                            </div>
                        </div>
                    </div>
                      </div>

                  </div>  
                </div>
            </section>
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

