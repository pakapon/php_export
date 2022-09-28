<?php

if( !empty($_POST['14']) ){$A14 = $_POST['14'] ;}else{$A14=0;}
    if( !empty($_POST['24']) ){$A24 = $_POST['24'] ;}else{$A24=0;}
    if( !empty($_POST['34']) ){$A34 = $_POST['34'] ;}else{$A34=0;}
    if( !empty($_POST['44']) ){$A44 = $_POST['44'] ;}else{$A44=0;}
    if( !empty($_POST['54']) ){$A54 = $_POST['54'] ;}else{$A54=0;}
    if( !empty($_POST['64']) ){$A64 = $_POST['64'] ;}else{$A64=0;}
    // if( !empty($_POST['74']) ){$A74 = $_POST['74'] ;}else{$A74=0;}
    // if( !empty($_POST['84']) ){$A84 = $_POST['84'] ;}else{$A84=0;}
    // if( !empty($_POST['94']) ){$A94 = $_POST['94'] ;}else{$A94=0;}
    // if( !empty($_POST['04']) ){$A04 = $_POST['04'] ;}else{$A04=0;}

    if( !empty($_POST['16']) ){$A16 = $_POST['16'] ;}else{$A14=0;}
    if( !empty($_POST['26']) ){$A26 = $_POST['26'] ;}else{$A24=0;}
    if( !empty($_POST['36']) ){$A36 = $_POST['36'] ;}else{$A34=0;}
    if( !empty($_POST['46']) ){$A46 = $_POST['46'] ;}else{$A44=0;}
    if( !empty($_POST['56']) ){$A56 = $_POST['56'] ;}else{$A54=0;}
    if( !empty($_POST['66']) ){$A66 = $_POST['66'] ;}else{$A64=0;}


    //ส่วนลดรวม
    $sum_dis  =  $A16 + $A26 + $A36 + $A46 + $A56 + $A66 ;  

    // ยอดรวม
    $sum  =  $A14 + $A24 + $A34 + $A44 + $A54 + $A64 ;  

    //สุธิ
    $total = $sum - $sum_dis;

    //vat 
    $vat = $sum * 7/107;
    //ก่อนvat
    $price_nv = $sum * 100/107;

    // print_r($_POST);

    // เลขคำสั่งซื้อ
    $order = $_POST["order"];

    // ชื่อ บ ผู้ขาย
    $sale_n = $_POST["name1"];
    $sale_d = nl2br($_POST["textarea1"]) ;
    $sale_t = $_POST["tex1"];

    // ชื่อ บ ผู้ซื้อ
    $buy_n = $_POST["name2"];
    $buy_d = nl2br($_POST["textarea2"]) ; 
    $buy_t = $_POST["tex2"];

    //วันที่
    $dates = $_POST['d2'];

    // ประเภทการจ่ายเงิน
    $_POST["paytype1"];
    $_POST["paytype2"];
    $_POST["paytype3"];

    // Vat หักณที่จ่าย
    $_POST["vat"];          //check box
    $_POST["vat2_1"];       //value

    // หมายเหตุ
    $comment = nl2br($_POST["textarea3"]);

?>

<html>

<head>

    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Price Quote Template</title>
    <meta name="author" content="Vertex42.com" />
    <meta name="created" content="2004-08-16T18:44:14" />
    <meta name="changedby" content="EC PD" />
    <meta name="changed" content="2022-05-02T07:42:07" />
    <meta name="description" content="(c) 2010-2014 Vertex42 LLC. All Rights Reserved." />
    <meta name="AppVersion" content="16.0300" />
    <meta name="Company" content="Vertex42 LLC" />
    <meta name="Copyright" content="2010-2014 Vertex42 LLC" />
    <meta name="DocSecurity" content="0" />
    <meta name="HyperlinksChanged" content="false" />
    <meta name="LinksUpToDate" content="false" />
    <meta name="ScaleCrop" content="false" />
    <meta name="ShareDoc" content="false" />
    <meta name="Version" content="1.2.1" />

    <style type="text/css">
        body, div, table, thead, tbody, tfoot, tr, th, td,
        p {
            font-family: "Trebuchet MS";
            font-size: x-small
        }

        a.comment-indicator:hover+comment {
            background: #ffd;
            position: absolute;
            display: block;
            border: 1px solid black;
            padding: 0.5em;
        }

        a.comment-indicator {
            background: red;
            display: inline-block;
            border: 1px solid black;
            width: 0.5em;
            height: 0.5em;
        }

        comment {
            display: none;
        }

        @media print {
            .noprint {
                display: none;
            }
            .print {
                display: block;
            }
        }
        @media screen
        {
            .printOnly{
                display:none;
            }
        }
        

    </style>

</head>

