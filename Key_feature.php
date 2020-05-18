<?php
include('header.php');

include('sidebar.php');
?>
<div class="page-content-wrapper">
 <!-- BEGIN CONTENT BODY -->
    <div class="page-content">

                 <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption caption-md">
                                        <i class="icon-bar-chart font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">User Activity</span>
                                        <span class="caption-helper">weekly stats...</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                            <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                            <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row number-stats margin-bottom-30">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="stat-left">
                                                <div class="stat-chart">
                                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                    <div id="sparkline_bar"></div>
                                                </div>
                                                <div class="stat-number">
                                                    <div class="title"> Total </div>
                                                    <div class="number"> 2460 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="stat-right">
                                                <div class="stat-chart">
                                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                    <div id="sparkline_bar2"></div>
                                                </div>
                                                <div class="stat-number">
                                                    <div class="title"> New </div>
                                                    <div class="number"> 719 </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-scrollable table-scrollable-borderless">
                                        <table class="table table-hover table-light">
                                            <thead>
                                                <tr class="uppercase">
                                                    <th colspan="2"> MEMBER </th>
                                                    <th> Earnings </th>
                                                    <th> CASES </th>
                                                    <th> CLOSED </th>
                                                    <th> RATE </th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td class="fit">
                                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                                <td>
                                                    <a href="javascript:;" class="primary-link">Brain</a>
                                                </td>
                                                <td> $345 </td>
                                                <td> 45 </td>
                                                <td> 124 </td>
                                                <td>
                                                    <span class="bold theme-font">80%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fit">
                                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar5.jpg"> </td>
                                                <td>
                                                    <a href="javascript:;" class="primary-link">Nick</a>
                                                </td>
                                                <td> $560 </td>
                                                <td> 12 </td>
                                                <td> 24 </td>
                                                <td>
                                                    <span class="bold theme-font">67%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fit">
                                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar6.jpg"> </td>
                                                <td>
                                                    <a href="javascript:;" class="primary-link">Tim</a>
                                                </td>
                                                <td> $1,345 </td>
                                                <td> 450 </td>
                                                <td> 46 </td>
                                                <td>
                                                    <span class="bold theme-font">98%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fit">
                                                    <img class="user-pic rounded" src="../assets/pages/media/users/avatar7.jpg"> </td>
                                                <td>
                                                    <a href="javascript:;" class="primary-link">Tom</a>
                                                </td>
                                                <td> $645 </td>
                                                <td> 50 </td>
                                                <td> 89 </td>
                                                <td>
                                                    <span class="bold theme-font">58%</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
         

                                        <div class="col-lg-6 col-xs-12 col-sm-12" >
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title" >
                                    <div class="caption">
                                        <i class="icon-microphone font-dark hide"></i>
                                        <span class="caption-subject bold font-dark uppercase"> Recent Matches</span>
                                    
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn blue btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                            <label class="btn  blue btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Tools</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mt-widget-4">
                                                <div class="mt-img-container">
                                                    <img src="../assets/pages/img/background/34.jpg" /> </div>
                                                <div class="mt-container bg-purple-opacity">
                                                    <div class="mt-head-title"> Website Revamp & Deployment </div>
                                                    <div class="mt-body-icons">
                                                        <a href="#">
                                                            <i class=" icon-pencil"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class=" icon-map"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class=" icon-trash"></i>
                                                        </a>
                                                    </div>
                                                    <div class="mt-footer-button">
                                                        <button type="button" class="btn btn-circle btn-danger btn-sm">Dior</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mt-widget-4">
                                                <div class="mt-img-container">
                                                    <img src="../assets/pages/img/background/46.jpg" /> </div>
                                                <div class="mt-container bg-green-opacity">
                                                    <div class="mt-head-title"> CRM Development & Deployment </div>
                                                    <div class="mt-body-icons">
                                                        <a href="#">
                                                            <i class=" icon-social-twitter"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class=" icon-bubbles"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class=" icon-bell"></i>
                                                        </a>
                                                    </div>
                                                    <div class="mt-footer-button">
                                                        <button type="button" class="btn btn-circle blue-ebonyclay btn-sm">Nike</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mt-widget-4">
                                                <div class="mt-img-container">
                                                    <img src="../assets/pages/img/background/37.jpg" /> </div>
                                                <div class="mt-container bg-dark-opacity">
                                                    <div class="mt-head-title"> Marketing Campaigns </div>
                                                    <div class="mt-body-icons">
                                                        <a href="#">
                                                            <i class=" icon-bubbles"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class=" icon-map"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class=" icon-cup"></i>
                                                        </a>
                                                    </div>
                                                    <div class="mt-footer-button">
                                                        <button type="button" class="btn btn-circle btn-success btn-sm">Honda</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
