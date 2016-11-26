<!DOCTYPE html>
<!-- author: Fadhlan Ridhwanallah -->
<html>
<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#232f4e;color:white">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">This comment will be deleted !</h4>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this comment?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a id="deletecomment" value="" href=""><button type="button" class="btn btn-primary">Delete Comment</button></a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="Block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#232f4e;color:white">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">This user will be blocked !</h4>
      </div>
      <div class="modal-body">
        Are you sure you want to block this user?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a id="blockuser" value="" href=""><button type="button" class="btn btn-primary">Block User</button></a>
      </div>
    </div>
  </div>
</div>
</html>
