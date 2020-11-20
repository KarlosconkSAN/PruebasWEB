<!DCOTYPE html>
<html>

    <head>
        <title>Pagina de pruebas</title>
        <meta charset="utf-8">
       
        <script>
        function dibujo(numeroFilas,numeroColumnas){
            const cuerpo = document.getElementsByTagName("body")[0];
            let tabla = document.createElement("table");
            let cuerpoTabla = document.createElement("tbody");

            for(let i=0;i<numeroFilas;i++){
                let fila =document.createElement("tr");
                for(let j=0;j<numeroColumnas;j++){
                     let columna=document.createElement("td");
                     let texto=document.createTextNode(" fila "+i+" columna "+j+ " |");
                     columna.appendChild(texto);
                     fila.appendChild(columna);
                }
                cuerpoTabla.appendChild(fila);
             }
            tabla.appendChild(cuerpoTabla);
            cuerpo.appendChild(tabla);
        }
        </script>
    </head>
    <body>
    <?php
            $database_host="localhost";
            $database_name="pruebasweb";
            $username="root";
            $password="";
            $table_name="tabladepruebas";

            $conexion=mysqli_connect($database_host,$username,$password,$database_name);
            $consulta="SELECT * FROM " . $table_name;
            $resultado=mysqli_query($conexion,$consulta);

            
            

        ?>
        <header>
            <h1 id="titular">Bienvenido/a</h1>
        </header>
        <button type="button" onclick="dibujo(5,3)">Generar tabla</button>
        
        <!--<p><//?php echo $registro[1] . $registro[2] ?></p>
        <p><//?php echo $registro[2]?></p>-->
        <?php 
            while($registros=mysqli_fetch_array($resultado)){
                echo "<p>";
                echo "||";
                echo $registros["id"];
                echo "|";
                echo $registros["Nombre"];
                echo "|";
                echo $registros["Edad"];
                echo "|";
                echo $registros["NumeroTlf"]; 
                echo "||";
                echo "</p>";
            };
            ?>
        <p><?php echo "<h2>HOLA</h2>"?></p>


    </body>

</html>