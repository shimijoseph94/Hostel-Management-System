<?php  include_once("header3.php");
if(isset($_POST['dealloc']))
{
    $regid = $_POST["rid"];
    echo $regid;
    $query1 = "SELECT * FROM `roomallotment` WHERE `Reg_id`=$regid";
    echo $query1;
	$result1 = mysqli_query($con, $query1);
    $row1=mysqli_fetch_array($result1);
	$rno=$row1['roomid'];
	echo $rno;
	
	
	$query3 = "DELETE FROM roomallotment WHERE `Reg_id`='$rno'";
    echo $query3;
	$result3 = mysqli_query($con, $query3);

    echo '<script language="javascript">';
    echo 'alert("DEALLOCATED")';
    echo '</script>'; 
	$query2 = "UPDATE `roominfo` SET `Occupied`=`Occupied`-1 WHERE `roomid`=$rno";
    echo $query2;
	$result2 = mysqli_query($con, $query2);
}
 	
    <?php
 }
 ?>
 
   </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>