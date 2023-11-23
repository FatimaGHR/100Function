<?php 
/// 1
// function _lenght($str){
//    $i=0;
//    while($str[$i]){
//     $i++; 
// }
//    return $i;
// }
// $str1='hi dear h';
//  echo isset($srt[5]);
// echo _lenght($str1).'<br>' ;

// echo $str.$str;

/// 2
// function _repeat($str,$num){
//     $newStr='';
//     for($i=0;$i<$num;$i++){
//         $newStr=$newStr.$str.' ';
   
//     }
//     return $newStr;
//  }
//  $str2='codeplay';
//  $num=4;
//  echo _repeat($str2,$num).'<br>' ;


 /// 3
//  function _postionword($str,$word){
//     for($i=0;$i<strlen($str);$i++){
//       if($str[$i]==$word[0]){
        
//       echo $i;
//       break;
//   }
//     } 
//   }
//   $str='hello word hi';
//   $word='word';
//   _postionword($str,$word).'<br>';


 ///4
// function _replace($oldstr,$str,$newstr){
//     $repl=_postionword($str,$oldstr);
//     $len=_lenght($oldstr);
//     $new='';
//     for($i=0;$i<_lenght($str);$i++){
//         if($i==$repl){
//         $new=$new.$newstr.' ';
//         $i=$i+($len-1);
//         }

//         else{
//             if($str[i]==' '){
//                 $new=$new.' ' ;  
//             }
//             else{
//                 $new=$new.$str[i];
//             }
//         }
//     }
    
//     return $new;
//  }
//  $str4='php test';
//  $oldstr='test';
//  $newstr='code play';
//  echo _replace($oldstr,$str4,$newstr).'<br>' ;
echo '<br>';


///5

function arr_count($arr){
   $i=0;
   foreach($arr as $item){
 $i++;
   }
   return $i;
}
$arr1=[1,2,3,4,"apple"];
echo arr_count($arr1).'<br>';

// ///6

function arr_push($arr,$item){
   if(is_array($item)){
     for($i=0;$i<arr_count($item);$i++){
      $pushed=arr_count($arr);
      $arr[$pushed]=$item[$i];
        }
        return $arr;

        
      }
      else{
         $pushed=arr_count($arr);
         $arr[$pushed]=$item;
         return $arr;
      }
      
      
}
$arr2=[1,2,3,4,"apple"];
// $item='data';
$item=[5,7,9];
print_r(arr_push($arr2,$item));
echo '<br>';

// ///7


// function arr_pop($arr){

//       $pushed=arr_count($arr)-1;
//       $arr[$pushed]=null;

//       print_r($arr);
// }
// $arr2=[1,2,3,4,"apple"];
// arr_pop($arr2);
// echo '<br>';

// ///8
// function arr_shift(&$arr){
//    $arr2=array();
//    for($i=0;$i<arr_count($arr)-1;$i++){
//        $arr2[$i]=$arr[$i+1];
//    }
//    $arr=$arr2;
// }
// $arr3=[1,2,3,"apple"];
// arr_shift($arr3);
// print_r($arr3);
// echo '<br>';


///9
function arr_revers(&$arr){
   $arr2=array();
   $indx=0;
   $j=arr_count($arr)-1;
   for($i=0;$i<arr_count($arr);$i++){
       $arr2[$indx]=$arr[$j];
       $indx++;
       $j--;
   }
   
   return $arr2;
   print_r($arr);
}
$arr4=[1,2,3,"apple"];
$newarray=arr_revers($arr4);
print_r ($newarray);
echo '<br>';

///10
function power($number,$pow){
   $p=$number;
   for($i=1;$i<$pow;$i++){
      $number=$number*$p;
   }
   return $number;
 
}
echo power(8,3).'<br>';


///11
function avrg(...$arg){
   $number=0;
   $count=0;
   foreach($arg as $i){
      $number=$number+$i;
      $count++;
   }
   return $number/$count;
 
}
echo avrg(8,2,3).'<br>';

///12
function day(){
   $today=date("d");
   
   return $today;
 
}
echo day().'<br>';

///13
function nameday(){
   setlocale(LC_ALL,'ar_SA.utf8');
   $today=strftime("%A");
   
   return $today;
 
}
echo nameday().'<br>';

///14
function month(){
   $tomonth=date("m");
   
   return $tomonth;
 
}
echo month().'<br>';

///15
function namemonth(){
   setlocale(LC_ALL,'ar_SA.utf8');
   $tomonth=strftime("%B");
   
   return $tomonth;
 
}
echo namemonth().'<br>';

///16
function year(){
   $toyear=date("y");
   
   return $toyear;
 
}
echo year().'<br>';

