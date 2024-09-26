<?php
    session_start();
    function changeFilename($type, $filename, $username) {
        return $type . "-" . md5($username);
    }
    function checkFileType($filetype) {
        $whitelist = ["jpeg", "png", "jpg"];
        if (in_array($filetype, $whitelist)) {
            return true;
        } else {
            return false;
        }
    }
?>