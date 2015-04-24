<?php

class Candidate {
	public $firstName;
	public $lastName;
	public $lastCompany;
	public $applyingFor;
	public $applyingWith;
	public $agency;

	public function covering_letter() {
		return "<p>To whom this may concern;</p>" .
		"<p>After hearing about an opportunity you advertised through " . $this->agency . ", I wanted to make you aware of my
		interest in applying for the role of " . $this->applyingFor . ".</p>" .
		"<p>I have reviewed the job description, provided by " . $this->applyingWith . ", and feel that my previous experience
		working for " . $this->lastCompany . " could prove to be very helpful in this role.</p>" .
		"<p>I have included a copy of my CV with this letter, for your reference. If you require further information, please do
		not hesitate to contact " . $this->applyingWith . " at " . $this->agency . ", who will gladly assist you in this regard.</p>" . 
		"<p>Yours sincerely,</p>" . 
		"<p>" . $this->firstName . " " . $this->lastName . "</p>";
	}

	public function __construct($firstName, $lastName, $lastCompany, $applyingFor, $applyingWith, $agency) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->lastCompany = $lastCompany;
		$this->applyingFor = $applyingFor;
		$this->applyingWith = $applyingWith;
		$this->agency = $agency;
		$this->covering_letter();
	}
}

$AlexMulchinock = new Candidate("Alex", "Mulchinock", "Cirrus IT Solutions", "PHP Developer", "Chris Stoute", "Affinity Appointments");

echo $AlexMulchinock->covering_letter();

?>