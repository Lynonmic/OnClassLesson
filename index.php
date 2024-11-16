<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(!isset($_POST['gt'])) echo "loi";
        if(isset($_FILES['ha']) && $_FILES['ha']['error']==0)
        {
            $fileName = $_FILES['ha']['name'];
            $tempName = $_FILES['ha']['tmp_name'];
            echo "$fileName";
            if(move_uploaded_file($tempName,"image/".$fileName))
            {
                echo "xong";
            }
        }
    }
?>