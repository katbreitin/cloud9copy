/* /* Modify the HTML to add a class for each thumbnail 
 
 Write a loop to seek out all the img tags with the newy defined class querySelectorAll()
 
 each image attach a listener on the mouseIn Event to creat a new span with a large image insdie (based on the src attribute)
 
Add another listener on the mouseOut eveny to hide the newly created <span>


   <!-- Kathleen Breitinger
     Chapter 6
     WEB 360
     1/10/2017
-->*/



(function() {
		window.onload = function() {
		var paintings = document.querySelectorAll(".artThumb");
		for (var i = 0; i < paintings.length; i++) {
			paintings[i].onmouseover = function() {
				var myNode = document.createElement("img");
				var thumb = this.src;
				var double = thumb.split("/");
				myNode.src = "images/art/" + double[double.length -1];
				myNode.className = "bigImg";
				this.parentNode.appendChild(myNode);
				console.log(this.src);
			};
			
			paintings[i].onmouseout = function() {
				var paintings = document.querySelectorAll(".bigImg");

					for (var i = 0; i < paintings.length; i++) {
					paintings[i].parentNode.removeChild(paintings[i]);
				}
			};
		}
	};

}).call(this);





   

