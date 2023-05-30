<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
     data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
     data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
     style="direction: {{Config::get('app.locale') == 'en' ? 'ltr' : 'rtl'}}">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo" style="    background: #f3f6f8;">
        <!--begin::Logo image-->
        <a href="{{route('dashboard')}}" style="    position: absolute;
    {{Config::get('app.locale') == 'en' ? 'right:110px' : 'left:110px'}}">
            <img alt="Logo" src="{{asset('admin/assets/logo/logo.png')}}" style="    height: 50px !important;"
                 class="h-25px app-sidebar-logo-default"/>
            <img alt="Logo" src="{{asset('admin/assets/logo/logo.png')}}" style="    height: 40px !important;"
                 class="h-20px app-sidebar-logo-minimize"/>
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <!--begin::Minimized sidebar setup:
if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
    1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
    2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
    3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
    4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
}
-->
        <div id="kt_app_sidebar_toggle"
             class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
             data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
             data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-double-left fs-2 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
             data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
             data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
             data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                 data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <!--end:Menu item-->


                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Route::currentRouteName() === 'cities.index' || Route::currentRouteName() === 'cities.add' || Route::currentRouteName() === 'cities.edit' ? 'show' : '' }}">
                    <!--begin:Menu link-->
                    <span class="menu-link">
											<span class="menu-icon"
                                                  style="{{Config::get('app.locale') == 'en' ? 'margin-right:.5rem;margin-left:0' : 'margin-left:.5rem;margin-right:0'}}">
												<i class="ki-duotone ki-geolocation-home fs-1"><span
                                                        class="path1"></span><span class="path2"></span></i>
											</span>
											<span class="menu-title">Cities</span>
											<span class="menu-arrow"></span>
										</span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{Route::currentRouteName() === 'cities.index' ? 'active' : ''}}"
                               href="{{route('cities.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">List </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Route::currentRouteName() === 'aboutus.index' || Route::currentRouteName() === 'aboutus.edit' || Route::currentRouteName() === 'aboutus.show' ? 'show' : '' }}">
                    <!--begin:Menu link-->
                    <span class="menu-link">
											<span class="menu-icon"
                                                  style="{{Config::get('app.locale') == 'en' ? 'margin-right:.5rem;margin-left:0' : 'margin-left:.5rem;margin-right:0'}}">
												<i class="ki-duotone ki-people fs-2">
                                                 <i class="path1"></i>
                                                 <i class="path2"></i>
                                                 <i class="path3"></i>
                                                 <i class="path4"></i>
                                                 <i class="path5"></i>
                                                </i>
											</span>
											<span class="menu-title">About us</span>
											<span class="menu-arrow"></span>
										</span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{Route::currentRouteName() === 'aboutus.index' ? 'active' : ''}}"
                               href="{{route('aboutus.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">List </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Route::currentRouteName() === 'banners.index'  || Route::currentRouteName() === 'banners.edit' ? 'show' : '' }}">
                    <!--begin:Menu link-->
                    <span class="menu-link">
											<span class="menu-icon"
                                                  style="{{Config::get('app.locale') == 'en' ? 'margin-right:.5rem;margin-left:0' : 'margin-left:.5rem;margin-right:0'}}">
												<i class="ki-duotone ki-slider-vertical-2">
                                                 <i class="path1"></i>
                                                 <i class="path2"></i>
                                                 <i class="path3"></i>
                                                </i>
											</span>
											<span class="menu-title">Banners</span>
											<span class="menu-arrow"></span>
										</span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{Route::currentRouteName() === 'banners.index' ? 'active' : ''}}"
                               href="{{route('banners.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">List </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Route::currentRouteName() === 'contacts.index' || Route::currentRouteName() === 'contacts.edit' || Route::currentRouteName() === 'contacts.show' ? 'show' : '' }}">
                    <!--begin:Menu link-->
                    <span class="menu-link">
											<span class="menu-icon"
                                                  style="{{Config::get('app.locale') == 'en' ? 'margin-right:.5rem;margin-left:0' : 'margin-left:.5rem;margin-right:0'}}">
												<i class="ki-duotone ki-messages">
                                                 <i class="path1"></i>
                                                 <i class="path2"></i>
                                                 <i class="path3"></i>
                                                 <i class="path4"></i>
                                                 <i class="path5"></i>
                                                </i>
											</span>
											<span class="menu-title">Contact us</span>
											<span class="menu-arrow"></span>
										</span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{Route::currentRouteName() === 'contacts.index' ? 'active' : ''}}"
                               href="{{route('contacts.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">List </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->


                <!--begin:Menu item Locales -->
                <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Route::currentRouteName() === 'hotels.index' || Route::currentRouteName() === 'hotels.edit' ? 'show' : '' }}">
                    <!--begin:Menu link-->
                    <span class="menu-link">
											<span class="menu-icon"
                                                  style="{{Config::get('app.locale') == 'en' ? 'margin-right:.5rem;margin-left:0' : 'margin-left:.5rem;margin-right:0'}}">
												<i class="ki-duotone ki-bank">
 <i class="path1"></i>
 <i class="path2"></i>
