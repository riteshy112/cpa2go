<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Simple Recorder.js demo with record, stop and pause</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/front/audio/style.css">

    
  </head>
  <body>
    <h1>Simple Recorder.js demo</h1>
    <p>
        Matt Diamond‘s <a href="https://github.com/mattdiamond/Recorderjs">Recorder.js</a> is a popular JavaScript library for recording audio in the browser as uncompressed pcm audio in .wav containers. Before it the only way to record audio was to use Flash.
    </p>

    <p>Check out the <a href="https://github.com/addpipe/simple-recorderjs-demo" target="_blank">code on GitHub</a> and our <a href="https://addpipe.com/blog/using-recorder-js-to-capture-wav-audio-in-your-html5-web-site/" target="_blank">blog post on using Recorder.js to capture WAV audio</a>.</p>
    <div id="controls">
  	 <button id="recordButton">Record</button>
  	 <button id="pauseButton" disabled>Pause</button>
  	 <button id="stopButton" disabled>Stop</button>
    </div>
    <div id="formats">Format: start recording to see sample rate</div>
  	<h3>Recordings</h3>
  	<ol id="recordingsList"></ol>
    
    <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->
    
  </body>
</html>

<script type="text/javascript">
  
  var url_path = "<?=base_url()?>";
</script>

<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
    
<script src="<?=base_url()?>assets/front/audio/app.js"></script>