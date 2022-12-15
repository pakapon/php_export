<?php

if ($_GET['access'] != '') {
    $token =  array(
        'Authorization: Bearer ' . $_GET['access']
    );

    if ($_GET['company'] != '') {
        $url_p = "https://chatapi.vez.ai/company/" . $_GET['company'];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url_p,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => $token,
        ));

        $company = curl_exec($curl);
        curl_close($curl);
        $company_r = json_decode($company);
        // echo $company;
        // print_r($company_r);
        $company_r->image = "https://vezstorage.blob.core.windows.net/vpartner/media/".$company_r->image;
    }

    if ($_GET["id"] != '') {
        $url_p = "https://chatapi.vez.ai/quotation/" . $_GET['id'];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url_p,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => $token,
        ));

        $doc = curl_exec($curl);
        curl_close($curl);
        $doc_r = json_decode($doc);
        // echo $doc;
        // print_r($doc_r);
    }
}
