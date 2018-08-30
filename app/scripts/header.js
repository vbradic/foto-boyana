$(document).ready(function()
{/*
    $('#show-case-usa>.img:gt(0)').hide();
    setInterval(function() {
        $(".img:first-child").fadeOut(3000).next(".img").fadeIn(3000).end().appendTo("#show-case")
}, 5000);*/
 /*   
    $('.show-case-europe>.img:gt(0)').hide();
    setInterval(function() {
        $(".img:first-child").fadeOut(3000).next(".img").fadeIn(3000).end().appendTo("#show-case")
}, 5000);
       */
});



$("#button").click(function(){
	//alert($(this).attr("class"));

	if( $("#bs-example-navbar-collapse-1").hasClass('open')) {
		//alert('fck yeah');
		//$("#bs-example-navbar-collapse-1").removeClass('in');
		//$("#bs-example-navbar-collapse-1").removeClass('collapse');
		//$("#bs-example-navbar-collapse-1").addClass('out');
		//$("#button").addClass('collapsed');
		$("#bs-example-navbar-collapse-1").removeClass('open');
		$("#bs-example-navbar-collapse-1").show();
		
	} else {
		//alert('fck else yeah');
		$("#bs-example-navbar-collapse-1").hide();
		$("#bs-example-navbar-collapse-1").addClass('open');
		//$("#bs-example-navbar-collapse-1").removeClass('out');
		//$("#bs-example-navbar-collapse-1").addClass('in');
		//$(this).removeClass('collapsed');
		
	}
});