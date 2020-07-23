<?php
//求num的正数和序列
$num = $argv[1];
$haf = round($num/2);//用和的一半的round值，复杂度为O(n/2)
$list=[];
//正数和的规律就是当前n+(n-1)+(n-2)+...=和（num)
function getSmallerList($k,$n){
	$res=0;
	$list=[];
	$isValid=false;
	for($a=$k;$a>0;$a--){
		$res+=$a;
		$list[]=$a;
		if($res==$n){
			$isValid=true;	
			break;
		}
			
	}
	if($isValid==true){
		return $list;
	}else{
		return array();
	}
}
for($i=$haf;$i>0;$i--){
	if($i==$num){
		continue;
	}
	$res=getSmallerList($i,$num);
	if($res){
		$list[]=$res;
	}	
}
var_dump($list);
