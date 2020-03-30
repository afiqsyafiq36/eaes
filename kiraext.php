<?php
//data daripada table kursus
//DKA4213
$kata1 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '1' ");
$mata1 = mysqli_fetch_array($kata1);

//DKA4223
$kata2 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '2' ");
$mata2 = mysqli_fetch_array($kata2);

//DKA4033
$kata3 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '3' ");
$mata3 = mysqli_fetch_array($kata3);

//DKA4043
$kata4 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '4' ");
$mata4 = mysqli_fetch_array($kata4);

//DKA4054
$kata5 = mysqli_query($hubung,"SELECT * FROM kursus WHERE idkursus = '5' ");
$mata5 = mysqli_fetch_array($kata5);


//CLO1
//select avg c1s1 mengikut kursus from db
$avg1_dka4213 = mysqli_query($hubung,"SELECT AVG(ext_C1S1) AS ext_C1S1 FROM ext WHERE kodkursus = 'DKA4213' ");
$avg1_dka4223 = mysqli_query($hubung,"SELECT AVG(ext_C1S1) AS ext_C1S1 FROM ext WHERE kodkursus = 'DKA4223' ");
$avg1_dka4033 = mysqli_query($hubung,"SELECT AVG(ext_C1S1) AS ext_C1S1 FROM ext WHERE kodkursus = 'DKA4033' ");
$avg1_dka4043 = mysqli_query($hubung,"SELECT AVG(ext_C1S1) AS ext_C1S1 FROM ext WHERE kodkursus = 'DKA4043' ");
$avg1_dka4054 = mysqli_query($hubung,"SELECT AVG(ext_C1S1) AS ext_C1S1 FROM ext WHERE kodkursus = 'DKA4054' ");

//select avg c1s2 mengikut kursus from db
$avg2_dka4213 = mysqli_query($hubung,"SELECT AVG(ext_C1S2) AS ext_C1S2 FROM ext WHERE kodkursus = 'DKA4213' ");
$avg2_dka4223 = mysqli_query($hubung,"SELECT AVG(ext_C1S2) AS ext_C1S2 FROM ext WHERE kodkursus = 'DKA4223' ");
$avg2_dka4033 = mysqli_query($hubung,"SELECT AVG(ext_C1S2) AS ext_C1S2 FROM ext WHERE kodkursus = 'DKA4033' ");
$avg2_dka4043 = mysqli_query($hubung,"SELECT AVG(ext_C1S2) AS ext_C1S2 FROM ext WHERE kodkursus = 'DKA4043' ");
$avg2_dka4054 = mysqli_query($hubung,"SELECT AVG(ext_C1S2) AS ext_C1S2 FROM ext WHERE kodkursus = 'DKA4054' ");

//select avg c1s3 mengikut kursus from db
$avg3_dka4213 = mysqli_query($hubung,"SELECT AVG(ext_C1S3) AS ext_C1S3 FROM ext WHERE kodkursus = 'DKA4213' ");
$avg3_dka4223 = mysqli_query($hubung,"SELECT AVG(ext_C1S3) AS ext_C1S3 FROM ext WHERE kodkursus = 'DKA4223' ");
$avg3_dka4033 = mysqli_query($hubung,"SELECT AVG(ext_C1S3) AS ext_C1S3 FROM ext WHERE kodkursus = 'DKA4033' ");
$avg3_dka4043 = mysqli_query($hubung,"SELECT AVG(ext_C1S3) AS ext_C1S3 FROM ext WHERE kodkursus = 'DKA4043' ");
$avg3_dka4054 = mysqli_query($hubung,"SELECT AVG(ext_C1S3) AS ext_C1S3 FROM ext WHERE kodkursus = 'DKA4054' ");


//fetch data avg c1 mengikut kursus
$s1_dka4213 = mysqli_fetch_array($avg1_dka4213);
$s1_dka4223 = mysqli_fetch_array($avg1_dka4223);
$s1_dka4033 = mysqli_fetch_array($avg1_dka4033);
$s1_dka4043 = mysqli_fetch_array($avg1_dka4043);
$s1_dka4054 = mysqli_fetch_array($avg1_dka4054);

//fetch data avg c2 mengikut kursus
$s2_dka4213 = mysqli_fetch_array($avg2_dka4213);
$s2_dka4223 = mysqli_fetch_array($avg2_dka4223);
$s2_dka4033 = mysqli_fetch_array($avg2_dka4033);
$s2_dka4043 = mysqli_fetch_array($avg2_dka4043);
$s2_dka4054 = mysqli_fetch_array($avg2_dka4054);

