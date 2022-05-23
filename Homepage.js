//#region Barre de navigation
//http://jsfiddle.net/AUsnL/
var header = document.querySelector("#Wrapper header");

function scrolled()
{
	var windowHeight = document.body.clientHeight, currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
	header.className = (currentScroll >= windowHeight - header.offsetHeight) ? "fixed" : "";
}

addEventListener("scroll", scrolled, false);

//#endregion

//#region Carrousel

let indexImage = 1;
slideImg(indexImage);

function maBoucle()
{
    setTimeout(function()
    {
        slideImg(indexImage += 1);
		console.log("OUI")
        maBoucle(); // relance la fonction
    }, 6000);
}
maBoucle(); // on n’oublie pas de lancer la fonction une première fois

function defilement(n)
{
	console.log("ca defile " + n)
	slideImg(indexImage += n);
}

function image(n)
{
	slideImg(indexImage = n);
}

function slideImg(n)
{
	let i;
	let carrousel = document.getElementsByClassName("Carrousel");
	let points = document.getElementsByClassName("Point");
	if (n > carrousel.length)
	{
		indexImage = 1;
	}
	if (n < 1)
	{
		indexImage = carrousel.length;
	}
	for (i = 0; i < carrousel.length; i++)
	{
		carrousel[i].style.display = "none";
	}
	for (i = 0; i < points.length; i++)
	{
		points[i].className = points[i].className.replace(" active", "");
	}
	carrousel[indexImage-1].style.display = "block";
	points[indexImage-1].className += " active";
}

//#endregion

//#region dark theme

let darktheme = 0;

function toggleRootClass()
{
	document.querySelector(":root").classList.toggle("dark");
}

function switchTheme()
{
	var element = document.querySelector(":root");
   element.classList.toggle("dark");
}

//#endregion

//#region menu deroulant
//https://www.w3schools.com/howto/howto_js_dropdown.asp
function menuDeroulant()
{
	document.getElementById("Options").classList.toggle("show");
}

window.onclick = function(event)
{
	if (!event.target.matches('.boutounDeroulant'))
	{
		var deroulant = document.getElementsByClassName("contenu");
		let i;
		for (i = 0; i < deroulant.length; i++)
		{
			var ouverture = deroulant[i];
			if (ouverture.classList.contains('show'))
			{
				ouverture.classList.remove('show');
			}
		}
	}
}

//#endregion