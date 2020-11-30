var tx_out	= 30000 + 5000, // sync with php max_execution_time + 5 seconds network latency
	id_bin	= '';
	id_ivx	= '';
	ac_uid	= '',
	ac_len	= 402,
	f_act	= '',
	f_uid	= '',
	ackPge	= 0,
	id_csr	= '',
	editMode = 1,
	pTable  = '';
var host 	= 'http://'+window.location.hostname+'/Akademik/',
	design	= host+'design/';
	
var site 	= host+"index.php/main/";

$.fn.datebox.defaults.formatter = function(date) {
	var y = date.getFullYear();
	var m = date.getMonth() + 1;
	var d = date.getDate();
	
	return y + '-' + (m < 10 ? '0' + m : m) + '-' + (d < 10 ? '0' + d : d);
};

$.fn.fc = function(event) {
	var _url = this.attr('href').replace('#', ''),
		_elm = this.attr('target') || null;
	if(event) {
		event.preventDefault();
		event.stopPropagation();
	}
	load(_url, _elm);
};

function ts_out() {
	$.messager.alert('SESSION TIME OUT',
		'Your Login Session is not Valid Anymore, Please Login Again',
		'error', function() {
			window.location.href = host+'index.php/';
		}
	);
}

function load(url, trg, data, callback){
	var _$trg	= trg ==undefined ? $('#m_content') : $(trg),
		_data	= data==undefined ? null : data,
		_type	= data==undefined ? 'GET' : 'POST',
		_url 	= url.replace('#', ''),
		_cls	= 'loading1';
		_url	= /http/ig.test(_url) ? _url : site+_url;
		
	// if(_$trg[0].nodeName=='INPUT' || _$trg[0].nodeName=='SELECT' || _$trg[0].nodeName=='TEXTAREA') {
		// _cls	= 'loading1';
	// }
	
	_$trg.empty().addClass(_cls);
	ajax = $.ajax({
		type: _type,
		url : _url,
		data: _data,
		timeout: ts_out,
		success: function(resp){
			if(resp=='expired') {
				ts_out();
			}
			else {
				_$trg.removeClass(_cls).html(resp);
				if(typeof callback=='function') callback(resp, status);
			};
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			_$trg.removeClass(_cls);
			if(textStatus=="timeout") {
				ajax.abort();
				ts_out();
			}
		}
	});
};

function reload_page(page){
//	var targ = /#/ig.test(page) ? page : '#f'+page+'dt';
	
	load('page/'+page+'/', null, null, function() {
			$('.easyui-linkbutton').linkbutton();
			$('.date').datebox();
			$('.combobox').combobox();
			
			var aoColumns = [];
			$('.tpmain thead th').each( function () {
				if ( $(this).hasClass( 'nsort' )) {
					aoColumns.push( { "bSortable": false } );
				} else {
					aoColumns.push(null);
				}
			});
			
			if($('.tpmain').length) {
				$('.tpmain').dataTable( {
					"bJQueryUI": true,
					"bLengthChange" : false,
					"aoColumns" : aoColumns
				} );
			}
			
			$(window).resize();
	});
}

function change_page(elm, event, title){
	var page = $(elm).attr('rel');
		post = [];
	
			$tds = $(elm).parents('tr:first').children();
			$tds.filter('.postit').each(function() {
				var nm = this.className.split(' ')[1],
					val = $(this).attr('val');
				post.push({name: nm, value:val});
			});
	load('page/'+page+'/', null, post, function() {
			$('.easyui-linkbutton').linkbutton();
			$('.date').datebox();
			$('.combobox').combobox();
			$('#m_content').panel({
				title: title.toUpperCase()
			});
			
			$('input.ac').each( function (){
				var reff = $(this).attr('rel');
				
				// $.get(site+'ac/'+reff, function(data) {
					// var src = data;
					$(this).autocomplete({
						source: site+'ac/'+reff
					});
				// });
			});
			
			var aoColumns = [];
			$('.tpmain thead tr th').each( function () {
				if ( $(this).hasClass( 'nsort' )) {
					aoColumns.push( { "bSortable": false } );
				} else {
					aoColumns.push(null);
				}
			});
			
			if($('.tpmain').length) {
					$('.tpmain').dataTable( {
						"bJQueryUI": true,
						"bLengthChange" : false,
						"aoColumns" : aoColumns
					} );
			}
			
			$(window).resize();
	});
}

