<?php include 'inc/config.php'; ?>
<?php 
  include('inc/head.php'); 
  session_start();

  if (isset($_SESSION['rollno'])) {
    
  }
  else{
    header('location:index.php');
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bonafide Letter</title>
    <link href="print.css" rel="stylesheet" type="text/css" media="print">
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

<style>


body {
  margin: 0;
  background: #ccc;
}

article {
  width: 210mm;
  height: 270mm;
  margin: 20px auto;
  position: relative;
  background-color: white;
}

address {
  position: absolute;
    bottom: 95.7mm;
    right: 20mm;
}

h1 {
  position: absolute;
  top: 12mm;
  left: 20mm;
  width: 128px;
  height: 128px;
  font-size: 20px;
  letter-spacing: 1px;
  text-align: center;
  padding: 44px 0;
  color: white;
  text-shadow: 1px 1px 1px black;
}

</style>


  </head>
  <body>
    <div id="bonafide">

    <article>
      <table>
        <tr>
    
          <td>
    
     <p style="    font-size: 12px;
    width: 25em;
    margin: 2em 0 3em 2em;"><strong>Dr.M.Davamani Christober</strong>M.Sc., M.Phil., Ph.D.,<br/>
     Principal & Secretary</p>
    
      </td>
      
      <td>
         <img src="logo.png" style="margin: 2em 0 11px 20px;
    width: 5em;">

      </td>
     
    
      <td>
      
      <p style="margin: 2em 0 0 13em;
    font-size: 12px;">The American College<br/>
      Madurai - 625002, India<br/>
      Ph: 2530070, 2530973<br/>
      Fax: 0452-2520711<br/>
      Mail: acmdu1881@gmail.com</p>

      </td>
      
      </tr>
</table>
<hr style="margin-top: 1rem;
    margin-bottom: 1rem;
    margin-left: 1em;
    margin-right: 1em;
    /* border: 0; */
    border-top: 1px solid;
    border-width: medium;">
<div class="content" style="padding:10em 2em 5em 2em;">
  <?php 
                  $sql = "SELECT * FROM users WHERE rollno='".$_SESSION['rollno']."'";
                  $que = mysqli_query($con,$sql);
                  $cnt = 1;
                  while ($result = mysqli_fetch_assoc($que)) {
                  ?>

  <h3 style="text-align:center;">BONAFIDE CERTIFICATE</h3>

<p style="    line-height: 2;
    padding-top: 20px;
    text-indent: 86px;
    font-size: 83%;"> 
      This is to certify that <strong><?php echo $result['name']; ?></strong> <strong>(<?php echo $result['rollno']; ?>)</strong> is a student
of our college studying <?php echo $result['syear']; ?> year <strong><?php echo $result['department']; ?></strong> during the academic year <?php echo $result['ayear']; ?>.</p>



</div>

<div class="dd" style="position: absolute;
    bottom: 105mm;
    left: 10mm;">
Madurai<br />
Date: <?php echo $result['createddate']?></div>
      <address>
        <img src="download.png" style="width:6em;">
        <p style="margin: 0 0 1em 10px;">Principal</p>
      </address>
    </article>
</div>
    <?php $cnt; }?>
<center>
  <p class="text-center">
    <button onclick="window.print();" id="print-btn" class="btn btn-primary">Download</button>
  </p>
</center>
 

<script type="text/javascript">
function generatePDF() {
  const element = document.getElementById("bonafide")
}

</script>
  </body>
</html>