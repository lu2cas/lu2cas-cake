<?php
namespace App\Controller;

use App\Controller\AppController;
use \Cake\Datasource\Exception\RecordNotFoundException;
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
     * @param string|null $slug Article slug.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($slug = null)
    {
        $this->viewBuilder()->setLayout('article');
        $article = $this->Articles->find('all')
            ->where(['slug' => $slug])
            ->limit(1)
            ->contain(['Tags'])
            ->first();

        if (is_null($article)) {
            throw new RecordNotFoundException("Artigo não encontrado!", 404);
        }
        $this->set('article', $article);
    }
}
