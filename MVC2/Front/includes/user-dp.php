<?php
if (isset($_SESSION['UserLoggedIn'])) {
    $UserID = $_SESSION['UserID'];
    $profile_query = "SELECT * FROM users u JOIN user_profile up ON u.UserID = up.UserID WHERE u.UserID = {$UserID} ";
    $profile_query_result = mysqli_query($connection, $profile_query);
    confirmQuery($profile_query_result);

    if (mysqli_num_rows($profile_query_result) != 0) {
        $getUserDP = "SELECT ProfilePicture FROM user_profile WHERE UserID = {$UserID} ";
        $getUserDP_query = mysqli_query($connection, $getUserDP);
        confirmQuery($getUserDP_query);
        $getUserDP_row = mysqli_fetch_assoc($getUserDP_query);
        $DP_name = $getUserDP_row['ProfilePicture'];
        if ($DP_name != null) {
            $user_dp_path = $DP_name;
        } else {
            $user_dp_path = "../../Front/images/user-profile/default-profile-picture.png";
        }
    } else {
        $user_dp_path = "../../Front/images/user-profile/default-profile-picture.png";
    }   
}
