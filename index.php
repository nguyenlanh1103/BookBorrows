<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/806477/assets/bootstrap-4-3-min.css?1616141527684"> -->
	<!-- <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/bootstrap_css.css?1617295694679"> -->
    <link rel="stylesheet" href="./swiper/css/bootstrap_css.css">
    <link rel="stylesheet" href="./swiper/css/bootstrap-4-3-min.css">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/ideal-image-slider.css">
    <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/806477/assets/main.scss.css?1616141527684">
	<link rel="stylesheet" href="http://bizweb.dktcdn.net/100/415/010/themes/806477/assets/bpr-products-module.css?1616141527684" rel="stylesheet" >
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_gb.scss.css?1617295694679">
	<link rel="stylesheet" href="./css/index_style.scss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all">
	<link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" media="all">
 
    <link rel="stylesheet" href="https://hocwebgiare.com/thiet_ke_web_chuan_demo/Bootsnav/css/bootsnav.css"> 
 

    
    <!-- <link rel="stylesheet" href="./swiper/css/style.css"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <!-- <link rel="stylesheet" href="./swiper/css/Bar.scss.css"> -->

    <style>
        :root {
            --menuWidth: 260px;
            --leftColBackground: #fff;
            --lightLeftColBackground: #2d343a;
            --darkLeftColBackground: #22272b;
            --mainColor: #ff5e0a;
            --accentColor1: #929292;
            --accentColor2: #d80000;
            --textColor: #4c4c4c;
        }
    </style>
    
</head>
<body>
      
        <?php 
            include('Header.php');
            include('Menu.php');
            include('Slider.php');
            include('ContentBar.php');
            include('ContentBD.php');
            include('ContentBer.php');
            include('ContentFooter.php');
            include('Footer.php');
        
        ?>
    
        <!-- <script src="https://unpkg.com/swiper/js/swiper.min.js">  </script> -->
        <script src="./swiper/js/style.js"></script>
        <script src="./swiper/js/custom.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- <script src="https://unpkg.com/swiper/js/swiper.min.js">  </script> -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/Bootsnav/js/bootsnav.js"></script>
        <script src="./swiper/js/Bar.js"></script>
        <!-- Sản phẩm ưa chuộng -->
        <script>
                var pr_image = new Swiper('.b_product_2', {
                    spaceBetween: 5,
                    slidesPerView: 1,
                    loop: false,
                    speed:1400,
                    loopedSlides: 5,
                    watchSlidesVisibility: true,
                    watchSlidesProgress: true,
                    allowTouchMove: false
                });
                var pr_info = new Swiper('.bt_product_2', {
                    spaceBetween: 15,
                    loop:true,
                    speed:1400,
                    loopedSlides: 5,
                    autoHeight:true,
                    allowTouchMove: false,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    thumbs: {
                        swiper: pr_image,
                    }
                });

        </script>
        <!-- Văn Học Nổi Tiếng, kĩ Năng Sống -->
        <script>
             var b_product_3 = new Swiper('.b_product_3', {
			spaceBetween: 15,
			loop: false,
			speed: 1000,
			autoplay: false,
			navigation: {
				nextEl: '.b3_next',
				prevEl: '.b3_prev',
			},
			breakpoints: {
				375: {
					slidesPerView: 2
				},
				768: {
					slidesPerView: 3
				},
				992: {
					slidesPerView: 4
				},
				1200: {
					slidesPerView: 4
				}
			}
		});
        </script>
        <!-- Sách Maketing bán hàng, sách nuôi dạy con -->
        <script>
                var b_product_5_1 = new Swiper('.b_product_5_1', {
                spaceBetween: 15,
                loop: false,
                speed: 1000,
                autoplay: false,
                navigation: {
                    nextEl: '.b5_1_next',
                    prevEl: '.b5_1_prev',
                },
                breakpoints: {
                    375: {
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 2
                    },
                    1200: {
                        slidesPerView: 3
                    }
                }
            });
            var b_product_5_2 = new Swiper('.b_product_5_2', {
                spaceBetween: 15,
                loop: false,
                speed: 1000,
                autoplay: false,
                navigation: {
                    nextEl: '.b5_2_next',
                    prevEl: '.b5_2_prev',
                },
                breakpoints: {
                    375: {
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 2
                    },
                    1200: {
                        slidesPerView: 3
                    }
                }
            });
        </script>


</body>
</html>