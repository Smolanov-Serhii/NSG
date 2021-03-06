<!DOCTYPE html> <!-- // Header -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <link href="../dist/css/main.css" rel="stylesheet">
    <link href="../dist/css/desktop.css" rel="stylesheet">
    <link href="../dist/css/sidebar.css" rel="stylesheet">
    <link href="../dist/css/mobile.css" rel="stylesheet">
</head>
<body>
<header id="header" class="header">
    <div class="header__container left-padding">
        <div class="header__logo">
            <a href="index.php" class="header__home" target="_self">
                <picture>
                    <source srcset="images/logo-mobile.svg" media="(max-width: 1160px)" type="image/webp">
                    <img src="images/logo-pc.svg" alt="logo" class="header__logo-img">
                </picture>
            </a>
            <div class="header__burger js-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="header__navigate">
            <div class="header__top-nav right-padding">
                <div class="header__page">
                    <nav>
                        <ul class="page-manu">
                            <li class="menu-item active-menu"> <!-- На активный пункт меню навешиваем "active-menu" -->
                                <a href=""><img src="/images/home-icon.svg" alt="Home Page">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href=""><img src="/images/casino-icon.svg" alt="Casinos">Casinos</a>
                            </li>
                            <li class="menu-item">
                                <a href=""><img src="/images/new-casino-icon.svg" alt="New Casinos">New Casinos</a>
                            </li>
                            <li class="menu-item">
                                <a href=""><img src="/images/in-touch-icon.svg" alt="in touch with pro">in touch with
                                    pro</a>
                            </li>
                            <li class="menu-item">
                                <a href=""><img src="/images/streamers-icon.svg" alt="streamers">streamers</a>
                            </li>
                            <li class="menu-item">
                                <a href=""><img src="/images/new-icon.svg" alt="streamers">news</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="search-block__mobile">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.71 19.29L17.31 15.9C18.407 14.5025 19.0022 12.7767 19 11C19 9.41775 18.5308 7.87103 17.6518 6.55544C16.7727 5.23985 15.5233 4.21447 14.0615 3.60897C12.5997 3.00347 10.9911 2.84504 9.43928 3.15372C7.88743 3.4624 6.46197 4.22433 5.34315 5.34315C4.22433 6.46197 3.4624 7.88743 3.15372 9.43928C2.84504 10.9911 3.00347 12.5997 3.60897 14.0615C4.21447 15.5233 5.23985 16.7727 6.55544 17.6518C7.87103 18.5308 9.41775 19 11 19C12.7767 19.0022 14.5025 18.407 15.9 17.31L19.29 20.71C19.383 20.8037 19.4936 20.8781 19.6154 20.9289C19.7373 20.9797 19.868 21.0058 20 21.0058C20.132 21.0058 20.2627 20.9797 20.3846 20.9289C20.5064 20.8781 20.617 20.8037 20.71 20.71C20.8037 20.617 20.8781 20.5064 20.9289 20.3846C20.9797 20.2627 21.0058 20.132 21.0058 20C21.0058 19.868 20.9797 19.7373 20.9289 19.6154C20.8781 19.4936 20.8037 19.383 20.71 19.29ZM5 11C5 9.81332 5.3519 8.65328 6.01119 7.66658C6.67047 6.67989 7.60755 5.91085 8.7039 5.45673C9.80026 5.0026 11.0067 4.88378 12.1705 5.11529C13.3344 5.3468 14.4035 5.91825 15.2426 6.75736C16.0818 7.59648 16.6532 8.66558 16.8847 9.82946C17.1162 10.9933 16.9974 12.1997 16.5433 13.2961C16.0892 14.3925 15.3201 15.3295 14.3334 15.9888C13.3467 16.6481 12.1867 17 11 17C9.4087 17 7.88258 16.3679 6.75736 15.2426C5.63214 14.1174 5 12.5913 5 11Z"
                              fill="white"/>
                    </svg>
                </div>
                <div class="search-block">
                    <form method="get" action="send.php">
                        <input type="text" name="search" placeholder="Search">
                        <button type="submit">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.71 19.29L17.31 15.9C18.407 14.5025 19.0022 12.7767 19 11C19 9.41775 18.5308 7.87103 17.6518 6.55544C16.7727 5.23985 15.5233 4.21447 14.0615 3.60897C12.5997 3.00347 10.9911 2.84504 9.43928 3.15372C7.88743 3.4624 6.46197 4.22433 5.34315 5.34315C4.22433 6.46197 3.4624 7.88743 3.15372 9.43928C2.84504 10.9911 3.00347 12.5997 3.60897 14.0615C4.21447 15.5233 5.23985 16.7727 6.55544 17.6518C7.87103 18.5308 9.41775 19 11 19C12.7767 19.0022 14.5025 18.407 15.9 17.31L19.29 20.71C19.383 20.8037 19.4936 20.8781 19.6154 20.9289C19.7373 20.9797 19.868 21.0058 20 21.0058C20.132 21.0058 20.2627 20.9797 20.3846 20.9289C20.5064 20.8781 20.617 20.8037 20.71 20.71C20.8037 20.617 20.8781 20.5064 20.9289 20.3846C20.9797 20.2627 21.0058 20.132 21.0058 20C21.0058 19.868 20.9797 19.7373 20.9289 19.6154C20.8781 19.4936 20.8037 19.383 20.71 19.29ZM5 11C5 9.81332 5.3519 8.65328 6.01119 7.66658C6.67047 6.67989 7.60755 5.91085 8.7039 5.45673C9.80026 5.0026 11.0067 4.88378 12.1705 5.11529C13.3344 5.3468 14.4035 5.91825 15.2426 6.75736C16.0818 7.59648 16.6532 8.66558 16.8847 9.82946C17.1162 10.9933 16.9974 12.1997 16.5433 13.2961C16.0892 14.3925 15.3201 15.3295 14.3334 15.9888C13.3467 16.6481 12.1867 17 11 17C9.4087 17 7.88258 16.3679 6.75736 15.2426C5.63214 14.1174 5 12.5913 5 11Z"
                                      fill="white"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <div class="header__bottom-nav right-padding">
                <div class="header__static-lnk">
                    <a href="#">Slots Collections</a>
                </div>
                <div class="header__slots swiper-container">
                    <div class="header__slots-container swiper-wrapper">
                        <a class="header__slots-item swiper-slide" href="#">2021</a>
                        <a class="header__slots-item swiper-slide" href="#">2020</a>
                        <a class="header__slots-item swiper-slide" href="#">Megaways</a>
                        <a class="header__slots-item swiper-slide" href="#">Progressive Jackpot</a>
                        <a class="header__slots-item swiper-slide" href="#">Slot Series</a>
                        <a class="header__slots-item swiper-slide" href="#">2,500+ Slots</a>
                        <a class="header__slots-item swiper-slide" href="#">2018</a>
                        <a class="header__slots-item swiper-slide" href="#">2021</a>
                        <a class="header__slots-item swiper-slide" href="#">2020</a>
                        <a class="header__slots-item swiper-slide" href="#">Megaways</a>
                        <a class="header__slots-item swiper-slide" href="#">Progressive Jackpot</a>
                        <a class="header__slots-item swiper-slide" href="#">Slot Series</a>
                        <a class="header__slots-item swiper-slide" href="#">2,500+ Slots</a>
                        <a class="header__slots-item swiper-slide" href="#">2018</a>
                    </div>
                </div>
                <div class="header__slots-navigate">
                    <div class="header__slots-prev">
                        <picture>
                            <source srcset="images/slots-prev-mob.svg" type="image/webp" media="(max-width: 600px)">
                            <img src="images/slots-prev-pc.svg" alt="Next Slot">
                        </picture>
                    </div>
                    <div class="header__slots-next">
                        <picture>
                            <source srcset="images/slots-next-mob.svg" type="image/webp" media="(max-width: 600px)">
                            <img src="images/slots-next-pc.svg" alt="Next Slot">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> <!-- // Конец блока Header -->