</div>

        <div class="row" >
            <div class="col-lg-6 col-xs-12 col-lg-12 ">
                <div class="portlet light bordered" >
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bubble font-dark hide"></i>
                                <span class="caption-subject font-hide bold uppercase">Recent Users</span>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;"> Option 1</a>
                                    </li>
                                    <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;">Option 2</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Option 3</a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">Option 4</a>
                                        </li>
                                 </ul>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row" >
                            <div class="col-md-4">
                            <!--begin: widget 1-1 -->
                                <div class="mt-widget-1">
                                    <div class="mt-icon">
                                        <a href="#">
                                            <i class="icon-plus"></i>
                                        </a>
                                    </div>
                                    <div class="mt-img">
                                        <img src="../assets/pages/media/users/avatar80_8.jpg"> </div>
                                            <div class="mt-body">
                                                 <h3 class="mt-username">Diana Ellison</h3>
                                                 <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                                 <div class="mt-stats">
                                                    <div class="btn-group btn-group btn-group-justified">
                                                        <a href="javascript:;" class="btn font-red">
                                                             <i class="icon-bubbles"></i> 1,7k </a>
                                                             <a href="javascript:;" class="btn font-green">
                                                             <i class="icon-social-twitter"></i> 2,6k </a>
                                                             <a href="javascript:;" class="btn font-yellow">
                                                             <i class="icon-emoticon-smile"></i> 3,7k </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: widget 1-1 -->
                                        </div>
                                        <div class="col-md-4">
                                            <!--begin: widget 1-2 -->
                                            <div class="mt-widget-1">
                                                <div class="mt-icon">
                                                    <a href="#">
                                                        <i class="icon-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-img">
                                                    <img src="../assets/pages/media/users/avatar80_7.jpg"> </div>
                                                <div class="mt-body">
                                                    <h3 class="mt-username">Jason Baker</h3>
                                                    <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                                    <div class="mt-stats">
                                                        <div class="btn-group btn-group btn-group-justified">
                                                            <a href="javascript:;" class="btn font-yellow">
                                                                <i class="icon-bubbles"></i> 1,7k </a>
                                                            <a href="javascript:;" class="btn font-blue">
                                                                <i class="icon-social-twitter"></i> 2,6k </a>
                                                            <a href="javascript:;" class="btn font-green">
                                                                <i class="icon-emoticon-smile"></i> 3,7k </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: widget 1-2 -->
                                        </div>
                                        <div class="col-md-4">
                                            <!--begin: widget 1-3 -->
                                            <div class="mt-widget-1">
                                                <div class="mt-icon">
                                                    <a href="#">
                                                        <i class="icon-plus"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-img">
                                                    <img src="../assets/pages/media/users/avatar80_6.jpg"> </div>
                                                <div class="mt-body">
                                                    <h3 class="mt-username">Julia Berry</h3>
                                                    <p class="mt-user-title"> Lorem Ipsum is simply dummy text. </p>
                                                    <div class="mt-stats">
                                                        <div class="btn-group btn-group btn-group-justified">
                                                            <a href="javascript:;" class="btn font-yellow">
                                                                <i class="icon-bubbles"></i> 1,7k </a>
                                                            <a href="javascript:;" class="btn font-red">
                                                                <i class="icon-social-twitter"></i> 2,6k </a>
                                                            <a href="javascript:;" class="btn font-green">
                                                                <i class="icon-emoticon-smile"></i> 3,7k </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: widget 1-3 -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>

            

                    <!-- END PAGE BASE CONTENT -->

                    </div>
                </div>



<?php
include('quick_sidebar.php');

include('footer.php');
?>