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
        <header>
            <h1 id="titular">Bienvenido</h1>
        </header>
        <button type="button" onclick="dibujo(5,3)">Generar tabla</button>

    </body>

</html>