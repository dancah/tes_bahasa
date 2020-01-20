<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Multi Bahasa</title>
</head>
<script language="javascript" type="text/javascript">
 function lanfTrans(lan)
 {
   switch(lan)
   {
   case 'en': document.getElementById('dlang').value='en';document.langForm.submit(); break;
   case 'fr': document.getElementById('dlang').value='fr'; document.langForm.submit(); break;
   case 'es': document.getElementById('dlang').value='es'; document.langForm.submit(); break;
   case 'id': document.getElementById('dlang').value='id'; document.langForm.submit(); break;

   }
 }
</script>
<body>
  <?php

      echo form_open('tes/languages/',array('name'=>'langForm','id'=>'langForm'));

      $id = $this->uri->segment(3);

  ?>

      <input type="hidden" name="dlang" id="dlang">

      <input type="hidden" name="det" id="det" value="<?php echo $id; ?>">

      <input type="hidden" name="current" id="current" value="<?php echo substr(uri_string(),1,strlen(uri_string()));?>">

      <img src="<?php echo base_url()?>images/fr.jpg" onClick="lanfTrans('fr');" title="French" width="50px"> &nbsp;

      <img src="<?php echo base_url()?>images/en.jpg" onClick="lanfTrans('en');" title="English" width="50px"> &nbsp;

      <img src="<?php echo base_url()?>images/sp.jpg" onClick="lanfTrans('es');" title="Spanish" width="50px"> &nbsp;

      <img src="<?php echo base_url()?>images/ind.jpg" onClick="lanfTrans('id');" title="Indonesia" width="50px"> &nbsp;

  <?php
      echo form_close();
  ?>
  </body>
  <div id="soal">
    <br> </br>
  <table>
  <?php
  foreach($berita->result_array() as $b)
  {
      google_translate($b['judul'],$lang,"en","text");
      echo "<br><br>";
      google_translate($b['isi_berita'],$lang,"en","text");
}
  ?>
  </table>
</html>
