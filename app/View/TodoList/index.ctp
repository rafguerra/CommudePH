<table class="table">
  <thead class="thead-dark">
    <tr>
          <th scope="col">Date</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
    </tr>
  </thead>
  <?php echo $this->Html->script('/views/todo/index.js'); ?>
    <tbody>
        <?php
		    for($r=0;$r<sizeof($todo_list_data);$r++) {
        ?>
        <tr>
			<td style = "text-align: center;"><?php echo $todo_list_data[$r]['Todo']['date']; ?></td>
			<td style = "text-align: center;"><?php echo $todo_list_data[$r]['Todo']['title']; ?></td>
			<td style = "text-align: center;"><?php echo $todo_list_data[$r]['Todo']['description']; ?></td>
		</tr>
        <?php }?>
    </tbody>
</table>
<div class="wrapper">
    <input type="button" class="btn btn-primary" value="Add To-Do-List" onClick="javascipt:window.location.href='<?php echo $this->Html->url(array('controller'=>'TodoList','action'=>'add')) ?>'" >
</div>
