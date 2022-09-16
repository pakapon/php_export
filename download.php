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
        body,
        div,
        table,
        thead,
        tbody,
        tfoot,
        tr,
        th,
        td,
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
        }
    </style>

</head>

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


    // เลขคำสั่งซื้อ
    $_POST["order"];

    // ชื่อ บ ผู้ขาย
    $_POST["name1"];
    $_POST["textarea1"];

    // ชื่อ บ ผู้ซื้อ
    $_POST["nam2"];
    $_POST["textarea2"];

    // ประเภทการจ่ายเงิน
    $_POST["paytype1"];
    $_POST["paytype2"];
    $_POST["paytype3"];

    // Vat หักณที่จ่าย
    $_POST["vat"];          //check box
    $_POST["vat2_1"];       //value

    // หมายเหตุ
    $_POST["textarea3"];
    
    ?>

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
            <td colspan=7 height="47" align="center" valign=bottom><b>
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
            <td height="26" align="left" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">&#3612;&#3641;&#3657;&#3586;&#3634;&#3618; </font>
                </b></td>
            <td align="left" valign=middle>
                <font face="Arial" size=5 color="#2C3B65"><br></font>
            </td>
            <td align="left" valign=middle>
                <font face="Arial" size=5 color="#2C3B65"><br></font>
            </td>
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
            <td height="19" align="left" rowspan="6" valign=TOP><?php echo nl2br($_POST['textarea1']); ?></td>
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
            <td align="center" valign=bottom>&#3623;&#3633;&#3609;&#3607;&#3637;&#3656;</td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="41760" sdnum="1033;0;M/D/YYYY"><?php echo $_POST['d2']; ?></td>
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
            <td height="20" align="left" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">&#3621;&#3641;&#3585;&#3588;&#3657;&#3634; </font>
                </b></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td height="19" align="left" rowspan="6" valign=TOP><?php echo nl2br($_POST['textarea2']) ?></td>
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
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #3b4e87; border-bottom: 1px solid #3b4e87; border-left: 1px solid #3b4e87" colspan=4 height="20" align="left" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">&#3619;&#3634;&#3618;&#3621;&#3632;&#3648;&#3629;&#3637;&#3618;&#3604;&#3610;&#3619;&#3636;&#3585;&#3634;&#3619; </font>
                </b></td>
            <td style="border-top: 1px solid #3b4e87; border-bottom: 1px solid #3b4e87" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">&#3592;&#3635;&#3609;&#3623;&#3609; </font>
                </b></td>
            <td style="border-top: 1px solid #3b4e87; border-bottom: 1px solid #3b4e87" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">&#3619;&#3634;&#3588;&#3634;/&#3627;&#3609;&#3656;&#3623;&#3618;</font>
                </b></td>
            <td style="border-top: 1px solid #3b4e87; border-bottom: 1px solid #3b4e87; border-right: 1px solid #3b4e87" align="center" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">ราคารวม</font>
                </b></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom><?php echo  (!empty($_POST['11']) ? $_POST['11'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="1" ><?php echo  (!empty($_POST['12']) ? $_POST['12'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="250" ><?php echo  (!empty($_POST['13']) ? $_POST['13'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="250" > <?php echo  (!empty($_POST['14']) ? $_POST['14'] : ''); ?> </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom bgcolor="#F2F2F2"><?php echo  (!empty($_POST['21']) ? $_POST['21'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="1" bgcolor="#F2F2F2"><?php echo  (!empty($_POST['22']) ? $_POST['22'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="250" bgcolor="#F2F2F2"><?php echo  (!empty($_POST['23']) ? $_POST['23'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="250" bgcolor="#F2F2F2"> <?php echo  (!empty($_POST['24']) ? $_POST['24'] : ''); ?> </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom><?php echo  (!empty($_POST['31']) ? $_POST['31'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="1" ><?php echo  (!empty($_POST['32']) ? $_POST['32'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="250" ><?php echo  (!empty($_POST['33']) ? $_POST['33'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="250" > <?php echo  (!empty($_POST['34']) ? $_POST['34'] : ''); ?> </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom bgcolor="#F2F2F2"><?php echo  (!empty($_POST['41']) ? $_POST['41'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="1" bgcolor="#F2F2F2"><?php echo  (!empty($_POST['42']) ? $_POST['42'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="250" bgcolor="#F2F2F2"><?php echo  (!empty($_POST['43']) ? $_POST['43'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="250" bgcolor="#F2F2F2"> <?php echo  (!empty($_POST['44']) ? $_POST['44'] : ''); ?> </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom><?php echo  (!empty($_POST['51']) ? $_POST['51'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="1" ><?php echo  (!empty($_POST['52']) ? $_POST['52'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="250" ><?php echo  (!empty($_POST['53']) ? $_POST['53'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="250" > <?php echo  (!empty($_POST['54']) ? $_POST['54'] : ''); ?> </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom bgcolor="#F2F2F2"><?php echo  (!empty($_POST['61']) ? $_POST['61'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="1" bgcolor="#F2F2F2"><?php echo  (!empty($_POST['62']) ? $_POST['62'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="250" bgcolor="#F2F2F2"><?php echo  (!empty($_POST['63']) ? $_POST['63'] : ''); ?></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="250" bgcolor="#F2F2F2"> <?php echo  (!empty($_POST['64']) ? $_POST['64'] : ''); ?> </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="0" sdnum="1033;0;_(* #,##0.00_);_(* \(#,##0.00\);_(* -??_);_(@_)"> </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom bgcolor="#F2F2F2"><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#F2F2F2"><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#F2F2F2"><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom bgcolor="#F2F2F2" sdval="0" sdnum="1033;0;_(* #,##0.00_);_(* \(#,##0.00\);_(* -??_);_(@_)"> </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="0" sdnum="1033;0;_(* #,##0.00_);_(* \(#,##0.00\);_(* -??_);_(@_)"> </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom bgcolor="#F2F2F2"><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#F2F2F2"><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#F2F2F2"><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom bgcolor="#F2F2F2" sdval="0" sdnum="1033;0;_(* #,##0.00_);_(* \(#,##0.00\);_(* -??_);_(@_)">  </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="0" sdnum="1033;0;_(* #,##0.00_);_(* \(#,##0.00\);_(* -??_);_(@_)"> </td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #000000" colspan=4 height="19" align="left" valign=bottom bgcolor="#F2F2F2"><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#F2F2F2"><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#F2F2F2"><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom bgcolor="#F2F2F2" sdval="0" sdnum="1033;0;_(* #,##0.00_);_(* \(#,##0.00\);_(* -??_);_(@_)">  </td>
        </tr>
        <tr>
            <td style="border-top: 1px solid #000000" height="20" align="left" valign=bottom><br></td>
            <td style="border-top: 1px solid #000000" align="left" valign=bottom><br></td>
            <td style="border-top: 1px solid #000000" align="left" valign=bottom><br></td>
            <td style="border-top: 1px solid #000000" align="left" valign=bottom>
                <font color="#FFFFFF">[42]</font>
            </td>
            <td style="border-top: 1px solid #000000" align="left" valign=bottom>&#3619;&#3623;&#3617;&#3648;&#3611;&#3655;&#3609;&#3648;&#3591;&#3636;&#3609; </td>
            <td style="border-top: 1px solid #000000" align="center" valign=bottom><br></td>
            <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="250" "> <?php echo number_format($sum,2); ?> </td>
        </tr>
        
        <!-- ส่วนลด -->
        <?php if( $_POST["sum_dis"] > 0) { ?>
        <tr>
            <td style="border-top: 1px solid #3b4e87; border-bottom: 1px solid #3b4e87; border-left: 1px solid #3b4e87; border-right: 1px solid #3b4e87" colspan=3 height="20" align="left" valign=bottom bgcolor="#F0B57A"><b>
                    <font face="Arial" color="#FFFFFF">&#3627;&#3617;&#3634;&#3618;&#3648;&#3627;&#3605;&#3640; </font>
                </b></td>
            <td align="left" valign=bottom>
                <font color="#FFFFFF"><br></font>
            </td>
            <td align="left" valign=bottom>ส่วนลด (ถ้ามี)</td>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom bgcolor="#F0B57A" sdval="0.05" sdnum="1033;0;0%"> - <?php echo number_format($_POST["vat2_1"],2); ?> </td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom sdval="12.5" > <?php echo number_format($total,2); ?> </td>
        </tr>
        <?php } ?>


        <!-- vat -->
        <?php if( !empty($_POST["vat"]) ){ ?>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=3 height="20" align="left" valign=top>1. &#3627;&#3634;&#3585;&#3621;&#3641;&#3585;&#3588;&#3657;&#3634;&#3605;&#3657;&#3629;&#3591;&#3585;&#3634;&#3619; &#3627;&#3633;&#3585;&#3616;&#3634;&#3625;&#3637; &#3603; &#3607;&#3637;&#3656;&#3592;&#3656;&#3634;&#3618; &#3585;&#3619;&#3640;&#3603;&#3634;&#3605;&#3636;&#3604;&#3605;&#3656;&#3629;&#3612;&#3641;&#3657;&#3586;&#3634;&#3618;&#3650;&#3604;&#3618;&#3605;&#3619;&#3591; </td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom> ราคาก่อน VAT </td>
            <td align="left" valign=bottom><br></td>
            <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom> <?php echo number_format($price_nv,2); ?> </td> 
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=3 height="20" align="left" valign=top>2 &#3585;&#3619;&#3640;&#3603;&#3634;&#3594;&#3635;&#3619;&#3632;&#3648;&#3591;&#3636;&#3609;&#3612;&#3656;&#3634;&#3609;&#3594;&#3656;&#3629;&#3591;&#3607;&#3634;&#3591;&#3594;&#3635;&#3619;&#3632;&#3648;&#3591;&#3636;&#3609;&#3586;&#3629;&#3591; VEZ (&#3623;&#3637;&#3629;&#3637;&#3595;&#3637;&#3656;) </td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom>VAT </td>
            <td align="center" valign=bottom sdval="0.07" sdnum="1033;0;0%">7%</td>
            <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=bottom ><?php echo number_format($vat,2); ?></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=3 height="20" align="left" valign=top>3. &#3627;&#3634;&#3585;&#3621;&#3641;&#3585;&#3588;&#3657;&#3634;&#3605;&#3657;&#3629;&#3591;&#3585;&#3634;&#3619;&#3651;&#3610;&#3648;&#3626;&#3619;&#3655;&#3592;&#3619;&#3633;&#3610;&#3648;&#3591;&#3636;&#3609; &#3585;&#3619;&#3640;&#3603;&#3634;&#3605;&#3636;&#3604;&#3605;&#3656;&#3629;&#3612;&#3641;&#3657;&#3586;&#3634;&#3618;&#3650;&#3604;&#3618;&#3605;&#3619;&#3591; </td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><b>&#3619;&#3623;&#3617;&#3648;&#3591;&#3636;&#3609;&#3607;&#3633;&#3657;&#3591;&#3626;&#3636;&#3657;&#3609; </b></td>
            <td align="center" valign=bottom><b><br></b></td>
            <td align="right" valign=bottom bgcolor="#D3D9EC"><b> THB <?php echo number_format($sum,2); ?></b></td>
        </tr>
        <?php } ?>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=3 height="20" align="left" valign=top>4. &#3585;&#3635;&#3627;&#3609;&#3604;&#3618;&#3639;&#3609;&#3619;&#3634;&#3588;&#3634;&#3616;&#3634;&#3618;&#3651;&#3609; 15 &#3623;&#3633;&#3609; </td>
            <td align="left" valign=bottom><br></td>
            <td colspan=3 align="center" valign=top><br></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=3 height="19" align="left" valign=top><br></td>
            <td align="left" valign=bottom><br></td>
            <td colspan=3 align="center" valign=top><b><br></b></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=3 height="19" align="left" valign=top><b>x ___________________________________________</b></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td style="border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=3 height="19" align="left" valign=top>&#3621;&#3591;&#3594;&#3639;&#3656;&#3629;&#3621;&#3641;&#3585;&#3588;&#3657;&#3634;:</td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
        <tr>
            <td style="border-bottom: 1px solid #808080; border-left: 1px solid #808080; border-right: 1px solid #808080" colspan=3 height="19" align="left" valign=top><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
            <td align="center" valign=bottom><br></td>
            <td align="left" valign=bottom><br></td>
        </tr>
    </table>
    <!-- ************************************************************************** -->
    <br><br>
    <button class="noprint" onclick="window.print()">Print this page Or Save to PDF</button>

</body>

</html>