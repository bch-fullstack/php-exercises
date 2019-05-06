### PHP Favourite button challenge

The task is to implement a Add to favourite feature to the sample page located at index.php

When user clicks on the **favourite button** of the post, the post is marked as one of the favourites
and this selection is saved to user page session and is considered during next pageloads

### Useful reads for tackling this challenge

*PHP - Sessions*: https://www.tutorialspoint.com/php/php_sessions.htm
*Detection of AJAX request*: https://css-tricks.com/snippets/php/detect-ajax-request/

Some people will wonder what is going on after double clicking on their PHP files, we have already talked about this but anyway you will find your answer here: https://www.techwalla.com/articles/how-to-run-a-php-file-in-xampp 

### Challenge breakdown

The challenge question can be broken down into smaller tasks as following, go through each step to complete the challenge:

1. Understand the page structure and how to capture click events on favourite button, use jQuery if needed
- Note that adding event handler might require document ready status
2. Attach AJAX calls to event handler functions of favourite buttons
- If you still feel lost, read this thread and you should get the idea https://stackoverflow.com/questions/16598213/how-to-bind-events-on-ajax-loaded-content
3. Process AJAX request from PHP 
- This article explains quite detail step by step about how to get this done https://jonsuh.com/blog/jquery-ajax-call-to-php-script-with-json-return/
4. At this moment, if you have done everything correctly, AJAX calls will be made every time the favourite button is clicked, and it returns something, ideally something meaningful to indicate the article user clicked on has been added to the list of favourites. You would now need a handler for the Success case and the Error case of the AJAX call.
5. Now everytime the page loads, you would be loading the article favourite classes dynamically so that it would mark the favourited articles accordingly. Utilize the following function and class implementation:

`function is_favorite($id) {
    return in_array($id, $_SESSION['favorites']);
}`

`<div id="post-101" class="post <?php if(is_favorite(101)) { echo 'favorite'; } ?>">`

6. Now that you have everything working nicely, then of course user should have the right to unfavourite stuffs, so now you can get extra practice by create unfavourite AJAX call or modify the existing calls. The outcome should be user would either click the **favourite button** again to unfavourite or you can implement an **unfavourite button** and do everything in reverse.