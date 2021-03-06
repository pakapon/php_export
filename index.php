<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        input {
            width: 100%;
        }
    </style>
</head>

<body>
    <form class="form-horizontal" method="POST" action="download.php" target="_blank">
        <!-- Form Name -->
        <legend>ใบเสนอราคา</legend>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="2">วันที่</label>
            <div class="col-md-4">
                <input id="2" name="2" type="date" placeholder="วันที่" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input -->
        <!-- <div class="form-group">
            <label class="col-md-4 control-label" for="1">เลขที่</label>
            <div class="col-md-4">
                <input id="1" name="1" type="text" placeholder="เลขที่" class="form-control input-md" required="">

            </div>
        </div> -->

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textarea">รายละเอียด บริษัทผู้ขาย:</label>
            <div class="col-md-4">
                <textarea class="form-control" id="textarea1" name="textarea1"></textarea>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textarea">รายละเอียด บริษัทผู้ซื่อ:</label>
            <div class="col-md-4">
                <textarea class="form-control" id="textarea2" name="textarea2"></textarea>
            </div>
        </div>

        </fieldset>
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 20px;">#</th>
                    <th style="width: 460px;">สินค้า</th>
                    <th style="width: 100px;">จำนวน</th>
                    <th style="width: 100px;">ราคาหน่วย</th>
                    <th style="width: 100px;">จำนวนเงิน</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><input type="text" id="11" name="11" ></td>
                    <td><input type="number" value=0 id="12" name="12"></td>
                    <td><input type="number" value=0 id="13" name="13"></td>
                    <td><input type="number" value=0 id="14" name="14"></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><input type="text" id="21" name="21"></td>
                    <td><input type="number" value=0 id="22" name="22"></td>
                    <td><input type="number" value=0 id="23" name="23"></td>
                    <td><input type="number" value=0 id="24" name="24"></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><input type="text" id="31" name="31"></td>
                    <td><input type="number" value=0 id="32" name="32"></td>
                    <td><input type="number" value=0 id="33" name="33"></td>
                    <td><input type="number" value=0 id="34" name="34"></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><input type="text" id="41" name="41"></td>
                    <td><input type="number" value=0 id="42" name="42"></td>
                    <td><input type="number" value=0 id="43" name="43"></td>
                    <td><input type="number" value=0 id="44" name="44"></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td><input type="text" id="51" name="51"></td>
                    <td><input type="number" value=0 id="52" name="52"></td>
                    <td><input type="number" value=0 id="53" name="53"></td>
                    <td><input type="number" value=0 id="54" name="54"></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td><input type="text" id="61" name="61"></td>
                    <td><input type="number" value=0 id="62" name="62"></td>
                    <td><input type="number" value=0 id="63" name="63"></td>
                    <td><input type="number" value=0 id="64" name="64"></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td><input type="text" id="71" name="71"></td>
                    <td><input type="number" value=0 id="72" name="72"></td>
                    <td><input type="number" value=0 id="73" name="73"></td>
                    <td><input type="number" value=0 id="74" name="74"></td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td><input type="text" id="81" name="81"></td>
                    <td><input type="number" value=0 id="82" name="82"></td>
                    <td><input type="number" value=0 id="83" name="83"></td>
                    <td><input type="number" value=0 id="84" name="84"></td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td><input type="text" id="91" name="91"></td>
                    <td><input type="number" value=0 id="92" name="92"></td>
                    <td><input type="number" value=0 id="93" name="93"></td>
                    <td><input type="number" value=0 id="94" name="94"></td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td><input type="text" id="01" name="01"></td>
                    <td><input type="number" value=0 id="02" name="02"></td>
                    <td><input type="number" value=0 id="03" name="03"></td>
                    <td><input type="number" value=0 id="04" name="04"></td>
                </tr>
                <!-- <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td>รวมเป็นเงิน</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td>รวมเป็นเงินทั้งสิ้น</td>
                    <td></td>
                </tr> -->

                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button type="submit" value="">สร้างใบเสนอราคา</button></td>
                </tr>
            </tbody>
        </table>
    </form>


</body>

</html>