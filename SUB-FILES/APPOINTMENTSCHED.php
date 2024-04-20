<?php

class Appointment {
    private $id;
    private $date;
    private $time;
    private $doctor;

    public function __construct($id, $date, $time, $doctor) {
        $this->id = $id;
        $this->date = $date;
        $this->time = $time;
        $this->doctor = $doctor;
    }

    public function getId() {
        return $this->id;
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

interface ScheduleAppointments {
    public function scheduleAppointment($date, $time, $doctor);
    public function cancelAppointment($id);
    public function getAppointmentById($id); 
    public function getAllAppointments();
}

class AppointmentScheduler implements ScheduleAppointments {
    private $appointments = [];

    public function scheduleAppointment($date, $time, $doctor) {
        $id = uniqid();
        $appointment = new Appointment($id, $date, $time, $doctor);
        $this->appointments[$id] = $appointment;
        return $id;
    }

    public function cancelAppointment($id) {
        if (isset($this->appointments[$id])) {
            unset($this->appointments[$id]);
            return true;
        }
        return false;
    }

    public function getAppointmentById($id) { 
        return isset($this->appointments[$id]) ? $this->appointments[$id] : null;
    }

    public function getAllAppointments() {
        return $this->appointments;
    }
}

$scheduler = new AppointmentScheduler();

$appointment1Id = $scheduler->scheduleAppointment("2024-04-14", "10:00 AM", "NIBATO'S CLASS");
$appointment2Id = $scheduler->scheduleAppointment("2024-04-15", "11:30 AM", "MEMA MEETING");

$scheduler->cancelAppointment($appointment2Id);

$appointment1 = $scheduler->getAppointmentById($appointment1Id); 
if ($appointment1) {
    echo "Appointment ID: " . $appointment1->getId() . "\n";
    echo "Date: " . $appointment1->getDate() . "\n";
    echo "Time: " . $appointment1->getTime() . "\n";
    echo "Doctor: " . $appointment1->getDoctor() . "\n"; 
} else {
    echo "Appointment not found.\n";
}

$allAppointments = $scheduler->getAllAppointments();
foreach ($allAppointments as $appointment) {
    echo "ID: " . $appointment->getId() . ", ";
    echo "Date: " . $appointment->getDate() . ", ";
    echo "Time: " . $appointment->getTime() . ", ";
    echo "Doctor: " . $appointment->getDoctor() . "\n"; 
}

