<?php
// Add comments
namespace Api;

class GuzzleWrapper {
	
	private $username;
	private $password;
	
    private $resource;
    private $client;

    /**
     * Constructor
     * 
     * @param string $username
     * @param string $password
     * @param string $resource
     */
    public function __construct($username, $password, $resource) {
        $this->username = $username;
        $this->password = $password;
        $this->client = new \GuzzleHttp\Client([
            'base_uri'  => 'https://jsonplaceholder.typicode.com/',
            'verify' => false,
            'auth' => [$this->username, $this->password]
        ]);

        $this->resource = $resource;
    }

    /**
     * Get the body
     * 
     * @param Response $res
     * @return string|null
     */
    private function getBody($res) {
        if( $res->getStatusCode() === 200 ) {
            return $res->getBody()->__toString();
        }
        // return exception otherwise?
        
        return null;
    }

    public function getAll() {
        $res = $this->client->request( 'GET', $this->resource );
        return $this->getBody($res);
    }
    public function get( $id ) {
        $res = $this->client->request( 'GET', $this->resource . $id );
        return $this->getBody($res);
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
