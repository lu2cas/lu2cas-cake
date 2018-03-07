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
        $articles = [
            0 => [
                'title' => 'Lorem ipsum dolor sit amet consectetur',
                'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc egestas leo sit amet neque aliquam, in congue metus vehicula. Nullam rutrum nec libero at iaculis.',
                'date' => '01 de janeiro de 2018',
                'slug' => 'lorem-ipsum-dolor-sit-amet-consectetur'
            ]
        ];

        $this->set(compact('articles'));
    }
}
