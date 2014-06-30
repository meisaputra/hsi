<div class="container">

	<!-- HEADER/DETAIL FORM -->
	<div class="row">
		<div class="col-md-6">
			<div class="well">
                <h2>Laporan Harian Casting</h2>
                <p><strong>About: </strong> Report Form 001.CAS</p>
            </div>      
		</div>
		<div class="col-md-6">
			<div class="alert alert-info" role="alert">Original Form : NO.001.F.CAS.PROD.REVISI-1</div>
		</div>
	</div>
	<hr>
	
	<!-- MAIN CONTENT -->
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="Tanggal" class="col-xs-5 control-label">Tanggal</label>
						<div class="col-xs-4">
							<input type="text" class="form-control input-sm" id="Tanggal" placeholder="Tanggal">
						</div>
					</div>
					<div class="form-group">
						<label for="Nama Barang" class="col-xs-5 control-label">Nama Barang</label>
						<div class="col-xs-4">
							<input type="text" class="form-control input-sm" id="Nama Barang" placeholder="Nama Barang">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="KW 1" class="col-xs-5 control-label">Jml Lulus</label>
						<div class="col-xs-4">
							<input type="text" class="form-control input-sm" id="jl" placeholder="Lulus">
						</div>
					</div>
					<div class="form-group">
						<label for="KW 1" class="col-xs-5 control-label">Jml Gagal</label>
						<div class="col-xs-4">
							<input type="text" class="form-control input-sm" id="jg" placeholder="Gagal">
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<div id='jqxWidget'>
				        <div id='jqxTabs'>
							<ul class="nav nav-tabs table-condensed table-striped">
								<li class="active"><a href="#bgps">BGPS</a></li>
								<li ><a href="#cetak">Cetak</a></li>
								<li><a href="#mengambil_hasil">Mengambil Hasil</a></li>
								<li><a href="#dihaluskan">Dihaluskan</a></li>
								<li><a href="#menyusun">Menyusun</a></li>
							</ul>

							<div id="bgps">
								<table class="table table-hover table-condensed table-striped">
									<tr>
										<td>
											<div class="form-group">
												<label for="Retak Bawah" class="col-xs-3 control-label">Retak Bawah</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="retak_bawah" placeholder="Retak Bawah">
												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="form-group">
									<div class="col-xs-offset-3 col-xs-5">
										<button type="submit" class="btn btn-success btn-sm">Simpan</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<button type="submit" class="btn btn-success btn-sm">&nbsp;&nbsp;Batal&nbsp;&nbsp;</button>
									</div>
								</div>
							</div>

							<div id="mengambil_hasil">
								<table class="table table-hover table-condensed table-striped">
									<tr>
										<td>
											<div class="form-group">
												<label for="Retak Bawah" class="col-xs-4 control-label">Retak Bawah</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="retak_bawah" placeholder="Retak Bawah">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Urat" class="col-xs-4 control-label">Urat</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="urat" placeholder="Urat">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Retak Pinggir" class="col-xs-4 control-label">Jumlah Lulus</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="retak_pinggir" placeholder="Lulus">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Retak Kaki" class="col-xs-4 control-label">Retak Kaki</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="retak_kaki" placeholder="retak kaki">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Rusak Slip" class="col-xs-4 control-label">Rusak Slip</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="rusak_slip" placeholder="Rusak Slip">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Rusak Cetak" class="col-xs-4 control-label">Rusak Cetak</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="rusak_cetak" placeholder="Rusak Cetak">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Mata Kayu" class="col-xs-4 control-label">Mata Kayu</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="mata_kayu" placeholder="Mata Kayu">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Lubang Jarum" class="col-xs-4 control-label">Lubang Jarum</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="lubang_jarum" placeholder="Lubang Jarum">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Rusak Ketebalan" class="col-xs-4 control-label">Rusak Ketebalan</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="rusak_ketebalan" placeholder="Rusak Ketebalan">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Sambungan Tidak Sama" class="col-xs-4 control-label">Sambungan Tidak Sama</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="gypsum_mould" placeholder="Sambungan Tidak Sama">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Sambungan Tidak Sama" class="col-xs-4 control-label">Sambungan Tidak Sama</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="sambungan" placeholder="Sambungan Tidak Sama">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Aliran Slip" class="col-xs-4 control-label">Aliran Slip</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="aliran_slip" placeholder="Aliran Slip">
												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="form-group">
									<div class="col-xs-offset-4 col-xs-6">
										<button type="submit" class="btn btn-success btn-sm">Simpan</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<button type="submit" class="btn btn-success btn-sm">&nbsp;&nbsp;Batal&nbsp;&nbsp;</button>
									</div>
								</div>
							</div>

							<div id="dihaluskan">
								<table class="table table-hover table-condensed table-striped">
									<tr>
										<td>
											<div class="form-group">
												<label for="Aliran Slip" class="col-xs-3 control-label">Aliran Slip</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="aliran_slip" placeholder="Aliran Slip">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Rusak Pinggir" class="col-xs-3 control-label">Rusak Pinggir</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="rusak_pinggir" placeholder="Rusak Pinggir">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Rusak Kaki" class="col-xs-3 control-label">Rusak Kaki</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="rusak_kaki" placeholder="Rusak Kaki">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Cekung Bawah" class="col-xs-3 control-label">Cekung Bawah</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="cekung_bawah" placeholder="Cekung Bawah">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Berubah Bentuk" class="col-xs-3 control-label">Berubah Bentuk</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="berubah_bentuk" placeholder="Berubah Bentuk">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Kelalaian" class="col-xs-3 control-label">Kelalaian</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="kelalaian" placeholder="Kelalaian">
												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="form-group">
									<div class="col-xs-offset-3 col-xs-5">
										<button type="submit" class="btn btn-success btn-sm">Simpan</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<button type="submit" class="btn btn-success btn-sm">&nbsp;&nbsp;Batal&nbsp;&nbsp;</button>
									</div>
								</div>
							</div>

							<div id="menyusun">
								<table class="table table-hover table-condensed table-striped">
									<tr>
										<td>
											<div class="form-group">
												<label for="Rusak Gagang" class="col-xs-3 control-label">Rusak Gagang</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="rusak_gagang" placeholder="Rusak Gagang">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Berubah Gagang" class="col-xs-3 control-label">Berubah Gagang</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="berubah_gagang" placeholder="Berubah Gagang">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Sumbing Gagang" class="col-xs-3 control-label">Sumbing Gagang</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="sumbing_gagang" placeholder="Sumbing Gagang">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Sumbing Tempel" class="col-xs-3 control-label">Sumbing Tempel</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="sumbing_tempel" placeholder="Sumbing Tempel">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Rusak Dipotong" class="col-xs-3 control-label">Rusak Dipotong</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="rusak_dipotong" placeholder="Rusak Dipotong">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Kelalaian Finishing" class="col-xs-3 control-label">Kelalaian Finishing</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="kelalaian" placeholder="Kelalaian Finishing">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Lubang Jarum Tempel" class="col-xs-3 control-label">Lubang Jarum Tempel</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="ljt" placeholder="Lubang Jarum Tempel">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Rusak Tersimpan" class="col-xs-3 control-label">Rusak Tersimpan</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="rusak_tersimpan" placeholder="Rusak Tersimpan">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Rusak Lubang" class="col-xs-3 control-label">Rusak Lubang</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="rusak_lubang" placeholder="Rusak Lubang">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Dipelas Seputar" class="col-xs-3 control-label">Dipelas Seputar</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="dipelas" placeholder="Dipelas Seputar">
												</div>
											</div>
										</td>
									</tr>
								</table>
								<div class="form-group">
									<div class="col-xs-offset-3 col-xs-5">
										<button type="submit" class="btn btn-success btn-sm">Simpan</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<button type="submit" class="btn btn-success btn-sm">&nbsp;&nbsp;Batal&nbsp;&nbsp;</button>
									</div>
								</div>
							</div>

							<div>
								<table class="table table-hover table-condensed table-striped">
									<tr>
										<td>
											<div class="form-group">
												<label for="Retak Pinggir" class="col-xs-3 control-label">Retak Pinggir</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="retak_pinggir" placeholder="Retak Pinggir">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Pecah" class="col-xs-3 control-label">Pecah</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="pecah" placeholder="Pecah">
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-group">
												<label for="Pecah" class="col-xs-3 control-label">Pecah</label>
												<div class="col-xs-3">
													<input type="text" class="form-control input-sm" id="pecah" placeholder="Pecah">
												</div>
											</div>
										</td>
									</tr>

								</table>
								<div class="form-group">
									<div class="col-xs-offset-3 col-xs-5">
										<button type="submit" class="btn btn-success btn-sm">Simpan</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<button type="submit" class="btn btn-success btn-sm">&nbsp;&nbsp;Batal&nbsp;&nbsp;</button>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>


</div>




<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!-- jQWidgets core JavaScript -->
<script src="<?php echo base_url('assets/vendor/jqwidgets/jqxcore.js') ?>"></script>
<!-- ================================================== -->
<!-- Add addition JavaScript files here -->
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxcheckbox.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jqwidgets/jqxtabs.js'); ?>"></script>
<script type="text/javascript">
        $(document).ready(function () {
            // Create jqxTabs.
            $('#jqxTabs').jqxTabs({ width: '100%', height: 500, position: 'top'});
            $('#settings div').css('margin-top', '10px');
            $('#animation').jqxCheckBox({ theme: theme });
            $('#contentAnimation').jqxCheckBox({ theme: theme });

            $('#animation').on('change', function (event) {
                var checked = event.args.checked;
                $('#jqxTabs').jqxTabs({ selectionTracker: checked });
            });
           
            $('#contentAnimation').on('change', function (event) {
                var checked = event.args.checked;
                if (checked) {
                    $('#jqxTabs').jqxTabs({ animationType: 'fade' });
                }
                else {
                    $('#jqxTabs').jqxTabs({ animationType: 'none' });
                }
            });
        });
    </script>                                		