<?php 

class Format
{

    public function formatDate($date)
    {
        return date('F j,Y,g:i a', strtotime($date));
      
    }

    public function validation($data){
        $data=trim($data);
        $data= stripcslashes($data); // miče backslash
        $data=htmlspecialchars($data); //convert predefined charachters to html entries
        return $data;

    }

    public function textShorten($text, $limit = 400)
    {
        $text = $text. "";
        $text = substr($text, 0, $limit);
        $text = $text."..";
        return $text;
    
    
    }
    
}


?>