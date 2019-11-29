<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Page Title</title>
	<script src="main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style>
	#stcanvas
	{
		position:absolute;
		
	}
	</style>
</head>
<body>
	<h1>Test</h1>
	Rotate:	<div id="rotat"></div>
	Resize:	<div id="resize"></div>
	<br>
	<input type="hidden" value="0" id="img_resize">
	<canvas id="stcanvas" width="400" height="550" style="background-color:#eee"></canvas>
</body>
<script>
function buildcanvas() {
    var stcanvas = document.getElementById('stcanvas');
    var ctx = stcanvas.getContext('2d');

    make_pic(ctx);

}


// prepare image to fit canvas;

function prep_image() {
    pic_i = 400;
    xfact = pic_i / 400;

    return xfact;
}

function make_pic(ctx) {
    ctx.clearRect(0, 0, 400, 550);

    // Mask for clipping
    mask_image = new Image();
    mask_image.src = 'https://10.12.100.163/camagru/camagru/assets/img/1__2019_11_26_23_54_53.png';
    ctx.drawImage(mask_image, 0, 0);
    ctx.save();

    pic_image = new Image();
    pic_image.src = 'https://10.12.100.163/camagru/camagru/assets/img/3.png';
    xfact = prep_image();

    var im_width = parseInt(pic_image.width + $('#resize').slider('value') / xfact);
    var im_height = parseInt(pic_image.height + $('#resize').slider('value') / xfact);
    // alert(im_width);
    ctx.translate(200, 275);
    ctx.rotate($('#rotat').slider('value') * Math.PI / 180);
    ctx.globalCompositeOperation = "source-in";
    ctx.drawImage(pic_image, -400 / 2, -550 / 2, im_width, im_height);
    ctx.restore();
}


$(window).mousemove(function(event) {
  $("#stcanvas").css({"left" : event.pageX, "top" : event.pageY});
});

// $("#rotat").slider({
//     value: 0,
//     min: -180,
//     max: 180,
//     step: 1,
//     slide: function () {
//         buildcanvas();
//     }

// });

// $("#resize").slider({
//     value: 0,
//     min: -150,
//     max: 150,
//     step: 1,
//     slide: function (event, ui) {
//         $('#img_resize').val(ui.value);
//         buildcanvas();
//     }

// });
buildcanvas();
</script>
</html>