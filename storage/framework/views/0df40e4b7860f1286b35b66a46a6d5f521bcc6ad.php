	<nav class="main-menu">
		<ul>
			<li>
				<a href="<?php echo e(route('index')); ?>">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Admin
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-check-square-o nav_icon"></i>
				<span class="nav-text">
				Tours
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
							<a class="subnav-text" href="<?php echo e(route('admin_tour_add')); ?>">Add Tour</a>
					</li>
					<li>
					<a class="subnav-text" href="<?php echo e(route('listtour')); ?>">Manage Tour</a>
					</li>
				</ul>
			</li>
            <li class="has-subnav">
                <a href="javascript:;">
                    <i class="fa fa-check-square-o nav_icon"></i>
                    <span class="nav-text">
				News
				</span>
                    <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                        <a class="subnav-text" href="<?php echo e(route('admin_news_add')); ?>">Add News</a>
                    </li>
                    <li>
                        <a class="subnav-text" href="<?php echo e(route('listnews')); ?>">Manage News</a>
                    </li>
                </ul>
            </li>
            <li class="has-subnav">
                <a href="javascript:;">
                    <i class="fa fa-check-square-o nav_icon"></i>
                    <span class="nav-text">
				Booking
				</span>
                    <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                        <a class="subnav-text" href="<?php echo e(route('listbooking')); ?>">Manage Booking</a>
                    </li>
                </ul>
            </li>
            <li class="has-subnav">
                <a href="javascript:;">
                    <i class="fa fa-check-square-o nav_icon"></i>
                    <span class="nav-text">
				Contact
				</span>
                    <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
                </a>
                <ul>
                    <li>
                        <a class="subnav-text" href="<?php echo e(route('listcontact')); ?>">Manage Contact</a>
                    </li>
                </ul>
            </li>
		</ul>
	</nav>
