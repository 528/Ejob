<?php

class common {
    public static function get_top_menu(){
        $rows=sql::rows('parent_category',"status=1 and parent_id=0");
        $links='';
        foreach ($rows as $row){
            $links.='<li><a href="'.site_url('home/subcategory/').'/'.$row['id'].'">'.$row['category'].'</a></li>';
            
        }

        return $links;
    }
     public static function get_nav_menu(){
        $rows=sql::rows('parent_category',"status=1 and parent_id=0");
        $links='';
        foreach ($rows as $row){
            $links.='<li><a href="'.site_url('home/get_tutorial/').'/'.$row['id'].'">'.$row['category'].'</a></li>';

        }

        return $links;
    }
     
}