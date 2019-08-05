<?php

class Book extends AbstractDb {

    public static function findAll() {

        $bdd = self::connectDb();

        // 2. request
        $request = 'SELECT * FROM book';

        // 3. execution de la request
        $response = $bdd->query($request);

        // 4. return des données
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById($id) {

        $bdd = self::connectDb();

        $request = 'SELECT * FROM book WHERE id = ' . $id;

        $response = $bdd->query($request);

        return $response->fetch(PDO::FETCH_ASSOC);
    }

    public static function new($params) {

        $bdd = self::connectDb();
        
        $request =$bdd->prepare( 'INSERT INTO book (title,author) VALUES (:title,:author)');
        $request->execute(array(
            'title'=>$params['title'],
            'author'=>$params['author']
        ));
        echo 'Le livre est ajouté :GOOD!';
    }
    public static function update($params) {

        $bdd = self::connectDb();
        
        $request =$bdd->prepare( 'UPDATE book (title,author) VALUES (:title,:author)');
        $request->execute(array(
            'title'=>$params['title'],
            'author'=>$params['author']
        ));
        echo 'Le livre est modifié :GOOD!';
    }
    public static function todelete($id) {

        $bdd = self::connectDb();

        $request = 'DELETE FROM cars WHERE id ="{$id}" LIMIT 1';

        $response = $bdd->query($request);
    }
}