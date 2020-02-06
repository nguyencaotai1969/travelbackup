<nav class="main-menu" style="z-index: 999">

    <ul>
        <li>
            <a href="{{route('index')}}">
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
                    <a class="subnav-text" href="{{route('admin_tour_add')}}">Add Tour</a>
                </li>
                <li>
                    <a class="subnav-text" href="{{route('listtour')}}">Manage Tour</a>
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
                    <a class="subnav-text" href="{{route('admin_news_add')}}">Add News</a>
                </li>
                <li>
                    <a class="subnav-text" href="{{route('admin_news_add')}}">Manage highlight</a>
                </li>
                <li>
                    <a class="subnav-text" href="{{route('listnews')}}">Manage News</a>
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
                    <a class="subnav-text" href="{{route('listbooking')}}">Manage Booking</a>
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
                    <a class="subnav-text" href="{{route('listcontact')}}">Manage Contact</a>
                </li>
            </ul>
        </li>
        <li class="has-subnav">
            <a href="javascript:;">
                <i class="fa fa-check-square-o nav_icon"></i>
                <span class="nav-text">
			        Destination
				</span>
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
            </a>
            <ul>
                <li>
                    <a class="subnav-text" href="{{route('Add_destination')}}">Add Destination</a>
                </li>
                <li>
                    <a class="subnav-text" href="{{route('listdestination')}}">Manage Destination</a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
