
<?php
class csv_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function uploadData()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }//keep this if condition if you want to remove the first row
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
                $insert_csv['name'] = $csv_line[0];//remove if you want to have primary key,
                $insert_csv['email'] = $csv_line[1];
                $insert_csv['password'] = $csv_line[2];

            }
            $i++;
            $data = array(
                'name' => $insert_csv['name'] ,
                'email' => $insert_csv['email'],
                'password' => $insert_csv['password']
               );
            $data['crane_features']=$this->db->insert('register', $data);
        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }
}