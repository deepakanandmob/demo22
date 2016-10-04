<?php
//require(APPPATH'.libraries/REST_Controller.php');
 require APPPATH.'/libraries/REST_Controller.php';
class Example_api extends REST_Controller {
    function user_get()
    {
        // $data = array('returned: '. $this->get('id'));
        // $this->response($data);
        // $this->response($this->db->get('user')->result());
        $this->load->model('allusers');
        $users = $result=$this->allusers->get();

        $id= $this->get('result');
        $this->response($users, REST_Controller::HTTP_OK);

    }
     
    function user_post()
    {       
        $data = array('returned: '. $this->post('id'));
        $this->response($data);
    }
 
    function user_put()
    {       
        $data = array('returned: '. $this->put('id'));
        $this->response($data);
    }
 
    function user_delete()
    {
        $data = array('returned: '. $this->delete('id'));
        $this->response($data);
    }
}