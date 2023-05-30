<?php
    include 'connent_db.php';

    $month = sprintf("%02d", date("m"));
    $year = date("Y");
    $timestamp = date("Y-m-d H:i:s");
    $fullQuotation = null;

    $sql = "SELECT * FROM quotation WHERE month = $month AND  year = $year ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_all(MYSQLI_ASSOC);

        $result->free_result();

        $num = (int) $data[0]['quotation_number'];
        $genNum = $num + 1;
        $genNum = str_pad($genNum, 3, '0', STR_PAD_LEFT);

        $fullQuotation = 'QT'.$year.$month.$genNum;

    } else {
        $genNum = '001';
        $fullQuotation = 'QT'.$year.$month.$genNum;

        
    }
    $stmt = $conn->prepare("INSERT INTO quotation (quotation, quotation_number, month, year, timestamp) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fullQuotation, $genNum, $month, $year, $timestamp);
    $stmt->execute();

    $stmt->close();

    echo json_encode($fullQuotation);

?>