function get_page(elm, event, trg){
	var post = [];
	
		$tds = $(elm).parents('fieldset:first').children();
		$tds.filter('.postit').each(function() {
			var nm = this.className.split(' ')[1],
				val = $(this).val();
			post.push({name: nm, value:val});
		});
		
	var $trg	= $(trg),
		 data	= post,
		 type	= 'POST',
		 url 	= $(elm).attr('rel'),
		 cls	= 'loading1';
		 url	= /http/ig.test(url) ? url : site+url;
		
	$trg.empty().addClass(cls);
	$.ajax({
		type: type,
		url : url,
		data: data,
		timeout: ts_out,
		success: function(resp){
			if(resp=='expired') {
				ts_out();
			}
			else {
				$trg.removeClass(cls).html(resp);
				$('.easyui-linkbutton').linkbutton();
				$('.date').datebox();
				$('.combobox').combobox();
				
				$(window).resize();
			};
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			$trg.removeClass(cls);
			if(textStatus=="timeout") {
				ajax.abort();
				ts_out();
			}
		}
	});
}

function go_back(elm, event, title){
	var page = $(elm).attr('rel');
	load('page/'+page+'/', null, post, function() {
			$('.easyui-linkbutton').linkbutton();
			$('.date').datebox();
			$('.combobox').combobox();
			$('#m_content').panel({
				title: title.toUpperCase()
			});
			
			var aoColumns = [];
			$('.tpmain thead th').each( function () {
				if ( $(this).hasClass( 'nsort' )) {
					aoColumns.push( { "bSortable": false } );
				} else {
					aoColumns.push(null);
				}
			});
			
			if($('.tpmain').length) {
				$('.tpmain').dataTable( {
					"bJQueryUI": true,
					"bLengthChange" : false,
					"aoColumns" : aoColumns
				} );
			}
			
			$(window).resize();
	});
}

function fcrud (obj, url, post, callback) {
	url	= /http/ig.test(url) ? url : site+url;
	obj.addClass('loading');

	if($(obj).hasClass('delete') && $('#pkey').length) post.push({ name:'pkey', value: $('#pkey')[0].className.split(' ')[1] });
	ajax = $.ajax({
		type: 'POST',
		url : url,
		data: post,
		timeout: tx_out,
		success:function(resp) {
			if (resp == "1"){
				if($(obj).hasClass('delete')) {
					// obj.parents('tr:first').remove();
					show_message('Success', 'Data has been Deleted', 'info');
				}
				else if($(obj).hasClass('create')) {
					show_message('Success', 'Data has been Saved');
				}
				else {
					show_message('Success', 'Data has been Modified', 'info');
				}
				if(typeof callback=='function') callback.call();
			}
			else {
				show_message('Result', resp, 'error');
			}
		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			obj.removeClass('loading');
			if(textStatus=="timeout") {
				ajax.abort();
				ts_out();
			}
			else  show_message('ERROR', 'Failed to Save Data <hr />'+textStatus);
		}
	});
};

function tr2dform(elm, event, title){
	var $me  = $(elm),
		 obj = $me.attr('href'),
		$obj = $(obj),
		 act = $me.attr('rel');
		 
		$obj.removeClass('hide');
			
		if (act == 'create'){
			$('input, textarea, select', $obj).each(function(){
				if($(this).hasClass('date')){
					$(this).datebox('setValue', '');
					$(this).datebox('enable');
				} else if ($(this).hasClass('im')){} else {
					$(this, $obj).removeAttr('disabled').removeClass('readon');
					$(this).val('');
				}
					// $(this).val('');
			});
			
			$('.just_add').show();
			$('.just_upd').hide();
			$('.just_info').hide();
		} else {
			$tds = $me.parents('tr:first').children();
			$tds.filter('.postit').each(function() {
				var elm = '.'+this.className.split(' ')[1],
					val = $(this).attr('val');

				if($(elm, $obj).hasClass('date')) {
					$(elm, $obj).datebox('setValue', val); $(elm, $obj).datebox('enable'); $(elm, $obj).removeClass('readon');
				} else {
					$(elm, $obj).removeAttr('disabled').removeClass('readon');
					$(elm, $obj).val(val);
				}	
				if($(elm, $obj).hasClass('ro')) $(elm, $obj).attr({readonly:true, disabled:true}).addClass('readon');
				// if($(elm, $obj).hasClass('date')) $(elm, $obj).datebox('setValue', val);
				if($(elm, $obj).hasClass('date') && $(elm, $obj).hasClass('ro')) $(elm, $obj).datebox({disabled:true});
				 
			});
			
			$('.just_upd').show();
			$('.just_add').hide();
			$('.just_info').hide();
		}
		
		$obj.dialog({
			modal :true,
			title : title,
			buttons:[{
				text:'Save',
				title:'Save',
				iconCls:'icon-save',
				handler:function(){
					crup_r(elm, event, $obj, act);
					$obj.dialog('close');
				}
			},{
				text:'Cancel',
				title:'Cancel',
				iconCls:'icon-cancel',
				handler:function(){
					$obj.dialog('close');
				}
			}]
		});
};

