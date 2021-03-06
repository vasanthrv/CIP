<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Test item <-> JSON conversions</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- include styles -->
    <?php
     include $_SERVER['DOCUMENT_ROOT']."/includes/styles.html";
    ?>
  </head>

  <!-- Not including any icons or event handlers in the test cases. It shouldn't matter -->
  <body>
    <!-- include forms -->
    <?php
     require $_SERVER['DOCUMENT_ROOT'].'/includes/forms.html';
     ?>    <h1>Test items</h1>
    <h2>Text</h2>
    <!-- generated using mozilla's example -->
    <section class="text" id="ttext">
      <div class="content">
	<p>Lorem ipsum<br></p><p>asdasd<b>basdd <i>dadad</i></b><i>dadad<u>bbbbb</u></i></p><p><i><u><span style="background-color: red;">abcd<font color="blue">bad</font></span></u></i></p><pre><font size="5" face="Courier New">dddd <br><br></font><pre>ddasdaswww <br></pre></pre><p><i><u><span style="background-color: red;"></span></u></i></p><p><i><u><span style="background-color: red;"><font color="blue"><br></font></span></u></i></p><p><i><u><span style="background-color: red;"><font color="blue"></font></span></u></i><br></p>
      </div>
    </section>
    
    <h2>Images</h2>
    <section class="image" id="timage">
      <p class="desc">An image</p>
      <div class="content">
	<img src="../resources/img.jpg">
      </div>
    </section>
    <section class="image" id= "outtimage">
      <p class="desc">Google</p>
      <div class="content">
	<img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png">
      </div>
    </section>
    
    <h2>Audio</h2>
    <section class="audio" id="taudio">
      <p class="desc">An audio file</p>
      <div class="content">
	<audio controls id="taudio" src="../resources/audio.mp3"></audio>
      </div>
    </section>
    
    <h2>Video</h2>
    <section class="video" id="tvideo">
      <p class="desc">A video file</p>
      <div class="content">
	<video controls id="tvideo">
	  <source src="../resources/video.mp4">
	</video>
      </div>
    </section>

    <h2>Links</h2>
    <section class="link" id="tlink">
      <div class="content">
	<a href="https://www.google.com/" class="original_link">Link to content</a>
	<a href="goog.html" class="archived_link">(Archive)</a>
      </div>
    </section>
    <section class="link" id="tlink2">
      <div class="content">
	<a href="https://www.yahoo.com" class="original_link">Link to content</a>
      </div>
    </section>
    
    
    <h1>JSON encoded results</h1>
    <h2>Paragraph</h2>
    <p id="stext"></p>
    <h2>Images</h2>
    <p id="simage"></p>
    <p id="outsimage"></p>
    <h2>Audio</h2>
    <p id="saudio"></p>
    <h2>Video</h2>
    <p id="svideo"></p>
    <h2>Links</h2>
    <p id="slink"></p>
    <p id="slink2"></p>

    <h1>Regenerated items</h1>
    <h2>Paragraph</h2>
    <section id="dtext"></section>
    <h2>Images</h2>
    <section id="dimage"></section>
    <section id="outdimage"></section>
    <h2>Audio</h2>
    <section id="daudio"></section>
    <h2>Video</h2>
    <section id="dvideo"></section>
    <h2>Link</h2>
    <section id="dlink"></section>
    <section id="dlink2"></section>

    <!-- include scripts -->
    <?php
     include $_SERVER['DOCUMENT_ROOT']."/includes/scripts.html";
     ?>
    
    <!-- Driver here -->
    <script>
      document.getElementById("stext").textContent = DOMToJSON(document.getElementById("ttext"));
      document.getElementById("dtext").innerHTML = JSONToInnerHTML(JSON.parse(document.getElementById("stext").textContent));

      document.getElementById("simage").textContent = DOMToJSON(document.getElementById("timage"));
      document.getElementById("dimage").innerHTML = JSONToInnerHTML(JSON.parse(document.getElementById("simage").textContent));
      
      document.getElementById("outsimage").textContent = DOMToJSON(document.getElementById("outtimage"));
      document.getElementById("outdimage").innerHTML = JSONToInnerHTML(JSON.parse(document.getElementById("outsimage").textContent));

      document.getElementById("saudio").textContent = DOMToJSON(document.getElementById("taudio"));
      document.getElementById("daudio").innerHTML = JSONToInnerHTML(JSON.parse(document.getElementById("saudio").textContent));

      document.getElementById("svideo").textContent = DOMToJSON(document.getElementById("tvideo"));
      document.getElementById("dvideo").innerHTML = JSONToInnerHTML(JSON.parse(document.getElementById("svideo").textContent));

      document.getElementById("slink").textContent = DOMToJSON(document.getElementById("tlink"));
      document.getElementById("dlink").innerHTML = JSONToInnerHTML(JSON.parse(document.getElementById("slink").textContent));
      
      document.getElementById("slink2").textContent = DOMToJSON(document.getElementById("tlink2"));
      document.getElementById("dlink2").innerHTML = JSONToInnerHTML(JSON.parse(document.getElementById("slink2").textContent));

    </script>
      
  </body>

</html>

