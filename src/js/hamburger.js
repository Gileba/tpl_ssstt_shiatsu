var $hamburger = jQuery(".hamburger");
var $menu = jQuery(".offcanvas");

$hamburger.on("click", function () {
	$hamburger.toggleClass("is-active");
	$menu.toggleClass("open");
});
