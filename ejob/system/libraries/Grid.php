<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Grid
 *
 * @author Anwar
 */
class Grid {

    var $gridUrl = "";
    var $gridWidth = "";
    var $gridHeight = "";
    var $gridColumn = array();
    var $gridColumnModel = array();
    var $sortName = "";
    var $sortOrder = "asc";
    var $gridTitle = "";
    var $gridMultiSelect = false;
    var $footerrow = false;
    var $userDataOnFooter = false;
    var $toolbar=FALSE;
    var $row_number=true;

    //create a object of a class, and import vars into class if necessary
    function setGridOptions($gridTitle, $gridWidth, $gridHeight, $sortName, $sortOrder, $gridColumn, $gridColumnModel, $gridUrl, $gridMultiSelect=false, $footerrow=false, $userDataOnFooter=false,$toolbar=FALSE,$row_number=TRUE) {

        $this->gridTitle = $gridTitle;
        $this->gridHeight = $gridHeight;
        $this->gridWidth = $gridWidth;
        $this->sortName = $sortName;
        $this->sortOrder = $sortOrder;
        $this->gridColumn = $gridColumn;
        $this->toolbar=$toolbar;
        $this->gridColumnModel = $gridColumnModel;
        $this->gridUrl = $gridUrl;
        $this->gridMultiSelect = $gridMultiSelect;
        $this->footerrow = $footerrow;
        $this->userDataOnFooter = $userDataOnFooter;
        $this->row_number=$row_number;
    }

    function getGrid() {
        $return = '';
        $return.='<table id="data_grid"></table><div id="grid_pager"></div>';
        $return.='<script type="text/javascript">';
        $return.='$j("#data_grid").jqGrid
			(
			 {
			  url: "' . $this->gridUrl . '",
			  datatype: "json",
			  width:' . $this->gridWidth . ',
			  height:' . $this->gridHeight . ',
                          rownumbers:true,
                          toolbar: ['.$this->toolbar.',"bottom"],
			  ';


        if (is_array($this->gridColumn) && !empty($this->gridColumn)) {
            $return.='colNames :';
            $return.=json_encode($this->gridColumn);
            $return.=',';
        }


        if (is_array($this->gridColumnModel) && !empty($this->gridColumnModel)) {
            $return.='colModel :';
            $return.=json_encode($this->gridColumnModel);
            $return.=',';
        }

        $return.=' rowNum: 10,';
        $return.=' mtype: "post",';
        $return.=' rowList: [10,20,30,40,50],';
        $return.=' pager: "grid_pager",';
        $return.=' sortname: "' . $this->sortName . '",';

        if ($this->gridMultiSelect) {
            $return.=' multiselect: ' . $this->gridMultiSelect . ',';
        }
        $return.=' sortorder: "' . $this->sortOrder . '",';
        $return.=' footerrow : "' . $this->footerrow . '",';
        $return.=' userDataOnFooter : "' . $this->userDataOnFooter . '",';
        $return.=' caption: "' . $this->gridTitle . '"';


        $return.='}); </script>';

        return $return;
    }

}
?>
