<body>
  <style>
    .chat
    {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .chat li
    {
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px dotted #B3A9A9;
    }

    .chat li.left .chat-body
    {
        margin-left: 60px;
    }

    .chat li.right .chat-body
    {
        margin-right: 60px;
    }


    .chat li .chat-body p
    {
        margin: 0;
        color: #777777;
    }

    .panel .slidedown .glyphicon, .chat .glyphicon
    {
        margin-right: 5px;
    }

    .panel-body
    {
        overflow-y: scroll;
        height: 512px;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: auto}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    .like, .dislike, .relevant, .unrelevant{
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background: lightgreen;
    border: 1px solid transparent;
    white-space: nowrap;
    font-size: 14px;
    }
    .qty1, .qty2, .qty3, .qty4 {
        border: none;
        width:20px;
        background: transparent;
    }
  </style>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-4 sidenav">
      <h3><b>Topik</b></h4>
      <h4>Admin: Topik</h4>
      <h4>Rating: <img src="paris.jpg" alt="Paris" width="100" height="25"></h4>
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
                                <a class="relevant"><i class="fa fa-thumbs-o-down"></i> 
                                    Relevant <input class="qty3"  name="qty3" readonly="readonly" type="text" value="0" />
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
                                <a class="relevant"><i class="fa fa-thumbs-o-down"></i> 
                                    Relevant <input class="qty3"  name="qty3" readonly="readonly" type="text" value="0" />
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
                                <a class="relevant"><i class="fa fa-thumbs-o-down"></i> 
                                    Relevant <input class="qty3"  name="qty3" readonly="readonly" type="text" value="0" />
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
                                <a class="relevant"><i class="fa fa-thumbs-o-down"></i> 
                                    Relevant <input class="qty3"  name="qty3" readonly="readonly" type="text" value="0" />
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