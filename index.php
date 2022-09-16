<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

            <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="name">ชื่อผู้ขาย:</label>
                            </div>
                            <div class="col-sm-12">
                                <input id="name1" name="name1" type="text" placeholder="ชื่อผู้ซื้อ" class="form-control"
                                    required="">
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
                                <input id="name2" name="name2" type="text" placeholder="ชื่อผู้ขาย" class="form-control"
                                    required="">
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
                                <input id="d2" name="d2" type="date" placeholder="วันที่" class="form-control input-md"
                                    required="">
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
                                <label class="control-label" for="textarea">รายละเอียด บริษัทผู้ขาย:</label>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="textarea1" name="textarea1" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="textarea">รายละเอียด บริษัทผู้ซื่อ:</label>
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
                                <label class="control-label" for="2">เลขคำสั่งซื้อ</label>
                            </div>
                            <div class="col-sm-12">
                                <input id="order" name="order" type="text" placeholder="เลขคำสั่งซื้อ" class="form-control"
                                    required="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </fieldset>
            <table class="table table-striped" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th style="width: 45%;">สินค้า/บริการ</th>
                        <th style="width: 10%;">จำนวน</th>
                        <th style="width: 10%;">ราคาต่อหน่วย</th>
                        <th style="width: 10%;">เป็นเงิน</th>
                        <th style="width: 10%;">ส่วนลด(%)</th>
                        <th style="width: 10%;">ส่วนลดเป็นเงิน</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i=1; $i < 7; $i++) { 
                            echo
                            '<tr>
                                <th scope="row">'.$i.'</th>
                                <td><input class="form-control" type="text" id="11" name="11"></td>
                                <td><input class="form-control cc" data-qty="'.$i.'" type="number" id="'.$i.'2" name="'.$i.'2"></td>
                                <td><input class="form-control cc" data-unit="'.$i.'" type="number" id="'.$i.'3" name="'.$i.'3"></td>
                                <td><input class="form-control cc" data-price="'.$i.'" type="number" id="'.$i.'4" name="'.$i.'4" disabled></td>
                                <td><input class="form-control cc" data-discount="'.$i.'" type="number" id="'.$i.'5" name="'.$i.'5"></td>
                                <td><input class="form-control cc" data-price2="'.$i.'" type="number" id="'.$i.'6" name="'.$i.'6" disabled></td>
                            </tr>';
                        }
                    ?>
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
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <select class="custom-select" name="paytype1">
                                <option selected>เลือกประเภทการชำระเงิน</option>
                                <option value="1">จ่ายมัจจำก่อนเริ่มงานเป็นจำนวน</option>
                                <option value="2">จ่ายเมื่อจบงานเป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 1 เป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 2 เป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 3 เป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 4 เป็นจำนวน</option>
                            </select>
                        </td>
                        <th scope="row"><input class="form-control" type="number" id="14" name="14"></th>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <select class="custom-select" name="paytype2">
                                <option selected>เลือกประเภทการชำระเงิน</option>
                                <option value="1">จ่ายมัจจำก่อนเริ่มงานเป็นจำนวน</option>
                                <option value="2">จ่ายเมื่อจบงานเป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 1 เป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 2 เป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 3 เป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 4 เป็นจำนวน</option>
                            </select>
                        </td>
                        <th scope="row"><input class="form-control" type="number" id="14" name="14"></th>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <select class="custom-select" name="paytype3">
                                <option selected>เลือกประเภทการชำระเงิน</option>
                                <option value="1">จ่ายมัจจำก่อนเริ่มงานเป็นจำนวน</option>
                                <option value="2">จ่ายเมื่อจบงานเป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 1 เป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 2 เป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 3 เป็นจำนวน</option>
                                <option value="3">จ่ายงวดที่ 4 เป็นจำนวน</option>
                            </select>
                        </td>
                        <th scope="row"><input class="form-control" type="number" id="14" name="14"></th>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="row" style="padding: 10px">
                            <div class="col-sm-12">
                                <label class="control-label" for="textarea">หมายเหตุ:</label>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="textarea3" name="textarea3" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-12">
                            <label class="container1">คำนวนราคาก่อน Vat 7%
                                <input type="checkbox" checked="checked" name="vat">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-3">
                            <label class="container1">หัก ณ ที่จ่าย
                                <input type="checkbox" name="vat2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="col-4">
                            <input type="number" class="form-control" id="vat2_1" name="vat2_1"
                                aria-describedby="emailHelp" placeholder="X %">
                        </div>
                    </div>


                </div>
                <div class="col-4 mt-4">
                    <button type="submit" class="btn btn-lg btn-success" style="width: 100%"
                        value="">สร้างใบเสนอราคา</button>
                </div>
            </div>
        </form>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        $('body').on('keyup','.cc',function(){
            var v = $(this).data();
            var qty = 0;
            var unit = 0;
            var price = 0;
            var discount = 0;
            var sum = 0;

            if(v.qty){
                v = v.qty;
                qty = $('.cc[data-qty="'+v+'"]').val();
                unit =  $('.cc[data-unit="'+v+'"]').val();

                // if(qty && unit){
                //     sum = qty * unit;
                //     $('.cc[data-price="'+v+'"]').val(sum);
                // }
            }
            if(v.unit){
                v = v.unit;
                qty = $('.cc[data-qty="'+v+'"]').val();
                unit =  $('.cc[data-unit="'+v+'"]').val();

                // if(qty && unit){
                //     sum = qty * unit;
                //     $('.cc[data-price="'+v+'"]').val(sum);
                // }
            }

            if(v.discount){
                v = v.discount;
                discount = $('.cc[data-discount="'+v+'"]').val();
                price = $('.cc[data-price="'+v+'"]').val();

                // if(discount && price){
                //     sum = discount / 100 * price;
                //     $('.cc[data-price2="'+v+'"]').val(sum);
                // }
            }

            if(qty && unit){
                sum = qty * unit;
                $('.cc[data-price="'+v+'"]').val(sum);
            }

            if(discount && price){
                sum = discount / 100 * price;
                $('.cc[data-price2="'+v+'"]').val(sum);
            }
        })
    </script>
</body>

</html>