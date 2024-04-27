<?php

class Appointment {
    private $id;
    private $patient;
    private $date;
    private $time;
    private $doctor;

    public function __construct($date, $time, $doctor, $patient) {
        $this->date = $date;
        $this->time = $time;
        $this->doctor = $doctor;
        $this->patient = $patient;
    }

    public function scheduleAppointment($patient) {
        $this->patient = $patient;
    }

    public function cancelAppointment() {
        $this->patient = null;
    }

    public function getPatient() {
        return $this->patient;
    }

    public function getDate() {
        return $this->date;
    }

    public function getTime() {
        return $this->time;
    }

    public function getDoctor() {
        return $this->doctor;
    }
}

class Patient {
    private $name;
    private $id;

    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }

    public function bookAppointment($appointment) {
        $appointment->scheduleAppointment($this);
    }
    
    public function cancelAppointment($appointment) {
        $appointment->cancelAppointment();
    }

    public function getName() {
        return $this->name;
    }
}

class Scheduler {
    private $appointments;

    public function __construct() {
        $this->appointments = array();
    }

    public function checkAvailability($date, $time, $patient, $doctor) {
        foreach ($this->appointments as $appointment) {
            if ($appointment->getDate() == $date && $appointment->getTime() == $time && $appointment->getPatient()->getId() == $patient->getId() && $appointment->getDoctor() == $doctor) {
                return false;
            }
        }
        return true;
    }

    public function updateSchedule($appointment) {
        $this->appointments [] = $appointment;
    }

    public function getAppointments() {
        return $this->appointments;
    }
}


$scheduler = new Scheduler();

$patient1 = new Patient("Paul Dominic", 1);
$appointment1 = new Appointment("04-13-2024", "11:00 AM", "Dr. John Samuel", $patient1);
$scheduler->updateSchedule($appointment1);

$patient2 = new Patient("Josh Santos", 2);
$appointment2 = new Appointment("04-14-2024", "10:00 AM", "Dr. John Samuel", $patient2);
$scheduler->updateSchedule($appointment2);

$date = "04-20-2024";
$time = "10:00 AM";

if ($scheduler->checkAvailability($date, $time, $patient1, "Dr. John Samuel")) {
    echo "APPOINTMENTS \n";
} else {
    echo "APPOINTMENT IS NOT AVAILABLE AT $time ON $date.\n";
}

$appointments = $scheduler->getAppointments();

foreach ($appointments as $appointment) {
    echo "APPOINTMENT OF: " . $appointment->getPatient()->getName() . " in " . $appointment->getDate() . " - " . $appointment->getTime() . " with ". $appointment->getDoctor() ."\n";
} 
class Logger {
    private $logFile;

    public function __construct($logFile = 'log.txt') {
        $this->logFile = $logFile;
    }

    public function Log($message, $className = '') {
        $date = date('l j F H:i:s Y');
        $logMessage = "$date: $className - $message\n";
        $handle = fopen($this->logFile, 'a'); 
        fwrite($handle, $logMessage); 
        fclose($handle); 
    }
}

$scheduler = new Scheduler();

$logger = new Logger();

$logger->Log("Appointment Added", "Success!");