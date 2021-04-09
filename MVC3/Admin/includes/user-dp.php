<?php
if (isset($_SESSION['UserLoggedIn'])) {
    $UserID = $_SESSION['UserID'];
    $profile_query = "SELECT * FROM users u JOIN user_profile up ON u.UserID = up.UserID WHERE u.UserID = {$UserID} ";
    $profile_query_result = mysqli_query($connection, $profile_query);
    confirmQuery($profile_query_result);

    // get default dp
    $get_default_dp = mysqli_query($connection, "SELECT * FROM system_configuration c WHERE c.Key = 'DefaultMemberDisplayPicture' ");
    confirmQuery($get_default_dp);
    $get_default_dp_path = mysqli_fetch_assoc($get_default_dp)['Value'];

    if (mysqli_num_rows($profile_query_result) != 0) {
        $getUserDP = "SELECT ProfilePicture FROM user_profile WHERE UserID = {$UserID} ";
        $getUserDP_query = mysqli_query($connection, $getUserDP);
        confirmQuery($getUserDP_query);
        $getUserDP_row = mysqli_fetch_assoc($getUserDP_query);
        $DP_name = $getUserDP_row['ProfilePicture'];
        if ($DP_name != null) {
            $user_dp_path = $DP_name;
        } else {
            $user_dp_path = $get_default_dp_path;
        }
    } else {
        $user_dp_path = $get_default_dp_path;
    }   
}
