<?php

$variable = 'name';

// echo $variable;

$val = 11;

//if else
if($val == 10){
    echo "ddlasjflk is true";
}else{
    echo "condition is not matched";
}

//if elseif eseif.. ese
echo "<br>";
$age = 20;
if($age >= 18){
    echo "you are eligible for vote";
}elseif($age < 18 && $age >10){
    echo "you are not eligible for vote";
}elseif($age <= 10){
    echo "you are noobs!";
}else{
    echo "not matched";
}

//loop
echo ' <br> ';

//for loop
for($i=0;$i<10;$i++){
    // echo $i."<br>";
    echo "$i <br>";
}

//while loop

$i =11;

while($i<10){
    echo "$i <br>";
    $i = $i +1;
}

//do while loop
$j = 1000;
do{
    echo $j;
    $j++;
}while($j < 1010);

?>

<script>
    let age = 20;
    let str = age + "<br>";
if(age >= 18){
    console.log("you are eligible for vote");
}else if($age < 18 && $age >10){
    console.log("you are eligible for vote");
}else if($age <= 10){
    console.log('you are noobs!');
}else{
    console.log("not matched");
}
</script>