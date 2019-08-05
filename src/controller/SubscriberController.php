<?php

class SubscribeController {

    public static function list() {

        // 1. Appel du Model
        $subscribes = Subscribe::findAll();

        // 2. Return/include de la view
        include( __DIR__ . '/../views/subscribers/list.php');

    }

    public static function read(int $id) {

        // 1. Appel du Model
        $subscribe = Subscriber::findById($id);
        // 2. Include de la lview

        include(__DIR__ . '/../views/subscribers/read.php');

    }

    public static function create() {
        // include du formulaire qui pointera vers SubscriberController::new
        include(__DIR__ . '/../views/subscribers/new.php');
    }
    public static function new($params) {
        // traitement du formulaire qui vient de SubscriberController::create
        Subscribe::new($params); 
        echo"le subscriber est crée"; 

    }

    public static function edit($id) {
        // 1. Appel du Model
        $subscribe = Subscribe::findById($id);
        // 2. Include de la lview
        
        include(__DIR__ . '/../views/subscribes/update.php');

    }
    public static function update($params) {
        // traitement du formulaire qui vient de SubscribeController::edit
        Subscribe::update($params); 
        echo"le subscriber est modifié"; 
    }

    public static function delete($id) {
        // 1. Appel du Model
        $subscribe = Subscribe::findById($id);
        // 2. Include de la lview
                
        include(__DIR__ . '/../views/subscribes/delete.php');

    }
    public static function todelete($id) {
        // traitement du formulaire qui vient de SubscribeController::delete
        Subscribe::todelete($id); 
        echo"le subscriber est supprimé avec succés"; 
    }

}