<?php

echo('---------Example1-----------<br><br>');

$num = array( 1 , 2, 3 ,4 ,5 ,6 ,7 ,8 ,9);
$x=[];

for ($i=0; $i < count($num) ; $i++) { 
    if($num[$i] % 2 !==0){
        $x[] = $num[$i]; 
    }
}
print_r($x);
echo '<pre>';
var_dump ($x);



echo('---------Example2-----------<br><br>');

$longest = ['Ali' , 'Ahmed' , 'Mohammed'];

$max='';

foreach ($longest as $value) {

    if(strlen($value) > strlen($max)){
        $max = $value;
    }
}
echo (" longest text in array is <b>$max <b>");


echo('---------Example3-----------<br><br>');
/*  $a=[1,2,3];
 $b =[2,4,6,8];
 $loop = count($a) > count($b)  */

echo "أنا في السطر رقم : " . __LINE__;

echo "\n\n";
echo "أنا موجود في الملف: " . __FILE__;

echo "\n\n";
echo "أنا موجود في المجلد: " . __DIR__;

echo "\n\n";
function greet() {
    echo " يرجع اسم الفنكشن مرحبًا بكم في الدالة: " . __FUNCTION__;
}
greet();



echo "\n\n";
trait Greeting {
    public function greet() {
        echo "مرحبًا بكم من الـ Trait: " . __TRAIT__;
    }
}
class MyClass {
    use Greeting;
}
$obj = new MyClass();
$obj->greet();



echo "\n\n";
class className {}
echo className::class;



echo "\n\n";
$a = "10";
$b = "20";

$result = +$a + +$b;
echo $result; // ستطبع 30




echo "\n\n";
$a = 5;
$b = 15;
$result = $a <=> $b;
echo $result . "<br/>\n"; // ستطبع 1



$a=5; 
echo"Shouldbe6:". ++$a . "\n \r \t"; 
echo"Shouldbe6:". $a++ ."<br/>" ;



$name1 = "John";
$message1 = <<<E
Hello $name1,
Thank you for signing up for our newsletter. We're excited to have you on board!
Please feel free to reach out to us if you have any questions or need assistance.
Best regards,
The Newsletter Team
E;

echo $message1;



echo "\n\n";
$name = "John";
$message = <<<'EOD'
Hello $name,
Thank you for signing up for our newsletter. We're excited to have you on board!
Please feel free to reach out to us if you have any questions or need assistance.
Best regards,
The Newsletter Team
EOD;
echo $message;





echo "\n\n";
$array=array(
    
1=>'a',
'1'=>'b',
1.5=>'c',//thevalue"b"willbeoverwrittenby"c"
-1=>'d',
'01'=>'e',//asthisisnotanintegerstringitwillNOToverridethekeyfor1 
'1.5'=>'f',//asthisisnotanintegerstringitwillNOToverridethekeyfor1 
true=>'g',//thevalue"c"willbeoverwrittenby"g" 
false=>'h',
''=>'i',
null=>'j',//thevalue"i"willbeoverwrittenby"j"
'k',//value"k"isassignedthekey2.Thisisbecausethelargestintegerkeybeforethatwas1 
2=>'l',//thevalue"k"willbeoverwrittenby"l"
 );
 var_dump($array);



 echo "\n\n";
 function makecoffee($type="cappuccino")
 { return"Makingacupof$type.\n"; }
  echo makecoffee();
   echo makecoffee(null); 
   echo makecoffee("espresso");




   echo "\n\n";
   function sum (...$numbers){
   $acc = 0;
   foreach ($numbers as $n){
   $acc +=$n;
           }
   return $acc;
}
   echo sum( 1 ,2, 3, 4);
   echo sum (...[1, 2, 3, 4]);





echo "\n\n";

function sum1() :int {
$acc =0;
foreach (func_get_args() as $n){
    $acc +=$n;
}
return $acc;
}

echo sum1( 1 ,2, 3, 4);



