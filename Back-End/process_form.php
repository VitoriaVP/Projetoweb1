<?php
   //print_r($_GET);
   $nome = $_GET ['nome'];
   $idade = $_GET ['idade'];

   echo '<h1>Dados do Usuário</h1>';
   echo'<hr>';
   echo"<p>O usuário $nome tem $idade anos.</p>";

   echo'<a href="http://localhost/udesc/vitoria/Projeto3/index.html"><button>home page</button></a>';
   echo'<button type="button" onclick="javascript:history.back()">voltar</button>';
   echo'<button onclick="window.location.href=\'https:\\www.udesc.br\'">vai para udesc</button>';
   ?>


