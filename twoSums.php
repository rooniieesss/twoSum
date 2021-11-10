<?php
function twoSums($nums, $target) {
    $comp = [];

    for ($i = 0; $i < count($nums); $i++ ) {
        if ($comp[$nums[$i]] >= 0) {
            return [$comp[$nums[$i]], $i];
        }
        $comp[$target-$nums[$i]] = $i;
    }
}

function twoSum(array $nums, int $target): array
{
    foreach ($nums as $key => $val) {
        unset($nums[$key]);
        $nextKey = array_search(($target - $val), $nums);
        if ($nextKey) {
            return [$key, $nextKey];
        }
    }
    return [];
}

var_dump(twoSum([3,3], 6));