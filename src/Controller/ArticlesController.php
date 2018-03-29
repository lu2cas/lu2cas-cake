<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null)
    {
        $this->viewBuilder()->setLayout('article');
        try {
            $article = $this->Articles->find('all')
                ->where(['slug' => $slug])
                ->limit(1)
                ->contain(['Tags'])
                ->first();
        } catch(Exception $e) {
            // @todo Throw flash message
            return false;
        }
        $this->set('article', $article);
    }
}
