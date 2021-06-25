<p>coucou je suis home</p>

<!---ICI C'EST LA VUE ELLE SERT A L'AFFICHAGE ET SE CONTENTE DE RECUPERER DES VARIABLES POUR SAVOIR CE QU'ELLE DOIT AFFICHER --->

<h3><?php echo $message ?></h3>

<h3>MVC : Model Vue Controller -></h3>

<h4>-Un modèle (Model) contient les données à afficher.<br>
-Une vue (View) contient la présentation de l'interface graphique.<br>
-Un contrôleur (Controller) contient la logique concernant les actions effectuées par l'utilisateur.</h4>

<hr>

<h3>1. Commencer par le connexion à la base de données dans un fichier Database.php<br>qui contiendra une class avec une function public static getPdo.<br>
<br>
2. Ensuite Crée un dossier Model qui contiendra un fichier Model.php<br>qui contiendra une class abstraite Model avec une methode protected $pdo<br> qui est nommée comme dans la methode getPdo dans Database.php 
<br>+ declarer une methode protected $table qui contiendra les noms des tables dans la base de données <br>dans les Model differents exemples : protected $table = "gateaux";<br>
dans la function __construct() instancier la class Database : $this->pdo = \Database::getPdo();<br>
Ensuite dans le reste du fichier Model il contiendra les requêtes générale pour recuper  </h3>







<h5><?php echo $messageChanger ?></h5>

<form action="index.php" method="post">

<input class="m-5" name="messageChanger" type="text" placeholder="Entrer ici votre  message"> 

<button class="btn btn-success" type="submit">Envoyer</button>


</form>