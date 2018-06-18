<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Line extends CI_Controller {

 	private $CONFIG = array();

    public function __construct(){
        parent::__construct();
     
        $this->CONFIG = array(
            'baseurl' => base_url('line/callback'),
            'client_id' => '1587152742',
            'client_secret' => '674b689a18c29930b2a3439c38f3ef97'
        );

        //$this->load->model('users_model','user');
    }

	public function login()
	{
		if(isset($this->session->user)){
            redirect('user');
        }
        $oauth_authorize = array(
            'response_type' => 'code',
            'client_id' => $this->CONFIG['client_id'],
            'redirect_uri' => $this->CONFIG['baseurl'],
            'state' => session_id()
        );
        redirect('https://access.line.me/dialog/oauth/weblogin?'.http_build_query($oauth_authorize));
	}

	public function callback()
	{

		if($this->input->get('code') && $this->input->get('state')){
           	$parameter = array(
                'grant_type' => 'authorization_code',
                'code' => trim($this->input->get('code')),
                'redirect_uri' => $this->CONFIG['baseurl'],
                'client_id' => $this->CONFIG['client_id'],
                'client_secret' => $this->CONFIG['client_secret']
            );

            $accessToken = $this->getAccessToken($parameter);
            if($accessToken){
                $getUser = $this->getProfile($accessToken); 
                if(!$getUser) redirect($this->CONFIG['baseurl']);

                   	$member_userid = $getUser->userId;
                   	$member_displayname = $getUser->displayName;
                    $member_pictureurl = $getUser->pictureUrl;
                  

	                $rs = $this->db->get_where('member', 
						array(
							'member_userid' =>  $member_userid
						)
				   	);
				    if($rs->num_rows() != 0){
				    	$data['data'] = $rs->result()[0];
	                  	$this->session->set_userdata($data,TRUE);
	                  	redirect(base_url('home'));
	               	}else{
	             	   $this->db->insert('member', 
						    array(
							  	'member_userid' =>  $member_userid,
							  	'member_displayname' => $member_displayname,
                                'member_pictureurl' => $member_pictureurl,
							  	
						    )  	
				       );

				       $rs = $this->db->get_where('member', 
							array(
								'member_userid' =>  $member_userid
							)
					   );

					    if($rs->num_rows() != 0){
					    	$data['data'] = $rs->result()[0];
		                  	$this->session->set_userdata($data,TRUE);
		                  	redirect(base_url('home'));
		                }
	               	}

            }else{
                redirect($this->CONFIG['baseurl']);
            }
        }
	}	

	private function getAccessToken($parameter=array()){
        $response = json_decode($this->curl('https://api.line.me/v2/oauth/accessToken',$parameter,'POST'));
        return isset($response->access_token) ? $response->access_token: FALSE;
    }

    private function getProfile($access_token=''){
        if($access_token == '') return FALSE;
        $response = json_decode($this->curl('https://api.line.me/v2/profile',array(),'GET',array('Authorization: Bearer '.$access_token)));
        return isset($response->userId) ? $response: FALSE;
    }

    private function curl($url=null,$parameter=array(),$method='GET',$header=array()){
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => $method
        );
        if(!empty($parameter)) $options[CURLOPT_POSTFIELDS] = http_build_query($parameter);
        if(!empty($header)) $options[CURLOPT_HTTPHEADER] = $header;
        $curl = curl_init();
        curl_setopt_array($curl, $options);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}