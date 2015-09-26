$j(document).ready(function(){
    validator.init();
    common.init();
    $j('button.button,input[type="button"].button,input[type="submit"].button,input[type="reset"].button,button.cancel,input[type="button"]').button();
    $j(".tooolbars #add").button({
        icons: {
            primary: 'ui-icon-plus'
        }
    }).next().button({
        icons: {
            primary: 'ui-icon ui-icon-pencil'
        }
    }).next().button({
        icons: {
            primary: 'ui-icon ui-icon-info'
        }
    }).next().button({
        icons: {
            primary: 'ui-icon ui-icon-link'
        }
    }).next().button({
        icons: {
            primary: 'ui-icon ui-icon-trash'
        }
    }).next().button({
        icons: {
            primary: 'ui-icon ui-icon-refresh'
        }
    }).next().button({
        icons: {
            primary: 'ui-icon ui-icon-disk'
        }
    }).next().button({
        icons: {
            primary: 'ui-icon ui-icon-disk'
        }
    });
    $j('ul.sf-menu').superfish();
    $j('.jadd_question').click(function(){
        $j.ajax({
            type:'post',
            url:base_url+'tutorial/get_question_form',
            success:function(html){
                $j('.jmcq_que').append(html);
                 return false;
            }
        }
        );
            return false;
    });
      $j('.jadd_que').click(function(){
        $j.ajax({
            type:'post',
            url:base_url+'matching/get_matching_form',
            success:function(html){
                $j('.jmcq_q').append(html);
                 return false;
            }
        }
        );
            return false;
    });
    $j('.jadd_qu').click(function(){
        $j.ajax({
            type:'post',
            url:base_url+'topics_mcq/get_quest_form',
            success:function(html){
                $j('.jmcq_m').append(html);
                 return false;
            }
        }
        );
            return false;
    });
     $j('.jadd_qe').click(function(){
        $j.ajax({
            type:'post',
            url:base_url+'category_main/get_category_form',
            success:function(html){
                $j('.jmq_q').append(html);
                 return false;
            }
        }
        );
            return false;
    });
    $j('.jadd').click(function(){
        $j.ajax({
            type:'post',
            url:base_url+'category_main/get_subcategory_form',
            success:function(html){               
                $j('.jmq').append(html);
                 return false;
            }
        }
        );
            return false;
    });

    
});

var common={
    init:function(){
        $j('.jadd_button').click(function(){
            common.add_content(this);
        });
        $j('.jedit_button').click(function(){
            common.edit_content(this);
        });
        $j('.jdelete_button').click(function(){
            common.delete_content(this);
        });
        $j('.jstatus_button').click(function(){
            common.status_content(this);
        });
    },
    add_content:function(obj){
        var url=$j(obj).attr('title');
        window.location=base_url+url;
    },
    edit_content:function(obj){
        var s=$j("#data_grid").jqGrid('getGridParam','selarrrow');
        if(s.length==0){
            alert('Please select a record!');
            return false;
        }
        var id=s[0];
        var url=$j(obj).attr('title');
        window.location=base_url+url+'/'+id;
        return false;
    },
    delete_content:function(obj){
        var s=$j("#data_grid").jqGrid('getGridParam','selarrrow');
        if(s.length==0){
            alert('Please select a record!');
            return false;
        }
        var id=s[0];
        if(confirm('Are you sure want to delete the content?')){
            var url=$j(obj).attr('title');
            window.location=base_url+url+'/'+id;
        }

        return false;
    },
    status_content:function(obj){
        var s=$j("#data_grid").jqGrid('getGridParam','selarrrow');
        if(s.length==0){
            alert('Please select a record!');
            return false;
        }
        var id=s[0];
        var url=$j(obj).attr('title');
        window.location=base_url+url+'/'+id;
        return false;
    }
}