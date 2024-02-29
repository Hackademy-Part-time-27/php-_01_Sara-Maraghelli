<?

$words1 = [
    'una',
    67,
    'vita',
    'che',
    'mi',
    'Sei',
    [
        'oscura',
        'mai',
        89,
        [
            'il',
            [
                'tortellino',
                'nel',
                [
                    'abbia',
                    'la',
                    'gustato',
                    
                ],
            ]
        ],
        'buono',
        'per'
    ],
    'più'
];


print_r($words1);


$frase = $words1[5].' '.$words1[6][3][0].' '.$words1[6][3][1][0].' '.$words1[7].' '.$words1[6][4].' '.$words1[3].' '.$words1[6][3][1][2][0].' '.$words1[6][1].' '.$words1[6][3][1][2][2];

echo $frase;
