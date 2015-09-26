<?php
class mod_category extends Model {

    function mod_category() {
        parent::Model();
    }


    function get_category_info() {
        $current_category = $_POST['cat_name'];
        $sql = "select count(*) as num from user where user_id='$current_category'";
        $sql_query = $this->db->query($sql);
        $row = $sql_query->row_array();
        return $row['num'];
    }

    function add_category() {
        $sql = "insert into category set
                cat_name={$this->db->escape($_POST['category_name'])},
                description={$this->db->escape($_POST['cat_description'])}";
        return $this->db->query($sql);
    }

    function get_categoryGrid() {
        $sql = "select * from category";
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
            $desc = $this->word_limiter(trim(strip_tags($row['description'])), 5);
            $responce->rows[$i]['cat_id'] = $row['cat_id'];
            if($row['status']==1){
                $status='Active';
            }else{
                $status='Inactive';
            }
            $responce->rows[$i]['cell'] = array($row['cat_name'],$desc,$status);
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


    function get_category_name() {
        $resource = $this->db->query("select cat_name from category order by cat_name ASC");
        $rows = $resource->result_array();
        return $rows;
    }

    function get_sub_category_name() {
        $resource = $this->db->query("select cat_name from category order by cat_name ASC");
        $rows = $resource->result_array();
        return $rows;
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
      function get_category_options($sel=''){
        $rows=sql::rows('category',"status=1");
        $opt.='<option value="">Select</option>';
        foreach ($rows as $row){
            if($row['category_id']==$sel){
                $opt.='<option value="'.$row['cat_id'].'" selected="selected">'.$row['category_name'].'</option>';
            }else{
                $opt.='<option value="'.$row['cat_id'].'">'.$row['category_name'].'</option>';
            }
        }
        return $opt;
    }

}
?>
