
//
$(document).ready(function() {
			$('#fullpage').fullpage({
				'verticalCentered': false,
				'scrollingSpeed': 600,
				'autoScrolling': false,
				'css3': true,
				'navigation': true,
				'navigationPosition': 'right',
			});
		});

// wow
$(function()
{
    new WOW().init();
    $(".rotate").textrotator();
})


// aff modal
document.getElementById("voircv").addEventListener('click', function () {

	console.log("passage modal 1")
	document.getElementById('modal').classList.toggle("none")

});
//cache modal
document.getElementById("modal").addEventListener('click', function () {

	console.log("passage modal 2")
	document.getElementById('modal').classList.toggle("none")

});