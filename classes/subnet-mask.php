<?/*
** PHP Transcription of the JS code above
**
*/


class networkInformation
{
	public $ipAddres;
	public $hostNo;
	public $uploadedFile = array();
	public $uploadedFileLine;
	public $file;
	public $fileURL;


	public function getFileFromServer($fileURL){

		$file = fopen($fileURL,'r');
		$newArray  = array();
		/*while (! feof($file)) {
			//$stringPart = explode("|",fgets($file));
			//array_push($stringPart, $stringPart[3],$stringPart[4]);
			//echo "IP Address: ". $stringPart[3] . " Number of Hosts: ". $stringPart[4];

		}

		foreach ($stringPart as $string) {
			echo $string;
			# code...
		}*/
		//print_r($stringPart);
		fclose($file);
	}

	public function calculateCidr($numberOfHosts){
		

	}

}


$fileProcessingClass = new networkInformation();
$fileProcessingClass -> getFileFromServer('http://drsam.hol.es/wp-content/uploads/2017/01/delegated-ripencc-latest.txt');



echo "It works!";
