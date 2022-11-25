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
     * View method
     *
     * @param string|null $id Comentsgame id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comentsgame = $this->Comentsgames->get($id, [
            'contain' => ['Games', 'Users'],
        ]);

        $this->set(compact('comentsgame'));
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
            if ($this->Comentsgames->save($comentsgame)) {
                $this->Flash->success(__('The comentsgame has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comentsgame could not be saved. Please, try again.'));
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
            if ($this->Comentsgames->save($comentsgame)) {
                $this->Flash->success(__('The comentsgame has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comentsgame could not be saved. Please, try again.'));
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
            $this->Flash->success(__('The comentsgame has been deleted.'));
        } else {
            $this->Flash->error(__('The comentsgame could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
