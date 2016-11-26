<?php
session_start();
	include("./../credentials.php");
	$db = new PDO(DB_DSN, DB_USER, DB_PASS);
	$error=''; // Variabel untuk menyimpan pesan error

  $user = $db->prepare('SELECT * FROM user WHERE username ='+ $_SESSION['login_user']);
  $user->execute();
  $categories = $db->query('SELECT * FROM categories')->fetchALL();
  $comments = $db->query('SELECT * FROM comments')->fetchALL();
  $discussion = $db->query('SELECT * FROM discussion')->fetchALL();
  $members = $db->query('SELECT * FROM members')->fetchALL();

  if (isset($_POST['create'])) {

  }
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
  <link rel="stylesheet" href="./../css/option.css">
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
              <form action="" method="post">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create Room</h4>
              </div>
              <div class="modal-body">
                <div class="col-md-5">
                  <select name="categori">
                    <option value="">Categories</option>
                    <?php foreach ($categories as $key => $value):?>
                      <option value="<?php echo $value['id_categories']?>"><?php echo $value['name_categories']?></option>
                    <?php endforeach?>
                </select>
                </form>
                </div>
                <div class="col-md-5">
                  <select name="articles">
                    <option value="">Articles</option>
                    <?php   $articles = $db->query('SELECT * FROM articles WHERE id_categories = 111')->fetchALL();
                     foreach ($articles as $key => $value):?>
                      <option value="<?php echo $value['id_articles']?>"><?php echo $value['title_articles']?></option>
                    <?php endforeach?>
                </select>
                </form>
                </div>
              </div>
              <br>
              </br>
              <div class="modal-footer">
                <input type="submit" name="create" value="Create">
              </div>
            </form>
            </div>

          </div>
        </div>
        </div>
        <div class="col-md-3">
          <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Category
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <?php foreach ($categories as $key => $value):?>
            <li><a href=<?php echo $value['id_categories']?>><?php echo $value['name_categories']?></a></li>
          <?php endforeach?>
        </ul>
      </div>
    </div>
      <form class="col-md-8" role="search">
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
        <?php
        $i=0;
        $categories = $db->query('SELECT * FROM categories a, articles b WHERE a.id_categories = b.id_categories')->fetchALL();
        foreach ($categories as $key => $value) {
        $i++;?>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>"><?php echo $value['title_articles']?></a>
              </h4>
            </div>
            <div id="collapse<?php echo $i ?>" class="panel-collapse collapse <?php if($i==1){echo "in";}?>">
              <div class="panel-body"><p>Url Article: <a href=<?php echo $value['url_articles']?>><?php echo $value['title_articles']?></a></p>
              <p>Category: <?php echo $value['name_categories']?></p>
              <p>Admin: Admin</p>
              <p>Rating: Value Rating<p>
              <a href="chat.php"><button class="btn btn-primary">Join</button></a>
              </div>
            </div>
          </div>

    <?php } ?>
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
