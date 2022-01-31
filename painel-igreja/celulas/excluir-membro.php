<?php

$id = @$_POST['id'];

$query = $this->deleteMembroCelulas($id);
echo $query;
?>