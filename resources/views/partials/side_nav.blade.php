
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li class="menu-item" aria-haspopup="true">
                <a href="{{ route('home')}}" class="menu-link">
                    <i class="menu-icon flaticon-home"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-section">
                <h4 class="menu-text">Navigation</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-web"></i>
                    <span class="menu-text">Menu</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                         
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-line">
                                    <span></span>
                                </i>
                                <span class="menu-text">Drivers</span>
                                <span class="menu-label">
                                   {{-- <span class="label label-rounded label-primary">6</span>--}}
                                </span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                
                                 
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('drivers.index')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">All Drivers</span>
                                        </a>
                                    </li>

                                    
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('bikedrivers')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">All Riders</span>
                                        </a>
                                    </li>

                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('bikedrivers')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">All Korope Drivers</span>
                                        </a>
                                    </li>

                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{route('drivers.create')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Add Driver</span>
                                        </a>
                                    </li>

                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{route('lgas.index')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">All Lgas </span>
                                        </a>
                                    </li>
                               
                               
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-line">
                                    <span></span>
                                </i>
                                <span class="menu-text">Vehicle Types</span>
                                <i class="menu-arrow"></i>
                            </a>                             
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">

                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('vehicle.index')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">All Vehicles</span>
                                        </a>
                                    </li>
                                 
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('vehicle.create')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Add Vehicle</span>
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-line">
                                    <span></span>
                                </i>
                                <span class="menu-text">Users</span>
                                <i class="menu-arrow"></i>
                            </a>                             
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">

                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('users.index')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">All Users</span>
                                        </a>
                                    </li>

                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('users.create')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Add user</span>
                                        </a>
                                    </li>
                                  
                                 
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('roles.create')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Add Role</span>
                                        </a>
                                    </li>

                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('roles.index')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">List of Roles</span>
                                        </a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-line">
                                    <span></span>
                                </i>
                                <span class="menu-text">Ticketing Center</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('ticket-sales.index')}}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Issue Ticket</span>
                                        </a>
                                    </li>
                                     
                                    
                                </ul>
                            </div>
                        </li>  
                  
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="javascript:;" class="menu-link menu-toggle">
                                <i class="menu-bullet menu-bullet-line">
                                    <span></span>
                                </i>
                                <span class="menu-text">Support Center</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu">
                                <i class="menu-arrow"></i>
                                <ul class="menu-subnav">
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="#" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Support</span>
                                        </a>
                                    </li>
                                     
                                    
                                </ul>
                            </div>
                        </li>    
                    </ul>
                </div>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="{{ route('logout')}}" class="menu-link"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="menu-icon flaticon-logout"></i>
                    <span class="menu-text">logout</span>
                </a>
            </li>
            
        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
<!--end::Aside Menu-->