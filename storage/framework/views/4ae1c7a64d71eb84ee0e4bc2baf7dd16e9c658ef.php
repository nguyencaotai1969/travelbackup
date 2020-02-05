	<nav class="main-menu">
		<ul>
			<li>
				<a href="<?php echo e(route('index')); ?>">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-check-square-o nav_icon"></i>
				<span class="nav-text">
				Forms
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
							<a class="subnav-text" href="<?php echo e(route('inputs')); ?>">Inputs</a>
					</li>
					<li>
					<a class="subnav-text" href="<?php echo e(route('validation')); ?>">Form Validation</a>
					</li>
				</ul>
			</li>
			</ul>
	</nav>