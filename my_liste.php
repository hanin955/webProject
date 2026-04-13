<?php 
   session_start();
   require_once 'config.php';
   if(!isset($_session['user_id'])){
    die("erreur : vous devez etre connecté");
   }
   $movie_id = $_POST['movie_id'] ?? null;// ?? yremplacer b null
   $user_id = $_session['user_id'];
   if ($movie_id){
    try {
        $sql = "insert into my_liste(user_id,movie_id) values (:user_id , :movie_id";
        $rp = $conn->prepare($sql);
        $rp ->execute ([
            ':user_id'-> $user_id,
            ':movie_id'-> $movie_id
        ]);//plus sécurisée que query 
    }
    echo "le film a été ajouter à votre liste";
   }catch(PDOException $e){
        echo " ce film est déjà dans votre liste";
   }
   }
?>