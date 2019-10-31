document.getElementById('btn').addEventListener('click', function(){
 if( document.getElementById('navbarsExampleDefault').style.display == "block")
   document.getElementById('navbarsExampleDefault').style.display = "none";
 else
   document.getElementById('navbarsExampleDefault').style.display = "block";
 });
 //----------------------------------------------------------------------------------------------------
document.addEventListener("DOMContentLoaded", function(){
    var likes = document.getElementsByName("liket");
    var unlike = document.getElementsByName("unliket");
     var show = document.getElementsByName("commentbtn");
    var comment = document.getElementById("comment");
    //like
    
    for (var i=0; i < likes.length; i++) {
        likes[i].onclick = function(event) {
        event.target.className = "fa fa-heart";
        var imgid = (event.target && event.target.getAttribute('data-imgid'));
        var userid = (event.target && event.target.getAttribute('data-userid'));
        var xhttp = new XMLHttpRequest();
        var params = "imgid="+imgid+"&userid="+userid;
        xhttp.open('POST', 'http://localhost/Camagru/Posts/addlikes');
        xhttp.withCredentials = true;
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
                location.reload();
            }    
        }
        xhttp.send(params);
        
        }
    }
    //unlike
    for(var i=0; i < unlike.length; i++){
        unlike[i].onclick = function(event){
        event.target.className = "fa fa-heart-o";
        var imgid = (event.target && event.target.getAttribute('data-imgid'));
        var userid = (event.target && event.target.getAttribute('data-userid'));
        var xhttp = new XMLHttpRequest();
        var params = "imgid="+imgid+"&userid="+userid;
        xhttp.open('POST', 'http://localhost/Camagru/Posts/dellikes');
        xhttp.withCredentials = true;
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
                location.reload();
            }    
        }
        xhttp.send(params);
        
        }
        }
    
    //comment
    for(var i=0; i < show.length; i++){
        show[i].onclick = function(){
            console.log("ok");
            comment.hidden = false;
        }
    }
    
    
});  

 //----------------------------------------------------------------------------------------------------





//----------------------------------------------------------------------------------------------------
 (function(){
    var video = document.getElementById('video'),
        canvas = document.getElementById('canvas');
     if (canvas == null)
        return;
     var   w = canvas.width,
        h = canvas.height,
        context = canvas.getContext('2d'),
        imagefile = document.getElementById('upFile'),
        stick = 'none',
        width = window.innerWidth,
        height = window.innerHeight,
        vendorUrl = window.URL || window.webkitURL;
        context.strokeRect(0, 0, w, h);
 
 
    navigator.getMedia =    navigator.getUserMedia ||
                            navigator.webkitGetUserMedia ||
                            navigator.mozGetUserMedia ||
                            navigator.msGetUserMedia;
 
    navigator.getMedia({
        video: true,
        audio: false
    }, function(stream){
        video.srcObject = stream;
        video.play();
 
    }, function(error){
 
    });
    
    var imgfilter = document.getElementById("img_filter");
    var radio = document.getElementsByName('stickers');
    console.log(imgfilter.src);
    for (var i = 0, length = radio.length; i < length; i++)
    {
        radio[i].onclick = function() {
         imgfilter.style.display = 'block';
        imgfilter.src = this.value;
        stick = imgfilter.src.replace("http://localhost/Camagru", "..");
       // alert(stick);
      
    }
 }
 
 
    window.addEventListener('DOMContentLoaded', initImageLoder);
    function initImageLoder(){
        imagefile.addEventListener('change', handleManualUploadedFiles);
 
        function handleManualUploadedFiles(ev){
            var file = ev.target.files[0];
            handleFile(file);
        }
    }
    function handleFile(file){
        var reader = new FileReader();
        reader.onloadend = function(e){
            var tempImageStore =  new Image();
 
            tempImageStore.onload = function(ev){
                h = ev.target.height;
                w = ev.target.width;
                context.drawImage(ev.target, 0, 0, w, h);
            }
            tempImageStore.src = event.target.result;
        }
        reader.readAsDataURL(file);
    }
    
    document.getElementById('capture').disabled = false;
    document.getElementById('capture').addEventListener('click', function(){
    
             if (imgfilter.src != "")
             {
                 h = canvas.height;
                 w = canvas.width;  
                 context.drawImage(video, 0, 0, w , h);
                 
     
             }
             else {
                 alert("Choose a sticker");
                 document.getElementById('capture').disabled = true;
             }
     
 
 
    });
    document.getElementById('up').addEventListener('click', function(){
        saveImage();
         h = canvas.height;
         w = canvas.width; 
        context.clearRect(0, 0, w , h);
        context.strokeRect(0, 0, w, h);
    });
    document.getElementById('clear').addEventListener('click', function(){
     h = canvas.height;
     w = canvas.width;
     context.clearRect(0, 0, w , h);
     context.strokeRect(0, 0, w, h);
 });
     
 function saveImage(){
     
     var canvasData = canvas.toDataURL("image/png");
     var params = "imgBase64="+canvasData+"&filtstick="+stick;
     var xhttp = new XMLHttpRequest();
     xhttp.open('POST', 'http://localhost/Camagru/Posts/takeImage');
    
     xhttp.withCredentials = true;
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function()
                 {
                    if (this.readyState == 4 && this.status == 200)
                    {
                        //my_img_div.innerHTML = this.responseText + my_img_div.innerHTML;
                    }
                }
                xhttp.send(params);
 }
 
 
 })();
 //----------------------------------------------------------------------------------------------------