<?php
/**
 *
 * Imagine a fictional RESTful JSON API that
 * allows you to access a collection of posts.
 *
 * The post resource has the following structure:
 *      - userId
 *      - id
 *      - title
 *      - body
 *
 * The API has the following URL structure:
 *      - /posts/(id)
 *
 * The PHP Version used is 8.1
 *
 * There is a GuzzleWrapper class already written,
 * but only parts of it - for example handling $username and $password
 * in the constructor is not implemented yet.
 *
 * Your tasks are:
 *
 * 1) Install Composer
 * 2) Install guzzlehttp/guzzle via Composer.
 * 3) Use guzzle to make your requests to the API as shown in the GET method.
 * 4) Add basic authentication parameter to the request by updating the constructor (__construct()) of the GuzzleWrapper class ( username = testuser, password = thisisatest123 ).
 * 5) Add typed parameters to all methods. (https://www.php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration)
 * 6) Comment the methods (in english)
 * 7) Extend the class to be namespaced and managed via Composer Autolader
 *
 * Could this class and the existing get()/getAll() methods be implemented differently?
 * What would you change about it? Hint: Constructor, Properties?
 *
 * https://getcomposer.org/doc/00-intro.md
 * http://docs.guzzlephp.org/en/stable/
 * https://hackernoon.com/restful-api-designing-guidelines-the-best-practices-60e1d954e7c9
 * https://jsonplaceholder.typicode.com/
 *
 */
// Initialization of the Wrapper and getting an article should work like this:
$api = new Api\GuzzleWrapper( $username, $password );

$posts = $api->getAll(); //for all posts
$post = $api->get( 1 ); //for a single post
