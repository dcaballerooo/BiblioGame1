<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Games Controller
 *
 * @property \App\Model\Table\GamesTable $Games
 * @method \App\Model\Entity\Game[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GamesController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
      {
          parent::beforeFilter($event);
          // Configure the login action to not require authentication, preventing
          // the infinite redirect loop issue
         $this->Authentication->addUnauthenticatedActions(['index', 'view']);
      }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $games = $this->paginate($this->Games);

        $this->set(compact('games'));
    }

    /**
     * View method
     *
     * @param string|null $id Game id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $game = $this->Games->get($id, [
            'contain' => ['Users', 'Comentsgames'],
        ]);

        $this->set(compact('game'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $game = $this->Games->newEmptyEntity();
        if ($this->request->is('post')) {
            $game = $this->Games->patchEntity($game, $this->request->getData());
            if ($this->Games->save($game)) {
                $this->Flash->success(__('El juego se ha añadido con éxito'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El juego no se ha podido añadir, porfavor inténtelo de nuevo'));
        }
        $users = $this->Games->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('game', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Game id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $game = $this->Games->get($id, [
            'contain' => ['Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $game = $this->Games->patchEntity($game, $this->request->getData());
            if ($this->Games->save($game)) {
                $this->Flash->success(__('El juego se ha editado con éxito'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El juego no se ha podido editar, porfavor inténtelo de nuevo'));
        }
        $users = $this->Games->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('game', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Game id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $game = $this->Games->get($id);
        if ($this->Games->delete($game)) {
            $this->Flash->success(__('El juego se ha eliminado con éxito'));
        } else {
            $this->Flash->error(__('El juego no se ha podido eliminar, porfavor inténtelo de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
