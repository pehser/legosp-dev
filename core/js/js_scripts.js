$.tabs = function(selector, start) {$(selector).each(function(i, element) {$($(element).attr('rel')).css('display', 'none');$(element).click(function() {$(selector).each(function(i, element) {$(element).removeClass('selected');$($(element).attr('rel')).css('display', 'none');});$(this).addClass('selected');$($(this).attr('rel')).css('display', 'block');});});if (!start) {start = $(selector + ':first').attr('rel');} $(selector + '[rel=\'' + start + '\']').trigger('click');};

var defaultFontSize = 100;
var currentFontSize = defaultFontSize;
//// Json Constants Array

var JSonData = ConstJS.constants;


function setFontSize(fontSize) {
	document.body.style.fontSize = fontSize + '%';
}

function changeFontSize(sizeDifference) {
	currentFontSize = parseInt(currentFontSize, 10) + parseInt(sizeDifference * 5, 10);
	if (currentFontSize > 180) {
		currentFontSize = 180;
	} else if (currentFontSize < 60) {
		currentFontSize = 60;
	}
	setFontSize(currentFontSize);
}

function revertStyles() {
	currentFontSize = defaultFontSize;
	changeFontSize(0);
}

 function GetNewPrice_new(id,oid,spic)
  {
    spic = spic || 1;
    spriceid='#sprice'+id; 
    imgid='#simg'+id;
    snewpic=$(imgid).val();
    summ=Math.round($(spriceid).val()*100)/100;
    product_option_Class="product_option_"+id;
    product_option_id="product_option["+id+"]";
    var array_po=getElementsByClass(product_option_Class);
    for (var oi=0; oi<array_po.length; oi++)
    {
     product_option_id_i=product_option_id+"["+(oi+1)+"]"; 
     ps=document.getElementById(product_option_id_i).value.split(':')[1];
     if (!ps) ps=0;
     summ +=Math.round(ps*100)/100;
    }
    product_option_id="product_option["+id+"]["+oid+"]";
   
    if (document.getElementById(product_option_id).value.split(':')[2])
    {
      pct=document.getElementById(product_option_id).value.split(':')[2];
      if (spic==1)
       snewpic=pct+'-S.jpg';
      else 
      { 
        snewpic=pct+'.jpg';
        $('#adp'+id).href='./products_pictures/'+pct+'-B.jpg';
      }  
     $('#dp'+id).attr("src",'./products_pictures/'+snewpic);
    } 
    val='#dp'+id;
    
    vpriceid='#vnewprice'+id; 
    cur=JSonData.CURRENCY_val;  
    cur=Math.round(cur*1000)/1000;
    summ=Math.round(summ/cur*100)/100;
    $(vpriceid).html(currencyFormat(summ,0.01)); 
    $(vpriceid).html($(val).src);
  }


function show_hide_param(id)
{
  optid='#opt'+id; id='#'+id; 
  if ($(id).is(":visible")) 
   {$(optid).removeClass('switcher-on').addClass('switcher-off');
    $(id).hide(); 
   }
  else
   {$(optid).removeClass('switcher-off').addClass('switcher-on');
    $(id).show(); 
   }
   
}



//// VOTES /////////////////////////////


var OPT_ID = 3;
var OPT_TITLE = 4;
var OPT_VOTES = 5;

//var OPT_ID = 0;
//var OPT_TITLE = 1;
//var OPT_VOTES = 2;


var votedID;
var idvote = 0;

$(document).ready(function(){
  $("#voteform").submit(formProcess); // setup the submit handler

  if ($("#vote-results").length > 0 ) {
    animateResults();
  }
  if ($("#vote_send")) 
  {
   idvote = $("#vote_send").attr("value");

   if ($.cookie("vote_id_"+idvote)) {
       $("#vote-container").empty();
       votedID = $.cookie("vote_id_"+idvote);
       $.getJSON("../includes/votes.php?vote_res=none&type=ajax",loadResults);
     }
  }
});

function formProcess(event){
  event.preventDefault();
  var id = $("input[@name='vote_res']:checked").attr("value");
  id = id.replace("opt",'');
  idvote = $("#vote_send").attr("value");
  $("#vote-container").fadeOut("slow",function(){
    $(this).empty();
    votedID = id;
    $.getJSON("../includes/votes.php?vote_res="+id+"&idvote="+idvote+"&type=ajax",loadResults);
  });
}

