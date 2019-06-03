<?php

 class AddTodoListController extends Controller {

function add(){
    $todo_list_data = array();
    $todo_list_data = $this->Todo->find('all');
    $this->set(compact('todo_list_data'));
}

}

?>
