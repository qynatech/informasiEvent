<?php

class EventController extends EventModel
{
    public function getEvents()
    {
        return $this->findAll();
    }
    public function getEventBy()
    {
        if(!isset($_GET['id'])) {
            return;
        }
        $cumaId = preg_replace ('/\D/', '', $_GET['id']);
        if ($cumaId !== "") {
            return $this->findOne($_GET['id']);
        }
    }
}

?>