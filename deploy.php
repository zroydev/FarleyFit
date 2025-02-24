<?php
// Execute the deployment script
$output = shell_exec('/bin/bash /home/reactiveme/zackroy.com/deploy.sh 2>&1');
echo "<pre>$output</pre>";
?>
