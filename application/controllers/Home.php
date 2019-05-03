<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function firstload()
	{
		$this->controller = strtolower(get_class($this));
		$this->data['controller'] = $this->controller;
	}

	public function tpl()
    {
    	$this->load->view($this->tpl_body, $this->data);
    }

	public function index()
	{
		$search_query = '`trashed_at` IS NULL AND `group_id` = "6" AND `haku_status` = "2"';
     	$this->data['imageslider_rows'] = $this->Base_model->list_all('tz_haku', '', '', 'haku_sort', 'asc', $search_query, 'haku_id,haku_image');
     	$this->data['about_rows'] = $this->Base_model->search_one('haku_id=1', 'tz_haku');
     	$this->data['imagegallery_rows'] = $this->Base_model->search_one('haku_id=2', 'tz_haku');
     	$this->data['map_rows'] = $this->Base_model->search_one('haku_id=3', 'tz_haku');
     	$this->data['termsandconditions_rows'] = $this->Base_model->search_one('haku_id=4', 'tz_haku');

		$this->tpl_body = 'home';
		$this->tpl();
	}

	public function subscribe()
	{
		$post_data = $this->input->post(null, false);
		$post_data['result'] = 'danger';
        if(sizeof($_POST) > 0)
        {
        	$post_data['created_at'] = datenow();
        	$post_data['subscriber_email'] = $post_data['email'];
			if($this->Base_model->insert($post_data, 'tz_subscriber'))
			{
				$post_data['result'] = 'success';
			}
        }

        echo json_encode($post_data);
	}

	public function reservation()
	{
		$this->load->library('form_validation');
        $post_data = $this->input->post(null, false);
        $post_data = $this->security->xss_clean($post_data);
        if(sizeof($_POST) > 0)
        {
            $message['status'] = 'danger';
            $message['alert'] = 'Fill all the fields.';

            $this->config_login = array(
                array(
                    'field'   => 'reserveEmail',
                    'label'   => 'Customer Email',
                    'rules'   => 'trim|required|valid_email'
                ),
                array(
                    'field'   => 'reserveName',
                    'label'   => 'Customer Name',
                    'rules'   => 'trim|required'
                ),
                array(
                    'field'   => 'reserveNumberOfGuests',
                    'label'   => 'Number of Guests',
                    'rules'   => 'trim|required'
                ),
                array(
                    'field'   => 'reserveContactNumber',
                    'label'   => 'Customer Contact Number',
                    'rules'   => 'trim|required'
                ),
                array(
                    'field'   => 'reserveDateOfVisit',
                    'label'   => 'Date of Visit',
                    'rules'   => 'trim|required'
                ),
                array(
                    'field'   => 'reserveTimeOfVisit',
                    'label'   => 'Time of Visit',
                    'rules'   => 'trim|required'
                )
            );
            $this->form_validation->set_rules($this->config_login);
            if($this->form_validation->run() == true)
            {
                $message['status'] = 'success';
                $message['alert'] = '';

                // $this->load->library('email');
                // $config['useragent'] = 'Q & A kitchen Table Reservation';
                // $config['mailtype'] = 'html';
                // $config['charset'] = 'utf-8';
                // $config['wordwrap'] = TRUE;
                // $this->email->initialize($config);
                // $this->email->from('no-reply@qandakitchen.com', '');
                // $this->email->to('eat@qandakitchen.com');
                // // $this->email->cc('another@another-example.com');
                // $this->email->bcc('admin@qandakitchen.com');

                // $email_message = '<p><strong>Customer Name:</strong> '.$post_data['reserveName'].'</p>';
                // $email_message .= '<p><strong>Customer Email:</strong> '.$post_data['reserveEmail'].'</p>';
                // $email_message .= '<p><strong>Customer Contact Number:</strong> '.$post_data['reserveContactNumber'].'</p>';
                // $email_message .= '<p><strong>Number of Guests:</strong> '.$post_data['reserveNumberOfGuests'].'</p>';
                // $email_message .= '<p><strong>Date of Visit:</strong> '.$post_data['reserveDateOfVisit'].'</p>';
                // $email_message .= '<p><strong>Time of Visit:</strong> '.$post_data['reserveTimeOfVisit'].'</p>';
                // $email_message .= '<p><strong>Special Request:</strong> '.$post_data['reserveSpecialRequest'].'</p>';

                // $this->email->subject('Q & A kitchen Table Reservation');
                // $this->email->message($email_message);
                // $this->email->send();

                $to      = 'eat@qandakitchen.com';
                $subject = 'Q & A kitchen Table Reservation';
                $headers = 'From: no-reply@qandakitchen.com' . "\r\n" .
                    'Reply-To: no-reply@qandakitchen.com' . "\r\n" .
                    'To: eat@qandakitchen.com' . "\r\n" .
                    'MIME-Version: 1.0' . "\r\n" .
                    'Content-type: text/html; charset=utf-8' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                $email_message = '<p><strong>Customer Name:</strong> '.$post_data['reserveName'].'</p>';
                $email_message .= '<p><strong>Customer Email:</strong> '.$post_data['reserveEmail'].'</p>';
                $email_message .= '<p><strong>Customer Contact Number:</strong> '.$post_data['reserveContactNumber'].'</p>';
                $email_message .= '<p><strong>Number of Guests:</strong> '.$post_data['reserveNumberOfGuests'].'</p>';
                $email_message .= '<p><strong>Date of Visit:</strong> '.$post_data['reserveDateOfVisit'].'</p>';
                $email_message .= '<p><strong>Time of Visit:</strong> '.$post_data['reserveTimeOfVisit'].'</p>';
                $email_message .= '<p><strong>Special Request:</strong> '.$post_data['reserveSpecialRequest'].'</p>';
                mail($to, $subject, $email_message, $headers);

                // Send Email to office@qandakitchen.com 
                $to      = 'office@qandakitchen.com';
                $subject = 'Q & A kitchen Table Reservation';
                $headers = 'From: no-reply@qandakitchen.com' . "\r\n" .
                    'Reply-To: no-reply@qandakitchen.com' . "\r\n" .
                    'To: office@qandakitchen.com' . "\r\n" .
                    'MIME-Version: 1.0' . "\r\n" .
                    'Content-type: text/html; charset=utf-8' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                mail($to, $subject, $email_message, $headers);
            }
            else
            {
                #array form variables need to be declare as array
                $message = array();
                $message['status'] = 'danger';
                foreach($post_data as $field_name => $field_val)
                {
                    $error_msg = form_error($field_name, '<span class="error">', '</span>');
                    if(!empty($error_msg))
                    {
                        $message['alert'][$field_name] = $error_msg;   
                    }
                }
            }

            echo json_encode($message);
        }
	}
}
