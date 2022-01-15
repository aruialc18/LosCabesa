String.prototype.replaceAt = function (index, character) { return this.substr(0, index) + character + this.substr(index + character.length); }
//Uso: palabraConGuiones = palabraConGuiones.replaceAt(i*2, letra);


//Array de palabras que van a salir aleatoriamente
const palabras = ['gimnasio', 'pesa', 'barra', 'dominada'];

//Esto eligirá una palabra aleatoria del array de palabras
const palabra = palabras[Math.floor(Math.random() * palabras.length)];

//reemplazamos la palabra aleatoria por guiones
let palabraConGuiones = palabra.replace(/./g, "_ ");


let contadorFallos = 0;

//pintamos los guiones
document.querySelector('#output').innerHTML = palabraConGuiones;

document.querySelector('#calcular').addEventListener('click', () => {
    const letra = document.querySelector('#letra').value;

    let hafallado = true;

    //la i va a recorrer la palabra aleatoria y si la letra coincide con alguna letra de las palabras con guiones sustituye el guion por la letra
    for (const i in palabra) {
        if (letra == palabra[i]) {
            palabraConGuiones = palabraConGuiones.replaceAt(i * 2, letra); //El *2 es debido a que en la variable palabraConGuiones tenemos el guion y un espacio en blanco y cuenta como 2 caracteres
            hafallado = false;
        }
    }

    if (hafallado) {
        contadorFallos++;
        document.querySelector('#ahorcado').style
            .backgroundPosition = -(307 * contadorFallos) + 'px 0';
        if (contadorFallos == 4) {
            alert("¡Has perdido!")
        }
    }else{
        if(palabraConGuiones.indexOf('_') < 0){
            alert("¡Has ganado!")
        }
    }

    document.querySelector('#output').innerHTML = palabraConGuiones;

    document.querySelector('#letra').value = '';
    document.querySelector('#letra').focus();
});