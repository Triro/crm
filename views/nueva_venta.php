<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $selectedValue = $_POST['nvc_select_pn'];
  echo "Selected value: $selectedValue";
}
?>