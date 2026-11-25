<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Datasets Controller
 *
 * @property \App\Model\Table\DatasetsTable $Datasets
 */
class DatasetsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Datasets->find();
        $datasets = $this->paginate($query);

        $this->set(compact('datasets'));
    }

    /**
     * View method
     *
     * @param string|null $id Dataset id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dataset = $this->Datasets->get($id, contain: []);
        $this->set(compact('dataset'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dataset = $this->Datasets->newEmptyEntity();
        if ($this->request->is('post')) {
            $dataset = $this->Datasets->patchEntity($dataset, $this->request->getData());
            if ($this->Datasets->save($dataset)) {
                $this->Flash->success(__('The dataset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dataset could not be saved. Please, try again.'));
        }
        $this->set(compact('dataset'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dataset id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dataset = $this->Datasets->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dataset = $this->Datasets->patchEntity($dataset, $this->request->getData());
            if ($this->Datasets->save($dataset)) {
                $this->Flash->success(__('The dataset has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dataset could not be saved. Please, try again.'));
        }
        $this->set(compact('dataset'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dataset id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dataset = $this->Datasets->get($id);
        if ($this->Datasets->delete($dataset)) {
            $this->Flash->success(__('The dataset has been deleted.'));
        } else {
            $this->Flash->error(__('The dataset could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
