<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UsersGames Controller
 *
 * @property \App\Model\Table\UsersGamesTable $UsersGames
 * @method \App\Model\Entity\UsersGame[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersGamesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Games'],
        ];
        $usersGames = $this->paginate($this->UsersGames);

        $this->set(compact('usersGames'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Game id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersGame = $this->UsersGames->get($id, [
            'contain' => ['Users', 'Games'],
        ]);

        $this->set(compact('usersGame'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersGame = $this->UsersGames->newEmptyEntity();
        if ($this->request->is('post')) {
            $usersGame = $this->UsersGames->patchEntity($usersGame, $this->request->getData());
            if ($this->UsersGames->save($usersGame)) {
                $this->Flash->success(__('The users game has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users game could not be saved. Please, try again.'));
        }
        $users = $this->UsersGames->Users->find('list', ['limit' => 200])->all();
        $games = $this->UsersGames->Games->find('list', ['limit' => 200])->all();
        $this->set(compact('usersGame', 'users', 'games'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Game id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersGame = $this->UsersGames->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersGame = $this->UsersGames->patchEntity($usersGame, $this->request->getData());
            if ($this->UsersGames->save($usersGame)) {
                $this->Flash->success(__('The users game has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users game could not be saved. Please, try again.'));
        }
        $users = $this->UsersGames->Users->find('list', ['limit' => 200])->all();
        $games = $this->UsersGames->Games->find('list', ['limit' => 200])->all();
        $this->set(compact('usersGame', 'users', 'games'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Game id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersGame = $this->UsersGames->get($id);
        if ($this->UsersGames->delete($usersGame)) {
            $this->Flash->success(__('The users game has been deleted.'));
        } else {
            $this->Flash->error(__('The users game could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
