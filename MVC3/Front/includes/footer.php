<?php
$sys_config = mysqli_query($connection, "SELECT * FROM system_configuration ");
confirmQuery($sys_config);
$values = array();
$i = 1;
while ($row = mysqli_fetch_assoc($sys_config)) {
    $values[$i] = $row['Value'];
    $i++;  
}
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-12 text-left">
                <p>Copyright &copy; TatvaSoft All Rights Reserved.</p>
            </div>
            <div class="col-md-6 col-sm-4 col-12 text-right">
                <ul class="social-list">
                    <li><a class="facebook-img" href="<?php echo $values[4]; ?>"><img src="../images/Homepage/facebook.png" alt=""></a></li>
                    <li><a class="twitter-img" href="<?php echo $values[5]; ?>"><img src="../images/Homepage/twitter.png" alt=""></a></li>
                    <li><a class="linkedin-img" href="<?php echo $values[6]; ?>"><img src="../images/Homepage/linkedin.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>