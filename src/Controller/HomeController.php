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
        $this->viewBuilder()->setLayout('home');
        $article_entity = $this->loadModel('Articles');
        $articles = $article_entity->find('all')
            ->order(['Articles.created_on' => 'DESC'])
            ->limit(5)
            ->contain(['Tags']);
        $this->set(compact('articles'));
    }
}
