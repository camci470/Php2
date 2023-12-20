<?php
echo "<pre>";
$planets=["Mercury","Venus","Earth","Mars","Jupyter","Saturn","Uranus","Neptune","","", NULL];
$map_arr=array_map(function ($x){
   global $planets;
   if ($x==""){
       return NULL;
   }else{
       return $x;
   }
},$planets);
$filter_arr=array_filter($map_arr,function ($x){
   return $x !=NULL?$x:false;
});

function RandomArr($y)
{
    global $filter_arr;
    $result=array_flip($filter_arr);
    return array_rand($result,$y);
}

print_r(RandomArr(2));
print_r(RandomArr(3));
print_r(RandomArr(2));
print_r(RandomArr(4));
print_r(RandomArr(5));
