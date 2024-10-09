<html>
    <head>
        <title>Ejemplo usando PHP</title>
        <style type="text/css">
            p {color: white;}
            .contenedor{ 
                background-color: green;
                width: 400px;
                text-align: center;
                margin: auto;
                padding: 15px;
                border-radius: 10px;
                border: 2px solid black;
            }
            .contenedor2{
                background-color: aquamarine;
                width: 400px;
                margin: auto;
                padding: 15px;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 10px;
                border-radius: 10px;
                border: 2px solid black;
            }
            img {
                height: 175px;
            }
            :hover.contenedor2{
                background-color: blueviolet;
                cursor: pointer;
            }
            :hover.contenedor2 img{
                height: 230px;
                transition: 0.8s;
            }
            .contenedor3{
                font-size: 25px;
                text-align: center;
                background-color: #92F974;
                margin: auto;
                width: 400px;
                padding: 15px;
                margin-top: 10px;
                border-radius: 10px;
                border: 2px solid black;
            }
            .contenedor3 p{
                color: black;
            }
            .extra{
                background-color: white;
                border-radius: 10px;
                width: 395px;
                height: 210px;
                align-items: center;
                display: flex;
                font-size: 20px;
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
        </style>
    </head>
    <body>
        <?php
            echo "<div class='contenedor'>";
            echo "<p>INFORMACIÓN</p>";
            echo "</div>";
        ?>
        <div class="contenedor2">
            <img src="img/image.png" alt="img">
        </div>
        <section class="contenedor3">
            <?php
                echo "<div>";
                echo "<p>PHP</p>";
                echo "</div>";
            ?>
            <h2 class="extra">PHP es un lenguaje de programación destinado a desarrollar aplicaciones para la web y crear páginas web, favoreciendo la conexión entre los servidores y la interfaz de usuario. Entre los factores que hicieron que PHP se volviera tan popular, se destaca el hecho de que es de código abierto.</p>
        </section>
    </body>
</html>