<?php
//application/models/Pics_model.php
class Pics_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


public function get_pics($tags = FALSE)
{
        $api_key = $this->config->item('flickrKey');
    
        //SHOULD BE PASSED IN VIA QUERYSTRING/CONTROLLER
        //$tags = 'mariners';
        $perPage = 25;
        $url.= 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
        $url.= '&api_key='.$api_key;
        $url.= '&tags='.$tags;
        $url.= '&per_page='.$perPage;
        $url.= '&format=json';
        $url.= '&nojsoncallback=1';
            
        $reponse = json_decode(file_get_contents($url));
        
        return = $response->photos->photo;
    
    
       /* if ($slug === FALSE)
        {
                $query = $this->db->get('sp19_news');
                return $query->result_array();
        }

        $query = $this->db->get_where('sp19_news', array('slug' => $slug));
        return $query->row_array();
        */
}

}