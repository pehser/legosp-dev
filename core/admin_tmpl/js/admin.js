function show_hide(id)
{
  $('#'+id).toggle('slow');
}

function confirmDelete(text,url) {
	temp = window.confirm(text);
	if (temp) {
		window.location=url;
	}
	return false;
}


$(document).on("click", "ul.select_list li", function(){ 
        var parent_deliv = $(this).parents( '.delivery_block');
	var parent_ul = $(this).parents( 'ul');
        var tx = $(this).html();
        var tv = $(this).attr('alt');
        $(parent_ul).slideUp('fast');
        $(".delivery_list span",parent_deliv).html(tx);
	$("+ input",parent_ul).val(tv);
	});

$(document).ready(function(){
	$("a.fancybox").fancybox();
	$("a.thickbox").fancybox();
	$('.b_save').click(function(){
          $('.button-submit').click();
          return false;
        });
	$('div.buttons a.btn.btn-small.btn-success').click(function()
	{
	  $('input[type=submit]').click();
	});
	
	
	$('#category_root_a i').click(function(){
	   var str = "";
           var d = document;
           var tbody = d.getElementById('alternate_cat');
           var row = d.createElement("TR");
           row.className="alternate";
           var td1 = d.createElement("TD");
           var td2 = d.createElement("TD"); 
           td1.colSpan = 3;
           var categoryid    = $("#addcategory").val();
           subcat=0; 
           var data  = 'addcategory='+ categoryid;
       
        // если searchString не пустая
        if(categoryid) {
            $.ajax({
                type: "POST",
                url: "./core/do_search.php",
                data: data,
               success: function(html){ 
                    //$("#results").show();
                    $("#addcategory option:selected").attr('disabled', 'disabled');
                    tbody.appendChild(row);
                    row.appendChild(td1);
                    row.appendChild(td2); 
                    td1.innerHTML = html;
                    td2.innerHTML= '<img src="images/backend/delete.png" onclick="deladcategory('+categoryid+');" class="deladcategory" id="'+categoryid+'" alt="{/literal}{$smarty.const.DELETE_BUTTON}{literal}">';
                    

              }
            });
        }
	});
	
	$('.delivery_list').click(function(){
	   var parent_deliv = $(this).parents( '.delivery_block');
	   var select_ul=$(".select_list",parent_deliv);
	   if($(select_ul).is(':hidden'))
	   { 	   
	   var productID=$('input[name="save_product"]').val(); 
	   var selecto=$(this).offset();
	   $.ajax({
             url: './admin.php?dpt=catalog&sub=products_edit&productID='+productID+'&'+$(parent_deliv).attr("id"),
	     dataType: 'json',
	     beforeSend: function(){
	       $('body').append('<div id="ajaxBusy"><p><img src="./core/admin_tmpl/images/ajax-loader.gif"></p></div>');
	       $('#ajaxBusy').css({
               margin:"0px",
               padding:"0px",
               position:"absolute",
               left: (selecto.left+240) + 'px',
               top: (selecto.top) + 'px',
               width:"auto"
	       });
	     },
	     success: function(datas){
	       datas.brand_list.reverse();
	       $.each(datas.brand_list, function(key, val) {
	          select_ul.prepend('<li alt="'+val.id+'">'+val.name+'</li>');
	       }); 	  
	     },
	     complete: function() {
	       $('#ajaxBusy').remove();
	       
	     }
	   });
	   }
           $(select_ul).slideToggle('fast');
        });
	
	
	
       
});

