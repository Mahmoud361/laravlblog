<?php

namespace Tests\Feature;

use App\Student;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class studentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $student = new Student([
            'fristName'=>'test',
            'lastName' => 'test',
            'email' => 'email@mail.com',
            'address'=> 'address',
        ]);

        $this->assertEquals('test',$student->getFristName());
        $this->assertEquals('test',$student->getLastName());
        $this->assertEquals('email@mail.com',$student->getEmail());
        $this->assertEquals('address',$student->getAddress());

//        $response = $this->call('GET','testing');
//        $this->assertEquals('dotest',$response->getContent());


        //$response = $this->action('GET', 'HomeController@index');
//        $response = $this->post('studentController@update',['id'=>'8']);
//        $view = $response->original;
//        $this->assertEquals('medaso',$view);
        $this->insertuserTest();

    }

    public function insertuserTest(){

        $studentValues = [
            'fristName'=>'test',
            'lastName' => 'test',
            'email' => 'secondemail@mail.com',
            'address'=> 'address',
        ];
        $this->post('signup', $studentValues );
        $this->assertDatabaseHas('students', $studentValues);

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
