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
     * View method
     *
     * @param string|null $id Comentsnews id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comentsnews = $this->Comentsnews->get($id, [
            'contain' => ['News', 'Users'],
        ]);

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
            if ($this->Comentsnews->save($comentsnews)) {
                $this->Flash->success(__('The comentsnews has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comentsnews could not be saved. Please, try again.'));
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
            if ($this->Comentsnews->save($comentsnews)) {
                $this->Flash->success(__('The comentsnews has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comentsnews could not be saved. Please, try again.'));
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
            $this->Flash->success(__('The comentsnews has been deleted.'));
        } else {
            $this->Flash->error(__('The comentsnews could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
