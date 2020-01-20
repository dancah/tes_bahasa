<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Multi Bahasa</title>
</head>
<body>

  <table>

  <?php

  foreach($berita->result_array() as $b)

  {

      echo "<tr><td><a href='".base_url()."index.php/tes/detail/".$b['id_berita']."'>".$b['judul']."</a></td></tr>";

  }

  ?>

  </table>

</body>
</html>
