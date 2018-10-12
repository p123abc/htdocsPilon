<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Profils Controller
 *
 * @property \App\Model\Table\ProfilsTable $Profils
 *
 * @method \App\Model\Entity\Profil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfilsController extends AppController
{
        public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        // Les actions 'add' et 'tags' sont toujours autorisés pour les utilisateur
        // authentifiés sur l'application
        if (in_array($action, ['add'])) {
            return true;
        }
        
        if (in_array($action, ['delete'])) {
            return false;
        }

        // Toutes les autres actions nécessitent un slug
        $id = $this->request->getParam('pass.0');
        if (!$id) {
            return false;
        }

        // On vérifie que l'article appartient à l'utilisateur connecté
        $profil = $this->Profils->findById($id)->first();
        if ($user['type'] === 'admin' ) {
            return true;
        }else {
            return $profil->user_id === $user['id'];
        }
        
        
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $profils = $this->paginate($this->Profils);

        $this->set(compact('profils'));
    }

    /**
     * View method
     *
     * @param string|null $id Profil id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profil = $this->Profils->get($id, [
            'contain' => ['Users', 'Owners']
        ]);

        $this->set('profil', $profil);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profil = $this->Profils->newEntity();
        if ($this->request->is('post')) {
            $profil = $this->Profils->patchEntity($profil, $this->request->getData());
            if ($this->Profils->save($profil)) {
                $this->Flash->success(__('The profil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profil could not be saved. Please, try again.'));
        }
        $users = $this->Profils->Users->find('list', ['limit' => 200]);
        $this->set(compact('profil', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profil id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profil = $this->Profils->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profil = $this->Profils->patchEntity($profil, $this->request->getData());
            if ($this->Profils->save($profil)) {
                $this->Flash->success(__('The profil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profil could not be saved. Please, try again.'));
        }
        $users = $this->Profils->Users->find('list', ['limit' => 200]);
        $this->set(compact('profil', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profil id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profil = $this->Profils->get($id);
        if ($this->Profils->delete($profil)) {
            $this->Flash->success(__('The profil has been deleted.'));
        } else {
            $this->Flash->error(__('The profil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
