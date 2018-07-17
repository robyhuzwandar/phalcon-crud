<?php

class KomunitasController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$komunitas =  new Komunitas();
        $this->view->data = $komunitas->find();
    }

    public function createAction()
    {

    }

   public function storeAction()
   {
       $komunitas = new Komunitas();


      $save =  $komunitas->save(
        $this->request->getPost(),
         [
         "name",
         "contact",
         ]
        );

      if (isset($save)) {
        echo "Berhasil";
      }else{
        $data = "Data gagal di simpan";
      }

      $this->view->data = $data;
      return $this->response->redirect('/phalcon/crud1/komunitas/create');
   }

   public function deleteAction($id)
   {
      $komunitas = new Komunitas();
      $data = $komunitas->findFirst($id);
      $data->delete();
      return $this->response->redirect('/phalcon/crud1/komunitas');
   }

   public function editAction()
   {
      $komunitas = new Komunitas();
      $data = $komunitas->findFirst($id);

      $this->view->data = $data;
   }


   public function updateAction()
   {
      $komunitas = new Komunitas();      
      $array = $this->request->getPost();
      $data = $komunitas->findFirst($array['id']);

      $data->assign($array);
      $data->save();

      return $this->response->redirect('/phalcon/crud1/komunitas/');
      
   }
}

