 use yii\helpers\Html
 <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="#" class="logo">
                        <img src="images/logo-twc.png" alt="" /> 
                    </a>
                    <div class="pull-right">
                        <a href="#" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->
                
                <div class="header-right">
                    
                    <div class="pull-right">
                        
                        <form class="form form-search" action="http://themepixels.com/demo/webpage/chain/search-results.html">
                            <input type="search" class="form-control" placeholder="Search" />
                        </form>
                        
                        <div class="btn-group btn-group-list btn-group-notification">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-bell-o"></i>
                              <span class="badge">5</span>
                            </button>
                            <div class="dropdown-menu pull-right">
                                <a href="#" class="link-right"><i class="fa fa-search"></i></a>
                                <h5>Notification</h5>
                                <ul class="media-list dropdown-list">
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong> likes a photo of you
                                          <small class="date"><i class="fa fa-thumbs-up"></i> 15 minutes ago</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user2.png" alt="">
                                        <div class="media-body">
                                          <strong>Weno Carasbong</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 04, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user3.png" alt="">
                                        <div class="media-body">
                                          <strong>Venro Leonga</strong> likes a photo of you
                                          <small class="date"><i class="fa fa-thumbs-up"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user4.png" alt="">
                                        <div class="media-body">
                                          <strong>Nanterey Reslaba</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 03, 2014</small>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="img-circle pull-left noti-thumb" src="images/photos/user1.png" alt="">
                                        <div class="media-body">
                                          <strong>Nusja Nawancali</strong> shared a photo of you in your <strong>Mobile Uploads</strong> album.
                                          <small class="date"><i class="fa fa-calendar"></i> July 02, 2014</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="dropdown-footer text-center">
                                    <a href="#" class="link">See All Notifications</a>
                                </div>
                            </div><!-- dropdown-menu -->
                        </div><!-- btn-group -->
                        
                        
                        
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                             <li> 
                             <?= Html::csrfMetaTags() ?>
                              <i class="glyphicon glyphicon-log-out"></i>Se déconnecter</li>
                            </ul>
                        </div><!-- btn-group -->
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper -->
        </header>