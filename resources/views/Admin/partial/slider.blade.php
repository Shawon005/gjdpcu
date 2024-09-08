<aside class="left-sidebar">
            <!-- Sidebar scroll-->

            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="up">
                        <li class="user-profile"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="{{asset('')}}frontend/img/lg-1.png" alt="user" /><span class="hide-menu">User </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void()">My Profile </a></li>
                                <li><a href="javascript:void()">Change Password</a></li>
                                <li><a href="{{route('admin.logout')}}">Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <!-- <li class="nav-small-cap">CMS</li> -->
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.dashbord')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a> 
                        <!-- <span class="label label-rouded label-themecolor pull-right">4</span> -->
                           
                        </li>
                        <!-- <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Homepage</span></a>
                           
                        </li> -->
                        <!--<li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Page</span></a>-->
                        <!--   <ul aria-expanded="false" class="collapse">-->
                        <!--        <li><a href="{{route('admin.register.index')}}">Participant </a></li>-->
                        <!--   </ul>-->
                        <!--</li>-->
                       <li> <a class=" waves-effect waves-dark" href="{{route('admin.register.index')}}" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Participant</span></a>
                           
                        </li>
                           
                          
                        </li>
                      
                           
                           
                        </li>
                      
                           
                        </li>
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.logout')}}" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Logout</span></a>
                           
                        </li>   
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>