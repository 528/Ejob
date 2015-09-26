<?php

class mod_member extends Model {

    function mod_member() {
        parent::Model();
    }

    //Site User Related
    function get_member_form_list() {
        //$sortname = common::getVar('sidx', 'id');
        //$sortorder = common::getVar('sord', 'asc');
        //$sort = "ORDER BY $sortname $sortorder";

        $sql = "select * from user where user_type=1";
        $page = common::getVar('page', 1);
        $limit = common::getVar('rows');
        $i = 0;
        $tmp = $this->db->query($sql);
        $count = count($tmp->result_array());
        if ($count > 0) {
            $total_pages = ceil($count / $limit);
        } else {
            $total_pages = 5;
        }
        if ($page > $total_pages)
            $page = $total_pages;
        if ($limit < 0)
            $limit = 0;
        $start = $limit * $page - $limit;
        if ($start < 0)
            $start = 0;

        $sql_query = $this->db->query($sql . " limit $start, $limit");
        $rows = $sql_query->result_array();
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        foreach ($rows as $row) {
            if($row['status']==1){
                $status='Active';
            }else{
                $status='Inactive';
            }
            $responce->rows[$i]['id'] = $row['id'];
            $responce->rows[$i]['cell'] = array($row['name'], $row['birthdate'], $row['username'], $row['present_address'], $row['phone'], $row['email'], $status);
            $i++;
        }
        header("Expires: Sat, 17 Jul 2010 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . "GMT");
        header("Cache-Control: no-cache, must-revalidate");
        header("Pragma: no-cache");
        header("Author: Md. Forhadur Rahman");
        header("Email: forhad271@gmail.com");
        header("Content-type: text/x-json");
        echo json_encode($responce);

        return '';
    }

    function word_limiter($str, $limit = 100, $end_char = '&#8230;') {
        if (trim($str) == '') {
            return $str;
        }
        preg_match('/^\s*+(?:\S++\s*+){1,' . (int) $limit . '}/', $str, $matches);

        if (strlen($str) == strlen($matches[0])) {
            $end_char = '';
        }

        return rtrim($matches[0]) . $end_char;
    }

}
?>
