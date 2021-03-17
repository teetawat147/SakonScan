<?php
include("../include/connection.php");
?>


<!doctype html>
<html lang="en">
<head>
    <title>pharmacy</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

</head>
<body>
    <fieldset id="drugSet" style="display:block;">
        <div class = "container"><br>              
        <h3>ยา (ผลิตภัณฑ์)</h3>
    <form class="form" action="userRegisterInsert.php" method="POST">
        <div class="input-group">
            <input id="searchCode" type="text" class="form-control" placeholder="ค้นหาเลขทะเบียนตำรับยา" aria-label="เลขทะเบียนตำรับยา" aria-describedby="btnGroupAddon2">

            <div class="input-group-prepend">
            <div class="input-group-text" id="btnGroupAddon2" style="cursor: pointer;"><i class="fas fa-search"></i></div>
            </div>
        </div><br>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="thadrgnm">ชื่อทางการค้าไทย</label>
                <input name="thadrgnm" id="thadrgnm" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกเลขบัตรประจำตัวประชาชน">
            </div>

            <div class="form-group col-md-6">
                <label for="engdrgnm">ชื่อทางการค้าอังกฤษ</label>
                <input name="engdrgnm" id="engdrgnm" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกเลขบัตรประจำตัวประชาชน">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="appdate_th">วันที่อนุมัติ </label>
                <input name="appdate_th" id="appdate_th" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกชื่อ">
            </div>

            <div class="form-group col-md-6">
                <label for="expdate">วันที่หมดอายุ</label>
                <input name="expdate" id="expdate" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกชื่อ">
            </div>
        </div>

        <div class="form-row">    
            <div class="form-group col-md-6">
                <label for="ctgthanm">หมวดยา</label>
                <input name="ctgthanm" id="ctgthanm" class="form-control" min="3"  type="text" data-error-msg="กรุณากรอกนามสกุล">
            </div>
        
            <div class="form-group col-md-6">
                <label for="thadsgnm">รูปแบบยา (ไทย)</label>
                <input name="thadsgnm" id="thadsgnm" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกเบอร์โทรศัพท์">
            </div>
        </div>

        <div class="form-row">    
            <div class="form-group col-md-6">
                <label for="engdsgnm">รูปแบบยา (อังกฤษ)</label>
                <input name="engdsgnm" id="engdsgnm" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอกเบอร์โทรศัพท์">
            </div>

            <div class="form-group col-md-6">
                <label for="thaclassnm">ประเภทของยา</label>
                <input name="thaclassnm" id="thaclassnm" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Username">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="thakindnm">ประเภทของยาควบคุมตามกฏหมาย </label>
                <input name="thakindnm" id="thakindnm" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">    
            </div>

            <div class="form-group col-md-6">
                <label for="lcnno_no">เลขที่ใบอนุญาต </label>
                <input name="lcnno_no" id="lcnno_no" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">    
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="indication">ข้อบ่งใช้ </label>
                <input name="indication" id="indication" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">    
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="licen_loca">ชื่อผู้รับอนุญาต </label>
                <input name="licen_loca" id="licen_loca" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">    
            </div>

            <div class="form-group col-md-6">
                <label for="thanm">ชื่อสถานที่</label>
                <input name="thanm" id="thanm" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="fulladdr">ที่ตั้ง </label>
                <input name="fulladdr" id="fulladdr" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">    
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Newcode_U">เลขอ้างอิงสำหรับ License per Invoice</label>
                <input name="Newcode_U" id="Newcode_U" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">    
            </div>

            <div class="form-group col-md-6">
                <label for="cncnm">สถานะทะเบียน</label>
                <input name="cncnm" id="cncnm" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="lmdfdate">ข้อมูล ณ วันที่</label>
                <input name="lmdfdate" id="lmdfdate" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">    
            </div>

            <!-- <div class="form-group col-md-6">
                <label for="cncnm">สถานะทะเบียน</label>
                <input name="cncnm" id="cncnm" class="form-control" min="3" required type="text" data-error-msg="กรุณากรอก Password">
            </div> -->
        </div>


    
            <center>
            <a class="btn btn-secondary" href="../main/login.php" role="button">ยกเลิก</a>
            <button type="button" class="btn btn-primary">ถัดไป</button>                
            </center> 

    </fieldset>          
    </form>
