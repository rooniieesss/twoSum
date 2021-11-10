<?php
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