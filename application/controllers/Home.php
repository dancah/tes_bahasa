
    <?php
    if (!defined('BASEPATH'))exit('No direct script access allowed');
class Home extends CI_Controller {
		public function __construct() {
            parent::__construct();

        }
        //
				public function index() {
             $data = array();
             $data['metaDescription'] = 'Multi-Language implementation in CodeIgniter';
             $data['metaKeywords'] = 'Multi-Language implementation in CodeIgniter';
             $data['title'] = "Multi-Language implementation in CodeIgniter - TECHARISE";
             $this->load->view('index', $data);
         }
    }
    ?>
