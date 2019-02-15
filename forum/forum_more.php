<?php include "navbar.html"; ?>
<!DOCTYPE html>
<html lang="en_US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>STUDENT ROOM</title>
    <link type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="http://kelaaaaaaaaa.mytalk.io/assets/csssub/common.css?v0.0001" rel="stylesheet" />      

</head>

<body class="main-menu-hide">
<div class="wrapper">
    <div class="container">
        <div class="row main-row">
            <div id="uisearch" class="col col-content">
                <span class="search-title" style="display: none">
                <span class="group-title">Searching results</span>
                </span>
            </div>

            <div class="col col-sidebar hidden-md-down when-search-hide">
            <section class="section">
                <div class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                     <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                         <a href="#" itemprop="item"><span itemprop="name">Home</span></a>
                     </span>
                     <span class="back" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                         <a href="forumi.php" itemprop="item" class="btn btn-sidebar btn-block">
                            <i class="fa fa-arrow-left"></i>
                                <span itemprop="name">Back to сategory</span>
                         </a>
                     </span>
                     <span class="current"></span>
                </div>
            </section>
            
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4>Other Topics</h4>
                    </div>
                    <div class="list-group">
                         <a href="forumtopic.php" class="list-group-item list-topic-item">
                            <p class="message-box with-ava-sm answer">
                                <img src="../forum/2.png" class="ava ava-sm" alt="" title="">Nje teme</p>
                        </a>
                    </div>
                </div>
            </section>
            <section>
                <a href="#shareTopic" class="btn btn-sidebar btn-block" data-toggle="modal" data-target="#shareTopic">
                    <i class="fa fa-share-alt"></i>Share this topic</a>
            </section>
            </div>
            
            <div class="col col-content stream when-search-hide">
                <section class="section section-posts-item">
                    <div class="card card-post-item">
                        <div id="post_id10017" class="post">
                            <div class="post-title">
                                <a href="/profile?id=13322">
                                    <img src="../forum/2.png" class="ava ava-md" alt="" title=""></a>
                                        <h1>Nje teme</h1>
                                            <div class="post-info">
                                                <a href="/profile?id=13322" class="nickname">kela </a>
                                                <span class="post-info-item date">2 day  ago</span>
                                                    <div class="dropdown dropdown-more">
                                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                    <div class="dropdown-menu with-icons dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#shareTopic" data-toggle="modal" data-target="#shareTopic">
                                                    <i class="fa fa-share-alt"></i>Share</a>
                                                    <a class="dropdown-item editbut" onclick="editpost($(this)); return false;" alt="10017" href="#">
                                                    <i class="fa fa-edit"></i>Edit</a>
                                                    <a class="dropdown-item deletepost" alt="10017" href="#">
                                                    <i class="fa fa-trash-o"></i>Delete</a>
                                                    </div>
                                                    </div>
                                            </div>
                            </div>

                            <div class="post-body text_10017">
                                    <p class="">nje diskutim rreth temes</p>                            
                            </div>
                   
                            <div class="post-info post-main-info">
                                <span class="post-info-item answer-count">
                                    <i class="fa fa-comment-o"></i>1 answers </span>
                                <span class="post-info-item view-count">
                                    <i class="fa fa-eye"></i>9 views</span>
                            </div>
                    </div>
                </div>
       
                </section>

                <section class="section section-answers-list" id="mainres">
                    <ul class="nav nav-tabs for-card" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#" role="tab" aria-expanded="true">1 answers</a>
                        </li>
                    </ul>
                    
                    <div class="animation_image" style="display:none;" align="center">
                        <img style="margin: 20px;" src="ajax-loader.gif">
                    </div>
                    
                    <div class="theme-posts" id="resul">
                    
                    </div>
                    
                     <div class="card card-answer-item" id="com_3520">
                        <div class="message-box with-ava-md">
                            <a href="/profile?id=13322">
                                <img src="../forum/2.png" class="ava ava-md" alt="" title="">
                            </a>
                            <div class="post-info post-info-header">
                                <a href="/profile?id=13322" class="nickname">kela </a>
                                <span class="post-info-item date">2 day  ago</span>
                                    <div class="dropdown dropdown-more">
                                        <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                    <div class="dropdown-menu with-icons dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item editbut" alt="3520" onclick="editcom($(this)); return false;" href="#">
                                            <i class="fa fa-edit"></i> Edit </a>
                                        <a class="dropdown-item delcom" alt="3520" onclick="delcom($(this)); return false;" href="#">
                                            <i class="fa fa-trash-o"></i>Delete</a>
                                    </div>
                                </div>
                            </div>

                            <p class="text_3520"> nje comment cfaredo </p>

                        </div>
                    </div>
                    
                </section>
        	

                <section class="section">
                  <div class="card">
                        <div class="create-answer-box">
                          <form id="postForm" method="post" action="/ajax/compost" enctype="multipart/form-data">
                            <div class="create-answer-content create-answer-md">
                                <textarea name="postText" class="form-control autosize" id="addMessage" data-autoresize="" placeholder="Message" minlength="2"></textarea>
                            </div>
                            <div class="create-answer-actions">
                                <ul class="nav">
                                    <li class="nav-item">
                                            <a class="nav-link file-upload">
                                                <span>
                                                    <i class="fa fa-paperclip"></i>
                                                </span>
                                                <input name="files[]" id="imagePost" type="file" multiple="">
                                            </a>
                                        </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link" data-toggle="dropdown"><i class="fa fa-smile-o"></i></a>
