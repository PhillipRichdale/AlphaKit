
// this is required for the (not so) edge case where your script is loaded after the document has loaded
// https://developer.mozilla.org/en/docs/Web/API/Document/readyState
if (document.readyState !== 'loading') {
	ready();
} else {
	// the document hasn't finished loading/parsing yet so let's add an event handler
	document.addEventListener('DOMContentLoaded', ready);
}

//jQuery.ready(function(){
function ready() {

	const Hello = () => <p>Hello Plugin React!</p>;
	wp.element.render(<Hello />, document.getElementById("react-test") );
	/**
	jQuery("img#loadspinner").fadeOut();

	function showLoading()
	{
		jQuery("img#loadspinner").show();
		jQuery("img#loadspinner").fadeIn(1);
	}
	function loadingFinished()
	{
		jQuery("img#loadspinner").fadeOut(
			400,
			function(){
				jQuery("img#loadspinner").hide();
			}
		);
	}
	function refreshAkView()
	{
		if (undefined != typeof AlphaKitUiUrl)
		{
			showLoading();
			jQuery("div#alphakit-content").load(
				AlphaKitUiUrl+"?blah="+Math.floor((Math.random() * 10000000) + 1),
				function(){
					loadingFinished();
				}
			);
		}
	}
	if (undefined != typeof AlphaKitUiUrl) {
		updateViewInterval = setInterval(refreshAkView, 10000);
	}
	**/
};
