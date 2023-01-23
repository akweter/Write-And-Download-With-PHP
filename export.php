<?php
    if(isset($_SERVER['REQUEST_METHOD']) && strip_tags($_SERVER['REQUEST_METHOD']) == strip_tags('POST')){
        if (isset($_POST['create_doc'])) {
            if (isset($_POST['topic']) && !empty($_POST['topic']) && isset($_POST['bodyContent']) && !empty($_POST['bodyContent'])) {
                $Output = "
                    <h1>".$_POST['topic']."</h2>
                    <p>".nl2br($_POST['content'])."</p>";

                $filename = "BSP-".date("d-m-Y").'.docx';

                header("Cache-Control: ");
                @header("Pragma: ");
                header("Expires: 0");
                header("Content-Type: application/vnd.msword");
                header("content-disposition: attachment; filename=".$filename);

                echo "<html";
                echo $Output;
                echo "</html>";
            }
            else {
                echo "<script>alert('All fields are required!')</script>"; 
			echo "<script>window.location='index.php'</script>";
            }
        }
        else {
            die('Sorry, no proper data was passed');
        }
    }
    else {
        die('Access Denied');
    }
?>