<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Comentsgames Controller
 *
 * @property \App\Model\Table\ComentsgamesTable $Comentsgames
 * @method \App\Model\Entity\Comentsgame[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComentsgamesController extends AppController
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
            'contain' => ['Games', 'Users'],
        ];
        $comentsgames = $this->paginate($this->Comentsgames);

        $this->set(compact('comentsgames'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comentsgame = $this->Comentsgames->newEmptyEntity();
        if ($this->request->is('post')) {
            $comentsgame = $this->Comentsgames->patchEntity($comentsgame, $this->request->getData());
            $comentsgame->user_id = $this->Authentication->getResult()->getData()->id;
            if ($this->Comentsgames->save($comentsgame)) {
                $this->Flash->success(__('El comentario sobre el juego se ha añadido con éxito'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El comentario sobre el juego no se ha podido añadir, porfavor, inténtelo de nuevo'));
        }
        $games = $this->Comentsgames->Games->find('list', ['limit' => 200])->all();
        $users = $this->Comentsgames->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('comentsgame', 'games', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comentsgame id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comentsgame = $this->Comentsgames->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comentsgame = $this->Comentsgames->patchEntity($comentsgame, $this->request->getData());
            $comentsgame->user_id = $this->Authentication->getResult()->getData()->id;
            if ($this->Comentsgames->save($comentsgame)) {
                $this->Flash->success(__('El comentario sobre el juego se ha editado con éxito'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El comentario sobre el juego no se ha podido editar, porfavor, inténtelo de nuevo'));
        }
        $games = $this->Comentsgames->Games->find('list', ['limit' => 200])->all();
        $users = $this->Comentsgames->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('comentsgame', 'games', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comentsgame id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comentsgame = $this->Comentsgames->get($id);
        if ($this->Comentsgames->delete($comentsgame)) {
            $this->Flash->success(__('El comentario sobre el juego se ha eliminado con éxito'));
        } else {
            $this->Flash->error(__('El comentario sobre el juego no se ha podido añadir, porfavor, inténtelo de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
