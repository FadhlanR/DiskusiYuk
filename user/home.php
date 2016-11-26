<?php
session_start();
	include("./../credentials.php");
	$db = new PDO(DB_DSN, DB_USER, DB_PASS);
	$error=''; // Variabel untuk menyimpan pesan error

  $result1 = $db1->prepare('SELECT * FROM user WHERE username ='+ $_SESSION['login_user']);
  $result1->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--<link rel="stylesheet" href="./../css/chat.css">-->
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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    </div>
  </div>
</nav>
</head>
<body>
<div class="container text-center">
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">My Profile</a></p>
        <img src="$_SESSION['login_user'].jpg" class="img-circle" height="80" width="80" alt="<?php echo $_SESSION['login_user']?>.jpg">
      </div>
    </div>
    <div class="col-sm-7">

      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <h1>Welcome</h1>
              <h3><?php echo $_SESSION['login_user']?></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-1">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Create</button>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create Room</h4>
              </div>
              <div class="modal-body">
              <div class="col-sm-1">
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Kategori
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                </ul>
                </div>
              </div>
              <div class="col-sm-6">
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">List Topik
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                </ul>
                </div>
              </div>
              </div>
              <br>
              </br>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default">Create</button>
              </div>
            </div>

          </div>
        </div>
        </div>
        <div class="col-sm-3">
          <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Category
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Islam</a></li>
          <li><a href="#">Politic</a></li>
          <li><a href="#">Technology</a></li>
        </ul>
      </div>
    </div>
      <form class="col-sm-8" role="search">
          <div class="form-group input-group">
            <input type="text" class="form-control" placeholder="Search..">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </span>
          </div>
        </form>
    </div>

      <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Topik 1</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body"><p>Sumber Topik : </p>
      <p>admin: Admin</p>
      <p>rating: <img src="paris.jpg" alt="Paris" width="100" height="25"></p>
      <a href="chat.php"><button class="btn btn-primary">Join</button></a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Topik 2</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</p>
      <p>admin: Admin</p>
      <p>rating: <img src="paris.jpg" alt="Paris" width="100" height="25"></p>
      <button class="btn btn-primary">Join</button>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Topik 3</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</p>
      <p>admin: Admin</p>
      <p>rating: <img src="paris.jpg" alt="Paris" width="100" height="25"></p>
      <button class="btn btn-primary">Join</button>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col-sm-2 well">
        <p></p>
        <p><strong>TOP DISCUSSION</strong></p>
        <p>Lorem ipsum ...</p>
        <p>admin: Admin</p>
        <p>rating: <img src="paris.jpg" alt="Paris" width="100" height="25"></p>
        <button class="btn btn-primary">Join</button>
        <p></p>
    </div>

  </div>
</div>
<!-- Trigger the modal with a button -->
<style>
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
</style>
<footer class="container-fluid text-center">
  <p>© 2016. Made with ❤ in Hackathon UMN by TEAM CEMARA </p>
</footer>
</body>
</html>
