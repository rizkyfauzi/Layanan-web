<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WEB SERVICE UPDATE TWEET</title>
<script src="js/jquery.js"></script>
</head>
<body background="">
<br><br><br><br>
<table width=40% border=1  align="center" bgcolor="softblue">

<td align="center"><img src="img/tw.jpg" width="50" align="center" height="50" ><font size=5 font face="calibri" it font color=#ffffff align="top">  Welcome On Twitter<div class="container-fluid">
	<h2>Update Status Anda</h2>
			<form role="form" method="post" action="index1.php">
				<div class="row-fluid">
					<div class="col-sm-6">
						<div class="form-group">
                          <textarea name="tweet" cols="80" rows="3" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-10 col-sm-3">
							<br>
								<button name="update" type="submit" class="btn btn-primary"><font size=5 font face="Capture" it font color=#000000>Tweet</button>
								<P>
								</p>
							</div>
							<div class="col-sm-offset-10 col-sm-3">
							</div>
<tr>
							<td align="center"><h2><font size=5 font face="Capture" it font color=#ffffff >Recen Twitt Update</h2></td>
							</tr>
							<td><center>
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
	echo "<h3><font size=3 font face=Capture it font color=#ffffff></h3>";
	include "showTweet.php";
} else {
	echo "Pesan gagal terkirim ke Twitter API";
}
?>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</td>

</td>
</table>
</body>
</html>
