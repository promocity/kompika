<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="CONTENT-TYPE" content="text/html; character=utf-8" charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=Edge">
     <title>Контакты | Компика</title>

    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]-->
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <!--[endif]-->
	<script type="text/javascript" src="http://kompika.ru/js/form_ajax.js"></script>
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <!-- Default Theme -->
    <!--<link rel="stylesheet" href="owl-carousel/owl.theme.css">-->
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/jpg">
</head>
<body>
     <?php include "inc/header.inc.php"; ?>
    
    


								<section class="hww-banner">
								<div class="page-line clearfix">
									<h1>Время работы офиса</h1>

									<div class="hww-banner-contacts">
										<div class="hww-contacts-row">
										<span itemprop="streetAddress"> Чернышевского, 16<br> офис 213</span>
                    </div>
										<div class="hww-contacts-row">
											<span itemprop="telephone">+7 (343) 288-76-08</span>
										</div>
									
									  <div class="hww-banner-decoration">
                     <time itemprop="openingHours" datetime="Mo,Tu,We,Th,Fr 09:00−18:00"> <div>с<span>9:00</span></div>
                      <div>до<span>18:00</span></div></span>
                      <div>Выходные дни</div>
                    </div>
                  </div>
                </div>  
								</section>
								
								<div class="page-line">
                  <div class="hww-title-box">
								    <h1 class="hww-title">Время работы выездного мастера</h1>
                  </div>
								</div>



                  <div class="page-line">
                    <div class="main-form clearfix">
                    	<div class="main-form-decoration">
                    		<img src="images/main-form-dec.png" alt="Декорация" width="46" height="130">
                    		<div>с<span>9:00</span></div>
                    		<div>до<span>20:00</span></div>
                    		<div>Без выходных</div>
                    	</div>

                      <form action="http://kompika.ru/faemail.php" method="post">

                          <label for="name" class="block-label">Как вас зовут</label>
                          <input type="text" name="name" id="name">
                          
                          <label for="tel" class="block-label">Номер телефона</label>
                          <input type="text" name="tel" id="tel">

                          <div class="main-form-row">
                            <input type="radio" name="time" id="now" value="this-time" checked>
                            <label for="now">Текущее время</label>

                            <input type="radio" name="time" id="later" value="other-time">
                            <label for="later">Другая дата</label>
                          </div>
              
                        <div class="form-row">
                          <label for="day">День</label>
                          <select name="day" id="day">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                          </select>
                          
                          <label for="month">Месяц</label>
                          <select name="month" id="month">
                            <option>Январь</option>
                            <option>Февраль</option>
                            <option>Март</option>
                            <option>Апрель</option>
                            <option>Май</option>
                            <option>Июнь</option>
                            <option>Июль</option>
                            <option>Август</option>
                            <option>Сентябрь</option>
                            <option>Октябрь</option>
                            <option>Ноябрь</option>
                            <option>Декабрь</option>
                          </select>
                      
                          <label for="hour">Часов</label>
                          <select name="hour" id="hour">
                            <option>00</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                            <option>05</option>
                            <option>06</option>
                            <option>07</option>
                            <option>08</option>
                            <option>09</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                          </select>

                          <label for="minute">Минут</label>
                          <select name="minute" id="minute">
                            <option>00</option>
                            <option>15</option>
                            <option>30</option>
                            <option>45</option>
                          </select>
                        </div>
                          
                          <button type="button" class="main-form-btn" onclick="SendEmail()">Вызвать мастера</button>
                      </form>
                </div>
                </div>

								
							<div class="map">
								<div class="map-canvas" id="map-canvas"></div>
								  <div class="map-contacts">

										<div class="map-contacts-row">
										<span itemprop="addressLocality">г. Екатеринбург</span><br>
                    <span itemprop="streetAddress"> ул. Чернышевского, 16 
                    офис 213</span>

                    </div>
										<div class="map-contacts-row">
											<span itemprop="telephone">+7 (343) 288-76-08</span>
                    </div>

								  </div>
                
						</div>








							<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
							<script>
							      function initialize() {
									    var mapOptions = {
									    zoom: 17,
									    scrollwheel: false,
									    center: new google.maps.LatLng(56.8314221,60.6023303)
									    }
									    var map = new google.maps.Map(document.getElementById("map-canvas"),
									                                mapOptions);
									    var image = "images/map-marker.png";
									    var myLatLng = new google.maps.LatLng(56.8314221,60.6020815);
									    var beachMarker = new google.maps.Marker({
									    position: myLatLng,
									    map: map,
									    icon: image
									    });
									    }
									    google.maps.event.addDomListener(window, "load", initialize);
							</script>





   <?php include "inc/footer.inc.php"; ?>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="owl-carousel/owl.carousel.js"></script>
    <script src="owl-carousel/carousel.js"></script>
    <script src="js/menu-script.js"></script>
    <script src="js/motion.js"></script>
    <script src="js/form.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({

                navigation : false, // Show next and prev buttons
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true,
                mouseDrag: false,

                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false

            });
        });
    </script>

    <script>
    $(document).ready(function() {
    var radioBtn1 =  $("input[id='now']");
    var radioBtn2 =  $("input[id='later']");
    var name = $("input[name='name']");
    var day = $("select[name='day']");
    var month = $("select[name='month']");
    var hour = $("select[name='hour']");
    var minute = $("select[name='minute']");

    //инициализация формы
    day.attr('disabled', 'disabled');
    month.attr('disabled', 'disabled');
    hour.attr('disabled', 'disabled');
    minute.attr('disabled', 'disabled');


    radioBtn1.click(function() {
        day.attr('disabled', 'disabled');
        month.attr('disabled', 'disabled');
        hour.attr('disabled', 'disabled');
        minute.attr('disabled', 'disabled');
    });
    radioBtn2.click(function() {
        day.removeAttr('disabled');
        month.removeAttr('disabled');
        hour.removeAttr('disabled');
        minute.removeAttr('disabled');
    });

});
    </script>

</body>
</html>