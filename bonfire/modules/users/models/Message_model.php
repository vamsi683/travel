<?php defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications.
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2015, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

/**
 * User Model.
 *
 * The central way to access and perform CRUD on users.
 *
 * @package Bonfire\Modules\Users\Models\User_model
 * @author  Bonfire Dev Team
 * @link    http://cibonfire.com/docs/developer
 */
class Message_model extends BF_Model
{
    /** @var string Name of the users table. */
    protected $table_name = 'messages';
    /** @var boolean Use soft deletes or not. */
    protected $soft_deletes = true;

    /** @var string The date format to use. */
    protected $date_format = 'datetime';

    /** @var boolean Set the modified time automatically. */
    protected $set_modified = false;

    /** @var boolean Skip the validation. */
    protected $skip_validation = true;

    //--------------------------------------------------------------------------

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Find a user's record and role information.
     *
     * @param integer $id The user's ID.
     *
     * @return boolean|object An object with the user's information.
     */
    public function find($id = null)
    {

        return parent::find($id);
    }

    /**
     * Find all user records and the associated role information.
     *
     * @return boolean An array of objects with each user's information.
     */
    public function find_all()
    {

        return parent::find_all();
    }

    /**
     * Find a single user based on a field/value match, including role information.
     *
     * @param string $field The field to match. If 'both', attempt to find a user
     * with the $value field matching either the username or email.
     * @param string $value The value to search for.
     * @param string $type  The type of where clause to create ('and' or 'or').
     *
     * @return boolean|object An object with the user's info, or false on failure.
     */
    public function find_by($field = null, $value = null, $type = 'and')
    {

        return parent::find_by($field, $value, $type);
    }

   
}
//end User_model
