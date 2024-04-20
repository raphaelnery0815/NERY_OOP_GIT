<?php

trait Log
{
    public function log($msg)
    {
        echo date('Y-m-d h:i:s') . ':' . '(' . __CLASS__ . ') ' . $msg . PHP_EOL;
    }
}

class BankAccount
{
    use Log;

    private $accountNumber;

    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->log("A new $accountNumber bank account created");
    }
}

class User  {
    use Log;

    public function __construct()
    {
        $this->log("A new User created");
    }
}

class Savings{
    use Log;
     
    private $savings;

    public function __construct($savings){
        $this->savings = $savings;
        $this->log(" Your money : $savings pesos only! ");
    }
}

$bank = new BankAccount("OC001");
$bank1 = new BankAccount("OC003");

$savings = new Savings("200");
$user = new User();

trait Preprocessor
{
	public function preprocess()
	{
		echo 'Preprocess...done' . PHP_EOL;
	}
}
trait Compiler
{
	public function compile()
	{
		echo 'Compile code... done' . PHP_EOL;
	}
}

trait Assembler
{
	public function createObjCode()
	{
		echo 'Create the object code files... done.' . PHP_EOL;
	}
}

trait Linker
{
	public function createExec()
	{
		echo 'Create the executable file...done' . PHP_EOL;
	}
}

class IDE
{
	use Preprocessor, Compiler, Assembler, Linker;

	public function run()
	{
		$this->preprocess();
		$this->compile();
		$this->createObjCode();
		$this->createExec();

		echo 'Execute the file...done' . PHP_EOL;
	}
}

$ide = new IDE();
$ide->run();

trait Reader
{
	public function read($source)
	{
		echo sprintf('Read from %s <br>', $source);
	}
}

trait Writer
{
	public function write($destination)
	{
		echo sprintf('Write to %s <br>', $destination);
	}
}

trait Copier
{
	use Reader, Writer;

	public function copy($source, $destination)
	{
		$this->read($source);
		$this->write($destination);
	}
}

class FileUtil
{
	use Copier;

	public function copyFile($source, $destination)
	{
		$this->copy($source, $destination);
	}
}

trait FileLogger
{
	public function log($msg)
	{
		echo 'File Logger ' . date('Y-m-d h:i:s') . ':' . $msg . PHP_EOL;
	}
}

trait DatabaseLogger
{
	public function log($msg)
	{
		echo 'Database Logger ' . date('Y-m-d h:i:s') . ':' . $msg . PHP_EOL;
	}
}

