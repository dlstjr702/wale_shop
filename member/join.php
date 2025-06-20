
<?php
 require_once "../data/db_conn.php"; 
 $id = $password = $confirm_password = $name= $mail = "";
 $id = $password_err = $confirm_password_err = $name_err= $mail_err = ""; 

 if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(empty(trim($_POST["id"]))){
     $id_err = "아이디를 입력해주세요.";
   } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["id"]))){
     $id_err = "id에는 문자, 숫자, 밑줄만 포함할 수 있습니다.";
   } else{
      $sql = "SELECT id FROM Member WHERE id = ?";
 
     if($stmt = $conn->prepare( $sql)){
       $stmt->bind_param("s", $param_id); 
      $param_id = trim($_POST["id"]);
      if( $stmt->execute()){ 
         $stmt->store_result();
 
         if( $stmt->num_rows == 1){
           $id_err = "이 ID는 이미 사용 중입니다.";
         } else{
           $id = trim($_POST["id"]);
         }
       } else{
         echo "나중에 다시 시도 해주십시오.";
       }
       $stmt->close();
     }
   }
 
   if(empty(trim($_POST["password"]))){
     $password_err = "비밀번호를 입력하세요."; 

       } elseif(strlen(trim($_POST["password"])) < 6){
     $password_err = "비밀번호는 6자 이상이어야 합니다.";
   } else{
     $password = trim($_POST["password"]);
   }
  
   if(empty(trim($_POST["confirm_password"]))){
     $confirm_password_err = "비밀번호를 확인해 주세요.";
   } else{
     $confirm_password = trim($_POST["confirm_password"]);
     if(empty($password_err) && ($password != $confirm_password)){
       $confirm_password_err = "Password did not match.";
     }
   }
   
   if(empty(trim($_POST["name"]))){
     $name_err = "이름을 입력하세요.";
   } else{
     $name = trim($_POST["name"]);
   }
   
   if( empty(trim($_POST["mail"])) ){
     $email_err = "이메일을 입력하세요.";
   } else{
     $mail = trim($_POST["mail"]);
   }
 
  
 
   if(empty($id_err) && empty($password_err) && empty($confirm_password_err) 
 && empty($name_err) && empty($mail_err)){

      $sql = "INSERT INTO member (id, password, name, birth, mail, 
 phone, address, regist_day) VALUES (?,?,?,?,?,?,?,? )";
 
      if($stmt = $conn->prepare($sql)){
        $stmt->bind_param("ssssssss", $param_id, $param_password, $param_name, 
        $param_birth, $param_mail, $param_phone, $param_address, 
        $param_regist_day);
        $param_id = $id;
        $param_password = $password;
        $param_name = $name;
  
        $year = trim($_POST["birthyy"]);
        $month = trim($_POST["birthmm"]);
        $day = trim($_POST["birthdd"]);
        $birth = trim($year . "/" .$month . "/" . $day);
        $param_birth = $birth;
  
        $param_mail=$mail;
        $param_phone=trim($_POST["phone"]); 
        $param_address=trim($_POST["address"]); 
        $param_regist_day = date("Y/m/d H:i:s A"); 
 
       if($stmt->execute()){
         Header("Location:resultMember.php?msg=1"); 
       } else{
         echo "나중에 다시 시도 해주십시오.";
       }
       $stmt->close($stmt);
     }
   } 
    $conn->close();
 }
 ?>


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
                            <h2 class="tit">JOIN</h2>
                        </div>
                        <!-- 상단 E -->
                        <!-- 중간 S -->
                        <div class="mid">
                            <div id="pt_mb_inp">
                                <form name="memberForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="mb_frm_ir">
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text" name="id" id="id" class="inp_val">
                                                <label for="id">ID</label>
                                            </div>
                                        </div>
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text"  name="password" id="password" class="inp_val">
                                                <label for="password">PASSWORD</label>
                                            </div>
                                        </div>
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text" id="confirm_password"  name="confirm_password" class="inp_val">
                                                <label for="confirm_password">PASSWORD CONFIRM</label>
                                            </div>
                                        </div>
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text" id="name" name="name" class="inp_val">
                                                <label for="name">NAME</label>
                                            </div>
                                        </div>
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text" id="brt" name="birth" class="inp_val">
                                                <label for="brt">BIRTH</label>
                                            </div>
                                        </div>
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text" id="mail" name="mail" class="inp_val">
                                                <label for="mail">E-MAIL</label>
                                            </div>
                                        </div>
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text" id="pn" name="phone" class="inp_val">
                                                <label for="pn">PHONE NUMBER</label>
                                            </div>
                                        </div>
                                        <div class="inp_line">
                                            <div class="inp_bx">
                                                <input type="text" id="adr" name="address" class="inp_val">
                                                <label for="adr">ADDRESS</label>
                                            </div>
                                        </div>
                                        <div class="btn_line">
                                            <button type="submit" class="btn btn_login">JOIN</button>
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
