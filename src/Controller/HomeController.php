<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Home Controller
 */
class HomeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $about = 'Lorem ispum dolor';

        $this->set(compact('about'));
    }
}