///17
function nameyear(){
   setlocale(LC_ALL,'ar_SA.utf8');
   $toyear=strftime("%C");
   
   return $toyear;
 
}
echo nameyear().'<br>';

///18
function hour(){
   $tohour=date("H");
   
   return $tohour;
 
}
echo hour().'<br>';

///20
function mint(){
   $tomint=date("i");
   
   return $tomint;
 
}
echo mint().'<br>';

///21
function secned(){
   $tosec=date("s");
   
   return $tosec;
 
}
echo secned().'<br>';

///22
function stutsdate(){

   if(date("H")>="12")
     $stut=date("a");
   else{
      $stut=date("p");
   }
   
   return $stut;
 
}
echo stutsdate().'<br>';


///23
 function word_count($x){
    $c=1;
   
    for($i=0;$i<strlen($x);$i++){
        if($x[$i]==" "){
          $c=$c+1;
        }
       

    }
    return $c;

 }
$str5='hello world';
echo word_count($str5).'<br>'; 

///24
 function strrever($y){
    $c='';
    for($i=-1;$i>=-strlen($y);$i--){
        $c=$c.$y[$i];
        // echo $y[$i];
       

    }
    return $c;

 }

 $str5='hello world';
echo strrever($str5).'<br>'; 


///25
function mini($arr='',...$arg){
   if($arr!==null&&$arg==null){
      $numbermin=$arr[0];
   foreach($arr as $i){
      if($numbermin>$i){
         $numbermin=$i;
      }
      else{
         
      }
   }
   return $numbermin;}
   else{
      $numbermin=$arg[0];
      // echo $numbermin;
      foreach($arg as $i){
         if($numbermin>$i){
            $numbermin=$i;
         }
         else{
            
         }
      }
      return $numbermin;}
}
echo mini(1,7,2,8).'<br>';


///26
function maxi($arr='',...$arg){
   if($arr!==null&&$arg==null){
      $numbermax=$arr[0];
   foreach($arr as $i){
      if($numbermax<$i){
         $numbermax=$i;
      }
      else{
         
      }
   }
   return $numbermax;}
   else{
      $numbermax=$arg[0];
      foreach($arg as $i){
         if($numbermax<$i){
            $numbermax=$i;
         }
         else{
            
         }
      }
      return $numbermax;}
}
echo maxi(array(1,7,9,2,8)).'<br>';

///27
function str_explode($sparetor,$str){
   $arr=array();
   $word='';
   for($i=0;$i<strlen($str);$i++){
      if($str[$i]!==$sparetor){
         $word=$word.$str[$i];
         if($str[$i]==$str[(strlen($str))-2]){
            array_push($arr,$word);
         }
         else{
            continue;
         }
       
      }
      else{
         array_push($arr,$word);
         $word='';
         // continue;
      }
   }
   return $arr;
}
$str6='wellcom to my page';
print_r(str_explode(' ',$str6));
echo '<br>';

///28
function sub_string($str,$index,$lim=''){
   $sub='';
   for($i=0;$i<strlen($str);$i++){
    if($lim==null){
      if($i==$index){
         for($i=$index;$i<strlen($str);$i++){
            $sub=$sub.$str[$i];
         }
         break;
      }
    }
  
    else{
      if($i==$index){
         for($i=$index;$i<=$lim;$i++){
            $sub=$sub.$str[$i];

         }
         break;
      }
    }
   }
   return $sub;
}
$str5='hello world';
echo sub_string($str5,2).'<br>';

///29
function _issets($arg){
   if($arg!==null){
      return 1;
   }
   else{

   }

}
$item='';
echo _issets($item).'<br>';

///30
function _empt($arg){
   if($arg!==''|| $arg==0){
      return 1;
   }
   else{

   }

}
$item=0;
echo empty($item).'<br>';

///31
function _unsets(&$arg){
   $arg=null;

}
$item2='';
_unsets($item2);
var_dump($item2).'<br>';
echo _issets($item2).'<br>';

///32

function arr_marg($arr,...$arg){
   $newarray=array();
   for($i=0;$i<count($arr);$i++){
     array_push($newarray,$arr[$i]);
   }
   foreach($arg as $nestedarr){
      foreach($nestedarr as $elemnt){
         array_push($newarray,$elemnt);

      }
   }
   return $newarray;
}

$ar1=array(1,2,3);
$ar2=array(5,6,7);
$ar3=array(8,0,9);
$marge=arr_marg($ar1,$ar2,$ar3);
print_r($marge) ;
echo '<br>';


