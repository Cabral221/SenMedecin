<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
	<div class="main-sidebar-header active">
			<a class="desktop-logo logo-light active" href="{{ route('index') }}">
				<img src="{{ asset('assets/img/brand/logo-axxunjurel-horizontal.svg') }}" class="main-logo logo-color1" alt="logo">
				{{-- <img src="{{ asset('assets/img/brand/logo2.png') }}" class="main-logo logo-color2" alt="logo"> --}}
				{{-- <img src="{{ asset('assets/img/brand/logo3.png') }}" class="main-logo logo-color3" alt="logo"> --}}
				{{-- <img src="{{ asset('assets/img/brand/logo4.png') }}" class="main-logo logo-color4" alt="logo"> --}}
				{{-- <img src="{{ asset('assets/img/brand/logo5.png') }}" class="main-logo logo-color5" alt="logo"> --}}
				{{-- <img src="{{ asset('assets/img/brand/logo6.png') }}" class="main-logo logo-color6" alt="logo"> --}}
			</a>
			<a class="desktop-logo logo-dark active" href="{{ route('patient.home') }}"><img src="{{ asset('assets/img/brand/logo-axxunjurel-horizontal.svg') }}"
					class="main-logo dark-theme" alt="logo"></a>
			<div class="app-sidebar__toggle" data-toggle="sidebar">
				<a class="open-toggle" href="#"><i class="header-icon fe fe-chevron-left"></i></a>
				<a class="close-toggle" href="#"><i class="header-icon fe fe-chevron-right"></i></a>
			</div>
	</div>
	<div class="main-sidemenu sidebar-scroll">
			<ul class="side-menu">
				<li>
					<h3>Main</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="{{ route('patient.home') }}">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
							width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
							<path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" />
						</svg>
						<span class="side-menu__label">Tableau de board</span>
					</a>
				</li>
				<li>
					<h3>Mon Compte</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="{{ route('patient.account') }}">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 481.613 481.613" height="24" width="24">
							<path d="M12.331 253.313a12.04 12.04 0 0 0 12-12v-.5a12.04 12.04 0 0 0-12-12 12.04 12.04 0 0 0-12 12v.6c0 6.6 5.3 11.9 12 11.9zm455.6-47.9c-6.6.7-11.4 6.6-10.7 13.2.6 6.2 5.8 10.8 11.9 10.8.4 0 .8 0 1.2-.1 6.6-.7 11.4-6.6 10.7-13.1-.6-6.6-6.4-11.4-13.1-10.8zm-453.4 1.1c.8.2 1.6.3 2.4.3 5.6 0 10.6-3.9 11.8-9.6 1.3-6.5-2.9-12.8-9.4-14.2-6.5-1.3-12.8 2.9-14.2 9.4-1.3 6.4 2.9 12.7 9.4 14.1zm194.3 248.9c-6.5-1-12.7 3.5-13.6 10.1-1 6.6 3.5 12.7 10.1 13.6.6.1 1.2.1 1.8.1 5.8 0 11-4.3 11.8-10.2.9-6.5-3.6-12.6-10.1-13.6zm-47.2-417.4c1.4 0 2.8-.3 4.2-.8 6.2-2.3 9.4-9.2 7.1-15.4s-9.2-9.4-15.4-7.1-9.4 9.2-7.1 15.4c1.8 4.9 6.4 7.9 11.2 7.9zm134-7.4c1 .3 2 .4 3 .4 5.3 0 10.2-3.6 11.6-9 1.7-6.4-2.2-13-8.6-14.6-6.4-1.7-13 2.2-14.6 8.6-1.7 6.4 2.2 12.9 8.6 14.6zm-168.8 394.6c-5.6-3.5-13-1.8-16.5 3.9-3.5 5.6-1.8 13 3.8 16.5 2 1.2 4.2 1.8 6.3 1.8 4 0 7.9-2 10.2-5.7 3.6-5.6 1.8-13-3.8-16.5zm-6.7-366.8c2.2 0 4.4-.6 6.3-1.8 5.6-3.5 7.3-10.9 3.8-16.5s-10.9-7.3-16.5-3.8-7.3 10.9-3.8 16.5a12.1 12.1 0 0 0 10.2 5.6zm-73.4 303.8c-5.4 3.8-6.8 11.3-2.9 16.7 2.3 3.3 6.1 5.1 9.8 5.1a11.78 11.78 0 0 0 6.9-2.2c5.4-3.8 6.8-11.3 2.9-16.7a12.01 12.01 0 0 0-16.7-2.9zm205.5-338.2h.6c6.4 0 11.7-5 12-11.4.3-6.6-4.8-12.3-11.4-12.6s-12.3 4.8-12.6 11.4c-.3 6.7 4.8 12.3 11.4 12.6zm170.9 356.6c-5-4.3-12.6-3.7-16.9 1.3s-3.7 12.6 1.3 16.9c2.3 1.9 5 2.9 7.8 2.9 3.4 0 6.7-1.4 9.1-4.2 4.3-5 3.7-12.5-1.3-16.9zm-8.1-277.1c2.8 0 5.6-1 7.8-2.9 5-4.3 5.6-11.9 1.3-16.9s-11.9-5.6-16.9-1.3-5.6 11.9-1.3 16.9c2.4 2.7 5.7 4.2 9.1 4.2zm-162.3 354.1c-6.6.3-11.7 6-11.4 12.6.3 6.4 5.6 11.4 12 11.4h.6c6.6-.3 11.7-6 11.4-12.6s-6-11.8-12.6-11.4zm217.7-205.8c-6.6-.7-12.5 4.2-13.1 10.8-.7 6.6 4.2 12.5 10.8 13.1.4 0 .8.1 1.2.1 6.1 0 11.3-4.6 11.9-10.8.6-6.7-4.2-12.6-10.8-13.2zm-395.3 147.1c-4.6 4.8-4.4 12.4.5 17 2.3 2.2 5.3 3.3 8.3 3.3 3.2 0 6.3-1.3 8.7-3.7 4.6-4.8 4.3-12.4-.5-17-4.8-4.7-12.5-4.4-17 .4zm299.3 13.4c-5.2 4.1-6.2 11.6-2.1 16.8 2.4 3 5.9 4.6 9.5 4.6 2.6 0 5.2-.8 7.3-2.5 5.2-4.1 6.2-11.6 2.1-16.9-4-5.2-11.6-6.1-16.8-2zM336.831 45.813c1.7.8 3.5 1.2 5.3 1.2 4.4 0 8.7-2.5 10.8-6.7 2.9-6 .5-13.1-5.5-16a12.03 12.03 0 0 0-16.1 5.5c-3 5.9-.5 13.1 5.5 16zm-130.3-19.4c.6 0 1.2 0 1.8-.1 6.5-1 11-7.1 10-13.7s-7.1-11-13.7-10.1c-6.5 1-11 7.1-10 13.7.9 5.9 6.1 10.2 11.9 10.2zm241.9 149.2a11.97 11.97 0 0 0 11.4 8.4c1.2 0 2.4-.2 3.6-.6 6.3-2 9.8-8.7 7.8-15s-8.7-9.8-15-7.8c-6.3 1.9-9.8 8.7-7.8 15zm-6.9-34.2a11.94 11.94 0 0 0 5.8-1.5c5.8-3.2 7.9-10.5 4.6-16.3-3.2-5.8-10.5-7.9-16.3-4.6-5.8 3.2-7.9 10.5-4.6 16.3 2.2 3.9 6.3 6.1 10.5 6.1zm-358.1-54.6c3 0 6-1.1 8.3-3.3 4.8-4.6 5-12.2.4-17s-12.2-5-17-.4-5 12.2-.4 17c2.4 2.5 5.6 3.7 8.7 3.7zm212.7 364.1c-6.4 1.7-10.3 8.2-8.6 14.6 1.4 5.4 6.3 9 11.6 9 1 0 2-.1 3-.4 6.4-1.7 10.3-8.2 8.6-14.6s-8.2-10.3-14.6-8.6zm167.5-153.2c-6.3-2-13.1 1.6-15 7.9-2 6.3 1.6 13.1 7.9 15 1.2.4 2.4.5 3.6.5 5.1 0 9.9-3.3 11.5-8.4 1.8-6.3-1.7-13.1-8-15zm-16 43.5a12 12 0 0 0-16.3 4.7 12 12 0 0 0 4.7 16.3 11.94 11.94 0 0 0 5.8 1.5c4.2 0 8.3-2.2 10.5-6.2a12 12 0 0 0-4.7-16.3zm-110.4 94.4c-6 2.9-8.4 10.1-5.5 16.1 2.1 4.2 6.4 6.7 10.8 6.7 1.8 0 3.6-.4 5.3-1.2 6-2.9 8.4-10.1 5.5-16.1-3-6-10.2-8.5-16.1-5.5zm-170.9 8.9c-6.2-2.3-13.1.9-15.4 7.1s.9 13.1 7.1 15.4c1.4.5 2.8.8 4.1.8 4.9 0 9.5-3 11.3-7.9 2.3-6.2-.9-13.1-7.1-15.4zm-119.9-324.7a12.42 12.42 0 0 0 6.9 2.1c3.8 0 7.5-1.8 9.8-5.1 3.8-5.4 2.5-12.9-3-16.7-5.4-3.8-12.9-2.5-16.7 3s-2.4 12.9 3 16.7zm-20.4 41.7c1.5.7 3.1 1 4.7 1 4.7 0 9.1-2.7 11-7.3 2.6-6.1-.2-13.2-6.3-15.8s-13.1.2-15.8 6.3c-2.5 6.1.3 13.2 6.4 15.8zm2.8 123.5c-1.4-6.5-7.7-10.7-14.2-9.3-6.5 1.3-10.7 7.7-9.3 14.2 1.2 5.7 6.2 9.6 11.7 9.6.8 0 1.6-.1 2.4-.3 6.5-1.4 10.7-7.7 9.4-14.2zm13.2 41.8c-2.6-6.1-9.7-8.9-15.8-6.3s-8.9 9.7-6.3 15.8c2 4.5 6.4 7.2 11 7.2 1.6 0 3.2-.3 4.8-1 6.1-2.5 8.9-9.6 6.3-15.7zm332-257.7a11.95 11.95 0 0 0 7.3 2.5c3.6 0 7.1-1.6 9.5-4.7 4-5.2 3.1-12.8-2.1-16.8-5.2-4.1-12.8-3.1-16.8 2.1-4.1 5.2-3.1 12.8 2.1 16.9zm-132.7 152.5c32.2 0 58.5-26.2 58.5-58.5s-26.2-58.5-58.5-58.5-58.5 26.2-58.5 58.5 26.3 58.5 58.5 58.5zm0-93c19 0 34.5 15.5 34.5 34.5s-15.5 34.5-34.5 34.5-34.5-15.5-34.5-34.5 15.5-34.5 34.5-34.5zm86.2 153.1c-20-27-49-40.7-86.2-40.7s-66.2 13.7-86.2 40.7c-15 20.3-24.6 47.9-28.5 81.9a12.09 12.09 0 0 0 10.6 13.3c6.6.8 12.5-4 13.3-10.6 7.6-67.2 38.2-101.3 90.8-101.3s83.2 34.1 90.8 101.3c.7 6.1 5.9 10.7 11.9 10.7.4 0 .9 0 1.4-.1 6.6-.7 11.3-6.7 10.6-13.3-3.9-34-13.5-61.6-28.5-81.9z"/>
						</svg>
						<span class="side-menu__label">Profil</span>
					</a>
				</li>



				<li>
					<h3>Main</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="index.html">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
							width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z" />
							<path d="M7 10.19V18h2v-6h6v6h2v-7.81l-5-4.5z" opacity=".3" />
						</svg>
						<span class="side-menu__label">Tableau de board</span>
					</a>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
							width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3" />
							<path
								d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z" />
						</svg>
						<span class="side-menu__label">Layouts</span><i class="angle fe fe-chevron-right"></i>
					</a>
					<ul class="slide-menu">
						<li><a class="slide-item" href="vertical.html">Vertical</a></li>
						<li><a class="slide-item" href="horizontal.html">Horizontal</a></li>
					</ul>
				</li>
				<li>
					<h3>Widgets &amp; Maps</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="widgets.html">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
							width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M5 5h4v4H5zm10 10h4v4h-4zM5 15h4v4H5zM16.66 4.52l-2.83 2.82 2.83 2.83 2.83-2.83z"
								opacity=".3" />
							<path
								d="M16.66 1.69L11 7.34 16.66 13l5.66-5.66-5.66-5.65zm-2.83 5.65l2.83-2.83 2.83 2.83-2.83 2.83-2.83-2.83zM3 3v8h8V3H3zm6 6H5V5h4v4zM3 21h8v-8H3v8zm2-6h4v4H5v-4zm8-2v8h8v-8h-8zm6 6h-4v-4h4v4z" />
						</svg>
						<span class="side-menu__label">Widgets</span>
					</a>
				</li>
				<li>
					<h3>Mail</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
							width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3" />
							<path
								d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z" />
						</svg>
						<span class="side-menu__label">Mail</span><i class="angle fe fe-chevron-right"></i>
					</a>
					<ul class="slide-menu">
						<li><a class="slide-item" href="mail-inbox.html">Mail Inbox</a></li>
						<li><a class="slide-item" href="mail-compose.html">Mail Compose</a></li>
						<li><a class="slide-item" href="mail-read.html">Mail Read</a></li>
						<li><a class="slide-item" href="mail-settings.html">Mail Settings</a></li>
						<li><a class="slide-item" href="chat.html">Chat</a></li>
					</ul>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
							width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M12 3.19L5 6.3V12h7v8.93c3.72-1.15 6.47-4.82 7-8.94h-7v-8.8z" opacity=".3" />
							<path
								d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 19.93V12H5V6.3l7-3.11v8.8h7c-.53 4.12-3.28 7.79-7 8.94z" />
						</svg>
						<span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i>
					</a>
					<ul class="slide-menu">
						<li><a class="slide-item" href="cards.html">Cards</a></li>
						<li><a class="slide-item" href="darggablecards">Draggable-cards</a></li>
						<li><a class="slide-item" href="rangeslider.html">Range-slider</a></li>
						<li><a class="slide-item" href="calendar.html">Calendar</a></li>
						<li><a class="slide-item" href="contacts.html">Contacts</a></li>
						<li><a class="slide-item" href="image-compare.html">Image-compare</a></li>
						<li><a class="slide-item" href="notification.html">Notification</a></li>
						<li><a class="slide-item" href="widget-notification.html">Widget-notification</a></li>
						<li><a class="slide-item" href="treeview.html">Treeview</a></li>
					</ul>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
							width="24">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path d="M17 7H7V4H5v16h14V4h-2z" opacity=".3" />
							<path
								d="M19 2h-4.18C14.4.84 13.3 0 12 0S9.6.84 9.18 2H5c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm7 18H5V4h2v3h10V4h2v16z" />
						</svg>
						<span class="side-menu__label">Components</span><i class="angle fe fe-chevron-right"></i>
					</a>
					<ul class="slide-menu">
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Maps</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="map-leaflet.html">Leaflet Maps</a></li>
								<li><a class="sub-slide-item" href="map-vector.html">Vector Maps</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Tables</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="table-basic.html">Basic Tables</a></li>
								<li><a class="sub-slide-item" href="table-data.html">Data Tables</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Elements</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="alerts.html">Alerts</a></li>
								<li><a class="sub-slide-item" href="avatar.html">Avatar</a></li>
								<li><a class="sub-slide-item" href="breadcrumbs.html">Breadcrumbs</a></li>
								<li><a class="sub-slide-item" href="buttons.html">Buttons</a></li>
								<li><a class="sub-slide-item" href="badge.html">Badge</a></li>
								<li><a class="sub-slide-item" href="dropdown.html">Dropdown</a></li>
								<li><a class="sub-slide-item" href="thumbnails.html">Thumbnails</a></li>
								<li><a class="sub-slide-item" href="list-group.html">List Group</a></li>
								<li><a class="sub-slide-item" href="navigation.html">Navigation</a></li>
								<li><a class="sub-slide-item" href="pagination.html">Pagination</a></li>
								<li><a class="sub-slide-item" href="popover.html">Popover</a></li>
								<li><a class="sub-slide-item" href="progress.html">Progress</a></li>
								<li><a class="sub-slide-item" href="spinners.html">Spinners</a></li>
								<li><a class="sub-slide-item" href="media-object.html">Media Object</a></li>
								<li><a class="sub-slide-item" href="typography.html">Typography</a></li>
								<li><a class="sub-slide-item" href="tooltip.html">Tooltip</a></li>
								<li><a class="sub-slide-item" href="toast.html">Toast</a></li>
								<li><a class="sub-slide-item" href="tags.html">Tags</a></li>
								<li><a class="sub-slide-item" href="tabs.html">Tabs</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Advanced Ui</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="accordion.html">Accordion</a></li>
								<li><a class="sub-slide-item" href="carousel.html">Carousel</a></li>
								<li><a class="sub-slide-item" href="collapse.html">Collapse</a></li>
								<li><a class="sub-slide-item" href="modals.html">Modals</a></li>
								<li><a class="sub-slide-item" href="timeline.html">Timeline</a></li>
								<li><a class="sub-slide-item" href="sweet-alert.html">Sweet Alert</a></li>
								<li><a class="sub-slide-item" href="rating.html">Ratings</a></li>
								<li><a class="sub-slide-item" href="counters.html">Counters</a></li>
								<li><a class="sub-slide-item" href="search.html">Search</a></li>
								<li><a class="sub-slide-item" href="userlist.html">Userlist</a></li>

							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Forms</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="form-elements.html">Form Elements</a></li>
								<li><a class="sub-slide-item" href="form-advanced.html">Advanced Forms</a></li>
								<li><a class="sub-slide-item" href="form-layouts">Form Layouts</a></li>
								<li><a class="sub-slide-item" href="form-validation.html">Form Validation</a></li>
								<li><a class="sub-slide-item" href="form-wizards.html">Form Wizards</a></li>
								<li><a class="sub-slide-item" href="form-editor.html">Form Editor</a></li>
								<li><a class="sub-slide-item" href="form-elements-sizes.html">Form Sizes</a></li>
								<li><a class="sub-slide-item" href="form-inputmask.html">Input Mask</a></li>
								<li><a class="sub-slide-item" href="form-upload.html">File Uploads</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Charts</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="chart-morris.html">Morris Charts</a></li>
								<li><a class="sub-slide-item" href="chart-flot.html">Flot Charts</a></li>
								<li><a class="sub-slide-item" href="chart-chartjs.html">ChartJS</a></li>
								<li><a class="sub-slide-item" href="chart-echart.html">Echart</a></li>
								<li><a class="sub-slide-item" href="chart-sparkline.html">Sparkline</a></li>
								<li><a class="sub-slide-item" href="chart-peity.html">Chart-peity</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Pages</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="profile.html">Profile</a></li>
								<li><a class="sub-slide-item" href="editprofile.html">Edit-Profile</a></li>
								<li><a class="sub-slide-item" href="invoice.html">Invoice</a></li>
								<li><a class="sub-slide-item" href="pricing">Pricing</a></li>
								<li><a class="sub-slide-item" href="gallery.html">Gallery</a></li>
								<li><a class="sub-slide-item" href="todotask.html">Todotask</a></li>
								<li><a class="sub-slide-item" href="faq.html">Faqs</a></li>
								<li><a class="sub-slide-item" href="emptypage.html">Empty Page</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">E-Commerce</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="products.html">Products</a></li>
								<li><a class="sub-slide-item" href="product-details.html">Product-Details</a></li>
								<li><a class="sub-slide-item" href="product-cart.html">Cart</a></li>
								<li><a class="sub-slide-item" href="product-checkout.html">Product Checkout</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Blog</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="bloglist01.html">Blog list 01</a></li>
								<li><a class="sub-slide-item" href="bloglist02.html">Blog list 02</a></li>
								<li><a class="sub-slide-item" href="bloglist03.html">Blog list 03</a></li>
								<li><a class="sub-slide-item" href="bloglist04.html">Blog list 04</a></li>
								<li><a class="sub-slide-item" href="bloglist05.html">Blog list 05</a></li>
								<li><a class="sub-slide-item" href="blog.html">Blog Details</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Icons List</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="icons.html">Fontawesome</a></li>
								<li><a class="sub-slide-item" href="icons2.html">Simple line</a></li>
								<li><a class="sub-slide-item" href="icons3.html">Feather</a></li>
								<li><a class="sub-slide-item" href="icons4.html">Line Awesome</a></li>
								<li><a class="sub-slide-item" href="icons5.html">Themify</a></li>
								<li><a class="sub-slide-item" href="icons6.html">Typicon Icons</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Utilities</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="background.html">Background</a></li>
								<li><a class="sub-slide-item" href="border.html">Border</a></li>
								<li><a class="sub-slide-item" href="display.html">Display</a></li>
								<li><a class="sub-slide-item" href="flex.html">Flex</a></li>
								<li><a class="sub-slide-item" href="height.html">Height</a></li>
								<li><a class="sub-slide-item" href="margin.html">Margin</a></li>
								<li><a class="sub-slide-item" href="padding.html">Padding</a></li>
								<li><a class="sub-slide-item" href="position.html">Position</a></li>
								<li><a class="sub-slide-item" href="width.html">Width</a></li>
								<li><a class="sub-slide-item" href="extras.html">Extras</a></li>
							</ul>
						</li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Authenication</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="signin.html">Sign In</a></li>
								<li><a class="sub-slide-item" href="signup.html">Sign Up</a></li>
								<li><a class="sub-slide-item" href="forgot.html">Forgot Password</a></li>
								<li><a class="sub-slide-item" href="reset.html">Reset Password</a></li>
								<li><a class="sub-slide-item" href="lockscreen.html">Lockscreen</a></li>
								<li><a class="sub-slide-item" href="underconstruction.html">UnderConstruction</a></li>
								<li><a class="sub-slide-item" href="error404.html">404 Error</a></li>
								<li><a class="sub-slide-item" href="error500.html">500 Error</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#">
						<div class="side-angle1"></div>
						<div class="side-angle2"></div>
						<div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg"
							enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
							<g>
								<rect fill="none" height="24" width="24" />
							</g>
							<g>
								<g>
									<rect height="5" opacity=".3" width="5" x="11" y="11" />
									<rect height="5" opacity=".3" width="5" x="4" y="11" />
									<rect height="5" opacity=".3" width="12" x="4" y="4" />
									<path d="M20,6v14H6v2h14c1.1,0,2-0.9,2-2V6H20z" />
									<path
										d="M18,16V4c0-1.1-0.9-2-2-2H4C2.9,2,2,2.9,2,4v12c0,1.1,0.9,2,2,2h12C17.1,18,18,17.1,18,16z M4,4h12v5H4V4z M9,16H4v-5h5 V16z M11,11h5v5h-5V11z" />
								</g>
							</g>
						</svg>
						<span class="side-menu__label">Sub Menu</span><i class="angle fe fe-chevron-right"></i>
					</a>
					<ul class="slide-menu">
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span
									class="sub-side-menu__label">Submenu 1</span><i
									class="sub-angle fe fe-chevron-right"></i></a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="#">Submenu 1.1</a></li>
								<li class="sub-slide2">
									<a class="sub-slide-item" data-toggle="sub-slide2" href="#"><span
											class="sub-side-menu__label2">Submenu 1.2</span><i
											class="sub-angle2 fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu2">
										<li><a class="sub-slide-item2" href="#">Submenu 1.2.1</a></li>
										<li><a class="sub-slide-item2" href="#">Submenu 1.2.2</a></li>
										<li><a class="sub-slide-item2" href="#">Submenu 1.2.3</a></li>
									</ul>
								</li>
								<li><a class="sub-slide-item" href="#">Submenu 1.3</a></li>
							</ul>
						</li>
						<li><a class="sub-side-menu__item" href="#"><span class="sub-side-menu__label">Submenu
									2</span></a></li>
						<li><a class="sub-side-menu__item" href="#"><span class="sub-side-menu__label">Submenu
									3</span></a></li>
					</ul>
				</li>
			</ul>
			<div class="app-sidefooter">
				<a class="side-menu__item" href="#"><svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg"
						height="24" viewBox="0 0 24 24" width="24">
						<path d="M0 0h24v24H0V0z" fill="none" />
						<path
							d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1 14h-2v-2h2v2zm0-3h-2c0-3.25 3-3 3-5 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 2.5-3 2.75-3 5z"
							opacity=".3" />
						<path
							d="M11 16h2v2h-2zm1-14C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z" />
					</svg> <span class="side-menu__label">Suport</span></a>
				<a class="side-menu__item" href="{{ route('patient.logout') }}"
						onclick="event.preventDefault();document.getElementById('logout-form-patient').submit();"><svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg"
						enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
						<g>
							<rect fill="none" height="24" width="24" />
						</g>
						<g>
							<path
								d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z" />
						</g>
					</svg> <span class="side-menu__label">Logout</span></a>
					<form id="logout-form-patient" action="{{ route('patient.logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
			</div>
	</div>
</aside>
<!-- main-sidebar -->