//fetch data avg c3 mengikut kursus
$s3_dka4213 = mysqli_fetch_array($avg3_dka4213);
$s3_dka4223 = mysqli_fetch_array($avg3_dka4223);
$s3_dka4033 = mysqli_fetch_array($avg3_dka4033);
$s3_dka4043 = mysqli_fetch_array($avg3_dka4043);
$s3_dka4054 = mysqli_fetch_array($avg3_dka4054);

// END CLO1

//CLO2
//select avg c1s1 mengikut kursus from db
$a1_dka4213 = mysqli_query($hubung,"SELECT AVG(ext_C2S1) AS ext_C2S1 FROM ext WHERE kodkursus = 'DKA4213' ");
$a1_dka4223 = mysqli_query($hubung,"SELECT AVG(ext_C2S1) AS ext_C2S1 FROM ext WHERE kodkursus = 'DKA4223' ");
$a1_dka4033 = mysqli_query($hubung,"SELECT AVG(ext_C2S1) AS ext_C2S1 FROM ext WHERE kodkursus = 'DKA4033' ");
$a1_dka4043 = mysqli_query($hubung,"SELECT AVG(ext_C2S1) AS ext_C2S1 FROM ext WHERE kodkursus = 'DKA4043' ");
$a1_dka4054 = mysqli_query($hubung,"SELECT AVG(ext_C2S1) AS ext_C2S1 FROM ext WHERE kodkursus = 'DKA4054' ");

//select avg c1s2 mengikut kursus from db
$a2_dka4213 = mysqli_query($hubung,"SELECT AVG(ext_C2S2) AS ext_C2S2 FROM ext WHERE kodkursus = 'DKA4213' ");
$a2_dka4223 = mysqli_query($hubung,"SELECT AVG(ext_C2S2) AS ext_C2S2 FROM ext WHERE kodkursus = 'DKA4223' ");
$a2_dka4033 = mysqli_query($hubung,"SELECT AVG(ext_C2S2) AS ext_C2S2 FROM ext WHERE kodkursus = 'DKA4033' ");
$a2_dka4043 = mysqli_query($hubung,"SELECT AVG(ext_C2S2) AS ext_C2S2 FROM ext WHERE kodkursus = 'DKA4043' ");
$a2_dka4054 = mysqli_query($hubung,"SELECT AVG(ext_C2S2) AS ext_C2S2 FROM ext WHERE kodkursus = 'DKA4054' ");

//select avg c1s3 mengikut kursus from db
$a3_dka4213 = mysqli_query($hubung,"SELECT AVG(ext_C2S3) AS ext_C2S3 FROM ext WHERE kodkursus = 'DKA4213' ");
$a3_dka4223 = mysqli_query($hubung,"SELECT AVG(ext_C2S3) AS ext_C2S3 FROM ext WHERE kodkursus = 'DKA4223' ");
$a3_dka4033 = mysqli_query($hubung,"SELECT AVG(ext_C2S3) AS ext_C2S3 FROM ext WHERE kodkursus = 'DKA4033' ");
$a3_dka4043 = mysqli_query($hubung,"SELECT AVG(ext_C2S3) AS ext_C2S3 FROM ext WHERE kodkursus = 'DKA4043' ");
$a3_dka4054 = mysqli_query($hubung,"SELECT AVG(ext_C2S3) AS ext_C2S3 FROM ext WHERE kodkursus = 'DKA4054' ");


//fetch data avg c1 mengikut kursus
$z1_dka4213 = mysqli_fetch_array($a1_dka4213);
$z1_dka4223 = mysqli_fetch_array($a1_dka4223);
$z1_dka4033 = mysqli_fetch_array($a1_dka4033);
$z1_dka4043 = mysqli_fetch_array($a1_dka4043);
$z1_dka4054 = mysqli_fetch_array($a1_dka4054);

//fetch data avg c2 mengikut kursus
$z2_dka4213 = mysqli_fetch_array($a2_dka4213);
$z2_dka4223 = mysqli_fetch_array($a2_dka4223);
$z2_dka4033 = mysqli_fetch_array($a2_dka4033);
$z2_dka4043 = mysqli_fetch_array($a2_dka4043);
$z2_dka4054 = mysqli_fetch_array($a2_dka4054);

//fetch data avg c3 mengikut kursus
$z3_dka4213 = mysqli_fetch_array($a3_dka4213);
$z3_dka4223 = mysqli_fetch_array($a3_dka4223);
$z3_dka4033 = mysqli_fetch_array($a3_dka4033);
$z3_dka4043 = mysqli_fetch_array($a3_dka4043);
$z3_dka4054 = mysqli_fetch_array($a3_dka4054);

// END CLO2

