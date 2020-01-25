<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="src/style.css">
<link href="https://otakudesu.org/wp-content/themes/Animestream/style.css" rel="stylesheet" type="text/css" />
	<link href="https://otakudesu.org/wp-content/themes/Animestream/css/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js" type="text/javascript">
	</script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js" type="text/javascript">
	</script>
	<script src="https://otakudesu.org/wp-content/themes/Animestream/bootstrap/css/bootstrap.min.js" type="text/javascript">
	</script>
	<link href="https://otakudesu.org/wp-content/themes/Animestream/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<font face=Ubuntu>

<style>
  body { 
    background: white url("/src/nino.png") no-repeat fixed center; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.memek {
  margin: auto;
  background-color: #8105aa;
  width: 50%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

.pepek {
  margin: auto;
  background-color: #f7f3f3;
  width: 10%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

.intro {
  margin: auto;
  background-color: #f7f3f3;
  width: 30%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}
</style>
	<link href='https://otakudesu.org/wp-includes/css/dist/block-library/style.min.css?ver=5.2.5' id='wp-block-library-css' media='all' rel='stylesheet' type='text/css' />
	<link href='https://otakudesu.org/wp-includes/css/dashicons.min.css?ver=5.2.5' id='dashicons-css' media='all' rel='stylesheet' type='text/css' />
	<link href='https://otakudesu.org/wp-json/' rel='https://api.w.org/' />
	<link href="https://otakudesu.org/xmlrpc.php?rsd" rel="EditURI" title="RSD" type="application/rsd+xml" />
	<link href="https://otakudesu.org/wp-includes/wlwmanifest.xml" rel="wlwmanifest" type="application/wlwmanifest+xml" />
	<meta content="WordPress 5.2.5" name="generator" />
	<link href='https://otakudesu.org/?p=79329' rel='shortlink' />
	<link href="https://otakudesu.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fotakudesu.org%2Frokioi-episode-5-sub-indo%2F" rel="alternate" type="application/json+oembed" />
	<link href="https://otakudesu.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fotakudesu.org%2Frokioi-episode-5-sub-indo%2F&#038;format=xml" rel="alternate" type="text/xml+oembed" />
	<link href="https://otakudesu.org/wp-content/uploads/2017/06/Logo-1.png" rel="icon" sizes="32x32" />
	<link href="https://otakudesu.org/wp-content/uploads/2017/06/Logo-1.png" rel="icon" sizes="192x192" />
	<link href="https://otakudesu.org/wp-content/uploads/2017/06/Logo-1.png" rel="apple-touch-icon-precomposed" />
	<meta content="https://otakudesu.org/wp-content/uploads/2017/06/Logo-1.png" name="msapplication-TileImage" />
	<script>
	<![CDATA[
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://otakudesu.org/wp-content/cache/busting/google-tracking/ga-b66b3b5d54e154c81a50880cdcd7e5f8.js','ga');
	ga('create', 'UA-122917530-1', 'auto');ga('send', 'pageview');
	]]>
	</script>
  <link href="https://otakudesu.org/wp-content/custom/pofdsc.css" rel="stylesheet"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script>$(document).ready(function(){$(".mirrorstream ul").click(function(){$(".mirrorstream li").slideToggle("slow");});});</script>
<?php
echo '<font color=white size=5><center>Simple streamscraper, -Sin.</font>';
$form = '<form action="get.php" method="get">
<input type="hidden" style="width:40%;" name="anti"><br>
<input type="hidden" name="fansub">
</center>
</form>';

print $form;

if(isset($_GET['anti'])){
  $anti = $_GET['anti'];
  $bangsat = 'https://otakudesu.org/';
  $kontol = $bangsat . $anti; 
  $curl = curl_init($kontol); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) 
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

print '<div class="memek"><font color=black><br>';
//anime info    
function wordFilter3($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace("<div class='kategoz'>", '<div hidden>', $ambilkata);
    $ambilkata = str_replace('<div class="tambahan">', '<div hidden>', $ambilkata);
    $ambilkata = str_replace('<div class="keyword">', '<div hidden>', $ambilkata);
    $ambilkata = str_replace('https://otakudesu.org/', '/application/controllers/get.php?anti=', $ambilkata);
    return $ambilkata;
}



//link    
$regex = '/<div class="venutama">(.*?)<div class="keyword">/s';
if ( preg_match($regex, $page, $list) )
	
    echo '<center>',wordFilter3($list[0]),'</div><br>'; 
else 
    print "Not found";

}
function sed($text)
{
    $sed = $text;
    $sed = str_replace('-', ' ', $sed);
    $sed = str_replace('/', '', $sed);
    
    return $sed;
}

$judul = sed(strtoupper($_GET['anti']));

?>
<title><?php echo $judul,' - Download'; ?></title>
</div></div></div>

<p>
<div class="pepek">
<font face=Ubuntu>
<font color=black><b>

<?php
print 'argv=<br>';
$bc = basename(__FILE__);
echo "SITE: ".$_SERVER['SERVER_NAME']."<br>";
echo "FILE: ".$bc."<br>";
echo'</div>';
?>

<p>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>

<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/smhdk</font>
</font>
</div>   
    