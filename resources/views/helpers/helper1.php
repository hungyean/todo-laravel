<?php
    $arr = array_add(['name'=>'Liew'],'Price',10);
    $arr = implode('',$arr);
    echo $arr."<br/><br/>";

    $brr = array_collapse([[1,2],[3,4]]);
    $brr = implode('',$brr);
    echo $brr."<br/><br/>";

    $crr = ['name'=>'gaah','price'=>20];
    #$flat = array_dot($crr);
    $ex = array_except($crr,['price']);
    $ex = implode('',$ex);
    echo $ex."<br/><br/>";

    $array =[10,20,30];
    $first = array_first($array, function($value,$key){
        return $value >= 15;
    });
   echo $first."<br/><br/>";

   $drr = ['name'=>'Liew','languages'=>['php','c']];
   $f = array_flatten($drr);
   $f = implode('',$f);
   echo $f."<br/><br/>";

   $frr = ['products'=>['desk'=>['price'=>100]]];
   $get = array_get($frr,'products.desk.price');
   echo $get."<br/><br/>";

   $grr = [10,20,30,11];
   $last = array_last($array,function($value,$key){
       return $value >= 15;
   });
   echo $last."<br/><br/>";

   $hrr = ['name'=>'liew','price'=>40,'task'=>'attack'];
   $slice = array_only($hrr,['name','task']);
   $slice = implode('',$slice);
   echo $slice."<br/><br/>";

   $jrr = [
       ['d'=>['name'=>'liew','id'=>1]],
       ['d'=>['name'=>'ba','id'=>2]],
   ];

   $name = array_pluck($jrr,'d.name');
   $name = implode('',$name);
   echo $name."<br/><br/>";

   $krr = ["1","2","3"];
   $nkrr = array_prepend($krr,'0');
   $nkrr = implode('',$nkrr);
   echo $nkrr."<br><br>";

   $lrr = ['name'=> 'Liew','price' => 100];
   $nlrr = array_pull($lrr,'name');
   echo $nlrr."<br/><br/>";

   $mrr = [1,2,3,4,5,6,7,8,9,0];
   $nmrr = array_random($mrr);
   echo $nmrr."<br/><br/>";

   $nrr = ['products'=>['desk'=>['price'=>100]]];
   $nnrr = array_set($array,'products.desk.price',200);
   $nnrr = implode('',$nnrr);
   echo $nnrr."<br/><br/>";

   $orr =["uabs,","wtqy,","ajjs,"];
   $norr = array_sort($orr);
   $norr = implode('',$norr);
   echo $norr."<br/><br/>";

   $prr = [100,'200',300,'400',500];
   $filtered = array_where($prr,function($value,$key){
       return is_string($value);
   });
   $filtered = implode('',$filtered);
   echo $filtered."<br/><br/>";

   $str = 'laravel';
   $arrr = array_wrap($str);
   $arrr = implode('',$arrr);
   echo $arrr."<br/><br/>";

    $data = ['products'=>['desk'=>['price'=>100]]];
    $price = data_get($data,'products.desk.price');
    echo $price."<br/><br/>";

    $data2 = [
        'product-1'=>['name'=>'D1','price'=>100],
        'product-2' =>['name'=>'D2','price'=>120],
    ];

    $gg2 = data_get($data2,'*.name');
    $gg2 = implode('',$gg2);
    echo $gg2."<br/><br/>";

    $qrr = [100,200,300];
    $first = head($qrr);
    echo $first."<br/><br/>";

    $llast = last($qrr);
    echo $llast."<br/><br/>";

    $path = app_path();
    echo $path."<br/><br/>";
    $bpath = base_path();
    echo $bpath."<br/><br/>";

    $cpath = config_path();
    echo $cpath."<br/><br/>";

    $dpath = database_path();
    echo $dpath."<br/><br/>";

    $ppath = public_path();
    echo $ppath."<br/><br/>";

    $rpath = resource_path();
    echo $rpath."<br/><br/>";

    $spath = storage_path();
    echo $spath."<br/><br/>";


    $convert = camel_case('hai_ahaha_shshs');
    echo $convert."<br/><br/>";
    // echo e('<html>foo</html>');
    // echo e('<html>eiranaz</html>');
    // $rech = ends_with('Liew Hung Yean','Yean');
    // echo $rech;

    $kcase = kebab_case('fooBar');
    echo $kcase."<br/><br/>";

    $nstr = 'The event take place btw :start & :end';
    $replaced = preg_replace_array('/:[a-z_]+/',['8:30','9:00'],$nstr);
    echo $replaced."<br/><br/>";

    $converted2 = snake_case('fooBar');
    echo $converted2."<br/><br/>";

    $result2 = str_after('This is my name','This is');
    echo $result2."<br/><br/>";

    $adjusted = str_finish('t/r','#%@*!');
    echo $adjusted."<br/><br/>";

    $truncated = str_limit('ag==asjalalalalalalalala',3);
    echo $truncated;



//    $data = ['products'=>['desk'=>['price'=>100]]];
//    $adata = data_fill($data,'products.desk.price',200);
//    $adata = implode('',$adata);
//    echo $adata;
   //data_fill($data,'products.desk,price',10);

    // $crr = ['product'=>['desk'=>['[price'=>100]]];
    // $crr = implode('',$crr);
    // print $crr;
    // $brr = array_collapse([1,2,3],[4,5,6],[7,8,9]);
    // $brr = implode('',$brr);
    // echo $brr;

    // $array = [10,20,30];
    // $array = implode('',$array);
    // $first = array_first($array,function($value,$key){
    //      return $value >= 150;
    //  });
    // echo $first;
?>
