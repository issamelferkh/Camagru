// montage
(function(){
    var video = document.getElementById('video'),
        canvas = document.getElementById('canvas'),
        context = canvas.getContext('2d'),
        vendorUrl = window.URL || window.webkitURL;

    navigator.getUserMedia = navigator.getUserMedia ||
                            navigator.webkitGetUserMedia ||
                            navigator.mozGetUserMedia || 
                            navigator.msGetUserMedia;

    if (navigator.getUserMedia) {
        navigator.getUserMedia({audio: false, video: { width: 430, height: 320 }},
            function(stream) {
                var video = document.querySelector('video');
                video.srcObject = stream;
                video.onloadedmetadata = function(e) {
                    video.play();
                };
            },
            function(err) {
                console.log("The following error occurred: " + err.name);
            }
        );

        document.getElementById('capture').addEventListener('click', function() {
            context.drawImage(video, 0, 0, 430, 320, 0, 0, 300, 150);
        });
    } else {
        console.log("getUserMedia not supported");
    }
})();

// (function() {
//     var video = document.getElementById('video'),
//         vendorUrl = window.URL || window.webkitURL;

//     navigator.getMedia =    navigator.getUserMedia ||
//                             navigator.webkitGetUserMedia ||
//                             navigator.mozGetUserMedia || 
//                             navigator.msGetUserMedia;

//     navigator.getMedia({
//         audio: false, 
//         video: true
//     }, function(stream) {
//         video.src = vendorUrl.createObjectURL(stream);
//         console.log(video.src);
//         video.play();
//     }, function(error) {
//         console.log("The following error occured: " + error.name);
//     });
// })();



