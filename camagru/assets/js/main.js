var video = document.getElementById('video');
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var capture = document.getElementById('capture');

function getVideo(video) {
        navigator.getUserMedia = navigator.getUserMedia ||
                            navigator.webkitGetUserMedia ||
                            navigator.mozGetUserMedia || 
                            navigator.msGetUserMedia;
                            
    if (navigator.getUserMedia) {
        navigator.getUserMedia({
            audio: false, 
            video: { width: 430, height: 320 }
        }, 
        function(stream) {
            var video = document.querySelector('video');
            video.srcObject = stream;
            video.onloadedmetadata = function(e) {
                video.play();
            };
        }, 
        function(err) {
                console.log("Please enable the webcam in your browser :D");
            }
        );
    } else {
        console.log("getUserMedia not supported");
    }
}

function drawInCanvas() {
    var width = video.videoWidth;
    var height = video.videoHeight;
    canvas.width = width;
	canvas.height = height;
    context.drawImage(video, 0, 0, width, height);
}

if (video && canvas) {
	getVideo(video);
	// video.addEventListener('canplay', drawInCanvas);
}

if (capture) {
    capture.addEventListener('click', function() {
        drawInCanvas();
        document.querySelector('.imgInputData').value = canvas.toDataURL('image/png');
    });
}
// }
// catch(e){

// }