function animateResults(){
  $("#vote-results div").each(function(){
      var percentage = $(this).next().text();
      $(this).css({width: "0%"}).animate({
				width: percentage}, 'slow');
  });
}

function loadResults(data) {
  var total_votes = 0;
  var percent;
  
  for (id in data) {
    total_votes = total_votes+parseInt(data[id][OPT_VOTES]);
  }
  
  var results_html = "<div id='vote-results'>\n<dl class='graph'>\n";
  for (id in data) {
    percent=0; 
    if (data[id][OPT_VOTES]>0) 
      percent = Math.round((parseInt(data[id][OPT_VOTES])/parseInt(total_votes))*100);
    if (data[id][OPT_ID] !== votedID) {
      results_html = results_html+"<dd  style='float:left;' class='bar-container'><div id='bar"+data[id][OPT_ID]+"'style='width:0%; float:left; '><nobr><b>"+data[id][OPT_TITLE]+"</b></nobr></div><strong>"+percent+"%</strong></dd>\n";
    } else {
      results_html = results_html+"<dd class='bar-container' style='float:left;'><div id='bar"+data[id][OPT_ID]+"'style='width:0%;background-color:#FD5300; float:left;'><nobr><b>"+data[id][OPT_TITLE]+"</b></nobr></div><strong>"+percent+"%</strong></dd>\n";
    }
  }
  results_html = results_html+"</dl><p style='clear: both;'>Total Votes: "+total_votes+"</p></div>\n";
  
  $("#vote-container").append(results_html).fadeIn("slow",function(){
    animateResults();});
}

//// EOF VOTES //////////////////////////





//// Validate Functions

function checkname()
	{var str=document.getElementById('first_name').value;
	 var filter=/^[�-�A-Z]{2,}( +)?([�-�A-Z]{2,})?( +)?$/i;
	 if (filter.test(str)) {document.getElementById('name_div').style.visibility="hidden"; document.getElementById('name_pic').style.visibility="visible";} else {document.getElementById('name_pic').style.visibility="hidden"; document.getElementById('name_div').style.visibility="visible";}
	}
function checksurname()
	{var str=document.getElementById('last_name').value;
	 var filter=/^[�-�A-Z]{2,}( +)?([�-�A-Z]{2,})?( +)?$/i;
	 if (filter.test(str)) {document.getElementById('surname_div').style.visibility="hidden"; document.getElementById('surname_pic').style.visibility="visible";} else {document.getElementById('surname_pic').style.visibility="hidden"; document.getElementById('surname_div').style.visibility="visible";}}
function checkmail()
	{var str=document.getElementById('email').value;
	 var filter=/^[.\w-]+@([\w-]+\.)+[a-zA-Z]{2,6}$/;
	 if (filter.test(str)) {document.getElementById('mail_div').style.visibility="hidden"; document.getElementById('mail_pic').style.visibility="visible";} else {document.getElementById('mail_pic').style.visibility="hidden"; document.getElementById('mail_div').style.visibility="visible";}
	}
function checkphone()
	{var str=document.getElementById('phone').value;
	 var filter=/^(?:8|\+7)? ?\(\d{1,5}\)? ?\d{1,5}\-\d{2}\-\d{2}$/;
	 if (str != "") {document.getElementById('phone_div').style.visibility="hidden"; document.getElementById('phone_pic').style.visibility="visible";} else {document.getElementById('phone_pic').style.visibility="hidden"; document.getElementById('phone_div').style.visibility="visible";}
	}
 
function open_window(link,w,h) //opens new window
	{
	var win = "width="+w+",height="+h+",menubar=no,location=no,resizable=yes,scrollbars=yes";
	newWin = window.open(link,'newWin',win);
	newWin.focus();
	}

//// Payment functions

function checkSubmit() {
	if (document.getElementById("idto").value != "") return true;
	else 
	  {
		alert("������� ����� �������� � ������� 9059103456");
		return false;
	  }
	}

//// Mode Functions

function moduleSearch()
	{location = "./index.php?searchstring="+$('#mod_search_searchword').attr('value');}

