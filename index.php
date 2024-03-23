<?php 
// $var1= 13;
// $var2= 13;
// if($var1>$var2):
//     echo "sahil";
//     elseif($var1<$var2):
//     echo "mubeen";
// else :
// echo "nul";
// endif;

// switch(211):
//     case 1:
//         echo "sahi";
//         break;
//         case 2: 
//             echo "myyy";
//             break;
//             default :
//             echo "wewe";
// endswitch

// $a="hell0";
// $a .="mubeen";
// $a .="sahil";
// echo $a;
// $a =1;
// while($a <=5){
// echo "sahil <be/>";
// $a++;
// }

// $a = 0; 
// do {
// echo "12";
//     $a++; 
// } while ($a <= 5);

// for($i=0;$i<=5;$i++):
//     echo "sahil  $i  <br/>";
// endfor

// for($a=1;$a<=100;$a=$a+10)
// {
//     for($b=$a;$b<$a+10;$b++){
//         echo "$b <br/>";
//     }
// }
// $a=6;
// if($a>5){
// echo "sahil";
// goto abe;
// }
// echo "mubeen";
// abe:
// echo "sdsd";

// function wow(){
//     echo "sahil";
// }
// $call="wow";
// $call();


// function fac($a){
// if($a ==0){
//    return 1;
// }
// else{
//     return ($a * fac($a-1));
// }

// }
// echo fac(4);

// $arr=["sahil","mubeen","azeem"];
// foreach($arr as $key=>$val){
//     echo $val ,$key . "<br/>";
// }

// $arr=["sahil","mubeen","Azeem","Iman"];
// $arr1=["umer","aqif"];

// $arr2= array_replace($arr,$arr1);
// var_dump($arr2);
// var_dump($arr1);

// class firstClass{
//     public string $na;
//     public  $age;
//     public function __construct(string $name, $age){
//         $this->age= $age>18 ? $age:"an invalid  " ;
//         $this->na=$name;
          
//     }
//     public function getName(){
//         echo "Your name is $this->na and age is $this->age";
//     }
//    }

// $obj= new firstClass("sahil",2);
// $obj1= new firstClass("mubeen",20);
// $obj2= new firstClass("azeem",20);
// $obj->getName();
// $obj1->getName();
// $obj2->getName();

// class A{
// public $name;
// public $age;
// public $sal;

// public function __construct($name,$age,$sal){
//     $this->name=$name;
//     $this->age=$age;
//     $this->sal=$sal;
// }
// public function getDet(){
//     echo "Empoly name is $this->name and age $this->age is and salary is $this->sal <br/>";
// }
// }
// class B extends A {
// }
// $aobj=new A("sahil",23,23232);
// $aobj->getDet();
// $aobj=new B("mubeen",23,123);
// $aobj->getDet();

// abstract class abs{
//     public $a=23;
//     abstract protected function absFun($a,$b);
// }
// // $obj = new abs();  => abstruct class ka object ni bna sakty hain
// class childs extends abs{
// public function absFun($a,$b){
//     echo $a+$b;
// }
// }
// $obj=new childs();
// $obj->absFun(23,23);

// trait hello{
//     public function greet() {
//         echo "Hello, hhh!";
//     }
// }
// trait hi{
//     public function greet() {
//         echo "Hello, hi !";
//     }
// }
// class greeting {
//     use hello,hi{
//         hello::greet insteadof hi;
//         hi::greet as newfun;
//     }
    //if call fun is private
    // use hi{
    //     hello::greet as public;
    //       }
    // }
// $obj = new greeting();
// $obj->greet();
// $obj->newfun();

// trait hello{
//     public function greet() {
//         echo "Hello, " . $this->name . "!";
//     }
// }
// class greeting {
//     use hello;
//     public string $name="sahil";
// }
// $obj = new greeting();
// $obj->greet();

// use of namespace 
// $newobj = new nameSpaceName\className()


//method chaning 
// class abc{
//     public function fn1(){
//         echo "h1";
//         return $this;
//     }
//     public function fn2(){
//         echo "h2";
//         return $this;
//     }
//     public function fn3(){
//         echo "h3";
//         return $this;
//     }
// }
// $obj=new abc();
// $obj->fn1()->fn2()->fn3();

//magic  method 
// __construct
// __destruct
// __autoload  example->required ni write karna pry ga
// public function __autoload($className){
// return require "folderName/".$className.".php";
// } -->jb hum class ka obj bny gy tu ya $className mai wo class pass kar dy ga as a name
//__get($property) ->jb hum private property / method ko call kary tu ya mrthod run ho jata hai
//__set($property,$value) ->jb hum private property / method ko call kary tu ya mrthod run ho jata hai
//__call($method,$argus) ->jb hum private  method ko call kary tu ya mrthod run ho jata hai
//public static function __callStatic($method,$argus) ->jb hum private static method ko call kary tu ya mrthod run ho jata hai
// __isset($property) ->jb hum private hum private property 
// (property_exists($this,$property),method_exists($this,$method))




?>