<?php
$contascorrentes = [
    '09746729209' => [
        'titular' => 'Matheus',
        'saldo' => 1000
    ],

    '09746729289' => [
        'titular' => 'Gabriel',
        'saldo' => 700
    ],

    '09746729247' => [
        'titular' => 'Maria',
        'saldo' => 900
    ]
];

if($contascorrentes['09746729209']['saldo'] < 500){
    echo "Você não possui saldo suficiente" . "<br>";
}else($contascorrentes['09746729209']['saldo'] -= 500);


foreach ($contascorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . " " . $conta['saldo'] . "<br>";
};



//for($i = 0; $i < count($contascorrentes); $i++){
//    echo $contascorrentes[$i] ['titular'] . "<br>";
//}