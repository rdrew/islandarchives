module.exports = [
	// 1. replace single file with local one
//{
	//pattern: 'islandarchives.styles.css',      // Match url you wanna replace
	//responder:  "/home/rdrew/themes/islandarchives/css/islandarchives.styles.css"
//}
{
	pattern: 'sites/all/themes/islandarchives/css',  // must be a string
	responder: '/home/rdrew/themes/islandarchives/css/' //must be a absolute directory path
},
{
	pattern: 'sites/all/themes/islandarchives/js',  // must be a string
	responder: '/home/rdrew/themes/islandarchives/js/' //must be a absolute directory path
}


]
