//Encontrar tamaño del 
//Supongamos tenemos el arreglo
function wait(espera_segundos) {
  espera = espera_segundos * 1000
  const tiempo_inicio = Date.now();
  let tiempo_actual = null;
  do {
    tiempo_actual = Date.now();
  } while (tiempo_actual - tiempo_inicio < espera);
}


$('#enviar').click(function (e) {

  $.ajax({
    url: "./backend_test.php",
    type: "post",
    data: $("#conjuntos").serialize(),
    success: function (resultado) {
      $("#resultado").html(resultado);
      console.log(resultado);
      //const conjunto = ['zapatos', 'camisa', 'pantalon', 'medias', 'gorra', 'sueter', 'cholas'];
      const conjunto = resultado;
      //const conjunto = [];
      const frecuencias = [174.614, 184.997, 195.998, 207.652, 220.000, 233.082, 246.942, 261.626, 277.183, 293.665, 311.127, 329.628];
      if (conjunto.length == 0) {
        jsNota(100);
      } else
        //Seleccionar al azar elementos del arreglo frecuencias usando el tamaño del arreglo resultante de las operaciones:
        for (var i = 0; i < conjunto.length; i++) {
          const frecuencia = frecuencias[Math.floor(Math.random() * frecuencias.length)];
          jsNota(frecuencia);
          console.log(frecuencia);
          wait(0.25);
        }
    }
  });

});

// function jsMelodia() {
//   //arreglo resultante de las operaciones:
//   const conjunto = ['zapatos', 'camisa', 'pantalon', 'medias', 'gorra', 'sueter', 'cholas'];
//   //const conjunto = [];
//   const frecuencias = [174.614, 184.997, 195.998, 207.652, 220.000, 233.082, 246.942, 261.626, 277.183, 293.665, 311.127, 329.628];
//   if (conjunto.length == 0) {
//     jsNota(100);
//   } else
//     //Seleccionar al azar elementos del arreglo frecuencias usando el tamaño del arreglo resultante de las operaciones:
//     for (var i = 0; i < conjunto.length; i++) {
//       const frecuencia = frecuencias[Math.floor(Math.random() * frecuencias.length)];
//       jsNota(frecuencia);
//       console.log(frecuencia);
//       wait(0.25);
//     }
// }

