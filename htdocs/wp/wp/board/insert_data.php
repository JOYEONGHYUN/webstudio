<?
  $con = mysql_connect( "localhost", "root", "111111" );
  mysql_select_db( "opentutorials", $con );
   $query = "select MAX( gid ) as gid from board";
   $result = mysql_query( $query, $con );
   $gid = current(mysql_fetch_array( $result ));
   $gid = $gid + 1;

  for ( $i=0; $i< 100000; $i++ )
  {
    $subject = "subject_test$i";
    $article = "article$i";
    $name = "test$i";
    $passwd = "test$i";

    $query = "insert into testboard ( gid, name, passwd, subject, article, writedate )
      values ( $gid+$i, '$name', '$passwd', '$subject', '$article', '2001-10-28' )";
    mysql_query( $query ) or die( mysql_error() );
  }
?>
