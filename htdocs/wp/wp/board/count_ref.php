<?PHP
  include( "./functions.inc" );
  $uid = $_GET[uid];
  $page = $_GET[page];
  $con = mysql_connect( "localhost", "root", "111111" );
  mysql_select_db( "opentutorials", $con );

  $query = "update testboard set refnum=refnum+1 where uid=$uid";
  mysql_query( $query, $con ) or die ( mysql_error() );
  mysql_close( $con );
// 리플 하나 올리는 용도
  forward( dest_url( "./read.php", $page, $uid ) );
?>