function tr2dform2(elm, event, title){
	var $me  = $(elm),
		 obj = $me.attr('href'),
		$obj = $(obj),
		 act = $me.attr('rel');
		 
		$obj.removeClass('hide');
		
		$('.just_add').hide();
		$('.just_upd').hide();
		$('.just_info').show();
			
			$tds = $me.parents('tr:first').children();
			$tds.filter('.postit').each(function() {
				var elm = '.'+this.className.split(' ')[1],
					val = $(this).attr('val');
				

				if($(elm, $obj).hasClass('date')) {$(elm, $obj).datebox('setValue', val); $(elm, $obj).datebox('disable');$('.combo-text', $obj).addClass('readon');}
				else {$(elm, $obj).attr({disabled:true});$(elm, $obj).val(val);$(elm, $obj).addClass('readon');}
				
				// if($(elm, $obj).hasClass('ro')) $(elm, $obj).attr({readonly:true, disabled:true}).addClass('readonly');
				// if($(elm, $obj).hasClass('date')) $(elm, $obj).datebox('setValue', val);
				// if($(elm, $obj).hasClass('date') && $(elm, $obj).hasClass('ro')) $(elm, $fuid).datebox({disabled:true});
				// if($(elm, $obj).hasClass('combobox')) $(elm, $obj).combobox('setValue', val);
				// if($(elm, $obj).hasClass('combobox') && $(elm, $obj).hasClass('ro')) $(elm, $fuid).combobox({disabled:true});
				 
			});
			
		
		$obj.dialog({
			modal :true,
			title : title,
			button : []
		});
};

function search_r(page, act){
	// var targ = /#/ig.test(page) ? page : '#f'+page+'dt',
	
	act = act==undefined ? 'search' : act;
	
	$('input.postit', $('#fsearch')).each(function() {
		var elm = $(this), idx = this.className.split(' ')[1], val = '';
		if(elm.hasClass('date')) val = elm.datebox('getValue');
		else val = elm.val();
		if(val) post.push({ name:idx, value: val });
	});
	
	
	load('page/'+page+'/'+act, null, post, function() {
			if($('.tpmain').length) {
				$('.tpmain').dataTable( {
					"bJQueryUI": true,
					"bFilter" : false
				} );
			}
			
			$(window).resize();
	});
}

function delete_r(elm, event){
	var $me = $(elm),
		key = $me.parent().siblings('.pk'),
		kid	= key.attr('val'),
		knm = key[0].className.split(' ')[1],
		url = $me.attr('href').replace('#', 'crud/')+'/delete';
		post = [{name: knm, value: kid}];
		act='delete';
	$me.parents('tr:first').addClass('warning');
	$.messager.confirm('Confirmation','Are You Sure Want to Delete This Data?', function(r) {
		if(r) {
			fcrud($me.addClass(act), url, post, function(resp) {
				reload_page($me.attr('href').replace('#f', ''));
			});
		}
		else $me.parents('tr:first').removeClass('warning');
	});
	return false;
}

function crup_r(elm, event, f_uid, f_act){
	var $me		= $(elm),
		tdx 	= null,
		eRR 	= 0,
		url		= $me.attr('href').replace('#', 'crud/')+'/'+f_act,
		post	= [];
        
	$('input, select, textarea', f_uid).each(function() {
		// var _elm = $(this).removeClass('error');
		// eRR += validate(_elm);
	});

	if(eRR) {
		show_message("Error Entry Data", "All Fields Marked With a Red Asterisk are Mandatory.<br />Fields Marked With a Red Striped Edge are in a Wrong Format / Content is not Appropriate", "error");
		return false;
	}
	else {
		$('.postit', f_uid).each(function() {
			var obj = this.className.split(' ')[1], val= '';
			if($(this).hasClass('date'))
			{
			   $(this).val($(this).datebox('getValue'));
			   val = $(this).val();
			}
			
			if(this.type=='checkbox' || this.type=='radio') {
				post.push({name:obj, value:$(this).attr('checked') ? '1' : '0'});
			}
			else {post.push({name:obj, value:$(this).val() });}
		});
		
		fcrud($me.addClass(f_act), url, post, function(resp) {
			reload_page($me.attr('href').replace('#f', ''));
		});
	}
}

