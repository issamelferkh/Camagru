//const captureButton = document.querySelector("#capture-btn");
// const video = document.querySelector('#video');

// function getVideo(video) {
//     navigator.mediaDevices
//         .getUserMedia({
//             video: true,
//             audio: false
//         })
//         .then(stream => {
//             video.srcObject = stream
//             video.play()
//         })
//         .catch(err => console.error(`Oups !!`, err))
// }
// getVideo(video)
(function(){


var video = document.getElementById('video'),
        canvas = document.getElementById('canvas'),
        context = canvas.getContext("2d"),
        photo = document.getElementById('photo'),
        vendorURL = window.URL || window.webkitURL;
    // navigator.getMedia = (navigator.getUserMedia ||
    //     navigator.webkitGetUserMedia ||
    //     navigator.mozGetUserMedia ||
    //     navigator.msGetUserMedia);
    // navigator.getMedia({
    //     video: true,//{ width: 420, height: 320 },
    //     audio: false
    // }, function (stream) {
    //     if ('srcObject' in video)
    //         video.srcObject = stream;
    //     else
    //         video.src = vendorURL.createObjectURL(stream);
    //     video.play();
    // }, function (error) {
    //     /*console.log("An error occured! " + error);*/
    // });
    navigator.getUserMedia = navigator.getUserMedia ||
                         navigator.webkitGetUserMedia ||
                         navigator.mozGetUserMedia || navigator.msGetUserMedia;

if (navigator.getUserMedia) {
   navigator.getUserMedia({ audio: true, video: { width: 1280, height: 720 } },
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
} else {
   console.log("getUserMedia not supported");
}
})();
// // Capture the image, save it and then paste it to the DOM
// captureButton.addEventListener("click", event => {
// // Draw the image from the video player on the canvas
// canvasElement.style.display = "block";
// const context = canvasElement.getContext("2d");
// context.drawImage(videoPlayer, 0, 0, canvas.width, canvas.height);

// videoPlayer.srcObject.getVideoTracks().forEach(track => {
// // track.stop();
// });