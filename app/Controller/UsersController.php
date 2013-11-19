<?php

class UsersController extends Controller {

function index( ){

}

function agregar(){
         
        //$this->set('carreras', $this->Generacion->Carrera->find('list'));
         
                
                if($this->request->is('post')){
                        
                if ($this->User->save($this->request->data)) {
                                                
                                $this->Session->setFlash('Se ha Guardado el Usuario Exitosamente');
                                $this->redirect(array('action'=>'index'));
                        }
                
                }
        }
		
 function visualizar(){
         
        $this->set('usuarios', $this->User->find('all'));
         
                
        }
        

}
