<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WEB SERVIE UPDATE TWEET</title>
<script src="js/jquery.js"></script>
</head>
<body background="">
<br><br><br><br>
<table width=70% border=1 align="center" background="" =>

<tr><td rowspan=2 valign="top"><img src="" width="70" height="80"><font size=5 font face="Capture" it font color=#ffffff valign="top"><div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			<div class="row">
				<div class="col-md-6">
					<div class="page-header">
						<h2>Update Status Anda</h2>
					</div>
				</div>	
			</div>
			<form role="form" method="post" action="index.php">
				<div class="row-fluid">
					<div class="col-sm-6">
						<div class="form-group">
                          <textarea name="tweet" cols="80" rows="3" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-10 col-sm-3">
							<br>
								<button name="update" type="submit" class="btn btn-primary"><font size=5 font face="Capture" it font color=#000000>Tweet</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div></td>

<td align="center"><h2><font size=5 font face="Capture" it font color=#ffffff >TWEET</h2></tr>
<td>
<?php
include "OAuth.php";
include "twitteroauth.php";
$consumerKey 	 = "Rf59DvzBVXgymmKeDZZ3bnvxw";
$consumerSecret = "B8FPHtT6ENdgoc7ieuKd8czq45snzwLaE1xEnGTdoNIK23yLYt";
$oAuthToken		 = "718102701117022208-2rILLq88O7osCYJKPEPq7EBgz5sHZjG";
$oAuthSecret	 = "kRBXZPPAs1MYb9KfHeLuMlC8mGS0mKan12i6aYvJUOfyj";

$status		= $_POST['tweet'];

$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);
if (isset($_POST['update'])){
	$tweet->post('statuses/update', array('status'=>$status));
	echo "<h3><font size=5 font face=Capture it font color=#ffffff></h3>";
	include "showTweet.php";
} else {
	echo "Pesan gagal terkirim ke Twitter API";
}
?>
</td>
</tr>
</table>
</body>
</html>
