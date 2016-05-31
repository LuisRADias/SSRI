<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ovitrampa Controller
 *
 * @property \App\Model\Table\OvitrampaTable $Ovitrampa */
class OvitrampaController extends AppController
{
    public function viewAllInfo($id = null)
    {
        $this->loadModel('Analisedeovos');
        $this->loadModel('Analisedeflorescencia');
        $this->loadModel('Identificacaodeespecies');
        
        $ovitrampa = $this->Ovitrampa->get($id, [
            'contain' => []
        ]);
        $this->set('ovitrampa', $ovitrampa);
        $this->set('_serialize', ['ovitrampa']);
        
        if(!is_null($ovitrampa->fk_analisedeovos))
            $ovos = $this->Analisedeovos->find('all')->where(['analisedeovosid' => $ovitrampa->fk_analisedeovos])->first();
        else
            $ovos = null;
        if(!is_null($ovitrampa->fk_analisedeflorescencia))
            $florescencia = $this->Analisedeflorescencia->find('all')->where(['analisedeflorescenciaid' => $ovitrampa->fk_analisedeflorescencia])->first();
        else
            $florescencia = null;
        if(!is_null($ovitrampa->fk_identificacaodeespecies))
            $especies = $this->Identificacaodeespecies->find('all')->where(['identificacaodeespeciesid' => $ovitrampa->fk_identificacaodeespecies])->first();
        else
            $especies = null;
        
        $this->set('ovos', $ovos);
        $this->set('florescencia', $florescencia);
        $this->set('especies', $especies);
    }

    
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('ovitrampa', $this->paginate($this->Ovitrampa));
        $this->set('_serialize', ['ovitrampa']);
    }

    /**
     * View method
     *
     * @param string|null $id Ovitrampa id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ovitrampa = $this->Ovitrampa->get($id, [
            'contain' => []
        ]);
        $this->set('ovitrampa', $ovitrampa);
        $this->set('_serialize', ['ovitrampa']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ovitrampa = $this->Ovitrampa->newEntity();
        if ($this->request->is('post')) {
            $ovitrampa = $this->Ovitrampa->patchEntity($ovitrampa, $this->request->data);
            if ($this->Ovitrampa->save($ovitrampa)) {
                $this->Flash->success('The ovitrampa has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ovitrampa could not be saved. Please, try again.');
            }
        }
        $this->set(compact('ovitrampa'));
        $this->set('_serialize', ['ovitrampa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ovitrampa id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ovitrampa = $this->Ovitrampa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ovitrampa = $this->Ovitrampa->patchEntity($ovitrampa, $this->request->data);
            if ($this->Ovitrampa->save($ovitrampa)) {
                $this->Flash->success('The ovitrampa has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ovitrampa could not be saved. Please, try again.');
            }
        }
        $this->set(compact('ovitrampa'));
        $this->set('_serialize', ['ovitrampa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ovitrampa id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ovitrampa = $this->Ovitrampa->get($id);
        if ($this->Ovitrampa->delete($ovitrampa)) {
            $this->Flash->success('The ovitrampa has been deleted.');
        } else {
            $this->Flash->error('The ovitrampa could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
