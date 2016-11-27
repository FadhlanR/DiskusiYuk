<?php
session_start();
include("./../credentials.php");
$db = new PDO(DB_DSN, DB_USER, DB_PASS);
$user = $db->prepare("SELECT * FROM user u, discussion d, articles a WHERE u.username = :u AND u.id_user = d.id_user AND d.id_articles = a.id_articles");
$user->bindValue(':u',$_SESSION['login_user']);
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
<script src="/hackathon/node_modules/socket.io/node_modules/socket.io-client/socket.io.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script>
   var nickname = localStorage.getItem('nickname');


    var socket = io.connect('http://localhost:8080');

    // on connection to server, ask for user's name with an anonymous callback
    socket.on('connect', function(){
        // call the server-side function 'adduser' and send one parameter (value of prompt)

        socket.emit('adduser',nickname );
    });

    // listener, whenever the server emits 'updatechat', this updates the chat body
    socket.on('updatechat', function (username, data) {
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
            $('#conversation').append('<li class="left clearfix"><span class="chat-img pull-left"><img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" /></span><div class="chat-body clearfix"><div class="header"><strong class="primary-font"></strong><span class="glyphicon glyphicon-time"></span>'+timeInMs+'</small><strong class="pull-right primary-font">'+username+'</strong></div><p>'+data+'</p></div><a class="like"><i class="fa fa-thumbs-o-up"></i> Like <input class="qty1" name="qty1" readonly="readonly" type="text" value="0" /></a><a class="dislike"><i class="fa fa-thumbs-o-down"></i>Dislike <input class="qty2"  name="qty2" readonly="readonly" type="text" value="0" /></a><a class="unrelevant"><i class="fa fa-thumbs-o-down"></i> Unrelevant <input class="qty4"  name="qty4" readonly="readonly" type="text" value="0" /></a></li>');
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
            $('#data').val('');
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
      ?>
      </select></h4>
      <h4>Source: <br><a href="<?php echo $user['url_articles']?>"><?php echo $user['url_articles']?></a></h4>

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
<script type="text/javascript">
/* most simple ajax chat script (www.linuxuser.at) (GPLv2) */
var nick_maxlength=10;
var http_request=false;
var http_request2=false;
var intUpdate;

/* http_request for writing */
function ajax_request(url){http_request=false;if(window.XMLHttpRequest){http_request=new XMLHttpRequest();
  if(http_request.overrideMimeType){http_request.overrideMimeType('text/xml');}}
  else if(window.ActiveXObject){try{http_request=new ActiveXObject("Msxml2.XMLHTTP");}catch(e){try{http_request=new ActiveXObject("Microsoft.XMLHTTP");}catch(e){}}}

if(!http_request){alert('Giving up :( Cannot create an XMLHTTP instance');return false;}
http_request.onreadystatechange=alertContents;http_request.open('GET',url,true);http_request.send(null);}
function alertContents(){if(http_request.readyState==4){if(http_request.status==200){rec_response(http_request.responseText);}else{}}}

/* http_request for reading */
function ajax_request2(url){http_request2=false;if(window.XMLHttpRequest){http_request2=new XMLHttpRequest();
  if(http_request2.overrideMimeType){http_request2.overrideMimeType('text/xml');}}
  else if(window.ActiveXObject){try{http_request2=new ActiveXObject("Msxml2.XMLHTTP");}catch(e){try{http_request2=new ActiveXObject("Microsoft.XMLHTTP");}catch(e){}}}

if(!http_request2){alert('Giving up :( Cannot create an XMLHTTP instance');return false;}
http_request2.onreadystatechange=alertContents2;http_request2.open('GET',url,true);http_request2.send(null);}
function alertContents2(){if(http_request2.readyState==4){if(http_request2.status==200){rec_chatcontent(http_request2.responseText);}else{}}}

/* chat stuff */
chatmsg.focus()
var show_newmsg_on_bottom=1;     /* set to 0 to let new msg´s appear on top */
var waittime=3000;        /* time between chat refreshes (ms) */

intUpdate=window.setTimeout("read_cont();", waittime);
chatwindow.value = "loading...";

function read_cont()         { zeit = new Date(); ms = (zeit.getHours() * 24 * 60 * 1000) + (zeit.getMinutes() * 60 * 1000) + (zeit.getSeconds() * 1000) + zeit.getMilliseconds(); ajax_request2("./../chat/chat.txt?x=" + ms); }
function display_msg(msg1)     { chatwindow.value = msg1.trim(); }
function keyup(arg1)         { if (arg1 == 13) submit_msg(); }
function submit_msg()         { clearTimeout(intUpdate); if (chatnick.value == "") { check = prompt("please enter username:");
if (check === null) return 0; if (check == "") check="..."; chatnick.value=check; }
if (chatnick.value.length > nick_maxlength) chatnick.value=chatnick.value.substring(0,nick_maxlength); spaces="";
for(i=0;i<(nick_maxlength-chatnick.value.length);i++) spaces+=" "; v=chatwindow.value.substring(chatwindow.value.indexOf("\n")) + "\n" + chatnick.value + spaces + "| " + chatmsg.value;
if (chatmsg.value != "") chatwindow.value=v.substring(1); write_msg(chatmsg.value,chatnick.value); chatmsg.value=""; intUpdate=window.setTimeout("read_cont();", waittime);}
function write_msg(msg1,nick1)     { ajax_request("./../chat/w.php?m=" + escape(msg1) + "&n=" + escape(nick1)); }
function rec_response(str1)     { }

function rec_chatcontent(cont1) {
    if (cont1 != "") {
        out1 = unescape(cont1);
        if (show_newmsg_on_bottom == 0) { out1 = ""; while (cont1.indexOf("\n") > -1) { out1 = cont1.substr(0, cont1.indexOf("\n")) + "\n" + out1; cont1 = cont1.substr(cont1.indexOf("\n") + 1); out1 = unescape(out1); } }
        if (chatwindow.value != out1) { display_msg(out1); }
        intUpdate=window.setTimeout("read_cont()", waittime);
    }
}
</script>
