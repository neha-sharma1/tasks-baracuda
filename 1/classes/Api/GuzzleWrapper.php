<?php
// Add comments
class GuzzleWrapper {
	
	private $username;
	private $password;
	
    public function __construct() {
    }
    public function getAll() {
        // Add your implementation here
    }
    public function get( $id ) {
        $client = new GuzzleHttp\Client( [ 'base_uri'  => 'https://jsonplaceholder.typicode.com/', 'verify' => false ] );
        $res = $client->request( 'GET', 'posts/' . $id );
        if( $res->getStatusCode() === 200 ) {
            return $res->getBody()->__toString();
        }
        return null;
    }

    public function post( $post ) {
        // Add your implementation here
    }

    public function put( $post ) {

    }

    public function delete( $post ) {
    }
}

class Post {

    public $id;
    public $userId;
    public $title;
    public $body;

    public static function get( $id ) {

    }

    public function save() {

    }

    public function delete() {

    }
}