<?php
class TodoListController extends Controller {
    var $uses = array('Todo');

    function index(){
        $todo_list_data = array();
        $todo_list_data = $this->Todo->find('all');
        $this->set(compact('todo_list_data'));
    }

    function add(){
        $todo_list_data = array();
        $todo_list_data = $this->Todo->find('all');
        $this->set(compact('todo_list_data'));
    }

    function save(){
        if (!empty($this->data)) {
            $todo_data = array(
                'date'=> $this->data['date'],
                'title'=> $this->data['title'],
                'description'=> $this->data['description']
            );
            $this->Todo->create();
            $this->Todo->save($todo_data);
            return $this->redirect(array('controller'=>'TodoList','action'=>'index'));
        }
    }

}
?>