///33
function touppercase($str){
   $alpha=array('a'=>'A','b'=>'B','c'=>'C','d'=>'D','e'=>'E','f'=>'F',
   'g'=>'G','h'=>'H','i'=>'I','j'=>'J','k'=>'K','l'=>'L','m'=>'M','n'=>'N','o'=>'O',
   'p'=>'P','q'=>'Q','r'=>'R','s'=>'S','t'=>'T','u'=>'U','v'=>'V','w'=>'W'
   ,'x'=>'X','y'=>'Y','z'=>'Z',);

   $newupper='';

 for($i=0;$i<strlen($str);$i++){
      foreach($alpha as $key=>$value){
          if($str[$i]==$key){
            $newupper=$newupper.$value;
          }
   
      }
   }
   return $newupper;
}
$strgn='welcome';
echo touppercase($strgn).'<br>';

///34
function tolowercase($str){
   $alpha=array('a'=>'A','b'=>'B','c'=>'C','d'=>'D','e'=>'E','f'=>'F',
   'g'=>'G','h'=>'H','i'=>'I','j'=>'J','k'=>'K','l'=>'L','m'=>'M','n'=>'N','o'=>'O',
   'p'=>'P','q'=>'Q','r'=>'R','s'=>'S','t'=>'T','u'=>'U','v'=>'V','w'=>'W'
   ,'x'=>'X','y'=>'Y','z'=>'Z',);

   $newupper='';

 for($i=0;$i<strlen($str);$i++){
      foreach($alpha as $key=>$value){
          if($str[$i]==$value){
            $newupper=$newupper.$key;
          }
   
      }
   }
   return $newupper;
}
$strgn='WELCOME';
echo tolowercase($strgn).'<br>';

///35
function tocaptaliz($str){
   $alpha=array('a'=>'A','b'=>'B','c'=>'C','d'=>'D','e'=>'E','f'=>'F',
   'g'=>'G','h'=>'H','i'=>'I','j'=>'J','k'=>'K','l'=>'L','m'=>'M','n'=>'N','o'=>'O',
   'p'=>'P','q'=>'Q','r'=>'R','s'=>'S','t'=>'T','u'=>'U','v'=>'V','w'=>'W'
   ,'x'=>'X','y'=>'Y','z'=>'Z',);

   $newupper='';
      foreach($alpha as $key=>$value){
          if($str[0]==$key){
            $str[0]=$value;
          }
   }
   return $str;
}
$strgn='welcome';
echo tocaptaliz($strgn).'<br>';


///36

function subStrCount($str,$word){
   // $arr=array();
   $arr=explode(' ',$str);
   $count=0;
   foreach($arr as $elem){
      if($elem==$word){
         $count++;
      }
   }
   return $count;
}
$str='hi there hi it hi';
$word='hi';
echo subStrCount($str,$word).'<br>';


///37
function _join($strct,$arr){
  $text='';
  for($i=0;$i<arr_count($arr);$i++){
   $text=$text.$arr[$i];
   $text=$text.$strct;

  }
  return $text;

}
$strct='/';
$arr=array('hi','my','page');
echo _join($strct,$arr).'<br>';


///38 
function arrSearchKey($val,$arr){
   foreach($arr as $key=>$value){
      if($val==$value){
         return $key;
      }

   }


}


$arr=array('a'=>'A','b'=>'B','c'=>'C','d'=>'D');
echo arrSearchKey('C',$arr).'<br>';

///39
function arrSearchValue($ky,$arr){
   foreach($arr as $key=>$value){
      if($ky==$key){
         return $value;
      }

   }


}


$arr=array('a'=>'A','b'=>'B','c'=>'C','d'=>'D');
echo arrSearchValue('a',$arr).'<br>';

///40
function keyexist($ky,$arr){
   $count=0;
   foreach($arr as $key=>$value){
      if($ky==$key){
         $count++;
      }
   }
   if($count>0){
      return true;
   }
   else{
     return false;
     
   }
}
$arr=array('a'=>'A','b'=>'B','c'=>'C','d'=>'D');
echo keyexist('g',$arr).'<br>';


///41
function valuexist($val,$arr){
   $count=0;
   foreach($arr as $key=>$value){
      if($val==$value){
         $count++;
      }
   }
   if($count>0){
      return true;
   }
   else{
     return false;
     
   }
}
$arr=array('a'=>'A','b'=>'B','c'=>'C','d'=>'D');
echo valuexist('B',$arr).'<br>';

///42
function arr_sum($arr){
   $c=0;
   for($i=0;$i<count($arr);$i++){
      $c=$c+$arr[$i];
   }
   return $c;

}
$arr=array(1,2,3,5);
echo arr_sum($arr).'<br>';


///43
function arr_subtrac($arr){
   $c=$arr[0];
   for($i=0;$i<(count($arr))-1;$i++){
      $c= $c- $arr[$i+1];
   }
   return  $c;

}
$arr=array(1,2,3,5);
echo arr_subtrac($arr).'<br>';

