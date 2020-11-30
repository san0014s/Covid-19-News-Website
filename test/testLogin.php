<?php

    public function testLoginPost(){
    Session::start();
    $response = $this->call('POST', '/login.php', [
        'email' => 'badUsername@gmail.com',
        'passwd' => 'badPass',
        '_token' => csrf_token()
    ]);
    $this->assertEquals(200, $response->getStatusCode());
    $this->assertEquals('auth.login', $response->original->name());
    }