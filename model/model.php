<?php

class EventModel extends Connection
{
    protected $namaEvent;
    protected $tema;
    protected $waktu;
    protected $tempat;

    protected function findAll()
    {
        $sql = "SELECT * FROM event";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)){
                $event[] = $data;
            }
            return $event;
        }
    }

    protected function findOne($id){
        $sql = "SELECT * FROM event WHERE id= " . $id;
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $event[] = $data;
            }
            return $event;
        }
    }
}
?>