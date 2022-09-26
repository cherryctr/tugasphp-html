<!doctype html>
<html lang="en">
  <head>
  	<title>Tugas Pertemuan 2 | WEB PROGRAMMING</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="images/bsi.png">

	</head>
	<body>
	<section class="ftco-section">

  
  <!-- Modal -->
 
		<div class="container">
					<!-- Button trigger modal -->

			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<?php 
						$nama_tugas ="tugas 3 pemangilan php di table";
					
					?>
					<h2 class="heading-section"><?php echo $nama_tugas; ?></h2>
				</div>
			</div>

			<button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
				Profile Saya
			  </button>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">

					<?php
						$link_gambar ="https://asset.kompas.com/crops/qnW1FltddjqcfV-d_sANACN7G4w=/0x75:800x475/780x390/data/photo/2022/01/17/61e55359df287.jpg";
						$nama_produk = "Mobil Avanza 1000cc";
						$harga_produk = 200000;
						$deskrispsi = "What is Lorem Ipsum?
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";
						
					
					?>
						<table class="table table-responsive-xl table-bordered border-dark">
						  <thead>
						    <tr>
								<th class="text-center" colspan = "3">DAFTAR PRODUK</th>
							 </tr>
						  </thead>
						  <tbody>
							<tr>
								<td class="text-center" rowspan = "3"><img src="<?php echo $link_gambar; ?>" alt="" class="img-responsive gambar"></td>
								<td class="text-center">Nama Produk : </td>
								<td class="text-center"><?php echo $nama_produk ?></td>
							  
							 </tr>
							 <tr>
								<td class="text-center">Harga Produk : </td>
								<td class="text-center"><?php echo $harga_produk ?></td>
								
							 </tr>
					
							 <tr>
								<td class="text-center">Spesifikasi : </td>
								<td class="text-center"><?php echo $deskrispsi ?></td>
								
							 </tr>
						    <!-- <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" checked>
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td class="d-flex align-items-center">
						      	<div class="img" style="background-image: url(images/person_1.jpg);"></div>
						      	<div class="pl-3 email">
						      		<span>markotto@email.com</span>
						      		<span>Added: 01/03/2020</span>
						      	</div>
						      </td>
						      <td>Markotto89</td>
						      <td class="status"><span class="active">Active</span></td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td class="d-flex align-items-center">
						      	<div class="img" style="background-image: url(images/person_2.jpg);"></div>
						      	<div class="pl-3 email">
						      		<span>jacobthornton@email.com</span>
						      		<span>Added: 01/03/2020</span>
						      	</div>
						      </td>
						      <td>Jacobthornton</td>
						      <td class="status"><span class="waiting">Waiting for Resassignment</span></td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td class="d-flex align-items-center">
						      	<div class="img" style="background-image: url(images/person_3.jpg);"></div>
						      	<div class="pl-3 email">
						      		<span>larrybird@email.com</span>
						      		<span>Added: 01/03/2020</span>
						      	</div>
						      </td>
						      <td>Larry_bird</td>
						      <td class="status"><span class="active">Active</span></td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td class="d-flex align-items-center">
						      	<div class="img" style="background-image: url(images/person_4.jpg);"></div>
						      	<div class="pl-3 email">
						      		<span>johndoe@email.com</span>
						      		<span>Added: 01/03/2020</span>
						      	</div>
						      </td>
						      <td>Johndoe1990</td>
						      <td class="status"><span class="active">Active</span></td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>
						    <tr class="alert" role="alert">
						    	<td class="border-bottom-0">
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td class="d-flex align-items-center border-bottom-0">
						      	<div class="img" style="background-image: url(images/person_1.jpg);"></div>
						      	<div class="pl-3 email">
						      		<span>garybird@email.com</span>
						      		<span>Added: 01/03/2020</span>
						      	</div>
						      </td>
						      <td class="border-bottom-0">Garybird_2020</td>
						      <td class="status border-bottom-0"><span class="waiting">Waiting for Resassignment</span></td>
						      <td class="border-bottom-0">
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr> -->
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Tentang Saya</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			<?php
				$nama = "CHERRY CITRA CAHYANING";
				$nim = "17211107";
				$kelas = "TI - 17.3A.25  | P/S";
			
			?>
			<div class="container">
				<div class="row">
					<p>Nama&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <?php echo $nama; ?><br>
					   NIM&nbsp;&nbsp; &nbsp; &nbsp; :&nbsp;<?php echo $nim ?><br>
					   KELAS&nbsp;&nbsp; &nbsp; :&nbsp; <?php echo $kelas ?>

					</p>
					
					
				</div>
			</div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-primary">Save changes</button>
			</div>
		  </div>
		</div>
	  </div>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

