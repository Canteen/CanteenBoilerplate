$(function(){
	
	// Create a new site
	var site = Canteen.Site.instance;
	
	// Listen for when the site is ready
	site.on('ready', function(){
		Debug.log("The Canteen site is setup!");
	});
	
});