(function($){

	function centerName(y){
		var name_bbox = name.bbox();
		var rect_bbox = rect.bbox();
		var x = (rect_bbox.cx) - (name_bbox.width/2);
		name.move(x,y);
	}
	$(document).foundation();

	var container = $(".output_container");
	container.hide();
	var output1 = $("#output_1");
	
	var jp_name = SVG.select("#svg_japanese_name").first();
	var name = SVG.select("#svg_name").first();
	var rect = SVG.select("#bg").first();

	$("#name").change(function(){
		var value = $(this).val();
		name.plain(value);
		$("#name_y_pos").change();
	});

	$("#name_size").change(function(){
		var value = $(this).val() + "pt";
		name.size(value);
		$("#name_y_pos").change();
		
	});
	$("#name_height_scale").change(function(){
		var value = $(this).val();
		name.scale(1,value/100);
		$("#name_y_pos").change();	
		
	});

	
	$("#name_y_pos").change(function(){
		var value = $(this).val();
		centerName(value);
	});

	$("#jp_name").change(function(){
		var value = $(this).val();
		jp_name.plain(value);
		
	});
	$("#jp_name_size").change(function(){
		var value = $(this).val();
		jp_name.font('size',value);
		
	});
	$("#jp_font").change(function(){
		var value = $(this).val();
		jp_name.font('family',value);
		
	});


	$("#jp_name_y_pos").change(function(){
		var value = $(this).val();
		var jp_name_bbox = jp_name.rbox();
		var rect_bbox = rect.bbox();
		var x = (rect_bbox.cx) ;
		jp_name.move(x,value)
		jp_name.scale(1,1);
		
	});

	$("#jp_name_spacing_auto").change(function(){
		var value = this.checked;
		if(value){
			jp_name.style('letter-spacing',null);
		}else{
			var spacing = $("#jp_name_spacing").val();
			jp_name.style('letter-spacing',spacing);
		}
	});

	$("#jp_name_spacing").change(function(){
		var value = $(this).val();
		var checked = $("#jp_name_spacing_auto").get(0).checked;
		
		if(checked){
			jp_name.style('letter-spacing',null);
		}else{
			var spacing = $("#jp_name_spacing").val();
			jp_name.style('letter-spacing',spacing);
		}
	});

	$("#hide_guidelines").change(function(){
		if(this.checked){
			$('.guidelines').hide();
		}else{
			$('.guidelines').show();
		}
	})

	$("#form select,input").change(function(){
		container.hide();
		
	}).change();

	

	$('#save-button').click(function(e){
		e.preventDefault();
		var svg = $(".svg_template").get(0).outerHTML;
		var size = $("#zekken_size").val();
		var dpi = 300;
		var width = parseFloat(size.split("x")[0]) * dpi;
		var height = parseFloat(size.split("x")[1]) * dpi;
		var data = {
			svg:svg,
			width: width,
			height: height
		}
		$.post('generate-zekken.php',data,function(data){
			container.show();
			output1.attr('src','png/' + data);
		}).fail(function(data){
			console.error(data)
		})
	});
})(jQuery);