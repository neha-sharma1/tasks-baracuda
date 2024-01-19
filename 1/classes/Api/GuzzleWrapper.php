<?php
// Add comments
namespace Api;

class GuzzleWrapper {
	
	private $username;
	private $password;
	
    private $client;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
        $this->client = new \GuzzleHttp\Client([
            'base_uri'  => 'https://jsonplaceholder.typicode.com/',
            'verify' => false,
            'auth' => [$this->username, $this->password]
        ]);
    }
    public function getAll() {
        $res = $this->client->request( 'GET', 'posts/' );
        if( $res->getStatusCode() === 200 ) {
            return $res->getBody()->__toString();
        }
        return null;
    }
    public function get( $id ) {
        $res = $this->client->request( 'GET', 'posts/' . $id );
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
