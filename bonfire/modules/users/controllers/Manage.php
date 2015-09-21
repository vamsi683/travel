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
class Manage extends Front_Controller
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

        $this->load->model('users/user_model');

        $this->load->library('users/auth');

        $this->lang->load('users');
        $this->siteSettings = $this->settings_lib->find_all();
        Template::set_theme('admin');
    }

    
    public function users()
    {
        $this->auth->restrict();
        $this->set_current_user();
        
         Assets::add_css(array('jquery.dataTables.css', 'dataTables.responsive.css'));
	    Assets::add_js(array('jquery.dataTables.js','dataTables.bootstrap.js','dataTables.responsive.js'));  
        Assets::add_module_js('users', 'manage_users.js');
        Template::set_view('manage/user_list');
        Template::render('user');
    }
    
    
    
     /* Display User Messages AJAX */
    public function ajax_display_list()
    {
        $this->auth->restrict();
        $this->set_current_user();
        
        
        $this->load->library('datatables');
		$this->datatables
			->select('id,display_name,email,active')
			->from('users');
		
		$this->datatables->add_column('active', '$1', 'active',array($this,'callback_active'));	
		echo $this->datatables->generate();
        
        
    }

    
    public function callback_active($key,$row)
	{
		if($row['active'])
            return 'Active';
        else
            return 'Inactive';
	}
}
