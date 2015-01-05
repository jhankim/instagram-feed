instagram-feed
==============
A simple Instagram feed app.

# How do I use it?

You will need a HTTP server with PHP in order for the script to work.

Steps:
1. Set your Instagram API key in line 8 of the `ping-instagram.php`
  ```
  $clientId = "REPLACE_THIS_WITH_YOUR_INSTAGRAM_API_KEY";		// ==== Instagram Client ID (need to register with Instagram to get it)
  ```
  
2. Set your hashtag & refresh interval in lines 11 & 12 in `index.html`
  ```
  var hashtag = 'yourhashtag'; // Set your desired hashtag here
  var refreshInterval = 10000; // This is the list refresh interval in miliseconds
  ```
  
3. Load up your `index.html` in the browser, and you're good to go!
