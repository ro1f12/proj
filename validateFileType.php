<?php
	
    /**
     * @author : rofi
     * @desc  file type validation function
     * @param allowed array contains all allowed extensions list .validateFileType
     *          file name is the file name.validateFileType
     * <example:>
     * $allowed = array('jpg', 'png', 'jpeg');
     * $filename = $_FILES['file']['name'];
     * validateFileType($allowed, $filename);  
     * </example:>
     */
    
    function validateFileType($allowed, $filename){
        //take the extension of the file
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        //return the result
        if(in_array($ext, $allowed)){
            //set the message array
            $result = [
                "status" => "true",
                "msg" => "file validated"
            ];
        }
        else
        {
            $result = [
                "status" => "false",
                "msg" => "file not valid"
            ];
        }

        //return the message array
        return $result;
    }

