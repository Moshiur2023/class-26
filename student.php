<?php


namespace App\classes;


class student
{
    public $student=[];

    public function __construct()
    {
        $this->student=[
          [
              'name'=>'Hamim',
              'email'=>'hamim@gmail.com',
              'phone'=>'0176885',
          ]  ,
            [
                'name'=>'Tahmid',
                'email'=>'tahmid@gmail.com',
                'phone'=>'018676885',
            ]  ,
            [
                'name'=>'Nur',
                'email'=>'nur@gmail.com',
                'phone'=>'01776885',
            ]  ,
        ];
    }

    public function allStudent(){
        return $this->student;
    }
}