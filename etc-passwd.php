<?php 
for($uid=0;$uid<2000;$uid++){ //cat /etc/passwd 
$nothing = posix_getpwuid($uid); 
if (!empty($nothing)) { 
while (list ($key, $val) = each($nothing)){ 
print "$val:"; 
} 
print "<br />"; 
} 
} 
?>