<body>
    <table cellspacing="0" border="0">
        <colgroup width="344"></colgroup>
        <colgroup width="73"></colgroup>
        <colgroup width="116"></colgroup>
        <colgroup width="75"></colgroup>
        <colgroup width="90"></colgroup>
        <colgroup width="96"></colgroup>
        <colgroup width="126"></colgroup>
        <tr>
            <td align="left" ><image height="150 px" src="https://vezstorage.blob.core.windows.net/vpartner/media/images/documents/1f88cee0-cdfc-4bb6-8f6b-7eb7ee513dae"></image></image></td>
            <td colspan=9 height="47" style="position: relative;left:100px;" ><b>
                    <font face="Arial" size=6 color="#7B8EC5">&#3651;&#3610;&#3648;&#3626;&#3609;&#3629;&#3619;&#3634;&#3588;&#3634;</font>
                </b></td>
        </tr>
        <tr>
            <td height="47" align="center" valign=bottom><b>
                    <font face="Arial" size=6 color="#7B8EC5"><br></font>
                </b></td>
            <td align="center" valign=bottom><b>
                    <font face="Arial" size=6 color="#7B8EC5"><br></font>
                </b></td>
            <td align="center" valign=bottom><b>
                    <font face="Arial" size=6 color="#7B8EC5"><br></font>
                </b></td>
            <td align="center" valign=bottom><b>
                    <font face="Arial" size=6 color="#7B8EC5"><br></font>
                </b></td>
            <td align="center" valign=bottom><b>
                    <font face="Arial" size=6 color="#7B8EC5"><br></font>
                </b></td>
            <td align="center" valign=bottom><b>
                    <font face="Arial" size=6 color="#7B8EC5"><br></font>
                </b></td>
            <td align="center" valign=bottom><b>
                    <font face="Arial" size=6 color="#7B8EC5"><br></font>
                </b></td>
        </tr>
        <tr>
            <td align="left" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">รายละเอียดผู้ขาย</font>
                </b></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="right" colspan="2" valign=bottom>เลขคำสั่งซื้อ</td>
            <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;" align="center" ><?=$order?></td>
        </tr>
        <tr>
            <td align="left" rowspan="6" valign=TOP>
                <?=$sale_n?><br>
                <?=$sale_d?><br>
                เลขประจำตัวผู้เสียภาษี : <?=$sale_t?>
            </td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="right" colspan="2" valign=bottom>&#3623;&#3633;&#3609;&#3607;&#3637;&#3656;</td> 
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;" align="center" align="center"><?=$dates?></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="center" valign=bottom sdnum="1033;0;M/D/YYYY"><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="center" valign=bottom sdnum="1033;0;M/D/YYYY"><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="right" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="right" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="center" valign=bottom sdnum="1033;0;M/D/YYYY"><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">รายละเอียดผู้ซื้อ</font>
                </b></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" rowspan="6" valign=TOP>
                <?=$buy_n?><br>
                <?=$buy_d?><br>
                เลขประจำตัวผู้เสียภาษี : <?=$buy_t?>
            </td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td style="min-width:250px; border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;" colspan=4 height="20" align="left" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">รายละเอียดบริการ</font>
                </b></td>
            <td style="width:30px; border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">จำนวน</font>
                </b></td>
            <td style="min-width:50px;  border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">ราคาต่อหน่วย</font>
                </b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">เป็นเงิน</font>
                </b></td>
            <td style="max-width: 20px;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">ส่วนลด(%)</font>
                </b></td>
            <td style="max-width: 20px; border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">ส่วนลด(บาท)</font>
                </b></td>
            <td style="min-width:20px;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">รวมเงิน</font>
                </b></td>
        </tr>
        <?PHP for($x = 1; $x <= 5; $x++){?>
        <tr>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000;" colspan=4 height="19" align="left" valign=bottom>รับแปลฉลากสินค้า รับแปลวิธีใช้งาน แบบย่อ 2000 บาท / 1000 คำ</td>
            <td style="border-right: 1px solid #000000;" align="center" valign=bottom> 1 </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom > 2,000.00 </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom > 2,000.00 </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom > - </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom > - </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom > 2,000.00 </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000;" colspan=4 height="19" align="left" valign=bottom bgcolor="#F2F2F2">รับแปลฉลากสินค้า รับแปลวิธีใช้งาน แบบย่อ 2000 บาท / 1000 คำ</td>
            <td style="border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F2F2F2"> 1 </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom bgcolor="#F2F2F2"> 2,000.00 </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom bgcolor="#F2F2F2"> 2,000.00 </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom bgcolor="#F2F2F2"> - </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom bgcolor="#F2F2F2"> - </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom bgcolor="#F2F2F2"> 2,000.00 </td>
        </tr>
        <?PHP } ?>

        <tr>
            <td style="border-top: 1px solid #000000;" height="20" align="left" valign=bottom><br></td>
            <td style="border-top: 1px solid #000000;" align="left" valign=bottom><br></td>
            <td style="border-top: 1px solid #000000;" align="left" valign=bottom><br></td>
            <td style="border-top: 1px solid #000000;" align="left" valign=bottom><br></td>
            <td style="border-top: 1px solid #000000;" align="left" valign=bottom><br></td>
            <td style="border-top: 1px solid #000000;" align="left" valign=bottom><br></td>
            <td style="border-top: 1px solid #000000;" align="left" valign=bottom><br></td>
            <td style="border-top: 1px solid #000000; border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom>รวมเงิน</td>
            <td style="border-top: 1px solid #000000; border-right: 1px solid #000000;" align="right" valign=bottom "> 2,000.00 </td>
        </tr>
        
        <!-- ส่วนลด -->
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;" colspan=5 height="20" align="left" valign=bottom bgcolor="#F0B57A"><font face="Arial" color="#FFFFFF">เงื่อนไขการชําระเงิน</font><b></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom>ส่วนลด</td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom "> - </td>
        </tr>

        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=5 height="20" align="left" valign=top>- ชำระเงินงวดแรกเต็มจำนวน 100%</td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom>ยอดเงินหลังหักส่วนลด</td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom "> - </td>
        </tr>
        <!-- vat -->
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=5 height="20" align="left" valign=top></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom>ภาษีมูลค่าเพิ่ม 7%</td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom "> 140.00  บาท</td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=5 height="20" align="left" valign=top></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td> 
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom><b>รวมเงินทั้งสิ้น</b></td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom bgcolor="#D3D9EC""><b> 2,140.00  บาท</b></td>
        </tr>
        
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=5 height="20" align="left" valign=top></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom>หักภาษี ณ ที่จ่าย 3%</td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom "> 64.20  บาท</td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=5 height="20" align="left" valign=top></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom><b>ยอดชำระ</b></td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom bgcolor="#D3D9EC""><b> 2,075.80  บาท</b></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=5 height="20"  align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=5 height="20"  align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080; border-bottom: 1px solid #808080" colspan=5 height="20"  align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        
        <!-- กำหนดยืนราคา -->
        <!-- <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;" colspan=5 height="20" align="left" valign=bottom bgcolor="#F0B57A"><font face="Arial" color="#FFFFFF"></font><b></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr> 
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>-->
        <!-- หมายเหตุ -->
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;" colspan=5 height="20" align="left" valign=bottom bgcolor="#F0B57A"><font face="Arial" color="#FFFFFF">หมายเหตุ</font><b></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080; border-bottom: 1px solid #808080" colspan=5 rowspan="6" height="20"  align="left"  valign=top><br><?=$comment?></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
        </tr>
        <tr>
        <td align="left" colspan=4 valign=bottom><b>กำหนดยืนราคา  30  วัน *</b></td>
            <td align="center" colspan=4 valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" colspan=4 valign=bottom>1. หากลูกค้าต้องการ หักภาษี ณ ที่จ่าย กรุณาติดต่อผู้ขายโดยตรง</td>
            <td align="left" valign=bottom><br></td>
            <td align="left" colspan=2  valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" colspan=3 valign=bottom>2. กรุณาชำระเงินผ่านช่องทางชำระเงินของ VEZ (วีอีซี่)</td>
            <td align="left" valign=bottom><br></td>
            <td align="left" colspan=3  valign=bottom><br></td>
            <td colspan=2 height="19" align="left" valign=top><b>x ___________________________________________</b></td>
            <td align="center" valign=bottom><br></td>
        </tr>
        <tr>
            <td align="left" colspan=3 valign=bottom>3. หากลูกค้าต้องการใบเสร็จรับเงิน กรุณาติดต่อผู้ขายโดยตรง</td>
            <td align="left" valign=bottom><br></td>
            <td align="left" colspan=3  valign=bottom><br></td>
            <td colspan=3 height="19" align="left" valign=top>&#3621;&#3591;&#3594;&#3639;&#3656;&#3629;&#3621;&#3641;&#3585;&#3588;&#3657;&#3634;:</td>
            <td align="center" valign=bottom><br></td>
        </tr>
        <tr>
            <td colspan="10"  align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td colspan="10" colspan=5  align="right" valign=bottom></td>
        </tr>

    </table>
    <!-- ************************************************************************** -->
    <br><br><br><br>
    <button class="noprint" onclick="window.print()">Print this page Or Save to PDF</button>
    <image height="30 px" class="print printOnly" style="position: absolute; right: 0px; bottom: 0px;"  src="sendby.png"></image>
</body>

</html>