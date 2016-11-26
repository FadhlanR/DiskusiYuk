<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./../css/admin.css">
  <link rel="stylesheet" href="./../css/chat.css">
</head>
  <body>
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                   <h1><a href="#">Room Master</a></h1>
                </div>
             </div>
             <div class="col-md-7">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                          <ul class="dropdown-menu animated fadeInUp">
                            <li><a href="logout.php">Logout</a></li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                </div>
             </div>
          </div>
       </div>
  </div>

    <div class="page-content">
      <div class="row">
      <div class="col-md-3">
        <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="#"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="sentimenuser.php"><i class="glyphicon glyphicon-calendar"></i> Sentimen dari User</a></li>
                    <li><a href="sentimensistem.php"><i class="glyphicon glyphicon-calendar"></i> Sentimen dari Sistem</a></li>
                    <li><a href="relevansi.php"><i class="glyphicon glyphicon-stats"></i> Relevansi</a></li>
                    <li><a href="logout.php"><i class="glyphicon glyphicon-stats"></i> Logout</a></li>
                </ul>
             </div>
      </div>
      <div class="col-sm-6">
    <div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div>
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p> 
                            </div>
                            <br>
                                <a class="like"><i class="fa fa-thumbs-o-up"></i>  
                                    Like <input class="qty1" name="qty1" readonly="readonly" type="text" value="0" />
                                </a>
                                <a class="dislike"><i class="fa fa-thumbs-o-down"></i> 
                                    Dislike <input class="qty2"  name="qty2" readonly="readonly" type="text" value="0" />
                                </a>
                                <a class="unrelevant"><i class="fa fa-thumbs-o-down"></i> 
                                    Unrelevant <input class="qty4"  name="qty4" readonly="readonly" type="text" value="0" />
                                </a>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div><br>
                                <a class="like"><i class="fa fa-thumbs-o-up"></i>  
                                    Like <input class="qty1" name="qty1" readonly="readonly" type="text" value="0" />
                                </a>
                                <a class="dislike"><i class="fa fa-thumbs-o-down"></i> 
                                    Dislike <input class="qty2"  name="qty2" readonly="readonly" type="text" value="0" />
                                </a>
                                <a class="unrelevant"><i class="fa fa-thumbs-o-down"></i> 
                                    Unrelevant <input class="qty4"  name="qty4" readonly="readonly" type="text" value="0" />
                                </a>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                                
                            </div><br>
                            <a class="like"><i class="fa fa-thumbs-o-up"></i>  
                                    Like <input class="qty1" name="qty1" readonly="readonly" type="text" value="0" />
                                </a>
                                <a class="dislike"><i class="fa fa-thumbs-o-down"></i> 
                                    Dislike <input class="qty2"  name="qty2" readonly="readonly" type="text" value="0" />
                                </a>
                                <a class="unrelevant"><i class="fa fa-thumbs-o-down"></i> 
                                    Unrelevant <input class="qty4"  name="qty4" readonly="readonly" type="text" value="0" />
                                </a>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div><br>
                            <a class="like"><i class="fa fa-thumbs-o-up"></i>  
                                    Like <input class="qty1" name="qty1" readonly="readonly" type="text" value="0" />
                                </a>
                                <a class="dislike"><i class="fa fa-thumbs-o-down"></i> 
                                    Dislike <input class="qty2"  name="qty2" readonly="readonly" type="text" value="0" />
                                </a>
                                <a class="unrelevant"><i class="fa fa-thumbs-o-down"></i> 
                                    Unrelevant <input class="qty4"  name="qty4" readonly="readonly" type="text" value="0" />
                                </a>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      </div>
    </div>
    </div>
  </body>
</html> 