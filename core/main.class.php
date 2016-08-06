<?php


/*******************************
* Main class
********************************/


class Main {

  // Process attributes
	private $registration_month;
	private $registration_day;
	private $registration_year;
	private $section8_earliest;
	private $section8_normal;
	private $section8_last;
	private $renewal_earliest;
	private $renewal_normal;
	private $renewal_last;

  // Message and language holder
  public $msg;

  // Construct
  public function __construct() {
    // get current date
    $this->registration_month = date('m');
    $this->registration_day = date('d');
    $this->registration_year = date('Y');
  }

  // Registration date
  public function regdate($arg) {
    $arg = $this->sanitize_string($arg);
    $arg = explode("-", $arg);
    // echo var_dump($arg);
    if (!isset($arg[0]) || !isset($arg[1]) || !isset($arg[2])) {
      $this->msgbuild('danger','Something went wrong. Please try again.');
    } else {
      $this->registration_year = isset($arg[0]) ? $arg[0] : '';
      $this->registration_month = $arg[1];
      $this->registration_day = $arg[2];
    }


  }

	// Sanitation
  public function sanitize_string($string) {
    $sanitized = filter_var ($string, FILTER_SANITIZE_STRING);
    return $sanitized;
  }

  // Build messages
  public function msgbuild($type,$message){
    $this->msg = '<br/><div class="alert alert-'.$type.'">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        '.$message.'
                        </div><br/>';
    return $this->msg;
  }

	// Render registration month
  public function registration_month() {
    // Month
    $months = array(
      '1' => 'January',
      '2' => 'February',
      '3' => 'March',
      '4' => 'April',
      '5' => 'May',
      '6' => 'June',
      '7' => 'July',
      '8' => 'August',
      '9' => 'September',
      '10' => 'October',
      '11' => 'November',
      '12' => 'December'
    );

    echo '<select class="form-control" name="month">';
    foreach ($months as $key => $value) {
      $selected = ($this->registration_month == $key) ? 'selected="selected"' : '';
      echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
    }
    echo '</select>';
  }


	// Render registration day
  public function registration_day() {
    // Day
    $days = array();
    for ($day = 1; $day <= 31; $day++) {
        $days[] = $day;
    }

    echo '<select class="form-control" name="day">';
    foreach ($days as $key => $value) {
      $selected = ($this->registration_day == $value) ? 'selected="selected"' : '';
      echo '<option value="'.$value.'" '.$selected.'>'.$value.'</option>';
    }
    echo '</select>';
  }


	// Render registration year
  public function registration_year() {
    // Year
    $years = array();
    for ($year = 1900; $year <= 2020; $year++) {
        $years[] = $year;
    }

    echo '<select class="form-control" name="year">';
    foreach ($years as $key => $value) {
      $selected = ($this->registration_year == $value) ? 'selected="selected"' : '';
      echo '<option value="'.$value.'" '.$selected.'>'.$value.'</option>';
    }
    echo '</select>';
  }



	// Render section8_earliest
  public function section8_earliest() {
    $regyear = $this->registration_year;
    $array = array($regyear,$this->registration_month,$this->registration_day);
    $imploded = implode("-", $array);
    echo date("F jS, Y", strtotime($imploded.'+5 year'));
  }

	// Render section8_normal
  public function section8_normal() {
    $regyear = $this->registration_year;
    $array = array($regyear,$this->registration_month,$this->registration_day);
    $imploded = implode("-", $array);
    echo date("F jS, Y", strtotime($imploded.'+6 year'));
  }

	// Render section8_last
  public function section8_last() {
    $regyear = $this->registration_year;
    $array = array($regyear,$this->registration_month,$this->registration_day);
    $imploded = implode("-", $array);
    echo date("F jS, Y", strtotime($imploded.'+6 year +6 month'));
  }

	// Render renewal_earliest
  public function renewal_earliest() {
    $regyear = $this->registration_year;
    $array = array($regyear,$this->registration_month,$this->registration_day);
    $imploded = implode("-", $array);
    echo date("F jS, Y", strtotime($imploded.'+9 year'));
  }

	// Render renewal_normal
  public function renewal_normal() {
    $regyear = $this->registration_year;
    $array = array($regyear,$this->registration_month,$this->registration_day);
    $imploded = implode("-", $array);
    echo date("F jS, Y", strtotime($imploded.'+10 year'));
  }

	// Render renewal_last
  public function renewal_last() {
    $regyear = $this->registration_year;
    $array = array($regyear,$this->registration_month,$this->registration_day);
    $imploded = implode("-", $array);
    echo date("F jS, Y", strtotime($imploded.'+10 year +6 month'));
  }


}
