<?php

class comentariosController extends Controller {

function index( ){

}

function agregar(){
         
        
         
                
                if($this->request->is('post')){
                        
                if ($this->Comentario->save($this->request->data)) {
                                                
                                $this->Session->setFlash('Se ha Guardado el Comentario Exitosamente');
                                $this->redirect(array('action'=>'index'));
                        }
                
                }
        }
		
		function visualizar(){
         
        $this->set('comentarios', $this->Comentario->find('all'));
         
                
        }

}

?>