function cart_update(obect)
{
  var array_input = document.getElementsByTagName('input');
  
  for (var i=0; i<array_input.length; i++)
  {
     if ((array_input[i].name.split('_')[1])=='instock') 
     {
        id=array_input[i].name.split('_')[2];
        if ((Math.round(array_input[i].value*100)/100) <(Math.round(document.getElementById('count_'+id).value*100)/100))
        {
          alert('���������� ����������� ��������� ���������� ��� '+document.getElementById('name'+id).innerHTML); return false;
 
        }
     }
  } 
  $('#'+obect).submit();

}

function currencyFormat(num, dec) {
  num = Math.round( num / dec ) * dec;
  num = new Number(num).toFixed(2);   // ����������� ����� JavaScript ( x/100 �� ������ = x*0.01 )
  var s = 0;
  var str = '';
  for( var i=num.toString().length-1; i>=0; i-- ) {
    s++;
    str = num.toString().charAt(i) + str;
    if(num.toString().charAt(i)=='.') s=0;
    if( s > 0 && !(s % 3) ) str  = " " + str;
  } 
  return str;         
}






function googleTranslateElementInit()
	{
	new google.translate.TranslateElement(
		{pageLanguage: JSonData.PAGE_LANG,includedLanguages: 'en, ru'}, 'google_translate_element');
	}


if(document.getElementsByClassName) {
	 
	    getElementsByClass = function(classList, node) {   
	        return (node || document).getElementsByClassName(classList)
	    }
	 
	} else {
	 
	    getElementsByClass = function(classList, node) {           
	        var node = node || document,
	        list = node.getElementsByTagName('*'),
	        length = list.length, 
	        classArray = classList.split(/\s+/),
	        classes = classArray.length,
	        result = [], i,j
	        for(i = 0; i < length; i++) {
	            for(j = 0; j < classes; j++)  {
	                if(list[i].className.search('\\b' + classArray[j] + '\\b') != -1) {
	                    result.push(list[i])
	                    break
	                }
	            }
	        }
	     
	        return result
	    }
	}







