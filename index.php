<?php
include $_SERVER['DOCUMENT_ROOT'] . '/controller/sender.php';
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        input {
            width: 100%;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        /* The container */
        .container1 {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .container1 input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input~.checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .container input:checked~.checkmark {
            background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .container input:checked~.checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .container .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .add-item {
            border: 1px solid #ccc !important;
            border-radius: 16px;
            width: 30px;
            color: #fff;
            background-color: #5cb85c;
        }

        .add-item-plus {
            padding-left: 7px;
            padding-bottom: 2px;
        }

        .delete-item {
            border: 1px solid #ccc !important;
            border-radius: 16px;
            width: 30px;
            color: #fff;
            background-color: #C8161D;
        }

        .delete-item-minus {
            padding-left: 7px;
            padding-bottom: 2px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="form-horizontal" method="POST" action="download.php" target="_blank">
            <!-- Form Name -->
            <div style="margin-top:20px">
                <legend>
                    <h3>ใบเสนอราคา</h3>
                </legend>
            </div>
            <hr style="border-color: #F57F20;">
            <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="name">ชื่อผู้ขาย:</label>
                            </div>
                            <div class="col-sm-12">
                                <input id="name1" name="name1" type="text" placeholder="ชื่อผู้ขาย" class="form-control" value="<?= $company_r->name ?>" required>
                                <input id="image" name="image" type="hidden" class="form-control" value="<?= $company_r->image ?>" required>
                                <input id="token" name="token" type="hidden" class="form-control" value="<?= $_GET['token'] ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="name">ชื่อผู้ซื้อ:</label>
                            </div>
                            <div class="col-sm-12">
                                <input id="name2" name="name2" type="text" placeholder="ชื่อผู้ซื้อ" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="2">วันที่</label>
                            </div>
                            <div class="col-sm-12">
                                <input id="d2" name="d2" type="date" placeholder="วันที่" class="form-control input-md" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="textarea">รายละเอียดบริษัทผู้ขาย:</label>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="textarea1" name="textarea1" required><?php
                                                                                                        echo    $company_r->tax->address->desc . " " .
                                                                                                            $company_r->tax->address->sub_district->name_th . "\n" .
                                                                                                            $company_r->tax->address->district->name_th . "\n" .
                                                                                                            $company_r->tax->address->province->name_th . "\n" .
                                                                                                            $company_r->tax->address->postal_code . "\n" .
                                                                                                            $company_r->mobile . "\n";
                                                                                                        ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="textarea">รายละเอียดบริษัทผู้ซื้อ:</label>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="textarea2" name="textarea2" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="2">เลขที่ใบเสนอราคา</label>
                            </div>
                            <div class="col-sm-12">
                                <input id="qtid" name="qtid" type="text" placeholder="เลขที่ใบเสนอราคา" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="name">เลขประจำตัวผู้เสียภาษีผู้ขาย:</label>
                            </div>
                            <div class="col-sm-12">
                                <input id="tex1" name="tex1" type="text" placeholder="เลขประจำตัวผู้เสียภาษีผู้ขาย" class="form-control" value="<?= $company_r->tax->tax_id ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="name">เลขประจำตัวผู้เสียภาษีผู้ซื้อ:</label>
                            </div>
                            <div class="col-sm-12">
                                <input id="tex2" name="tex2" type="text" placeholder="เลขประจำตัวผู้เสียภาษีผู้ซื่อ" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="2">เลขที่คำสั่งซื้อ</label>
                            </div>
                            <div class="col-sm-12">
                                <input id="order" name="order" type="text" placeholder="เลขที่คำสั่งซื้อ" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            </fieldset>

            <div class="row">
                <div class="col-12">
                    <div class="container row">
                        <div class="d-flex flex-row">
                            <div class="p-2">
                                <label class="container1">
                                    <label for="vat">ราคาไม่รวม Vat 7%</label>
                                    <input type="radio" id="vat" name="vat" value="" checked>
                                    <input type="checkbox" name="vat">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="p-2">
                                <label class="container1">
                                    <label for="vat11">ราคารวม Vat 7%</label>
                                    <input type="radio" id="vat11" name="vat" value="1">
                                    <input type="checkbox" name="vat11">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 2%;">#</th>
                        <th style="width: 38%;">สินค้า/บริการ</th>
                        <th style="width: 10%;">จำนวน</th>
                        <th style="width: 10%;">ราคา/หน่วย</th>
                        <th style="width: 10%;">รวมเป็นเงิน</th>
                        <th style="width: 10%;">ส่วนลด(%)</th>
                        <th style="width: 10%;">ส่วนลด(฿)</th>
                        <th style="width: 10%;">รวมทั้งหมด</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 1; $i < 7; $i++) {
                        echo
                        '<tr>
                                <th scope="row">' . $i . '</th>
                                <td class="fill_name" data-id="' . $i . '"><input class="form-control" type="text" id="' . $i . '1" name="' . $i . '1"></td>
                                <td><input class="form-control cc" data-qty="' . $i . '" type="number" id="' . $i . '2" name="' . $i . '2"></td>
                                <td><input class="form-control cc" data-unit="' . $i . '" type="number" id="' . $i . '3" name="' . $i . '3"></td>
                                <td><input class="form-control cc" data-price="' . $i . '" type="number" id="' . $i . '4" name="' . $i . '4" disabled></td>
                                <td class="discount" data-id="' . $i . '" data-discount="' . $i . '">
                                    <input class="form-control cc" data-discount="' . $i . '" type="number" id="' . $i . '5" name="' . $i . '5">
                                </td>
                                <td class="price2" data-id="' . $i . '" data-price2="' . $i . '">
                                    <input class="form-control cc" data-price2="' . $i . '" type="number" id="' . $i . '6" name="' . $i . '6" min="1" disabled>
                                </td>
                                <td><input class="form-control cc sum" data-price3="' . $i . '" type="number" id="' . $i . '7" name="' . $i . '7" disabled></td>
                            </tr>';
                    }
                    ?>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="2">ยอดรวมทั้งหมด</td>
                        <td class="text-center">
                            <font class="sumP"></font>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr>

            <table class="table table-striped" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th style="width: 45%;">ประเภทการชำระเงิน</th>
                        <th style="width: 45%;"></th>
                    </tr>
                </thead>
                <tbody class="bodyTyp">
                </tbody>
            </table>

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="add-item" onclick="addType()">
                        <h5 class="m-0 add-item-plus">+</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="textarea">หมายเหตุ:</label>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="textarea3" name="textarea3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="textarea">กำหนดยืนราคา(วัน)</label>
                            </div>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="st_day" name="st_day" placeholder="กำหนดยืนราคา">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="d-flex flex-row">
                        <div class="p-2">
                            <label class="container1">
                                <label for="vat2">ไม่มีหัก ณ ที่จ่าย</label>
                                <input type="radio" class="checkRadio" id="vat2" name="vat2" value="" checked>
                                <input type="checkbox" name="vat2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="p-2">
                            <label class="container1">
                                <label for="vat3">มีหัก ณ ที่จ่าย</label>
                                <input type="radio" class="checkRadio" id="vat2" name="vat2" value="1">
                                <input type="checkbox" name="vat2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="p-2">
                            <div class="form-group">
                                <select class="form-control RaSelectOP" name="vat2_1" id="vat2_1" disabled>
                                    <option value="1">1% สำหรับค่าขนส่ง</option>
                                    <option value="2">2% สำหรับค่าโฆษณา</option>
                                    <option value="3">3% สำหรับจ้างรับเหมาหรือบริการต่างๆ</option>
                                    <option value="5">5% สำหรับค่าเช่าอสังหาริมทรัพย์</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 mt-4 mb-4"> <button type="submit" class="btn btn-lg btn-success" style="width: 100%" value="">สร้างใบเสนอราคา</button> </div>
        </form>
    </div>



    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        var sum = 0;

        $('body').on('click', '.fill_name', function() {
            var id = $(this).data('id')

            var discount = $('.cc[data-discount="' + id + '"]').val();
            if(!discount){
                $('.cc[data-discount="' + id + '"]').val(0);
            }
        })

        $('body').on('click', '.discount', function() {
            var id = $(this).data('id')

            $('.cc[data-discount="' + id + '"]').prop('disabled', false).val(0);
            $('.cc[data-price2="' + id + '"]').prop('disabled', true).val(null);
            // calPriceFunction()

            var v = $(this).data();
            calPriceFunction(v)
        })

        $('body').on('click', '.price2', function() {
            var id = $(this).data('id')

            $('.cc[data-discount="' + id + '"]').prop('disabled', true).val(null);
            $('.cc[data-price2="' + id + '"]').prop('disabled', false).val(0);
            
            var v = $(this).data();
            calPriceFunction(v)
        })

        $('body').on('change', '.checkRadio', function() {
            var v = $(this).val()
            if (v) {
                $('.RaSelectOP').prop('disabled', false);
            } else {
                $('.RaSelectOP').prop('disabled', true);
            }
        })

        $('body').on('keyup', '.cc', function() {
            var v = $(this).data();
            calPriceFunction(v)
        })

        function calPriceFunction(v) {
            console.log('calPriceFunction',v);
            // var v = $(this).data();
            var qty = 0;
            var unit = 0;
            var price = 0;
            var discount = 0;
            var discount2 = 0;
            var sum_ = 0;
            var sum2 = 0;
            var price2 = 0;

            console.log('sum2 1 => ', sum2);
            if (v.qty) {
                v = v.qty;
                qty = $('.cc[data-qty="' + v + '"]').val();
                unit = $('.cc[data-unit="' + v + '"]').val();

            }
            if (v.unit) {
                v = v.unit;
                qty = $('.cc[data-qty="' + v + '"]').val();
                unit = $('.cc[data-unit="' + v + '"]').val();
            }

            if (v.discount) {
                v = v.discount;
                discount = $('.cc[data-discount="' + v + '"]').val();
                price = $('.cc[data-price="' + v + '"]').val();
            }

            if (v.price2) {
                v = v.price2;
                price = $('.cc[data-price="' + v + '"]').val();
                price2 = $('.cc[data-price2="' + v + '"]').val();
            }

            // Callcuator
            if (qty && unit) {
                sum_ = qty * unit;
                $('.cc[data-price="' + v + '"]').val(sum_);
                $('.cc[data-price3="' + v + '"]').val(sum_);
            }

            // console.log('xxx',discount,price);
            if (discount && price) {
                $('.cc[data-price3="' + v + '"]').val('');
                sum_ = discount / 100 * price;
                sum2 = price - sum_ * 1;
                // $('.cc[data-price2="' + v + '"]').val(sum_);
                $('.cc[data-price3="' + v + '"]').val(sum2);
            }

            if (price2 && price) {
                $('.cc[data-discount="' + v + '"]').val('');
                dis1 = price2 / price * 100;
                sum2 = price - price2 * 1;
                // $('.cc[data-discount="' + v + '"]').val(dis1);
                $('.cc[data-price3="' + v + '"]').val(sum2);
            }

            // console.log('sum2 .1 => ');
            // console.log('sum2 2 => ', sum2);
            // if(sum2 <= 0) {
            //     hasError = true;
            //     Swal.fire({
            //         icon: 'error',
            //         title: 'ข้อมูลไม่ถูกต้อง',
            //         text: 'จำนวนเงินรวมติดลบ!',
            //     });
            // }

            sumPrice();
        }

        function sumPrice() {
            var price1 = $('.cc[data-price3="1"]').val() ? $('.cc[data-price3="1"]').val() : 0;
            var price2 = $('.cc[data-price3="2"]').val() ? $('.cc[data-price3="2"]').val() : 0;
            var price3 = $('.cc[data-price3="3"]').val() ? $('.cc[data-price3="3"]').val() : 0;
            var price4 = $('.cc[data-price3="4"]').val() ? $('.cc[data-price3="4"]').val() : 0;
            var price5 = $('.cc[data-price3="5"]').val() ? $('.cc[data-price3="5"]').val() : 0;
            var price6 = $('.cc[data-price3="6"]').val() ? $('.cc[data-price3="6"]').val() : 0;

            sum = parseFloat(price1) + parseFloat(price2) + parseFloat(price3) + parseFloat(price4) + parseFloat(price5) + parseFloat(price6)
            $('.sumP').html(sum)
        }

        $('body').on('click', '.delete-type', function() {
            var id = $(this).data('delete')
            $('.tr-data-' + id).remove()
        })

        var count = 1;

        function createType() {
            if (count == 1) {
                var st1 = ` `;
            } else {
                var st1 = `<button style="margin-top: 7px;" class="badge badge-sm badge-danger delete-type" data-delete="` + count + `">X</button>`;
            }
            var html = `<tr class="tr-data-` + count + `">
                    <th scope="row"></th>
                    <td>
                        <select class="custom-select" name="paytype1` + count + `">
                            <option selected>เงื่อนไขการชำระเงิน</option>
                            <option value="จ่ายมัดจำก่อนเริ่มงานเป็นจำนวน">จ่ายมัดจำก่อนเริ่มงานเป็นจำนวน</option>
                            <option value="จ่ายเมื่อจบงานเป็นจำนวน">การชำระเงินเต็ม 100%</option>
                            <option value="จ่ายงวดที่ 1 เป็นจำนวน">จ่ายงวดที่ 1 เป็นจำนวน</option>
                            <option value="จ่ายงวดที่ 2 เป็นจำนวน">จ่ายงวดที่ 2 เป็นจำนวน</option>
                            <option value="จ่ายงวดที่ 3 เป็นจำนวน">จ่ายงวดที่ 3 เป็นจำนวน</option>
                            <option value="จ่ายงวดที่ 4 เป็นจำนวน">จ่ายงวดที่ 4 เป็นจำนวน</option>
                            <option value="จ่ายงวดที่ 5 เป็นจำนวน">จ่ายงวดที่ 5 เป็นจำนวน</option>
                            <option value="จ่ายงวดที่ 6 เป็นจำนวน">จ่ายงวดที่ 6 เป็นจำนวน</option>
                            <option value="จ่ายงวดที่ 7 เป็นจำนวน">จ่ายงวดที่ 7 เป็นจำนวน</option>
                            <option value="จ่ายงวดที่ 8 เป็นจำนวน">จ่ายงวดที่ 8 เป็นจำนวน</option>
                            <option value="จ่ายงวดที่ 9 เป็นจำนวน">จ่ายงวดที่ 9 เป็นจำนวน</option>
                            <option value="จ่ายงวดที่ 10 เป็นจำนวน">จ่ายงวดที่ 10 เป็นจำนวน</option>
                        </select>
                    </td>
                    <th scope="row"><input class="form-control typeB" data-id="` + count + `" type="text" id="paytype2` + count + `" name="paytype2` + count + `" oninput="validateInput()"></th>
                    <th class="m-0 delete-item-minus" scope="row">
                        ` + st1 + `
                    </th>
                </tr>`;

            $('.bodyTyp').append(html)
        }

        function validateInput() {
            var inputValue = document.getElementById("paytype21").value;
            var isValid = /^\d*\.?\d*$/.test(inputValue); // Regular expression to check if the input is a valid decimal number

            if (!isValid) {
                alert("Please enter a valid numeric value.");
                // You can choose to clear the input field or revert to the previous valid value if desired
            }
        }

        let hasError = false;

        function sumCheckType(id) {
            var typeBSum = 0;
            var typeB = $('.typeB')

            typeB.each(function(index) {
                var vv = $(this).val();
                console.log('loop typeBSum 1 => ',vv);
                typeBSum += parseFloat(vv);
                console.log('loop typeBSum 2 => ',typeBSum);
            });

            console.log("typeBSum",typeBSum);
            console.log("sum",sum);
            if (typeBSum != sum) {
                $('.typeB[data-id="' + id + '"]').val(null)
                hasError = true;
                Swal.fire({
                    icon: 'error',
                    title: 'ข้อมูลไม่ถูกต้อง',
                    text: 'จำนวนเงินที่ใส่ไม่เท่ากับ ยอดรวมทั้งหมด!',
                })
            } else {
                hasError = false;
            }
        }

        $('form').on('submit', function(event) {
            event.preventDefault();
            var id = $(this).find('.typeB').data('id');
            sumCheckType(id);
            if (hasError == false) {
                this.submit(); // submit the form if the sumCheckType function returns no errors
            }
        });


        function addType() {
            count++;

            if (count < 11) {
                createType()
            }
        }


        createType()

        function disable(datas) {
            document.getElementById(datas).disabled = "true";
        }

        function enable() {
            document.getElementById(datas).disabled = "";
        }

        get_quotation()
        function get_quotation() {
            axios.get('/controller/get_quotation.php')
            .then(function (response) {
                console.log(response.data);
                $('#qtid').val(response.data)
            })
            .catch(function (error) {
                console.log('error',error);
            });

		}

        // setDevData()
        function setDevData(){
            $('#name1').val('-------- TEST --------');
            $('#name2').val('-------- TEST --------');

            var today = new Date().toISOString().split('T')[0];
            $('#d2').val(today);

            $('#textarea1').val('-------- TEST --------');
            $('#textarea2').val('-------- TEST --------');

            $('#tex1').val('-------- TEST --------');
            $('#tex2').val('-------- TEST --------');

        }
    </script>
</body>

</html>