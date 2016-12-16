<!DOCTYPE html>
<html lang="en">
<head>
<script src="/c/node_modules/socket.io/node_modules/socket.io-client/socket.io.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script>
   var nickname = localStorage.getItem('nickname');
    var un;
    var currentMessage;
    var socket = io.connect('http://localhost:8080');
   
    // on connection to server, ask for user's name with an anonymous callback
    socket.on('connect', function(){
        // call the server-side function 'adduser' and send one parameter (value of prompt)

        socket.emit('adduser',nickname );
    });

    // listener, whenever the server emits 'updatechat', this updates the chat body
    socket.on('updatechat', function (username, data) {
      var timeInMs = new Date().toLocaleString("en-US", {timeZone: "Asia/Jakarta"})
      un = username;
      currentMessage = data;
    if(username == "SERVER" )
    {
      $('#conversation').append('<li class="right clearfix"><span class="chat-img pull-right"><img width = "50" src="https://cdn4.iconfinder.com/data/icons/cloud-computing-solid-icons-vol-2/72/75-512.png" alt="User Avatar" class="img-circle" /></span><div class="chat-body clearfix"><div class=""><strong class="primary-font"></strong><small class=" text-muted"><span class="glyphicon glyphicon-time"></span>'+timeInMs+'</small><strong class="pull-right primary-font">'+username+'</strong></div><p>'+data+'</p></div></li>');
    }
        else if(username == nickname)
        {
            
            $('#conversation').append('<li class="right clearfix"><span class="chat-img pull-right"><img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" /></span><div class="chat-body clearfix"><div class=""><strong class="primary-font"></strong><small class=" text-muted"><span class="glyphicon glyphicon-time"></span>'+timeInMs+'</small><strong class="pull-right primary-font">'+username+'</strong></div><p>'+data+'</p></div></li>');
          
        }
        else
        {
            $('#conversation').append('<li class="left clearfix"><span class="chat-img pull-left"><img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" /></span><div class="chat-body clearfix"><div class=""><strong class="primary-font"></strong><span class="glyphicon glyphicon-time"></span>'+timeInMs+'</small><strong class="pull-right primary-font">'+username+'</strong></div><p>'+data+'</p></div><a class="like"><i class="fa fa-thumbs-o-up"></i> Like <input id="like" class="qty1" name="qty1" readonly="readonly" type="text" value="" /></a><a class="dislike"><i class="fa fa-thumbs-o-down"></i>Dislike <input class="qty2"  name="qty2" readonly="readonly" type="text" value="" /></a><a class="unrelevant"><i class="fa fa-thumbs-o-down"></i> Unrelevant <input class="qty4"  name="qty4" readonly="readonly" type="text" value="" /></a></li>');
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
        $('#like').click( function() {
        
            var myData={"Message":currentMessage,"Nickname":un};
            $.ajax({
            url : "../functions/InsertLike.php",
            type: "POST",
            data : myData,
            success: function(data,status,xhr)
             {
                //if success then just output the text to the status div then clear the form inputs to prepare for new data
    
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
</html>
