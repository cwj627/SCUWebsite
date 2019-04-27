<table border="1px">
<?php
    for($i=1; $i<10;$i++){
        print("<tr>");
        for($j=1; $j<10;$j++){
            $k = $i*$j;
            print("<td>$i*$j=$k</td>");
        }
        print("</tr>");
    }
?>
</table>
<?php
	for($i=1; $i<50; $i++){
		if($i%15==0){
			print("<p>FizzBuzz</p>");
		}elseif ($i%3==0) {
			print("<p>Fizz</p>");
		}elseif ($i%5==0) {
			print("<p>Buzz</p>");
	}else{
		print("<p>$i</p>");
	}
}
?>
<?php
$fruit = array("apple", "orange", "banana", "strawberry");
echo $fruit[rand(0,sizeof($fruit)-1)];
?>


