<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            @php $user=users(); @endphp
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-profile"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><img src="{{$user->profile_image}}" alt="user" /><span class="hide-menu">{{$user->name}} </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void()">My Profile </a></li>
                                <li><a href="javascript:void()">Change Password</a></li>
                                <li><a href="{{route('admin.logout')}}">Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">CMS</li>
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.dashbord')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a> 
                        <!-- <span class="label label-rouded label-themecolor pull-right">4</span> -->
                           
                        </li>
                        <!-- <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Homepage</span></a>
                           
                        </li> -->
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Page</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.table.index')}}">Tabl책</a></li>
                                <li><a href="{{route('admin.blog.index')}}">OM VÅR MEDIA</a></li>
                                <li><a href="{{route('admin.news.index')}}">Nyheter</a></li>
                                <li><a href="{{route('admin.news_category.index')}}">Nyheter Category </a></li>
                                <li><a href="{{route('admin.spelansvar.index')}}">Page Contain</a></li>
                                <li><a href="{{route('admin.andelar.index')}}">Andelar </a></li>
                                <li><a href="{{route('admin.activices.index')}}">Aktiviteter</a></li>
                                <li><a href="{{route('admin.speltip.index')}}">Speltips </a></li>
                                <li><a href="{{route('admin.ads.index')}}">Speltips Ads</a></li>
                                <li><a href="{{route('admin.poolspel.index')}}">Poolspel</a></li>
                                <li><a href="{{route('admin.link.index')}}">Link</a></li>
                                <li><a href="{{route('admin.client.index')}}">Client information </a></li>
                                <li><a href="{{route('admin.faq.index')}}">Faq</a></li>
                                <li><a href="{{route('admin.tipspel.index')}}">Tipspel</a></li>
                                <li><a href="{{route('admin.user.index')}}">User </a></li>
                                <li><a href="{{route('admin.slider.index')}}">Slider </a></li>
                                <li><a href="{{route('admin.category.index')}}">Match Category </a></li>
                                <li><a href="{{route('admin.match.index')}}">Match/Event </a></li>
                            </ul>
                        </li>
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.news.index')}}" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">News</a>
                           
                          
                        </li>
                        <!-- <li> <a class=" waves-effect waves-dark" href="{{route('admin.ads.index')}}" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Ads</span></a>
                           
                           
                           </li> -->
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.review.index')}}" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Reducera</span></a>
                           
                           
                        </li>
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.setting.index')}}" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Settings </span></a>
                           
                        </li>
                        <li> <a class=" waves-effect waves-dark" href="{{route('admin.logout')}}" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Logout</span></a>
                           
                        </li>   
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>