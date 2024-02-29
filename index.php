<?
//Traccia 1
//$name="Sara";
//$female=true;
//$age=33;
//$float=3.2;

//var_dump($name);
//var_dump($female);
//var_dump($age);
//var_dump($float);

//const NAME="Sara";
//const FEMALE=true;
//const AGE=33;
//const FLOAT=3.2;

//Traccia 2
//$text1="Marco";
//$text2="hai";
//$text3="sete";
//$text4="?";
//$text5="Perchè";
//$text6="hai";
//$text7="bevuto";
//$text8="tutto";

//echo $text1. " ".$text2." ".$text3.$text4. " ".$text5." ".$text6." ".$text7." ".$text8; 

//Traccia 3

$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'che'
    ]
];

$di="di";
$una="una";

//var_dump($words1);
//var_dump($words2);

$result= $words1[6][3][1][1]. " " .$words1[6][3][0]." " .$di ." ". $words1[6][3][1][0]." ".$di." ".$words2['elemento2']." ".$words1[2]." ".$words1[4]." ".$words1[6][4]." ".$words1[6][5]." ".$una." ".$words1[6][3][1][2][0]." ".$words1[6][0]." , ".$words2['elemento3'][2]." ".$words1[6][3][1][2][1]." ".$words1[7]." ".$words1[6][3][1][2][2][0]."  ".$words1[6][1]."  ".$words2['elemento3'][1];

echo $result;

//Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura , ché la diritta via  era  smarrita