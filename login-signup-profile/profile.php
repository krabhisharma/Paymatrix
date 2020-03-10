<!DOCTYPE html>
<html>
    <head>
        <title>Profile Page</title>
        <link rel="stylesheet" type="text/css" href="styles.css?<?=filemtime("styles.css")?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
    </head>
    <body>
                <header id="header">
                <img src="hackerrank_icon.svg" alt="Sorry!image cannot be loaded"/>
                    <ul class="list">
                        <li class="li-item"><a class="nav-links" href="http://localhost/team-B(paymatrix)/practice/practice.html">practice</a></li>
                        <li class="li-item"><a class="nav-links"href="http://localhost/team-b(paymatrix)/compete/compete.html">compete</a></li>
                        <li class="li-item"><a class="nav-links"href="http://localhost/team-B(paymatrix)/leaderboard/index1.html">leaderboard</a></li>
                    </ul>
                    <div  class="search" >
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" placeholder="Search">
                            <i class="fa fa-comment-o" id="message-icon" aria-hidden="true"></i>
                            <i class="fa fa-bell-o" id="bell" aria-hidden="true"></i>
                            <i class="fa fa-user-o" id="user" aria-hidden="true"></i>
                            <div class="dropdown">
                            <span class="username"> username</span>
                                <ul class="dropdown-list-profile">
                                        <li class="dropdown-list-profile-user">Profile</li>
                                        <li class="dropdown-list-profile-user">Settings</li>
                                        <li class="dropdown-list-profile-user">Logout</li>
                                </ul>       
                            </div>    
                    </div>
                </header>
               
                    <div class="Profile">
                        <img src="profile-avatar.png" alt="Sorry! image cannot be displayed"/>
                        <br>
                        <span class="profile_avatar_text">PK</span>
                        <p style=" margin:20px 0px 0px;font-family:OpenSans,Arial, Helvetica, sans-serif;color:#0E141E;font-weight:bold;font-size:26px;">UserName</p>
                        <br>
                        <p style="font-family:OpenSans,Arial, Helvetica, sans-serif;font-size:16px;margin:0px 0px 15px 0px;color:#576871;">@email</p>
                        <br>
                        <p style="font-family:OpenSans,Arial, Helvetica, sans-serif; font-size:14px; margin:5px 0px 15px 0px;color:#576871;">Country</p>
                        
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        <a href="#"><p style="margin:20px 0px 0px 0px; display:inline; color:#097BBF;">Edit intro</p></a>
                        <hr>
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                        <p style="display:inline;">
                        Your bio section looks empty.
                        <br>
                        Add your bio to improve your profile
                        </p>
                        <br>
                    <i class="fa fa-pencil" style="margin:20px 0px 0px 0px;"aria-hidden="true"></i>
                    <a href="#"><p style="display:inline;color:#097BBF;">Add Bio</p></a>
                    </div>    

                    <div class="sidebars">
                        <i class="fa fa-certificate" style="color:#000000;" aria-hidden="true"></i>
                        <p >Badges</p>
                    </div>
                    
                    <div class="sidebars">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <p>Work Experience</p>
                        <br>
                        <br>
                        <p style="margin-top:20px;">Software Engineer</p>
                        <br>
                        <br>
                        <p style="margin:5px 0px 0px 0px ! important;font-weight:normal;">devappwebtech soltions | May 2019 - June 2019</p>
                        <p style="margin:20px 0px 25px 0px !important;font-weight:normal;">I was given a project to be completed in 2 months and i was able to reach the company expectations in achieving their objectives.</p>
                        <hr>
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <a href="#"><p style="display:inline;color:#097BBF;">Add new</p></a>
                    </div>

                    <div class="sidebars">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <p style="margin-left:5px;">Education</p>
                        <br>
                        <br>
                        <p style="margin:10px 0px 0px 0px;font-weight:normal;">Bhashyam Public School</p>
                        <p style="margin:20px 0px 0px 0px;font-weight:normal;"> Computer Science & Engineering, B.Tech | August 2017 - Present</p>
                        <p style="margin:20px 0px 25px 0px;font-weight:normal;">i am pursuing B.tech degree in Icfai university ,Hyderabad.</p>
                        <hr>
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <a href="#"><p style="display:inline;color:#097BBF;">Add new</p></a>
                    </div>
    </body>
</html>
