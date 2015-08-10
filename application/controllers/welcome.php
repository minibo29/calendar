<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
            $day['day'] = date('j');
            $day['month'] = ( empty($this->input->get('calendar_block_month')) ? date('n') : $this->input->get('calendar_block_month'));
            $day['year'] = ( empty($this->input->get('calendar_block_year')) ? date('Y') : $this->input->get('calendar_block_year'));
            $this->input->get();

            $data['day'] = $day;

            if($day['month'] == 12){
              $next['month'] = 1;
              $next['year'] = $day['year'] + 1;
            }
            else{
              $next['month'] = $day['month'] + 1;
              $next['year'] = $day['year'];
            }
            if($day['month'] == 1){
              $prev['month'] = 12;
              $prev['year'] = $day['year'] - 1;
            }
            else{
              $prev['month'] = $day['month'] - 1;
              $prev['year'] = $day['year'];
            }

            $data['link']['next'] = base_url() . "?calendar_block_month=".$next['month']."&calendar_block_year=".$next['year'];
            $data['link']['prev'] = base_url() . "?calendar_block_month=".$prev['month']."&calendar_block_year=".$prev['year'];

            $this->load->model('menage_model');
            $result = $this->menage_model->day_task($day);
            foreach ($result as $value) {
                $day_foo[$value['day']] = TRUE;
            }
            $dd = mktime(0, 0, 0, $day['month'], 1, $day['year']);
            $data['title'] = date('F Y', $dd);
            $dayofmonth = date('t',$dd);
            // Счётчик для дней месяца
            $day_count = 1;

            // 1. Первая неделя
            $num = 0;
            for($i = 0; $i < 7; $i++)
            {
              // Вычисляем номер дня недели для числа
              $dayofweek = date('w', mktime(0, 0, 0, $day['month'], $day_count, $day['year']));
              // Приводим к числа к формату 1 - понедельник, ..., 6 - суббота
              $dayofweek = $dayofweek - 1;
              if($dayofweek == -1) $dayofweek = 6;

              if($dayofweek == $i)
              {
                $today = ( $day_count == $day['day'] && date('n') == $day['month'] ? 'today' : '');
                // Если дни недели совпадают,
                // заполняем массив $week
                // числами месяца
                if(isset($day_foo[$day_count])){
                    $week[$num][$i] = '<td class="ff '.$today.'"><span><a href="'.site_url(array('task', 'day', $day_count, $day['month'],$day['year'])).'">'.$day_count.'</a></span></td>';
                }
                else{$week[$num][$i] = '<td class="'.$today.'"><span><a href="'.site_url(array('task', 'day', $day_count, $day['month'],$day['year'])).'">'.$day_count.'</a></span></td>';}
                $day_count++;
              }
              else
              {
                $week[$num][$i] = "<td></td>";
              }
            }

            // 2. Последующие недели месяца
            while(true)
            {
              $num++;
              for($i = 0; $i < 7; $i++)
              {
                $today = ( $day_count == $day['day']  && date('n') == $day['month'] ? 'today' : '');
                if(isset($day_foo[$day_count])){
                    $week[$num][$i] = '<td class="ff '.$today.'"><span><a href="'.site_url(array('task', 'day', $day_count, $day['month'],$day['year'])).'">'.$day_count.'</a></span></td>';
                }
                else{$week[$num][$i] = '<td class="'.$today.'"><span><a href="'.site_url(array('task', 'day', $day_count, $day['month'],$day['year'])).'">'.$day_count.'</a></span></td>';}
                $day_count++;

                // Если достигли конца месяца - выходим
                // из цикла
                if($day_count > $dayofmonth) break;
              }
              // Если достигли конца месяца - выходим
              // из цикла
              if($day_count > $dayofmonth) break;
            }
//            echo "<pre>";  print_r($day) ; echo "</pre>";  exit();
            $data['week'] = $week;
            $this->load->view('welcome_message',$data);
	}

        
        
}