//CLO3
//select avg c1s1 mengikut kursus from db
$y1_dka4213 = mysqli_query($hubung,"SELECT AVG(ext_C3S1) AS ext_C3S1 FROM ext WHERE kodkursus = 'DKA4213' ");
$y1_dka4223 = mysqli_query($hubung,"SELECT AVG(ext_C3S1) AS ext_C3S1 FROM ext WHERE kodkursus = 'DKA4223' ");
$y1_dka4033 = mysqli_query($hubung,"SELECT AVG(ext_C3S1) AS ext_C3S1 FROM ext WHERE kodkursus = 'DKA4033' ");
$y1_dka4043 = mysqli_query($hubung,"SELECT AVG(ext_C3S1) AS ext_C3S1 FROM ext WHERE kodkursus = 'DKA4043' ");
$y1_dka4054 = mysqli_query($hubung,"SELECT AVG(ext_C3S1) AS ext_C3S1 FROM ext WHERE kodkursus = 'DKA4054' ");

//select avg c1s2 mengikut kursus from db
$y2_dka4213 = mysqli_query($hubung,"SELECT AVG(ext_C3S2) AS ext_C3S2 FROM ext WHERE kodkursus = 'DKA4213' ");
$y2_dka4223 = mysqli_query($hubung,"SELECT AVG(ext_C3S2) AS ext_C3S2 FROM ext WHERE kodkursus = 'DKA4223' ");
$y2_dka4033 = mysqli_query($hubung,"SELECT AVG(ext_C3S2) AS ext_C3S2 FROM ext WHERE kodkursus = 'DKA4033' ");
$y2_dka4043 = mysqli_query($hubung,"SELECT AVG(ext_C3S2) AS ext_C3S2 FROM ext WHERE kodkursus = 'DKA4043' ");
$y2_dka4054 = mysqli_query($hubung,"SELECT AVG(ext_C3S2) AS ext_C3S2 FROM ext WHERE kodkursus = 'DKA4054' ");

//select avg c1s3 mengikut kursus from db
$y3_dka4213 = mysqli_query($hubung,"SELECT AVG(ext_C3S3) AS ext_C3S3 FROM ext WHERE kodkursus = 'DKA4213' ");
$y3_dka4223 = mysqli_query($hubung,"SELECT AVG(ext_C3S3) AS ext_C3S3 FROM ext WHERE kodkursus = 'DKA4223' ");
$y3_dka4033 = mysqli_query($hubung,"SELECT AVG(ext_C3S3) AS ext_C3S3 FROM ext WHERE kodkursus = 'DKA4033' ");
$y3_dka4043 = mysqli_query($hubung,"SELECT AVG(ext_C3S3) AS ext_C3S3 FROM ext WHERE kodkursus = 'DKA4043' ");
$y3_dka4054 = mysqli_query($hubung,"SELECT AVG(ext_C3S3) AS ext_C3S3 FROM ext WHERE kodkursus = 'DKA4054' ");


//fetch data avg c1 mengikut kursus
$x1_dka4213 = mysqli_fetch_array($y1_dka4213);
$x1_dka4223 = mysqli_fetch_array($y1_dka4223);
$x1_dka4033 = mysqli_fetch_array($y1_dka4033);
$x1_dka4043 = mysqli_fetch_array($y1_dka4043);
$x1_dka4054 = mysqli_fetch_array($y1_dka4054);

//fetch data avg c2 mengikut kursus
$x2_dka4213 = mysqli_fetch_array($y2_dka4213);
$x2_dka4223 = mysqli_fetch_array($y2_dka4223);
$x2_dka4033 = mysqli_fetch_array($y2_dka4033);
$x2_dka4043 = mysqli_fetch_array($y2_dka4043);
$x2_dka4054 = mysqli_fetch_array($y2_dka4054);

//fetch data avg c3 mengikut kursus
$x3_dka4213 = mysqli_fetch_array($y3_dka4213);
$x3_dka4223 = mysqli_fetch_array($y3_dka4223);
$x3_dka4033 = mysqli_fetch_array($y3_dka4033);
$x3_dka4043 = mysqli_fetch_array($y3_dka4043);
$x3_dka4054 = mysqli_fetch_array($y3_dka4054);

// END CLO3

//new declare

//DKA4213 CLO1
$A1S1 = (round($s1_dka4213['ext_C1S1'],2)); 
$A1S2 = (round($s2_dka4213['ext_C1S2'],2));
$A1S3 = (round($s3_dka4213['ext_C1S3'],2));

