<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/favicon3.png" />
    <!-- image for social media links -->
    <meta property="og:image" content="img/sm_i.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="105">
    <!-- describtion-->
    <meta name="description" content="Jak začít investovat? | Jsou mé investice správně nastavené? | Investice pro pokročilé"> 
    <title>JAROSLAV BEZOUŠKA - Investice pro začátečníky i pokročilé</title>
    <!-- js -->
    <script src="myScript.js"></script>
    <!-- or jquery online version -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '114857517128437');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" 
            src="https://www.facebook.com/tr?id=114857517128437&ev=PageView&noscript=1"/>
    </noscript>
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-C9W18B8M0J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-C9W18B8M0J');
    </script>

</head>


<body>
     <!-- MENU -->
     <div id="mySidenav" class="sidenav">
        <div class="footer">
            <div class="container">
                <div class="fringe"></div>
                <div class="main">
                    
                    <div class="footer_container">
    
                        <div class="footer_box">
                            <div class="footer_line"></div>
                            <span class="footer_header">MENU</span>
                            <ul>
                                <li onclick="closeNav()"><a href="index.php">Domů</a></li>
                                <li onclick="closeNav()"><a href="index.php#services">Služby</a></li>
                                <!-- <li onclick="closeNav()"><a href="index.php#news">Aktuality</a></li> -->
                                <li onclick="closeNav()"><a href="index.php#about">O mně</a></li>
                                <li onclick="closeNav()"><a href="index.php#reference">Reference</a></li>
                                <li onclick="closeNav()"><a href="index.php#contact">Kontakt</a></li>
                            </ul>
                        </div>
                        <div class="footer_box list2">
                            <div class="footer_line"></div>
                            <span class="footer_header">SLUŽBY</span>
                            <ul>
                                <li><a href="hypoteky.php">Hypotéky</a></li>
                                <li><a href="investice.php">Investice</a></li>
                                <li><a href="pojisteni.php">Pojištění</a></li>
                            </ul>
                        </div>
                        <div class="footer_box list3">
                            <div class="footer_line"></div>
                            <span class="footer_header"><br></span>
                            <ul>
                                <li><a href="cookies.php">Cookies</a></li>
                                <li><a href="gdpr.php">Ochrana osobních údajů (GDPR)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="fringe">
                    <div class="menu_div">
                        <span onclick="closeNav()"><img src="img/cross.png" alt="zavřít" class="cross_icon"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--*********************** HERO PAGE *************************-->
    <section class="investice" id="investice">
        <div class="container">
            <div class="fringe">
                <div class="menu_div home_align margin_bottom">
                    <a href="index.php"><img src="img/home_icon.png" alt="ikona domů" class="home_icon"></a>
                </div>
                <h2 class="pin3h">Investice</h2>
            </div>
            <div class="main top_magin_sekce" id="zacit_investovat">
                <!-- ZACIT INVESTOVAT -->
                <span class="question_header_pc"><h4>Jak začít  investovat?</h4></span>
                <div class="third_container">
                    <div class="third_box">
                        <div class="third_blue_header">
                            <div class="blue_rect blue"></div>
                            <div class="question_rect">
                                <h4>Jak začít investovat?</h4>
                            </div>
                        </div>
                        <div class="invest_img aniHypo1">
                            <img src="img/invest1.png" alt="investiční grafy">
                        </div>
                    </div>
                    <div class="vyhoda_container">
                        <div class="vyhoda_box aniHypo1">
                            <span class="vyhoda_header">VÝHODA</span>
                            <div class="vyhoda_text light">První pozitivní věcí je Váš  zájem  o informace. Protože nemáte zkušenosti, informacemi to také začíná. Výhoda je v možnosti testovacího nastavení. Získáte tak důvěru v investiční nástroje a nadšení pro jejich další využívání.</div>
                        </div>
                        <div class="vyhoda_box aniHypo1">
                            <span class="vyhoda_header">ŘEŠENÍ</span>
                            <div class="vyhoda_text grey">Klientům začátečníkům nejprve vysvětlím zákadní principy investování. Poté stanovíme investiční cíle (na co chcete zhodnocené úspory použít). Jakmile nabydeme dojmu, že problematice rozumíte, začneme tvořit řešení, jak, kam a kolik peněz zainvestovat za konkrétním clem. To vše bude součástí Vašeho komplexního finančního plánu.</div>
                        </div>

                    </div>
                </div>
                <a href="#contact"><button class="green_button">SPOČÍTEJ</button></a>
                <!-- MIDDLE INVESTOVAT -->
                <a class="target" id="middle_invest"></a>
                <span class="question_header_pc little_margin" ><h4>Jsou mé investice správně nastavené?</h4></span>
                <div class="third_container row_reverse">
                    <div class="third_box">
                        <div class="third_blue_header row_reverse">
                            <div class="blue_rect blue"></div>
                            <div class="question_rect little_padding">
                                <h4>Jsou mé investice správně nastavené?</h4>
                            </div>
                        </div>
                        <div class="invest_img no_left aniHypo2">
                            <img src="img/invest2.png" alt="vývoj investic">
                        </div>
                    </div>
                    <div class="vyhoda_container">
                        <div class="vyhoda_box aniHypo2">
                            <span class="vyhoda_header">VÝHODA</span>
                            <div class="vyhoda_text light">Díky tomu že své investice bude v čase aktualizovat budete také snižovat jejich nákladovost (například v podobě nižších průběžných poplatků ). Daleko důležitější však je zajistit, aby vaše investice flexibilně reagovala na vývoj finančního trhu. Minimalizujete tak ztráty a maximalizujete výnos.</div>
                        </div>
                        <div class="vyhoda_box aniHypo2">
                            <span class="vyhoda_header">ŘEŠENÍ</span>
                            <div class="vyhoda_text grey">Na osobní schůzce se spolu podíváme jak vaše aktualní nastavení investici koresponduje s vašimi cíli. Následně zkontrolujeme vhodnost nastavení vašeho portfolia. Bude-li to třeba, navrhnu vám možnosti úprav portfolia za cílem zefektivnění investic.</div>
                        </div>

                    </div>
                </div>
                <a href="#contact"><button class="green_button button_move_left">ZKONTROLUJ</button></a>
                <!-- POKROCILY INVESTOVAT -->
                <a class="target" id="advanced_invest"></a>
                <span class="question_header_pc"><h4>Investice pro pokročilé</h4></span>
                <div class="third_container">
                    <div class="third_box">
                        <div class="third_blue_header">
                            <div class="blue_rect blue"></div>
                            <div class="question_rect">
                                <h4>Investice pro pokročilé</h4>
                            </div>
                        </div>
                        <div class="invest_img aniHypo3">
                            <img src="img/invest3.png" alt="investiční poradenství">
                        </div>
                    </div>
                    <div class="vyhoda_container">
                        <div class="vyhoda_box aniHypo3">
                            <span class="vyhoda_header">VÝHODA</span>
                            <div class="vyhoda_text light">Díky Vašim zkušenostem se nabízí možnost bezpečně využívat mnohem sofistikovanější nastavení Vašeho investičního portfolia. Klienti, kteří již pravidelně investují, disponují větším kapitálem a díky tomu mohou využívat některé z prémiových produktů, které trh nabízí. Hlavní výhodou je potom bonusové zhodnocení.</div>
                        </div>
                        <div class="vyhoda_box aniHypo3">
                            <span class="vyhoda_header">ŘEŠENÍ</span>
                            <div class="vyhoda_text grey">Důležité je pomocí komplexní analýzy maximalizovat využití Vašich volných financí a na základě toho vytvořit plán na míru.  Důraz se klade především na nákladovost a potenciál zhodnocení.Díky kombinaci současného finančního majetku, a možnosti propojení více produktů, se Vám otevírají dveře do světa prémiových investic.</div>
                        </div>

                    </div>
                </div>
                <a href="#contact"><button class="green_button">OSOBNÍ PLÁN</button></a>
            </div>
            <div class="fringe">
                <div class="menu_div">
                    <span onclick="openNav()">
                        <img src="img/hmb_icon.png" alt="ikona menu" class="hmb_icon">
                        <img src="img/menubig.png" alt="ikona menu" class="hmb_icon_largescreen">
                    </span>
                </div>
            </div>
        </div>
    </section>




    <!--*********************** CONTACT *************************-->
    <section class="contact" id="contact">
        <div class="container">
            <div class="fringe"><br><h2 class="pin4h">Kontakt</h2></div>
            <div class="main">
                <div class="contact_container aniContact">

                <?php 
                    $url = "index.php#finalMessage";
                    include'contact.php';
                ?>
                    <!-- <form action="mailto:helena.kmochova@4fin.cz" method="post" enctype="text/plain"  name="EmailTestForm">
                        <label for="jmeno">Jméno</label><br>
                        <input type="text" id="jmeno" name="name" required><div class="required"></div>
                        <label for="cislo">Mobil</label><br>
                        <input type="number" id="cislo" name="mobil" required><div class="required"></div>
                        <label for="adresa">Email</label><br>
                        <input type="email" id="adresa"  name="mail" required><div class="required"></div>
                        <label for="zprava">S čím Vám mohu pomoci</label><br>
                        <textarea name="zprava" id="zprava" rows="10"></textarea>
                        <br>
                        <input type="submit" value="ODESLAT" class="submit">
                    </form> -->
                </div>
                <div class="map_contactdata aniContact">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.655259546002!2d14.
                    440297115609647!3d50.092741020955835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470
                    b94bc6a8b5901%3A0xe6bfb36220f7bd9f!2zUG9ixZllxb5uw60gMjAsIDE4NiAwMCBLYXJsw61uLCDEjGVza28!5e0
                    !3m2!1scs!2suk!4v1589711147314!5m2!1scs!2suk" title="Adresa kanceláře" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <div class="contact_container_data contact_data">
                        <div class="adress_sm">
                            <p>Pobřežní 20 <br>Praha 8, 186 00</p>
                            <div class="socialmedia">
                                <a href="https://www.instagram.com/jaroslav_bezouska_finance/"><img src="img/insta.png" alt="instagram ikona" class="sm_img"></a>
                                <a href="https://wa.me/420775564612"><img src="img/wsap.png" alt="WhatsApp" class="sm_img"></a>
                            </div>
                        </div>
                        <div class="email_box">
                            <div class="email_item">
                                <img src="img/icon_t.png" alt="mobil ikona" class="icon_phone">
                                <p>+420 775 564 612</p>
                            </div>
                            <div class="email_item">
                                <img src="img/icon_e.png" alt="email ikona" class="icon_phone">
                                <p>jaroslav.bezouska@4fin.cz</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="fringe"></div>
        </div>

    </section>
 <!--*********************** FOOTER *************************-->
 <section class="footer">
    <div class="container">
        <div class="fringe"></div>
        <div class="main">
            
            <div class="footer_container">

                <div class="footer_box">
                    <div class="footer_line"></div>
                    <span class="footer_header">MENU</span>
                    <ul>
                        <li><a href="index.php">Domů</a></li>
                        <li><a href="index.php#services">Služby</a></li>
                        <!-- <li><a href="index.php#news">Aktuality</a></li> -->
                        <li><a href="index.php#about">O mně</a></li>
                        <li><a href="index.php#reference">Reference</a></li>
                        <li><a href="index.php#contact">Kontakt</a></li>
                    </ul>
                </div>
                <div class="footer_box list2">
                    <div class="footer_line"></div>
                    <span class="footer_header">SLUŽBY</span>
                    <ul>
                        <li><a href="hypoteky.php">Hypotéky</a></li>
                        <li><a href="investice.php">Investice</a></li>
                        <li><a href="pojisteni.php">Pojištění</a></li>
                    </ul>
                </div>
                <div class="footer_box list3">
                    <div class="footer_line"></div>
                    <span class="footer_header"><br></span>
                    <ul>
                        <li><a href="cookies.php">Cookies</a></li>
                        <li><a href="gdpr.php">Ochrana osobních údajů (GDPR)</a></li>
                    </ul>
                </div>
            </div>
            <div class="madeby">
                    <p>
                    Created by <a href="https://lucieweb.dev/">Lucie</a> & <a href="https://www.behance.net/martinnovotny93">Martin</a></p>
                </div>
        </div>
        <div class="fringe"></div>
    </div>

