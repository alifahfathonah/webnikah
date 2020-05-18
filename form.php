<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wizard-v4</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/stylesheet.css"/>
	<!-- bootstrap -->
	<link rel="stylesheet" href="vendor/bootrap/css/bootstrap.min.css">

	<!-- STYLE CUSTOM FILE INPUT DRAG & DROP -->
	<style>
		.files input {
			outline: 2px dashed #92b0b3;
			outline-offset: -10px;
			-webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
			transition: outline-offset .15s ease-in-out, background-color .15s linear;
			padding: 120px 0px 85px 35%;
			text-align: center !important;
			margin: 0;
			width: 100% !important;
		}
		.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
			-webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
			transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
		}
		.files{ position:relative}
		.files:after {  pointer-events: none;
			position: absolute;
			top: 60px;
			left: 0;
			width: 50px;
			right: 0;
			height: 56px;
			content: "";
			background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
			display: block;
			margin: 0 auto;
			background-size: 100%;
			background-repeat: no-repeat;
		}
		.color input{ background-color:#f1f1f1;}
		.files:before {
			position: absolute;
			bottom: 10px;
			left: 0;  pointer-events: none;
			width: 100%;
			right: 0;
			height: 57px;
			content: " or drag it here. ";
			display: block;
			margin: 0 auto;
			color: #2ea591;
			font-weight: 600;
			text-transform: capitalize;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="page-content" style="background-image: url('images/bg5.jpg')">
		<div class="wizard-v4-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<h1 class="heading">Form Registrasi Pernikahan</h1>
				</div>
		        <form class="form-register" id="form1" action="print.php" method="post" enctype="multipart/form-data">
		        	<div id="form-total">
						<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-n-1-square"></i></span>
							<!--<span class="step-text">Wedding Profile</span>-->
			            </h2>
			            <section>
			                <div class="inner">
								<div class="alert alert-warning" role="alert">
									<h3 class="text-center">Data Rencana Akad Nikah:</h3>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-6 mr-3">
										<label for="">Tanggal </label>
										<input type="date" class="form-control" name="tgl-nikah" >
									</div>
									<div class="col-md-3">
										<label for="">Waktu </label>
										<input type="time" class="form-control" name="pukul-nikah"  >
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-6 mr-3">
										<label for="">Maskawin </label>
										<input type="text" class="form-control" name="maskawin" >
									</div>
									<div class="col-md-3">
										<label for="dibayar">Dibayar</label>
										<select name="dibayar" id="dibayar" class="form-control" >
											<option value="" class="option" disabled selected>--Pilih--</option>
											<option value="tunai" class="option">Tunai</option>
											<option value="hutang" class="option">Hutang</option>
										</select>
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-9">
										<label class="" for="">Alamat Akad Nikah</label>
										<textarea placeholder="Alamat Lengkap" class="form-control" name="alamat-nikah" aria-label="With textarea" ></textarea>
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-n-2-square"></i></span>
<!--			            	<span class="step-text">Account</span>-->
			            </h2>
			            <section>
			                <div class="inner">
								<div class="alert alert-warning" role="alert">
									<h3 class="text-center">Data Mempelai Pria:</h3>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-5 mr-3">
										<label for="">Nama Lengkap</label>
										<input type="text" class="form-control" name="nama-pria" >
									</div>
									<div class="col-md-5">
										<label for="">Nama Ayah Kandung</label>
										<input type="text" class="form-control" name="bin-pria" >
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-8">
										<span class="text-center" id="basic-addon1">Tempat dan Tanggal Lahir</span>
									</div>
									<div class="col-md-4"></div>
									<div class="col-md-4">
										<input type="text" placeholder="Tempat" class="form-control" name="tempat-lahir-pria" >
									</div>
									<div class="col-md-4">
										<input type="date" class="form-control" name="tgl-lahir-pria" >
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-4 mr-3">	
										<div class="">
											<label for="">Warga Negara</label>
										</div>								
										<div class="">
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" value="Warga Negara Asing" class="custom-control-input" id="defaultInline1" name="warganegara-pria">
												<label class="custom-control-label" for="defaultInline1">WNA</label>
											</div>
	
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" value="Warga Negara Indonesia" class="custom-control-input" id="defaultInline2" name="warganegara-pria">
												<label class="custom-control-label" for="defaultInline2">WNI</label>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<label for="agama">Agama</label>
										<select name="" id="agama" class="form-control" name="agama-pria" >
											<option value="" class="option" disabled selected>--Pilih--</option>
											<option value="islam" class="option">Islam</option>
											<option value="kristen" class="option">Kristen</option>
											<option value="katolik" class="option">Katolik</option>
											<option value="hindu" class="option">Hindu</option>
											<option value="budha" class="option">Budha</option>
										</select>
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-5 mr-3">
										<label for="kerjaan">Pekerjaan</label>
										<input type="text" id="kerjaan" class="form-control" name="pekerjaan-pria" >
									</div>
									<div class="col-md-3">
										<label for="status">Status Perkawinan</label>
										<select name="status-pria" id="status" class="form-control" >
											<option value="" class="option" disabled selected>--Pilih--</option>
											<option value="jejaka" class="option">Jejaka</option>
											<option value="duda" class="option">Duda</option>
										</select>
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-9">
										<label class="" for="">Alamat Rumah</label>
										<textarea placeholder="Alamat Lengkap" class="form-control" name="alamat-pria"  aria-label="With textarea"></textarea>
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-3 mr-3">
										<label for="">Kode Pos</label>
										<input type="text" maxlength="5" class="form-control" name="kodepos-pria" >
									</div>
									<div class="col-md-5">
										<label for="">No. Telpon</label>
										<input type="text" class="form-control" name="telpon-pria" >
									</div>
								</div>
								<div class="form-row form-group col-lg-12">
									<div class="col-md-6">
										<div class="form-group files" >
											<label for="inputGroupFile01">Upload Scan KTP </label>
											<input type="file" id="inputGroupFile01" class="fcustom-file-input" name="ktp-pria">
										</div>
									</div>
								</div>

							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-n-3-square"></i></span>
<!--			            	<span class="step-text">Ownership</span>-->
			            </h2>
			            <section>
			                <div class="inner">
								<div class="alert alert-warning" role="alert">
									<h3 class="text-center">Data Mempelai Wanita:</h3>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-5 mr-3">
										<label for="">Nama Lengkap</label>
										<input type="text" class="form-control" name="nama-wanita" >
									</div>
									<div class="col-md-5">
										<label for="">Nama Ayah Kandung</label>
										<input type="text" class="form-control" name="bin-wanita" >
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-8">
										<span class="text-center" id="basic-addon1">Tempat dan Tanggal Lahir</span>
									</div>
									<div class="col-md-4"></div>
									<div class="col-md-4">
										<input type="text" placeholder="Tempat" class="form-control" name="tempat-lahir-wanita" >
									</div>
									<div class="col-md-4">
										<input type="date" class="form-control" name="tgl-lahir-wanita" >
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-4 mr-3">	
										<div class="">
											<label for="">Warga Negara</label>
										</div>								
										<div class="">
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" value="Warga Negara Asing" class="custom-control-input" id="defaultInline1" name="warganegara-wanita">
												<label class="custom-control-label" for="defaultInline1">WNA</label>
											</div>
	
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" value="Warga Negara Indonesia" class="custom-control-input" id="defaultInline2" name="warganegara-wanita">
												<label class="custom-control-label" for="defaultInline2">WNI</label>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<label for="mahar">Agama</label>
										<select name="" id="mahar" class="form-control" name="agama-wanita" >
											<option value="" class="option" disabled selected>--Pilih--</option>
											<option value="islam" class="option">Islam</option>
											<option value="kristen" class="option">Kristen</option>
											<option value="katolik" class="option">Katolik</option>
											<option value="hindu" class="option">Hindu</option>
											<option value="budha" class="option">Budha</option>
										</select>
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-5 mr-3">
										<label for="kerjaan">Pekerjaan</label>
										<input type="text" id="kerjaan" class="form-control" name="pekerjaan-wanita" >
									</div>
									<div class="col-md-3">
										<label for="status">Status Perkawinan</label>
										<select name="status-wanita" id="status" class="form-control" >
											<option value="" class="option" disabled selected>--Pilih--</option>
											<option value="jejaka" class="option">Perawan</option>
											<option value="duda" class="option">Janda</option>
										</select>
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-9">
										<label class="" for="">Alamat Rumah</label>
										<textarea placeholder="Alamat Lengkap" class="form-control" name="alamat-wanita"  aria-label="With textarea"></textarea>
									</div>
								</div>
								<div class="form-row form-group col-lg-12 mb-4">
									<div class="col-md-3 mr-3">
										<label for="">Kode Pos</label>
										<input type="text" maxlength="5" class="form-control" name="kodepos-wanita" >
									</div>
									<div class="col-md-5">
										<label for="">No. Telpon</label>
										<input type="text" class="form-control" name="telpon-wanita" >
									</div>
								</div>
								<div class="form-row form-group col-lg-12">
									<div class="col-md-6">
										<div class="form-group files" >
											<label for="inputGroupFile02">Upload Scan KTP </label>
											<input type="file" id="inputGroupFile02" class="fcustom-file-input" name="ktp-wanita">
										</div>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 4 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-n-4-square"></i></span>
<!--			            	<span class="step-text">Financing</span>-->
			            </h2>
			            <section>
			                <div class="inner">
								<div class="alert alert-warning" role="alert">
									<h3 class="text-center">Wali/Orang Tua Mempelai Pria:</h3>
								</div>
								<div class="col-lg-12 mb-3 p-2">
									<a class="btn btn-info mr-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
										Data Ayah
									</a>
									<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
										Data Ibu
									</button>
								</div>
								<div class="collapse" id="collapseExample">
									<div class="card mb-2">
										<div class="card-body">
											<div class="col-lg-12 mb-4">
												<span class="font-weight-bold input-group-text" id="basic-addon1">Data Ayah</span>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-6">
													<label for="">Nama Lengkap</label>
													<input type="text" class="form-control" name="nama-ayah-pria" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-8">
													<span class="text-center" id="basic-addon1">Tempat dan Tanggal Lahir</span>
												</div>
												<div class="col-md-4"></div>
												<div class="col-md-4">
													<input type="text" placeholder="Tempat" class="form-control" name="tempat-lahir-ayah-pria" >
												</div>
												<div class="col-md-4">
													<input type="date" class="form-control" name="tgl-lahir-ayah-pria" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-4 mr-3">	
													<div class="">
														<label for="">Warga Negara</label>
													</div>								
													<div class="">
														<div class="custom-control custom-radio custom-control-inline">
															<input type="radio" value="Warga Negara Asing" class="custom-control-input" id="defaultInline1" name="warganegara-ayah-pria">
															<label class="custom-control-label" for="defaultInline1">WNA</label>
														</div>
				
														<div class="custom-control custom-radio custom-control-inline">
															<input type="radio" value="Warga Negara Indonesia" class="custom-control-input" id="defaultInline2" name="warganegara-ayah-pria">
															<label class="custom-control-label" for="defaultInline2">WNI</label>
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<label for="mahar">Agama</label>
													<select name="" id="mahar" class="form-control" name="agama-ayah-pria" >
														<option value="" class="option" disabled selected>--Pilih--</option>
														<option value="islam" class="option">Islam</option>
														<option value="kristen" class="option">Kristen</option>
														<option value="katolik" class="option">Katolik</option>
														<option value="hindu" class="option">Hindu</option>
														<option value="budha" class="option">Budha</option>
													</select>
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-5 mr-3">
													<label for="kerjaan">Pekerjaan</label>
													<input type="text" id="kerjaan" class="form-control" name="pekerjaan-ayah-pria" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-8">
													<label class="" for="">Alamat Rumah</label>
													<textarea placeholder="Alamat Lengkap" class="form-control" name="alamat-ayah-pria"  aria-label="With textarea"></textarea>
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-3 mr-3">
													<label for="">Kode Pos</label>
													<input type="text" maxlength="5" class="form-control" name="kodepos-ayah-pria" >
												</div>
												<div class="col-md-5">
													<label for="">No. Telpon</label>
													<input type="text" class="form-control" name="telpon-ayah-pria" >
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="collapse" id="collapseExample2">
									<div class="card mb-2">
										<div class="card-body">
											<div class="col-lg-12 mb-4">
												<span class="font-weight-bold input-group-text" id="basic-addon1">Data Ibu</span>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-6">
													<label for="">Nama Lengkap</label>
													<input type="text" class="form-control" name="nama-ibu-pria" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-8">
													<span class="text-center" id="basic-addon1">Tempat dan Tanggal Lahir</span>
												</div>
												<div class="col-md-4"></div>
												<div class="col-md-4">
													<input type="text" placeholder="Tempat" class="form-control" name="tempat-lahir-ibu-pria" >
												</div>
												<div class="col-md-4">
													<input type="date" class="form-control" name="tgl-lahir-ibu-pria" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-4 mr-3">	
													<div class="">
														<label for="">Warga Negara</label>
													</div>								
													<div class="">
														<div class="custom-control custom-radio custom-control-inline">
															<input type="radio" class="custom-control-input" id="defaultInline1" value="Warga Negara Asing" name="warganegara-ibu-pria">
															<label class="custom-control-label" for="defaultInline1">WNA</label>
														</div>
				
														<div class="custom-control custom-radio custom-control-inline">
															<input type="radio" class="custom-control-input" id="defaultInline2" value="Warga Negara Indonesia" name="warganegara-ibu-pria">
															<label class="custom-control-label" for="defaultInline2">WNI</label>
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<label for="mahar">Agama</label>
													<select name="" id="mahar" class="form-control" name="agama-ibu-pria" >
														<option value="" class="option" disabled selected>--Pilih--</option>
														<option value="islam" class="option">Islam</option>
														<option value="kristen" class="option">Kristen</option>
														<option value="katolik" class="option">Katolik</option>
														<option value="hindu" class="option">Hindu</option>
														<option value="budha" class="option">Budha</option>
													</select>
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-5 mr-3">
													<label for="kerjaan">Pekerjaan</label>
													<input type="text" id="kerjaan" class="form-control" name="pekerjaan-ibu-pria" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-8">
													<label class="" for="">Alamat Rumah</label>
													<textarea placeholder="Alamat Lengkap" class="form-control" name="alamat-ibu-pria"  aria-label="With textarea"></textarea>
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-3 mr-3">
													<label for="">Kode Pos</label>
													<input type="text" maxlength="5" class="form-control" name="kodepos-ibu-pria" >
												</div>
												<div class="col-md-5">
													<label for="">No. Telpon</label>
													<input type="text" class="form-control" name="telpon-ibu-pria" >
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-row form-group col-lg-12 d-flex justify-content-center mt-4 p-1">
									<div class="col-md-6">
										<div class="form-group files text-center" >
											<label for="inputGroupFile03">Upload Scan KK </label>
											<input type="file" id="inputGroupFile03" class="fcustom-file-input" name="kk-pria">
										</div>
									</div>
								</div>

							</div>
			            </section>
						<!-- SECTION 5 -->
						<h2>
							<span class="step-icon"><i class="zmdi zmdi-n-5-square"></i></span>
<!--							<span class="step-text">Section 5</span>-->
						</h2>
						<section>
							<div class="inner">
								<div class="alert alert-warning" role="alert">
									<h3 class="text-center">Wali/Orang Tua Mempelai Wanita:</h3>
								</div>
								<div class="col-lg-12 mb-3 p-2">
									<a class="btn btn-info mr-3" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
										Data Ayah
									</a>
									<button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
										Data Ibu
									</button>
								</div>
								<div class="collapse" id="collapseExample3">
									<div class="card mb-2">
										<div class="card-body">
											<div class="col-lg-12 mb-4">
												<span class="font-weight-bold input-group-text" id="basic-addon1">Data Ayah</span>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-6">
													<label for="">Nama Lengkap</label>
													<input type="text" class="form-control" name="nama-ayah-wanita" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-8">
													<span class="text-center" id="basic-addon1">Tempat dan Tanggal Lahir</span>
												</div>
												<div class="col-md-4"></div>
												<div class="col-md-4">
													<input type="text" placeholder="Tempat" class="form-control" name="tempat-lahir-ayah-wanita" >
												</div>
												<div class="col-md-4">
													<input type="date" class="form-control" name="tgl-lahir-ayah-wanita" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-4 mr-3">	
													<div class="">
														<label for="">Warga Negara</label>
													</div>								
													<div class="">
														<div class="custom-control custom-radio custom-control-inline">
															<input type="radio" class="custom-control-input" id="defaultInline1" name="warganegara-ayah-wanita" value="Warga Negara Asing">
															<label class="custom-control-label" for="defaultInline1">WNA</label>
														</div>
				
														<div class="custom-control custom-radio custom-control-inline">
															<input type="radio" class="custom-control-input" id="defaultInline2" name="warganegara-ayah-wanita" value="Warga Negara Indonesia">
															<label class="custom-control-label" for="defaultInline2">WNI</label>
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<label for="agama">Agama</label>
													<select name="" id="agama" class="form-control" name="agama-ayah-wanita" >
														<option value="" class="option" disabled selected>--Pilih--</option>
														<option value="islam" class="option">Islam</option>
														<option value="kristen" class="option">Kristen</option>
														<option value="katolik" class="option">Katolik</option>
														<option value="hindu" class="option">Hindu</option>
														<option value="budha" class="option">Budha</option>
													</select>
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-5 mr-3">
													<label for="kerjaan">Pekerjaan</label>
													<input type="text" id="kerjaan" class="form-control" name="pekerjaan-ayah-wanita" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-8">
													<label class="" for="">Alamat Rumah</label>
													<textarea placeholder="Alamat Lengkap" class="form-control" name="alamat-ayah-wanita"  aria-label="With textarea"></textarea>
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-3 mr-3">
													<label for="">Kode Pos</label>
													<input type="text" maxlength="5" class="form-control" name="kodepos-ayah-wanita" >
												</div>
												<div class="col-md-5">
													<label for="">No. Telpon</label>
													<input type="text" class="form-control" name="telpon-ayah-wanita" >
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="collapse" id="collapseExample4">
									<div class="card mb-2">
										<div class="card-body">
											<div class="col-lg-12 mb-4">
												<span class="font-weight-bold input-group-text" id="basic-addon1">Data Ibu</span>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-6">
													<label for="">Nama Lengkap</label>
													<input type="text" class="form-control" name="nama-ibu-wanita" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-8">
													<span class="text-center" id="basic-addon1">Tempat dan Tanggal Lahir</span>
												</div>
												<div class="col-md-4"></div>
												<div class="col-md-4">
													<input type="text" placeholder="Tempat" class="form-control" name="tempat-lahir-ibu-wanita" >
												</div>
												<div class="col-md-4">
													<input type="date" class="form-control" name="tgl-lahir-ibu-wanita" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-4 mr-3">	
													<div class="">
														<label for="">Warga Negara</label>
													</div>								
													<div class="">
														<div class="custom-control custom-radio custom-control-inline">
															<input type="radio" class="custom-control-input" id="defaultInline1" name="warganegara-ibu-wanita" value="Warga Negara Asing">
															<label class="custom-control-label" for="defaultInline1">WNA</label>
														</div>
				
														<div class="custom-control custom-radio custom-control-inline">
															<input type="radio" class="custom-control-input" id="defaultInline2" name="warganegara-ibu-wanita" value="Warga Negara Indonesia">
															<label class="custom-control-label" for="defaultInline2">WNI</label>
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<label for="agama">Agama</label>
													<select name="" id="agama" class="form-control" name="agama-ibu-wanita" >
														<option value="" class="option" disabled selected>--Pilih--</option>
														<option value="islam" class="option">Islam</option>
														<option value="kristen" class="option">Kristen</option>
														<option value="katolik" class="option">Katolik</option>
														<option value="hindu" class="option">Hindu</option>
														<option value="budha" class="option">Budha</option>
													</select>
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-5 mr-3">
													<label for="kerjaan">Pekerjaan</label>
													<input type="text" id="kerjaan" class="form-control" name="pekerjaan-ibu-wanita" >
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-8">
													<label class="" for="">Alamat Rumah</label>
													<textarea placeholder="Alamat Lengkap" class="form-control" name="alamat-ibu-wanita"  aria-label="With textarea"></textarea>
												</div>
											</div>
											<div class="form-row form-group col-lg-12 mb-4">
												<div class="col-md-3 mr-3">
													<label for="">Kode Pos</label>
													<input type="text" maxlength="5" class="form-control" name="kodepos-ibu-wanita" >
												</div>
												<div class="col-md-5">
													<label for="">No. Telpon</label>
													<input type="text" class="form-control" name="telpon-ibu-wanita" >
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-row form-group col-lg-12 d-flex justify-content-center mt-4 p-1">
									<div class="col-md-6">
										<div class="form-group files text-center" >
											<label for="inputGroupFile04">Upload Scan KK </label>
											<input type="file" id="inputGroupFile04" class="fcustom-file-input" name="kk-wanita">
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- SECTION 6 -->
						<h2>
							<span class="step-icon"><i class="zmdi zmdi-n-6-square"></i></span>
<!--							<span class="step-text">Section 6</span>-->
						</h2>
						<section>
							<div class="inner">
								<h3 class="text-center">Form Persetujuan</h3>
								<div class="card mb-4">
									<div class="card-body p-2">
										Dengan ini, bahwa semua data yang telah diisikan pada formulir terlampir adalah benar dan tidak ada pemaksaan sama sekali.
										Apabila terdapat kesalahan maka pihak yang bersangkutan dalam pernikahan ini akan menanggung segala konsekuensinya, termasuk hukum agama dan hukum pidana.
									</div>
								</div>
								<div class="form-check">
									<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" name="agreement"  />
									<label for="agree-term" class="label-agree-term"><span></span>Saya menyetujui <a href="#" class="text-danger">seluruh peraturan dan pernyataan</a> tersebut</label>
								</div>
							</div>
							<div hidden  id="launch">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
									Launch demo modal
								</button>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											Yakin telah mengisikan data - data tersebut secara benar?
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
											<button type="submit" class="btn btn-primary">Benar</button>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- <button type="submit" class="btn btn-info btn-default text-right">Submit</button> -->
					</div>

		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootrap/js/bootstrap.min.js" ></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>