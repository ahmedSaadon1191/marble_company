<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg" style="overflow: scroll">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
    <a href="{{ url('/dashboard') }}">
        <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{trans('main_trans.Dashboard')}}</span>
        </div>
        <div class="clearfix"></div>
    </a>
</li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{trans('main_trans.Programname')}} </li>

                    <!-- CATEGORIES-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
                            <div class="pull-left"><i class="fas fa-school"></i><span
                                    class="right-nav-text">الاقسام الرئيسية</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
                            <li>
                                <a href="{{route('category.index')}}">
                                    كل الاقسام الرئيسية
                                </a>
                                <a href="{{route('category.softDelete')}}">
                                      الاقسام الرئيسية الغير مفعلة
                                </a>
                            </li>

                        </ul>
                    </li>

                  




                    <!-- ABOUT US HOME-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#aboutUsHome-menu">
                            <div class="pull-left"><i class="fas fa-school"></i><span
                                    class="right-nav-text">  عن الشركة في الصفحة الرئيسية</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="aboutUsHome-menu" class="collapse" data-parent="#sidebarnav">
                            <li>
                                <a href="{{route('aboutUsHome.index')}}">
                                    كل  البيانات
                                </a>
                                <a href="{{route('aboutUsHome.softDelete')}}">
                                      البيانات  الغير مفعلة
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!-- ABOUT US-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#aboutUs-menu">
                            <div class="pull-left"><i class="fas fa-school"></i><span
                                    class="right-nav-text">  عن الشركة </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="aboutUs-menu" class="collapse" data-parent="#sidebarnav">
                            <li>
                                <a href="{{route('aboutUs.index')}}">
                                    كل  البيانات
                                </a>
                                <a href="{{route('aboutUs.softDelete')}}">
                                      البيانات  الغير مفعلة
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!-- CONTACT US-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#contactUs-menu">
                            <div class="pull-left"><i class="fas fa-school"></i><span
                                    class="right-nav-text">  بيانات التواصل مع الشركة </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="contactUs-menu" class="collapse" data-parent="#sidebarnav">
                            <li>
                                <a href="{{route('contactUs.index')}}">
                                    كل  البيانات
                                </a>
                                <a href="{{route('contactUs.softDelete')}}">
                                      البيانات  الغير مفعلة
                                </a>
                            </li>

                        </ul>
                    </li>


                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
