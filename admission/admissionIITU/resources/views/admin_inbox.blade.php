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
            <h1><a href="/admin">Easy <span>Admin</span></a></h1>
        </div>
        <div class="logo-icon text-center">
            <a href="/admin"><i class="lnr lnr-home"></i> </a>
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
                        <li><a href="{{ route('admin_inbox_url') }}">Admissions Regulations</a> </li>
                        <li><a href="compose-mail.html">Submissions of Documents</a></li>
                        <li><a href="compose-mail.html">Open Days</a></li>
                        <li><a href="compose-mail.html">Educational Magazine</a></li>
                        <li><a href="compose-mail.html">International olympiad IITU</a></li>
                        <li><a href="compose-mail.html">Guidebook of Applicant</a></li>
                        <li><a href="compose-mail.html">Tuition Fees</a></li>
                        <li><a href="compose-mail.html">Contacts</a></li>
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
                                            <h3>You have 3 new messages</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="/img/hero/1.png" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="/img/hero/1.png" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="/img/hero/1.png" alt=""></div>
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
                                <script src="/js/classie.js"></script>
                                <script src="/js/uisearch.js"></script>
                                <script>
                                    new UISearch( document.getElementById( 'sb-search' ) );
                                </script>
                                <!-- //search-scripts -->
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 3 new notification</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="/img/hero/1.png" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="/img/hero/1.png" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor sit amet </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="/img/hero/1.png" alt=""></div>
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
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
{{--                                        <span style="background:url(/img/hero/dima.jpg) no-repeat center"> </span>--}}
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
        <!-- //header-ends -->
        <div id="page-wrapper">
            <div class="graphs">
                <h3 class="blank1">Inbox</h3>
                <div class="xs">
                    <div class="col-md-4 email-list1">
                        <ul class="collection">
                            <li class="collection-item avatar email-unread">
                                <i class="fa fa-users icon_1"></i>
                                <div class="avatar_left">
                                    <span class="email-title">Social</span>
                                    <p class="truncate grey-text ultra-small">Lorem Ipsum is simply dummy text of.</p>
                                </div>
                                <a href="#!" class="secondary-content"><span class="new badge1 blue">4</span></a>
                                <div class="clearfix"> </div>
                            </li>
                            <li class="collection-item avatar email-unread">
                                <i class="fa fa-exclamation-circle icon_2"></i>
                                <div class="avatar_left">
                                    <span class="email-title">Updates</span>
                                    <p class="truncate grey-text ultra-small">It is a long established fact that a reader.</p>
                                </div>
                                <a href="#!" class="secondary-content"><span class="new badge1 red">4</span></a>
                                <div class="clearfix"> </div>
                            </li>
                            <li class="collection-item avatar email-unread">
                                <i class="fa fa-tag icon_3"></i>
                                <div class="avatar_left">
                                    <span class="email-title">Promotions</span>
                                    <p class="truncate grey-text ultra-small">There are many variations of passages.</p>
                                </div>
                                <a href="#!" class="secondary-content"><span class="new badge1 blue1">4</span></a>
                                <div class="clearfix"> </div>
                            </li>
                            <li class="collection-item avatar email-unread">
                                <i class="icon_4">G</i>
                                <div class="avatar_left">
                                    <a href="#"><span class="email-title">Gmail</span></a>
                                    <p class="truncate grey-text ultra-small">Sed ut perspiciatis unde omnis iste.</p>
                                </div>
                                <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
                                <div class="clearfix"> </div>
                            </li>
                            <li class="collection-item avatar email-unread">
                                <i class="icon_4 icon_5">F</i>
                                <div class="avatar_left">
                                    <a href="#"><span class="email-title">Facebook</span></a>
                                    <p class="truncate grey-text ultra-small">But I must explain to you how.</p>
                                </div>
                                <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
                                <div class="clearfix"> </div>
                            </li>
                            <li class="collection-item avatar email-unread email_last">
                                <i class="icon_4 icon_6">T</i>
                                <div class="avatar_left">
                                    <a href="#"><span class="email-title">Twitter</span></a>
                                    <p class="truncate grey-text ultra-small">At vero eos et accusamus et iusto odio.</p>
                                </div>
                                <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
                                <div class="clearfix"> </div>
                            </li>
                        </ul>
                        <div class="content-box  mrg15B">
                            <div class="content-box-wrapper text-center">
                                <h4 class="content-box-header">
                                    Chat
                                    <small>(Online friends)</small>
                                </h4>
                                <div class="status-badge mrg10A">
                                    <img class="img-circle" width="40" src="/img/hero/1.png" alt="">
                                    <div class="small-badge bg-red"></div>
                                </div>
                                <div class="status-badge mrg10A">
                                    <img class="img-circle" width="40" src="/img/hero/3.png" alt="">
                                    <div class="small-badge bg-red"></div>
                                </div>
                                <div class="status-badge mrg10A">
                                    <img class="img-circle" width="40" src="/img/hero/4.png" alt="">
                                    <div class="small-badge bg-green1"></div>
                                </div>
                                <div class="status-badge mrg10A">
                                    <img class="img-circle" width="40" src="/img/hero/5.png" alt="">
                                    <div class="small-badge bg-orange"></div>
                                </div>
                                <div class="status-badge mrg10A">
                                    <img class="img-circle" width="40" src="/img/hero/1.png" alt="">
                                    <div class="small-badge bg-red"></div>
                                </div>
                                <div class="status-badge mrg10A">
                                    <img class="img-circle" width="40" src="/img/hero/4.png" alt="">
                                    <div class="small-badge bg-green1"></div>
                                </div>
                                <div class="status-badge mrg10A">
                                    <img class="img-circle" width="40" src="/img/hero/3.png" alt="">
                                    <div class="small-badge bg-orange"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 inbox_right">
                        <form action="/search" method="get">
                            <div class="input-group input-group-ind">
                                <input type="search" name="search" class="form-control1 input-search" placeholder="Search...">
                                <span class="input-group-btn">
										<button class="btn btn-success" type="submit">Search</button>
                                </span>
                            </div><!-- Input Group -->
                        </form>
                        <div class="mailbox-content">
                            <div class="mail-toolbar clearfix">

                                @include('includes.messages')

                                <div class="input-group" id="datetimepicker1">
                                    <form action="/filter" style="display: flex; justify-content: space-around">

                                        <div class="form-group" style="margin-right: 25px">
                                            <label for="startDate">Start Date</label>
                                            <input type="date" id="startDate" name="from_date" class="form-control">

                                        </div>
                                        <div class="form-group" style="margin-right: 25px">
                                            <label for="endDate">End Date</label>
                                            <input type="date" id="endDate" name="to_date" class="form-control">
                                        </div>
                                        <div class="form-group" style="margin-right: 25px">
                                            <label></label>
                                            <button type="submit" class="btn btn-success">Отправить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                             <br>

                            <div class="row" style="display: flex; justify-content: space-between">
                                <h3 class="col">Add Message</h3>
                                <div class="col">
                                    <button type="button" style="margin-left: 10px;" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add</button>
                                </div>
                            </div>


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
                                            <form method="post" action="{{ route('admin_inbox_create_url') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label> Phone</label>
                                                    <input type="integer" class="form-control" name="phone">

                                                </div>
                                                <div class="form-group">
                                                    <label>Message</label>
                                                    <input type="text" class="form-control" name="message" >
                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-success" type="submit" >Add</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <table class="table table-fhr">
                                <tbody>
{{--                                <form action="{{ route('send_to_user')}}" method="POST">--}}
{{--                                    {{ csrf_field() }}--}}
{{--                                    <div>--}}
{{--                                    <textarea name="message" id="" cols="20" rows="3">--}}