</div>

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

        $(function(){
            $("#btnGroupAddon2").click(function(){

                $.ajax({
                    method: "POST",
                    url: "test0.php",
                    data: { Newcode: $("#searchCode").val()}
                }).done(function( msg ) {
                    var parser,xmlDoc;
                    parser=new DOMParser();
                    xmlDoc=parser.parseFromString(msg,"text/xml");
                    console.log(xmlDoc);

                    console.log(xmlDoc.getElementsByTagName("Table1")[0]);
                    var thisValue = xmlDoc.getElementsByTagName("Table1")[0];
                    console.log(thisValue.getElementsByTagName("Newcode")[0].innerHTML);
                    var Newcode=thisValue.getElementsByTagName("Newcode")[0].innerHTML;



                    $.ajax({
                        method: "POST",
                        url: "test.php",
                        data: { Newcode: Newcode}
                    }).done(function( msg ) {
                        var parser,xmlDoc;
                        parser=new DOMParser();
                        xmlDoc=parser.parseFromString(msg,"text/xml");
                        console.log(xmlDoc);
    
                        console.log(xmlDoc.getElementsByTagName("XML_SEARCH_DRUG_DR")[0]);
                        var thisValue = xmlDoc.getElementsByTagName("XML_SEARCH_DRUG_DR")[0];
                        console.log(thisValue.getElementsByTagName("thadrgnm")[0].innerHTML);
                        $("#thadrgnm").val(thisValue.getElementsByTagName("thadrgnm")[0].innerHTML);

                        console.log(thisValue.getElementsByTagName("engdrgnm")[0].innerHTML);
                        $("#engdrgnm").val(thisValue.getElementsByTagName("engdrgnm")[0].innerHTML);
                        
                        // var xmlDoc = msg.responseXML;
                        // console.log(xmlDoc)
                        // var x = xmlDoc.getElementsByTagName('lcnno')[0];
                        // var y = x.childNodes[0];
                        // $("#div-districtCode").html(msg);
                        // let tambonmsg= '<label for="subdistrictCode">ตำบล</label>';
                        //     tambonmsg+='<select name="subdistrictCode" id="subdistrictCode" class="form-control" required data-error-msg="กรุณากรอกชื่อตำบล">';
                        //     tambonmsg+='<option selected disabled>Choose...</option>';
                        //     tambonmsg+='</select>';            
                        // $("#div-subdistrictCode").html(tambonmsg);
                    });
    



                });


            })
        })




        /*	This work is licensed under Creative Commons GNU LGPL License.

	License: http://creativecommons.org/licenses/LGPL/2.1/
   Version: 0.9
	Author:  Stefan Goessner/2006
	Web:     http://goessner.net/ 
*/
function xml2json(xml, tab) {
    var X = {
       toObj: function(xml) {
          var o = {};
          if (xml.nodeType==1) {   // element node ..
             if (xml.attributes.length)   // element with attributes  ..
                for (var i=0; i<xml.attributes.length; i++)
                   o["@"+xml.attributes[i].nodeName] = (xml.attributes[i].nodeValue||"").toString();
             if (xml.firstChild) { // element has child nodes ..
                var textChild=0, cdataChild=0, hasElementChild=false;
                for (var n=xml.firstChild; n; n=n.nextSibling) {
                   if (n.nodeType==1) hasElementChild = true;
                   else if (n.nodeType==3 && n.nodeValue.match(/[^ \f\n\r\t\v]/)) textChild++; // non-whitespace text
                   else if (n.nodeType==4) cdataChild++; // cdata section node
                }
                if (hasElementChild) {
                   if (textChild < 2 && cdataChild < 2) { // structured element with evtl. a single text or/and cdata node ..
                      X.removeWhite(xml);
                      for (var n=xml.firstChild; n; n=n.nextSibling) {
                         if (n.nodeType == 3)  // text node
                            o["#text"] = X.escape(n.nodeValue);
                         else if (n.nodeType == 4)  // cdata node
                            o["#cdata"] = X.escape(n.nodeValue);
                         else if (o[n.nodeName]) {  // multiple occurence of element ..
                            if (o[n.nodeName] instanceof Array)
                               o[n.nodeName][o[n.nodeName].length] = X.toObj(n);
                            else
                               o[n.nodeName] = [o[n.nodeName], X.toObj(n)];
                         }
                         else  // first occurence of element..
                            o[n.nodeName] = X.toObj(n);
                      }
                   }
                   else { // mixed content
                      if (!xml.attributes.length)
                         o = X.escape(X.innerXml(xml));
                      else
                         o["#text"] = X.escape(X.innerXml(xml));
                   }
                }
                else if (textChild) { // pure text
                   if (!xml.attributes.length)
                      o = X.escape(X.innerXml(xml));
                   else
                      o["#text"] = X.escape(X.innerXml(xml));
                }
                else if (cdataChild) { // cdata
                   if (cdataChild > 1)
                      o = X.escape(X.innerXml(xml));
                   else
                      for (var n=xml.firstChild; n; n=n.nextSibling)
                         o["#cdata"] = X.escape(n.nodeValue);
                }
             }
             if (!xml.attributes.length && !xml.firstChild) o = null;
          }
          else if (xml.nodeType==9) { // document.node
             o = X.toObj(xml.documentElement);
          }
          else
             alert("unhandled node type: " + xml.nodeType);
          return o;
       },
       toJson: function(o, name, ind) {
          var json = name ? ("\""+name+"\"") : "";
          if (o instanceof Array) {
             for (var i=0,n=o.length; i<n; i++)
                o[i] = X.toJson(o[i], "", ind+"\t");
             json += (name?":[":"[") + (o.length > 1 ? ("\n"+ind+"\t"+o.join(",\n"+ind+"\t")+"\n"+ind) : o.join("")) + "]";
          }
          else if (o == null)
             json += (name&&":") + "null";
          else if (typeof(o) == "object") {
             var arr = [];
             for (var m in o)
                arr[arr.length] = X.toJson(o[m], m, ind+"\t");
             json += (name?":{":"{") + (arr.length > 1 ? ("\n"+ind+"\t"+arr.join(",\n"+ind+"\t")+"\n"+ind) : arr.join("")) + "}";
          }
          else if (typeof(o) == "string")
             json += (name&&":") + "\"" + o.toString() + "\"";
          else
             json += (name&&":") + o.toString();
          return json;
       },
       innerXml: function(node) {
          var s = ""
          if ("innerHTML" in node)
             s = node.innerHTML;
          else {
             var asXml = function(n) {
                var s = "";
                if (n.nodeType == 1) {
                   s += "<" + n.nodeName;
                   for (var i=0; i<n.attributes.length;i++)
                      s += " " + n.attributes[i].nodeName + "=\"" + (n.attributes[i].nodeValue||"").toString() + "\"";
                   if (n.firstChild) {
                      s += ">";
                      for (var c=n.firstChild; c; c=c.nextSibling)
                         s += asXml(c);
                      s += "</"+n.nodeName+">";
                   }
                   else
                      s += "/>";
                }
                else if (n.nodeType == 3)
                   s += n.nodeValue;
                else if (n.nodeType == 4)
                   s += "<![CDATA[" + n.nodeValue + "]]>";
                return s;
             };
             for (var c=node.firstChild; c; c=c.nextSibling)
                s += asXml(c);
          }
          return s;
       },
       escape: function(txt) {
          return txt.replace(/[\\]/g, "\\\\")
                    .replace(/[\"]/g, '\\"')
                    .replace(/[\n]/g, '\\n')
                    .replace(/[\r]/g, '\\r');
       },
       removeWhite: function(e) {
          e.normalize();
          for (var n = e.firstChild; n; ) {
             if (n.nodeType == 3) {  // text node
                if (!n.nodeValue.match(/[^ \f\n\r\t\v]/)) { // pure whitespace text node
                   var nxt = n.nextSibling;
                   e.removeChild(n);
                   n = nxt;
                }
                else
                   n = n.nextSibling;
             }
             else if (n.nodeType == 1) {  // element node
                X.removeWhite(n);
                n = n.nextSibling;
             }
             else                      // any other node
                n = n.nextSibling;
          }
          return e;
       }
    };
    if (xml.nodeType == 9) // document node
       xml = xml.documentElement;
    var json = X.toJson(X.toObj(X.removeWhite(xml)), xml.nodeName, "\t");
    return "{\n" + tab + (tab ? json.replace(/\t/g, tab) : json.replace(/\t|\n/g, "")) + "\n}";
 }


        
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
