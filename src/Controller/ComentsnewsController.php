<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Comentsnews Controller
 *
 * @property \App\Model\Table\ComentsnewsTable $Comentsnews
 * @method \App\Model\Entity\Comentsnews[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComentsnewsController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
      {
          parent::beforeFilter($event);
          // Configure the login action to not require authentication, preventing
          // the infinite redirect loop issue
         $this->Authentication->addUnauthenticatedActions(['index']);
      }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['News', 'Users'],
        ];
        $comentsnews = $this->paginate($this->Comentsnews);

        $this->set(compact('comentsnews'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comentsnews = $this->Comentsnews->newEmptyEntity();
        if ($this->request->is('post')) {
            $comentsnews = $this->Comentsnews->patchEntity($comentsnews, $this->request->getData());
            $comentsnews->user_id = $this->Authentication->getResult()->getData()->id;
            if ($this->Comentsnews->save($comentsnews)) {
                $this->Flash->success(__('El comentario sobre la noticia se ha añadido con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido añadir tu comentario, porfavor intentelo de nuevo.'));
        }
        $news = $this->Comentsnews->News->find('list', ['limit' => 200])->all();
        $users = $this->Comentsnews->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('comentsnews', 'news', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comentsnews id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comentsnews = $this->Comentsnews->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comentsnews = $this->Comentsnews->patchEntity($comentsnews, $this->request->getData());
            $comentsnews->user_id = $this->Authentication->getResult()->getData()->id;
            if ($this->Comentsnews->save($comentsnews)) {
                $this->Flash->success(__('El comentario sobre la noticia se ha editado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido editar tu comentario, porfavor intentelo de nuevo.'));
        }
        $news = $this->Comentsnews->News->find('list', ['limit' => 200])->all();
        $users = $this->Comentsnews->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('comentsnews', 'news', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comentsnews id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comentsnews = $this->Comentsnews->get($id);
        if ($this->Comentsnews->delete($comentsnews)) {
            $this->Flash->success(__('El comentario sobre la noticia se ha eliminado con éxito.'));
        } else {
            $this->Flash->error(__('No se ha podido eliminar tu comentario, porfavor intentelo de nuevo..'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
