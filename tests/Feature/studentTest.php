<?php

namespace Tests\Feature;

use App\Student;
use Illuminate\Support\Facades\Bus;
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
        /******test creation of new student********/
        $student = new Student([
            'fristName'=>'test',
            'lastName' => 'test',
            'email' => 'email@mail.com',
            'address'=> 'address',
        ]);
        $this->assertEquals('test',$student->getFristName());
//        $this->assertEquals('test',$student->getLastName());
//        $this->assertEquals('email@mail.com',$student->getEmail());
//        $this->assertEquals('address',$student->getAddress());

        /*********functional test specific url**********/
        $response = $this->call('GET','testing');
        $this->assertEquals('dotest',$response->getContent());

        /*************test calling the viewRecord*****************/
        $response = $this->call('GET','viewRecords');
        $response->assertViewIs('viewRecords');

        /************test calling controller funtcion*****************/
        $response = $this->call('POST','deleteStudent');
        $response->assertRedirect('viewRecords');

        /***********test calling getStudent function**************/
        $response = $this->call('POST','getStudent');
        $response->assertViewIs('signup');



        factory(Student::class,3)->create();
        /***********************************/
        /*******test insert function*******/
        $studentValues = [
            'fristName'=>'testInsertStudent',
            'lastName' => 'test',
            'email' => 'unitetestemail@mail.com',
            'address'=> 'address',
        ];
        $this->post('signup', $studentValues );
        $this->assertDatabaseHas('students', $studentValues);

        /*********test update existing user********/
        $studentValues = [
            'id'=>1,
            'fristName'=>'updateTest',
            'lastName' => 'test',
            'email' => 'updateunite@mail.com',
            'address'=> 'address',
        ];
        $this->post('signup', $studentValues );
        $this->assertDatabaseHas('students', $studentValues);

        /********test deleteUser******/
        $studentValues = [
            'id'=>86,
            'fristName'=>'uniteTest',
            'lastName' => 'test',
            'email' => 'updateunite@mail.com',
            'address'=> 'address',
        ];
        $this->call('POST','deleteStudent',['id'=>$studentValues['id']]);
        $this->assertDatabaseMissing('students',$studentValues);

    }

}
