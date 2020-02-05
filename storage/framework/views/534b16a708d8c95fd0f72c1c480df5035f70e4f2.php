<!DOCTYPE html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="<?php echo e(asset('css/admin/bootstrap.css')); ?>">
<link href="<?php echo e(asset('css/admin/style.css')); ?>" rel='stylesheet' type='text/css'/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo|Charm|IBM+Plex+Serif|Lobster|Playfair+Display&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Baloo|Baloo+Paaji|Charm|IBM+Plex+Serif|Lobster|Pattaya|Playfair+Display&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('css/admin/font.css')); ?>" type="text/css"/>
<script src="<?php echo e(asset('js/admin/jquery2.0.3.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/modernizr.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/jquery.cookie.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/jquery.cookie.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/raphael-min.js')); ?>"></script>
<script src="<?php echo e(asset('js/admin/morris.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('css/admin/morris.css')); ?>">
<script src="<?php echo e(asset('js/admin/skycons.js')); ?>"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
<?php echo $__env->make('admin.header.header_left', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>	

	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
<?php echo $__env->make('admin.header.header_top', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- input-forms -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Input Forms</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>Basic Form :</h4>
								</div>
								<div class="form-body">
									<form action="#" method="post"> 
										<div class="form-group"> 
											<label for="exampleInputEmail1">Email address</label> 
											<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> 
										</div> 
										<div class="form-group"> 
											<label for="exampleInputPassword1">Password</label> 
											<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> 
										</div> 
										<div class="form-group"> 
											<label for="exampleInputFile">File input</label> 
											<input type="file" id="exampleInputFile"> 
											<p class="help-block">Example block-level help text here.</p> 
										</div> 
										<div class="checkbox"> 
											<label> <input type="checkbox"> Check me out </label> 
										</div> 
										<button type="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class=" form-grids form-grids-right">
								<div class="widget-shadow " data-example-id="basic-forms"> 
									<div class="form-title">
										<h4>Horizontal form :</h4>
									</div>
									<div class="form-body">
										<form class="form-horizontal" action="#" method="post"> 
											<div class="form-group"> 
												<label for="inputEmail3" class="col-sm-2 control-label">Email</label> 
												<div class="col-sm-9"> 
													<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email"> 
												</div> 
											</div> 
											<div class="form-group"> 
												<label for="inputPassword3" class="col-sm-2 control-label">Password</label> 
												<div class="col-sm-9"> 
													<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password"> 
												</div> 
											</div> 
											<div class="form-group"> 
												<div class="col-sm-offset-2 col-sm-10"> 
													<div class="checkbox"> 
														<label> <input type="checkbox"> Remember me </label> 
													</div> 
												</div> 
											</div> 
											<div class="col-sm-offset-2"> 
												<button type="submit" class="btn btn-default w3ls-button">Sign in</button> 
											</div> 
										</form> 
									</div>
								</div>
							</div>
						</div>	
					</div>
					
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="inline-form widget-shadow">
								<div class="form-title">
									<h4>Inline form Example 1 :</h4>
								</div>
								<div class="form-body">
									<div data-example-id="simple-form-inline"> <form class="form-inline" action="#" method="post"> <div class="form-group"> <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email"> </div> <div class="form-group"> <input type="password" name="password" class="form-control" id="exampleInputPassword3" placeholder="Password"> </div> <div class="checkbox"> <label> <input type="checkbox"> Remember me </label> </div> <button type="submit" class="btn btn-default w3ls-button">Sign in</button> </form> </div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-two widget-shadow">
								<div class="form-title">
									<h4>Inline form Example 2 :</h4>
								</div>
								<div class="form-body" data-example-id="simple-form-inline">
									<form class="form-inline" action="#" method="post"> <div class="form-group"> <label for="exampleInputName2">Name</label> <input type="text" name="your name" class="form-control" id="exampleInputName2" placeholder="Your name"> </div> <div class="form-group"> <label for="exampleInputEmail2">Email</label> <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="mail.abc@example.com"> </div> <button type="submit" class="btn btn-default w3ls-button">Send invitation</button> </form> 
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>General Form :</h4>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
									<form class="form-horizontal" action="#" method="post">
										<div class="form-group">
											<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" name="Default Input" id="focusedinput" placeholder="Default Input">
											</div>
											<div class="col-sm-2">
												<p class="help-block">Your help text!</p>
											</div>
										</div>
										<div class="form-group">
											<label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>
											<div class="col-sm-8">
												<input disabled="" type="text" name="Disabled Input" class="form-control1" id="disabledinput" placeholder="Disabled Input">
											</div>
										</div>
										<div class="form-group">
											<label for="inputPassword" class="col-sm-2 control-label">Password</label>
											<div class="col-sm-8">
												<input type="password" class="form-control1" id="inputPassword" placeholder="Password">
											</div>
										</div>
										<div class="form-group">
											<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
											<div class="col-sm-8">
												<div class="checkbox-inline1"><label><input type="checkbox"> Unchecked</label></div>
												<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Checked</label></div>
												<div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
												<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
											</div>
										</div>
										<div class="form-group">
											<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
											<div class="col-sm-8">
												<div class="checkbox-inline"><label><input type="checkbox"> Unchecked</label></div>
												<div class="checkbox-inline"><label><input type="checkbox" checked=""> Checked</label></div>
												<div class="checkbox-inline"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
												<div class="checkbox-inline"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
											<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
												<option>Lorem ipsum dolor sit amet.</option>
												<option>Dolore, ab unde modi est!</option>
												<option>Illum, fuga minus sit eaque.</option>
												<option>Consequatur ducimus maiores voluptatum minima.</option>
											</select></div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Multiple Select</label>
											<div class="col-sm-8">
												<select multiple="" class="form-control1">
													<option>Option 1</option>
													<option>Option 2</option>
													<option>Option 3</option>
													<option>Option 4</option>
													<option>Option 5</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
											<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>
										<div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Radio</label>
											<div class="col-sm-8">
												<div class="radio block"><label><input type="radio"> Unchecked</label></div>
												<div class="radio block"><label><input type="radio" checked=""> Checked</label></div>
												<div class="radio block"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
												<div class="radio block"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
											</div>
										</div>
										<div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Radio Inline</label>
											<div class="col-sm-8">
												<div class="radio-inline"><label><input type="radio"> Unchecked</label></div>
												<div class="radio-inline"><label><input type="radio" checked=""> Checked</label></div>
												<div class="radio-inline"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
												<div class="radio-inline"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
											</div>
										</div>
										<div class="form-group">
											<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Small Input">
											</div>
										</div>
										<div class="form-group">
											<label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1" id="mediuminput" placeholder="Medium Input">
											</div>
										</div>
										<div class="form-group mb-n">
											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>
											<div class="col-sm-8">
												<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Large Input">
											</div>
										</div>
									</form>
								</div>
						</div>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>General Form :</h4>
						</div>
						<div class="forms">
							<div class="form-three widget-shadow">
								<div data-example-id="form-validation-states-with-icons"> <form action="#" method="post"> <div class="form-group has-success has-feedback"> <label class="control-label" for="inputSuccess2">Input with success</label> <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status"> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess2Status" class="sr-only">(success)</span> </div> <div class="form-group has-warning has-feedback"> <label class="control-label" for="inputWarning2">Input with warning</label> <input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status"> <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span> <span id="inputWarning2Status" class="sr-only">(warning)</span> </div> <div class="form-group has-error has-feedback"> <label class="control-label" for="inputError2">Input with error</label> <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status"> <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> <span id="inputError2Status" class="sr-only">(error)</span> </div> <div class="form-group has-success has-feedback"> <label class="control-label" for="inputGroupSuccess1">Input group with success</label> <div class="input-group"> <span class="input-group-addon">@</span> <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status"> </div> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess1Status" class="sr-only">(success)</span> </div> </form> </div>
							</div>
						</div>
					</div>
					<div class="panel panel-widget forms-panel w3-last-form">
						<div class="forms">
							<div class="form-three widget-shadow">
								<div class=" panel-body-inputin">
									<form class="form-horizontal" action="#" method="post">
										<div class="form-group">
											<label class="col-md-2 control-label">Email Address</label>
											<div class="col-md-8">
												<div class="input-group">							
													<span class="input-group-addon">
														<i class="fa fa-envelope-o"></i>
													</span>
													<input type="text" class="form-control1" placeholder="Email Address">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Password</label>
											<div class="col-md-8">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-key"></i>
													</span>
													<input type="password" class="form-control1" id="exampleInputPassword1" placeholder="Password">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Email Address</label>
											<div class="col-md-8">
												<div class="input-group input-icon right">
													<span class="input-group-addon">
														<i class="fa fa-envelope-o"></i>
													</span>
													<input id="email" class="form-control1" type="text" placeholder="Email Address">
												</div>
											</div>
											<div class="col-sm-2">
												<p class="help-block">With tooltip</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Password</label>
											<div class="col-md-8">
												<div class="input-group input-icon right">
													<span class="input-group-addon">
														<i class="fa fa-key"></i>
													</span>
													<input type="password" class="form-control1" placeholder="Password">
												</div>
											</div>
											<div class="col-sm-2">
												<p class="help-block">With tooltip</p>
											</div>
										</div>
										<div class="form-group has-success">
											<label class="col-md-2 control-label">Input Addon Success</label>
											<div class="col-md-8">
												<div class="input-group input-icon right">
													<span class="input-group-addon">
														<i class="fa fa-envelope-o"></i>
													</span>
													<input id="email" class="form-control1" type="text" placeholder="Email Address">
												</div>
											</div>
											<div class="col-sm-2">
												<p class="help-block">Email is valid!</p>
											</div>
										</div>
										<div class="form-group has-error">
											<label class="col-md-2 control-label">Input Addon Error</label>
											<div class="col-md-8">
												<div class="input-group input-icon right">
													<span class="input-group-addon">
														<i class="fa fa-key"></i>
													</span>
													<input type="password" class="form-control1" placeholder="Password">
												</div>
											</div>
											<div class="col-sm-2">
												<p class="help-block">Error!</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Checkbox Addon</label>
											<div class="col-md-8">
												<div class="input-group">
													<div class="input-group-addon"><input type="checkbox"></div>
													<input type="text" class="form-control1">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Checkbox Addon</label>
											<div class="col-md-8">
												<div class="input-group">
													<input type="text" class="form-control1">
													<div class="input-group-addon"><input type="checkbox"></div>
													
												</div>
											</div>
											<div class="col-sm-2">
												<p class="help-block">Checkbox on right</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Radio Addon</label>
											<div class="col-md-8">
												<div class="input-group">
													<div class="input-group-addon"><input type="radio"></div>
													<input type="text" class="form-control1">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Radio Addon</label>
											<div class="col-md-8">
												<div class="input-group">
													<input type="text" class="form-control1">
													<div class="input-group-addon"><input type="radio"></div>
													
												</div>
											</div>
											<div class="col-sm-2">
												<p class="help-block">Radio on right</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Input Processing</label>
											<div class="col-md-8">
												<div class="input-icon right spinner">
													<i class="fa fa-fw fa-spin fa-spinner"></i>
													<input id="email" class="form-control1" type="text" placeholder="Processing...">
												</div>
											</div>
											<div class="col-sm-2">
												<p class="help-block">Processing right</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Static Paragraph</label>
											<div class="col-md-8">
												<p class="form-control1 m-n">email@example.com</p>
											</div>
										</div>
										<div class="form-group mb-n">
											<label class="col-md-2 control-label">Readonly</label>
											<div class="col-md-8">
												<input type="text" class="form-control1" placeholder="Readonly" readonly="">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //input-forms -->
			</div>
		</div>
		<!-- footer -->
		<!-- //footer -->
	</section>
	<script src="<?php echo e(asset('js/admin/bootstrap.js')); ?>"></script>
	<script src="<?php echo e(asset('js/admin/proton.js')); ?>"></script>
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
</body>
</html>
