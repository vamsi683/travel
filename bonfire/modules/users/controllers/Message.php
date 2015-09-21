<?php defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications.
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2014, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

/**
 * Users Controller.
 *
 * Provides front-end functions for users, including access to login and logout.
 *
 * @package Bonfire\Modules\Users\Controllers\Users
 * @author     Bonfire Dev Team
 * @link    http://cibonfire.com/docs/developer
 */
class Message extends Front_Controller
{
    /** @var array Site's settings to be passed to the view. */
    private $siteSettings;

    /**
     * Setup the required libraries etc.
     *
     * @retun void
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->model(array('users/user_model','users/message_model'));

        $this->load->library('users/auth');
        $this->load->library('encrypt');

        $this->lang->load('messages');
        $this->siteSettings = $this->settings_lib->find_all();
    }
    
    
    /* redirect the user to home page, if the URL is /messages */
    public function index()
    {
        $this->auth->restrict();
        $this->set_current_user();
        
        Template::redirect('/');       
        
    }
    
    
    /* Display User messages */
    public function display()
    {
         //Restrict the user if he is not logged in
        $this->auth->restrict();
        $this->set_current_user();
        
        
        
        Assets::add_css(array('jquery.dataTables.css', 'dataTables.responsive.css'));
	    Assets::add_js(array('jquery.dataTables.js','dataTables.bootstrap.js','dataTables.responsive.js'));  
        
        
        Assets::add_js($this->load->view('messages/validation_js', array(), true), 'inline');

        Template::set('page_title', 'My Messages');
        Template::set_view('messages/view_messages');
        Template::render('user');
	           
    }
    
     /* Display User Messages AJAX */
    public function ajax_display_list()
    {
        //Restrict the user if he is not logged in
        $this->auth->restrict();
        $this->set_current_user();
        
        
        $this->load->library('datatables');
		$this->datatables
			->select('id,from_user_id,to_user_id,subject, date_sent')
			->from('messages');
		
		$this->datatables->add_column('from_user', '$1', 'from_user_id',array($this,'callback_msg_from'));	
        $this->datatables->add_column('subject', '$1', 'subject',array($this,'callback_msg_subj'));
		$this->datatables->add_column('received_on', '$1', 'date_sent',array($this,'callback_date_sent'));
		echo $this->datatables->generate();
        
        
    }

    
    public function callback_msg_from($key,$row)
	{
		$user_id    =   $row['from_user_id'];
        $name       =   "";
        if(!empty($user_id))
        {
            $user   =   $this->user_model->find($user_id);
            $name   =   $user->display_name;
            
        }        
		return $name;
	}
    
    
    public function callback_date_sent($key,$row)
	{
		$date_sent    =   $row['date_sent'];
        $date         =   "";
        if(!empty($date_sent))
        {
            $date   =   date('m/d/Y H:i', strtotime($date_sent));     
        }        
		return $date;
	}
    
    public function callback_msg_subj($key,$row)
	{
		$subj            =   $row['subject'];
        $subj_link       =   "";
        
        if(!empty($subj))
        {
            
            //$enc_from   = rawurlencode($this->encrypt->encode($row['from_user_id']));
            //$enc_to     = rawurlencode($this->encrypt->encode($row['to_user_id']));
            
            $enc_from   = $row['from_user_id'];
            $enc_to     = $row['to_user_id'];
            
            $msg_id     =   $row['id'];
            
            $subj_link   =   '<a href="/users/message/view/'.$msg_id.'/'.$enc_from.'/'.$enc_to.'">'.$subj.'</a>';     
        }        
		return $subj_link;
	}
    
    
    public function view($enc_msg_id, $enc_from_user, $enc_to_user)
    {
        
        //Restrict the user if he is not logged in
        $this->auth->restrict();
        $this->set_current_user();
        
        $from_user_id       =   $enc_from_user;
        $to_user_id         =   $enc_to_user;
        $fmsg_id            =   $enc_msg_id;
        
        
        if( ($this->current_user->id != $from_user_id)  &&  ($this->current_user->id != $to_user_id))
        {
            Template::set_message(lang('view_wrong_msg'),'error');
            Template::redirect($login_url);

        }
        
        $message   =   $this->message_model->find($fmsg_id);
        
        $user1                  =   $this->user_model->find($from_user_id);
        $message->from_user     =   $user1->display_name;
        
        
        $user2                  =   $this->user_model->find($to_user_id);
        $message->to_user       =   $user2->display_name;
        
        Template::set('message', $message);
        Template::set('page_title', 'My Inbox Message');
        Template::set_view('messages/view_single_message');
        Template::render('user');
        
    }
    
    
    
    public function compose()
    {
        
        //Restrict the user if he is not logged in
        $this->auth->restrict();
        $this->set_current_user();
        
        Assets::add_js(array('handlebars.js','typeahead_bundle.js'));
        Assets::add_js($this->load->view('messages/validation_js', array(), true), 'inline');
        
        
        Template::set('page_title', 'Compose Message');
        Template::set_view('messages/compose');
        Template::render('user');
        
        
    }
    
    public function myusers()
    {
        $users                  =   $this->user_model->find_all();
        $i  =   0;
        foreach($users as $user)
        {
            $myuser[$i]['value']    =   $user->display_name;
            $i++;
            
        }
        
        echo json_encode($myuser);
        
    }
   

}
