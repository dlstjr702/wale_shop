$(document).ready(function () {
    //===================================================================================================// 
    // 헤더영역
    //===================================================================================================// 
    //---------------------------------------------------------------------------------------------------//
    // 헤더 모바일 메뉴 열기, 닫기
    $(".btn_mnu_opn").click(function () {
        $("#mo_mnu_mdl").addClass("on");
    });

    $(".btn_mo_cls").click(function () {
        $("#mo_mnu_mdl").removeClass("on");
    });

    //---------------------------------------------------------------------------------------------------//
    // 화면 스크롤에 따른 헤더 스타일 변경
    function hdSty() {
        if ($(window).scrollTop() <= 0) {
            $("header").css({
                "background": "unset"
            });
            $(".logo>a").css({
                "color": "#333"
            });
            $(".main_mnu>li>a").css({
                "color": "#333"
            });
            $(".log_items>li>a , .log_items>li>.btn_mdl_sch, .btn_mnu_opn").css({
                "color": "#333"
            });
        } else {
            $("header").css({
                "background": "rgba(0,0,0,.36)"
            });
            $(".logo>a").css({
                "color": "#fff"
            });
            $(".main_mnu>li>a").css({
                "color": "#fff"
            });
            $(".log_items>li>a , .log_items>li>.btn_mdl_sch, .btn_mnu_opn").css({
                "color": "#fff"
            });
        }
    }
    hdSty();

    $(window).scroll(function () {
        hdSty();
    });

    //---------------------------------------------------------------------------------------------------//
    // 헤더 검색 모달창 열기 
    $(".btn_mdl_sch").click(function () {
        $("#sch_mdl").stop().fadeIn();
    });


    //---------------------------------------------------------------------------------------------------//
    // 서치 모달창 검색영역 밖 영역 클릭하면 닫기
    $("#sch_mdl").mouseup(function (e) {
        var LayerPopup = $(".sch_cont");
        if (LayerPopup.has(e.target).length === 0) {
            $("#sch_mdl").fadeOut();
        }
    });


    //---------------------------------------------------------------------------------------------------//
    // 헤더 높이값 받아와서 메인패딩 탑 값주기
    function hdPd() {
        let hdHg = $("header").innerHeight();
        $("main").css({
            "paddingTop": hdHg
        });
    };

    hdPd();

    $(window).resize(function () {
        hdPd();
    });
    //===================================================================================================// 


    //===================================================================================================// 
    // 푸터영역
    //===================================================================================================// 

    //===================================================================================================// 


    //===================================================================================================// 
    // 메인영역
    //===================================================================================================// 

    //===================================================================================================// 


    //===================================================================================================// 
    // 서브영역
    //===================================================================================================// 
    //---------------------------------------------------------------------------------------------------//
    // 서브 - 상품 뷰 슬라이드 
    $('.prd_sub_sd').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        vertical: true,
        asNavFor: '.prd_main_sd',
        focusOnSelect: true
    });
    $('.prd_main_sd').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // asNavFor: '.prd_sub_sd',
        arrows: false,
        dots: false,
        centerMode: false,
    });

    //---------------------------------------------------------------------------------------------------//
    // 서브 - 상품 뷰 하단 상세페이지 부분 탭 메뉴
    $("#rvw_tab .tab_hd li").click(function () {
        let nowTc = $(this).index();

        $("#rvw_tab .tab_hd li").removeClass("on");
        $(this).addClass("on");
        $("#rvw_tab .tab_bd li").removeClass("on");
        $("#rvw_tab .tab_bd li").eq(nowTc).addClass("on");

    })


    //---------------------------------------------------------------------------------------------------//
    // 서브 - 장바구니 옵션변경 모달창
    $(".chg_txt").click(function () {
        $("#mdl_opt_chg").stop().fadeIn();
    })

    $(".btn_opt_cls").click(function () {
        $("#mdl_opt_chg").stop().fadeOut();
    })

  $("#mdl_opt_chg").mouseup(function (e) {
        var LayerPopup = $(".mdl_wrap");
        if (LayerPopup.has(e.target).length === 0) {
            $("#mdl_opt_chg").fadeOut();
        }
    });

    //===================================================================================================// 

})