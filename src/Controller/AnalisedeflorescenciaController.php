<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Analisedeflorescencia Controller
 *
 * @property \App\Model\Table\AnalisedeflorescenciaTable $Analisedeflorescencia */
class AnalisedeflorescenciaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('analisedeflorescencia', $this->paginate($this->Analisedeflorescencia));
        $this->set('_serialize', ['analisedeflorescencia']);
    }

    /**
     * View method
     *
     * @param string|null $id Analisedeflorescencium id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $analisedeflorescencium = $this->Analisedeflorescencia->get($id, [
            'contain' => []
        ]);
        $this->set('analisedeflorescencium', $analisedeflorescencium);
        $this->set('_serialize', ['analisedeflorescencium']);
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
        
        $analisedeflorescencium = $this->Analisedeflorescencia->newEntity();
        if ($this->request->is('post')) {
            $analisedeflorescencium = $this->Analisedeflorescencia->patchEntity($analisedeflorescencium, $this->request->data);
            if ($this->Analisedeflorescencia->save($analisedeflorescencium)) {
                $ovitrampa->fk_analisedeflorescencia = $analisedeflorescencium->analisedeflorescenciaid;
                if ($this->Ovitrampa->save($ovitrampa)) {
                    $this->Flash->success('A análise de florescência foi salva.');
                    return $this->redirect(['controller' => 'ovitrampa', 'action' => 'index']);
                }
                else
                {
                    $this->Flash->error('A análise de florescência não pôde ser salva. Por favor, tente novamente.');
                }
            } else {
                $this->Flash->error('A análise de florescência não pôde ser salva. Por favor, tente novamente.');
            }
        }
        $this->set(compact('analisedeflorescencium'));
        $this->set('_serialize', ['analisedeflorescencium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Analisedeflorescencium id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null, $ovitrampa_id = null, $cod_ovitrampa)
    {
        $this->loadModel('Ovitrampa');
        $ovitrampa = $this->Ovitrampa->find('all')->where(['ovitrampaid' => $ovitrampa_id])->first();
        
        $this->set('cod_ovitrampa', $cod_ovitrampa);
        
        $analisedeflorescencium = $this->Analisedeflorescencia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $analisedeflorescencium = $this->Analisedeflorescencia->patchEntity($analisedeflorescencium, $this->request->data);
            if ($this->Analisedeflorescencia->save($analisedeflorescencium)) {
                $this->Flash->success('A análise de florescência foi salva.');
                return $this->redirect(['controller' => 'ovitrampa', 'action' => 'index']);
            } else {
                $this->Flash->error('A análise de florescência não pôde ser salva. Por favor, tente novamente.');
            }
        }
        $this->set(compact('analisedeflorescencium'));
        $this->set('_serialize', ['analisedeflorescencium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Analisedeflorescencium id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $analisedeflorescencium = $this->Analisedeflorescencia->get($id);
        if ($this->Analisedeflorescencia->delete($analisedeflorescencium)) {
            $this->Flash->success('The analisedeflorescencium has been deleted.');
        } else {
            $this->Flash->error('The analisedeflorescencium could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
