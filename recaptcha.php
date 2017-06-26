<?php
    $secret = "6Ldr1CYUAAAAALK9kubEYkwUqmJT2X2wsWYJP4jd";
    $response = $_POST['g_recaptcha_response'];

    $url = "https://www.google.com/recaptcha/api/siteverify";

    $fields = array('response' => $response, 'secret' => $secret);

    // build the urlencoded data
    $postvars = http_build_query($fields);


    // open connection
    $ch = curl_init();

    // set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);

    // execute post
    $result = curl_exec($ch);

    // close connection
    curl_close($ch);

    header('Content-type:application/json;charset=utf-8');
    echo json_encode($result);

?>

