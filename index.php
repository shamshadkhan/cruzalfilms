<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<title>	Cruzach Film	</title>
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.uploadify.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/uploadify.css">
	<style type="text/css">
	body {
		font: 13px Arial, Helvetica, Sans-serif;
	}
	</style>
	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : 'uploadify.swf',
				'uploader' : 'uploadify.php'
			});
		});
	</script>
	<!--Adobe Edge Runtime-->
    <script type="text/javascript" charset="utf-8" src="index_edgePreload.js"></script>
    <style>
        .edgeLoad-EDGE-1527236 { visibility:hidden; }
        .bar {
		    height: 18px;
		    background: green;
		}
    </style>
	<!--Adobe Edge Runtime End-->

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#myform").validate({
			debug: false,
			groups: {
			  errorno: "full_name last_name phn_no company_name msg file"
			},
			rules: {
			
				'full_name':{required:true},
				'last_name':{required:true},
				'phn_no':{required:true},
				'company_name':{required:true},
				'msg':{required:true},
				'file':{required:true},
				check:"required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {		
				
				email: "Not a valid email.",
			},
			invalidHandler: function(form, validator) {
		      var errors = validator.numberOfInvalids();
		      
		      if (errors) {
		        var message ='All fields Required';
		        $("#results").html(message);
		        $("#results").show();
		      } else {
		        $("#results").hide();
		      }
		    },
    		showErrors: function(errorMap, errorList) {
    },
			submitHandler: function(form) {
				// do other stuff for a valid form
				$.post('form.php', $("#myform").serialize(), function(data) {
					$('#results').html(data);
				});
			}			
		});
	});
	</script>
	
	<style>
	label.error { 
		width: 250px;
		display: block;
		position: absolute;
		color: red;
		margin-left: 306px;
		margin-top: -24px;
	}
	#check label.error
	{

	}
	#file label.error
	{

	}
	</style>
	<script>
	$(document).ready(function(){				
		$('.menu').click(function(){
		var ids=$(this).attr('id');
			if(ids == 'about_li')
			{				
				$('#submission').hide();
				$('#contact').hide();
				$('#home').hide();
				$('#about').fadeIn('slow');
			}
			else if(ids == 'contact_li')
			{
				//$('.service').fadeOut('fast');
				$('#submission').hide();
				$('#about').hide();
				$('#home').hide();
				$('#contact').fadeIn('slow');
			}
			else if(ids == 'submission_li')
			{
				//$('.service').fadeOut('fast');
				$('#contact').hide();
				$('#about').hide();
				$('#home').hide();
				$('#submission').fadeIn('slow');
			}			
		});
		//$('#home').show();
	});
	</script>
