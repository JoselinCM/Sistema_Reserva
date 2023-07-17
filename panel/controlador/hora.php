<?php
    $html = "";
    if ($_POST["tipoSeleccionado"]=="ALMUERZO") {
        $html = '
        <option value="12:00 PM">12:00 PM</option>
        <option value="12:30 PM">12:30 PM</option>
        <option value="01:00 PM">01:00 PM</option>
        <option value="01:30 PM">01:30 PM</option>
        <option value="02:00 PM">02:00 PM</option>
        <option value="02:30 PM">02:30 PM</option>
        <option value="03:00 PM">03:00 PM</option>
        ';  
    }
    if ($_POST["tipoSeleccionado"]=="CENA") {
        $html = '
        <option value="05:00 PM">05:00 PM</option>
        <option value="05:30 PM">05:30 PM</option>
        <option value="06:00 PM">06:00 PM</option>
        <option value="06:30 PM">06:30 PM</option>
        <option value="07:00 PM">07:00 PM</option>
        <option value="07:30 PM">07:30 PM</option>
        <option value="08:00 PM">08:00 PM</option>
        <option value="08:30 PM">08:30 PM</option>
        <option value="09:00 PM">09:00 PM</option>
        <option value="09:30 PM">09:30 PM</option>
        <option value="10:00 PM">10:00 PM</option>
        <option value="10:30 PM">10:30 PM</option>
        <option value="11:00 PM">11:00 PM</option>
        ';  
    }
    echo $html; 
?>