</section>
     <!-- greensock -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
     <script>
    //  function to fix scrolling from services
        $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

        if (target.length) {
            $('html,body').animate({
            scrollTop: target.offset().top -80
                }, 1000);
                    return false;}}
});
});

         $(document).ready(function () {
        var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
        if (window.location.hash && isChrome) {
            setTimeout(function () {
                var hash = window.location.hash;
                window.location.hash = "";
                window.location.hash = hash;
            }, 300);
            }
        });
         // hypoteky
         gsap.registerPlugin(ScrollTrigger);
 
         gsap.from('.aniHypo1', {
             opacity: 0,
             y: -70, 
             stagger: 0.5
         });
 
         gsap.from('.aniHypo2', {
             scrollTrigger: {
                 trigger:'.aniHypo2',
                 toggleActions: "play none none none",
                 start: "top 70%",
                 end: "center center",
                //  markers: true,
             },
             opacity: 0,
             y: -70, 
             stagger: 0.5
         });
 
         gsap.from('.aniHypo3', {
             scrollTrigger: {
                 trigger:'.aniHypo3',
                 toggleActions: "play none none none",
                 start:"top 70%",
                 end: "center center",
             },
             opacity: 0,
             y: -70, 
             stagger: 0.5
         });

        // h2___________________
       
        gsap.to('.pin3h', {
            scrollTrigger: {
                trigger:'.pin3h',
                pin: true,
                start: "top 15%",
                endTrigger: '.pin4h',
                id: "pin3h",
                end: "top 10%",
                // markers: true,
                scrub: 1,
            },
        });
        gsap.to('.pin3h', {
            scrollTrigger: {
                trigger:'.pin4h',
                start: "top 35%",
                end: "top 15%",
                duration: 0.25,
                scrub: true,
            },
            opacity: 0,
        });
        // ____________kontakt
        gsap.to('.pin4h', {
            scrollTrigger: {
                trigger:'.pin4h',
                pin: true,
                start: "top 15%",
                end: "1000px 80%",
                id: "pin4h",
                scrub: 1,
            },
        });
        // kontakt esase in
        gsap.from('.aniContact', {
        scrollTrigger: {
            trigger:'.aniContact',
            toggleActions: "play none none none",
            start: "top 60%",
        },
        // duration: 1,
        opacity: 0,
        y: 50, 
        });
        </script>
    

</body>
</html>