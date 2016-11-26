<!DOCTYPE html>
<!-- Author : Fadhlan Ridhwanallah -->
<html lang="en">
    <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title"><?php echo $_GET['page']?></div>

                            <div class="panel-options">
                                <a href="index.php?page=<?php echo $_GET['page']?>" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                <a href="index.php?page=<?php echo $_GET['page']?>" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                              <tr>
                                <th>
                                  <?php
                                  if($_GET['page']=="Dislike Opinion"){echo 'Total Dislike';}
                                  else if($_GET['page']=="Sentiment Analysis"){echo 'Sentiment Score';}
                                  else if($_GET['page']=="Irrelevant Opinion"){echo 'Irrelevant Score';} ?>
                                </th>
                                <th>Member</th>
                                <th>Time</th>
                                <th>Comment</th>
                                <th></th>
                                <th></th>
                              </tr>
                              <?php
                                if(isset($id_discussion_forum)){
                                  if($_GET['page']=="Dislike Opinion"){
                                    $sentimen = $db->prepare("SELECT * FROM comments c, user u, members m WHERE c.id_discussion_forum = :id AND c.id_user = u.id_user AND c.id_user = m.id_user and m.allowed = 0 and c.showed = 0 ORDER BY c.dislike_comment desc");
                                    $poin = 'dislike_comment';
                                  }
                                  else if($_GET['page']=="Sentiment Analysis"){
                                    $sentimen = $db->prepare("SELECT * FROM comments c, user u, members m WHERE c.id_discussion_forum = :id AND c.id_user = u.id_user AND c.id_user = m.id_user and m.allowed = 0 and c.showed = 0 ORDER BY c.sentiment_score desc");
                                    $poin = 'sentiment_score';
                                  }
                                  else if($_GET['page']=="Irrelevant Opinion"){
                                    $sentimen = $db->prepare("SELECT * FROM comments c, user u, members m WHERE c.id_discussion_forum = :id AND c.id_user = u.id_user AND c.id_user = m.id_user and m.allowed = 0 and c.showed = 0 ORDER BY c.unrelated_comment desc");
                                    $poin = 'unrelated_comment';
                                  }
                                  $sentimen->bindValue(':id',$id_discussion_forum);
                                  $sentimen->execute();
                                  $sentimen = $sentimen->fetchAll();
                                  foreach ($sentimen as $key => $value) {
                                    echo '<tr>
                                            <td>'.$value[$poin].'</td>
                                            <td>'.$value['nick_name'].'</td>
                                            <td>'.$value['added'].'</td>
                                            <td>'.$value['comment'].'</td>
                                            <td><button class="setting btn btn-danger btn-xs" data-back="'.$_GET['page'].'" data-comment="'.$value['id_comment'].'" data-user='.$value['id_user'].' data-action="delete">Delete</button></td>
                                            <td><button class="setting btn btn-danger btn-xs" data-back="'.$_GET['page'].'" data-comment="'.$value['id_comment'].'" data-user='.$value['id_user'].' data-action="block" >Block</button></td>
                                          </tr>';
                                  }
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</html>
