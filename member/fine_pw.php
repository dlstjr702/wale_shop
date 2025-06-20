
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
                            <h2 class="tit">FINE PASSWORD</h2>
                        </div>
                        <!-- 상단 E -->
                        <!-- 중간 S -->
                        <div class="mid">
                            <div id="pt_mb_inp">
                                <form action="">
                                    <div class="mb_frm_ir">
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text" id="id" class="inp_val">
                                                <label for="id">ID</label>
                                            </div>
                                        </div>
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text" id="name" class="inp_val">
                                                <label for="name">NAME</label>
                                            </div>
                                        </div>
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text" id="pn" class="inp_val">
                                                <label for="pn">PHONE NUMBER</label>
                                            </div>
                                        </div>
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text" id="eml" class="inp_val">
                                                <label for="eml">E-MAIL</label>
                                            </div>
                                        </div>
                                        <div class="btn_line">
                                            <button type="submit" class="btn btn_login">SUBMIT</button>
                                        </div>
                                        
                                    </div>
                                </form>
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
</script>


<?php include("../inc/footer.php") ?>
