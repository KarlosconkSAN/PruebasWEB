function dibujo(numeroFilas,numeroColumnas){
    const cuerpo = document.getElementsByTagName("body")[0];
    let tabla = document.createElement("table");
    let cuerpoTabla = document.createElement("tbody");

    for(let i=0;i<numeroFilas;i++){
        let fila =document.createElement("tr");
        for(let j=0;j<numeroColumnas;j++){
            let columna=document.createElement("td");
            let texto=document.createTextNode("fila "+i+" columna "+j);
            columna.appendChild(texto);
            fila.appendChild(columna);
        }
        cuerpoTabla.appendChild(fila);
    }
    tabla.appendChild(cuerpoTabla);
    cuerpo.appendChild(tabla);

}
