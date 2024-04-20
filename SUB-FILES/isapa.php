<?php

class Appointment {
    private $id;
    private $date;
    private $time;
    private $doctor;
    private $patient;

    public function __construct($date, $time, $doctor) {
        $this->date = $date;
        $this->time = $time;
        $this->doctor = $doctor;
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
}

class Scheduler {
    private $appointments;

    public function __construct() {
        $this->appointments;
    }

    public function checkAvailability($date) {
        foreach ($this->appointments as $appointment) {
            if ($appointment->getDate() == $date) {
                return false; 
            }
        }
        return true; 
    }

    public function updateSchedule($appointment){
        $this->appointments = $appointment;
    }
}

?>
