<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile alert alert-success">
			<div class="x_title">
				<h2>Isikan formulir dibawah untuk unggahan artikel anda</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<form class="form-label-left input_mask">

					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12 col-sm-12 form-group has-feedback" style="color: black">
								<textarea name="artikelTxt" id="artikelId" cols="30" rows="10" class="form-control" placeholder="Tulis artikelmu disini" require></textarea>
							</div>
							<div class="col-md-12 col-sm-12 form-group">
								<input name="judulTxt" type="text" class="form-control has-feedback-left" id="judulId" placeholder="Tulis judul artikel" require>
								<span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>

								<div class="row" style="margin-top: 20px">
									<div class="col-md-6 col-sm-6 form-group">
										<select class="form-control">
											<option>Pilih kategori</option>
											<option>Option one</option>
											<option>Option two</option>
											<option>Option three</option>
											<option>Option four</option>
										</select>
									</div>

									<div class="col-md-6 col-sm-6 form-group">
										<select class="form-control">
											<option>Pilih Sub Kategori</option>
											<option>Option one</option>
											<option>Option two</option>
											<option>Option three</option>
											<option>Option four</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 form-group">

								<!-- UPLOAD GAMBAR --><br><br>
								<div class="file-upload">
								  <button style="display:none;" class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
								  <h2 style="color:#495057;">Pilih thumbnail untuk artikel</h2>
								  <div class="image-upload-wrap">
								    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
								    <div class="drag-text">
								      <h3>Seret lalu drop thumbnail/gambar disini</h3>
								    </div>
								  </div>
								  <div class="file-upload-content">
								    <img class="file-upload-image" src="#" alt="your image" />
								    <div class="image-title-wrap">
								      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
								    </div>
								  </div>
								</div>
								<!-- END UPLOAD GAMBAR --><br><br>

							</div>
						</div>
					</div>

					<div class="col-md-12">
						<button type="button" class="btn btn-primary">Cancel</button>
						<button class="btn btn-primary" type="reset">Reset</button>
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
