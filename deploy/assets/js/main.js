$(function(){
	
	// Create a new site
	var site = new Canteen.Site();
	
	// Listen for when the site is ready
	site.on('ready', function(){
		Debug.log("The Canteen site is setup!");
	});
	
});