
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Surat Dinas Pemerintah</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  	<script>
	  $( function() {
	    var availableTags = [
	      "Tata Naskah Kearsipan",
	      "Rumah Tangga Dan Perlengkapan",
	      "Bagian Pengadaan Barang Dan Jasa"
	    ];
	    $( "#tags" ).autocomplete({
	      source: availableTags
	    });
	  } );
	  </script>

</head>
<body>
<div class="container">

	<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    KIRIM
	  </div>
	  <div class="card-body">
	    <form method="post" action="">
			<div class="form-group mt-3">
			  <label for="tags">Unit Kerja</label>
			  <input id="tags">
			</div>
	    	
	    	<div class="form-group">
	    		<label>Jabatan</label>
	    		<input type="text" name="tjabatan" class="form-control">
	    	</div>
	    	<div class="form-group">
	    		<label>Pegawai</label>
	    		<textarea class="form-control" name="tpegawai"></textarea>
	    	</div>
	    	<div class="form-group">
	    		<label>Redaksi</label>
	    		<select class="form-control" name="tredaksi">
	    			<option value=""></option>
	    			<option value="ASLI">ASLI</option>
	    			<<option value="TEMBUSAN">TEMBUSAN</option>
	    		</select>
	    	</div>

	    	<button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
	    	
	    </form>
	  </div>
	</div>
	<!-- Akhir Card Form -->

	<!-- Awal Card Table -->
	<div class="card mt-3">
	  <div class="card-body mt-3">

	  	<table class="table table-bordered table-striped">
	  		<tr>
	  			<th>#</th>
	  			<th>Jabatan</th>
	  			<th>Pegawai</th>
	  			<th>Redaksi</th>
	  			<th>Hapus</th>
	  		</tr>
	  		<tr>
	  			<td></td>
	  			<td></td>
	  			<td></td>
	  			<td></td>
	  			<td>
	  				<a href="#" class="btn btn-danger"> Hapus </a>
	  			</td>
	  		</tr>
	  	</table>
	    
	  </div>
	</div>
	<!-- Akhir Card Table -->

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
