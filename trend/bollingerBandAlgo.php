<?php
function bollingerBand($array=null){
$arrayCount=count($array);
for($i=0;$i<($arrayCount-14);$i++){    
    $firstFifteen = array_slice($array,$i,$i+14);
	$actualValue=$array[$i]; 
    $middleBand = round(array_sum($firstFifteen) / count($firstFifteen),2);
    $SD = stats_standard_deviation($firstFifteen);
    $upperBand = round($middleBand+($SD*2),2);
    $lowerBand = round($middleBand-($SD*2),2);
    $totalBandwidth = $upperBand-$lowerBand;
   $bollingerDataForFifteenDays[] = array('actualValue'=>$actualValue,'middleBand'=>$middleBand,'upperBand'=>$upperBand,'lowerBand'=>$lowerBand,'totalBandwidth'=>$totalBandwidth);
   
}
 return $bollingerDataForFifteenDays;
}

function stats_standard_deviation(array $a, $sample = false) {
        $n = count($a);
        if ($n === 0) {
            trigger_error("The array has zero elements", E_USER_WARNING);
            return false;
        }
        if ($sample && $n === 1) {
            trigger_error("The array has only 1 element", E_USER_WARNING);
            return false;
        }
        $mean = array_sum($a) / $n;
        $carry = 0.0;
        foreach ($a as $val) {
            $d = ((double) $val) - $mean;
            $carry += $d * $d;
        };
        if ($sample) {
           --$n;
        }
        return sqrt($carry / $n);
    }
?>