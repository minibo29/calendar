<?php

class Menage_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }



    public function record_count() {
      return $this->db->count_all("task");
    }


    /**
     * @param $add
     * @param $day
     * @return mixed
     */
    public function add_task($add, $day){
        $this->load->dbforge();
        $result = $this->db->insert('task',$add);
        $id = $this->db->insert_id();
        $day['task_id'] = $id;
        return $this->db->insert('day',$day);
    }


    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function task_id_update($data, $id){
        $this->db->where('task_id', $id);
        $result = $this->db->update('task', $data); 
        
        return $result;
    }


    /**
     * @param $day=array(int(day),int(month),int(year))
     * @return mixed
     * return all task on this day.
     */
    public function get_task_day($day) {
        $query = $this->db->query(" SELECT * 
                                    FROM `task` 
                                    RIGHT JOIN `day` 
                                    ON `day`.`task_id`=`task`.`task_id` 
                                    WHERE `day`=" . $day['day']. " AND `month`=" . $day['month']. " AND`year`=" . $day['year']. "
                                    ORDER BY priority DESC
                                   ");
        
        $query = $query->result_array();
        return $query;
    }

    /**
     * @param $day=array(int(day),int(month),int(year))
     * @return mixed
     * return all task on this day.
     */
    public function get_all_task($limit, $order) {
    $query = $this->db->query("
                                SELECT *
                                FROM `task`
                                LEFT JOIN `day` ON `day`.`task_id`=`task`.`task_id`
                                " . $order . $limit ."
                                   ");
        $query = $query->result_array();
        return $query;
    }


    /**
     * @param $id
     * @return mixed
     */
    public function get_task_id($id) {
        
        $query = $query = $this->db->get_where('task', array('task_id' => $id));
        
        $query = $query->first_row('array');
        return $query;
    }


    /**
     * @param $m
     * @return mixed
     */
    public function day_task($day) {
        $this->db->select('day');
        $this->db->distinct();
        $query = $this->db->get_where('day', array('month' => $day['month'], 'year' => $day['year']));
        
        $query = $query->result_array();
        return $query;
    }
   
}

//$this->db->insert('table_name',$data);
//$id = $this->db->mysql_insert_id()