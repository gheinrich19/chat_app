<?php

    function get_msg() {
            $query = "SELECT `sender`, `message`, FROM `chat.`chat`";

            $ru
    }

    function set_msg($sender, $message) {
        
        if(!empty($sender) && !empty($message)) {
            $sender = mysqli_real_escape_string($sender);
            $message = mysqli_real_escape_string($message);

            $query = "INSERT INTO `chat`.`chat` VALUES (null, `{$sender}`, `$message`)";

            if($run = mysqli_query($query)) {
                return true;
            } else {
                return false;
            }
        } else {

        }
    }
?>

/*





*/