function generarTablero() {
  const tablero = document.getElementById("tablero");
  tablero.innerHTML = ""; // Limpiar el contenido anterior del tablero
  const fingreso = parseInt(document.getElementById("fingreso").value) - 1;
  const cingreso = parseInt(document.getElementById("fcolumna").value) - 1;
  
  const casillaBlanca = (fila, columna) => (fila + columna) % 2 === 0;
  const posibleMov = (fila, columna) => 
    fila === fingreso || 
    columna === cingreso || 
    Math.abs(fila - fingreso) === Math.abs(columna - cingreso);
  
  for (let fila = 0; fila < 8; fila++) {
    const filaElemento = document.createElement("tr");
    for (let columna = 0; columna < 8; columna++) {
      const casilla = document.createElement("td");
      casilla.classList.add(casillaBlanca(fila, columna) ? "casilla-blanca" : "casilla-negra");
      
      if (fila === fingreso && columna === cingreso) {
        const Cimagen = document.createElement("img");
        Cimagen.src = "Peon.png";
        Cimagen.classList.add("EstiloImagen");
        casilla.appendChild(Cimagen);
      }
      
      casilla.addEventListener("click", () => {
        casilla.classList.toggle(posibleMov(fila, columna) ? "posiblemovimiento" : "movimientoImposible");
      });
      
      filaElemento.appendChild(casilla);
    }
    tablero.appendChild(filaElemento);
  }
}

document.getElementById("generar").addEventListener("click", generarTablero);
