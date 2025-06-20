<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wale</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/wale/css/reset.css">
    <link rel="stylesheet" href="/wale/css/style.css">
    <link rel="stylesheet" href="/wale/css/resposive.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@xpressengine/xeicon@2.3.3/xeicon.min.css">
    
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/wale/js/common.js"></script>


</head>
<body>
    <div class="wrap">
        <!-- HEADER S -->
        <header>
            <div class="hd_wrap">
                <div class="cm_inner01">
                    <div class="hd_ir">
                        <!-- LOGO S -->
                        <h1 class="logo">
                            <a href="../main/main.php">
                                Wale
                            </a>
                        </h1>
                        <!-- LOGO E -->

                        <!-- MENU S -->
                        <ul class="main_mnu">
                            <li><a href="../sub/shop_list01.php">SHOP</a></li>
                            <li><a href="../sub/event_list01.php">EVENT</a></li>
                            <li><a href="../sub/notice_list01.php">NOTICE</a></li>
                        </ul>
                        <!-- MENU E -->

                        <!-- 정보메뉴 S -->
                         <ul class="log_items">
                            <li>
                                <button type="button" class="btn_mdl_sch">
                                    <i class="xi-search"></i>
                                </button>
                            </li>
                            <li>
                                <a href="../member/login.php">
                                    <i class="xi-user"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="xi-basket"></i>
                                </a>
                            </li>
                         </ul>
                        <!-- 정보메뉴 E -->

                        <!-- 헤더 메뉴 버튼 S -->
                        <button type="button" class="btn_mnu_opn">
                            <i class="xi-bars"></i>
                        </button> 
                        <!-- 헤더 메뉴 버튼 E -->
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER E -->


        <!-- 모바일 메뉴 S -->
        <div id="mo_mnu_mdl">
            <div class="mo_mnu">
                <div class="mnu_hd">
                    <ul class="hd_items">
                        <li><a href="../member/login.php">Login</a></li>
                        <li><a href="#!">My</a></li>
                        <li><a href="#!">Cart(<span class="num">0</span>)</a></li>
                        <li><a href="#!">Order</a></li>
                    </ul>
                    <button type="button" class="btn_mo_cls">
                        <i class="xi-close"></i>
                    </button>
                </div>
                <ul class="mnu_bd mnu_bd01">
                    <li><a href="../sub/shop_list01.php">SHOP</a></li>
                    <li><a href="../sub/event_list01.php">EVENT</a></li>
                    <li><a href="../sub/notice_list01.php">NOTICE</a></li>
                </ul>
                <ul class="mnu_bd mnu_bd02">
                    <li><a href="#!">INSTARGRAM</a></li>
                    <li><a href="#!">BLOG</a></li>
                </ul>
            </div>
        </div>
        <!-- 모바일 메뉴 E -->


        
        <!-- 검색창 모달 S -->
         <div id="sch_mdl">
            <div class="sch_cont">
                <form action="">
                    <div class="sch_bx">
                        <div class="inp_bx">
                            <input type="text">
                            <button type="submit">
                                <i class="xi-search"></i>
                            </button>    
                        </div>
                    </div>
                </form>
            </div>
         </div>
        <!-- 검색창 모달 E -->