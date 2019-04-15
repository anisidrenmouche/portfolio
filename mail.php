
<? php
si ( $ _POST ) {
  $fisrtname = $ _POST ['fisrtname'];
  $ email  =  $ _POST [ ' email ' ];
  $ name  =  $ _POST [ ' name ' ];
  $ message  =  $ _POST [ ' message ' ];
  $ headers  =  " Version MIME: 1.0 \ r \ n " ; // header mail format 
  $ headers  . =  " Type de contenu: text / plain; charset = iso-8859-1 \ r \ n " ;
  $ headers  . =  " De: $ nom < $ email > \ r \ n Répondre à: $ nom < $ email > \ n X-Mailer: PHP " ;
  $ subject = " $ objet " ;   
  $ destinataire = " anisidrenmouche@hotmail.fr " ;
  $ body = " $ message " ;
  if ( mail ( $ destinataire , $ sujet , $ corps , $ en-têtes )) {
    $ response [ ' status ' ] =  ' success ' ;
    $ response [ ' msg ' ] =  ' votre courrier est envoyé ' ;
  } else {
    $ response [ ' status ' ] =  ' error ' ;
    $ response [ ' msg ' ] =  ' Une erreur ' ;
  }
  echo  json_encode ( $ response );
}
? >