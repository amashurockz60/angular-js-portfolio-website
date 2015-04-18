# AngularJS Portfolio Website

This is an example of a web development portfolio built using AngularJS and jQuery. There is only the index.html file that acts as the host for all of the other pages defined as views. These views are loaded into the index.html page through AJAX request that ngRoute handles. This allows for a very smooth loading perception by the user since we can have things like the header and footer of the page defined in the index.html since they do not change between views.

## Portfolio
The portfolio items and their information are stored in a JSON array locally. Using ngRepeat and ng-href I can iterate through the array of portfolio items and output the unique portfolio item ID to the href value of the item. This link will send the user to a generic portfolio item HTML page that then gets populated with information that corresponds to the ID that was passed in the href value. This is done using AngularJS routeParams.