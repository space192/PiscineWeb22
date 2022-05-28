// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("Header");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction()
{
    if (window.pageYOffset >= sticky)
    {
        navbar.classList.add("Sticky");
    }
    else
    {
        navbar.classList.remove("Sticky");
    }
}