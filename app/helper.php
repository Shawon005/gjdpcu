<?php

function table($table,$col,$id,$col1)
{
  $name=DB::table($table)->where($col,$id)->first();
  if($name==null)
    return '';
  else  
    return $name->$col1;
}
function ordinal($number) {
  $ends = array('th','st','nd','rd','th','th','th','th','th','th');
  if ((($number % 100) >= 11) && (($number%100) <= 13))
      return $number. 'th';
  else
      return $number. $ends[$number % 10];
}