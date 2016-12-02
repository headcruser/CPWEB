
<?php
      //inicializatr curl
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_PORT => "8080",
      CURLOPT_URL => "http://172.20.108.84:8080/cp_web/ws/servicios/mostrar",  //Servicio web a consumir
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",  //Solo por get
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "postman-token: 14c36592-3bbf-a793-62cc-1bd12fb7a1bb"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
 ?>
