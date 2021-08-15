<?php 
   
$members_2 = [
    '本田' => [
        'name' => '本田',
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'name' => '香川',
        'height' => 160,
        'hobby' => 'サッカー'
    ]
];

foreach($members_2 as $members_1){
    foreach($members_1 as $member => $value){
        echo $member . 'は' . $value . 'です。';
        echo "<br/>";
    }
}

?>