<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Identificacaodeespecies Controller
 *
 * @property \App\Model\Table\IdentificacaodeespeciesTable $Identificacaodeespecies */
class IdentificacaodeespeciesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('identificacaodeespecies', $this->paginate($this->Identificacaodeespecies));
        $this->set('_serialize', ['identificacaodeespecies']);
    }

    /**
     * View method
     *
     * @param string|null $id Identificacaodeespecy id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $identificacaodeespecy = $this->Identificacaodeespecies->get($id, [
            'contain' => []
        ]);
        $this->set('identificacaodeespecy', $identificacaodeespecy);
        $this->set('_serialize', ['identificacaodeespecy']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($ovitrampa_id = null, $cod_ovitrampa)
    {
        $this->loadModel('Ovitrampa');
        $ovitrampa = $this->Ovitrampa->find('all')->where(['ovitrampaid' => $ovitrampa_id])->first();
        
        $this->set('cod_ovitrampa', $cod_ovitrampa);
        
        $identificacaodeespecy = $this->Identificacaodeespecies->newEntity();
        if ($this->request->is('post')) {
            $identificacaodeespecy = $this->Identificacaodeespecies->patchEntity($identificacaodeespecy, $this->request->data);
            if ($this->Identificacaodeespecies->save($identificacaodeespecy)) {
                $ovitrampa->fk_identificacaodeespecies = $identificacaodeespecy->identificacaodeespeciesid;
                if ($this->Ovitrampa->save($ovitrampa)) {
                    $this->Flash->success('A identificação de espécies foi salva.');
                    return $this->redirect(['controller' => 'ovitrampa', 'action' => 'index']);
                }
                else
                {
                    $this->Flash->error('A identificação de espécies não pôde ser salva. Por favor, tente novamente.');
                }
            } else {
                $this->Flash->error('A identificação de espécies não pôde ser salva. Por favor, tente novamente.');
            }
        }
        $this->set(compact('identificacaodeespecy'));
        $this->set('_serialize', ['identificacaodeespecy']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Identificacaodeespecy id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null, $ovitrampa_id = null, $cod_ovitrampa)
    {       
        $this->set('cod_ovitrampa', $cod_ovitrampa);
        
        $identificacaodeespecy = $this->Identificacaodeespecies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $identificacaodeespecy = $this->Identificacaodeespecies->patchEntity($identificacaodeespecy, $this->request->data);
            if ($this->Identificacaodeespecies->save($identificacaodeespecy)) {
                $this->Flash->success('A identificação de espécies foi salva.');
                return $this->redirect(['controller' => 'ovitrampa', 'action' => 'index']);
            } else {
               $this->Flash->error('A identificação de espécies não pôde ser salva. Por favor, tente novamente.');
            }
        }
        $this->set(compact('identificacaodeespecy'));
        $this->set('_serialize', ['identificacaodeespecy']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Identificacaodeespecy id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $identificacaodeespecy = $this->Identificacaodeespecies->get($id);
        if ($this->Identificacaodeespecies->delete($identificacaodeespecy)) {
            $this->Flash->success('The identificacaodeespecy has been deleted.');
        } else {
            $this->Flash->error('The identificacaodeespecy could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
