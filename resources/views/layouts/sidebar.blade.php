<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
	<div class="main-sidebar-header active">
			<a class="desktop-logo logo-light active" href="index.html">
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
				<a class="side-menu__item" href="#"><svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg"
						enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
						<g>
							<rect fill="none" height="24" width="24" />
						</g>
						<g>
							<path
								d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z" />
						</g>
					</svg> <span class="side-menu__label">Logout</span></a>
			</div>
	</div>
</aside>
<!-- main-sidebar -->