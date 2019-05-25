<?php
    function biodata()
    {
        $data['Nama'] = 'William Roridande Aphrodita';
        $data['Address'] = 'Jatinom RT 05 RW 02 Desa Jatisrono Kecamatan Jatisrono';
        $data['hobbies'] = array('Badminton','Gaming');
        $data['Married'] = FALSE;
        $data['School'] = [[ 'highSchool' => 'SMA N 1 WONOGIRI','university'=>'Telkom University']];
        foreach($data as $highSchool=>$values){
            $object = (object) $values;
        } 
        $data['Skills'] = array(
                        'PHP' => '3',
                        'Javascript' => '3,5',
                        'HTML' => '4',
                        'ReactJS' => '3,5',
                        'CSS' => '4'
                    );
        
        return $data;
    }
    $data = biodata();
    $data_json = json_encode($data,JSON_PRETTY_PRINT);
    echo '<pre>Biodata'.$data_json.'</pre>';
?>