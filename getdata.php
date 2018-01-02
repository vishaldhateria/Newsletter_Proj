<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect("localhost", "root", "", "thedaily_dailyeye");
 
// Check connection
if($conn  === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$link= mysqli_real_escape_string($conn, $_GET['link']);
$section = mysqli_real_escape_string($conn, $_GET['section']);
$articlename = mysqli_real_escape_string($conn, $_GET['articlename']);




if ($_GET['section'] == "left") {
   
    // Attempt select query execution
    $sql = "SELECT * FROM post WHERE title LIKE '%" .$articlename . "%'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $term = strip_tags(substr($row['contents'], 0, 100));
                echo '< div  class =
               "col num6" style = "/* align-items: center; */Float: left;min-width: 260px;max-width: 260px;width: 260px;width: calc(1500% - 9725px);background-color: #f1f1f1;margin-left: 28px;" >
                    < div style = "background-color: transparent; width: 100% !important;" >
                    < div style = "border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-right: 0px; padding-left: 0px;" >
                    < div align = "center" class =
                "img-container center fullwidth" style = " background-color: white; " >
                    < a href = "'. $link . '" target = "_blank" style = " " >
                    < img class =
                "center fullwidth" align = "center" border = "0" src = "https://thedailyeye.info/dailyeye_cms/Image/2018/1/' . $row['file'] . '"
                    alt = "Image" title = "Image" style = "display:block;height:auto;max-width:100%; " vspace = "0" width = "290" >
                    < / a >
                    < / div >
                    < div style = " padding-bottom: 5px; " > < / div >
                    < div class =
                "m_2993541660094942074text-container m_2993541660094942074galileo-ap-content-editor" >
                    < div style = " text-align: left; padding-left: 10px; padding-right: 5px;" >
                    < div >
                    < a href = "' . $link . '" style = "color:rgb(0,0,0);font-family:Segoe UI,Lucida Grande,Tahoma,sans-serif;font-style:italic;font-weight:bold;text-decoration:none;"
                    target = "_blank" data - saferedirecturl = "' . $link . '" > ' . $row['title'] . '< / a >
                    < / div >
                    < div >
                    < br >
                    < / div >
                    < div >
                    < span style = "color:rgb(107,107,107);font-family:Segoe UI,Lucida Grande,Tahoma,sans-serif" > ' . $term . ' < / span >
                    < span style = "color:rgb(115,115,115);font-family:Segoe UI,Lucida Grande,Tahoma,sans-serif" > ...< / span >
                    < / div >
                    < / div >
                    < / div >
                    < br >
                    < div class =
                "m_4171356073472842590gl-contains-button" >
                    < a href = "' . $link . '" target = "_blank" >
                    < button type = "button" style = "color:#ffffff;background:rgb(54,97,189);border-radius: 12px;display:block;font-family:Arial,Verdana,Helvetica,sans-serif;font-size:14px;font-weight:bold;padding:7px 10px;text-decoration:none;border-width: 0px;" > Read More < / button >
                    < / a >
                    < table border = "0" cellpadding = "0" cellspacing = "0" class =
                "m_4171356073472842590editor-button" style = "min-width:100%;width:100%;padding-bottom: 10px;"
                    width = "100%" >
                    < tbody >
                    < tr > < / tr >
                    < / tbody >
                    < / table >
                    < / div >
                    < / div >
                    < / div >
                    < / div >';
            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
       
    }

}
if ($_GET['section'] == "right") {

    // Attempt select query execution
    $sql = "SELECT * FROM post WHERE title LIKE '%" . $articlename . "%'";
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $term = strip_tags(substr($row['contents'], 0, 100));

                echo '< div  class =
               "col num6" style = "/* align-items: center; */Float: left;min-width: 260px;max-width: 260px;width: 260px;width: calc(1500% - 9725px);background-color: #f1f1f1;margin-left: 28px;" >
                    < div style = "background-color: transparent; width: 100% !important;" >
                    < div style = "border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-right: 0px; padding-left: 0px;" >
                    < div align = "center" class =
                "img-container center fullwidth" style = " background-color: white; " >
                    < a href = "'. $link . '" target = "_blank" style = " " >
                    < img class =
                "center fullwidth" align = "center" border = "0" src = "https://thedailyeye.info/dailyeye_cms/Image/2018/1/' . $row['file'] . '"
                    alt = "Image" title = "Image" style = "display:block;height:auto;max-width:100%; " vspace = "0" width = "290" >
                    < / a >
                    < / div >
                    < div style = " padding-bottom: 5px; " > < / div >
                    < div class =
                "m_2993541660094942074text-container m_2993541660094942074galileo-ap-content-editor" >
                    < div style = " text-align: left; padding-left: 10px; padding-right: 5px;" >
                    < div >
                    < a href = "' . $link . '" style = "color:rgb(0,0,0);font-family:Segoe UI,Lucida Grande,Tahoma,sans-serif;font-style:italic;font-weight:bold;text-decoration:none;"
                    target = "_blank" data - saferedirecturl = "' . $link . '" > ' . $_POST['title'] . '< / a >
                    < / div >
                    < div >
                    < br >
                    < / div >
                    < div >
                    < span style = "color:rgb(107,107,107);font-family:Segoe UI,Lucida Grande,Tahoma,sans-serif" > ' . $term . ' < / span >
                    < span style = "color:rgb(115,115,115);font-family:Segoe UI,Lucida Grande,Tahoma,sans-serif" > ...< / span >
                    < / div >
                    < / div >
                    < / div >
                    < br >
                    < div class =
                "m_4171356073472842590gl-contains-button" >
                    < a href = "' . $link . '" target = "_blank" >
                    < button type = "button" style = "color:#ffffff;background:rgb(54,97,189);border-radius: 12px;display:block;font-family:Arial,Verdana,Helvetica,sans-serif;font-size:14px;font-weight:bold;padding:7px 10px;text-decoration:none;border-width: 0px;" > Read More < / button >
                    < / a >
                    < table border = "0" cellpadding = "0" cellspacing = "0" class =
                "m_4171356073472842590editor-button" style = "min-width:100%;width:100%;padding-bottom: 10px;"
                    width = "100%" >
                    < tbody >
                    < tr > < / tr >
                    < / tbody >
                    < / table >
                    < / div >
                    < / div >
                    < / div >
                    < / div >
                    <button onclick="myFunction()">Copy text</button>
';
            }
            // Close result set
            mysqli_free_result($result);
        } else {
            echo "<p>No matches found</p>";
        }
    } else {

    }

}


// close connection
mysqli_close($conn);
?>