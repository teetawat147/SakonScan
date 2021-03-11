<!-- <?php
include("../include/connection.php");
?> -->
<!doctype html>
<html lang="en">
<head>
    <title>pharmacy</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

</head>
<body>
    <fieldset id="drugSet" style="display:block;">
        <div class = "container"><br>              
        <h3>ยา (ผลิตภัณฑ์)</h3>
    <form class="form" action="userRegisterInsert.php" method="POST">
        <input type="hidden" name="lineId" id="lineId" value="<?php echo (isset($_GET['lineId']))?$_GET['lineId']:"";?>" >
        
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">

            <div class="input-group-prepend">
            <div class="input-group-text" id="btnGroupAddon2" style="cursor: pointer;"><i class="fas fa-search"></i></div>
            </div>
        </div><br>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="cosmeticsName">ชื่อเครื่องสำอาง</label>
                <input name="cosmeticsName" id="cosmeticsName" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกเลขบัตรประจำตัวประชาชน">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tradeName">การค้า</label>
                <input name="tradeName" id="tradeName" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกชื่อ">
            </div>

            <div class="form-group col-md-6">
                <label for="fname">วิธีการใช้</label>
                <input name="fname" id="fname" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกชื่อ">
            </div>
        </div>

        <div class="form-row">    
            <div class="form-group col-md-6">
                <label for="warning">คำเตือน ±</label>
                <input name="warning" id="warning" class="form-control" min="3"  type="text" data-error-msg="กรุณากรอกนามสกุล">
            </div>
        
            <div class="form-group col-md-6">
                <label for="ingredient">ส่วนประกอบ</label>
                <input name="ingredient" id="ingredient" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกเบอร์โทรศัพท์">
            </div>
        </div>

        <div class="form-row">    
            <div class="form-group col-md-6">
                <label for="quantity">ปริมาณ</label>
                <input name="quantity" id="quantity" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกเบอร์โทรศัพท์">
            </div>

            <div class="form-group col-md-6">
                <label for="Manufacturer">ผู้ผลิต/นำเข้า</label>
                <input name="Manufacturer" id="Manufacturer" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Username">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="MFG">วันที่ผลิต</label>
                <input name="MFG" id="MFG" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">    
            </div>

            <div class="form-group col-md-6">
                <label for="registrationNumber">เลขที่จดแจ้ง</label>
                <input name="registrationNumber" id="registrationNumber" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">
            </div>
        </div><br>

    
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


    <script>
        // var settings = {
        //     "url": "http://porta.fda.moph.go.th/FDA_SEARCH_ALL/WS_LICENSE_SEARCH.asmx?WSDL",
        //     "method": "POST",
        //     "timeout": 0,
        //     "headers": {
        //         "Content-Type": "text/xml",
        //         header('Access-Control-Allow-Origin: *')
        //     },
        //     "data": "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" \r\nxmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" \r\nxmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\">\r\n    <soap:Body>\r\n        <GET_DATA_ALL xmlns=\"http://tempuri.org/\">\r\n            <DATAS>1016200023984</DATAS>\r\n        </GET_DATA_ALL>\r\n    </soap:Body>\r\n</soap:Envelope>",
        // };
        // $.ajax(settings).done(function (response) {
        //     console.log(response);
        // });

        // $(function(){
        //     $("#btnGroupAddon2").click(function(){
        //         alert("aaaaaa");
        //         $.ajax({
        //             method: "POST",
        //             url: "getAmpur.php",
        //             data: { provinceCode: provinceCode}
        //         }).done(function( msg ) {
        //             $("#div-districtCode").html(msg);
        //             let tambonmsg= '<label for="subdistrictCode">ตำบล</label>';
        //                 tambonmsg+='<select name="subdistrictCode" id="subdistrictCode" class="form-control" required data-error-msg="กรุณากรอกชื่อตำบล">';
        //                 tambonmsg+='<option selected disabled>Choose...</option>';
        //                 tambonmsg+='</select>';            
        //             $("#div-subdistrictCode").html(tambonmsg);
        //         });
        //     })
        // })


        
    // var settings = {
    //     "url": "http://porta.fda.moph.go.th/FDA_SEARCH_ALL/WS_LICENSE_SEARCH.asmx?WSDL",
    //     "method": "POST",
    //     "timeout": 0,
    //     "headers": {
    //         "Content-Type": "text/xml",
    //         "Cookie": "cookiesession1=678B769A89012BEILORVYBEFGHIJE48F"
    // },
    //   "data": "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<soap:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" \r\nxmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" \r\nxmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\">\r\n    <soap:Body>\r\n        <GET_DATA_ALL xmlns=\"http://tempuri.org/\">\r\n            <DATAS>1016200023984</DATAS>\r\n        </GET_DATA_ALL>\r\n    </soap:Body>\r\n</soap:Envelope>",
    // };

    // $.ajax(settings).done(function (response) {
    //   console.log(response);
    // });

    </script>


  </body>
</html>
