<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IAPVC 2023</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,400&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">

        {{-- css libraries --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('template/css/owlcarousel/owl.carousel.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('template/css/owlcarousel/owl.theme.default.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('template/css/slick/slick.css') }}"/>
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg" style="background-color: #fff">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('asset/icon_iapc.svg') }}" alt="Logo">
                </a>
                <div class="sponsor-header">
                    <img src="https://www.tamansafari.com/iapvc2022/assets/img/icon_header_2.svg" alt="">
                    <img src="https://www.tamansafari.com/iapvc2022/assets/img/icon_header_tsi.svg" alt="">
                    <img src="https://www.tamansafari.com/iapvc2022/assets/img/icon_header_datascript.svg" alt="">
                    <img src="https://www.tamansafari.com/iapvc2022/assets/img/img_canon.svg" alt="">
                    <button class="btn btn-login" type="submit"><strong>LOGIN</strong></button>
                </div>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarNav">
                    <ul class="navbar-nav navbar-no-expand ml-auto" style="align-items: center;">
                        <li class="nav-item menu_margin">
                            <img src="https://www.tamansafari.com/iapvc2022/assets/img/icon_header_2.svg">
                        </li>
                        <li class="nav-item menu_margin">
                            <img src="https://www.tamansafari.com/iapvc2022/assets/img/icon_header_tsi.svg">
                        </li>
                        <li class="nav-item menu_margin">
                            <img src="https://www.tamansafari.com/iapvc2022/assets/img/icon_header_datascript.svg">
                        </li>
                        <li class="nav-itemmenu_margin"><img src="https://www.tamansafari.com/iapvc2022/assets/img/img_canon.svg">
                        </li>
                        <li class="nav-item menu_margin mr-4">
                            <img src="https://www.tamansafari.com/iapvc2022/assets/img/icon_header_5.svg">
                        </li>
                        <li class="nav-item menu_margin ml-4">
                            <button class="btn btn-login" type="submit"><strong>LOGIN</strong></button>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </nav>

        <div class="menu-content" style="padding-top: 11rem;">
            <img class="img-fluid" src="{{ asset('asset/Banner Website.png') }}" alt="">

            <div class="div-button">
                <button class="btn btn-registration text-center btn-success">
                    <p class="text-register">
                        <i><strong>registration here >></strong></i>
                    </p>
                </button>
            </div>
        </div>

        <div class="menu-icon">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="icons-content">
                        <img src="{{ asset('asset/buttons/Rules.svg') }}" alt="" class="icon-img">
                        <div class="text-center text-menu-button">
                            <p class="icon-text"><strong>RULES</strong></p>
                        </div>
                    </div>
                    <div class="icons-content">
                        <img src="{{ asset('asset/buttons/Prizes.svg') }}" alt="" class="icon-img">
                        <div class="text-center text-menu-button">
                            <p class="icon-text"><strong>PRIZES</strong></p>
                        </div>
                    </div>
                    <div class="icons-content">
                        <img src="{{ asset('asset/buttons/Judges.svg') }}" alt="" class="icon-img">
                        <div class="text-center text-menu-button">
                            <p class="icon-text"><strong>JUDGES</strong></p>
                        </div>
                    </div>
                    <div class="icons-content">
                        <img src="{{ asset('asset/buttons/Schedule.svg') }}" alt="" class="icon-img">
                        <div class="text-center text-menu-button">
                            <p class="icon-text"><strong>SCHEDULE</strong></p>
                        </div>
                    </div>
                    <div class="icons-content">
                        <img src="{{ asset('asset/buttons/Submit.svg') }}" alt="" class="icon-img">
                        <div class="text-center text-menu-button">
                            <p class="icon-text"><strong>SUBMIT</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-winner">
            <div class="text-center pt-4 title-winner">
                THE WINNER IAPVC 1992 - 2022
            </div>
            <div class="text-center text-white sub-winner">
                Keunikan dan keanekaragaman satwa masih menjadi daya tarik bagi para pencinta fotografi.<br> 
                Dalam fotografi satwa terdapat etika dan estetika yang menjadi tolak ukur saat hendak mengabadikan ekspresi para satwa.<br> 
                Melalui fotografi satwa, para peserta turut membantu upaya perlindungan, pemantauan, serta pelestarian satwa. <br>
                Berbekal keuletan, kesabaran dan fokus dalam membidik satwa, maka terciptalah karya foto yang bercerita dan memiliki makna.<br> 
                Inilah hasil karya mereka yang berhasil mencuri perhatian para juri.
            </div>
            <div class="mt-5">
                <div class="row slider-winner">
                    <div class="col-lg-12">
                        <!-- Set up your HTML -->
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="https://i0.wp.com/borobudurnews.com/wp-content/uploads/2021/11/Screenshot-213.png?fit=915%2C605&ssl=1" alt="">
                            </div>
                            <div class="item">
                                <img src="https://pict.sindonews.net/dyn/850/pena/news/2023/02/27/766/1033811/7-hewan-dengan-telinga-panjang-nomor-terakhir-bisa-dikibaskan-seperti-kipas-uct.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="https://asset.kompas.com/crops/CLKOgydea1KEwTYuz1rOrExk1hM=/0x36:1117x781/750x500/data/photo/2021/10/05/615c5f08bd530.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="https://cdn1.katadata.co.id/media/images/thumb/2022/11/07/KELINCI_TERMASUK_HEWAN-2022_11_07-11_08_43_0c8b704d11c90860f75d28a86721a544_620x413_thumb.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="https://cdn1.katadata.co.id/media/images/thumb/2022/11/07/KELINCI_TERMASUK_HEWAN-2022_11_07-11_08_43_0c8b704d11c90860f75d28a86721a544_620x413_thumb.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-sponsor">
            <img src="{{ asset('asset/sponsor_paling_baru.jpg') }}" alt="" class="img-fluid img-sponsor">
        </div>

        <div class="menu-safari">
            <div class="container">
                <div class="d-flex justify-content-center mb-4 mt-4">
                    <img src="{{ asset('asset/icon_taman_tsi.svg') }}" alt="">
                </div>
                <div class="d-flex justify-content-center mb-4 mt-4">
                    <div class="content-icon-tsi">
                        <img class="img-fluid img-menu-logo_tsi" src="{{ asset('asset/logo-anak-tsi/taman safari bogor.svg') }}" alt="">
                    </div>
                    <div class="content-icon-tsi">
                        <img class="img-fluid img-menu-logo_tsi" src="{{ asset('asset/logo-anak-tsi/tsi jatim.svg') }}" alt="">
                    </div>
                    <div class="content-icon-tsi">
                        <img class="img-fluid img-menu-logo_tsi" src="{{ asset('asset/logo-anak-tsi/bali-safari.svg') }}" alt="">
                    </div>
                    <div class="content-icon-tsi">
                        <img class="img-fluid img-menu-logo_tsi" src="{{ asset('asset/logo-anak-tsi/jakarta aquarium.png') }}" alt="">
                    </div>
                    <div class="content-icon-tsi">
                        <img class="img-fluid img-menu-logo_tsi" src="{{ asset('asset/logo-anak-tsi/safari beach jateng.svg') }}" alt="">
                    </div>
                    <div class="content-icon-tsi">
                        <img class="img-fluid img-menu-logo_tsi" src="{{ asset('asset/logo-anak-tsi/royal safari.svg') }}" alt="">
                    </div>
                    <div class="content-icon-tsi">
                        <img class="img-fluid img-menu-logo_tsi" src="{{ asset('asset/logo-anak-tsi/safari resort.svg') }}" alt="">
                    </div>
                    <div class="content-icon-tsi">
                        <img class="img-fluid img-menu-logo_tsi" src="{{ asset('asset/logo-anak-tsi/baobab.svg') }}" alt="">
                    </div>
                    <div class="content-icon-tsi">
                        <img class="img-fluid img-menu-logo_tsi" src="{{ asset('asset/logo-anak-tsi/mara river.jpeg') }}" alt="">
                    </div>
                    <div class="content-icon-tsi">
                        <img class="img-fluid img-menu-logo_tsi" src="{{ asset('asset/logo-anak-tsi/safari wonders.png') }}" alt="">
                    </div>
                    <div class="content-icon-tsi">
                        <img class="img-fluid img-menu-logo_tsi" src="{{ asset('asset/logo-anak-tsi/istana panda.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <img src="https://www.tamansafari.com/iapvc2022/assets/img/icon_iapc_white.svg">
                        </div>
                        <table width="100%" class="font_menu mt-4">
                            <tbody>
                                <tr>
                                    <td align="center">
                                        <div data-toggle="modal" data-target="#dialogModalRules">Rules</div>
                                    </td>
                                    <td align="center">
                                        <div data-toggle="modal" data-target="#dialogModalPrizes">Prizes</div>
                                    </td>
                                    <td align="center">
                                        <div data-toggle="modal" data-target="#dialogModalJudges">Judges</div>
                                    </td>
                                    <td align="center">
                                        <div data-toggle="modal" data-target="#dialogModalCallendar">Schedule</div>
                                    </td>
                                    <td align="center">
                                        <a style="color:white" href="https://www.tamansafari.com/iapvc2022/home/submit_form"> Submit</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="line_footer mt-2">
                        </div>
                        <div class="footer_sub_2 mt-2">
                            © Taman Safari Indonesia. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="font_menu">Head Office</div>
                            <div class="footer_sub_2">Jalan Gandaria Tengah III No.62 A-C Kebayoran Baru, DKI Jakarta 12130
                        </div>
                        <div class="font_menu">Telephone</div>
                        <div class="footer_sub_2">+62217208880 | 1500-212 (Go Safari)</div>
                        <div class="font_menu">Email</div>
                        <div class="footer_sub_2">informasi@tamansafari.com</div>
                    </div>
                    <div class="col-sm-3">
                        <div class="font_menu">Ikuti Terus di</div>
                        <div class="d-flex mt-2">
                            <img class="mr-2" src="https://www.tamansafari.com/iapvc2022/assets/img/ic_facebook.svg">
                            <img class="mr-2" src="https://www.tamansafari.com/iapvc2022/assets/img/ic_youtube.svg">
                            <img src="https://www.tamansafari.com/iapvc2022/assets/img/ic_instagram.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="{{ asset('template/js/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('template/js/slick/slick.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".owl-carousel").owlCarousel({
                    center: true,
                    items: 3,
                    loop: true,
                    margin: 50,
                    responsive:{
                        0: {
                            items:1
                        },
                        600:{
                            items:4
                        }
                    }
                });
                // $('.owl-carousel').owlCarousel({
                //     center: true,
                //     loop:true,
                //     margin:50,
                //     nav:true,
                //     responsive:{
                //         0:{
                //             items:1
                //         },
                //         600:{
                //             items:3
                //         },
                //         1000:{
                //             items:5
                //         }
                //     }
                // })
            });
        </script>
    </body>
</html>