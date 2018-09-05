//Exercicio 01
function elevarAoSegundo(num1, num2)
{
    resultado = num1**num2;
    return console.log('Exercicio 1 ', resultado);
}
elevarAoSegundo(5,2);

//Exercicio 02
let quadrado = function (num)
{
    quadrado = num * num;
    return console.log('Exercicio 2 ', quadrado);
}
quadrado(4);

//Exercicio 04
function trianguloRetangulo(num1, num2)
{
    resultado = num1 + num2 + (Math.sqrt(num1*num1 + num2*num2));
    return console.log('Exercicio 4 ', resultado);
}
trianguloRetangulo(3,4);

//Exercicio 5

function meuSanduiche(ingrediente1, ingrediente2, callback)
{
    console.log('Exercicio 05');
    console.log('Estou comendo um sanduiche de: ' + ingrediente1 + ' ' + ingrediente2);
    setTimeout( function()
    {
      callback();
    }, 2000 );
}

function terminei()
{
    console.log('Terminei de comer meu sanduiche ');
}

meuSanduiche('queijo', 'presunto', terminei);


//Array
console.log ('Array');
//Exercicio 01
console.log ('Exercicio 01');
let array = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

function multiploSete(x)
{
    if (x%7 == 0)
    {
        console.log (x + ' e multiplo de 7');
    }else
    {
        console.log (x + ' nao e multiplo de 7');
    }
}

resultado = array.forEach(multiploSete);

//Exercicio 02
console.log ('Exercicio 02');

function raizquadrada(x)
{
    return Math.sqrt(x);
}

raiz = array.map(raizquadrada);
console.log(raiz);

//Exercicio 03
console.log ('Exercicio 03');

var enigma =
["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,
"r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3
,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6];

function letras (x)
{
    return (typeof x === "string"
                ?Acc + Atual
                :ACc
}

