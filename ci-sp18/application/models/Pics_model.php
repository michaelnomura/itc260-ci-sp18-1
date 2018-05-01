<?php
//application/Pics_model.php
class Pics_model extends CI_Model {

    public function __construct()
    {
        
    }
    
    public function get_pics($slug = FALSE)
    {//gets pics from database
        
        $api_key = '84925bd36a51db959e92216d3b61e115';
        
        //$slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $tags = $slug;

        $perPage = 25;
        $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
        $url.= '&api_key=' . $api_key;
        $url.= '&tags=' . $tags;
        $url.= '&per_page=' . $perPage;
        $url.= '&format=json';
        $url.= '&nojsoncallback=1';
        $response = json_decode(file_get_contents($url));
        $pics = $response->photos->photo;
        return $pics;

        
        //$query = $this->db->get_where('sp18_news', array('slug' => $slug));
        //return $query->row_array();
    }//end get_pics()
    
    public function set_tags()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('tags'), 'dash', TRUE);

        /*$data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
        */

        return $slug;

    }//end set_news()
    

    
    
}//end News_model