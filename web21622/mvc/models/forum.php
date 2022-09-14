<?php
function forum_model_list(){
    require(CONNEX_DIR);
    $sql = "SELECT * FROM forum";
    $result = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($con);
    return $result;
}

?>