function save_r(elm, event, obj){
	var $me		= $(elm),
		$obj	= $(obj),
		url		= $me.attr('rel').replace('#f', 'crud/')+'/save',
		post	= [];
		err		= 0;
		
		$('input, select, textarea', f_uid).each(function() {
			if ($(this).hasClass('error')){
				err = 1;
			}
		});
		
		if (err == 0){
			$('.postit', obj).each(function() {
				var obj = this.className.split(' ')[1], val= '';

				if(this.type=='checkbox' || this.type=='radio') {
					post.push({name:obj, value:$(this).attr('checked') ? '1' : '0'});
				}
				else {post.push({name:obj, value:$(this).val() });}
			});
			
			fcrud($me.addClass('save'), url, post, function(resp) {
				reload_page($me.attr('pre').replace('#f', ''));
			});
		} else {
			show_message('ERROR', 'Data in red borders are invalid');
		}
}

function set_name(elm){
	var  $trg	= $(elm).next(),
		 val	= $(elm).val();
		 
		 if (val != ''){
			 $.ajax({
					type: 'GET',
					url : site+'get_name/'+val,
					timeout: tx_out,
					success: function(resp){
						if(resp=='expired') {
							ts_out();
						} else if(resp=='0'){
							$(elm).addClass('error');
							$(elm).closest('tr').find('td').eq(1).empty();
						} else {
							$(elm).removeClass('error');
							$(elm).closest('tr').find('td').eq(1).empty().html("<label style='padding: 0 10px'></label>"+resp);
						};
					},
					error: function (XMLHttpRequest, textStatus, errorThrown) {
						if(textStatus=="timeout") {
							ajax.abort();
							ts_out();
						}
					}
			 });
		 } else {
			$(elm).removeClass('error');
			$(elm).closest('tr').find('td').eq(1).empty();
		 }
}

function show_message(title, msg , icon, callback){
    if (icon == undefined ) icon ='info';
    $.messager.alert(title, msg, icon, callback);
}

function popup_message(title, msg) {
	$.messager.show({
		msg:msg,
		title:title,
		showType:fade
	});
}

$(function() {

    			
	window.viewport = {
		height: 	function() {return $(window).height();},
		width: 		function() {return $(window).width();},
		scrollTop: 	function() {return $(window).scrollTop();},
		scrollLeft: function() {return $(window).scrollLeft();}
	};
	
	$('.sMenu').live('click', function() {
		var _elm = $(this);
		ackPge	 = _elm.attr('href').replace('#page/','').split('/')[0];
		$('.sMenu').removeClass('hover');
		_elm.addClass('hover');
		
		$('#m_content').panel({
			title: _elm.attr('title').toUpperCase(),
			// tools: [{
				// iconCls:'icon-search',
				// handler:function(){ $('#fsearch').toggleClass('hide') }
			// }, {
				// iconCls:'icon-xls',
				// handler:function() { 
					// window.location.href = site+'page/'+ackPge+'/xls';
				// }
			// }]
		});
		
		load($(this).attr('href'), null, null, function() {
			$('.easyui-linkbutton').linkbutton();
			$('.date').datebox();
			$('.combobox').combobox();
			
			// if(!$('#fsearch').length) $('a.icon-search').remove();
			// if($('#noxls').length) $('a.icon-xls').remove();

			var aoColumns = [];
			$('.tpmain thead th').each( function () {
				if ( $(this).hasClass( 'nsort' )) {
					aoColumns.push( { "bSortable": false } );
				} else {
					aoColumns.push(null);
				}
			});
			
			if($('.tpmain').length) {
				$('.tpmain').dataTable( {
					"bJQueryUI": true,
					"bLengthChange" : false,
					"aoColumns" : aoColumns
				} );
			}
			
			// if($('#tpmain').length) {
				// pTable = $('#tpmain').dataTable({
					// 'sPaginationType': 'full_numbers',
					// 'bJQueryUI': true
				// });
			// }
			
			$(window).resize();
		});
	});
	
	$('input, textarea')
		.live('blur',  function() {
			var obj = $(this),
				val = obj.removeClass('focus').val();
			if(obj.hasClass('numeric')) obj.val(format_number(val));
		})
		.live('focus', function() {
			ac_uid	= $(this).select().addClass('focus').attr('class').split(' ')[0];
			ac_len	= $(this).width();
			$('#msg').empty();
		});
		
	// $('input.ac')
		// .autocomplete(site+'ac', {
			// width: function() {return ac_len;},
			// minChars: 2,
			// max:25,
			// scrollHeight: 220,
			// matchContains: true,
			// formatItem: function (row) {return "<span>" + row[0] + "</span><span class='r'>" + row[1] + "</span>";},
			// extraParams: {
				// t:  function() {return ac_uid;},
				// ts: function() {return new Date().getTime();}
			// }
		// });
		
	$('#logo').live('click', function() {window.location.href = site;});
	
	$('#m_content').children().eq(0).remove().next().show();
});

$(function () {
	$(window).resize(function() {
		$('.easyui-layout').layout('resize');
	})
});                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             