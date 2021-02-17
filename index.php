<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/favicon3.png" />
    <!-- image for social media links -->
    <meta property="og:image" content="img/sm.jpg">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="105">
    <!-- describtion-->
    <meta name="description" content="Jednodušší přístup k informacím a aktualitám o finančních produktech z pohodlí Vašeho domova."> 
    <title>JAROSLAV BEZOUŠKA - Hypotéky | Investice | Pojištění</title>
    <!-- ManyChat -->
    <script src="//widget.manychat.com/110920740663472.js" async="async"></script> 
    <!-- Overeni domeny pro facebook -->
    <meta name="facebook-domain-verification" content="z4oeodoqeo7m7zw2fwtliyzh2alrff" />
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
    <section class="hero" id="hero">
        <div class="container">
            <div class="fringe">
                <div class="menu_div home_align">
                    <a href="index.php"><img src="img/home_icon.png" alt="ikona domů" class="home_icon"></a>
                </div>
            </div>
            <div class="main">
                <div class="blue_extra blue"></div>
                <div class="navigation_cont row">
                    <div class="navigation_box"></div>
                    <div class="navigation_box"></div>
                    <div class="navigation_box"></div>
                    <!-- aktuality -->
                    <div class="navigation_box logoani"><span class="nav_header color_db"></div> 
                    <div class="navigation_box logoani"><span class="nav_header color_db"><a href="hypoteky.php" class="nav_link">HYPOTÉKY</a></span></div>
                    <div class="navigation_box logoani"><span class="nav_header color_db"><a href="investice.php" class="nav_link">INVESTICE</a></span></div>
                    <div class="navigation_box logoani"><span class="nav_header color_db"><a href="pojisteni.php" class="nav_link">POJIŠTĚNÍ</a></span></div>
                    <div class="navigation_box logoani"><span class="nav_header color_db"><a href="index.php#about" class="nav_link">O MNĚ</a></span></div>
                    <div class="navigation_box logoani"><span class="nav_header color_w"><a href="index.php#reference" class="nav_link_white">REFERENCE</a></span></div>
                    <div class="navigation_box logoani"><span class="nav_header color_w"><a href="index.php#contact" class="nav_link_white">KONTAKT</a></span></div>
                </div>
                <div class="hero_img_box heroani2">
                    <img src="img/hero_mob.jpg" alt="Jaroslav Bezouška" class="hero_img">
                    <!-- <img src="img/hero_pc.jpg" alt="" class="hero_img_pc"> -->
                </div>
                <div class="hero_title_cont heroani">
                    <span class="hero_name">JAROSLAV</span>
                    <span class="hero_name surname">BEZOUŠKA</span>
                    <span class="podtitul">Oblastní Ředitel</span>
                    <a href="#contact"><button class="green_button">NAPIŠTE MI</button></a>

                </div>

            </div>
            <div class="fringe">
                <div class="menu_div blue">
                    <span onclick="openNav()">
                        <img src="img/hmb_icon.png" alt="ikona menu" class="hmb_icon">
                        <img src="img/menubig.png" alt="ikona menu" class="hmb_icon_largescreen">
                    </span>
                   
                </div>
                <div class="blue_fringe blue"></div>
                <div class="down_fringe">
                    <div class="down_box">
                        <p class="down logoani">Služby</p>
                    </div>
                    <a href="#services"><img src="img/sipka.png" alt="šipka" class="sipka_icon logoani"></a>
                </div>
            </div>
        </div>
    </section>
    <!--*********************** SERVICES *************************-->
    <section class="services" id="services">
        <div class="container">
            <div class="fringe"><br><h2 class="pin1">Služby</h2></div>
            <div class="main">
                <div class="grid row">
                    <div class="mobile_hidden">
                        <div class="square blue">
                            <div onclick="services_back()" class="containerBack" id="zpet_teb_pc">
                                <div class="sipkaLeft"><img src="img/sipkaLeft.png" alt="šipka"></div>
                                <p>Krok zpět</p>
                            </div>
                        </div>
                        <div class="square light"></div>
                        <div class="square scene">
                            <!-- CO VAS ZAJIMA - DESKTOP-->
                            <div class="card" id="zajima_1">
                                <div class="card__face card__face--front--img grey"></div>
                                <div class="card__face card__face--back light">
                                    <h3 class="mobile_hide">CO VÁS ZAJÍMÁ?</h3>
                                </div>
                            </div>
                        </div>
                        <div class="square light"></div>
                        <div class="square grey"></div>
                    </div>
                    <div class="grid__column">
                        <!-- <div class="square light"></div> -->
                        <!-- CO VAS ZAJIMA - MOBIL - PART 1 -->
                        <div class="square scene mobile_only">
                            <div class="card" id="zajima_1m">
                                <div class="card__face card__face--front--img light"></div>
                                <div class="card__face card__face--back light align-right">
                                    <h3 >CO VÁS</h3>
                                </div>
                            </div>
                        </div>
                        <!-- image 1 -->
                        <div class="square scene">
                            <div class="card" id="inv_img_card_1">
                                <div class="card__face card__face--front--img hypo_bg" onclick="hypo_quest()"></div>
                                <div class="card__face card__face--back" id="sq_img_b_1"></div>
                            </div>
                        </div>
                         <!-- question 2 -->
                        <div class="square scene">
                            <div class="card" onclick="inv_quest()">
                                <div class="card__face card__face--front theme">
                                    <h3 id="sq_header_2">INVESTICE</h3>
                                    <a href="hypoteky.php#hypo_invest" id="sq_question_2h"><p>Jak co nejvýhodněji pořídit investiční nemovitost?</p></a>
                                    <a href="investice.php#advanced_invest" id="sq_question_2i"><p>Investice pro pokročilé</p></a>
                                    <a href="pojisteni.php#majetek" id="sq_question_2p"><p>Pojištění Majetku</p></a>
                                </div>
                                <!-- <div class="card__face card__face--back"><p>Jak nejvýhodněji financovat nákup  investiční nemovitosti?</p></div> -->

                            </div>
                        </div>
                        <!-- image 3 -->
                        <div class="square scene">
                            <div class="card" id="inv_img_card_3">
                                <div class="card__face card__face--front--img poj_bg" onclick="poj_quest()"></div>
                                <div class="card__face card__face--back" id="sq_img_b_3"></div>
                            </div>
                        </div>
                        <div class="square light">
                            <div class="contBackMob" onclick="services_back()" id="zpet_teb_mob">
                                <div class="sipkaLeft"><img src="img/sipkaLeft.png" alt="šipka"></div>
                                <p>Krok zpět</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column">
                        
                        <!-- CO VAS ZAJIMA - MOBIL - PART 2 -->
                        <div class="square scene">
                            <div class="card" id="zajima_2m">
                                <div class="card__face card__face--front--img grey"></div>
                                <div class="card__face card__face--back light align-left">
                                    <h3 >ZAJÍMÁ?</h3>
                                </div>
                            </div>
                        </div>
                        <!-- question 1 -->
                        <div class="square light scene">
                            <div class="card" id="hypo_card" onclick="hypo_quest()">
                                <div class="card__face card__face--front theme">
                                    <h3 id="sq_header_1" >HYPOTÉKY</h3>
                                    <a href="hypoteky.php" id="sq_question_1h"><p>Jak získat svoji první hypotéku?</p></a>
                                    <a href="investice.php#zacit_investovat" id="sq_question_1i"><p>Začínám investovat</p></a>
                                    <a href="pojisteni.php" id="sq_question_1p"><p>Životní Pojištění</p></a>
                                </div>
                            </div>
                        </div>
                        <!-- image 2 -->
                        <div class="square scene">
                            <div class="card" id="inv_img_card_2">
                                <div class="card__face card__face--front--img inv_bg" onclick="inv_quest()"></div>
                                <div class="card__face card__face--back" id="sq_img_b_2"></div>
                            </div>
                        </div>
                        <!-- question 3 -->
                        <div class="square light scene">
                            <div class="card" onclick="poj_quest()">
                                <div class="card__face card__face--front theme">
                                    <h3 id="sq_header_3">POJIŠTĚNÍ</h3>
                                    <a href="hypoteky.php#hypo_zlevnit" id="sq_question_3h"><p>Jak zlevnit nebo předčasně splatit stávající hypotéku?</p></a>
                                    <a href="investice.php#middle_invest" id="sq_question_3i"><p>Jsou mé investice správně nastaveny?</p></a>
                                    <a href="pojisteni.php#auto" id="sq_question_3p"><p>Pojištění Auta</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="square blue"></div>
                    </div>
                    <div class="mobile_hidden">
                        <div class="square light"></div>
                        <div class="square blue"></div>
                        <div class="square light"></div>
                        <div class="square grey"></div>
                        <div class="square light"></div>
                    </div>
                </div>
            </div>
            <div class="fringe"></div>
        </div>
    </section>
    <!--*********************** NEWS *************************-->
    <!-- <section class="news" id="news">
        <div class="container">
            <div class="fringe"><br><h2>Aktuality</h2></div>
            <div class="main">
                <h1 class="hero__title">Aktuality!!</h1>
                <div class="fb_container">
                    <div class="fb_post"></div>
                    <div class="fb_post"></div>
                </div>
                <div class="button_div">
                    <button class="green_button">CHCI VÍCE INFO</button>
                </div>
            </div>
            <div class="fringe"></div>
        </div>

    </section> -->
    <!--*********************** ABOUT *************************-->
    <section class="about" id="about">
        <div class="container">
            <div class="fringe"><br><h2 class="pin2">O Mně</h2></div>
            <div class="main">
                <div class="about__container aniAbout">
                    <div class="about__row">
                        <div class="dsk_show">
                            <p class="about__paragraph" >Momentálně pracuji na úplné digitalizaci mých služeb. To pro klienty znamená 
                                jednodušší a pohodlnější přístup k informacím a aktualitám o finančních produktech, které již využívají,
                                 nebo o ně mají zájem. Nové informace ze světa financí zprostředkovávám prostřednictvím svého 
                                 facebooku a webu.</p>
                        </div>
                        <div class="about__text_one">
                        <p class="about__paragraph">Jsem finanční a investiční poradce a v oboru pracuji od roku 2015. 
                            Největším tématem jsou pro mě  investice, protože mi záleží na tom, 
                            aby majetek mých klientů v čase kontrolovaně rostl. 
                            Díky práci s rezervami a využívání ostatních finančních produktů s 
                            investicemi pak společně dosahujeme jejich cílů a finanční svobody.</p>
                        <p class="about__paragraph">Má vize je předávat své zkušenosti mým spolupracovníkům, aby mohli šířit 
                                kvalitní poradenství mezí více klientů. Společně tak můžeme ovlivňovat 
                                směr, jakým se budou finance ubírat v dalších letech.</p>
                        </div>
                        <div class="portrait aniAbout">
                            <img src="img/portrait.jpg" alt="Jaroslav" >
                        </div>
                
                    </div>
                    <p class="about__paragraph dsk_hide" >Momentálně pracuji na úplné digitalizaci mých služeb. To pro klienty znamená 
                        jednodušší a pohodlnější přístup k informacím a aktualitám o finančních produktech, které již využívají,
                         nebo o ně mají zájem. Nové informace ze světa financí zprostředkovávám prostřednictvím svého 
                         facebooku a webu.</p>
                </div>

                <!-- NUMBERS -->
                <div class="numbers_container about3">
                    <div class="numbers light">
                        <div class="numbers_line blue"></div>
                        <span class="numbers_number">180</span>
                        <span class="numbers_label">STÁLÝCH KLIENTŮ</span>
                    </div>
                    <div class="numbers blue white_txt">
                        <div class="numbers_line white"></div>
                        <span class="numbers_number">18mil.</span>
                        <span class="numbers_label">KČ POD SPRÁVOU</span>
                    </div>
                    <div class="numbers blue white_txt">
                        <div class="numbers_line white"></div>
                        <span class="numbers_number">120mil.</span>
                        <span class="numbers_label">KČ V HYPOTEČNÍCH ÚVĚRECH</span>
                    </div>
                    <div class="numbers light skip">
                        <div class="numbers_line blue"></div>
                        <span class="numbers_number">11</span>
                        <span class="numbers_label">AKTIVNÍCH SPOLUPRACOVNÍKŮ</span>
                    </div>
                    <div class="numbers light">
                        <div class="numbers_line blue"></div>
                        <span class="numbers_number">1</span>
                        <span class="numbers_label">OSOBNÍ ASISTENTKA</span>
                    </div>
                </div>
                <!-- DIPLOMS -->
                <div class="diplom_box">
                    <div class="diplom pc_only">
                        <img src="img/diplom4.jpg" alt="diplom" >
                    </div>
                    <div class="diplom">
                        <img src="img/diplom1.jpg" alt="certifikát" >
                    </div>
                    <div class="diplom">
                        <img src="img/diplom2.jpg" alt="diplom" >
                    </div>
                </div>
                <a href="#contact"><button class="green_button aniButton">OZVĚTE SE</button></a>
            </div>
            <div class="fringe"></div>
        </div>

    </section>
    <!--*********************** REFERENCE *************************-->
    <section class="reference" id="reference">
        <div class="container">
            <div class="fringe"><br><h2 class="pin3">Reference</h2></div>
            <div class="main">
                <!-- only mobile -->
                <div class="only_mob_reference aniRef">
                    <!-- klient 1 -->
                    <div id="mob_ref_klient1">
                        <div class="reference_box">
                            <div reference_img_div>
                                <img src="img/klient1.jpg" alt="reference od klienta" class="reference_img"> 
                            </div>
                            <p class="reference_paragraph">
                                Se službami pana Bezoušky jsem nesmírně spokojená. Moje předchozí zkušenosti s finančními poradci nebyly dobré,
                                ale přístup pana Bezoušky mne příjemně překvapil. Vytvořil pro mne komplexní dlouhodobý finanční plán - 
                                hypotéku, pojištění pro mne, děti i veškerý movitý a nemovitý majetek, nabídl mi několik možností 
                                spoření a investování, jak krátkodobého tak dlouhodobého. Vše mi řádně vysvětlil,
                                nabídl několik možností a poradil s výběrem nejvýhodnějších produktů pro mne a moji rodinu.
                                Jeho služby nejsou jen jednorázové a jsme i nadále v kontaktu. Jeho služby mohu vřele doporučit!
                            </p>
                            <div class="reference_name">
                                <span class="ref_name">Tereza Horynová</span> <br>
                                <span class="ref_produkt">financni plan</span>
                            </div>
                        </div>
                        <div class="reference_arrows">
                            <div class="arrow_div grey"><img src="img/al.png" alt="doleva"></div>
                            <div><img src="img/mob_slider1.png" alt="počítadlo"></div>
                            <div class="arrow_div"  onclick="mobileReference('#mob_ref_klient2',  '#mob_ref_klient1', '#mob_ref_klient3',  '#mob_ref_klient4')"><img src="img/ar.png" alt="doprava"></div>
                        </div>
                    </div>
                    <!-- klient 2 -->
                    <div id="mob_ref_klient2">
                        <div class="reference_box">
                            <div reference_img_div>
                                <img src="img/klient2.jpg" alt="reference od klienta" class="reference_img"> 
                            </div>
                            <p class="reference_paragraph">
                                Se službami pana Bezoušky jsem nesmírně spokojená. Moje předchozí zkušenosti s finančními poradci nebyly dobré,
                                ale přístup pana Bezoušky mne příjemně překvapil. Vytvořil pro mne komplexní dlouhodobý finanční plán - 
                                hypotéku, pojištění pro mne, děti i veškerý movitý a nemovitý majetek, nabídl mi několik možností 
                                spoření a investování, jak krátkodobého tak dlouhodobého. Vše mi řádně vysvětlil,
                                nabídl několik možností a poradil s výběrem nejvýhodnějších produktů pro mne a moji rodinu.
                                Jeho služby nejsou jen jednorázové a jsme i nadále v kontaktu. Jeho služby mohu vřele doporučit!
                            </p>
                            <div class="reference_name">
                                <span class="ref_name">Barbora Kovářová</span> <br>
                                <span class="ref_produkt">Hypotéka, Investice, Pojištění</span>
                            </div>
                        </div>
                        <div class="reference_arrows">
                            <div class="arrow_div" onclick="mobileReference('#mob_ref_klient1',  '#mob_ref_klient2', '#mob_ref_klient3',  '#mob_ref_klient4')"><img src="img/al.png" alt="doleva"></div>
                            <div><img src="img/mob_slider2.png" alt="počítadlo"></div>
                            <div class="arrow_div"  onclick="mobileReference('#mob_ref_klient3',  '#mob_ref_klient2', '#mob_ref_klient1',  '#mob_ref_klient4')"><img src="img/ar.png" alt="doprava"></div>
                        </div>
                    </div>
                    <!-- klient 3 -->
                    <div id="mob_ref_klient3">
                        <div class="reference_box">
                            <div reference_img_div>
                                <img src="img/klient3.jpg" alt="reference od klienta" class="reference_img"> 
                            </div>
                            <p class="reference_paragraph">
                                Pan Bezouška je velmi milý a šikovný finanční poradce. Při prvním setkání jsem ocenila 
                                několikahodinové vysvětlení celé problematiky, které bylo určitě velmi vyčerpávající, ale 
                                já se teď díky tomu mnohem lépe orientuji ve světě investic, spoření a hypoték. Vážím si jeho
                                spolehlivosti a toho, že je vždy k dispozici se mnou cokoli konzultovat jak přes telefon, 
                                tak osobně. Věřím, že opravdu pracuje v nejlepším zájmu svých klientů. Doporučuji spolupráci 
                                s ním komukoli - i těm, kteří jsou v této oblasti začátečníky, opravdu vám vše krásně a 
                                jednodušše vysvětlí. <br><br><br>
                            </p>
                            <div class="reference_name">
                                <span class="ref_name">Adéla Rambousková</span> <br>
                                <span class="ref_produkt">Hypotéka</span>
                            </div>
                        </div>
                        <div class="reference_arrows">
                            <div class="arrow_div"  onclick="mobileReference('#mob_ref_klient2',  '#mob_ref_klient1', '#mob_ref_klient3',  '#mob_ref_klient4')"><img src="img/al.png" alt="doleva"></div>
                            <div><img src="img/mob_slider3.png" alt="počítadlo"></div>
                            <div class="arrow_div"  onclick="mobileReference('#mob_ref_klient4',  '#mob_ref_klient2', '#mob_ref_klient3',  '#mob_ref_klient1')"><img src="img/ar.png" alt="doprava"></div>
                        </div>
                    </div>
                    <!-- klient 4 -->
                    <div id="mob_ref_klient4">
                        <div class="reference_box">
                            <div reference_img_div>
                                <img src="img/klient4.jpg" alt="reference od klienta" class="reference_img"> 
                            </div>
                            <p class="reference_paragraph">
                                S panem Bezouškou jsem začal spolupracovat začátkem roku 2020. Hledal jsem někoho, 
                                kdo by mi  jako laikovi pomohl s vyřízením a nalezením vhodné banky k poskytnutí 
                                hypotéky. Již po několika málo  schůzkách jsem pochopil, že to byla správná volba a 
                                byl mi velmi nápomocný během celého procesu vyřízení a čerpání úvěru. Vzhledem k tomu, 
                                že jsem byl s jeho službami spokojený, tak jsem skrze něj  začal řešit i investování do
                                podílových fondů a zajištění své finanční budoucnosti. Oceňuji zde: osobní přístup, 
                                velkou časovou flexibilitu a nasazení.<br><br>
                            </p>
                            <div class="reference_name">
                                <span class="ref_name">Dominik Čuba</span> <br>
                                <span class="ref_produkt">Hypotéka, Investice</span>
                            </div>
                        </div>
                        <div class="reference_arrows">
                            <div class="arrow_div"  onclick="mobileReference('#mob_ref_klient3',  '#mob_ref_klient2', '#mob_ref_klient1',  '#mob_ref_klient4')"><img src="img/al.png" alt="doleva"></div>
                            <div><img src="img/mob_slider4.png" alt="počítadlo"></div>
                            <div class="arrow_div grey"><img src="img/ar.png" alt="doprava"></div>
                        </div>
                    </div>
                </div>


                <!-- ONLY TABLET************************************* -->
                <div class="only_tablet_reference aniRef">
                    <div class="row"> 
                        <!-- klient 1 -->
                        <div id="tab_ref_klient1">
                            <div class="reference_box">
                                <div reference_img_div>
                                    <img src="img/klient1.jpg" alt="reference od klienta" class="reference_img"> 
                                </div>
                                <p class="reference_paragraph">
                                    S panem Bezouškou se nám velmi dobře spolupracuje. Je schopen flexibilně a rychle reagovat 
                                    na všechny naše podněty, nemá problém se časově přizpůsobit ani ve večerních hodinách. Ke komunikaci 
                                    využívá i online média, což se aktuálně hodí. S manželem jsme celkem skeptičtí, co se finančního 
                                    poradenství týče, ale pan Bezouška nás do ničeho netlačí, vždy vše trpělivě a s úsměvem vysvětlí a případně přizpůsobí dle našich představ. Díky němu víme, co si můžeme i do budoucna dovolit.
                                </p>
                                <div class="reference_name">
                                    <span class="ref_name">Tereza Horynová</span> <br>
                                    <span class="ref_produkt">financni plan</span>
                                </div>
                            </div>
                        </div>
                        <!-- klient 2 -->
                        <div id="tab_ref_klient2">
                            <div class="reference_box">
                                <div reference_img_div>
                                    <img src="img/klient2.jpg" alt="reference od klienta" class="reference_img"> 
                                </div>
                                <p class="reference_paragraph">
                                    Se službami pana Bezoušky jsem nesmírně spokojená. Moje předchozí zkušenosti s finančními poradci nebyly dobré,
                                    ale přístup pana Bezoušky mne příjemně překvapil. Vytvořil pro mne komplexní dlouhodobý finanční plán - 
                                    hypotéku, pojištění pro mne, děti i veškerý movitý a nemovitý majetek, nabídl mi několik možností 
                                    spoření a investování, jak krátkodobého tak dlouhodobého. Vše mi řádně vysvětlil,
                                    nabídl několik možností a poradil s výběrem nejvýhodnějších produktů pro mne a moji rodinu.
                                    Jeho služby nejsou jen jednorázové a jsme i nadále v kontaktu. Jeho služby mohu vřele doporučit!
                                </p>
                                <div class="reference_name">
                                    <span class="ref_name">Barbora Kovářová</span> <br>
                                    <span class="ref_produkt">Hypotéka, Investice, Pojištění</span>
                                </div>
                            </div>
                
                        </div>
                        <!-- klient 3 -->
                        <div id="tab_ref_klient3">
                            <div class="reference_box">
                                <div reference_img_div>
                                    <img src="img/klient3.jpg" alt="reference od klienta" class="reference_img"> 
                                </div>
                                <p class="reference_paragraph">
                                    Pan Bezouška je velmi milý a šikovný finanční poradce. Při prvním setkání jsem ocenila 
                                    několikahodinové vysvětlení celé problematiky, které bylo určitě velmi vyčerpávající, ale 
                                    já se teď díky tomu mnohem lépe orientuji ve světě investic, spoření a hypoték. Vážím si jeho
                                    spolehlivosti a toho, že je vždy k dispozici se mnou cokoli konzultovat jak přes telefon, 
                                    tak osobně. Věřím, že opravdu pracuje v nejlepším zájmu svých klientů. Doporučuji spolupráci 
                                    s ním komukoli - i těm, kteří jsou v této oblasti začátečníky, opravdu vám vše krásně a 
                                    jednodušše vysvětlí.<br><br><br>
                                </p>
                                <div class="reference_name">
                                    <span class="ref_name">Adéla Rambousková</span> <br>
                                    <span class="ref_produkt">Hypotéka</span>
                                </div>
                            </div>
                          
                        </div>
                        <!-- klient 4 -->
                        <div id="tab_ref_klient4">
                            <div class="reference_box">
                                <div reference_img_div>
                                    <img src="img/klient4.jpg" alt="reference od klienta" class="reference_img"> 
                                </div>
                                <p class="reference_paragraph">
                                    S panem Bezouškou jsem začal spolupracovat začátkem roku 2020. Hledal jsem někoho, 
                                    kdo by mi  jako laikovi pomohl s vyřízením a nalezením vhodné banky k poskytnutí 
                                    hypotéky. Již po prvních schůzkách jsem pochopil, že to byla správná volba a 
                                    byl mi velmi nápomocný během celého procesu vyřízení a čerpání úvěru. Vzhledem k tomu, 
                                    že jsem byl s jeho službami spokojený, tak jsem skrze něj  začal řešit i investování do
                                    podílových fondů a zajištění své finanční budoucnosti. Oceňuji zde: osobní přístup, 
                                    velkou časovou flexibilitu a nasazení.<br><br><br>
                                </p>
                                <div class="reference_name">
                                    <span class="ref_name">Dominik Čuba</span> <br>
                                    <span class="ref_produkt">Hypotéka, Investice</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reference_arrows" id="tab_ref_left">
                        <div class="arrow_div grey"><img src="img/al.png" alt="doleva"></div>
                        <div><img src="img/tab_slider1.png" alt="počítadlo" id="tab_slider"></div>
                        <div class="arrow_div" onclick="tabChangeSliderMiddle()"><img src="img/ar.png" alt="doprava"></div>
                    </div>
                    <div class="reference_arrows" id="tab_ref_middle">
                        <div class="arrow_div" onclick="tabChangeSliderLeft()"><img src="img/al.png" alt="doleva"></div>
                        <div><img src="img/tab_slider2.png" alt="počítadlo" id="tab_slider"></div>
                        <div class="arrow_div" onclick="tabChangeSliderRight()"><img src="img/ar.png" alt="doprava"></div>
                    </div>
                    <div class="reference_arrows" id="tab_ref_right">
                        <div class="arrow_div" onclick="tabChangeSliderMiddle()"><img src="img/al.png" alt="doleva"></div>
                        <div><img src="img/tab_slider3.png" alt="počítadlo" id="tab_slider"></div>
                        <div class="arrow_div grey"><img src="img/ar.png" alt="doprava"></div>
                    </div>
                </div>


                <!-- ONLY PC************************************* -->
                <div class="only_pc_reference aniRef">
                    <div class="row"> 

                        
                        <div class="ref_img" id="pc_ref_klient2">
                            <img src="img/ref2.jpg" alt="reference od klienta">
                        </div>
                        <div class="ref_img" id="pc_ref_klient3">
                            <img src="img/ref4.jpg" alt="reference od klienta">
                        </div>
                        <div class="ref_img" id="pc_ref_klient4">
                            <img src="img/ref3.jpg" alt="reference od klienta">
                        </div>

                    </div>
                    <div class="reference_arrows" id="pc_ref_left">
                        <div class="arrow_div grey"><img src="img/al.png" alt="doleva"></div>
                        <div><img src="img/pc_slider1.png" alt="počítadlo" id="tab_slider"></div>
                        <div class="arrow_div" onclick="pcChangeSliderMiddle()"><img src="img/ar.png" alt="doprava"></div>
                    </div>
                    <div class="reference_arrows" id="pc_ref_middle">
                        <div class="arrow_div" onclick="pcChangeSliderLeft()"><img src="img/al.png" alt="doleva"></div>
                        <div><img src="img/pc_slider2.png" alt="počítadlo" id="tab_slider"></div>
                        <div class="arrow_div" onclick="pcChangeSliderRight()"><img src="img/ar.png" alt="doprava"></div>
                    </div>
                    <div class="reference_arrows" id="pc_ref_right">
                        <div class="arrow_div" onclick="pcChangeSliderMiddle()"><img src="img/al.png" alt="doleva"></div>
                        <div><img src="img/pc_slider3.png" alt="počítadlo" id="tab_slider"></div>
                        <div class="arrow_div grey"><img src="img/ar.png" alt="doprava"></div>
                    </div>
                    <div class="reference_arrows" id="pc_ref_right">
                        <div class="arrow_div" onclick="pcChangeSliderRight()"><img src="img/al.png" alt="doprava"></div>
                        <div><img src="img/pc_slider3.png" alt="počítadlo" id="tab_slider"></div>
                        <div class="arrow_div grey"><img src="img/ar.png" alt="doprava"></div>
                    </div>
                </div>

            </div>
            <div class="fringe"></div>  
        </div>
        
    </section>
    <!--*********************** CONTACT *************************-->
    <section class="contact" id="contact">
        <div class="container">
            <div class="fringe"><br><h2 class="pin4">Kontakt</h2></div>
            <div class="main">
                <div class="contact_container aniContact">
                <div></div>    

                <?php 
                    $url = "index.php#finalMessage";
                    include'contact.php';
                ?>
                    <!-- <form action="mailto:helena.kmochova@4fin.cz" method="post" enctype="text/plain"  name="EmailTestForm">
                        <label for="jmeno">Jméno</label><br>
                        <input type="text" id="jmeno" name="name" required><div class="required"></div>
                        <label for="cislo">Mobil</label><br>
                        <input type="number" id="cislo" name="mobil"  required><div class="required"></div>
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
                    2021 Created by <a href="https://lucieweb.dev/">Lucie</a> & <a href="https://www.behance.net/martinnovotny93">Martin</a></p>
                </div>
            </div>
            <div class="fringe"></div>
        </div>

    </section>
    <!-- js -->
    <script src="myScript.js"></script>
    <!-- or jquery online version -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- greensock -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/CSSRulePlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/Draggable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/EaselPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/MotionPathPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/PixiPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollToPlugin.min.js"></script>
    <script>
        // fix scrolling from services
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
        // heropage ani
        gsap.registerPlugin();
        gsap.from(".logoani", {
            opacity: 0,
            y: 30,
            onEnter: '.logoani',
            duration: 1,
            stagger: 0.25
        })
        gsap.from(".heroani", {
            x: "-20%",
            onEnter: '.heroani',
            duration: 1,
        })
        gsap.from(".heroani2", {
            onEnter: '.heroani2',
            opacity: 0.5,
            duration: 1,
            x: 30,
        })
        // services
        gsap.registerPlugin(ScrollTrigger);
        gsap.from(".square", 1, {
            scrollTrigger:{
                trigger: ".grid",
                start: "top center",
                id: 'grid',
                // markers: true,
            },
            scaleY: 0,
            // scale: 0, 
            // y: 60,
            // yoyo: true, 
            // repeat: -1, 
            ease: "power1.inOut",
            // delay: 0.25,
            stagger: {
            amount: 1, 
            grid: "auto",
            from: "top"
            }
        });
        gsap.registerPlugin(ScrollTrigger);
        // about
        gsap.from('.aniAbout', {
            scrollTrigger: {
                trigger:'.aniAbout',
                toggleActions: "play none none none",
                start: "top 70%",
            },
            opacity: 0,
            y: 30, 
            // stagger: 0.4
        });
        // uspechy
        CSSPlugin.defaultTransformPerspective = 400; 
        gsap.from(".numbers", {
            scrollTrigger: {
                trigger:'.numbers',
                toggleActions: "play none none none",
                start: "top 80%",
                // scrub: 1,
            },
            opacity:0,
            duration: 0.3, 
            rotationX: 180,
            stagger: 0.25,
        });
        // diplomy
        gsap.from('.diplom', {
            scrollTrigger: {
                trigger:'.diplom',
                toggleActions: "play none none none",
                start: "top 60%",
            },
            opacity: 0,
            y: 30, 
            stagger: 0.4
        });
        // button esase in
        gsap.from('.aniButton', {
            scrollTrigger: {
                trigger:'.aniButton',
                toggleActions: "play none none none",
                start: "top 80%",
            },
            opacity: 0,
            y: 30, 
        });
        // reference esase in
        gsap.from('.aniRef', {
            scrollTrigger: {
                trigger:'.aniRef',
                toggleActions: "play none none none",
                start: "top 70%",
            },
            duration: 1,
            opacity: 0,
            y: 50, 
        });
        // kontakt esase in
        gsap.from('.aniContact', {
            scrollTrigger: {
                trigger:'.aniContact',
                toggleActions: "play none none none",
                start: "top 40%",
            },
            // duration: 1,
            opacity: 0,
            y: 50, 
        });

        
        // sections
        // ____________sluzby
        gsap.to('.pin1', {
            scrollTrigger: {
                trigger:'.pin1',
                pin: true,
                start: "top 15%",
                endTrigger: '.pin2',
                id: "pin1",
                end: "top 10%",
                // markers: true,
                scrub: 1,
            },
        });
        gsap.to('.pin1', {
            scrollTrigger: {
                trigger:'.pin2',
                start: "top 20%",
                end: "top 15%",
                duration: 0.25,
                scrub: 1,
            },
            opacity: 0,
        });
        // ____________o mne
        gsap.to('.pin2', {
            scrollTrigger: {
                trigger:'.pin2',
                pin: true,
                start: "top 15%",
                endTrigger: '.pin3',
                id: "pin2",
                end: "center 15%",
                // markers: true,
                scrub: 1,
            },
        });
        gsap.to('.pin2', {
            scrollTrigger: {
                trigger:'.pin3',
                start: "top 25%",
                end: "top 15%",
                duration: 0.25,
                scrub: 1,
            },
            opacity: 0,
        });
        // ____________reference
        gsap.to('.pin3', {
            scrollTrigger: {
                trigger:'.pin3',
                pin: true,
                start: "top 15%",
                endTrigger: '.pin4',
                id: "pin3",
                end: "top 10%",
                // markers: true,
                scrub: 1,
            },
        });
        gsap.to('.pin3', {
            scrollTrigger: {
                trigger:'.pin4',
                start: "top 20%",
                end: "top 15%",
                duration: 0.25,
                scrub: 1,
            },
            opacity: 0,
        });
        // ____________kontakt
        gsap.to('.pin4', {
            scrollTrigger: {
                trigger:'.pin4',
                pin: true,
                start: "top 15%",
                end: "900px 80%",
                id: "pin4",
                scrub: 1,
            },
        });
      

           



        // var tlAbout = gasp.timeline();

        // tlAbout.from(".about", {
        //     y: 50,
        //     opacity: 0,
        //     duration: 1
        // });

        // tlAbout.from(".about2", {
        //     y: 50,
        //     opacity: 0,
        //     duration: 1
        // });

        // tlAbout.from(".about3", {
        //     y: 50,
        //     opacity: 0,
        //     duration: 1
        // });

        
        // gsap.to(".logo", {
        //     duration: 4, 
        //     opacity: 1,
        //     ease: "power1",
        // });

        // gsap
        // gsap.to(".header2", {
        //     ScrollTrigger: {
        //         trigger: ".h2",
        //         start: "bottom 5%",
        //         markers: true,
        //         toggleActions: "restart pause restart pause"
        //     },
        //     x: 200,
        // });

        // var card2 = document.querySelector('#hypo_card');
        // card2.addEventListener( 'click', function() {
        // card2.classList.toggle('is-flipped');
        // });

    //     var elementsBackWhite = document.getElementsByClassName("background_white"); //get all elements
    // for (var i = 0; i < elementsBackWhite.length; i++)
    // {
    //     elementsBackWhite[i].style.backgroundColor = "#000000"
    // }
    // *********************** mobile reference function**************************
        var mobRefShow,  mobRefHide1, mobRefHide2,  mobRefHide3;
        function mobileReference(mobRefShow,  mobRefHide1, mobRefHide2,  mobRefHide3)
        {
            $(mobRefShow).show();
            $(mobRefHide1).hide();
            $(mobRefHide2).hide();
            $(mobRefHide3).hide();
        }

        // *********************** tablet reference function**************************
        var tabRefShow1, tabRefShow2, tabRefHide1, tabRefHide2, arrowLeft, arrowRight, slider, arrow
        function tabletReference(tabRefShow1, tabRefShow2, tabRefHide1, tabRefHide2) 
        {
            $(tabRefShow1).show();
            $(tabRefShow2).show();
            $(tabRefHide1).hide();
            $(tabRefHide2).hide();
        }
        function tabChangeSliderLeft()
        {
            $('#tab_ref_left').css("display", "flex");
            $('#tab_ref_middle').hide();
            $('#tab_ref_right').hide();
            tabletReference ('#tab_ref_klient1', '#tab_ref_klient2', '#tab_ref_klient3', '#tab_ref_klient4') ;
        }
        function tabChangeSliderMiddle()
        {
            $('#tab_ref_middle').css("display", "flex");
            $('#tab_ref_left').hide();
            $('#tab_ref_right').hide();
            tabletReference ('#tab_ref_klient3', '#tab_ref_klient2', '#tab_ref_klient1', '#tab_ref_klient4') ;
        }
        function tabChangeSliderRight()
        {
            $('#tab_ref_right').css("display", "flex");
            $('#tab_ref_left').hide();
            $('#tab_ref_middle').hide();
            tabletReference ('#tab_ref_klient3', '#tab_ref_klient4', '#tab_ref_klient1', '#tab_ref_klient2') ;
        }
        

        var pcRef1, pcRef2, pcRef3
        function pcReference(pcRef1, pcRef2, pcRef3) 
        {
            $(pcRef1).animate({width: '40%', maxHeight: '486px'}, 'slow');
            $(pcRef3).animate({width: '30%', maxHeight: '360px'}, 'slow');
            $(pcRef2).animate({width: '30%', maxHeight: '360px'}, 'slow');
            // $(pR1).removeClass('rb_side').addClass('rb_main');
            // $(pR2).removeClass('rb_main').addClass('rb_side');
            // $(pR3).removeClass('rb_main').addClass('rb_side');
            // $(text1).removeClass('ref_par_small').addClass('ref_par_big');
            // $(text2).removeClass('ref_par_big').addClass('ref_par_small');
            // $(text3).removeClass('ref_par_big').addClass('ref_par_small');
        }

        function pcChangeSliderLeft()
        {
            $('#pc_ref_left').css("display", "flex");
            $('#pc_ref_middle, #pc_ref_right').hide();
            pcReference('#pc_ref_klient2', '#pc_ref_klient3', '#pc_ref_klient4')
        }
        function pcChangeSliderMiddle()
        {
            $('#pc_ref_middle').css("display", "flex");
            $('#pc_ref_left, #pc_ref_right').hide();
            pcReference('#pc_ref_klient3', '#pc_ref_klient2', '#pc_ref_klient4')
        }

        function pcChangeSliderRight()
        {
            $('#pc_ref_right').css("display", "flex");
            $('#pc_ref_left, #pc_ref_middle').hide();
            pcReference('#pc_ref_klient4', '#pc_ref_klient2', '#pc_ref_klient3')
        }
        

        

      
        

        var initPosition = true;

        function checkWidth() {
            var screen = $(window).width();
            if (screen < 600)
            {
                $('#zajima_1m').addClass('is-flipped')
                $('#zajima_2m').addClass('is-flipped')
                $('#zpet_teb_mob').fadeIn(500).css("display","flex");
            }
            if (screen >= 606)
            {
                $('#zpet_teb_pc').fadeIn(500).css("display","flex");
            }

        }
        $(window).resize(checkWidth);
  
        function coVasZajima()
        {
            $('#zajima_1').addClass('is-flipped')
            checkWidth(); 
        }

        function hypo_quest()
        {   
            // question 1 + 2 + 3_________________
            $("#sq_header_1, #sq_header_2, #sq_header_3").fadeOut(500, function()
           {
            $("#sq_question_1p, #sq_question_2p, #sq_question_3p").hide();
            $("#sq_question_1i, #sq_question_2i, #sq_question_3i").hide();
            $("#sq_question_1h, #sq_question_2h, #sq_question_3h").fadeIn(500);
           });
   
            //    image 1______________________
            $('#sq_img_b_1').removeClass('inv_bg_1 poj_bg_1').addClass('hypo_bg_1')
            //    image 2______________________
            $('#sq_img_b_2').removeClass('inv_bg_2 poj_bg_2').addClass('hypo_bg_2')
            //    image 3______________________
            $('#sq_img_b_3').removeClass('inv_bg_3 poj_bg_3').addClass('hypo_bg_3')

            $("#inv_img_card_1, #inv_img_card_2, #inv_img_card_3").toggleClass('is-flipped');
            coVasZajima()
            initPosition = false;
        }

        function inv_quest()
        {   
           // question 1 + 2 + 3_________________
           $("#sq_header_1, #sq_header_2, #sq_header_3").fadeOut(function()
           {
            $("#sq_question_1p, #sq_question_2p, #sq_question_3p").hide();
            $("#sq_question_1h, #sq_question_2h, #sq_question_3h").hide();
            $("#sq_question_1i, #sq_question_2i, #sq_question_3i").fadeIn(500);
           });

            //    image 1______________________
            $('#sq_img_b_1').removeClass('hypo_bg_1 poj_bg_1').addClass('inv_bg_1')
            //    image 2______________________
            $('#sq_img_b_2').removeClass('hypo_bg_2 poj_bg_2').addClass('inv_bg_2')
            //    image 3______________________
            $('#sq_img_b_3').removeClass('hypo_bg_3 poj_bg_3').addClass('inv_bg_3')

            $("#inv_img_card_1, #inv_img_card_2, #inv_img_card_3").toggleClass('is-flipped');
            coVasZajima()
            initPosition = false;
        }

        function poj_quest()
        {   
           // question 1 + 2 + 3_________________
           $("#sq_header_1, #sq_header_2, #sq_header_3").fadeOut(500, function()
           {
            $("#sq_question_1h, #sq_question_2h, #sq_question_3h").hide();
            $("#sq_question_1i, #sq_question_2i, #sq_question_3i").hide();
            $("#sq_question_1p, #sq_question_2p, #sq_question_3p").fadeIn(500);
           });

            //    image 1______________________
            $('#sq_img_b_1').removeClass('hypo_bg_1 inv_bg_1').addClass('poj_bg_1')
            //    image 2______________________
            $('#sq_img_b_2').removeClass('hypo_bg_2 inv_bg_2').addClass('poj_bg_2')
            //    image 3______________________
            $('#sq_img_b_3').removeClass('hypo_bg_3 inv_bg_3').addClass('poj_bg_3')

            $("#inv_img_card_1, #inv_img_card_2, #inv_img_card_3").toggleClass('is-flipped');
            coVasZajima()
            initPosition = false;
        }
      
        function services_back()
        {
            if (initPosition == false)
            {
                // question 1_________________
                $("#sq_question_1h, #sq_question_1i, #sq_question_1p").fadeOut(500, function()
                {
                    $("#sq_header_1").delay(500).fadeIn(500);
                });
                // question 2_________________
                $("#sq_question_2h, #sq_question_2i, #sq_question_2p").fadeOut(500, function()
                {
                    $("#sq_header_2").delay(500).fadeIn(500);
                });
                // question 3_________________
                $("#sq_question_3h, #sq_question_3i, #sq_question_3p").fadeOut(500, function()
                {
                    $("#sq_header_3").delay(500).fadeIn(500);
                });

                // img 1 + 2 + 3_________________
                $("#inv_img_card_1, #inv_img_card_2, #inv_img_card_3").toggleClass('is-flipped');
                initPosition = true;
            }  
          
        }


    </script>

</body>
</html>