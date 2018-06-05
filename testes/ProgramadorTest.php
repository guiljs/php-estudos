<?php
// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase') &&
    class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}
require_once(dirname(__DIR__).'/poo/exemplo1.php');

class ProgramadorTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
       
    }
    public function tearDown()
    {
       
    }
    public function testGetLinguagem()
    {
        $programador = new Programador("Heitor",4);
        $programador->setSexo("masculino");
        $programador->setLinguagemProgramacao("javascript");
    
        $this->assertEquals($programador->getLinguagemProgramacao(), 'javascript');
    }
}
