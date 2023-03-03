<?php

$cityArray = [
    "Киев",
    "Харьков",
    "Одесса",
    "Днепр",
    "Донецк",
    "Запорожье",
    "Львов",
    "Кривой Рог",
    "Николаев",
    "Мариуполь",
    "Винница",
    "Макеевка",
    "Херсон",
    "Сумы",
    "Черновцы",
    "Полтава",
    "Черкассы",
    "Житомир",
    "Чернигов",
    "Кременчуг",
    "Ивано-Франковск",
    "Каменское",
    "Кировоград",
    "Славянск",
    "Бердянск",
    "Ужгород",
    "Павлоград",
    "Лисичанск",
    "Константиновка",
    "Тернополь",
    "Красноград",
    "Красноармейск",
//    "Каменец-Подольский",
    "Мукачево",
    "Бровары",
    "Алчевск",
    "Северодонецк",
    "Никополь",
    "Железнодорожный",
    "Славута",
    "Мелитополь",
    "Белая Церковь",
    "Луганск",
    "Симферополь",
    "Бердичев",
    "Полесское",
    "Конотоп",
    "Коломыя",
    "Ровно",
//    "Камянка-Днепровская"
];

$prizes = [
    '1$',
    '5$',
    '10$',
    '50$',
    '100$',
    'MacBook Pro 16',
    'Iphone 14 pro max',
    'iPhone 14 pro',
    'iPhone 14',
    'Apple watch 44mm GOLD',
    'iPad Pro'
];

$return = [];
for ($i = 0; $i < $_POST['getdata']; $i++) {
    $return[] = [
        'name' => $cityArray[rand(0, count($cityArray) - 1)],
        'prize' => getRandomItem($prizes, 0.65),
    ];
}

echo json_encode($return);


function getRandomItem($arr, $chance)
{
    $totalWeight = 0;
    $weights = array();
    foreach ($arr as $index => $item) {
        $weight = pow($chance, $index);
        $totalWeight += $weight;
        $weights[] = $weight;
    }
    $randomWeight = mt_rand(0, ($totalWeight * 100));
    $weightSum = 0;
    foreach ($weights as $index => $weight) {
        $weightSum += ($weight * 100);
        if ($randomWeight <= $weightSum) {
            return $arr[$index];
        }
    }
}
