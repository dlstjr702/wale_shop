
<?php include("../inc/header.php") ?>


<!-- MAIN S -->
<main>
    <section id="ms_contain">
        <div class="ms_wrap">
            <div class="cm_inner02">
                <div class="ms_ir">
                   <div id="shp_notice_list">
                        <!-- 상단 S -->
                        <div class="top">
                            <h2 class="tit">EVENT</h2>

                            <!-- <div class="noti_sch_bx">
                                <form action="">
                                    <div class="sch_bx">
                                        <input type="text">
                                        <button type="submit" class="btn btn_sch">SEARCH</button>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                        <!-- 상단 E -->
                        <!-- 중간 S -->
                        <div class="mid">
                            <!-- 게시판 입력 S -->
                             <div class="noti_inp">
                                <form action="./event_list01.php" method="post">
                                    <!-- 입력 영역 S -->
                                    <div class="noti_inp_ir">
                                        <div class="inp_line">
                                            <p class="tit">TITLE</p>
                                            <div class="inp_bx">
                                                <input type="text" placeholder="SUBJECT">
                                            </div>
                                        </div>
                                        <div class="inp_line">
                                            <p class="tit">DESCRIPT</p>
                                            <div class="inp_bx">
                                                <textarea name="" id="" placeholder="내용을 입력해주세요"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 입력 영역 E -->

                                    <!-- 글쓰기 S -->
                                     <div class="wrt_btn_list">
                                        <a href="./event_list01.php" class="btn wrt_btn">CANCEL</a>
                                        <button type="submit" class="btn wrt_btn">SUBMIT</button>
                                     </div>
                                    <!-- 글쓰기 E -->
                                </form>
                             </div>
                            <!-- 게시판 입력 E -->

                        </div>
                        <!-- 중간 E -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- MAIN E -->


<?php include("../inc/footer.php") ?>
