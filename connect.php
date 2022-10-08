<?php
	/*$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	
	mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);*/
	$Connect = pg_connect("postgres://izslbhgirodqpi:f35b00a3d5896ade13e27f780d341af50e971929370a023c0f1a5564ad04761a@ec2-52-4-87-74.compute-1.amazonaws.com:5432/d1s4jmvdpoppn1");
    //$Connect = pg_connect("host=localhost port=5432 dbname=postgres");
	//$Connect = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=123456");
	//postgres://zwicraqyvdahlk:ac413e4e4b67b10b13f635cabbaf0674d62315a776950f1ec04ab4781649ec59@ec2-3-93-206-109.compute-1.amazonaws.com:5432/dbp5dc5hhhfgra
	postgres://jmdrhuyxeteupz:59d17582c5cf3f93d4c70701169649492bf1ca1c26e7be4c1fed36ee1c91e358@ec2-34-205-14-168.compute-1.amazonaws.com:5432/d2hk0ut4ifpeo7
    if (!$Connect) {
        die("Connection failed");
    }
?>