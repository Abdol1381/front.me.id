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
<style>
    .hdcont h1 {
    text-shadow: 1px 1px 2px #333;
    color: #fff !important;
    text-align: center;
    font-weight: 100;
    font-family: 'Roboto Condensed', sans-serif;
    text-transform: uppercase;
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
    .nav-link {
    color: #fff!important;
}
.amk_fBox3 ul li p {
    font-size: 12px;
    color: #FFF;
    line-height: 20px;
     font-family: 'Roboto Slab', sans-serif;
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
                <h1>RULES & AGREEMENTS

</h1>
              </div>
            </div>



        </div>
    </div>
 </section>
 <section class="page-wrapper section" style="background-color: #f2f2f2!important;">
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
				
        <p style=" font-family: 'Roboto Condensed', sans-serif;  font-size: 16px; color: #000; padding: 15px 25px; text-align: justify;">

          Please read the following rules carefully before signing in.<br><br>



          You agree to be of legal age in your country to partake in this program, and in all the cases your minimal age must be 18 years.<br><br>

          Coinbitory is not available to the general public and is opened only to the qualified members of Coinbitory, the use of this site is restricted to our members and to individuals personally invited by them. Every deposit is considered to be a private transaction between Coinbitory and its Member.<br><br>
  
         We are not FDIC insured. We are not a licensed bank or a security firm.<br><br>
          You agree that all information, communications, materials coming from Coinbitory 
          are unsolicited and must be kept private, confidential and protected from any 
          disclosure. Moreover, the information, communications and materials contained 
          herein are not to be regarded as an offer, nor a solicitation for investments 
          in any jurisdiction which deems non-public offers or solicitations unlawful, 
          nor to any person to whom it will be unlawful to make such offer or solicitation.<br>
          <br>

        All the data giving by a member to Coinbitory will be only privately used and not disclosed to any third parties. Coinbitory is not responsible or liable for any loss of data.<br><br>
          You agree to hold all principals and members harmless of any liability. You 
          are investing at your own risk and you agree that a past performance is not 
          an explicit guarantee for the same future performance. You agree that all information, 
          communications and materials you will find on this site are intended to be regarded 
          as an informational and educational matter and not an investment advice.<br>
          <br>
          We reserve the right to change the rules, commissions and rates of the program 
          at any time and at our sole discretion without notice, especially in order to 
          respect the integrity and security of the members' interests. You agree that 
          it is your sole responsibility to review the current terms. <br>
          <br>

        Coinbitory is not responsible or liable for any damages, losses and costs resulting from any violation of the conditions and terms and/or use of our website by a member. You guarantee to Coinbitory that you will not use this site in any illegal way and you agree to respect your local, national and international laws.<br><br>

        Don't post bad vote on Public Forums and at Gold Rating Site without contacting the administrator of our program FIRST. Maybe there was a technical problem with your transaction, so please always CLEAR the thing with the administrator.<br><br>

        We will not tolerate SPAM or any type of UCE in this program. SPAM violators will be immediately and permanently removed from the program.<br><br>

        Coinbitory reserves the right to accept or decline any member for membership without explanation.<br><br>

        If you do not agree with the above disclaimer, please do not go any further.

        </p>
		</div>
	</div>
</div></section>

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

