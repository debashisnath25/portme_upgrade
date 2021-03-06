
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width"/>
<title>Portme | Add Items</title>
<?php include("metalinks.php");?><!-- Jquery -->
</head>
<body id="theme-default" class="full_block">
<div id="container">
	<?php include("header.php");?>
	<?php include("navbar.php");?>
	<div id="content">
		<div class="grid_container">
			<?php include("item_sidebar.php");?>
			<div class="grid_10 full_block">
				<div class="widget_wrap">
					<div class="widget_top">
						<span class="h_icon list"></span>
						<h6>Add New Item</h6>
						<div id="widget_tab">
							<ul>
								<li><a href="#tab1" class="active_tab">Product</a></li>
								<li><a href="#tab2">Service</a></li>
							</ul>
						</div>
					</div>
					<div class="widget_content">
						<div id="tab1">
							<form method="post" class="form_container left_label">
							<div class="">
								<ul>
									<li>
									<fieldset>
										<legend>Product Information</legend>
										<ul>
											<li>
											<div class="form_grid_12 multiline">
												<label class="field_title">Product Details</label>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">Product Name</span>
													</div>
													<div class="form_grid_5">
														<input name="phone" type="text"/>
														<span class=" label_intro">Description</span>
													</div>
													<span class="clear"></span>
												</div>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">Quantity</span>
													</div>
													<div class="form_grid_5">
														<input name="phone" type="text"/>
														<span class=" label_intro">Unit</span>
													</div>
													<span class="clear"></span>
												</div>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">Tax</span>
													</div>
													<div class="form_grid_5">
														<input name="phone" type="text"/>
														<span class=" label_intro">HSN</span>
													</div>
													<span class="clear"></span>
												</div>
												
											</div>
											</li>
											<li>
											<div class="form_grid_12 multiline">
												<label class="field_title">Sales Info</label>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">Unit Price</span>
													</div>
													<div class="form_grid_5">
														<input name="phone" type="text"/>
														<span class=" label_intro">Currency</span>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											</li>
											<li>
											<div class="form_grid_12 multiline">
												<label class="field_title">Purchase Info</label>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">Unit Price</span>
													</div>
													<div class="form_grid_5">
														<input name="phone" type="text"/>
														<span class=" label_intro">Currency</span>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											</li>
										</ul>
									</fieldset>
									</li>
								</ul>
							</div>
							<ul>
								<li>
								<div class="form_grid_12 full_block">
									<div class="form_grid_12">
										<div class="widget_content" style="text-align:center;">
											<button type="submit" class="btn_small btn_blue"><span>Submit</span></button>
										<button type="reset" class="btn_small btn_blue"><span>Reset</span></button>
										</div>
									</div>
								</div>
								</li>
							</ul>
						</form>
						</div>
						<div id="tab2">
							<form method="post" class="form_container left_label">
							<div class="">
								<ul>
									<li>
									<fieldset>
										<legend>Service Information</legend>
										<ul>
											<li>
											<div class="form_grid_12 multiline">
												<label class="field_title">Service Details</label>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">Service Name</span>
													</div>
													<div class="form_grid_5">
														<input name="phone" type="text"/>
														<span class=" label_intro">Description</span>
													</div>
													<span class="clear"></span>
												</div>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="phone" type="text"/>
														<span class=" label_intro">Unit</span>
													</div>
													<div class="form_grid_5">
														<input name="mobile" type="text"/>
														<span class=" label_intro">Tax</span>
													</div>
													<span class="clear"></span>
												</div>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="phone" type="text"/>
														<span class=" label_intro">SAC</span>
													</div>
													<span class="clear"></span>
												</div>
												
											</div>
											</li>
											<li>
											<div class="form_grid_12 multiline">
												<label class="field_title">Sales Info</label>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">Unit Price</span>
													</div>
													<div class="form_grid_5">
														<input name="phone" type="text"/>
														<span class=" label_intro">Currency</span>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											</li>
											<li>
											<div class="form_grid_12 multiline">
												<label class="field_title">Purchase Info</label>
												<div class="form_input">
													<div class="form_grid_5 alpha">
														<input name="mobile" type="text"/>
														<span class=" label_intro">Unit Price</span>
													</div>
													<div class="form_grid_5">
														<input name="phone" type="text"/>
														<span class=" label_intro">Currency</span>
													</div>
													<span class="clear"></span>
												</div>
											</div>
											</li>
										</ul>
									</fieldset>
									</li>
								</ul>
							</div>
							<ul>
								<li>
								<div class="form_grid_12 full_block">
									<div class="form_grid_12">
										<div class="widget_content" style="text-align:center;">
											<button type="submit" class="btn_small btn_blue"><span>Submit</span></button>
										<button type="reset" class="btn_small btn_blue"><span>Reset</span></button>
										</div>
									</div>
								</div>
								</li>
							</ul>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<span class="clear"></span>
	</div>
</div>
<?php include("footer.php");?>
<script>
SyntaxHighlighter.all();
</script>
</body>
</html>