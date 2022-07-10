<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TipoPase Controller
 *
 * @property \App\Model\Table\TipoPaseTable $TipoPase
 * @method \App\Model\Entity\TipoPase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoPaseController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoPase = $this->paginate($this->TipoPase);

        $this->set(compact('tipoPase'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Pase id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoPase = $this->TipoPase->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipoPase'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoPase = $this->TipoPase->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoPase = $this->TipoPase->patchEntity($tipoPase, $this->request->getData());
            if ($this->TipoPase->save($tipoPase)) {
                $this->Flash->success(__('The tipo pase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo pase could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoPase'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Pase id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoPase = $this->TipoPase->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoPase = $this->TipoPase->patchEntity($tipoPase, $this->request->getData());
            if ($this->TipoPase->save($tipoPase)) {
                $this->Flash->success(__('The tipo pase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo pase could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoPase'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Pase id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoPase = $this->TipoPase->get($id);
        if ($this->TipoPase->delete($tipoPase)) {
            $this->Flash->success(__('The tipo pase has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo pase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
