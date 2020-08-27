<!DOCTYPE html>
<html>
<head>
	<title></title>

<script language="javascript" type="text/javascript">
	function goBack() {
  		window.history.back();
	}

</script>

</head>
<body>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<svg class="glyph stroked male user ">
						<use xlink:href="#stroked-male-user"/>
					</svg> 
					<a href="#" style="text-decoration:none; font-color:white">Ticket</a>
				</div>
				<div class="panel-body">
						
					<div class="col-md-12">
						<form method="post" action="<?php echo base_url('C_Tiket/simpan');?>">
							<div class="panel panel-danger">
								<div class="panel-heading">
									Pelapor Masalah 
								</div>
								<div class="panel-body">
									<div class="col-md-6">
										<div class="form-group">
											<label>NIK</label>
											<input class="form-control" name="nik" placeholder="No. Induk Karyawan" >
				    					</div>
					    				<div class="form-group">
											<label>No Telpon</label>
											<input class="form-control" name="notlp" placeholder="No. Telpon" >
				    					</div>
					     			</div>

								    <div class="col-md-6">
					    				<div class="form-group">
											<label>Nama</label>
											<input class="form-control" name="nama" placeholder="Nama Karyawan">
					    				</div>

					    				<div class="form-group">
											<label>Departemen</label>
											<input class="form-control" name="departemen" placeholder="Departemen">
					    				</div>

					    			</div>
						
								</div>
							</div>

							<div class="panel panel-danger">
								<div class="panel-heading">
									Deskripsi Masalah 
								</div>
								<div class="panel-body">

									<div class="col-md-6">

										<div class="form-group">
											<label>Kategori Masalah</label>
											<input class="form-control" name="kategori" placeholder="Kategori">
											<!-- <?php //echo form_dropdown('id_kategori',$dd_kategori, $id_kategori, ' id="id_kategori" required class="form-control"');?> -->
					   				 	</div>

									    <div class="form-group">
											<label>Ugently / Kondisi</label>
											<input class="form-control" name="darurat" placeholder="1 Hari Selesai">
											<!-- <?php //echo form_dropdown('id_kondisi',$dd_kondisi, $id_kondisi, ' id="id_kondisi" required class="form-control"');?> -->
									    </div>
				       				</div>

				        			<div class="col-md-6">
					    				<div class="form-group">
											<label>Subject Masalah</label>
											<input class="form-control" name="problem_summary" placeholder="Subject" required>
					   	 				</div>

									    <div class="form-group">
											<label>Deskripsi Masalah</label>
											<textarea name="problem_detail" class="form-control" rows="10"></textarea>
									    </div>

				        			</div>
								</div>
							</div>

							<input type="submit" name="" value="Simpan" class="btn btn-primary">
							<button onclick="goBack()" ><a class="btn btn-default">Batal</a></button>
				     	</form>
					</div>

				</div>
			</div>
		</div>
	</div>
		

</body>
</html>