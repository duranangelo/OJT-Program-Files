<?php
$mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');
require_once('C:\Users\ANGELO C. DURAN\vendor\autoload.php');

use Ilovepdf\EditpdfTask;
use Ilovepdf\Editpdf\TextElement;
use Ilovepdf\SignTask;
use Ilovepdf\Sign\Receivers\Signer;
use Ilovepdf\Sign\Elements\ElementSignature;
use Ilovepdf\Lib\Helper;



$editpdfTask = new EditpdfTask('project_public_8ee1c5b07feb2b4f78a933dda41d813e_tScuea05e8e8ad1cc5f98891295995279b424', 'secret_key_2fa672bc6002fb57a852eeae2faa854b_a-bO83a503fb4b2c3ccde3199b087a0391d7d');
$pdfFile = $editpdfTask->addFile('C:\Users\ANGELO C. DURAN\Downloads\ADSO.pdf');

if(isset($_GET['date'])){
    $date = $_GET['date'];
    $stmt = $mysqli->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }

            $stmt->close();
        }
    }
}

if(isset($_POST['submit'])){
    $timeslot = $_POST['timeslot'];
    $name = $_POST['name'];
    $plateno = $_POST['plateno'];
    $passenger = $_POST['passenger'];
    $destination = $_POST['destination'];
    $purpose = $_POST['purpose'];
    $stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot = ?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $msg = "<div class ='alert alert-danger'>Already Booked</div>";
        }else{

            $textElement = new TextElement();
            $textElement->setText($date. " | " .$timeslot)
            ->setCoordinates(160, 548)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Arial")
            ->setFontSize("8")
            ->setFontColor("#000000") // Black
            ->setBold();

            $textElement1 = new TextElement();
                if($name === "S") {
                    $textElement1->setText(" ")
                    ->setCoordinates(0, 0)
                    ->setPages(1)
                    ->setTextAlign("center")
                    ->setFontFamily("Arial")
                    ->setFontSize("8")
                    ->setFontColor("#000000") // Black
                    ->setBold();
                }elseif($name === "D1") {
                    $textElement1->setText("Driver 1")
                    ->setCoordinates(160, 532)
                    ->setPages(1)
                    ->setTextAlign("center")
                    ->setFontFamily("Arial")
                    ->setFontSize("8")
                    ->setFontColor("#000000") // Black
                    ->setBold();
                }elseif ($name === "D2") {
                    $textElement1->setText("Driver 2")
                    ->setCoordinates(160, 532)
                    ->setPages(1)
                    ->setTextAlign("center")
                    ->setFontFamily("Arial")
                    ->setFontSize("8")
                    ->setFontColor("#000000") // Black
                    ->setBold();
                } elseif ($name === "D3") {
                    $textElement1->setText("Driver 3")
                    ->setCoordinates(160, 532)
                    ->setPages(1)
                    ->setTextAlign("center")
                    ->setFontFamily("Arial")
                    ->setFontSize("8")
                    ->setFontColor("#000000") // Black
                    ->setBold();
                }
                
            $textElement2 = new TextElement();
                $textElement2->setText($plateno)
                ->setCoordinates(470, 490)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Arial")
                ->setFontSize("8")
                ->setFontColor("#000000") // Black
                ->setBold();
            
            $textElement3 = new TextElement();
                $textElement3->setText($passenger)
                ->setCoordinates(160, 500)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Arial")
                ->setFontSize("8")
                ->setFontColor("#000000") // Black
                ->setBold();

            $textElement4 = new TextElement();
                $textElement4->setText($destination)
                ->setCoordinates(160, 450)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Arial")
                ->setFontSize("8")
                ->setFontColor("#000000") // Black
                ->setBold();

            $textElement5 = new TextElement();
                $textElement5->setText($purpose)
                ->setCoordinates(160, 425)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Arial")
                ->setFontSize("8")
                ->setFontColor("#000000") // Black
                ->setBold();

            $editpdfTask->addElement($textElement);
            $editpdfTask->addElement($textElement1);
            $editpdfTask->addElement($textElement2);
            $editpdfTask->addElement($textElement3);
            $editpdfTask->addElement($textElement4);
            $editpdfTask->addElement($textElement5);

            foreach($editpdfTask->getElements() as $editpdfElement){
                $isElemValid = $editpdfElement->validate();
              
                if(!$isElemValid){
                  $validationErrors = $editpdfElement->getErrors();
                  
                  // Output what went wrong
                  echo "{$editpdfElement->getType()} element has errors:\n";
                  var_dump($validationErrors);
                  exit(1);
                }
              }
              
              $editpdfTask->setOutputFilename('Vehicle Trip Ticket ' . $date ." ". $name);
              $editpdfTask->execute();
              $editpdfTask->download('C:\Users\ANGELO C. DURAN\Downloads\Vehicle Booking');
            
            $stmt = $mysqli->prepare("INSERT INTO bookings (date, timeslot, name, plateno, passenger, destination, purpose) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param('sssssss', $date, $timeslot, $name, $plateno, $passenger, $destination, $purpose);
            $stmt->execute();
            $msg = "<div class ='alert alert-success'>Booking Successful</div>";
            $bookings[]=$timeslot;
            $stmt->close();
            $mysqli->close();
        }
    }
    
}


$duration = 30;
$cleanup = 0;
$start = "09:00";
$end = "17:00";

function timeslots($duration, $cleanup, $start, $end){
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();

    for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end){
            break;
        }

        $slots[] = $intStart->format("h:iA")."-".$endPeriod->format("h:iA");

    }

    return $slots;

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Book for Date: <?php echo date('F d, Y', strtotime($date)); ?> </h1>
        <div class="row">
            <div class="col-md-12">
                <?php echo isset($msg)?$msg:""; ?>
            </div>
            <?php $timeslots = timeslots($duration, $cleanup, $start, $end);
            foreach($timeslots as $ts){
                ?>
                <div class="col-md-2">
                    <div class="form-group">
                    <?php if(in_array($ts, $bookings)) {?>
                        <button class="btn btn-danger"><?php echo $ts; ?></button>
                    <?php }else {?>
                        <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
                    <?php } ?>
                    
                </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Booking: <span id="slot"></span></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for = "">Timeslot</label>
                                <input required type = "text" readonly name="timeslot" id="timeslot" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="">Driver's Name: </label>
                                    <select required name="name" class="form-control">
                                    <option value="S">Select Driver's Name</option>
                                    <option value="D1">Driver 1</option>
                                    <option value="D2">Driver 2</option>
                                    <option value="D3">Drvier 3</option>
                                    <!-- Add more options as needed -->
                                    </select>
                                    </div>

                            <div class="form-group">
                                <label for="">Vehicle Plate Number: </label>
                                <input required type="text"   name="plateno" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Authorized Passenger: </label>
                                <input required type="text"   name="passenger" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Destination: </label>
                                <input required type="text"   name="destination" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="purpose">Purpose: </label>
                                <input required type="text"  name="purpose" class="form-control">
                            </div>
                            <div class="form-group pull-right">
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                
            </div>

        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha394-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA712mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
        $(".book").click(function(){
            var timeslot = $(this).attr('data-timeslot');
            $("#slot").html(timeslot);
            $("#timeslot").val(timeslot);
            $("#myModal").modal("show");
        })
    </script>            

</body>
</html>