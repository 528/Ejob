<?php

class mod_admin extends Model {

    function mod_admin() {
        parent::Model();
    }

    function get_adminGrid() {
        $sql = "select * from admin";
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
            $description = $this->word_limiter(trim(strip_tags($row['password'])), 5);
            $responce->rows[$i]['id'] = $row['id'];
            $responce->rows[$i]['cell'] = array($row['id'], $row['user_id'], $description, $row['email']);
            $i++;
        }
        header("Expires: Sat, 17 Jul 2010 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . "GMT");
        header("Cache-Control: no-cache, must-revalidate");
        header("Pragma: no-cache");
        header("Author: Md. Anwar Hossain");
        header("Email: anwarworld@gmail.com");
        header("Content-type: text/x-json");
        echo json_encode($responce);
        return '';
    }

    function add_admin() {
        $sql = "insert into admin set
                user_id={$this->db->escape($_POST['user_name'])},
                password={$this->db->escape($_POST['password'])},
                email={$this->db->escape($_POST['email'])}";

        return $this->db->query($sql);
    }

    function get_admin_info() {
        $current_user = $_POST['user_name'];
        $sql = "select count(*) as num from admin where user_id='$current_user'";
        $sql_query = $this->db->query($sql);
        $row = $sql_query->row_array();
        return $row['num'];
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
