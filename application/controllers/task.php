<?php

class Task extends CI_Controller{

        public function __construct(){
		parent::__construct();             
        }
        
        
        public function index(){
             
        }
        
        public function day($d=0, $m=0 , $y=0){
            $data['info'] = '';
            if ($d xor $m xor !$y){show_404();}
            if (!$d && !$m && !$y){
                 $d = date('j');
                 $m = date('n');
                 $y = date('Y');
            }
            $day['day'] = $d;
            $day['month'] = $m;
            $day['year'] = $y;
            $data['day'] = $day;
            $this->load->model('menage_model');
            $result = $this->menage_model->get_task_day($day);
            if(empty($result)){
                $this->load->view('add_task', $data);
                return;
            }
            $i = 0;
            foreach ($result as $value) {
                $results[$value['priority']][$i]['task'] =   $value['task'];
                $results[$value['priority']][$i]['performance'] =   $value['performance'];
                $results[$value['priority']][$i]['deadline'] =   $value['deadline'];
                $results[$value['priority']][$i]['link'] = base_url().'task/task_id/'.$value['task_id'];
                $i++;
            }
            $data['results'] = $results;
            $data['class'] = array( 1 => 'low',
                                    2 => 'mid',
                                    3 => 'critical',
                                    4 => 'blocer',
                                   );
            $data['link_add'] = site_url(array('task', 'add', $day['day'], $day['month'],$day['year']));
            $this->load->view('task_day', $data);
        }
        
        public function task_id($id=NULL){
            
            $this->load->model('menage_model');
            $result = $this->menage_model->get_task_id($id);
            if (empty($result)){
                show_404();
            }
            $data['result'] = $result;
            $data['class'] = array( 1 => 'low',
                                    2 => 'mid',
                                    3 => 'critical',
                                    4 => 'blocer',
                                  );
            $this->load->view('task_id', $data);
//            echo "<pre>";  print_r($result) ; echo "</pre>";
        }
        
        public function task_id_edit($id=NULL) {
            
            if($this->input->post('submit')){
                $this->load->model('roles_model');
                $this->form_validation->set_rules($this->roles_model->add_rules['add']);
                //якщо валідація непроходить.
                if ($this->form_validation->run() == TRUE){
                    $this->load->model('menage_model');
                    $update ['task'] = $this->input->post('task');
                    $update ['performance'] = $this->input->post('performance');
                    $update ['deadline'] = $this->input->post('deadline');
                    $update ['priority'] = $this->input->post('priority');
                    $update ['date'] = time();
                    $result = $this->menage_model->task_id_update($update,$id);
                    if ($result) {
                      redirect(site_url(array('task', 'task_id', $id)), 'refresh');
                    }
                    else {
                        $data['info'] = 'Попробуйте знову!';
                       
                    }
                }
            }
            $this->load->model('menage_model');
            $result = $this->menage_model->get_task_id($id);
            if (empty($result)){
                show_404();
            }
            $this->load->view('task_id_edit', $result);
        }
        
        public function add($d=0, $m=0 , $y=0){
            $data['info'] = '';
            if (!$d && !$m && !$y){
                 $d = date('j');
                 $m = date('n');
                 $y = date('Y');
            }

            $df = mktime(0, 0, 0, $m, $d, $y);
            $day['day'] = date('j',$df);
            $day['month'] = date('n',$df);
            $day['year'] = date('Y',$df);
            $data['day'] = $day;
            if($this->input->post('submit')){
                $this->load->model('roles_model');
                $this->form_validation->set_rules($this->roles_model->add_rules['add']);
                //якщо валідація непроходить.
                if ($this->form_validation->run() == TRUE) {
                    $this->load->model('menage_model');
                    $add ['task'] = $this->input->post('task');
                    $add ['performance'] = $this->input->post('performance');
                    $add ['deadline'] = $this->input->post('deadline');
                    $add ['priority'] = $this->input->post('priority');
                    $add ['date'] = time();
                    $result = $this->menage_model->add_task($add, $day);
                    if ($result) {
                      redirect(site_url(array('task', 'day', $day['day'], $day['month'],$day['year'])), 'refresh');
                    }
                    else {
                        $data['info'] = 'Попробуйте знову!';
                    }
                }
            }
            $this->load->view('add_task', $data);
        }

        public function all(){
          $this->load->library("pagination");
          $this->load->model('menage_model');
          $data['i'] = 1;
          $orderd = ($this->uri->segment(3)) ? $this->uri->segment(3): 'default';
          $orderd = ($this->input->post('submit')) ? $this->input->post('order'): $orderd;
          switch ($orderd) {
            case 'default':
              $order = '';
              break;
            case 'priority':
              $order = 'ORDER BY `priority`';
              break;
            case 'time':
              $order = 'ORDER BY `year`,`month`,`day`';
              break;
            case 'task':
              $order = 'ORDER BY `task`';
              break;
          }

          $config["base_url"] = base_url() . "task/all/".$orderd;
          $config["total_rows"] = $this->menage_model->record_count();
          $config["per_page"] = 20;
          $config["uri_segment"] = 4;
          $this->pagination->initialize($config);
          $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
          $limit = " LIMIT " . $page . ' , ' . $config["per_page"] ;
          $result = $this->menage_model->get_all_task($limit, $order);

          $data["links"] = $this->pagination->create_links();
          $data['i'] =($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
          $data['i'] ++;
          $data['result'] = $result;
          $data['class'] = array( 1 => 'low',
            2 => 'mid',
            3 => 'critical',
            4 => 'blocer',
          );
//          echo '<pre>';print_r($data); echo '</pre>';exit();
          $this->load->view('task_all', $data);
      //            echo "<pre>";  print_r($result) ; echo "</pre>";
        }

        

        private function show($data){
            $this->load->view('header');
            $this->load->view('top');
            $this->load->view('left_auth');
            $this->load->view('form_reg', $data);
            $this->load->view('footer');
        }
        
               

}