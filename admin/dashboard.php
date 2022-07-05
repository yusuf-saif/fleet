 <?php 
$q=mysqli_query($conn,"select * from member ");
$r=mysqli_num_rows($q);



$q2=mysqli_query($conn,"select * from member where gender='m'");
$r2=mysqli_num_rows($q2);


$q3=mysqli_query($conn,"select * from member where gender='f'");
$r3=mysqli_num_rows($q3);




$q1=mysqli_query($conn,"select * from groups ");
$r1=mysqli_num_rows($q1);



?>


                    <div class="col-lg-12"><br>
                        <b><h4>Important Instructions !</b></h4> <br><h5> <b>Don't Sale or Publish this source code without permission of Original Author. However You can use it as your Academic Project. </h5></b>
                        <div class="row">
                            <div class="col-md-3 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"> Total Goups</div>
                                            <h2><?php echo $r1; ?></h2>
                                        </div>
                                        <canvas id="seolinechart1" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"> Total Members</div>
                                            <h2><?php echo $r; ?></h2>
                                        </div>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"> Total<br> Men <br>Members</div>
                                            <h2><?php echo $r2; ?></h2>
                                             <canvas id="seolinechart3" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-5 mb-3">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon"> Total Women Members</div>
                                            <h2><?php echo $r3; ?></h2>
                                             <canvas id="seolinechart2" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
            <div class="card mt-5">
                <h2 class="card-header">Recent Group Members</h2>
                
</div>
</div>
<div class="col-12">
            <div class="card mt-5">
                <div class="card-body table-responsive">
    
    <table id="dom-jqry" class="table table-striped text-center">
    <tr class="active">
        <th>Sr.No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Group</th>
        <th>Date</th>
    </tr>
        <?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['first_name']."</td>";
echo "<td>".$row['last_name']."</td>";
echo "<td>".$row['gender']."</td>";

$q1=mysqli_query($conn,"select * from groups where group_id='".$row['group_id']."'");
$r1=mysqli_fetch_assoc($q1);

echo "<td>".$r1['group_name']."</td>";
echo "<td>".$row['join_date']."</td>";

?>
<?php 

echo "</tr>";
$i++;
}
        ?>
</table>
</div>
                    