</i>
											</span>
											<span class="menu-title">Hotels</span>
											<span class="menu-arrow"></span>
										</span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">

                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{Route::currentRouteName() === 'hotels.index' ? 'active' : ''}}"
                               href="{{route('hotels.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">List </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->


                <!--begin:Menu item  -->
                <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Route::currentRouteName() === 'features.index' || Route::currentRouteName() === 'features.edit' ? 'show' : '' }}">
                    <!--begin:Menu link-->
                    <span class="menu-link">
											<span class="menu-icon"
                                                  style="{{Config::get('app.locale') == 'en' ? 'margin-right:.5rem;margin-left:0' : 'margin-left:.5rem;margin-right:0'}}">
												<i class="ki-duotone ki-abstract-29">
 <i class="path1"></i>
 <i class="path2"></i>
</i>
											</span>
											<span class="menu-title">Features</span>
											<span class="menu-arrow"></span>
										</span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">

                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{Route::currentRouteName() === 'features.index' ? 'active' : ''}}"
                               href="{{route('features.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">List </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item  -->
                <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Route::currentRouteName() === 'rooms.index' || Route::currentRouteName() === 'rooms.edit'  || Route::currentRouteName() === 'rooms.show'  ? 'show' : '' }}">
                    <!--begin:Menu link-->
                    <span class="menu-link">
											<span class="menu-icon"
                                                  style="{{Config::get('app.locale') == 'en' ? 'margin-right:.5rem;margin-left:0' : 'margin-left:.5rem;margin-right:0'}}">
												<i class="ki-duotone ki-element-10">
 <i class="path1"></i>
 <i class="path2"></i>
 <i class="path3"></i>
</i>
											</span>
											<span class="menu-title">Rooms</span>
											<span class="menu-arrow"></span>
										</span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">

                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{Route::currentRouteName() === 'rooms.index' ? 'active' : ''}}"
                               href="{{route('rooms.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">List </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Route::currentRouteName() === 'blogs.index'  || Route::currentRouteName() === 'blogs.edit' ? 'show' : '' }}">
                    <!--begin:Menu link-->
                    <span class="menu-link">
											<span class="menu-icon"
                                                  style="{{Config::get('app.locale') == 'en' ? 'margin-right:.5rem;margin-left:0' : 'margin-left:.5rem;margin-right:0'}}">
												<i class="ki-duotone ki-slider-vertical-2">
                                                 <i class="path1"></i>
                                                 <i class="path2"></i>
                                                 <i class="path3"></i>
                                                </i>
											</span>
											<span class="menu-title">Blogs</span>
											<span class="menu-arrow"></span>
										</span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{Route::currentRouteName() === 'blogs.index' ? 'active' : ''}}"
                               href="{{route('blogs.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">List </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

<!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Route::currentRouteName() === 'services.index'  || Route::currentRouteName() === 'services.edit' ? 'show' : '' }}">
                    <!--begin:Menu link-->
                    <span class="menu-link">
											<span class="menu-icon"
                                                  style="{{Config::get('app.locale') == 'en' ? 'margin-right:.5rem;margin-left:0' : 'margin-left:.5rem;margin-right:0'}}">
												<i class="ki-duotone ki-slider-vertical-2">
                                                 <i class="path1"></i>
                                                 <i class="path2"></i>
                                                 <i class="path3"></i>
                                                </i>
											</span>
											<span class="menu-title">Services</span>
											<span class="menu-arrow"></span>
										</span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{Route::currentRouteName() === 'services.index' ? 'active' : ''}}"
                               href="{{route('services.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">List </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
<!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                     class="menu-item menu-accordion {{ Route::currentRouteName() === 'programmes.index'  || Route::currentRouteName() === 'programmes.edit' ? 'show' : '' }}">
                    <!--begin:Menu link-->
                    <span class="menu-link">
											<span class="menu-icon"
                                                  style="{{Config::get('app.locale') == 'en' ? 'margin-right:.5rem;margin-left:0' : 'margin-left:.5rem;margin-right:0'}}">
												<i class="ki-duotone ki-slider-vertical-2">
                                                 <i class="path1"></i>
                                                 <i class="path2"></i>
                                                 <i class="path3"></i>
                                                </i>
											</span>
											<span class="menu-title">Our Programmes</span>
											<span class="menu-arrow"></span>
										</span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{Route::currentRouteName() === 'programmes.index' ? 'active' : ''}}"
                               href="{{route('programmes.index')}}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                                <span class="menu-title">List </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->


            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->

</div>
