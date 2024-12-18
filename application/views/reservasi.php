<style>
  /* Tambahkan border, padding, dan sedikit shadow agar input terlihat lebih jelas */
  .form-control {
    border: 2px solid #ced4da; /* Warna border lebih tegas */
    padding: 10px; /* Memberi ruang dalam input */
    border-radius: 5px; /* Membuat sudut lebih lembut */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Memberi sedikit bayangan */
  }

  /* Fokus pada input */
  .form-control:focus {
    border-color: #007bff; /* Warna biru saat fokus */
    box-shadow: 0 0 6px rgba(0, 123, 255, 0.25); /* Efek glow saat fokus */
  }

  /* Tambahkan margin pada label */
  .form-label {
    font-weight: bold; /* Teks label lebih tegas */
    margin-bottom: 5px;
  }

  /* Tambahkan margin pada seluruh form */
  .form-container {
    padding: 20px;
    background-color: #f9f9f9; /* Warna latar belakang form */
    border: 1px solid #ddd; /* Border di luar form */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan efek shadow pada form */
  }
</style>
<section class="ftco-section img" style="background-image: url(<?= base_url('assets/feliciano')?>/images/bg_3.jpg)"
		data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
					<div class="heading-section ftco-animate mb-5 text-center">
						<span class="subheading">Book a table</span>
						<h2 class="mb-4">Make Reservation</h2>
					</div>
					<form action="<?= base_url('Reservasi/simpan_reservasi')?>" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Name</label>
									<input type="text" class="form-control" name="nama" placeholder="Your Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Email</label>
									<input type="text" class="form-control" name="email" placeholder="Your Email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Phone</label>
									<input type="text" class="form-control" name="no_hp" placeholder="Phone">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Tanggal</label>
									<input type="text" class="form-control" id="book_time"  name="tanggal" placeholder="Time">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
									<label for="">Time</label>
									<input type="text" class="form-control" id="book_time"  name="waktu" placeholder="Time">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Person</label>
									<div class="select-wrap one-third">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="jumlah_orang" id="" class="form-control">
											<option value="">Person</option>
											<option value="">1</option>
											<option value="">2</option>
											<option value="">3</option>
											<option value="">4+</option>
										</select>
									</div>
								</div>
							</div>
                            <div class="modal-footer" >
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                                </div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>