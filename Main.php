<!DOCTYPE html>
<html>
<head>
    

    <?php include_once('header.php') ?>
    <?php include_once('menu.php') ?>
    <script language="JavaScript">
        function confirmDelete(){return confirm('คุณต้องการดูรายงาน ?');}

    </script>
</head>
<body>
    <div class="tile is-parent">
        <article class="tile is-child notification is-info">
            <!--<p class="title">Report</p>-->
            <?php
            echo" <h1><U><center>บริษัท เพียวนา จำกัด</U></center></h1>";
            echo"<h1><center>เลือกรายงาน</h1></center>";
            $data=array("form1","form2","form3","form4","form5",);
            $dataname=array("รายงานรายได้ประจำวัน",
                "รานงานสกุลเงินที่ขายดีที่สุดประจำวัน",
                "รายงานรายได้ประจำเดือน",
                "รายงานค่าเรท ประจำวัน",
                "รายงานสกุลเงินที่ขายดีที่สุดประจำเดือน");
            echo"<center>";
            echo"<form  method='post'action='main1.php'>";
            
            echo " <span class='select'>";

            echo"<select name='select'>"; 
            for ($i = 0; $i < count($data); $i++) {
                echo"<option value'$data[$i]'>".$dataname[$i]."</optipn>";

            }
          

            echo"</select>"; 
            echo "</span> ";
            echo'<input type="submit"  class="button is-success" name="submit" value="ดูรายงาน" onClick="confirmDelete();"  >';
            echo "&nbsp; <a class='button is-danger'  onClick='window.history.back();''>Back</a>";
            
            echo"</form>";


            ?>
     
        </article>
    </div>
</body>
</html>