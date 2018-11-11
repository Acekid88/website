<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/11/18
 * Time: 20:01
 */

class Sunday
{
    public $word = 'hi';

    public function printWord()
    {
        echo $this->word;
    }
}

$word = new HelloWorld();
$word = $word->printWord();