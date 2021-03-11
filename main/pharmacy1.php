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
        
        <div id="drugSet" class="form-row">   
            <div class="form-group col-md-12">
                <label for="drugSetId">1. เป็นยาชุดหรือไม่</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="drugSetId" id="drugSet" value="1" required data-error-msg="กรุณาเลือกข้อมูล">
                    <label class="form-check-label" for="inlineRadio3">ใช่</label>
            
                    <input style ="margin-left: 30px;" class="form-check-input" type="radio" name="drugSetId" id="drugSet" value="2" required data-error-msg="กรุณาเลือกข้อมูล">
                    <label class="form-check-label" for="inlineRadio4">ไม่ใช่</label>
                </div>
            </div>
        </div>        

        <div id="regNo" class="form-row">   
            <div class="form-group col-md-12">
                <label for="regNoId">2. เลขทะเบียนยาที่แสดงในฉลาก</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="regNoId" id="regNo" value="1" required data-error-msg="กรุณาเลือกข้อมูล">
                    <label class="form-check-label" for="inlineRadio3">มี</label>&nbsp&nbsp&nbsp
                    <input type="text" class="form-control mb-2 mr-sm-2" id="regNoId" > 

                    <input style ="margin-left: 30px;" class="form-check-input" type="radio" name="regNoId" id="regNo" value="2" required data-error-msg="กรุณาเลือกข้อมูล">
                    <label class="form-check-label" for="inlineRadio4">ไม่มี</label>
                </div>
            </div>
        </div>

        <div id="regNo" class="form-row">   
            <div class="form-group col-md-12">
                <label for="regNoId">3. ชื่อทางการค้า</label>&nbsp&nbsp&nbsp
                <div class="form-check form-check-inline">
                    <input type="text" class="form-control mb-2 mr-sm-2" id="regNoId" > 
                </div>
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
