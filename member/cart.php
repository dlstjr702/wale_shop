
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
                            <h2 class="tit">CART</h2>

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
                            <div id="pt_cart">
                                <div class="left">
                                    <ul class="cart_items">
                                        <li class="cart_item">
                                            <div class="item_col">
                                                <input type="checkbox">
                                            </div>
                                            <div class="item_col_info">
                                                <a href="../sub/shop_view01.php" class="top">
                                                    <div class="img_bx">
                                                        <img src="../img/sub/prd01.jpg" alt="바지이미지">
                                                    </div>
                                                    <div class="txt_bx">
                                                        <h3 class="tit">SHORT PENTS GRAY</h3>
                                                        <p class="prc">32,000</p>
                                                        <p class="dvy"><span class="way01">택배배송</span>-<span class="way02">무료배송</span></p>
                                                        
                                                    </div>
                                                </a>
                                                <ul class="mid">
                                                    <li>
                                                        <i class="xi-label"></i> [옵션]-<span class="txt">GRAY/L/3개</span><span class="chg_txt">[옵션변경]</span>
                                                    </li>
                                                </ul>
                                                <dl class="bot">
                                                    <dt><p class="tit">주문금액</p></dt>
                                                    <dd>KRW<p class="num">32,000</p></dd>
                                                </dl>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="right">
                                    <div class="total_bx">
                                        <ul class="ttl_list01">
                                            <li>
                                                <p class="tit">결제금액</p>
                                                <p class="prc">KRW <span class="num">117,500</span></p>
                                            </li>
                                            <li>
                                                <p class="tit">배송비</p>
                                                <p class="prc">KRW <span class="num">2,500</span></p>
                                            </li>
                                        </ul>
                                        <dl class="ttl_list02">
                                            <dt>
                                                <p class="txt">총 결제 금액</p>
                                            </dt>
                                            <dd>
                                                KRW<p class="prc_num">120,000</p>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="btn_bx">
                                        <a href="#!" class="btn btn_all_buy">전체상품주문</a>
                                        <a href="#!" class="btn btn_pic_buy">선택상품주문</a>
                                    </div>
                                </div>
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

<!-- 옵션 모달창 S -->
 <div id="mdl_opt_chg">
    <div class="mdl_wrap">
        <div class="mdl_ir">
            <div class="mdl_hd">
                <p class="tit">옵션변경</p>
                <button type="button" class="btn btn_opt_cls">
                    <i class="xi-close"></i>
                </button>
            </div>
            <div class="mdl_bd">
                <h4 class="tit">상품명</h4>
                <dl class="bd_row">
                    <dt>색상</dt>
                    <dd>
                        <div class="sel_bx">
                            <select name="" id="">
                                <option value="">GRAY</option>
                                <option value="">BLUE</option>
                                <option value="">GREEN</option>
                            </select>
                        </div>
                    </dd>
                </dl>
                <dl class="bd_row">
                    <dt>사이즈</dt>
                    <dd>
                        <div class="sel_bx">
                            <select name="" id="">
                                <option value="">S</option>
                                <option value="">M</option>
                                <option value="">L</option>
                                <option value="">XL</option>
                            </select>
                        </div>
                    </dd>
                </dl>
            </div>
            <div class="mdl_ft">
                <button type="button" class="btn btn_add">추가</button>
                <button type="button" class="btn btn_edit">변경</button>
            </div>
        </div>
    </div>
 </div>
<!-- 옵션 모달창 E -->


<?php include("../inc/footer.php") ?>
