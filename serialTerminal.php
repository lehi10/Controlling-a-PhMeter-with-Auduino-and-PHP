<?php
    require("PhpSerial.php");
    require("conexionDB.php");

    $serial = new phpSerial();

	$serial->deviceSet("/dev/ttyACM0");
    //$serial->deviceSet("COM1");

    $serial->confBaudRate(9600);
    $serial->confParity("none");
    $serial->confCharacterLength(8); 
    $serial->confStopBits(1); 
    $serial->confFlowControl("none");

    $serial->deviceOpen();

	$temp1="";

    while(true)
    {
        $read = $serial->readPort();
        
        if(strlen($read)>0)
        {			
        	if($read==",")
        	{
        		print($temp1."-");
				$sql = "INSERT INTO historialVehicles (idVehicle, date, ph, temperature, rdo, tss, nitrate, ammonium)
          				VALUES (NULL, CURRENT_TIMESTAMP, '$temp1', '0', '0', '0', '0', '0')";

				if ($conn->query($sql) === TRUE)
					print "Guardado";
				else
					print "Error: "  . $conn->error .'\n';
        		
        	}
        	if(strpos($read,",")===false)
        	{
				$temp1.=$read;
        	}
        	else
        	{
        		$t_temp = explode(',', $read);	
        		$temp1.=$t_temp[0];
        		print($temp1."-");
        		
				$sql = "INSERT INTO historialVehicles (idVehicle, date, ph, temperature, rdo, tss, nitrate, ammonium)
          				VALUES (NULL, CURRENT_TIMESTAMP, '$temp1', '0', '0', '0', '0', '0')";

				if ($conn->query($sql) === TRUE)
					print "Guardado";
				else
					print "Error: "  . $conn->error .'\n';
        		
        		$temp1=$t_temp[1];
        	}		    
        }

    }

    $conn->close();
    $serial->deviceClose();

    ?>
