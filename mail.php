
<? php
if ($_POST) {
  $fisrtname = $_POST['fisrtname'];
  $email  =  $_POST['email'];
  $name  =  $_POST['name'];
  
  $headers  =  "Version MIME: 1.0\r\n"; // header mail format
  $headers  .=  "Type de contenu: text / plain; charset = iso-8859-1\r\n";
  $headers  .=  "De: $nom <$email>\r\n Répondre à: $nom <$email>\n X-Mailer: PHP";
  
  $message  =  $_POST['message'] . "\r\n Mail de : " . $firstname . " " . $name;
  
  $subject = "Prise de contact depuis le porte folio";
  $destinataire = "anisidrenmouche@hotmail.fr";
  if (email($destinataire, $subject, $message, $headers)) {
    $response['status'] = 'success' ;
    $response['msg'] = 'votre courrier est envoyé' ;
  } else {
    $response['status'] = 'error' ;
    $response['msg'] =  'Une erreur' ;
  }
  echo json_encode($response);
}
? >