</head>
<body style="margin:0;padding:0;">
	<div class="body-wrapper">
		<div class="clear-height"></div>
			<?php
				include('header.php');
			?>			
			<div id="container-section">
					<div id="home" class="service" style="display: block;">
						<div class="container">
							<div id="Stage" class="EDGE-1527236" style="margin:0px auto;">
						</div>		    
						<audio autoplay="yes">
						  <source src="music.mp3">
						</audio>
						</div>
					</div>
					<div id="about" class="service" style="display: none;">
					<div class="container">									
						<div class="left">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras arcu urna, bibendum a dui non, ultricies
								congue magna. Curabitur venenatis vulputate arcu, in congue enim viverra non. Sed porta pretium neque 
								at semper. Sed vel quam nec velit hendreit luctus. Nulla facilisi. Mauris congue dapibus luctus. Quisque ac
								placerat neque. Ut et dui blandit, egestas augue at, pempor purus. Suspendisse cursus in odio ac posuere.
							</p>
							<img src="images/demo-1.png" />
							<img src="images/demo-2.png" />
							<img src="images/demo-3.png" />
						</div>
						
						<div class="right">
							<img src="images/img-1.png" />
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras arcu urna, bibendum a dui non, ultricies
								congue magna. Curabitur venenatis vulputate arcu, in congue enim viverra non. Sed porta pretium neque 
								at semper. Sed vel quam nec velit hendreit luctus. Nulla facilisi. Mauris congue dapibus luctus. 
							</p>
						</div>
					</div>
				</div>
				<div id="submission" class="service" style="display: none;">
					<div class="container">				
						<div class="container-left">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras arcu urna, bibendum a dui non, ultricies
								congue magna. Curabitur venenatis vulputate arcu, in congue enim viverra non. Sed porta pretium neque 
								at semper. Sed vel quam nec velit hendreit luctus. Nulla facilisi. Mauris congue dapibus luctus. Quisque ac
								placerat neque. Ut et dui blandit, egestas augue at, pempor purus. Suspendisse cursus in odio ac posuere.
								Pellentesque malesuada mo-lestie lorem a ultricies. Sed cursus justo nec sapien portti-tor gravida. Class
								aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec luctus aliquet 
								mi et adipiscing. Curabitur tempor auctor leo quis rhoncus.
							</p>
						</div>	
						<div class="container-right">
							<form name="myform" id="myform" action="form.php" method="POST" enctype="multipart/form-data">  
								<!-- The Name form field -->
								<div class="input-div">
									<table class="table">
										<tr>
											<td class="td2"><input type="text" name="full_name" id="full_name" placeholder="First Name" /></td>
										</tr>
										
									</table>
								</div>
								<div class="input-div">
									<table class="table">
										<tr>
											<td class="td2"><input type="text" name="last_name" id="last_name" placeholder="Last Name" /></td>
										</tr>
										
									</table>
								</div>
								<div class="input-div">
									<table class="table">
										<tr>
											<td class="td2"><input type="email" name="email" id="email" placeholder="Email" /></td>
										</tr>
										
									</table>
								</div>
								<div class="input-div">
									<table class="table">
										<tr>
											<td class="td2"><input type="text" name="phn_no" id="phn" placeholder="Phone Number" /></td>
										</tr>
										
									</table>
								</div>
								<div class="input-div">
									<table class="table">
										<tr>
											<td class="td2"><input type="text" name="company_name" id="company_name" placeholder="Company Name" /></td>
										</tr>
										
									</table>
								</div>
								<div class="input-div">
									<table class="table">
										<tr>
											<td class="td2"><input type="text" name="msg" id="msg" placeholder="Message/ Comments" /></td>
										</tr>
										
									</table>
								</div>
								<div class="input-div">
									<label>									
										<div id="select-div" id="plupload-select_post-ad_image-select image" class="button secondary">
											Select File For Upload/ Submission
										</div>
										<div id="queue"></div>										
										<input type="file" class="non-js_post-ad_image-select" name="file_upload" id="file_upload" multiple="true" />
									</label>
								</div>
								<table class="table" style="margin-top:20px;">
									<tr>
										<td width="260px;"><input type="checkbox" id="check" name="check" value="yes"/>
											<label >I agree to the <a href="/newsite/terms-conditions/" target="_blank">terms and conditions</a></label></td>
									</tr>
								</table>
	   
							<!-- The Submit button -->
								<input type="submit" name="submit" value="Submit"> 
							</form>
						</div>
						<div id="results" style="float: right;margin-left: 525px;">					
							<label for="full_name" id="name_label"></label> 
							<label for="full_name" id="name_label"></label>
							<label for="last_name" id="name_label"></label>
							<label for="phn_no" id="name_label"></label>
							<label for="company_name" id="name_label"></label>
							<label for="msg" id="name_label"></label>
							<label for="file" id="name_label"></label>
							<label for="check" id="name_label"></label>
						</div>					
					</div>
				</div>
				<div id="contact" class="service" style="display: none;">
					<div class="container">
						<div class="left">
							<p class="contact-para">
								Cruzach Films, Inc. is currently accepting submissions for New Television and Film Projects.
							</p>
							<p>For reel and video submissions, please use the form provided on the <a href="/submission/">submissions</a> page.
							</p>
							<p>For any additional inquiries, please use the email addresses provided to the right and one of our representatives will get 
								back to you shortly.</p>
						</div>
						<div class="container-right">
							<table class="contact-table">
								<tbody><tr><td class="td2">info@cruzachfilms.com</td></tr>
									<tr><td class="td2">submissions@cruzachfilms.com</td></tr>
									<tr><td class="td2">press@cruzachfilms.com</td></tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<?php
				include('menu.php');
			?>
			
			<?php
				include('footer.php');
			?>
		</div>
	</body>
</html>