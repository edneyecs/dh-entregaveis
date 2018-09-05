let numero1 = prompt("Digite um numero: ");
let numero2 = prompt ("Digite outro numero: ");
let confirma = prompt ("Tem certeza que quer esses numeros: ");

if (confirma) 
{
    let numeroMaior = parseInt(numero1) > parseInt(numero2)
        ? numero1
        : numero2;
    alert("Numero maior é: " + numeroMaior);
}else
    {
        window.location.reload();
    }


