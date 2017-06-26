<?php
    $secret = "6Ldr1CYUAAAAALK9kubEYkwUqmJT2X2wsWYJP4jd";
    $response = $_POST['g_recaptcha_response'];

    $url = "https://www.google.com/recaptcha/api/siteverify";

    $data = array('response' => $response, 'secret' => $secret);

    $options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) { echo FALSE; } else { echo $result; }

    // var_dump($result);

    // echo $result;
    

?>

