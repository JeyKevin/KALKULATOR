<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $judul; ?></title>

	<!-- link css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- link css -->

	<style>
	
		.isi {
		padding-top: 250px;
	    width: 650px;
	    margin: auto;
		}

		table {
		background: rgb(0,178,255);
		background: linear-gradient(90deg, rgba(0,178,255,1) 0%, rgba(236,151,255,1) 100%);
		box-shadow: 0px 8px 30px 20px rgba(32, 30, 38, 0.30);
		}

	</style>

</head>
<body style="background-color: #86A0A9">


<div class="isi">

<div class="container">
	
	<div class="row">
		
		<table class="table table-dark" border="3" align="center">
			 
			 <thead class="text-center">
			    <tr>
			      <th colspan="2">Biodata KU</th>
				 </tr>
			 </thead>
			  
			<tbody>
		   
			    <tr>
			      <td>Nama </td>
			      <td> <?php echo $nama ?> </td>
			    </tr>

			     <tr>
			      <td>Alamat </td>
			      <td> <?php echo $alamat ?> </td>
			    </tr>

			     <tr>
			      <td>Jenis Kelamin </td>
			      <td> <?php echo $jenis ?> </td>
			    </tr>

			     <tr>
			      <td>Asal Sekolah </td>
			      <td> <?php echo $asal ?> </td>
			    </tr>

			</tbody>

	</table>

</div>

</div>

</div>
</body>
</html>