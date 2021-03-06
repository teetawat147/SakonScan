<!-- <?php
include("../include/connection.php");
?> -->
<!doctype html>
<html lang="en">
<head>
    <title>adminUserAddEdit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <fieldset id="userRegister" style="display:block;">
        <div class = "container">
        <br>       
          <center><h3>ลงทะเบียนผู้ใช้งาน</h3></center>
    <form class="form" action="userRegisterInsert.php" method="POST">
        <input type="hidden" name="lineId" id="lineId" value="<?php echo (isset($_GET['lineId']))?$_GET['lineId']:"";?>" >
        
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="cid">เลขบัตรประจำตัวประชาชน</label>
                <input name="cid" id="cid" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกเลขบัตรประจำตัวประชาชน">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fname">ชื่อ</label>
                <input name="fname" id="fname" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกชื่อ">
            </div>
        

        
            <div class="form-group col-md-6">
                <label for="lname">นามสกุล</label>
                <input name="lname" id="lname" class="form-control" min="3"  type="text" data-error-msg="กรุณากรอกนามสกุล">
            </div>
        </div>
        

        <div class="form-row">    
            <div class="form-group col-md-12">
                <label for="phone">เบอร์โทรศัพท์</label>
                <input name="phone" id="phone" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกเบอร์โทรศัพท์">
                
            </div>
        </div>

        <div class="form-row">    
            <div class="form-group col-md-6">
                <label for="Username">Username</label>
                <input name="Username" id="Username" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Username">
                
            </div>

            <div class="form-group col-md-6">
                <label for="Password">Password</label>
                <input name="Password" id="Password" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">
                
            </div>

        </div>

        <div class="form-row"> 
            <div class="form-group col-md-6">
                <label for="office">ชื่อหน่วยงาน</label>
                <select id="office" class="form-control">
                    <option selected>Choose...</option>
                    <option>หน่วยงาน A</option>
                    <option>หน่วยงาน B</option>
                    <option>หน่วยงาน C</option>
                    <option>หน่วยงาน D</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="position">ตำแหน่ง</label>
                <select id="position" class="form-control">
                    <option selected>Choose...</option>
                    <option>ตำแหน่ง A</option>
                    <option>ตำแหน่ง B</option>
                    <option>ตำแหน่ง C</option>
                    <option>ตำแหน่ง D</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="email">Email</label>
                <input name="email" id="email" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Email">
            </div>
        </div>

            <center>
            <a class="btn btn-secondary" href="../main/login.php" role="button">ยกเลิก</a>
            <button type="button" class="btn btn-primary">ถัดไป</button>                
            </center> 

    </fieldset>          
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src ="https://www.jquery-az.com/boots/js/validate-bootstrap/validate-bootstrap.jquery.min.js" ></script>

    <!-- <script>
        $(function(){
            $("#provinceCode").change(function(){
                let provinceCode = $(this).val();
                // alert(provinceCode);
                $.ajax({
                    method: "POST",
                    url: "getAmpur.php",
                    data: { provinceCode: provinceCode}
                }).done(function( msg ) {
                    $("#div-districtCode").html(msg);
                    let tambonmsg= '<label for="subdistrictCode">ตำบล</label>';
                        tambonmsg+='<select name="subdistrictCode" id="subdistrictCode" class="form-control" required data-error-msg="กรุณากรอกชื่อตำบล">';
                        tambonmsg+='<option selected disabled>Choose...</option>';
                        tambonmsg+='</select>';            
                    $("#div-subdistrictCode").html(tambonmsg);                   
                });
            })
            $("#div-districtCode").on("change","#districtCode",function(){              
                let districtCode = $(this).val();
                let provinceCode = $("#provinceCode").val();
                $.ajax({
                    method: "POST",
                    url: "getTambon.php",
                    data: { provinceCode: provinceCode, districtCode:districtCode }
                }).done(function( msg ) {
                    $("#div-subdistrictCode").html(msg);
                    
                });
            })
        });

        $(function(){
            $("#officeId").change(function() {               
                let officeId = $(this).val();                 
                $.ajax({
                    method: "POST",
                    url: "getDepartment.php",
                    data: { officeId: officeId}
                }).done(function(msg) {
                    // alert(msg);
                    $("#departmentId").html(msg);                                  
                });
            })
        });
    </script> -->
  </body>
</html>
