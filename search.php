<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/viewtablesearch.css" />
</head>

<body>
	<table>
    	<tr>
			<th>Bus Name</th>
            <th>From</th>
            <th>To</th>
            <th>Journey Date</th>
			<th>Time</th>
            <th>Total Seat</th>
			<th>Available seat</th>
			<th>Booking</th>
        </tr>

    <?php
	
			//$id = mysql_query("SELECT * FROM tbl_student WHERE stuid='$search'");
			$con =oci_connect('BUS1','1234','localhost/orcl');
			$sql="(select * from DEPERTURE_INFO )";
			$result=oci_parse($con,$sql);
			oci_execute($result);



	?>

    <?php
	    $con =oci_connect('BUS1','1234','localhost/orcl');
			$sql="(select * from DEPERTURE_INFO,BRANCH1 where DEPERTURE_INFO.BRANCH_ID = BRANCH1.BRANCH_ID )";
			$result=oci_parse($con,$sql);
			oci_execute($result);
		while ($di = oci_fetch_array($result,OCI_BOTH ))
		{
	?>
			<tr>
				<td><?php echo $di[0]; ?></td>
				<td><?php echo $di[1]; ?></td>
				<td><?php echo $di[7]; ?></td>
                <td><?php echo $di[3]; ?></td>
				<td><?php echo $di[4]; ?></td>
				<td><?php echo $di[2]; ?></td>
				<td><?php echo $di[6]; ?></td>
				
				<td align="center"><a href="account.html? txtid=<?php echo $di[0];?>">Book</a> </td>
			</tr>
            <?php
		}
	?>
</table>
<br>
<br>

</body>
</html>