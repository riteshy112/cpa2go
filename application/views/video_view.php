<!DOCTYPE html>
<?php 
  if(isset($_GET["dest"])){
    $dest = $_GET["dest"];
  }
  else{
    $dest = "0";
  }
?>
<html>
    <head>
        <!-- Video Chat app using peer.js -->
        <title> Video Chat </title>
        <script src="http://cdn.peerjs.com/0.3/peer.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
        <video id="other_video" autoplay="autoplay"></video>
        <video id="video" autoplay="autoplay"></video>
        <div id="main_page" class="slide">
          <div id="wrapper">
            <h1 id="big_head"> Video Chat </h1>
            <p id="author">by shd101wyy</p>
            <button id="enter_our_world_btn"> Create Room </button>
          </div>
        </div>
    </body>
    <script type="text/javascript">
      $(document).ready(function(){
        var DEST = "<? echo $dest; ?>"; 
        if(DEST !== "0"){
          $("#main_page").hide();
        }
        $("#enter_our_world_btn").click(function(){
          alert("Please allow browser camera access first ;)");
        })
        var lOCAL_MEDIA_STREAM;
        var startVideoChat;
        $("#video").hide();
        $("#other_video").hide();
        var peer = new Peer({ key: 'a6xdn00xnd6os9k9', debug: 3, config: {'iceServers': [
                  { url: 'stun:stun.l.google.com:19302' }, // Pass in optional STUN and TURN server for maximum network compatibility
                  { url: 'stun:stun1.l.google.com:19302'},
                  { url: 'stun:stun2.l.google.com:19302'},
                  { url: 'stun:stun3.l.google.com:19302'},
                  { url: 'stun:stun4.l.google.com:19302'},
                  { url: 'stun:stun01.sipphone.com'},
                  { url: 'stun:stun.ekiga.net'},
                  { url: 'stun:stun.fwdnet.net'},
                  { url: 'stun:stun.ideasip.com'},
                  { url: 'stun:stun.iptel.org'},
                  { url: 'stun:stun.rixtelecom.se'},
                  { url: 'stun:stun.schlund.de'},
                  { url: 'stun:stunserver.org'},
                  { url: 'stun:stun.softjoys.com'},
                  { url: 'stun:stun.voiparound.com'},
                  { url: 'stun:stun.voipbuster.com'},
                  { url: 'stun:stun.voipstunt.com'},
                  { url: 'stun:stun.voxgratia.org'},
                  { url: 'stun:stun.xten.com'},
                  { url: 'turn:homeo@turn.bistri.com:80', credential: 'homeo' }
                ]}});
        var MY_ID = "";
        peer.on('open', function(id){
            console.log("my id is " + id);
            MY_ID = id;
        });
        navigator.getUserMedia = ( navigator.getUserMedia ||
                             navigator.webkitGetUserMedia ||
                             navigator.mozGetUserMedia ||
                             navigator.msGetUserMedia);
        if (navigator.getUserMedia) {
           navigator.getUserMedia (
              // constraints
              {
                 video: true,
                 audio: true
              },
              // successCallback
              function(localMediaStream) {
                lOCAL_MEDIA_STREAM = localMediaStream
                 // Do something with the video here, e.g. video.play()
                peer.on('connection', function(conn){ // receive connection
                    conn.on('data', function(data){
                        console.log("received:" + data);
                        startVideoChat(data);
                    })
                }); 
                if (DEST === '0') { // no room found
                    $("#enter_our_world_btn").unbind("click");
                    $("#enter_our_world_btn").click(function(){
                        $("#big_head").html("Room Created!");
                        $("#author").html("<br>ask your friend to go to this link ;)<br><strong>dont' close or refresh this window</strong> while waiting for your friend to connect<br><br>" + "<strong>http://planetwalley.com/VideoChat/index.php?dest="+MY_ID+"</strong>");
                        $("#enter_our_world_btn").unbind('click');
                        $("#enter_our_world_btn").html("Copy Link");
                        $("#enter_our_world_btn").click(function() {
                          window.prompt("Copy to clipboard: Ctrl+C, Enter", "http://planetwalley.com/VideoChat/index.php?dest="+MY_ID);
                        });
                    })
                }
                else{
                      var conn = peer.connect(DEST); // start connection
                      conn.on('open', function(){
                          // send data
                          conn.send(MY_ID);
                      })
                      startVideoChat(DEST);
                }
              },
              // errorCallback
              function(err) {
                 console.log("The following error occured: " + err);
              }
           );
        } else {
           alert("getUserMedia not supported");
        } 
        startVideoChat = function(remote_user_id){
          console.log("START VIDEO CHAT WITH " + remote_user_id);
          $("#main_page").hide();
          $("#video").show();
          $("#other_video").show();
          $("#other_video").css("position", "absolute");
          $("#other_video").css("width", $(window).width());
          $("#other_video").css("height", $(window).height());
          $("#video").css("position", "absolute");
          $("#video").css("width", "400px");
          $("#video").css("height", "400px");
          $("#video").css("right", "0px");
          $("#video").css("bottom", "0px");
          var video = document.getElementById('video');
          video.src = window.URL.createObjectURL(lOCAL_MEDIA_STREAM);
          // video.volume = 0.9;
          video.muted = true;
          video.play();
          var call = peer.call(remote_user_id, lOCAL_MEDIA_STREAM); // call to that id
          call.on('stream', function(stream) {
              // `stream` is the MediaStream of the remote peer.
              // Here you'd add it to an HTML video/canvas element.
              console.log("1 receive stream from remote user\n");
              var other_video = document.getElementById("other_video");
              other_video.src = window.URL.createObjectURL(stream);
              other_video.play();
            });
          peer.on('call', function(call) {  // answer call
            // Answer the call, providing our mediaStream
            call.answer(lOCAL_MEDIA_STREAM);
            call.on('stream', function(stream) { // 接收
              // `stream` is the MediaStream of the remote peer.
              // Here you'd add it to an HTML video/canvas element.
              console.log("2 receive stream from remote user\n");
              var other_video = document.getElementById("other_video");
              other_video.src = window.URL.createObjectURL(stream);
              other_video.play();
            });
            peer.on('error', function(err) { console.log("ERROR1:", err)});
          });
          peer.on('error', function(err) { console.log("ERROR2:", err)});
        
        }
        window.onbeforeunload = function() {
          peer.disconnect();
          peer.destroy();
          return;
        };
      });
    </script>
</html>