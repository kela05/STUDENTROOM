<?php include "navbar.html"; ?>
<!DOCTYPE html>
<html lang="en_US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>STUDENT ROOM</title>


	<link type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" />           <link type="text/css" href="http://kelaaaaaaaaa.mytalk.io/assets/icons/style.css?v0.0001" rel="stylesheet" />            
    <link type="text/css" href="http://kelaaaaaaaaa.mytalk.io/assets/csssub/common.css?v0.0001" rel="stylesheet" />                    	
    
</head>

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
                            <a href="forumi.php" itemprop="item"><span itemprop="name">Home</span></a>
                        </span>
                        <span class="current">Main Category</span>
                    </div>
                </section>

            
                <section class="section create-topic-section no-created-topics" style="display: none">
                        <div class="card">
                            <div class="create-post-box open">
                                <form id="postForm2" method="post" action="/ajax/post" enctype="multipart/form-data">
                                    <div class="create-post-title">
                                        <img src="2.png" class="ava ava-md" alt="kela" title="kela">
                                        <input name="themeText" id="themeName" class="form-control" placeholder="Create new post" minlength="2" required>
                                    </div>
<!--
                                    <div class="create-post-more">
                                        <div class="create-post-content">
                                        <div class="editable" data-placeholder="Message"></div>
                                                 <input type="hidden" name="postText" id="addMessage" value="" minlength="2" required="" /> 
                                                <textarea name="postText" style="display: none;" class="form-control" id="addMessage" minlength="2"></textarea>
                                                                                    </div>
                                        <input type="hidden" name="open" value="1">
                                        <div class="create-post-actions">
                                            <ul class="nav">
                                                <li class="nav-item">
                                                    <a class="nav-link file-upload">
                                                        <i class="icon-clip"></i>
                                                        <input name="files[]" id="imagePost" type="file" multiple="">
                                                    </a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a href="#" class="nav-link" data-toggle="dropdown"><i class="icon-smile"></i></a>
                                                
                                            <div id="filecount1" class="pull-left file-count">

                                            </div>
                                            <div class="create-post-btn">
                                                <button class="btn btn-light close-create-topic">Close</button>
                                                <input type="hidden" name="ids" value="6753">
                                                <input type="hidden" name="uids" value="13322">
                                                <input type="hidden" name="feeds" value="6753">
                                                <button class="btn btn-primary create-topic-main">Create Topic</button>
                                                    </div></li></ul>
                                        </div>
                                    </div>
-->
                                </form>
                            </div>
                        </div>
                    </section>
                
                <div class="page-title page-title-forum-view when-search-hide">
                    <h1>Main Category</h1>

                    <p class="page-cat-desc">Nje kategori.</p>                    
                    <button class="btn btn-primary btn-with-icon create-new-topic float-right">Create Topic<i class="fa fa-plus"></i></button>
                </div>
               
                <section class="section section-posts-list result when-search-hide">
                  <ul class="nav nav-tabs for-card">
                      <li class="nav-item">
                          <a class="nav-link" href="forumi.php">Home</a>
                      </li>
                  	  <li class="nav-item">
                          <a class="nav-link" href="maincategory1.php">Categories</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="maincategory.php">Main Category</a>
                      </li>
                  </ul>
                  
                  <div class="list-group forum-classic">
                      <div class="list-group-item list-group-table-header hidden-md-down list-group-item-space">
                          <div class="row row-padding-2">
                              <div class="col-6">Topics</div>
                              <div class="col-3">users</div>
                              <div class="col-1 text-center">answers</div>
                              <div class="col-1 text-center">views</div>
                          </div>
                      </div>

                      <div class="alert alert-primary card card-post-item empty_list" style="margin-bottom: 0px;">
                          <div class="post">
                            <div class="post-title">
                                <img src="2.png" class="ava ava-md" alt="Sara Moderator" title="Kela Moderator">
                                <h4>No topics yet!</h4>
                                <div class="post-info">
                                    <span class="nickname">Kela Moderator</span>
                                    <span class="post-info-item date">now</span>
                                </div>
                            </div>

                            <div class="post-body">
                                <p>Please create a new topic to start a discussion.</p>
                            </div>
                          </div>
                        </div>
                                        

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