{{--                                    </textarea>--}}
{{--                                    </div>--}}

{{--                                    <div><button type="submit">Send message</button></div>--}}

                                    @foreach($messages as $mes)
                                        <tr class="unread checked">
                                            <td class="hidden-xs">
                                                <input type="checkbox" name="mobile[]" value="{{$mes->phone}}" class="checkbox">
                                            </td>
                                            <td class="hidden-xs">
                                                <i class="fa fa-star icon-state-warning"></i>
                                            </td>
                                            <td class="hidden-xs">{{ $mes->name }}</td>
                                            <td>
                                                {{$mes->message}}
                                            </td>
                                            <td>
                                                {{$mes->phone}}
                                            </td>
                                            <td>
                                                {{$mes->created_at}}
                                            </td>

                                            <td>
                                                <a href="{{route('admin_inbox_edit_url', $mes->id)}}">
                                                    <button type="button" style="margin-left: 10px; color: white; background-color: #212529" class="btn btn-secondary btn-sm" data-toggle="modal">Edit</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{route('admin_inbox_delete_url', $mes->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" style="margin-left: 10px;" class="btn btn-danger btn-sm" data-toggle="modal">Delete</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
{{--                                </form>--}}

                                </tbody>



                            </table>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col_1">
                    <div class="col-md-4 span_8">
                        <div class="activity_box">
                            <h3>Inbox</h3>
                            <div class="scrollbar scrollbar1" id="style-2">
                                <div class="activity-row">
                                    <div class="col-xs-3 activity-img"><img src="/img/hero/1.png" class="img-responsive" alt=""></div>
                                    <div class="col-xs-7 activity-desc">
                                        <h5><a href="#">John Smith</a></h5>
                                        <p>Hey ! There I'm available.</p>
                                    </div>
                                    <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row">
                                    <div class="col-xs-3 activity-img"><img src="/img/hero/5.png" class="img-responsive" alt=""></div>
                                    <div class="col-xs-7 activity-desc">
                                        <h5><a href="#">Andrew Jos</a></h5>
                                        <p>Hey ! There I'm available.</p>
                                    </div>
                                    <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row">
                                    <div class="col-xs-3 activity-img"><img src="/img/hero/3.png" class="img-responsive" alt=""></div>
                                    <div class="col-xs-7 activity-desc">
                                        <h5><a href="#">Adom Smith</a></h5>
                                        <p>Hey ! There I'm available.</p>
                                    </div>
                                    <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row">
                                    <div class="col-xs-3 activity-img"><img src="/img/hero/4.png" class="img-responsive" alt=""></div>
                                    <div class="col-xs-7 activity-desc">
                                        <h5><a href="#">Peter Carl</a></h5>
                                        <p>Hey ! There I'm available.</p>
                                    </div>
                                    <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row">
                                    <div class="col-xs-3 activity-img"><img src="/img/hero/1.png" class="img-responsive" alt=""></div>
                                    <div class="col-xs-7 activity-desc">
                                        <h5><a href="#">John Smith</a></h5>
                                        <p>Hey ! There I'm available.</p>
                                    </div>
                                    <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 span_8">
                        <div class="activity_box activity_box1">
                            <h3>chat</h3>
                            <div class="scrollbar" id="style-2">
                                <div class="activity-row activity-row1">
                                    <div class="col-xs-3 activity-img"><img src="/img/hero/1.png" class="img-responsive" alt=""><span>10:00 PM</span></div>
                                    <div class="col-xs-5 activity-img1">
                                        <div class="activity-desc-sub">
                                            <h5>John Smith</h5>
                                            <p>Hello !</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 activity-desc1"></div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row activity-row1">
                                    <div class="col-xs-2 activity-desc1"></div>
                                    <div class="col-xs-7 activity-img2">
                                        <div class="activity-desc-sub1">
                                            <h5>Adom Smith</h5>
                                            <p>Hi,How are you ? What about our next meeting?</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 activity-img"><img src="/img/hero/3.png" class="img-responsive" alt=""><span>10:02 PM</span></div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row activity-row1">
                                    <div class="col-xs-3 activity-img"><img src="/img/hero/1.png" class="img-responsive" alt=""><span>10:00 PM</span></div>
                                    <div class="col-xs-5 activity-img1">
                                        <div class="activity-desc-sub">
                                            <h5>John Smith</h5>
                                            <p>Yeah fine</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 activity-desc1"></div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="activity-row activity-row1">
                                    <div class="col-xs-2 activity-desc1"></div>
                                    <div class="col-xs-7 activity-img2">
                                        <div class="activity-desc-sub1">
                                            <h5>Adam Smith</h5>
                                            <p>Wow that's great</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 activity-img"><img src="/img/hero/3.png" class="img-responsive" alt=""><span>10:02 PM</span></div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <form>
                                <input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
                                <input type="submit" value="Send" required="">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 span_8">
                        <div class="activity_box activity_box2">
                            <h3>todo</h3>
                            <div class="scrollbar" id="style-2">
                                <div class="activity-row activity-row1">
                                    <div class="single-bottom">
                                        <ul>
                                            <li>
                                                <input type="checkbox" id="brand" value="">
                                                <label for="brand"><span></span> Sunt in culpa qui officia.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand1" value="">
                                                <label for="brand1"><span></span> Fugiat quo voluptas nulla.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand2" value="">
                                                <label for="brand2"><span></span> Dolorem eum.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand9" value="">
                                                <label for="brand9"><span></span> Pain that produces no resultant.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand8" value="">
                                                <label for="brand8"><span></span> Cupidatat non proident.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand7" value="">
                                                <label for="brand7"><span></span> Praising pain was born.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand3" value="">
                                                <label for="brand3"><span></span> Computer &amp; Electronics</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand4" value="">
                                                <label for="brand4"><span></span> Dolorem ipsum quia.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand5" value="">
                                                <label for="brand5"><span></span> Consequatur aut perferendis.</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="brand6" value="">
                                                <label for="brand6"><span></span> Dolorem ipsum quia.</label>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <form>
                                <input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
                                <input type="submit" value="Submit" required="">
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>

                </div>
            </div>
        </div>
    </div>
    <!--footer section start-->
    <footer>
        <p>&copy 2020 IITU Admin Panel. All Rights Reserved | Design by <a href="#" target="_blank">K.D & A.A</a></p>
    </footer>
    <!--footer section end-->
</section>

<script src="/js/jquery.nicescroll.js"></script>
<script src="/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
