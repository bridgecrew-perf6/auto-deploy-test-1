<?php 
echo "Code Executed";

$instance_id = file_get_contents("http://instance-data/latest/meta-data/instance-id");
echo "You Current Instance Id is : ". $instance_id, "\n";
