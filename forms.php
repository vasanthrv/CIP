<!doctype html>
<!-- <body onload="initDoc();"> -->

<form name="compForm" method="post" action="sample.php" onsubmit="if(validateMode()){this.myDoc.value=oDoc.innerHTML;return true;}return false;">
<input type="hidden" name="myDoc">
<div id="toolBar1">
<select onchange="formatDoc('formatblock',this[this.selectedIndex].value);this.selectedIndex=0;">
<option selected>- formatting -</option>
<option value="h1">Title 1 &lt;h1&gt;</option>
<option value="h2">Title 2 &lt;h2&gt;</option>
<option value="h3">Title 3 &lt;h3&gt;</option>
<option value="h4">Title 4 &lt;h4&gt;</option>
<option value="h5">Title 5 &lt;h5&gt;</option>
<option value="h6">Subtitle &lt;h6&gt;</option>
<option value="p">Paragraph &lt;p&gt;</option>
<option value="pre">Preformatted &lt;pre&gt;</option>
</select>
<select onchange="formatDoc('fontname',this[this.selectedIndex].value);this.selectedIndex=0;">
<option class="heading" selected>- font -</option>
<option>Arial</option>
<option>Arial Black</option>
<option>Courier New</option>
<option>Times New Roman</option>
</select>
<select onchange="formatDoc('fontsize',this[this.selectedIndex].value);this.selectedIndex=0;">
<option class="heading" selected>- size -</option>
<option value="1">Very small</option>
<option value="2">A bit small</option>
<option value="3">Normal</option>
<option value="4">Medium-large</option>
<option value="5">Big</option>
<option value="6">Very big</option>
<option value="7">Maximum</option>
</select>
<select onchange="formatDoc('forecolor',this[this.selectedIndex].value);this.selectedIndex=0;">
<option class="heading" selected>- color -</option>
<option value="red">Red</option>
<option value="blue">Blue</option>
<option value="green">Green</option>
<option value="black">Black</option>
</select>
<select onchange="formatDoc('backcolor',this[this.selectedIndex].value);this.selectedIndex=0;">
<option class="heading" selected>- background -</option>
<option value="red">Red</option>
<option value="green">Green</option>
<option value="black">Black</option>
</select>
</div>
<div id="toolBar2">
<img class="intLink" title="Clean" onclick="if(validateMode()&&confirm('Are you sure?')){oDoc.innerHTML=sDefTxt};" src="icon/clean.png" />
<img class="intLink" title="Print" onclick="printDoc();" src="icon/print.png">
<img class="intLink" title="Undo" onclick="formatDoc('undo');" src="icon/undo.png" />
<img class="intLink" title="Redo" onclick="formatDoc('redo');" src="icon/redo.png" />
<img class="intLink" title="Remove formatting" onclick="formatDoc('removeFormat')" src="icon/removeformat.png">
<img class="intLink" title="Bold" onclick="formatDoc('bold');" src="icon/bold.png" />
<img class="intLink" title="Italic" onclick="formatDoc('italic');" src="icon/italic.png" />
<img class="intLink" title="Underline" onclick="formatDoc('underline');" src="icon/underline.png" />
<img class="intLink" title="Left align" onclick="formatDoc('justifyleft');" src="icon/left.png" />
<img class="intLink" title="Center align" onclick="formatDoc('justifycenter');" src="icon/centre.png" />
<img class="intLink" title="Right align" onclick="formatDoc('justifyright');" src="icon/right.png" />
<img class="intLink" title="Numbered list" onclick="formatDoc('insertorderedlist');" src="icon/number.png" />
<img class="intLink" title="Dotted list" onclick="formatDoc('insertunorderedlist');" src="icon/bullet.png" />
<img class="intLink" title="Quote" onclick="formatDoc('formatblock','blockquote');" src="icon/quote.png" />
<img class="intLink" title="Delete indentation" onclick="formatDoc('outdent');" src="icon/delindent.png" />
<img class="intLink" title="Add indentation" onclick="formatDoc('indent');" src="icon/indent.png" />
<img class="intLink" title="Hyperlink" onclick="var sLnk=prompt('Write the URL here','http:\/\/');if(sLnk&&sLnk!=''&&sLnk!='http://'){formatDoc('createlink',sLnk)}" src="icon/link.png" />
<img class="intLink" title="Cut" onclick="formatDoc('cut');" src="icon/cut.png" />
<img class="intLink" title="Copy" onclick="formatDoc('copy');" src="icon/copy.png" />
<img class="intLink" title="Paste" onclick="formatDoc('paste');" src="icon/paste.png" />
</div>
<div id="textBox" contenteditable="true"></div>
<label for="img">Select image:</label>
<input type="file" id="img" name="img" accept="image/*">
<p id="editMode"><input type="checkbox" name="switchMode" id="switchBox" onchange="setDocMode(this.checked);" /> <label for="switchBox">Show HTML</label></p>
<p><input type="submit" value="Send" /></p>
</form>
</body>
</html>