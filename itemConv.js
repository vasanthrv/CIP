/* 
   Items <-> JSON

   Items = text, image, audio, video and links
   This may be expanded

   Items form SECTIONS of an ARTICLE (FRAGMENT)

   One DIV or SPAN (not decided yet) for showing icons
   Another for displaying stuff

   <section class=ItemType (text, image etc)>
   <div/span class=Work>...Icons... Tie to relevant handlers</div/span>
   <div class="content">.......</div>
   </section>
*/

function DOMToJSObject(item)
{
    innerContents = item.getElementsByClassName("content")[0];
    
    if (item.className == "text") {
	obj = {type : "text", content : innerContents.innerHTML};
    }

    else if (item.className == "image") {
	obj = {type : "image", content : innerContents.getElementsByTagName("IMG")[0].src}
    }
	      
    else if (item.className == "audio" || item.className == "video") {
	var temp = innerContents.getElementsByTagName("audio");
	if (temp.length == 0)
	    temp = innerContents.getElementsByTagName("video");
	
	var it = temp[0];
	
	var ntype = it.nodeName.toLowerCase();
	if(it.src == "")
	    var src = it.currentSrc;
	else
	    var src = it.src;
	
	obj = {type : ntype, content: src}
    }

    else if (item.className == "link") {
	var temp = innerContents.getElementsByClassName("original_link")[0];
	var original = temp.href;
	var original_text = temp.text;
	temp = innerContents.getElementsByClassName("archived_link");
	if(temp.length == 0)
	    var archived = "";
	else
	    archived = temp[0].href;

	obj = {type : "link", original_link : original, original_text: original_text, archived_link : archived}
	
    }
    else {
	obj = {type : "unknown"};
	return obj;
    }
									    
    return obj;
}

function DOMToJSON(item)
{
    obj = DOMToJSObject(item);
    return (JSON.stringify(obj));
}

function JSONToInnerHTML(str, tmp) 
{
    var opening = "<div class='content'>";
    // opening = iconsGen(arg) + opening;
    var closing = "</div>";
    
    if (tmp.type == "text") {
	return opening + tmp.content + closing;
    }

    else if (tmp.type == "image") {
	return opening + "<img src='" + tmp.content + "'>" + closing;
    }

    else if (tmp.type == "audio" || tmp.type == "video") {
	return opening + "<" + tmp.type + " controls src='" + tmp.content + "'>" + closing;
    }

    else if (tmp.type == "link") {
	var concat = opening + "<a class='original_link' href='" + tmp.original_link + "'>" + tmp.original_text + "</a>";
	
	if (tmp.archived_link != "")
	{
	    concat += " " + "<a class='archived_link' href='" + tmp.archived_link + "'>" + "(Archive)" + "</a>";
	}

	return concat + closing;
    }

    else {
	return "<span color='red'>Unknown element!</span>";
    }	
}

function JSONtoDOM(str)
{
    var tmp = JSON.parse(str);
    
    var DOMObject = document.createElement("SECTION");
    DOMObject.className = tmp.type;
    DOMObject.innerHTML = JSONToInnerHTML(str, tmp);

    return DOMObject;
}

// A stub for now, expand this later
function iconsGen(arg)
// argument - what will it be?
{
    // should return something that will be concatenated with the generated "content" div and placed in innerHTML of a section
    return "<span>Icons<br></span>";
}