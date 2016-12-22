<?php
//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);

//Decode the string
$unencodedData=base64_decode($filteredData);

//Save the image
$rnd = rand();
$rnd2 = md5($rnd) .".png";

file_put_contents($rnd2, $unencodedData);
?>
<h2>Use this image for your cover.</h2>
<table>
    <tr>
        <td>
            <a href="img.png" target="blank">
            	Click Here to See The Image Saved to Server.</a>
        </td>
        <td align="right">
            <a href="index.php">
            	Click Here to Go Back or set to restart process for another cover</a>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <br />
            <br />
			<span>
				Here is Client-sided image: You can save it.
			</span>
            <br />
<?php
//Show the image
echo '<img src="'.$_POST['img_val'].'" />';
?>
        </td>
    </tr>
</table>
<style type="text/css">
body, a, span {
	font-family: Tahoma; font-size: 10pt; font-weight: bold;
}
</style>