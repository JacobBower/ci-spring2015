<?php
/**
 * customer.php controller for a generic Customer
 * 
 * Used to show how to do CRUD in CodeIgniter
 * 
 * @package ITC260
 * @subpackage Customer
 * @author Jacob <bower.jacob@gmail.com>
 * @version 1.0 2015/04/30 
 * @link http://www.jacobbower.com/ 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see Customer_model.php
 * @see index.php
 * @todo none
 */

/**
 * Customer controller for out CRUD demo 
 *
 * @see Customer_model
 * todo done
 */

class Customer extends CI_Controller {
	
/**
* Loads default data into object
*
* Added in v3 - Result object
*
* @param none 
* @return void
 * @todo none
 */

        public function __construct()
        {//everything here is global to all methods in the controller
                parent::__construct();
               // $this->load->model('news_model');
				//$this->config->set_item('banner', 'Rss News Banner');
        }#end constuctor()
		
/**
* Shows initioal Customer Database data
*
* @param none
* @return void
* @todo none
*/
		
		public function index()
		{
			//$data['news'] = $this->news_model->get_news();
			$data['title'] = 'Customer';
			$this->load->view('customer/index', $data);
		}#end index()*/
		
}