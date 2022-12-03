<?php
include('../database.php');
session_start();
//save to pdf when opened
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Invoice</title>
	<!--viewport-->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- jquery-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- bootstrap js-->
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-12">   
 <div class="row">
		
        <div class="receipt-main col-xs-10 col-sm-10  col-xs-offset-1 ">
            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-6 col-sm-6 ">
						<div class="receipt-left">
							<img class="img-responsive" alt="iamgurdeeposahan" src="../assets/images/logo1.jpg" width="100px" >
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 text-right">
						<div class="receipt-right">
							<h5>CV. Anugrah Sahabat</h5>
							<p>Telepon: 081338870348</p>
							<p>Wisma prasetya 5 no 5 Semarang 50166</p>
						</div>
					</div>
				</div>
            </div>
			<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<h5>Nama Pelanggan </h5>
							<p><b>Nama :</b> 
						<?php
						//get username from url
						$username = $_GET['username'];
						//show username
						echo "$username";
						?></p>
							<p><b>Alamat :</b> 
						<?php
						//get alamat from url
						$alamat = $_GET['alamat'];
						//show alamat
						echo "$alamat";
						?></p>
							<p><b>No Telepon :</b> 
							<?php
						//get no_telepon from url
						$no_telepon = $_GET['no_telepon'];
						
						echo "$no_telepon";
						?></p>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<h3>INVOICE</h3>
						</div>
					</div>
				</div>
            </div>
			<center>
            <div>
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>Rincian</th>
							<th>Luas Bangunan</th>
							<th>Jumlah Lantai</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9">Rencana Biaya Pembangunan</td>
							<td class="col-md-9"><?php
							// get luasbangunan from url
							$luasbangunan = $_GET['luasbangunan'];
							//show luasbangunan + m2
							echo "$luasbangunan m2";
							?>
							</td>
							<td class="col-md-9">
								<?php
							// get jumlahlantai from url
							$jumlahlantai = $_GET['jumlantai'];
							//show jumlahlantai
							echo "$jumlahlantai lantai";
								?>
							</td>
                            <td class="col-md-3"><i ></i> <?php
							//get totalbiaya
							$totalbiaya = $_GET['totalbiaya'];
							//show totalbiaya with rupiah format
							echo "Rp. ".number_format($totalbiaya,0,',','.');

							?></td>
                        </tr>
						
                        <tr>
						<td class="text-right"><h2><strong> </strong></h2></td>
						<td class="text-right"><h2><strong> </strong></h2></td>
                            <td class="text-right"><h2><strong>Total: </strong></h2></td>
                            <td class="text-left text-danger"><h2><strong><i ></i> <?php
							//get totalbiaya
							$totalbiaya = $_GET['totalbiaya'];
							//show totalbiaya with rupiah format
							echo "Rp. ".number_format($totalbiaya,0,',','.');
							
							?></strong></h2></td>
                        </tr>
						
                    </tbody>
                </table>
            </div>
			</center>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<?php
							//get date asia/jakarta
							date_default_timezone_set('Asia/Jakarta');
							$date = date('d-m-Y');
							//echo tanggal: $date
							echo "Tanggal : $date";
							?>
						</div>
						<br>
						<tr>
							<!-- create button for print ctrl+p -->
							<?php
							//create button for print ctrl+p
							//button is hidden when print
							//put printer icon
							if (isset($_GET['print'])) {
								echo "<button onclick='window.print()' class='btn btn-primary hidden-print'><i class='fa fa-print'></i> Print</button>";
							} else {
								echo "<button onclick='window.print()' class='btn btn-primary hidden-print'><i class='fa fa-print'></i> Print</button>";
							}
							?>
						</tr>
					</div>
				</div>
            </div>
			
        </div>    
	</div>
</div>

<style type="text/css">
body{
background:#eee;
margin-top:20px;
}
.text-danger strong {
        	color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
		}
		.receipt-main p {
			color: #333333;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
		#container {
			background-color: #dcdcdc;
		}
</style>
</body>
</html>