$(document).ready(function(){  

   
    
   $('input[name|="captcha"]').attr('autocomplete', 'off');
	
 
    $("#phone").keypress (
	function(event)
	{
	    var key, keyChar;
	    if(!event) var event = window.event;
	     
	    if (event.keyCode) key = event.keyCode;
	    else if(event.which) key = event.which;
	     
	/*
	    ���� ������ ���� �� ��������� ������: enter, tab, backspace, del, ������� �����, ������� ������
	    ����� �� ���� ��������� ������ �������, �..� ��� ������� ����� ��� ���������� ������ � ������ ����
	*/
	if(key==null || key==0 || key==8 || key==13 || key==37 || key==39 || key==46 || key==9) return true;
	keyChar=String.fromCharCode(key);
	 
	/*
	    ���� ������ ������ �� �������� ������ ��� "-", ��� "+", ����� �������� ���� �� ��������
	*/
	if(!/^[-\d]$/.test(keyChar)) return false;
	 
	});  
        
        $("#zip").keypress (
	function(event)
	{
	    var key, keyChar;
	    if(!event) var event = window.event;
	     
	    if (event.keyCode) key = event.keyCode;
	    else if(event.which) key = event.which;
	     
	/*
	    ���� ������ ���� �� ��������� ������: enter, tab, backspace, del, ������� �����, ������� ������
	    ����� �� ���� ��������� ������ �������, �..� ��� ������� ����� ��� ���������� ������ � ������ ����
	*/
	if(key==null || key==0 || key==8 || key==13 || key==37 || key==39 || key==46 || key==9) return true;
	keyChar=String.fromCharCode(key);
	 
	/*
	    ���� ������ ������ �� �������� ������ ��� "-", ��� "+", ����� �������� ���� �� ��������
	*/
	if(!/^[-\d]$/.test(keyChar)) return false;
	 
	});          



$('.chk').click(function () {
        var curid = this.id.split('_')[1];
		var hurl = $('#hc' + curid).val();

		if ($('#inpc'+curid).val() == 0) {
			check = curid;
			uncheck = 0;
			$('#sc_' + curid).html('<img src="./images/ok.png" alt="" />');
			$('#c_ul').append('<li style="padding: 2px 5px;" id="dtr_' + curid + '"><a href="./' + hurl + '" title="' + $('#dp'+curid).attr('alt') + '"><img src="' + $('#dp' + curid).attr('src') + '" class="c_img" height="50" alt="" /></a></li>');
			$('#inpc' + curid).val(['1']);
			
				//��� �� ������� �������� � ������ �����������
				var image = $('#dp'+curid).offset();
				var comp  = $('#compare').offset();
	
				$('#dp'+curid).before('<img src="' + $('#dp'+curid).attr('src') + '" id="temp" style="position: absolute; top: ' + image.top + 'px; left: ' + image.left + 'px;" />');
	
				params = {
					top : comp.top + 'px',
					left : comp.left+($('#c_ul li').size()*60) + 'px',
					opacity : 0.0,
					width : '50px',  
					heigth : '50px'
				};		
	
				$('#temp').animate(params, 'slow', false, function () {
					$('#temp').remove();
				});
			
		} else {
			check = 0;
			uncheck = curid;
			$('#dtr_' + curid + ', #ic_' + curid).remove();
			$('#sc_' + curid).html('');
			$('#inpc' + curid).val(['0']);
		}

        poststr = "check=" + check + "&uncheck=" + uncheck;
        $.ajax({
            type: "GET",
            url: "./includes/compare.php",
            data: poststr
        });
		
		if ($('#c_ul li').size() == 0) {
			$('#compare').hide(500);
		} else {
			$('#compare').show(500);
		}
    });
	
	$('.dell_chk').click(function () {
        var curid = this.id.split('_')[1];
		check = 0;
		uncheck = curid;

        poststr = "check=" + check + "&uncheck=" + uncheck;
        $.ajax({
            type: "GET",
            url: "./includes/compare.php",
            data: poststr
        });
		//alert($('.comp tr').size());
		$('#dtr_' + curid).hide(500).remove();
		if ($('.comp tr').size() == 2) {
			location = "./index.php?clear_compare";
		}
    });
	

// Ajax cart function
    $('.ajaxcart').click(function () {                //������ ���� �� ������ ajxcart
        var curid = this.id.split('_')[1];            //������� id (���� tocard_123) � ����� �� ���� ��� ��������
        var option = ''; 
        var table = document.getElementById('products'); 
        var new_priceid="newprice"+curid; 
        var countp='count_'+curid;
        if (document.getElementById(countp)) $kol=document.getElementById(countp).value;
        else $kol=1;
        var array_options = document.getElementsByTagName('select');
        for (var oi=0; oi<array_options.length; oi++)
        {
             if ((array_options[oi].name.split('_')[2])==curid) 
             { 
              if (oi==0)
              option= array_options[oi].name.split('_')[3] +':'+array_options[oi].value.split(':')[0];
              else option= option +',' + array_options[oi].name.split('_')[3] +':'+array_options[oi].value.split(':')[0];
             }  
            
        }
        
        poststr = "shopping_cart=yes&add2cart=" + curid + "&type=ajax&kol="+$kol+"&opt="+option;        //��������� POST
        $.ajax(                            //����������
        {
            type: "GET",
            url: "./includes/shopping_cart.php",
            data: poststr,
            success:
                function (response)				   //������������ �����
                    {

                        if (response==-1) {alert('���������� ����������� ��������� ���������� ������� ������'); return false;}
			var return_data = eval("("+response+")");  //JSON.parse();

                        $('#sci').text(return_data.info.count);    //����� ���������� ������� � ������� � id="sci"
                        $('#sci').css("font-weight","bold");
                        $('#scs').text(return_data.info.cost);     //����� ����� ������� � ������� � id="scs"
            //��� �� ������� �������� � ������ �����������

				var image = $('#dp'+curid).offset();
				var cart  = $('#module_cart').offset();
	
				$('#dp'+curid).before('<img src="' + $('#dp'+curid).attr('src') + '" id="temp" style="position: absolute; top: ' + image.top + 'px; left: ' + image.left + 'px;" />');
	
				params = {
					top : cart.top + 'px',
					left : cart.left + 'px',
					opacity : 0.0,
					width : $('#module_cart').width(),  
					heigth : $('#module_cart').height()
				};		
	
				$('#temp').animate(params, 'slow', false, function () {
					$('#temp').remove();
				});
}
        });
	return false;
    });

// Jcarusel hits show
    $(".carouselDiv .jCarouselLite").jCarouselLite({auto: JSonData.CONF_HITS_FRIQ, speed: JSonData.CONF_HITS_SPEED, vertical: true, visible: JSonData.CONF_SCROLL_HITS, easeInQuad: "easeOutQuad"});

// HideSlide hits show
    var fadeTime = 2000*(JSonData.CONF_HITS_FRIQ/10000);var i = $('.slide').length;var x = 0;showSlide();function showSlide(){curSlide = "#slide" + x;if(x == 0){prevSlide = "#slide" + (i - 1);} else {prevSlide = "#slide" + (x - 1);}$(prevSlide).fadeOut(fadeTime, function(){$(curSlide).fadeIn(fadeTime);if(x == (i - 1)){x = 0;} else {x++;}});setTimeout(showSlide, JSonData.CONF_HITS_FRIQ);}

// Tabs

    if (JSonData.REVIEW_SAVED != 1) {$.tabs('.tabs a');} else {$.tabs('.tabs a', '#tab_review');}

// Search
    $('#mod_search_searchword').keydown(function(e) {if (e.keyCode == 13) {moduleSearch();}});

// Tag cloud
   //$('#tag').tagcloud({centrex:70, centrey:80, init_motion_x:50, init_motion_y:50, min_font_size:10, max_font_size:16});
  if(!$('#myCanvas').tagcanvas({
          textColour : '#000000',
          outlineColour: '#ff00ff',
          reverse: true,
          depth: 0.8,
          maxSpeed: 0.05
        },'tags')) {
          // something went wrong, hide the canvas container
          $('#myCanvasContainer').hide();
        }

});

