$(document).on("ready", function(){

	$("#btn_tw").click(presentaTimeline);
});
function presentaTimeline(){
	$('#dlg_twitter').foundation('reveal', 'open');
}