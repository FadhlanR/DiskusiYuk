<?php
session_start();
include("./../credentials.php");
$db = new PDO(DB_DSN, DB_USER, DB_PASS);
$user = $db->prepare("SELECT * FROM user u, discussion d, articles a WHERE u.id_user = :u AND u.id_user = d.id_user AND d.id_articles = a.id_articles");
$user->bindValue(':u',$_GET['s']);
$user->execute();
$user = $user->fetch();
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
  <link rel="stylesheet" href="./../css/chat.css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Diskusi Yuk</a>
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
<script src="/hackathon/node_modules/socket.io/node_modules/socket.io-client/socket.io.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script>
var un;
   var nickname = localStorage.getItem('nickname');
    var socket = io.connect('http://localhost:8080');
    // on connection to server, ask for user's name with an anonymous callback
    socket.on('connect', function(){
        // call the server-side function 'adduser' and send one parameter (value of prompt)
        socket.emit('adduser', nickname );
    });
    // listener, whenever the server emits 'updatechat', this updates the chat body
    socket.on('updatechat', function (username, data) {
      un = username;
      var timeInMs = new Date().toLocaleString("en-US", {timeZone: "Asia/Jakarta"})
    if(username == "SERVER" )
    {
      $('#conversation').append('<li class="right clearfix"><span class="chat-img pull-right"><img width = "50" src="https://cdn4.iconfinder.com/data/icons/cloud-computing-solid-icons-vol-2/72/75-512.png" alt="User Avatar" class="img-circle" /></span><div class="chat-body clearfix"><div class="header"><strong class="primary-font"></strong><small class=" text-muted"><span class="glyphicon glyphicon-time"></span>'+timeInMs+'</small><strong class="pull-right primary-font">'+username+'</strong></div><p>'+data+'</p></div></li>');
    }
        else if(username == nickname)
        {
            $('#conversation').append('<li class="right clearfix"><span class="chat-img pull-right"><img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" /></span><div class="chat-body clearfix"><div class="header"><strong class="primary-font"></strong><small class=" text-muted"><span class="glyphicon glyphicon-time"></span>'+timeInMs+'</small><strong class="pull-right primary-font">'+username+'</strong></div><p>'+data+'</p></div></li>');
        }
        else
        {
            $('#conversation').append('<li class="left clearfix"><span class="chat-img pull-left"><img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" /></span><div class="chat-body clearfix"><div class="header"><strong class="primary-font"></strong><span class="glyphicon glyphicon-time"></span>'+timeInMs+'</small><strong class="pull-right primary-font">'+username+'</strong></div><p>'+data+'</p></div><a class="like"><i class="fa fa-thumbs-o-up"></i> Like <input class="qty1" name="qty1" readonly="readonly" type="text" value="" /></a><a class="dislike"><i class="fa fa-thumbs-o-down"></i>Dislike <input class="qty2"  name="qty2" readonly="readonly" type="text" value="" /></a><a class="unrelevant"><i class="fa fa-thumbs-o-down"></i> Unrelevant <input class="qty4"  name="qty4" readonly="readonly" type="text" value="" /></a></li>');
        }
    });
    // listener, whenever the server emits 'updaterooms', this updates the room the client is in
    socket.on('updaterooms', function(rooms, current_room) {
        $('#rooms').empty();
        $.each(rooms, function(key, value) {
            if(value == current_room){
                $('#rooms').append('<div>' + value + '</div>');
            }
            else {
                $('#rooms').append('<div><a href="#" onclick="switchRoom(\''+value+'\')">' + value + '</a></div>');
            }
        });
    });
    function switchRoom(room){
        socket.emit('switchRoom', room);
    }
    // on load of page
    $(function(){
        // when the client clicks SEND
         $('#datasend').click( function() {
            var message = $('#data').val();
            var myData={"Message":message,"Nickname":un};
            $.ajax({
            url : "../functions/InsertComment.php",
            type: "POST",
            data : myData,
            success: function(data,status,xhr)
             {
                //if success then just output the text to the status div then clear the form inputs to prepare for new data
                $('#data').val('');
                 }

            }); 
            
            // tell server to execute 'sendchat' and send along one parameter
            socket.emit('sendchat', message);
        });
        // when the client hits ENTER on their keyboard
        $('#data').keypress(function(e) {
            if(e.which == 13) {
                $(this).blur();
                $('#datasend').focus().click();
            }
        });
    });
</script>
</head>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-4 sidenav">
      <h3><b>Topic</b></h4><p><?php echo $user['name_discussion']?></p>
      <h4>Admin: <?php echo $user['nick_name']?></h4>
      <h4>Rating Accumulation: <?php echo $user['rating_discussion']?></h4>
      <h4>Rate Us: <select>
      <option selected disabled>0</option>
      <?php
          for ($i=1; $i<=5; $i++)
          {
              ?>
                  <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php
          }
          $opinion = $db->prepare("SELECT * FROM comments WHERE showed = 0 ORDER BY like_comment desc");
          $opinion->execute();
          $opinion = $opinion->fetchAll();
      ?>
      </select></h4>
      <h4>Source: <br><a href="<?php echo $user['url_articles']?>"><?php echo $user['url_articles']?></a></h4>

      <h3><b>Popular Opinions</b></h3>
      <ul>
        <?php $i=0; foreach ($opinion as $key => $value) {?>
          <li><?php echo $value['comment']?>  <br> <?php echo $value['like_comment']?> like</li>
        <?php $i++; if ($i ==5) break; } ?>
      </ul>
    </div>

    <div class="col-sm-6">
    <div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <ul class="chat" id ="conversation">

                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="data" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="datasend">
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