///44
function arr_multip($arr){
   $c=1;
   for($i=0;$i<count($arr);$i++){
      $c= $c*$arr[$i];
   }
   return  $c;

}
$arr=array(1,2,3,5);
echo arr_multip($arr).'<br>';

///45
function arr_colum($arr,$colum,$index=null){
   $i=0;
   foreach($arr as $item){
      foreach($item as $key=>$value){
         if($index===null){
            if($colum==$key){
            echo '['.$i.']'.' '.'=>'.' '.$value.'<br>';
         $i++;}
         }
         elseif($index!==null){
            if($index==$key){
            echo '['.$value.']'.' '.'=>'.' ';
         }
         if($colum==$key){
            echo $value.'<br>';
         }
         }


      }
   }

}
$arr8=array(array('id'=>135,'name'=>'A'),array('id'=>289,'name'=>'B'));
arr_colum($arr8,'name','id');


///46

function key_first($arr){
   $i=0;
   foreach($arr as $key=>$value){
      if($i==0){
          return $key;
          break;
      }
       
   }

}
$arrfirstkey=array('color'=>'red','id'=>0,'name'=>'fatima');
echo key_first($arrfirstkey).'<br>';


///47

function key_last($arr){
   $i=0;
   $j=arr_count($arr)-1;
   foreach($arr as $key=>$value){
      if($i==$j){
          return $key;
          break;
      }
      $i++;
       
   }

}
$arrfirstkey=array('color'=>'red','id'=>0,'name'=>'fatima');
echo key_last($arrfirstkey).'<br>';


///48
function arr_diff($arr1,$arr2){
   $arr3=array();
   
   foreach($arr1 as $item){
      $c=0;
      foreach($arr2 as $ele){
         if($item==$ele){
            $c++;
         }
      }
      if($c==0){
         array_push($arr3,$item);
      }
   }
   return $arr3;
}
$arr1=array(1,2,3,4);
$arr2=array(8,7,3,9);
print_r(arr_diff($arr1,$arr2));
echo'<br>';

///49
function in_arr($arr,$value){
   $c=0;
   foreach($arr as $item){
   if($item==$value){
     $c++;
   }
}
if($c>0){
   return true;
}
else{
   return false;
}
}
$arr1=array(1,2,3,4);
echo in_arr($arr1,8).'<br>';
///50
function strContain($str,$value){
   $c=0;
   $arr=explode(' ',$str);
   for($i=0;$i<count($arr);$i++){
   if($arr[$i]==$value){
     $c++;
   }
}
if($c>0){
   return true;
}
else{
   return false;
}
}
$str='hi welcome in my page';
echo strContain($str,'my').'<br>';

///51
function strendwith($str,$value){
   $arr=explode(' ',$str);
   $c=arr_count($arr)-1;
   if($arr[$c]==$value){
      return true;
}
else{
   return false;
}
}
$str='hi welcome in my page';
echo strendwith($str,'page').'<br>';


///52
function arr_key($arr){
   $newarr=array();
   $c=0;
   foreach($arr as $key=>$value){
      $newarr[$c]=$key;
      $c++;  
   }
   return $newarr;
}
$arrkey=array('id'=>1,'name'=>'A','color'=>'red');
print_r(arr_key($arrkey)).'<br>';
echo '<br>';


///53
function arr_intersect($arr1,$arr2){
   $arr3=array();
   // $c=0;
   foreach($arr1 as $item){
      $c=0;
      foreach($arr2 as $ele){
         if($item==$ele){
            $c++;
         }
      }
      if($c>0){
         array_push($arr3,$item);
      }
   }
   return $arr3;
}
$arr1=array(9,2,3,4);
$arr2=array(8,7,3,9);
print_r(arr_intersect($arr1,$arr2));
echo'<br>';

 /// 54
 function _strrpostionword($str,$word,$index){
   $c=strlen($str)-1;
    for($i=$index;$i>=0;$i--){
      if($str[$i]==$word[0]){
         if($str[$i+1]==$word[1]){
            echo $i;}
            // break;  
  }
    } 
  }
  $str='hello word hi';
  $word='word';
  $index=8;
  _strrpostionword($str,$word,$index).'<br>';
  echo '<br>';

   /// 55
 function arr_slice($arr,$index,$num){
   $arr2=array();
   $c=0;
    for($i=$index;$i<(arr_count($arr))-1;$i++){
           array_push($arr2,$arr[$i]);
           $c++;
           if($c==$num){
            break;
           }
  
    } 
    return $arr2;
  }
  $arr=array(1,3,4,6,7,0);
  $index=3;
 print_r(arr_slice($arr,$index,2));
 echo '<br>';


?>