<?php
session_start();
	include("./../credentials.php");
	$db = new PDO(DB_DSN, DB_USER, DB_PASS);
	$error=''; // Variabel untuk menyimpan pesan error

  $sql = "SELECT * FROM user WHERE username =:usr";
  $statement= $db->prepare($sql);
  $statement->execute(array(':usr'=> $_SESSION['login_user']));
  $user =  $statement->fetch();

  $categories = $db->query('SELECT * FROM categories')->fetchALL();
  $comments = $db->query('SELECT * FROM comments')->fetchALL();
  $discussion = $db->query('SELECT * FROM discussion')->fetchALL();
  $members = $db->query('SELECT * FROM members')->fetchALL();

  $currentTime = gmdate("Y-m-d", time()+60*60*7);


  if (isset($_POST['create'])) {
    $result = $db->prepare("INSERT INTO discussion VALUES(NULL,?,?,?,0,?,?)");
		$result->bindParam(1,$currentTime);
		$result->bindParam(2,$currentTime);
		$result->bindParam(3,$_POST['usr']);
		$result->bindParam(4,$user['id_user']);
		$result->bindParam(5,$_POST['articlescmb']);
		$success = $result->execute();

      header("location: ./../admin/index.php");
  }
  $user2 = $db->prepare("SELECT * FROM user u, discussion d WHERE u.username = :u AND u.id_user = d.id_user");
  $user2->bindValue(':u',$_SESSION['login_user']);
  $user2->execute();
  $user2 = $user2->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, <?php echo $_SESSION['login_user']?>  <b class="caret"></b></a>
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
        <img src='./../img/<?php echo $user['user_photo']?>' class="img-circle" height="80" width="80" alt="<?php echo $user['user_photo']?>">
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
      <?php if ($user2==null) {?>
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#createroom">
                Create Room</a>
              </h4>
            </div>

            <div id="createroom" class="panel-collapse collapse">
							<form action="" method="post">
              <div class="panel-body">
                <p><div class="col-md-5">
                  <select name="categoriescmb" id="categoriescmb">
                    <option value="">Categories</option>
                    <?php foreach ($categories as $key => $value):?>
                      <option value="<?php echo $value['id_categories']?>"><?php echo $value['name_categories']?></option>
                    <?php endforeach?>
                </select>

                </div></p>
                <p>
                <div id="articles" class="col-md-5">
									<select name="articlescmb" id="articlescmb">
										<?php include('articles.php'); ?>
									</select>
                </div></p>
                <div class="col-md-5">
                    Name: <input type="text" class="form-control" name="usr" id="usr">
                  </div>
                  <button class="btn btn-primary" name="create" id="create">Create</button>
              </div>
							</form>
            </div>
          </div>
        </div>
        <?php } ?>

      <div class="panel-group" id="accordion">
        <?php
        $i=0;
        $categories = $db->query('SELECT * FROM categories a, articles b, discussion c, user d WHERE a.id_categories = b.id_categories AND b.id_articles = c.id_articles AND c.id_user = d.id_user')->fetchALL();
        foreach ($categories as $key => $value) {
        $i++;?>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i ?>"><?php echo $value['name_discussion']?></a>
              </h4>
            </div>
            <div id="collapse<?php echo $i ?>" class="panel-collapse collapse <?php if($i==1){echo "in";}?>">
              <div class="panel-body"><p>Article: <a href=<?php echo $value['url_articles']?>><?php echo $value['title_articles']?></a></p>
              <p>Category: <?php echo $value['name_categories']?></p>
              <p>Admin: <?php echo $value['nick_name']?></p>
              <p>Rating: <?php echo $value['rating_discussion']?> Rating<p>
              <a href="chat.php"><button class="btn btn-primary">Join</button></a>
              </div>
            </div>
          </div>

    <?php } ?>
</div>
    </div>
    <?php if ($user2!=null) {?>
      <div class="col-sm-2 well">
          <p><strong>YOUR CURRENT DISCUSSION</strong></p>

          <p>Topic<br><?php echo $user2['name_discussion'];?></p>
          <p>As Admin</p>
          <p>rating: <?php echo $user2['rating_discussion'];?></p>
          <?php echo "
            <script type=\"text/javascript\">
            window.localStorage.clear();
            localStorage.setItem('nickname',\"$_SESSION[login_user]\");
            </script>
            ";?>
          <a href="../admin/index.php" class="btn btn-primary">Enter</a>
          <p></p>
      </div>
    <?php } ?>

  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	$('#categoriescmb').change(function(){
		var id = $('#categoriescmb').val();
		$.ajax({url:"articles.php?id="+id,cache:true,success:function(result){
				$('#articlescmb').html(result);
  	}});
	})
</script>
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
