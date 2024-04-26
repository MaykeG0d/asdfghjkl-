<?php

require_once 'config.php';




if($_SERVER["REQUEST_METHOD"] == "POST"){

    


    $sql = "SELECT * FROM mensagens ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

}
?>








<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="paraophp.css">
</head>
<body>
    <header> 
    <div class="ticom">
        <h1 class="titulo">Carta Aberta onde você pode</h1><h1 class="titulo">escrever qualquer coisa que</h1> <h1 class="titulo">vier na mente</h1>
    </div>
    </header>
    <section class="escrever">
        
        <form  autocomplete="off" method="post" action="enviareiando.php">
            <div class="input-single"> 
                <label for="textao"></label>
                <textarea class="input" name="textin" rows="4" maxlength="300" cols="50" id="textao" required></textarea> <br>
                <div class="botoes">
                
                <input class="titulo improviso submit enviar" type="submit" onclick="exibiralerta()">


                
            
        </form>
        <form  autocomplete="off" method="post">
                <input class="titulo improviso submit enviar" type="submit" name="ler" value="Ler" id="btn-msg">
                </form>
                </div>
                </div>
    </section>







<section class="">




<div class="mensagens" >
    <?php
    if(isset($result) && $result->num_rows >0)
    ?>

<h2 class="mmssgg titulo" >Mensagens...</h2>



<ul class="submitd">

<?php while($row = $result ->fetch_assoc()) :?>
         <?php echo $row["mensagem"]; ?> <br>
         <?php echo $row["data"]; ?> <br>

    <?php endwhile; ?>

</ul>

</div>

</section>










<section>
        <div class="imagenss">
            
        
            
            <div class="doando">

             <div class="pre-spoiler">
                 <input id="xs" value="Leia Mais" style="margin-left: 50px; padding: 0px; width: 80px; " onclick="if (this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = '';this.innerText = ''; this.value = 'Ocultar'; } else { this.parentNode.parentNode.getElementsByTagName('div')[1].getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Leia Mais';}" type="button"> </div>
              <div>
                 <div class="spoiler" style="display: none;">
                 <p class="titulo" >Doação</p>    <img class="img qrducode" src="imagens/QR code do site.png.png" alt="">
                    <div class="box-frases">

                        <div class="texto" id="1">00020126400014br.gov.bcb.pix0111102751449920203***5204000053039865802BR5903PIX6006CIDADE62070503***6304998F</div> 
                        <button class="btnCopi" type="button" onclick="CopyTexto('1')">Copiar</button>
                    
                    </div> 
              </div>
              </div>



        

 
        </div>
        <img class="img instan" src="imagens/insta.png" alt="">
        </div>
    </section>

    <script src="java.js"></script>
    
</body>
</html>