
<html>
<head>
    <title>Exercicio 1</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
$(document).ready(function(){

    $.get("calculadora.php", function(resultado){
             $("#MASCARA").html(resultado);
         });

    </script>
</head>

<body>

<div id="div1">
    <h2>CALCULADORA DE IP</h2>
</div>


<input id="IP" placeholder="Informe o IP" type="text"> <br>

<input id="MASCARA" placeholder="Informe a mascara" type="text"> <br>

<button id="bt">Enviar</button>



</body>

</html>