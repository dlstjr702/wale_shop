
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

                            <div class="noti_sch_bx">
                                <form action="">
                                    <div class="sch_bx">
                                        <input type="text">
                                        <button type="submit" class="btn btn_sch">SEARCH</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- 상단 E -->
                        <!-- 중간 S -->
                        <div class="mid">
                            <!-- 게시판 리스트 S -->
                             <ul class="noti_list">
                                <li class="list_line"> 
                                    <div class="line_col">
                                        <input type="checkbox" name="" id="">
                                    </div>
                                    <div class="line_col">
                                        <p class="evt_flag">NEW</p>
                                    </div>
                                    <a href="./event_view.php" class="line_col">
                                        <p class="subject">핫썸머 데이즈 기간 전 상품 30% 할인 판매</p>
                                    </a>
                                    <div class="line_col">
                                        <p class="view_num">30</p>
                                    </div>
                                    <div class="line_col">
                                        <p class="name">관리자</p>
                                    </div>
                                    <div class="line_col">
                                        <p class="date">2025-06-19</p>
                                    </div>
                                </li>
                             </ul>
                            
                            <!-- 게시판 리스트 E -->
                            
                            <!-- 페이저 S -->
                             <div class="pg_btn_list">
                                <a href="#!" class="btn pg_num">1</a>
                                <a href="#!" class="btn pg_num">2</a>
                                <a href="#!" class="btn pg_num">3</a>
                             </div>
                            <!-- 페이저 E -->

                            <!-- 글쓰지 S -->
                             <div class="wrt_btn_list">
                                <a href="./event_input01.php" class="btn wrt_btn">WRITE</a>
                                <a href="#!" class="btn wrt_btn">EDIT</a>
                                <a href="#!" class="btn wrt_btn">DELETE</a>
                             </div>
                            <!-- 글쓰지 E -->
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