$(document).ready(function() {
    $("a.thickbox").fancybox();
    

    //$(".gallery:eq(0)  a[rel^='example_group']").prettyPhoto();
			
     $("a#iframe").fancybox({
                    'type' : 'iframe',
                    'overlayShow': 'TRUE',
                    'hideOnOverlayClick': 'FALSE',
                    'height': 900,
                    'width': 1100       
	            
	           });    
   
    $("a[rel=example_group]").fancybox(); 
   
    $("a[rel=example_group1]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			}); 
    
   $("#review_form").validate();
   $("#custinfo_form").validate();

   $(".review").click(function() 
   {
       if ($("#review_form").validate) 
       {
         $.post("core/core_captcha.php",{ captcha:$("#captcha").val() } ,function(data) 
         {
          data=data.replace(/^\s+/, ""); 
          if(data=='1') {$('#review_form').submit();}
          else 
          {
             $("#results").html('');
             $("#results").show();
             data='b'+data+'e';
             $("#results").append(data);
             return false;  
          }               
         });
       }
	
   });   

});




function go_cap(){
	var okoshko="<input type='text' name='captcha' /><img style='margin-left: 15px;' src='./core/core_captcha.php?"+Math.random()+"' alt='' /><img id='cap' style='cursor:pointer;' border='0' src='./images/reload.jpg' onclick='go_cap()' alt='' />";
	document.getElementById("cap").src="./core/core_captcha.php?"+Math.random();
}


jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[^0-9\+\?]+$/i.test(value);
}, "Letters only please"); 

jQuery.extend(jQuery.validator.messages, {
        required: "��� ���� ���������� ���������.",
        remote: "����������, ������� ���������� ��������.",
        lettersonly:  JSonData.ERROR_INPUT_LETTERSONLY,  
        email: "����������, ������� ��������� ����� ����������� �����.",
        url: "����������, ������� ���������� URL.",
        date: "����������, ������� ���������� ����.",
        dateISO: "����������, ������� ���������� ���� � ������� ISO.",
        number: "����������, ������� �����.",
        digits: "����������, ������� ������ �����.",
        creditcard: "����������, ������� ���������� ����� ��������� �����.",
        equalTo: "����������, ������� ����� �� �������� ��� ���.",
        accept: "����������, �������� ���� � ���������� �����������.",
        maxlength: jQuery.validator.format("����������, ������� �� ������ {0} ��������."),
        minlength: jQuery.validator.format("����������, ������� �� ������ {0} ��������."),
        rangelength: jQuery.validator.format("����������, ������� �������� ������ �� {0} �� {1} ��������."),
        range: jQuery.validator.format("����������, ������� ����� �� {0} �� {1}."),
        max: jQuery.validator.format("����������, ������� �����, ������� ��� ������{0}."),
        min: jQuery.validator.format("����������, ������� �����, ������� ��� ������ {0}.")
});