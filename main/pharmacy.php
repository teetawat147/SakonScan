<?php
    include "../include/connection.php";
?>


<!doctype html>
<html lang="en">
<head>
    <title>pharmacy</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <style>

        @media only screen and (max-width: 768px) {
            .attach-img-drug,
            .type-drug {
                width: 50%;
            }

            #attachImgDrug {
                margin-top: 28px;
            }
        }

    </style>

</head>
<body>
    <fieldset id="drugSet">
        <div class = "container"><br>
        <h3>ยา (ผลิตภัณฑ์)</h3><br>
            <form class="form" action="userRegisterInsert.php" method="POST">

                <div id="drugSet" class="form-row">   
                    <div class="form-group col-md-12">
                        <label for="drugSetId">เป็นยาชุดหรือไม่</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="drugSetId" id="drugSet" value="1" required data-error-msg="กรุณาเลือกข้อมูล">
                            <label class="form-check-label" for="inlineRadio3">ใช่</label>
                    
                            <input style ="margin-left: 30px;" class="form-check-input" type="radio" name="drugSetId" id="drugSet" value="2" required data-error-msg="กรุณาเลือกข้อมูล">
                            <label class="form-check-label" for="inlineRadio4">ไม่ใช่</label>
                        </div>
                    </div>
                </div>                       

                <div class="input-group">
                    <input id="searchCode1" type="text" class="form-control" maxlength="1" placeholder="" aria-label="" aria-describedby="btnGroupAddon2">
                    <input id="searchCode2" type="text" class="form-control" maxlength="1" placeholder="" aria-label="" aria-describedby="btnGroupAddon2">
                    <input id="searchCode3" type="text" class="form-control" maxlength="5" placeholder="" aria-label="" aria-describedby="btnGroupAddon2">
                    <input id="searchCode4" type="text" value="/"class="form-control" maxlength="1" placeholder="" aria-label="" aria-describedby="btnGroupAddon2" readonly>
                    <input id="searchCode5" type="text" class="form-control" maxlength="5" placeholder="" aria-label="" aria-describedby="btnGroupAddon2">
                    <div class="input-group-prepend">
                    <div class="input-group-text" id="btnGroupAddon2" style="cursor: pointer;"><i class="fas fa-search"></i></div>
                    </div>
                </div><br>

                <label class="form-check-label" for="inlineRadio4"></label>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="cncnm">สถานะทะเบียน</label>
                        <input name="cncnm" id="cncnm" class="form-control" type="text" readonly>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="thadrgnm">ชื่อทางการค้าไทย</label>
                        <input name="thadrgnm" id="thadrgnm" class="form-control" type="text" readonly>
                    </div>
                </div>

                <center>
                    <div>
                        <button type="button" class="btn btn-success">ตรง</button>
                        <button type="button" class="btn btn-danger">ไม่ตรง</button>        
                        <button type="button" class="btn btn-warning">ไม่มี</button>
                    </div>
                </center><br>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="engdrgnm">ชื่อทางการค้าอังกฤษ</label>
                        <input name="engdrgnm" id="engdrgnm" class="form-control" type="text" readonly>
                    </div>
                </div>

                <center>
                    <div>
                        <button type="button" class="btn btn-success">ตรง</button>
                        <button type="button" class="btn btn-danger">ไม่ตรง</button>        
                        <button type="button" class="btn btn-warning">ไม่มี</button>
                    </div>
                </center><br>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ctgthanm">หมวดยา</label>
                        <input name="ctgthanm" id="ctgthanm" class="form-control"  type="text" readonly>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="thadsgnm">รูปแบบยา (ไทย)</label>
                        <input name="thadsgnm" id="thadsgnm" class="form-control" type="text" readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="engdsgnm">รูปแบบยา (อังกฤษ)</label>
                        <input name="engdsgnm" id="engdsgnm" class="form-control" type="text" readonly>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="thaclassnm">ประเภทของยา</label>
                        <input name="thaclassnm" id="thaclassnm" class="form-control" type="text" readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6 type-drug">
                        <label for="thakindnm">ประเภทของยาควบคุมตามกฏหมาย</label>
                        <input name="thakindnm" id="thakindnm" class="form-control" type="text" readonly>
                    </div>

                    <div class="form-group col-md-6 attach-img-drug">
                            <label for="attachImgDrug">แนปรูปภาพยา</label>
                            <input type="file" class="form-control-file" name="attachImgDrug" id="attachImgDrug" readonly>
                    </div>
                </div>

                <center>
                    <div>
                        <button type="button" class="btn btn-success">ตรง</button>
                        <button type="button" class="btn btn-danger">ไม่ตรง</button>        
                        <button type="button" class="btn btn-warning">ไม่มี</button>
                    </div>
                </center><br>


                

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="lcnno_no">เลขที่ใบอนุญาต</label>
                        <input name="lcnno_no" id="lcnno_no" class="form-control" type="text" readonly>
                    </div>
                </div>

                <!-- <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="atcnm">กลุ่มตำรับยา</label>
                        <input name="atcnm" id="atcnm" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="indication">ข้อบ่งใช้</label>
                        <textarea name="indication" id="indication" rows="3" class="form-control"></textarea>
                    </div>
                </div> -->

                <!-- <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="iow">ส่วนประกอบสารสำคัญต่อหน่วย</label>
                        <input name="iow" id="iow" class="form-control" type="text">
                    </div>
                </div> -->

                <!-- <h4>ข้อมูลยาสัตว์</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="amltpnm">ประเภทสัตว์</label>
                        <input name="amltpnm" id="amltpnm" class="form-control" type="text">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="amlsubnm">ชนิดสัตว์</label>
                        <input type="text" name="amlsubnm" id="amlsubnm" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="usetpnm">การใช้</label>
                        <input type="text" name="usetpnm" id="usetpnm" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="stpdrg">ระยะหยุดยา</label>
                        <input type="text" name="stpdrg" id="stpdrg" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="packuse">ขนาดและวิธีการใช้</label>
                        <input type="text" name="packuse" id="packuse" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cncnote">ข้อห้ามใช้</label>
                        <input name="cncnote" id="cncnote" class="form-control" type="text">
                    </div>
                </div> -->

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="licen_loca">ชื่อผู้รับอนุญาต </label>
                        <input name="licen_loca" id="licen_loca" class="form-control" type="text" readonly>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="thanm">ชื่อสถานที่</label>
                        <input name="thanm" id="thanm" class="form-control" type="text" readonly>
                    </div>
                </div>

                <center>
                    <div>
                        <button type="button" class="btn btn-success">ตรง</button>
                        <button type="button" class="btn btn-danger">ไม่ตรง</button>        
                        <button type="button" class="btn btn-warning">ไม่มี</button>
                    </div>
                </center><br>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="fulladdr">ที่ตั้ง </label>
                        <textarea name="fulladdr" id="fulladdr" rows="4" class="form-control" readonly></textarea>
                    </div>
                </div>


                <div class="form-row">
                    <!-- <div class="form-group col-md-6">
                        <label for="licen_loca">รายละเอียดผู้ผลิต</label>
                        <input name="licen_loca" id="licen_loca" class="form-control" type="text">
                    </div> -->

                    <div class="form-group col-md-12">
                        <label for="thanm">ชื่อผู้แทนจำหน่าย</label>
                        <input name="thanm" id="thanm" class="form-control" type="text" readonly>
                    </div>
                </div>

                <!-- <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="cnccsnm">เหตุผลที่ยกเลิกคำขอ</label>
                        <input name="cnccsnm" id="cnccsnm" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="cncdate_th">วันที่ยกเลิก</label>
                        <input name="cncdate_th" id="cncdate_th" class="form-control" type="text">
                    </div>
                </div><br> -->

                    <center>
                    <a class="btn btn-secondary" href="../main/login.php" role="button">ยกเลิก</a>
                    <button type="button" class="btn btn-primary">ถัดไป</button>
                    </center>
            </form>
        </div>

        <div class="modal fade" id="searchFail" tabindex="-1" role="dialog" aria-labelledby="searchFailLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchFailLabel">แจ้งเตือน</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center">เลขทะเบียนไม่ถูกต้อง!!!</p>
                    <p class="text-center">กรุณาตรวจสอบเลขทะเบียน และกรอกใหม่อีกครั้ง</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                </div>
                </div>
            </div>
        </div>

    </fieldset>
    

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src ="https://www.jquery-az.com/boots/js/validate-bootstrap/validate-bootstrap.jquery.min.js" ></script>


    <script>
        $(function(){
            $("#btnGroupAddon2").click(function(){
                console.log($("#searchCode1").val()+$("#searchCode2").val()+$("#searchCode3").val()+$("#searchCode4").val()+$("#searchCode5").val())
                $.ajax({
                    method: "POST",
                    url: "pharmacySearchCode.php",
                    data: { searchCode: $("#searchCode1").val()+$("#searchCode2").val()+$("#searchCode3").val()+$("#searchCode4").val()+$("#searchCode5").val() }
                }).done(function( msg ) {
                    var parser,xmlDoc;
                    parser=new DOMParser();
                    xmlDoc=parser.parseFromString(msg,"text/xml");
                    // console.log(xmlDoc);

                    // console.log(xmlDoc.getElementsByTagName("Table1")[0]);
                    var thisValue = xmlDoc.getElementsByTagName("Table1")[0];
                    // console.log(thisValue.getElementsByTagName("Newcode")[0].innerHTML);
                    var Newcode = thisValue.getElementsByTagName("Newcode")[0].innerHTML;

                    $.ajax({
                        method: "POST",
                        url: "pharmacyNewcode.php",
                        data: { Newcode: Newcode}
                    }).done(function( msg ) {
                        var parser, xmlDoc;
                        parser=new DOMParser();
                        xmlDoc=parser.parseFromString(msg, "text/xml");
                        // console.log(xmlDoc);

                        // console.log(xmlDoc.getElementsByTagName("XML_SEARCH_DRUG_DR")[0]);
                        var thisValue = xmlDoc.getElementsByTagName("XML_SEARCH_DRUG_DR")[0];
                        // console.log(thisValue.getElementsByTagName("thadrgnm")[0].innerHTML);
                        $("#thadrgnm").val(thisValue.getElementsByTagName("thadrgnm")[0].innerHTML);
                        $("#engdrgnm").val(thisValue.getElementsByTagName("engdrgnm")[0].innerHTML);
                        $("#appdate_th").val(thisValue.getElementsByTagName("appdate_th")[0].innerHTML);
                        $("#expdate").val(thisValue.getElementsByTagName("expdate")[0].innerHTML);
                        $("#ctgthanm").val(thisValue.getElementsByTagName("ctgthanm")[0].innerHTML);
                        $("#thadsgnm").val(thisValue.getElementsByTagName("thadsgnm")[0].innerHTML);
                        $("#engdsgnm").val(thisValue.getElementsByTagName("engdsgnm")[0].innerHTML);
                        $("#thaclassnm").val(thisValue.getElementsByTagName("thaclassnm")[0].innerHTML);
                        $("#thakindnm").val(thisValue.getElementsByTagName("thakindnm")[0].innerHTML);
                        $("#lcnno_no").val(thisValue.getElementsByTagName("lcnno_no")[0].innerHTML);
                        $("#atcnm").val(thisValue.getElementsByTagName("atcnm").innerHTML);
                        $("#indication").val(thisValue.getElementsByTagName("indication")[0].innerHTML);
                        $("#iow").val("1/1 1 หน่วย คือ " + thisValue.getElementsByTagName("drgperunit") !== null ? thisValue.getElementsByTagName("drgperunit")[0].innerHTML : " " + " " + thisValue.getElementsByTagName("iowanm") !== null ? thisValue.getElementsByTagName("iowanm")[0].innerHTML : " " + " ปริมาณ/หน่วย " + thisValue.getElementsByTagName("qtytxt_all") !== null ? thisValue.getElementsByTagName("qtytxt_all")[0].innerHTML : " ");
                        $("#amltpnm").val(thisValue.getElementsByTagName("amltpnm").innerHTML);
                        $("#amlsubnm").val(thisValue.getElementsByTagName("amlsubnm").innerHTML);
                        $("#usetpnm").val(thisValue.getElementsByTagName("usetpnm").innerHTML);
                        $("#stpdrg").val(thisValue.getElementsByTagName("stpdrg").innerHTML);
                        $("#packuse").val(thisValue.getElementsByTagName("packuse").innerHTML);
                        $("#cncnote").val(thisValue.getElementsByTagName("cncnote")[0].innerHTML);
                        $("#licen_loca").val(thisValue.getElementsByTagName("licen_loca")[0].innerHTML);
                        $("#thanm").val(thisValue.getElementsByTagName("thanm")[0].innerHTML);
                        $("#fulladdr").val(thisValue.getElementsByTagName("fulladdr")[0].innerHTML);
                        $("#Newcode_U").val(thisValue.getElementsByTagName("Newcode_U")[0].innerHTML);
                        $("#cncnm").val(thisValue.getElementsByTagName("cncnm")[0].innerHTML);
                        $("#licen_loca").val(thisValue.getElementsByTagName("licen_loca")[0].innerHTML);
                        $("#thanm").val(thisValue.getElementsByTagName("thanm")[0].innerHTML);
                        $("#cnccsnm").val(thisValue.getElementsByTagName("cnccsnm")[0].innerHTML);
                        $("#cncdate_th").val(thisValue.getElementsByTagName("cncdate_th")[0].innerHTML);
                        $("#lmdfdate").val(thisValue.getElementsByTagName("lmdfdate")[0].innerHTML);      
                    });
                });
            })
        })


    </script>


  </body>
</html>