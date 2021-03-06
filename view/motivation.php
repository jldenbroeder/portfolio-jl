<?php 
$title = "Jean Luc Denbroeder, Designer & WebDeveloper - Accueil"; 
$description = "Présentation de mon parcours ent tant que Designer expérimenté et mes compétences en développement."; 
?>

<?php ob_start(); ?>

<!-- ZONE A PERSONNALISER -->

<section>
  <article>
    <p>Madame, Monsieur,</p>
    <p>
      Dans le cadre de ma formation de Web Développeur chez BeCode.org, je souhaite effectuer un stage d'un mois ou plus à partir de début juin 2018.
Le but du stage est de me permettre de mettre en pratique toutes mes connaissances acquises et ce dans une équipe professionnelle.
    </p><p>
    J'ai de très bonnes connaissances du HTML, CSS (FlexBox et Grid Layout), ainsi que PHP + MySQL (PDO/CRUD), à cela s'ajoute de bonnes notions en JS, DOM, jQuery, Canvas, MVC, Git & Github...
    </p><p>
    L'utilisation du CMS WordPress, du thème DIVI et de SmartSlider n'ont plus de secret pour moi.
    </p>
    <p>Actuellement, je m'intéresse à la POO et à l'utilisation de Frameworks.</p>
    <p>
    Je tiens aussi à rajouter qu’en tant qu’infographiste professionnel, je maîtrise très bien les outils graphiques tels
qu'Adobe Photoshop, Illustrator et InDesign et que mon expérience et ma créativité originale en tant que Designer est un atout supplémentaire.
    </p><p>
    <a href="?page=portfolio">Je vous invite a consulter mes dernières réalisation de sites WordPress.</a></p><p>En vous remerciant de l'attention que vous avez portée à ma demande, je vous prie de croire,
    Monsieur, en l'expression de ma parfaite considération.</p>
  </article>
  <aside>
    <?php include('aside-passion.php'); ?>
    <?php include('aside-cv.php'); ?>
    <?php include('aside-documents.php'); ?>
    <div>&nbsp;</div>
    <div></div>
  </aside>
</section>
<img src="assets/img/foot-ecriture.jpg" alt="Mon expérience en Infographie et mes connaissances en WebDéveloppement, un principal atout pour la création Web.">
<!-- FIN DE ZONE A PERSONNALISER -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
