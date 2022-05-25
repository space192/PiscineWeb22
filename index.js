//#region dark theme

let darktheme = 0;



//https://www.w3schools.com/js/js_cookies.asp

function toggleRootClass() {
	document.querySelector(":root").classList.toggle("dark");
}

if(localStorage.getItem("theme") === "ui")
{
	var element = document.querySelector(":root");
	element.classList.add("dark");
}

function switchTheme() {
	var element = document.querySelector(":root");
	element.classList.toggle("dark");
	if(element.classList.contains("dark"))
	{
		localStorage.setItem("theme","ui");
	}
	else
	{
		localStorage.setItem("theme","");
	}
}

//#endregion

//#region menu deroulant
//https://www.w3schools.com/howto/howto_js_dropdown.asp
function menuDeroulant() {
	document.getElementById("Options").classList.toggle("show");
}

window.onclick = function (event) {
	if (!event.target.matches('.boutounDeroulant')) {
		var deroulant = document.getElementsByClassName("contenu");
		let i;
		for (i = 0; i < deroulant.length; i++) {
			var ouverture = deroulant[i];
			if (ouverture.classList.contains('show')) {
				ouverture.classList.remove('show');
			}
		}
	}
}


//#endregion
