<?php
class Pages extends CI_Controller {

       public function view($page = 'home')//si view() pas renseigner on affiche le fichier home
{
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data); // on met 2 arguments ici alors que dans la fct on en attend qu'une
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
}


}