<?php
    function c_u ($data){
        if($data == null ){
            return 0;
        }else{
            return $data;
        }
        
    }

    function z_u ($data){
        if($data == 0 ){
            return " ";
        }else{
            return $data;
        }
        
    }

    function c_ud ($data){
        if($data == null){
            return 1;
        }else{
            return $data;
        }
        
    }

    // ชื่อบริการ
    $row_n[1][1] = $_POST['11'] ;
    $row_n[1][2] = $_POST['21'] ;
    $row_n[1][3] = $_POST['31'] ;
    $row_n[1][4] = $_POST['41'] ;
    $row_n[1][5] = $_POST['51'] ;
    $row_n[1][6] = $_POST['61'] ;
    
    // จำนวน
    $row_n[2][1] = $_POST['12'] ;
    $row_n[2][2] = $_POST['22'] ;
    $row_n[2][3] = $_POST['32'] ;
    $row_n[2][4] = $_POST['42'] ;
    $row_n[2][5] = $_POST['52'] ;
    $row_n[2][6] = $_POST['62'] ;

    // ราคาต่อหน่วย
    $row_n[3][1] = z_u(number_format(c_u($_POST['13']),2)) ;
    $row_n[3][2] = z_u(number_format(c_u($_POST['23']),2)) ;
    $row_n[3][3] = z_u(number_format(c_u($_POST['33']),2)) ;
    $row_n[3][4] = z_u(number_format(c_u($_POST['43']),2)) ;
    $row_n[3][5] = z_u(number_format(c_u($_POST['53']),2)) ;
    $row_n[3][6] = z_u(number_format(c_u($_POST['63']),2)) ;

    // เป็นเงิน
    $row_n[4][1] = z_u(number_format(c_u($_POST['13']) * c_u($_POST['12']),2)) ;
    $row_n[4][2] = z_u(number_format(c_u($_POST['23']) * c_u($_POST['22']),2)) ;
    $row_n[4][3] = z_u(number_format(c_u($_POST['33']) * c_u($_POST['32']),2)) ;
    $row_n[4][4] = z_u(number_format(c_u($_POST['43']) * c_u($_POST['42']),2)) ;
    $row_n[4][5] = z_u(number_format(c_u($_POST['53']) * c_u($_POST['52']),2)) ;
    $row_n[4][6] = z_u(number_format(c_u($_POST['63']) * c_u($_POST['62']),2)) ;


    // เป็นเงิน
    $row_cn[4][1] = z_u(c_u($_POST['13']) * c_u($_POST['12'])) ;
    $row_cn[4][2] = z_u(c_u($_POST['23']) * c_u($_POST['22'])) ;
    $row_cn[4][3] = z_u(c_u($_POST['33']) * c_u($_POST['32'])) ;
    $row_cn[4][4] = z_u(c_u($_POST['43']) * c_u($_POST['42'])) ;
    $row_cn[4][5] = z_u(c_u($_POST['53']) * c_u($_POST['52'])) ;
    $row_cn[4][6] = z_u(c_u($_POST['63']) * c_u($_POST['62'])) ;

    // ส่วนลด%
    if( empty( $_POST['15']) && !empty( $_POST['16']) ){ $row_n[5][1] = '-' ; }else{ $row_n[5][1] = $_POST['15'] ;} ;
    if( empty( $_POST['25']) && !empty( $_POST['26']) ){ $row_n[5][2] = '-' ; }else{ $row_n[5][2] = $_POST['25'] ;} ;
    if( empty( $_POST['35']) && !empty( $_POST['36']) ){ $row_n[5][3] = '-' ; }else{ $row_n[5][3] = $_POST['35'] ;} ;
    if( empty( $_POST['45']) && !empty( $_POST['46']) ){ $row_n[5][4] = '-' ; }else{ $row_n[5][4] = $_POST['45'] ;} ;
    if( empty( $_POST['55']) && !empty( $_POST['56']) ){ $row_n[5][5] = '-' ; }else{ $row_n[5][5] = $_POST['55'] ;} ;
    if( empty( $_POST['65']) && !empty( $_POST['66']) ){ $row_n[5][6] = '-' ; }else{ $row_n[5][6] = $_POST['65'] ;} ; 

    // $row_n[5][2] = $_POST['25'] ;
    // $row_n[5][2] = $_POST['25'] ;
    // $row_n[5][3] = $_POST['35'] ;
    // $row_n[5][4] = $_POST['45'] ;
    // $row_n[5][5] = $_POST['55'] ;
    // $row_n[5][6] = $_POST['65'] ;

    if( empty($_POST['15']) ) { $d15 = $_POST['16'] ; }else{ $d15 = c_ud($_POST['15']) / 100 * (c_u($_POST['13']) * c_u($_POST['12'])) ;}
    if( empty($_POST['25']) ) { $d25 = $_POST['26'] ; }else{ $d25 = c_ud($_POST['25']) / 100 * (c_u($_POST['23']) * c_u($_POST['22'])) ;}
    if( empty($_POST['35']) ) { $d35 = $_POST['36'] ; }else{ $d35 = c_ud($_POST['35']) / 100 * (c_u($_POST['33']) * c_u($_POST['32'])) ;}
    if( empty($_POST['45']) ) { $d45 = $_POST['46'] ; }else{ $d45 = c_ud($_POST['45']) / 100 * (c_u($_POST['43']) * c_u($_POST['42'])) ;}
    if( empty($_POST['55']) ) { $d55 = $_POST['56'] ; }else{ $d55 = c_ud($_POST['55']) / 100 * (c_u($_POST['53']) * c_u($_POST['52'])) ;}
    if( empty($_POST['65']) ) { $d65 = $_POST['66'] ; }else{ $d65 = c_ud($_POST['65']) / 100 * (c_u($_POST['63']) * c_u($_POST['62'])) ;}

    // ส่วนลดเงิน
    if( empty( $_POST['16']) && !empty( $_POST['15'] ) ){ $row_n[6][1] = '-' ; }else{ $row_n[6][1] = z_u(number_format( $_POST['16'],2)) ;} ;
    if( empty( $_POST['26']) && !empty( $_POST['25'] ) ){ $row_n[6][2] = '-' ; }else{ $row_n[6][2] = z_u(number_format( $_POST['26'],2)) ;} ;
    if( empty( $_POST['36']) && !empty( $_POST['35'] ) ){ $row_n[6][3] = '-' ; }else{ $row_n[6][3] = z_u(number_format( $_POST['36'],2)) ;} ;
    if( empty( $_POST['46']) && !empty( $_POST['45'] ) ){ $row_n[6][4] = '-' ; }else{ $row_n[6][4] = z_u(number_format( $_POST['46'],2)) ;} ;
    if( empty( $_POST['56']) && !empty( $_POST['55'] ) ){ $row_n[6][5] = '-' ; }else{ $row_n[6][5] = z_u(number_format( $_POST['56'],2)) ;} ;
    if( empty( $_POST['66']) && !empty( $_POST['65'] ) ){ $row_n[6][6] = '-' ; }else{ $row_n[6][6] = z_u(number_format( $_POST['66'],2)) ;} ;
    // $row_n[6][1] = z_u(number_format( c_u($d16),2)) ;
    // $row_n[6][2] = z_u(number_format( c_u($d26),2)) ;
    // $row_n[6][3] = z_u(number_format( c_u($d36),2)) ;
    // $row_n[6][4] = z_u(number_format( c_u($d46),2)) ;
    // $row_n[6][5] = z_u(number_format( c_u($d56),2)) ;
    // $row_n[6][6] = z_u(number_format( c_u($d66),2)) ;
    
    $row_cn[6][1] = z_u($d15) ;
    $row_cn[6][2] = z_u($d25) ;
    $row_cn[6][3] = z_u($d35) ;
    $row_cn[6][4] = z_u($d45) ;
    $row_cn[6][5] = z_u($d55) ;
    $row_cn[6][6] = z_u($d65) ;

    // ส่วนลดเงิน
    $row_n[7][1] = z_u(number_format(c_u($_POST['13']) * c_u($_POST['12']) - (c_u($d15)),2)) ;
    $row_n[7][2] = z_u(number_format(c_u($_POST['23']) * c_u($_POST['22']) - (c_u($d25)),2)) ;
    $row_n[7][3] = z_u(number_format(c_u($_POST['33']) * c_u($_POST['32']) - (c_u($d35)),2)) ;
    $row_n[7][4] = z_u(number_format(c_u($_POST['43']) * c_u($_POST['42']) - (c_u($d45)),2)) ;
    $row_n[7][5] = z_u(number_format(c_u($_POST['53']) * c_u($_POST['52']) - (c_u($d55)),2)) ;
    $row_n[7][6] = z_u(number_format(c_u($_POST['63']) * c_u($_POST['62']) - (c_u($d65)),2)) ;
    
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

    // Vat หักณที่จ่าย
    $_POST["vat"];          //check box
    $_POST["vat2_1"];       //value

    //ยืนราคา
    if( !empty($_POST["st_day"]) ){
        $day_st = "กำหนดยืนราคา ".$_POST["st_day"]." วัน *";
    }else{
        $day_st = "";
    }

    // ประเภทการจ่ายเงิน
    $pt[1][1] = $_POST["paytype11"] ;
    $pt[1][3] = $_POST["paytype13"] ;
    $pt[1][2] = $_POST["paytype12"] ;
    $pt[1][4] = $_POST["paytype14"] ;
    $pt[1][5] = $_POST["paytype15"] ;
    $pt[1][6] = $_POST["paytype16"] ;
    $pt[1][7] = $_POST["paytype17"] ;
    $pt[1][8] = $_POST["paytype18"] ;
    $pt[1][9] = $_POST["paytype19"] ;
    $pt[1][10] = $_POST["paytype110"] ;

    $pt[2][1] = $_POST["paytype21"] ;
    $pt[2][2] = $_POST["paytype22"] ;
    $pt[2][3] = $_POST["paytype23"] ;
    $pt[2][4] = $_POST["paytype24"] ;
    $pt[2][5] = $_POST["paytype25"] ;
    $pt[2][6] = $_POST["paytype26"] ;
    $pt[2][7] = $_POST["paytype27"] ;
    $pt[2][8] = $_POST["paytype28"] ;
    $pt[2][9] = $_POST["paytype29"] ;
    $pt[2][10] = $_POST["paytype210"] ;

    // หมายเหตุ
    $comment = nl2br($_POST["textarea3"]);

    // รวมเงิน
    $sum    =  z_u(number_format(array_sum($row_cn[4]),2));  
    $sum_c    =  z_u(array_sum($row_cn[4]));  
    // echo $sum;

    // ส่วนลด
    $dis_c  = z_u(array_sum($row_cn[6]));  
    // echo z_u(array_sum($row_cn[6]));   exit();
    if($dis_c > 0){
        $dis    = z_u(number_format(array_sum($row_cn[6]),2));  
        // $dis_c  = z_u(array_sum($row_cn[6]));  
    }else{
        $dis = "-";
        $dis_c = 0;
    }

    // ยอดเงินหลังหักส่วนลด
    $suba_dis = z_u(number_format(($sum_c - $dis_c),2)); 
    $suba_cdis = z_u($sum_c - $dis_c); 

    // ภาษีมูลค่าเพิ่ม 7% :: sum x 7/100    sum x 7/(100-7) 
    if( $_POST["vat"] == 1){
        $vat = z_u(number_format( ($suba_cdis * 7)/107,2)); 
        $vat_cal = z_u(($suba_cdis * 7)/107); 
        $befor_vat = z_u(number_format( $suba_cdis - $vat_cal,2)); 
        $befor_cal = z_u( $suba_cdis - $vat_cal); 
    }else{
        $vat = " - ";
        $befor_vat = " - ";
    }
    //รวมเงินทั้งสิ้น
    $all_sum = z_u(number_format($sum_c - $dis_c ,2)) ;
    $all_csum = z_u($sum_c - $dis_c ) ;
    
    // echo (100+$_POST["vat2_1"])."\n";
    // echo ($befor_vat * $_POST["vat2_1"])."\n";
    //หักภาษี ณ ที่จ่าย 3% 5% :: sum x 3/(100-3)
    if( !empty($_POST["vat2_1"]) ){
        $cut_sub = z_u(number_format(($befor_vat * $_POST["vat2_1"])/(100+$_POST["vat2_1"]),2)) ; 
        $cut_sub_cal = z_u(number_format(($befor_vat * $_POST["vat2_1"])/(100+$_POST["vat2_1"]),2)) ; 
    }else{
        $cut_sub = " - ";
    }

    //ยอดชำระ
    $final = z_u(number_format($all_csum - $cut_sub_cal,2)) ;

    
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
            <td colspan=9 height="47" style="position: relative;left:150px;" ><b>
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
                    <font face="Arial" color="#000001">รายละเอียดผู้ขาย</font>
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
                    <font face="Arial" color="#000001">รายละเอียดผู้ซื้อ</font>
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
                    <font face="Arial" color="#000001">รายละเอียดบริการ</font>
                </b></td>
            <td style="width:30px; border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#000001">จำนวน</font>
                </b></td>
            <td style="min-width:90px;  border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#000001">ราคาต่อหน่วย</font>
                </b></td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#000001">เป็นเงิน</font>
                </b></td>
            <td style="max-width: 20px;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#000001">ส่วนลด(%)</font>
                </b></td>
            <td style="max-width: 20px; border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#000001">ส่วนลด(บาท)</font>
                </b></td>
            <td style="min-width:70px;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000;" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#000001">รวมเงิน</font>
                </b></td>
        </tr>
        <?PHP for($x = 1; $x <= 11; $x++){ 
                // if( ( $x % 2 === 0 ) ){ 
                //         $bg ='bgcolor="#F2F2F2"'; 
                //     }else{
                //         $bg =''; 
                //     }
        ?>
        <tr>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000;" colspan=4 height="19" align="left" valign=bottom <?=$bg?> ><?=$row_n[1][$x]?></td>
            <td style="border-right: 1px solid #000000;" align="center" valign=bottom <?=$bg?> > <?=$row_n[2][$x]?> </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom <?=$bg?> > <?=$row_n[3][$x]?> </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom <?=$bg?> > <?=$row_n[4][$x]?> </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom <?=$bg?> > <?=$row_n[5][$x]?> </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom <?=$bg?> > <?=$row_n[6][$x]?> </td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom <?=$bg?> > <?=$row_n[7][$x]?> </td>
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
            <td style="border-top: 1px solid #000000; border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom>จำนวนเงินรวม</td>
            <td style="border-top: 1px solid #000000; border-right: 1px solid #000000;" align="right" valign=bottom "><?=$sum?>  บาท</td>
        </tr>
        
        <!-- ส่วนลด -->
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;" colspan=5 height="20" align="left" valign=bottom bgcolor="#F0B57A"><font face="Arial" color="#000001">เงื่อนไขการชําระเงิน</font><b></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom>ส่วนลดรวม</td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom ><?=$dis?>  บาท</td>
        </tr>

        <!-- เงื่อนไขการชําระเงิน -->
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080;border-bottom: 1px solid #000000;" colspan=5 rowspan="8" height="20" align="left" valign=top>
                <?PHP
                    $ie = 1;
                    foreach($pt[1] AS $rowa){
                        if($pt[1][$ie] != null){
                            echo " - ".$pt[1][$ie]." ".$pt[2][$ie]."  <br>";
                        }
                        $ie++;
                        $sumblack = $sumblack + $pt[2][$ie];
                    }
                    if($sumblack > $suba_cdis){
                        echo "<script>window.location.href='index.php';</script>";
                        exit;
                    }
                ?>
            </td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" bgcolor="#D3D9EC" valign=bottom><b>ราคาหลังหักส่วนลด</b></td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom bgcolor="#D3D9EC" ><b><?=$suba_dis?>  บาท</b></td>


        </tr>

        <!-- vat -->
        <tr> 
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom>ภาษีมูลค่าเพิ่ม 7%</td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom "><?=$vat?>  บาท</td>
        </tr>
        <tr> 
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td> 
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom>ราคาก่อนภาษีมูลค่าเพิ่ม</td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom><b><?=$befor_vat?>  บาท</b></td>
        </tr>
        
        <tr> 
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" bgcolor="#D3D9EC" valign=bottom><b>รวมเงินทั้งสิ้น</b></td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom bgcolor="#D3D9EC"><b><?=$all_sum?>  บาท</b></td>
        </tr>
        <tr> 
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom>หักภาษี ณ ที่จ่าย <?$_POST['vat2_1']?>%</td>
            <td style="border-right: 1px solid #000000;" align="right" valign=bottom ><?=$cut_sub?>  บาท</td>
        </tr>
        <tr> 
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td style="border-right: 1px solid #000000;" align="left" colspan="2" valign=bottom bgcolor="#D3D9EC"><b>ยอดชำระ</b></td>
            <td style="border-right: 1px solid #000000;border-bottom: 1px solid #000000;" align="right" valign=bottom bgcolor="#D3D9EC"><b><?=$final?>  บาท</b></td>
        </tr>
        <tr> 
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
        
        <!-- หมายเหตุ -->
        <tr>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000;" colspan=5 height="20" align="left" valign=bottom bgcolor="#F0B57A"><font face="Arial" color="#000001">หมายเหตุ</font><b></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080; border-bottom: 1px solid #808080" colspan=5 rowspan="6" height="20"  align="left"  valign=top><?=$comment?></td>
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
        </tr>
        <tr>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
        <td align="left" colspan=4 valign=bottom><br><b><?=$day_st?></b></td>
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