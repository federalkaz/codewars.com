<?php

function betterThanAverage($classPoints, $yourPoints) {
    if (is_array($classPoints)) {
        $classPoints[] = $yourPoints;
        // Для отладки
        //echo 'Сумма оценок = ' . array_sum($classPoints) . ' Тип данных: '. gettype(array_sum($classPoints)) . PHP_EOL;
        //echo 'Количество оценок = ' . count($classPoints) . ' Тип данных: ' . gettype(count($classPoints)) . PHP_EOL;
        $averageRating = array_sum($classPoints) / count($classPoints);
        // Для отладки
        //echo 'Моя оценка: ' . $yourPoints . ' Тип данных: ' . gettype($yourPoints) . PHP_EOL;
        //echo 'Средняя оценка: ' . $averageRating . ' Тип данных: ' . gettype($averageRating) . PHP_EOL;
        if ($yourPoints > $averageRating) {
            return true;
        } else {
            return false;
        }
    }
}

echo betterThanAverage([3, 3, 4, 4, 5, 5, 3, 3, 3, 3, 4, 5], 5);