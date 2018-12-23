<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="user-info bg-blue" style="background-image: none;">
            <div class="image">
                <img src="<?php $BASE_URL;?>/images/user.png" width="48" height="48" alt="User">
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo __('Hi')?>, aaa</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo __('profile')?>" class=" waves-effect waves-block"><i class="material-icons">account_box</i>Update</a></li>
                        <li><a href="<?php echo __('logout')?>" class=" waves-effect waves-block"><i class="material-icons">lock_open</i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu">
            <ul class="list">
                <li class="header"><?php echo __('MAIN NAVIGATION')?></li>
                <li class="<?=($controller == "dashboard")?"active":""?>">
                    <a href="<?php echo __('dashboard')?>">
                        <i class="material-icons">home</i>
                        <span><?php echo __('Dashboard')?></span>
                    </a>
                </li>
                <li class="<?=($controller == "facebook_accounts")?"active":""?>">
                    <a href="<?php echo __('facebook_accounts')?>">
                        <i class="fa fa-facebook-official fix-iconfa-sidebar" aria-hidden="true"></i>
                        <span><?php echo __('Facebook accounts')?></span>
                    </a>
                </li>
                <li class="<?=($controller == "save")?"active":""?>">
                    <a href="<?php echo __('save')?>">
                        <i class="fa fa-floppy-o fix-iconfa-sidebar" aria-hidden="true"></i>
                        <span><?php echo __('Save post')?></span>
                    </a>
                </li>
                <li class="header"><?php echo __('LIST TOOLS')?></li>
                <li class="<?=($controller == "post" || $action == "post")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">send</i>
                        <span><?php echo __('Auto post')?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "post")?"active":""?>">
                            <a href="<?php echo __('post')?>">
                                <span><?php echo __('Add new')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "post")?"active":""?>">
                            <a href="<?php echo __('schedules/post')?>">
                                <span><?php echo __('Schedule post')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "post_wall_friends" || $action == "friend")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">person_pin</i>
                        <span><?php echo __("Auto post to friend's wall")?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "post_wall_friends")?"active":""?>">
                            <a href="<?php echo __('post_wall_friends')?>">
                                <span><?php echo __('Add new')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "friend")?"active":""?>">
                            <a href="<?php echo __('schedules/friend')?>">
                                <span><?php echo __('Schedule post')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "repost_pages" || $action == "repost_pages" || $action == "replace")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">find_replace</i>
                        <span><?php echo __('Auto repost pages')?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "repost_pages" && $action == "")?"active":""?>">
                            <a href="<?php echo __('repost_pages')?>">
                                <span><?php echo __('Add new')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "replace")?"active":""?>">
                            <a href="<?php echo __('repost_pages/replace')?>">
                                <span><?php echo __('Repalce text')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "repost_pages")?"active":""?>">
                            <a href="<?php echo __('schedules/repost_pages')?>">
                                <span><?php echo __('Schedule repost pages')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "join_groups" || $action == "join")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">group_add</i>
                        <span><?php echo __('Auto join groups')?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "join_groups")?"active":""?>">
                            <a href="<?php echo __('join_groups')?>">
                                <span><?php echo __('Add new')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "join")?"active":""?>">
                            <a href="<?php echo __('schedules/join')?>">
                                <span><?php echo __('Schedule join group')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "add_friends" || $action == "add_friends")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">account_circle</i>
                        <span><?php echo __('Auto add friends')?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "add_friends")?"active":""?>">
                            <a href="<?php echo __('add_friends')?>">
                                <span><?php echo __('Add new')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "add_friends")?"active":""?>">
                            <a href="<?php echo __('schedules/add_friends')?>">
                                <span><?php echo __('Schedule add friends')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "unfriends" || $action == "unfriends")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa fa-user-times fix-iconfa-sidebar" aria-hidden="true"></i>
                        <span><?php echo __('Auto unfriends')?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "unfriends")?"active":""?>">
                            <a href="<?php echo __('unfriends')?>">
                                <span><?php echo __('Add new')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "unfriends")?"active":""?>">
                            <a href="<?php echo __('schedules/unfriends')?>">
                                <span><?php echo __('Schedule unfriends')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "invite_to_groups" || $action == "invite_to_groups")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa fa-ticket fix-iconfa-sidebar" aria-hidden="true"></i>
                        <span><?php echo __('Auto invite to groups')?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "invite_to_groups")?"active":""?>">
                            <a href="<?php echo __('invite_to_groups')?>">
                                <span><?php echo __('Add new')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "invite_to_groups")?"active":""?>">
                            <a href="<?php echo __('schedules/invite_to_groups')?>">
                                <span><?php echo __('Schedule invite to groups')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "invite_to_pages" || $action == "invite_to_pages")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa fa-flag-o fix-iconfa-sidebar" aria-hidden="true"></i>
                        <span><?php echo __('Auto invite to like page')?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "invite_to_pages")?"active":""?>">
                            <a href="<?php echo __('invite_to_pages')?>">
                                <span><?php echo __('Add new')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "invite_to_pages")?"active":""?>">
                            <a href="<?php echo __('schedules/invite_to_pages')?>">
                                <span><?php echo __('Schedule invite to like page')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "accept_friend_request" || $action == "accept_friend_request")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">offline_pin</i>
                        <span><?php echo __('Auto accept friend request')?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "accept_friend_request")?"active":""?>">
                            <a href="<?php echo __('accept_friend_request')?>">
                                <span><?php echo __('Add new')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "accept_friend_request")?"active":""?>">
                            <a href="<?php echo __('schedules/accept_friend_request')?>">
                                <span><?php echo __('Schedule accept friend request')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "comment" || $action == "comment")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">message</i>
                        <span><?php echo __('Auto comment')?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "comment")?"active":""?>">
                            <a href="<?php echo __('comment')?>">
                                <span><?php echo __('Add new')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "comment")?"active":""?>">
                            <a href="<?php echo __('schedules/comment')?>">
                                <span><?php echo __('Schedule comment')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "like" || $action == "like")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">thumb_up</i>
                        <span><?php echo __('Auto like')?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "like")?"active":""?>">
                            <a href="<?php echo __('like')?>">
                                <span><?php echo __('Add new')?></span>
                            </a>
                        </li>
                        <li class="<?=($action == "like")?"active":""?>">
                            <a href="<?php echo __('schedules/like')?>">
                                <span><?php echo __('Schedule like')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "search")?"active":""?>">
                    <a href="<?php echo __('search')?>">
                        <i class="material-icons">search</i>
                        <span><?php echo __('Facebook search')?></span>
                    </a>
                </li>
                <li class="<?=($controller == "analytics")?"active":""?>">
                    <a href="<?php echo __('analytics')?>">
                        <i class="material-icons">bubble_chart</i>
                        <span><?php echo __('Analytics page')?></span>
                    </a>
                </li>
                <li class="header"><?php echo __('ADMIN AREA')?></li>
                <li class="<?=($controller == "package_settings" || $controller == "payment_settings" || $controller == "payment_history")?"active":""?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa fa-cc-paypal fix-iconfa-sidebar" aria-hidden="true"></i>
                        <span><?php echo __('Payment management')?></span>
                    </a>
                    <ul class="ml-menu">
                        <li class="<?=($controller == "package_settings")?"active":""?>">
                            <a href="<?php echo __('package_settings')?>">
                                <span><?php echo __('Package settings')?></span>
                            </a>
                        </li>
                        <li class="<?=($controller == "payment_settings")?"active":""?>">
                            <a href="<?php echo __('payment_settings')?>">
                                <span><?php echo __('Payment settings')?></span>
                            </a>
                        </li>
                        <li class="<?=($controller == "payment_history")?"active":""?>">
                            <a href="<?php echo __('payment_history')?>">
                                <span><?php echo __('Payment history')?></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?=($controller == "package_settings")?"active":""?>">
                    <a href="<?php echo __('package_settings')?>">
                        <i class="fa fa-credit-card fix-iconfa-sidebar" aria-hidden="true"></i>
                        <span><?php echo __('Package settings')?></span>
                    </a>
                </li>
                <li class="<?=($controller == "user_management")?"active":""?>">
                    <a href="<?php echo __('user_management')?>">
                        <i class="fa fa-user fix-iconfa-sidebar" aria-hidden="true"></i>
                        <span><?php echo __('User management')?></span>
                    </a>
                </li>
                <li class="<?=($controller == "settings")?"active":""?>">
                    <a href="<?php echo __('settings')?>">
                        <i class="fa fa-cogs fix-iconfa-sidebar" aria-hidden="true"></i>
                        <span><?php echo __('Settings')?></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2017 <a href="javascript:void(0);"><?php echo __('VT Creators Team')?></a>.
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>