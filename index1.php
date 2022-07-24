<?php
$filename = "counter.txt"; // predifined text file with number
$fd = fopen ($filename, "r"); // opening the text file
$contents = fread ($fd, filesize($filename)); // reading the text file and saving in the counter variable
fclose ($fd); // closing the file
$contents=$contents+1; // incrementing the counter value by one
echo $contents; // printing the incremented counter value



$cdisp=$contents; // storing the counter value in another variable
$divisor=10; // setting the divisor value to 10
$digitarray=array(); // creating an array


do {$digit=($cdisp % $divisor); // looping through the till all digits are taken
$cdisp=($cdisp/$divisor); // getting the digits from right side
array_push($digitarray,$digit); // storing them in the array
} while($cdisp >=1); // condition of do loop


// array is to be reversed as digits are in reverse order
$digitarray=array_reverse($digitarray); 

$dir="d5"; // setting the direcotry value. for different styles


while (list ($key, $val) = each ($digitarray)) { // looping through the array
echo "<img src='$dir/$val.png'>"; 
// calling one by one digits based on the value of the array
} // end of the loop




/*
The above code will do the reading and displaying the counter to the screen, now we have to store the above value in the same counter.txt file by overwriting the old data with the new counter data. We will open the counter.txt file in write mode and then write to it.
*/

$fp = fopen ($filename, "w"); // open the file in write mode
fwrite ($fp,$contents); // write the new data to the file
fclose ($fp); // closing the file pointer
?>