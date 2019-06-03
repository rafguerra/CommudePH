<?php echo $this->Html->script('/views/todo/create.js'); ?>
<h1>Add To-Do</h1>
<form id="todoForm">
    <div class="form-group">
        <label>Date</label>
        <input type="text" class="form-control" id="date" required>
        <div class="invalid-feedback">
           Please provide a date
        </div>
    </div>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" id="title" required>
         <div class="invalid-feedback">
            Please provide a title
         </div>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" id="description" rows="3" required></textarea>
         <div class="invalid-feedback">
            Please provide description
         </div>
    </div>
</form>
<div class="wrapper">
    <button type="reset" class="btn btn-secondary" onclick="ClearButton();">Clear</button>
    <button type="reset" class="btn btn-primary" style="margin-left:10px;" onclick="AddRecord();">Next</button>
</div>

<!--Confirmation Modal-->
<div id="confirmModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation Screen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Date</label>
            <input type="text" class="form-control" id="addDate" readonly>
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" id="addTitle" readonly>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" id="addDescription" rows="3" readonly></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="SaveRecord();">Create</button>
      </div>
    </div>
  </div>
</div>


<!--Success Modal-->
<div id="successModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Success!</h4>
				<p>Your to-do has been created successfully.</p>
				<button class="btn btn-success" onclick="TodoList();"><span>To-do List</span> <i class="material-icons">&#xE5C8;</i></button>
			</div>
		</div>
	</div>
</div>
