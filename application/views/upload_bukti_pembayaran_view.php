<?php $this->load->view('header_view'); ?>

	<section>
		<div class="jumbotron" style="margin-top:-20px;">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<h1>CPD-MSITE FPMIPA UPI</h1>
						<p>Center for Professional Development on Mathematics, Science, and Information Technology Education</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default" id="forms3">
						<div class="panel-heading text-center">
							<h4>Form Upload Bukti Pembayaran</h4>
						</div>
						<div class="panel-body" style="padding-top:35px; min-height:400px;">
							<form class="bs-example form-horizontal">
								<div class="form-group">
									<label for="id_pendaftaran" class="col-lg-3 control-label">ID Pendaftaran</label>
									<div class="col-lg-4">
										<input type="text" class="form-control" name="id_pendaftaran" id="id_pendaftaran" placeholder="Contoh : 0000168">
									</div>
								</div>
								<div class="form-group">
									<label for="bukti_pembayaran" class="col-lg-3 control-label">Upload Bukti Pembayaran</label>
									<div class="col-lg-4">
										<input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran">
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-3 col-lg-9">
										<button type="submit" class="btn btn-success">KIRIM</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php $this->load->view('footer_view'); ?>