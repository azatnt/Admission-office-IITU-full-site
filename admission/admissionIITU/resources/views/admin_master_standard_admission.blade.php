<!DOCTYPE HTML>
<html>
<head>
    <title>IITU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="stylesheet" href="/css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <!-- chart -->
    <script src="/js/Chart.js"></script>
    <!-- //chart -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--animate-->
    <link href="/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!----webfonts--->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Meters graphs -->
    <script src="/js/jquery-1.10.2.min.js"></script>
    <!-- Placed js at the end of the document so the pages load faster -->

</head>

<body class="sticky-header left-side-collapsed"  onload="initMap()">
<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <h1><a href="index.html">Easy <span>Admin</span></a></h1>
        </div>
        <div class="logo-icon text-center">
            <a href="index.html"><i class="lnr lnr-home"></i> </a>
        </div>

        <!--logo and iconic logo end-->
        <div class="left-side-inner">

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="/admin"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>

                <li><a href="{{ route('admin_programs_url') }}"><i class="lnr lnr-spell-check"></i> <span>Programs</span></a></li>
                <li><a href="{{ route('admin_receptions_url') }}"><i class="lnr lnr-menu"></i> <span>Receptions</span></a></li>
                <li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>MailBox</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ route('admin_inbox_url') }}">Inbox</a> </li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>Pupils</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ route('admin_pupil_admission_url') }}">Admissions Regulations</a> </li>
                        {{--                        <li><a href="compose-mail.html">Submissions of Documents</a></li>--}}
                        <li><a href="/admin/pupils/open_days">Open Days</a></li>
                        <li><a href="/admin/pupils/magazine">Educational Magazine</a></li>
                        {{--                        <li><a href="compose-mail.html">International olympiad IITU</a></li>--}}
                        {{--                        <li><a href="compose-mail.html">Guidebook of Applicant</a></li>--}}
                        {{--                        <li><a href="compose-mail.html">Tuition Fees</a></li>--}}
                        {{--                        <li><a href="compose-mail.html">Contacts</a></li>--}}
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>Master</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{ route('admin_master_contact_consultation_url') }}">Contact for Consultation</a> </li>
                        <li><a href="/master/documents_to_download">Documents to Download</a></li>
                        <li><a href="/admin/master/standard_admission_rule">Standard admission rule</a></li>
                        <li><a href="/admin/master/submission">Submission of documents</a></li>

                    </ul>
                </li>
            </ul>
            <!--sidebar nav end-->
        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content">
        <!-- header-starts -->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--notification menu start -->
            <div class="menu-right">
                <div class="user-panel-top">
                    <div class="profile_details_left">
                        <ul class="nofitications-dropdown">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge"></span></a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have new messages</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="img/hero/1.png" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="img/hero/1.png" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="img/hero/1.png" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all messages</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="login_box" id="loginContainer">
                                <div class="search-box">
                                    <div id="sb-search" class="sb-search">
                                        <form>
                                            <input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
                                            <input class="sb-search-submit" type="submit" value="">
                                            <span class="sb-icon-search"> </span>
                                        </form>
                                    </div>
                                </div>
                                <!-- search-scripts -->
                                <script src="js/classie.js"></script>
                                <script src="js/uisearch.js"></script>
                                <script>
                                    new UISearch( document.getElementById( 'sb-search' ) );
                                </script>
                                <!-- //search-scripts -->
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have  new notification</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="img/hero/1.png" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="img/hero/1.png" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="img/hero/1.png" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all notification</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 8 pending task</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar yellow" style="width:40%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="progress progress-striped active">
                                                <div class="bar green" style="width:90%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar red" style="width: 33%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar  blue" style="width: 80%;"></div>
                                            </div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all pending task</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span style="background:url(img/hero/dima.jpg) no-repeat center"> </span>
                                        <div class="user-name">
                                            <p>Dima<span>Administrator</span></p>
                                        </div>
                                        <i class="lnr lnr-chevron-down"></i>
                                        <i class="lnr lnr-chevron-up"></i>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                    <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li>
                                    <li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!--notification menu end -->
        </div>



        <div class="container" style="margin-top: 100px;">


            <button type="button" style="margin-left: 10px;" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add</button>

            <!-- The Modal -->
            <div class="modal fade" id="exampleModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add contact</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('admin_master_standard_admission_create_url') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Files</label>
                                    <input type="file" class="form-control" name="files">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success" type="submit" >Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




            <table class="table table-fhr">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">File</th>
                    {{--                    <th scope="col">Operations</th>--}}
                    <th scope="col">Operations</th>
                </tr>
                </thead>

                <tbody>
                @foreach($master as $mes)
                    <tr class="unread checked">
                        <td class="hidden-xs">
                            {{ $mes->id }}
                        </td>
                        <td class="hidden-xs">
                            <a href="{{ asset('uploads/pupils/' . $mes->files) }}">{{$mes->files}}</a>

                        </td>



                        {{--                        <td>--}}
                        {{--                            <a href="#">--}}
                        {{--                                <button type="button" style="margin-left: 10px; color: white; background-color: #212529" class="btn btn-secondary btn-sm" data-toggle="modal">Edit</button>--}}
                        {{--                            </a>--}}
                        {{--                        </td>--}}
                        <td>
                            <form action="{{route('admin_master_standard_admission_delete_url', $mes->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" style="margin-left: 10px;" class="btn btn-danger btn-sm" data-toggle="modal">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>



            </table>



        </div>




        <!-- //header-ends -->

        <!--body wrapper end-->
    </div>
    <!--footer section start-->
    <footer>
        <p>&copy 2020 IITU Admin Panel. All Rights Reserved | Design by <a href="#" target="_blank">K.D & A.A</a></p>
    </footer>
    <!--footer section end-->

    <!-- main content end-->
</section>

<script src="/js/jquery.nicescroll.js"></script>
<script src="/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
