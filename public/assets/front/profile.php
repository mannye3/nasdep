<?php include('inc/user_header.php');  ?>
				<div class="col-lg-12 mb10">
					<div class="breadcrumb_content style2">
						<h2 class="breadcrumb_title float-left">Profile</h2>
						<p class="float-right">Ready to jump back in!</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="row">
						<div class="col-xl-8">
							<div class="my_dashboard_profile mb30-lg">
								<h4 class="mb30">Profile Details</h4>
								<div class="row">
									<div class="col-lg-12">
										<div class="wrap-custom-file mb50">
										    <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
										    <label for="image1">
										      	<span>Upload Photo</span>
												<small class="file_title">Maximum file size: 10 MB.</small>
										    </label>
											<a class="text-thm tdu photo_delete" href="#">Delete</a>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="my_profile_setting_input form-group mt100-500">
									    	<label for="formGroupExampleInput1">Your Name</label>
									    	<input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Ali Tuf...">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExampleInput8">Phone</label>
									    	<input type="text" class="form-control" id="formGroupExampleInput8">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExampleEmail">Email</label>
									    	<input type="email" class="form-control" id="formGroupExampleEmail">
										</div>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_textarea">
										    <label for="exampleFormControlTextarea1">Notes</label>
										    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExampleInput5">Facebook</label>
									    	<input type="text" class="form-control" id="formGroupExampleInput5">
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExampleInput6">Twitter</label>
									    	<input type="text" class="form-control" id="formGroupExampleInput6">
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExampleInput7">Google+</label>
									    	<input type="text" class="form-control" id="formGroupExampleInput7">
										</div>
									</div>
									<div class="col-lg-6 col-xl-6">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExampleInput9">Instagram</label>
									    	<input type="text" class="form-control" id="formGroupExampleInput9">
										</div>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_input">
											<button class="btn update_btn">Save Changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="my_dashboard_profile">
								<h4 class="mb20">Change password</h4>
								<div class="row">
									<div class="col-md-12">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExampleOldPass">Current Password</label>
									    	<input type="text" class="form-control" id="formGroupExampleOldPass">
										</div>
									</div>
									<div class="col-md-12">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExampleNewPass">New Password</label>
									    	<input type="text" class="form-control" id="formGroupExampleNewPass">
										</div>
									</div>
									<div class="col-md-12">
										<div class="my_profile_setting_input form-group">
									    	<label for="formGroupExampleConfPass">Confirm New Password</label>
									    	<input type="text" class="form-control" id="formGroupExampleConfPass">
										</div>
									</div>
									<div class="col-xl-12">
										<div class="my_profile_setting_input">
											<button class="btn update_btn style2">Change Password</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include('inc/footer.php');  ?>