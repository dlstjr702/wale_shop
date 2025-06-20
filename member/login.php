
<?php include("../inc/header.php") ?>




<!-- MAIN S -->
<main>
    <section id="ss_contain">
        <div class="ms_wrap">
            <div class="cm_inner02">
                <div class="ss_ir">
                   <div id="shp_member">
                        <!-- 상단 S -->
                        <div class="top">
                            <h2 class="tit">LOGIN</h2>
                        </div>
                        <!-- 상단 E -->
                        <!-- 중간 S -->
                        <div class="mid">
                            <div id="pt_mb_inp">
                                <?php
                                require_once "../data/db_conn.php";

                                if(!isset($_SESSION['id']) || !isset($_SESSION['password'])) { ?>
                                    <form action="../main/main.php" method="post">
                                        <div class="mb_frm_ir">
                                            <div class="inp_line">
                                                <div class="inp_bx">
                                                    <input type="text" id="id" class="inp_val">
                                                    <label for="id">ID</label>
                                                </div>
                                                <p class="error_txt error_txt01">아이디를 입력해주세요.</p>
                                            </div>
                                            <div class="inp_line">
                                                <div class="inp_bx">
                                                    <input type="text" id="pw"  class="inp_val">
                                                    <label for="pw">PASSWORD</label>
                                                </div>
                                                <p class="error_txt error_txt02">비밀번호를 입력해주세요.</p>
                                            </div>
                                            <div class="btn_line">
                                                <button type="submit" class="btn btn_login" onclick="login_check();">LOGIN</button>
                                            </div>
                                            <div class="mb_add_bx">
                                                <a href="./fine_id.php">아이디찾기</a>
                                                <a href="./fine_pw.php">비밀번호찾기</a>
                                                <a href="./join.php">회원가입</a>
                                            </div>
                                        </div>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- 중간 E -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- MAIN E -->


<script>
    $(document).ready(function(){
        // 인풋에 입력값 유/무에 따라 label 애니메이션 작동
        $("input").focus(function(){
            $(this).siblings("label").css({"left":"10px","top":"0","color":"#ddd"});
        })
        $("input").focusout(function(){
            if($(this).val().length == 0){
                $(this).siblings("label").css({"left":"20px","top":"50%","color":"#333"});
            }else{
                $(this).siblings("label").css({"left":"10px","top":"0","color":"#ddd"});
            }
        })
    });


    // 로그인체크
    function login_check() {
            let userid = $("#id");
            let userpw = $("#pw");
            let err_txt01 = $(".error_txt01");
            let err_txt02 = $(".error_txt02");
            if (userid.val() == "") {
                err_txt01.css({"display":"block"});
            };
            if (userpw.val() == "") {
                err_txt02.css({"display":"block"});
            };
        };
</script>





<?php include("../inc/footer.php") ?>
