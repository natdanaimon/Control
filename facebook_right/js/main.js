var planner_control = {
	init: function(){
		
	},
	add: function(section_id,element_id){
		$.get('my_account/collection_add/',{
			'section_id':section_id,
			'element_id':element_id
		},
		function(data){
			planner_control.animate(section_id,element_id,data);
		});
	},
	animate: function(section_id,element_id,data){
		$('#planner_collection_add_'+section_id+'_'+element_id).addClass('deactive');
		$('#planner_collection_add_'+section_id+'_'+element_id).attr('onclick','');
		
		var img = $(document.createElement('img'));
		img.attr('src','img/add_button.png')
		$('body').append(img);
		img.css('position','fixed');
		img.css('display','block');
		var offset = $('#planner_collection_add_'+section_id+'_'+element_id).offset();
		img.css('top',offset.top-$(document).scrollTop()+img.height()/2);
		img.css('left',offset.left+img.width()/2);
		img.css('z-index',10);
		var ani = {
			top: $(window).height()-55,
			left: $(window).width()-30
		}
		img.animate(ani, 1500, function() {
			img.remove();
			img = null;
			planner_control.panel_update(data);
		});
	},
	panel_update: function(data){
		var arr = data.split(':');
		$('#trip_planner_box_collection').html(arr[0]);
		$('#trip_planner_box_calendar').html(arr[1]);
	}
}

var popup_control = {
	init: function(){
		$('.popup_div .bg').height($(window).height());
		$(window).resize(function(){
			$('.popup_div .bg').height($(window).height());
		});
	},
	open: function(title,content){
		$('.popup_div').show();
		$('.popup_div .title .text').html(title);
		$('.popup_div .text_box').html(content);
	},
	close: function(){
		$('.popup_div').hide();
	}
}
$(document).ready(popup_control.init)

var bookmark_control = {
	bookmark: function(title,link){
		$.ajax({
			url: "my_account/bookmark_add/",
			data:{
				'title':title,
				'link':link
			},
			dataType:'json',
			cache: false,
			success: function(data){
				if(data.title && data.text)
				popup_control.open(data.title, data.text);
			}
		});
	},
	saved_search: function(title,link){
		$.ajax({
			url: "my_account/saved_search_add/",
			data:{
				'title':title,
				'link':link
			},
			dataType:'json',
			cache: false,
			success: function(data){
				if(data.title && data.text)
				popup_control.open(data.title, data.text);
			}
		});
	}
}

function toggle_float_menu(){
	var is_hide = $('#hide_float').css('display')=='none';
	if(is_hide){
		$('#hide_float').show();
		$('#show_float').hide();
		$('.social_share').show();
		$('.trip_planner').show();
	}else{
		$('#hide_float').hide();
		$('#show_float').show();
		$('.social_share').hide();
		$('.trip_planner').hide();
	}
	$.ajax({
		url: "home/toggle_float_menu/"+(is_hide?'0':'1')
	});
}

function toggle_float_menu2(){
	var is_hide = $('#hide_float2').css('display')=='none';
	if(is_hide){
		$('#hide_float2').show();
		$('#show_float2').hide();
		$('.social_share2').show();
		$('.trip_planner2').show();
	}else{
		$('#hide_float2').hide();
		$('#show_float2').show();
		$('.social_share2').hide();
		$('.trip_planner2').hide();
	}
	$.ajax({
		url: "home/toggle_float_menu/"+(is_hide?'0':'1')
	});
}