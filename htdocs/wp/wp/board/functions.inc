<?PHP
function is_url_valid($url)
{
    if(eregi("[a-z0-9]+\.[a-z0-9_]+",$url))
	return TRUE;
    else
	return FALSE;
}

function error($msg)
{
    echo("<script language=\"javascript\">alert(\"$msg\");history.back();</script>");
}

function forward($url)
{
    header("Location:".$url);
}

function dest_url($link, $page, $uid=NULL)
{
    GLOBAL $kind;
    GLOBAL $key;
    $link.="?page=$page";
    if($uid)
	$link.="&uid=$uid";
    if($key)
	$link.="&kind=$kind&key=$key";
    return $link;
}
?>
