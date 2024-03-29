<?php
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

     public function __construct(string $username= 'testuser', string  $password = 'thisisatest123', string $resource = null) {
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
     * @param GuzzleHttp\Psr7\Response $res
     * @return string|null
     */
    public function getBody(\GuzzleHttp\Psr7\Response $res) {
        if( $res->getStatusCode() === 200 ) {
            return $res->getBody()->__toString();
        }
        // return exception otherwise?
        
        return null;
    }

    /**
     * Get all posts
     * 
     * @return string|null
     */
    public function getAll() {
        $res = $this->client->request( 'GET', $this->resource );
        return $this->getBody($res);
    }

    /**
     * Get a post
     * 
     * @param int $id
     * @return string|null
     */
    public function get( int $id ) {
        $res = $this->client->request( 'GET', $this->resource . $id );
        return $this->getBody($res);
    }

    /**
     * Create a post
     * 
     * @param Post $post
     * @return string|null
     */
    public function post( Post $post ) {
        $res = $this->client->request( 'POST', $this->resource, [
            'json' => $post
        ]);

        return $this->getBody($res);
    }

    /**
     * Update a post
     * 
     * @param Post $post
     * @return string|null
     */
    public function put( Post $post ) {
        $res = $this->client->request( 'PUT',  $this->resource . $post->id, [
            'json' => $post
        ]);

        return $this->getBody($res);
    }

    /**
     * Delete a post
     * 
     * @param int $postId
     * @return string|null
     */
    public function delete( int $postId ) {
        $res = $this->client->request( 'DELETE',  $this->resource . $postId );
        return $this->getBody($res);
    }
}

class Post {

    public $id;
    public $userId;
    public $title;
    public $body;

    public static function get( int $id ) {

    }

    public function save() {

    }

    public function delete() {

    }
}
