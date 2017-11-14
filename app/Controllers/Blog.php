<?php

use uFrame\Controller;

class Blog extends Controller
{

    public function index()
    {
        //show all blog records
        $blogModel = $this->model("BlogModel");

        $data['postList'] = $blogModel->getAll();

        $this->view("blog/list", $data);

    }

    public function show($page_name = "Home")
    {
        // show single blog post by ID

        $pageModel = $this->model("PageModel");

        $data['page'] = $pageModel->getPage($page_name);

        $this->view("blog/single", $data);
        
    }

}
