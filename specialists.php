<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="CONTENT-TYPE" content="text/html; character=utf-8" charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=Edge">
 <title>Специалисты | Компика</title>

    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <!-- Default Theme -->
    <!--<link rel="stylesheet" href="owl-carousel/owl.theme.css">-->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/jpg">
</head>
<body>
   <?php include "inc/header.inc.php"; ?>
    
    <div class="page-line">
    <div class="main-promo-title">            
      <h1>Лучшие специалисты</h1>
    </div>

    <article class="specialist">
      <div class="specialist-photo wow">
        <img src="images/specialist-photo-1.jpg" width="299" height="299" alt="Григорьев Григорий Григорьевич">
        <div class="specialist-rating">
          <span>Рейтинг специалиста</span>
          <img src="images/stars.png" width="127" height="19">
        </div>  
      </div>

      <div class="specialist-card wow">
        <h1>Борисенко Александр</h1>
          
        <div class="specialist-card-row">
          <span class="specialist-title">Должность:</span>
          <span class="specialist-description">Cервисный инженер</span>
        </div>

        <div class="specialist-card-row">
          <span class="specialist-title">Специализация:</span>
          <p class="specialist-description">Доработка товароучетного ПО, 
          постановка задач программисту, выявление багов, работа с SQL базой данных, 
          работа по настройке и обслуживанию кассовых мест и торгового оборудования.</p>
        </div>
          
        <div class="specialist-card-row">
          <span class="specialist-title">Образование:</span>
          <span class="specialist-description">МГУ, Кафедра IT разработки.</span>
        </div>
          
      </div>
    </article>
        <article class="specialist">
            <div class="specialist-photo wow">
                <img src="images/specialist-photo-2.jpg" width="299" height="299" alt="Григорьев Григорий Григорьевич">
                <div class="specialist-rating">
                    <span>Рейтинг специалиста</span>
                    <img src="images/stars.png" width="127" height="19">
                </div>
            </div>

            <div class="specialist-card wow">
                <h1>Григорьев Григорий Григорьевич</h1>

                <div class="specialist-card-row">
                    <span class="specialist-title">Должность:</span>
                    <span class="specialist-description">диагност</span>
                </div>

                <div class="specialist-card-row">
                    <span class="specialist-title">Специализация:</span>
          <span class="specialist-description">Доработка товароучетного ПО,
                постановка задач программисту, выявление багов,
                работа с SQL базой данных, работа по настройке и
                обслуживанию кассовых мест и торгового
                оборудования.</span>
                </div>

                <div class="specialist-card-row">
                    <span class="specialist-title">Образование:</span>
                    <span class="specialist-description">МГУ, Кафедра IT разработки.</span>
                </div>

            </div>
        </article>
        <article class="specialist">
            <div class="specialist-photo wow">
                <img src="images/specialist-photo-3.jpg" width="299" height="299" alt="Григорьев Григорий Григорьевич">
                <div class="specialist-rating">
                    <span>Рейтинг специалиста</span>
                    <img src="images/stars.png" width="127" height="19">
                </div>
            </div>

            <div class="specialist-card wow">
                <h1>Григорьев Григорий Григорьевич</h1>

                <div class="specialist-card-row">
                    <span class="specialist-title">Должность:</span>
                    <span class="specialist-description">диагност</span>
                </div>

                <div class="specialist-card-row">
                    <span class="specialist-title">Специализация:</span>
          <span class="specialist-description">Доработка товароучетного ПО,
                постановка задач программисту, выявление багов,
                работа с SQL базой данных, работа по настройке и
                обслуживанию кассовых мест и торгового
                оборудования.</span>
                </div>

                <div class="specialist-card-row">
                    <span class="specialist-title">Образование:</span>
                    <span class="specialist-description">МГУ, Кафедра IT разработки.</span>
                </div>

            </div>
        </article>
       
  </div>



     


















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

  <script src="js/wow.min.js"></script>
  <script>new WOW().init();</script>
</body>
</html>