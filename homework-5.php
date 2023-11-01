<<?php

echo "<h1><u> Html Entities </u></h1>";
$data = "<script> alart() </script>";
$convertData= htmlentities($data);
echo $convertData;


// String Repeat

echo "<h1><u> String Repeat </u></h1>";
$sting= "nazmul hasan";
echo str_repeat($sting, 3) ;

// Explode Method

echo "<h1><u> Explode Text </u></h1>";
$user = "nazmul hasan";

echo '<pre>';
 print_r(explode(".", $user));
echo '</pre>';

// File Format Checking using end funciton

echo "<h1><u> File Format Check </u></h1>";
$fileName= "DIPLOMA IN COMPUTER ENGINEERING.docx.png.jpeg";
$fnArray= explode(".", $fileName);

echo '<pre>';
 print_r($fnArray);
echo '</pre>';

if(end($fnArray) == "jpeg"){
    echo "Successfully Upload Your File";
}else{
    echo "Support only jpeg and png format";
}


?>

<input type="file">


<?php

// Explode Method

echo "<h1><u> Add Data </u></h1>";
$userName = ["nazmul","hasan",];

echo implode(" ", $userName);



// Array count function

echo "<h1><u> Count User Id </u></h1>";
$user= [
    [
        'id' => 1,
        'Name' => "X",
    ],
    [
        'id' => 2,
        'Name' => "Y",
    ],
    [
        'id' => 3,
        'Name' => "Z",
    ],
];

    echo count($user);


// Count User Information

echo "<h1><u> Count Information </u></h1>";
$users= [
    [
        'id' => 1,
        'Name' => "X"
    ],
    [
        'id' => 2,
        'Name' => "Y"
    ],
    [
        'id' => 3,
        'Name' => "Z"
    ],
];
    if(count($users) > 3){
        echo "Entry Over";
    }else{
        echo "Entry Allow";
    }



// Array Push, Pop, Unshift and Shift Function

// array_push

echo "<h1><u> Data Insert And Delete </u></h1>";
$userData= ['id','Name','Phone'];
array_push($userData,"E-mail",[
    'a'=> 'Adderss', 
    'b'=> 'P.Address']);

echo '<pre>';
 print_r($userData);
echo '</pre>';


// array_pop

$userData= ['id','Name','Phone'];
array_pop($userData);
array_pop($userData);

    echo '<pre>';
    print_r($userData);
    echo '</pre>';


// array_unshift

$userData= ['id','Name','Phone'];
array_unshift($userData, "Sl.No");

    echo '<pre>';
    print_r($userData);
    echo '</pre>';


// array_shift

$userData= ['id','Name','Phone'];
array_shift($userData);

    echo '<pre>';
    print_r($userData);
    echo '</pre>';




// Reverse Array Function

echo "<h1><u> Reverse Data </u></h1>";
$fruits= ['Mango','Bannana','Goava','Carrot'];

    echo '<pre>';
    print_r (array_reverse($fruits));
    echo '</pre>';

    



// Difference Array Function

echo "<h1><u> Data Differance </u></h1>";
    $difData= [
        'id' => 01,
        'Name' => "nazmul",
        'email' => "nazmul@gamil.com"
    ];
    $updifData= [
        'id' => 02,
        'Name' => "nazmul",
        'email' => "nazmul@gamil.com"
    ];

echo '<pre>';
print_r(array_diff($difData, $updifData));
echo '</pre>';



// Empty Function

echo "<h1><u> Empty Data Check </u></h1>";
$ckData= '           Nazmul';
var_dump(empty(trim($ckData)));
echo "<br>";

    if(empty(trim($ckData))){
        echo 'Invalid Empty';
    }else{
        echo 'Good Job';
    }

// Isset Function

echo "<h1><u> Value Check </u></h1>";
$ckData= '';
var_dump(isset($ckData));