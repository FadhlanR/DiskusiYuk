<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./../css/chat.css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
      </ul>
      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
            <ul class="dropdown-menu animated fadeInUp">
              <li><a href="../index.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</nav>
</head>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-4 sidenav">
      <h3><b>Topic</b></h4><p>_</p>
      <h4>Admin: Topic</h4>
      <h4>Rating Accumulation: Value Rating</h4>
      <h4>Rate Us: <select>
      <option selected disabled>Rate here!</option>
      <?php
          for ($i=1; $i<=5; $i++)
          {
              ?>
                  <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php
          }
      ?>
      </select></h4>
      <h4>Source: <a href="link">url articles <!--<a href=<?php echo $value['url_articles']?>><?php echo $value['title_articles']?>--></a></h4>
      <p>_</p>
      <h3><b>Pupolar Opinions</b></h3>
      <p>_</p>
      <ul>
        <li>1. argument</li>
        <li>2. argument</li>
        <li>3. argument</li>
        <li>4. argument</li>
        <li>5. argument</li>
      </ul>
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
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
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
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
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
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>

                            </div>
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
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
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
<footer class="container-fluid text-center">
  <p>© 2016. Made with ❤ in Hackathon UMN by TEAM CEMARA </p>
</footer>
</body>
</html>
