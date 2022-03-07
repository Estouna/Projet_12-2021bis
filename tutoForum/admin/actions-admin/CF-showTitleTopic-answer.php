<?PHP

require('../actions/database.php');

$idOfAnswer = $_GET['id'];

$subject_title = $bdd->prepare(
    'SELECT * FROM questions 
    LEFT JOIN answers ON answers.id_question = questions.id 
    WHERE answers.id = ?'
);

$subject_title->execute(array($idOfAnswer));

$title = $subject_title->fetch();