//CLO2
$A2S1 = (round($z1_dka4213['ext_C2S1'],2)); 
$A2S2 = (round($z2_dka4213['ext_C2S2'],2));
$A2S3 = (round($z3_dka4213['ext_C2S3'],2));

// CLO3
$A3S1 = (round($x1_dka4213['ext_C3S1'],2)); 
$A3S2 = (round($x2_dka4213['ext_C3S2'],2));
$A3S3 = (round($x3_dka4213['ext_C3S3'],2));

//DKA4223 CLO1
$B1S1 = (round($s1_dka4223['ext_C1S1'],2)); 
$B1S2 = (round($s2_dka4223['ext_C1S2'],2));
$B1S3 = (round($s3_dka4223['ext_C1S3'],2));

// CLO2
$B2S1 = (round($z1_dka4223['ext_C2S1'],2)); 
$B2S2 = (round($z2_dka4223['ext_C2S2'],2));
$B2S3 = (round($z3_dka4223['ext_C2S3'],2));

// CLO3
$B3S1 = (round($x1_dka4223['ext_C3S1'],2)); 
$B3S2 = (round($x2_dka4223['ext_C3S2'],2));
$B3S3 = (round($x3_dka4223['ext_C3S3'],2));

//DKA4033 CLO1
$C1S1 = (round($s1_dka4033['ext_C1S1'],2)); 
$C1S2 = (round($s2_dka4033['ext_C1S2'],2));
$C1S3 = (round($s3_dka4033['ext_C1S3'],2));

// CLO2
$C2S1 = (round($z1_dka4033['ext_C2S1'],2)); 
$C2S2 = (round($z2_dka4033['ext_C2S2'],2));
$C2S3 = (round($z3_dka4033['ext_C2S3'],2));

// CLO3
$C3S1 = (round($x1_dka4033['ext_C3S1'],2)); 
$C3S2 = (round($x2_dka4033['ext_C3S2'],2));
$C3S3 = (round($x3_dka4033['ext_C3S3'],2));

//DKA4043 CLO1
$D1S1 = (round($s1_dka4043['ext_C1S1'],2)); 
$D1S2 = (round($s2_dka4043['ext_C1S2'],2));
$D1S3 = (round($s3_dka4043['ext_C1S3'],2));

// CLO2
$D2S1 = (round($z1_dka4043['ext_C2S1'],2)); 
$D2S2 = (round($z2_dka4043['ext_C2S2'],2));
$D2S3 = (round($z3_dka4043['ext_C2S3'],2));

// CLO3
$D3S1 = (round($x1_dka4043['ext_C3S1'],2)); 
$D3S2 = (round($x2_dka4043['ext_C3S2'],2));
$D3S3 = (round($x3_dka4043['ext_C3S3'],2));

//DKA4054 CLO1
$E1S1 = (round($s1_dka4054['ext_C1S1'],2)); 
$E1S2 = (round($s2_dka4054['ext_C1S2'],2));
$E1S3 = (round($s3_dka4054['ext_C1S3'],2));

// CLO2
$E2S1 = (round($z1_dka4054['ext_C2S1'],2)); 
$E2S2 = (round($z2_dka4054['ext_C2S2'],2));
$E2S3 = (round($z3_dka4054['ext_C2S3'],2));

// CLO3
$E3S1 = (round($x1_dka4054['ext_C3S1'],2)); 
$E3S2 = (round($x2_dka4054['ext_C3S2'],2));
$E3S3 = (round($x3_dka4054['ext_C3S3'],2));


// Kiraan Purata bagi CLO 1 Soalan 1,2,3
$purataA = $A1S1 + $A1S2 + $A1S3;
$purataB = $A2S1 + $A2S2 + $A2S3;
$purataC = $A3S1 + $A3S2 + $A3S3;

$purataD = $B1S1 + $B1S2 + $B1S3;
$purataE = $B2S1 + $B2S2 + $B2S3;
$purataF = $B3S1 + $B3S2 + $B3S3;

$purataG = $C1S1 + $C1S2 + $C1S3;
$purataH = $C2S1 + $C2S2 + $C2S3;
$purataI = $C3S1 + $C3S2 + $C3S3;

$purataJ = $D1S1 + $D1S2 + $D1S3;
$purataK = $D2S1 + $D2S2 + $D2S3;
$purataL = $D3S1 + $D3S2 + $D3S3;

$purataM = $E1S1 + $E1S2 + $E1S3;
$purataN = $E2S1 + $E2S2 + $E2S3;
$purataO = $E3S1 + $E3S2 + $E3S3;


//dka4213
$clo14213 = $purataA / 3;
$clo24213 = $purataB / 3;
$clo34213 = $purataC / 3;

