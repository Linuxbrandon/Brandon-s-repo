<php
echo 'What's your name?  '
$name = fgets(STDIN);
echo $name +  'ran into a dragon!!!  Care to engage?  ';
$answer = fgets(STDIN);
$health = 10;
$dhealth = 15;
$null = 0;

if ($answer == 'yes') {
	echo $name + ' stands bravely against the foe!  ';
	while ($dhealth > $null && $health > $null) {
		$damage = rand(1,6);
		$strike = rand(1.10);
		echo $name + ' hit the dragon for' + $strike;
		$dhealth = $dhealth - $strike;
		echo 'The dragon hits' + $name + ' for ' + $damage;
		}
	if ($dhealth > $health) {
		echo 'The dragon wins,' + $name + ' lay crumpled on the ground with a flesh wound  ';
		} else {
		echo 'Somehow, ' + $name + ' stands triumphant!  Pat yourself on the back and eat a sandwich  ';
	}
} else if ($answer == "no") {
	echo 'You cower in fear and run away, soiling yourself  ';
} else {
	echo 'That doesnt make any sense!  In ' + $name + 's indecision, the dragon eats ' + $name;
	$health = $null;
}

if ($health > $null) {
	echo $name 
}

echo 'End of Game';
?>