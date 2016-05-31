<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Analisedeovos Controller
 *
 * @property \App\Model\Table\AnalisedeovosTable $Analisedeovos */
class AnalisedeovosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('analisedeovos', $this->paginate($this->Analisedeovos));
        $this->set('_serialize', ['analisedeovos']);
    }

    /**
     * View method
     *
     * @param string|null $id Analisedeovo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $analisedeovo = $this->Analisedeovos->get($id, [
            'contain' => []
        ]);
        $this->set('analisedeovo', $analisedeovo);
        $this->set('_serialize', ['analisedeovo']);
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
        
        $analisedeovo = $this->Analisedeovos->newEntity();
        if ($this->request->is('post')) {
            $analisedeovo = $this->Analisedeovos->patchEntity($analisedeovo, $this->request->data);
            if ($this->Analisedeovos->save($analisedeovo)) {
                $ovitrampa->fk_analisedeovos = $analisedeovo->analisedeovosid;
                if ($this->Ovitrampa->save($ovitrampa)) {
                    $this->Flash->success('A análise de ovos foi salva.');
                    return $this->redirect(['controller' => 'ovitrampa', 'action' => 'index']);
                }
                else
                {
                    $this->Flash->error('A análise de ovos não pôde ser salva. Por favor, tente novamente.');
                }
            } else {
                $this->Flash->error('A análise de ovos não pôde ser salva. Por favor, tente novamente.');
            }
        }
        $this->set(compact('analisedeovo'));
        $this->set('_serialize', ['analisedeovo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Analisedeovo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null, $ovitrampa_id = null, $cod_ovitrampa)
    {
        $this->loadModel('Ovitrampa');
        $ovitrampa = $this->Ovitrampa->find('all')->where(['ovitrampaid' => $ovitrampa_id])->first();
        
        $this->set('cod_ovitrampa', $cod_ovitrampa);
        
        $analisedeovo = $this->Analisedeovos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $analisedeovo = $this->Analisedeovos->patchEntity($analisedeovo, $this->request->data);
            if ($this->Analisedeovos->save($analisedeovo)) {
                $this->Flash->success('A análise de ovos foi salva.');
                return $this->redirect(['controller' => 'ovitrampa', 'action' => 'index']);
            } else {
                $this->Flash->error('A análise de ovos não pôde ser salva. Por favor, tente novamente.');
            }
        }
        $this->set(compact('analisedeovo'));
        $this->set('_serialize', ['analisedeovo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Analisedeovo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $analisedeovo = $this->Analisedeovos->get($id);
        if ($this->Analisedeovos->delete($analisedeovo)) {
            $this->Flash->success('The analisedeovo has been deleted.');
        } else {
            $this->Flash->error('The analisedeovo could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
