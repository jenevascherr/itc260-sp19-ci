<?php
//application/controllers/Pics.php
class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                /*
                $this->config->set_item('banner','News Section');
                $this->load->model('news_model');
                $this->load->helper('url_helper');
                */
        }

        public function index($tags = 'sounders')
        {

            //$tags = ='sounders';
            $pics = $this->pics_model->get_pics($tags);
            
            foreach($pics as $pic)
                
                $size = 'm';
                $photo_url = 'http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';
            
            echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
        }
    
    
        public function view($slug = NULL)
        {
            /*
            slug without dashes
            use dashless slug for the title
            maybe add, 'News Flash - '
            
            
            
            //slug with out dashes
            $dashless_slug = str_replace("-", " ", $slug);
            //uppercase slug words
            $dashless_slug = ucwords($dashless_slug);
            //use dashless slug for title
            $this->config->set_item('title', 'News Flash - ', $dashless_slug);
            
            $data['news_item'] = $this->news_model->get_news($slug);
        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['title'] = $data['news_item']['title'];
        $this->load->view('news/view', $data);
        */
        }
        
    
    
}