//bundarkan
$c14213 = (round($clo14213,2));
$c24213 = (round($clo24213,2)); 
$c34213 = (round($clo34213,2));  

//dka4223
$clo14223 = $purataD / 3;
$clo24223 = $purataE / 3;
$clo34223 = $purataF / 3;

//bundarkan
$c14223 = (round($clo14223,2));
$c24223 = (round($clo24223,2)); 
$c34223 = (round($clo34223,2)); 

//dka4033
$clo14033 = $purataG / 3;
$clo24033 = $purataH / 3;
$clo34033 = $purataI / 3;

//bundarkan
$c14033 = (round($clo14033,2));
$c24033 = (round($clo24033,2)); 
$c34033 = (round($clo34033,2)); 

//dka4043
$clo14043 = $purataJ / 3;
$clo24043 = $purataK / 3;
$clo34043 = $purataL / 3;

//bundarkan
$c14043 = (round($clo14043,2));
$c24043 = (round($clo24043,2)); 
$c34043 = (round($clo34043,2)); 

//dka4054
$clo14054 = $purataM / 3;
$clo24054 = $purataN / 3;
$clo34054 = $purataO / 3;

//bundarkan
$c14054 = (round($clo14054,2));
$c24054 = (round($clo24054,2)); 
$c34054 = (round($clo34054,2)); 

//declare avg clo1,2,3 for ent &ext page
$extk14213 = $c14213;
$extk24213 = $c24213;
$extk34213 = $c34213;

//declare avg clo1,2,3
$extk14223 = $c14223;
$extk24223 = $c24223;
$extk34223 = $c34223;

//declare avg clo1,2,3
$extk14033 = $c14033;
$extk24033 = $c24033;
$extk34033 = $c34033;

//declare avg clo1,2,3
$extk14043 = $c14043;
$extk24043 = $c24043;
$extk34043 = $c34043;

//declare avg clo1,2,3
$extk14054 = $c14054;
$extk24054 = $c24054;
$extk34054 = $c34054;



//variable for page ent & ext
//4213
$extc14213 = $c14213;
$extc24213 = $c24213; 
$extc34213 = $c34213;

//4223
$extc14223 = $c14223;
$extc24223 = $c24223; 
$extc34223 = $c34223; 

//4033
$extc14033 = $c14033;
$extc24033 = $c24033; 
$extc34033 = $c34033; 

//4043
$extc14043 = $c14043;
$extc24043 = $c24043; 
$extc34043 = $c34043; 

//4054
$extc14054 = $c14054;
$extc24054 = $c24054; 
$extc34054 = $c34054; 

//untuk min bagi setiap satu soalan clo
//DKA4213 CLO1
$extA1S1 = $A1S1; 
$extA1S2 = $A1S2;
$extA1S3 = $A1S3;

//CLO2
$extA2S1 = $A2S1; 
$extA2S2 = $A2S2;
$extA2S3 = $A2S3;

// CLO3
$extA3S1 = $A3S1; 
$extA3S2 = $A3S2;
$extA3S3 = $A3S3;

//DKA4223 CLO1
$extB1S1 = $B1S1; 
$extB1S2 = $B1S2;
$extB1S3 = $B1S3;

// CLO2
$extB2S1 = $B2S1; 
$extB2S2 = $B2S2;
$extB2S3 = $B2S3;

// CLO3
$extB3S1 = $B3S1; 
$extB3S2 = $B3S2;
$extB3S3 = $B3S3;

//DKA4033 CLO1
$extC1S1 = $C1S1; 
$extC1S2 = $C1S2;
$extC1S3 = $C1S3;

// CLO2
$extC2S1 = $C2S1; 
$extC2S2 = $C2S2;
$extC2S3 = $C2S3;

// CLO3
$extC3S1 = $C3S1; 
$extC3S2 = $C3S2;
$extC3S3 = $C3S3;

//DKA4043 CLO1
$extD1S1 = $D1S1; 
$extD1S2 = $D1S2;
$extD1S3 = $D1S3;

// CLO2
$extD2S1 = $D2S1; 
$extD2S2 = $D2S2;
$extD2S3 = $D2S3;

// CLO3
$extD3S1 = $D3S1; 
$extD3S2 = $D3S2;
$extD3S3 = $D3S3;

//DKA4054 CLO1
$extE1S1 = $E1S1; 
$extE1S2 = $E1S2;
$extE1S3 = $E1S3;

// CLO2
$extE2S1 = $E2S1; 
$extE2S2 = $E2S2;
$extE2S3 = $E2S3;

// CLO3
$extE3S1 = $E3S1; 
$extE3S2 = $E3S2;
$extE3S3 = $E3S3;
?>