<!--
                                        <div class="dropdown-menu dropdown-menu-smiles" aria-labelledby="dropdownMenuButton">
                                            <ul class="smiles-list smilesend">
                                              <li data-smile="smile"><img src="/assets/library/emojify/images/emoji/smile.png"></li>
                                              <li data-smile="sad"><img src="/assets/library/emojify/images/emoji/sad.png"></li>
                                              <li data-smile="laugh"><img src="/assets/library/emojify/images/emoji/laugh.png"></li>
                                              <li data-smile="cool"><img src="/assets/library/emojify/images/emoji/cool.png"></li>
                                              <li data-smile="wink"><img src="/assets/library/emojify/images/emoji/wink.png"></li>
                                              <li data-smile="hearteyes"><img src="/assets/library/emojify/images/emoji/hearteyes.png"></li>
                                              <li data-smile="angel"><img src="/assets/library/emojify/images/emoji/angel.png"></li>
                                              <li data-smile="angry"><img src="/assets/library/emojify/images/emoji/angry.png"></li>
                                              <li data-smile="booze"><img src="/assets/library/emojify/images/emoji/booze.png"></li>
                                              <li data-smile="devil"><img src="/assets/library/emojify/images/emoji/devil.png"></li>
                                              <li data-smile="cry"><img src="/assets/library/emojify/images/emoji/cry.png"></li>
                                              <li data-smile="cwl"><img src="/assets/library/emojify/images/emoji/cwl.png"></li>
                                              <li data-smile="disco"><img src="/assets/library/emojify/images/emoji/disco.png"></li>
                                              <li data-smile="doh"><img src="/assets/library/emojify/images/emoji/doh.png"></li>
                                              <li data-smile="emotionless"><img src="/assets/library/emojify/images/emoji/emotionless.png"></li>
                                              <li data-smile="flushed"><img src="/assets/library/emojify/images/emoji/flushed.png"></li>
                                              <li data-smile="kiss"><img src="/assets/library/emojify/images/emoji/kiss.png"></li>
                                              <li data-smile="money"><img src="/assets/library/emojify/images/emoji/money.png"></li>
                                              <li data-smile="puke"><img src="/assets/library/emojify/images/emoji/puke.png"></li>
                                              <li data-smile="sleep"><img src="/assets/library/emojify/images/emoji/sleep.png"></li>
                                              <li data-smile="surprise"><img src="/assets/library/emojify/images/emoji/surprise.png"></li>
                                              <li data-smile="sweated"><img src="/assets/library/emojify/images/emoji/sweated.png"></li>
                                              <li data-smile="tongue"><img src="/assets/library/emojify/images/emoji/tongue.png"></li>
                                              <li data-smile="what"><img src="/assets/library/emojify/images/emoji/what.png"></li>
                                              <li data-smile="wordless"><img src="/assets/library/emojify/images/emoji/wordless.png"></li>
                                              <li data-smile="worry"><img src="/assets/library/emojify/images/emoji/worry.png"></li>
                                              <li data-smile="wtf"><img src="/assets/library/emojify/images/emoji/wtf.png"></li>
                                              <li data-smile="scary"><img src="/assets/library/emojify/images/emoji/scary.png"></li>
                                              <li data-smile="fail"><img src="/assets/library/emojify/images/emoji/fail.png"></li>
                                              <li data-smile="like"><img src="/assets/library/emojify/images/emoji/like.png"></li>
                                              <li data-smile="unlike"><img src="/assets/library/emojify/images/emoji/unlike.png"></li>
                                              <li data-smile="love"><img src="/assets/library/emojify/images/emoji/love.png"></li>
                                            </ul>
                                        </div>
-->
                                    </li>
                                </ul>
                                <div id="filecount5" class="pull-left file-count">
                                </div>
                                <div class="create-answer-btn">
                                    <input type="hidden" name="ids" value="10017">
                                    <input type="hidden" name="uids" value="13322">
                                    <button class="btn btn-primary">Send</button>
                                </div>
                            </div>
                          </form>
                        </div>
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
