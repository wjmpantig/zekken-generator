<!doctype html>
<html>
	<head>
		  <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="node_modules/foundation-sites/dist/css/foundation-float.min.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="row expanded">
			<div class="column small-12 large-5">
				<form action="" id="form">
					<div class="row">
						<div class="column small-12 large-3">
							<label >
								 name
								<input id="name" type="text" placeholder="name" value="igarashi">			
							</label>
							
						</div>
						<div class="column small-6 large-3">
							<label >font size
								<input id="name_size" type="number" value="87">
							</label>
						</div>
						<div class="column small-6 large-3">
							<label >font height scaling
								<input id="name_height_scale" type="number" value="137">
							</label>
						</div>
						<div class="column small-6 large-3">
							<label >y pos
								<input id="name_y_pos" type="number" value="708">
							</label>
						</div>
					</div>
					<div class="row">
						<div class="column small-12 large-3">
							<label >
								japanese name
								<input id="jp_name" type="text" placeholder="japanese name" value="五十嵐">			
							</label>
							
						</div>
						<div class="column small-6 large-3">
							<label>font
								<select name="jp_font" id="jp_font">
									<option value="nagayama_kai-90ms-RKSJ-H">nagayama_kai</option>
									<option value="NotoSerifCJKjp-Bold-90ms-RKSJ-H">NotoserifCJKjp</option>
								</select>
							</label>
						</div>
						<div class="column small-6 large-2">
							<label >font size
								<input type="number" id="jp_name_size" value="120">
							</label>
						</div>
						<div class="column small-6 large-2">
							<label >y pos
								<input id="jp_name_y_pos" type="number" value="213">
							</label>
						</div>
						<div class="column small-6 large-2">
							<label >spacing auto
								<input id="jp_name_spacing_auto" type="checkbox" checked="checked">
								<input id="jp_name_spacing" type="number" value="-7">
							</label>
						</div>
					</div>
					
					<label >
						size
						<select name="zekken_size" id="zekken_size">
							<option value="6.25x10.413">normal</option>
						</select>
					</label>
					<label>
						hide guidelines
						<input type="checkbox" id="hide_guidelines">
					</label>
					<button class="button" id="save-button">generate files</button>
				</form>
				
				
			</div>
			<div class="column small-4 large-2">
						<div class="image_container">
							
						<?php 
							echo file_get_contents('template.svg');
						?>
						<img class="guidelines" src="guidelines.svg" alt="">
						</div>

						
			</div>
			<div class="column small-4 large-2">
						<div class="output_container">	
							<img id="output_1" alt="">
						</div>
					
			</div>
			<div class="column small-4 large-2 end">
						<div class="output_container with-grid">	
							<img id="output_2" alt="">
						</div>
			</div>
		</div>
		
		<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="node_modules/foundation-sites/dist/js/foundation.min.js"></script>
		<script type="text/javascript" src="node_modules/svg.js/dist/svg.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>