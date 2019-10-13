<?php


// 11.	Crie uma função que receba três inteiros como argumentos (ano, mês, dia) e verifique se se trata de um data válida. 
// O ano deverá estar entre 1900 e o presente ano. Deverá retornar um valor booleano.
function dataValidation ($year, $mouth, $day){
    $actualYear = date("Y");

    if($year >= 1900 && $year <= $actualYear && $mouth > 0 && $mouth <= 12 && $day > 0 && $day <= 31 )
        return true;
    else 
        return false;
}

echo dataValidation(2019,10,1);



// 10.	Crie uma função que verifique se um número é primo (deverá retornar um valor booleano).
function checkPrimeNumber2($number)
{
 for($i=2; $i<$number; $i++)
   {
      if($number %$i ==0)
	      {
		   return 0;
		  }
    }
  return 1;
}


// 9.	Crie uma função que receba 3 valores inteiros (a, b, c) e retorne um valor booleano true se a>b>c e false em caso contrário.
function sequence ($a,$b, $c){
    if($a>$b && $b > $c){
        return true;
    }else{
        return false;
    }
}
echo sequence (5,4,3);


// 8.	Crie uma função que receba um número inteiro e retorne a soma dos seus algarismos.
function sumAlg($number){
    $sumInts = 0;
    do {
        $sumInts += $number % 10;
    }
    while ($number = $number / 10);
    return $sumInts;
}

echo sumAlg(10);


// 7.	Crie uma função que receba dois valores inteiros como argumentos e retorne um valor booleano indicando se os números são divisíveis.
function divisible($intOne, $intTwo){
    if($intOne % $intTwo == 0){
        return true;
    }
    else{
        return false;
    }
}
echo divisible(4,2);


// 6.	Crie uma função que receba 2 notas (F1 e F2) de um aluno e retorne um booleano indicando se o aluno passou. Para passar, a soma das
// notas deve ser igual ou superior a 19 e ambas devem ser superiores a 7.
function notes ($f1, $f2){
    if (($f1 + $f2) > 19 &&  $f1 > 7 && $f2 > 7)
        return true;
    else
        return false;
}

echo notes(10,18);
echo "\n";


// 5.	Crie uma função ContaPrimos() que receba dois valores inteiros como argumentos e retorne o número de números primos entre estes dois números, inclusive. 
//P. Ex. ContaPrimos(3,10) deverá retornar o valor 3 (3, 5, 7).

function checkPrimeNumber($number)
{
 for($i=2; $i<$number; $i++)
   {
      if($number %$i ==0)
	      {
		   return 0;
		  }
    }
  return 1;
}

function primes($valueOne, $valueTwo){

    echo "{$valueOne}, ";
    for($i = $valueOne + 1; $i < $valueTwo; $i++ ){

        $checkPrimeNumber = checkPrimeNumber($i);
        
        if (!($checkPrimeNumber==0))
        echo "{$i}, ";       
    }
}

primes(3,10);



// 4.	Crie uma função que receba um número inteiro como argumento e retorne o maior valor primo inferior a esse argumento. Se o argumento for negativo, a função deverá retornar o valor zero.

function prime($number)
{
 for($i=2; $i<$number; $i++)
   {
      if($number %$i ==0)
	      {
		   return $checkValuePrime = false;
		  }
    }
  return $checkValuePrime = true;
}

function higherPrime($value){

    $higherPrime = false;

    while($higherPrime == false){
        $checkValuePrime = prime($value - 1);

        if($checkValuePrime == true){
            $higherPrime = true;
            $value = $value -1;
            echo "O maior número primo inferior é : {$value}";
        }
        else
            $value = $value -1;
    }
}

higherPrime(10);


// 3.	Crie uma função que receba dois valores reais como argumentos e retorne o valor da raiz quadrada da soma dos quadrados.
function sqrtValues ($valueOne, $valueTwo){
    $total = sqrt($valueOne) + sqrt($valueTwo);
    return $total;
}
echo intval(sqrtValues(15,20));


// 02.	Crie uma função que receba 3 valores reais como argumento e retorne o maior valor.
function higherValue ($valueOne, $valueTwo, $valueThree){
    return max($valueOne, $valueTwo, $valueThree);
}
echo 'Maior valor: ' . higherValue(2,4,6);
echo "\n";


// 01.	Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. Se o valor da soma for negativo o método deverá retornar o valor 0.
function sumValues($valueOne, $valuneTwo){
    $total = $valueOne + $valuneTwo;

    if($total >= 0 )
        return $total;

    else
        return 0;

}
echo sumValues(-1 , -2);
echo "\n";
