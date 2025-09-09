<?php
function mergeTwoList($list1, $list2)
{
    $list3 = [];
    $i = 0;
    $j = 0;

    while ($i < count($list1) && $j < count($list2)) {
        if ($list1[$i] < $list2[$j]) {
            array_push($list3, $list1[$i]);
            $i++;
        } else {
            array_push($list3, $list2[$j]);
            $j++;
        }
    }
    function addRemainingNumber(&$finalList, $list, $count) {
        while ($count < count($list)) {
            array_push($finalList, $list[$count++]);
        }
    }

    addRemainingNumber($list3, $list1, $i);
    addRemainingNumber($list3, $list2, $j);

//    function checkTheLastNumbersOfTheLists(&$finalList, $list, $count){
//        if ($count < count($list)) {
//            for ($k = $count; $k < count($list); $k++) {
//                array_push($finalList, $list[$k]);
//            }
//            return $finalList;
//        }
//    }
//    checkTheLastNumbersOfTheLists($list3, $list1, $i);
//    checkTheLastNumbersOfTheLists($list3, $list2, $j);

    print_r($list3);
}

//mergeTwoList([1, 2, 4], [1, 3, 4]);
//mergeTwoList([1, 2, 4, 5, 6], [1, 3]);
mergeTwoList([], [0]);