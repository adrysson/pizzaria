<?php
namespace App\Controller\V1;

use App\Controller\AppController;

/**
 * PizzasTamanhos Controller
 *
 * @property \App\Model\Table\PizzasTamanhosTable $PizzasTamanhos
 *
 * @method \App\Model\Entity\PizzasTamanho[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PizzasTamanhosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tamanhos = $this->paginate($this->PizzasTamanhos);

        $this->set([
            'tamanhos' => $tamanhos,
            '_serialize' => ['tamanhos'],
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Pizzas Tamanho id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tamanho = $this->PizzasTamanhos->get($id, [
            'contain' => []
        ]);

        $this->set([
            'tamanho' => $tamanho,
            '_serialize' => ['tamanho'],
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tamanho = $this->PizzasTamanhos->newEntity();
        if ($this->request->is('post')) {
            $tamanho = $this->PizzasTamanhos->patchEntity($tamanho, $this->request->getData());
            if ($this->PizzasTamanhos->save($tamanho)) {
                return $this->response->withStringBody(__('O tamanho de pizza foi salvo com sucesso.'));
            }
            $this->response = $this->response->withStatus(422);
            $this->set([
                'errors' => $tamanho->getErrors(),
                '_serialize' => ['errors'],
            ]);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Pizzas Tamanho id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tamanho = $this->PizzasTamanhos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'put'])) {
            $tamanho = $this->PizzasTamanhos->patchEntity($tamanho, $this->request->getData());
            if ($this->PizzasTamanhos->save($tamanho)) {
                return $this->response->withStringBody(__('O tamanho de pizza foi salvo com sucesso.'));
            }
            $this->response = $this->response->withStatus(422);
            $this->set([
                'errors' => $tamanho->getErrors(),
                '_serialize' => ['errors'],
            ]);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Pizzas Tamanho id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['delete']);
        $tamanho = $this->PizzasTamanhos->get($id);
        if ($this->PizzasTamanhos->delete($tamanho)) {
            return $this->response->withStatus(204);
        }
        return $this->response->withStatus(400)->withStringBody(__('Não foi possível apagar o tamanho de pizza. Tente novamente.'));
    }
}
