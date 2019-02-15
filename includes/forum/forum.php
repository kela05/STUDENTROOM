
<?php include "navbar.html"; ?>


<!DOCTYPE html>
<html lang="en_US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title> STUDENT ROOM</title>
    
<link href="myforum.css" rel="stylesheet">
<link type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" />    
        <link type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" />          
        <link type="text/css" href="forum.css" rel="stylesheet" /> 
</head>
<style>
    .ava {
  border-radius: 100%;
  display: inline-block; }

.ava-community {
  margin-right: 5px !important; }

.ava-xsm {
  width: 32px;
  height: 32px; }

.ava-sm {
  width: 32px;
  height: 32px; }

.ava-md {
  width: 40px;
  height: 40px; }

.ava-lg {
  width: 60px;
  height: 60px; }

.ava-xl {
  width: 100%;
  border-radius: 3px; }

.ava-with-icon {
  background-color: #7956ec !important;
  background: linear-gradient(to right, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0) 100%);
  color: #FFF;
  text-align: center;
  line-height: 20px;
  padding: 10px 0; }
    .section-posts-list .btn.news-create-new-topic {
  position: absolute;
  right: 15px;
  top: -10px;
  z-index: 10; }

</style>

<body class="main-menu-hide">   
    <div class="wrapper">
        <div class="container">
            <div class="row main-row">   
                <div class="col col-content col-forum-view">
                    <div id="uisearch">
                        <span class="search-title" style="display: none">
                            <span class="group-title">Searching results</span>
                        </span>
                    </div>
                    <section class="section when-search-hide">
                        <div class="breadcrumbs-line" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
                            </span>
                            <span class="current"></span>
                        </div>
            
                    </section>
                    <input type="hidden" name="feeds" value="6754">
                        <div class="page-title page-title-forum-view when-search-hide">
                        <h1></h1>
                    </div>
                
                    <div id="loaders" class="animation_image" style="display:none;" align="center">
                        <img style="margin: 20px; width: 30px;" src="/assets/img/bg-spinner.gif">
                    </div>

                    <section class="section section-posts-list result when-search-hide">
               
                        <ul class="nav nav-tabs for-card">
                            <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#admin-settings" role="tab" aria-controls="admin-settings">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="maincategory1.php">Categories</a>
                            </li>
                            <button class="btn btn-primary btn-with-icon news-create-new-topic create-new-topic">Create Topic<i class="fa fa-plus"></i></button>
                        </ul>
                  
                        <div class="list-group forum-classic">
                            <div class="list-group-item list-group-table-header hidden-md-down list-group-item-space">
                                <div class="row row-padding-2">
                                    <div class="col-6">Topics</div>
                                    <div class="col-3">users</div>

                                    <div class="col-1 text-center"> answers</div>
                                    <div class="col-1 text-center">views</div>
                                </div>
                            </div>

                            <a href="forumtopic.php" id="post_id10017" class="list-group-item list-group-item-space">
                                <div class="row row-padding-2 align-items-center">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="message-box topic-col with-ava-md answer">
                                            <img src="2.png" class="ava ava-md" alt="kela" title="kela">
                                              <h4>Nje teme</h4>
                                                  <div class="post-info">
                                                      <span class="post-info-item nickname">kela</span>
                                                      <span class="post-info-item date">12 hours  ago</span>
                                                  </div>
                                        </div>
                                    </div>
                              <div class="col-3 hidden-md-down text-left">
                                  <img src="2.png" class="ava ava-xsm ava-community" alt="kela" title="kela">
                              </div>

                              <div class="col-1 hidden-md-down">
                                  <div class="stat-box text-center">
                                      <span class="stat-sum">1</span>
                                  </div>
                              </div>
                              <div class="col-1 hidden-md-down">
                                  <div class="stat-box text-center">
                                      <span class="stat-sum">5</span>
                                  </div>
                              </div>
                            </div>
                        </a>
                    </div>

				  <div id="loaders_post" class="animation_image" style="display:none;" align="center">
                    <img style="margin: 20px; width: 30px;" src="/assets/img/bg-spinner.gif">
                  </div>
				
                </section>
            </div>
       </div>
</div>

<footer class="site-footer" role="contentinfo">
      <div class="container">
        <p class="text-center" style="color: #ccc;">Students' Union &copy; 2019</p>
      </div>
</footer>
    </div>
</body>
</html>