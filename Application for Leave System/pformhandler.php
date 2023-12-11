<?php
require_once('C:\Users\ANGELO C. DURAN\vendor\autoload.php');

use Ilovepdf\EditpdfTask;
use Ilovepdf\Editpdf\TextElement;
use Ilovepdf\SignTask;
use Ilovepdf\Sign\Receivers\Signer;
use Ilovepdf\Sign\Elements\ElementSignature;
use Ilovepdf\Lib\Helper;



$editpdfTask = new EditpdfTask('project_public_8ee1c5b07feb2b4f78a933dda41d813e_tScuea05e8e8ad1cc5f98891295995279b424', 'secret_key_2fa672bc6002fb57a852eeae2faa854b_a-bO83a503fb4b2c3ccde3199b087a0391d7d');
$pdfFile = $editpdfTask->addFile('C:\Users\ANGELO C. DURAN\Downloads\CS-Form-No.-6-new-blank-2022.pdf');
$timestamp = time();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $office = $_POST["office"];
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $datefiling = $_POST["datefiling"];
    $position = $_POST["position"];
    $salary = $_POST["salary"];
    $leave = $_POST["leave"];
    $others = $_POST["others"];
    $incaseofVS = $_POST["incaseofVS"];
    $specify = $_POST["specify"];
    $incaseofSL = $_POST["incaseofSL"];
    $specifyill = $_POST["specifyill"];
    $specifyillBFW = $_POST["specifyillBFW"];
    $incaseofStudy = $_POST["incaseofStudy"];
    $otherP = $_POST["otherP"];
    $numwk = $_POST["numwk"];
    $inclusive = $_POST["inclusive"];
    $commutation = $_POST["commutation"];
    $email = $_POST["email"];


    $textElement = new TextElement();
    $textElement->setText($office)
            ->setCoordinates(80, 650)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Times New Roman")
            ->setFontColor("#000000") // Orange
            ->setBold();
    
    $textElement1 = new TextElement();
    $textElement1->setText($lastname)
            ->setCoordinates(290, 650)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Times New Roman")
            ->setFontColor("#000000") // Orange
            ->setBold(); 
            
    $textElement2 = new TextElement();
    $textElement2->setText($firstname)
            ->setCoordinates(370, 650)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Times New Roman")
            ->setFontColor("#000000") // Orange
            ->setBold();

    $textElement3 = new TextElement();
    $textElement3->setText($middlename)
            ->setCoordinates(460, 650)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Times New Roman")
            ->setFontColor("#000000") // Orange
            ->setBold();

    $textElement4 = new TextElement();
    $textElement4->setText($datefiling)
            ->setCoordinates(140, 630)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Times New Roman")
            ->setFontColor("#000000") // Orange
            ->setBold();

    $textElement5 = new TextElement();
    $textElement5->setText($position)
            ->setCoordinates(290, 630)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Times New Roman")
            ->setFontColor("#000000") // Orange
            ->setBold();

    $textElement6 = new TextElement();
    $textElement6->setText($salary)
            ->setCoordinates(470, 630)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Arial")
            //->setFontSize("8")
            ->setFontColor("#000000") // Orange
            ->setBold();

    $textElement7 = new TextElement();
        if($leave === "select") {
            $textElement7->setText(" ")
            ->setCoordinates(0, 0)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Times New Roman")
            ->setFontColor("#000000") // Orange
            ->setBold();
        } elseif($leave === "vacationL") {
            $textElement7->setText("X")
            ->setCoordinates(74, 573)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Times New Roman")
            ->setFontColor("#000000") // Orange
            ->setBold();
        } elseif ($leave === "mandatoryFL") {
            $textElement7->setText("X")
            ->setCoordinates(73, 560)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Times New Roman")
            ->setFontColor("#000000") // Orange
            ->setBold();
        } elseif ($leave === "sickL") {
            $textElement7->setText("X")
            ->setCoordinates(74, 546)
            ->setPages(1)
            ->setTextAlign("center")
            ->setFontFamily("Times New Roman")
            ->setFontColor("#000000") // Orange
            ->setBold();
        } elseif ($leave === "MatL") {
                $textElement7->setText("X")
                ->setCoordinates(73, 533)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        } elseif ($leave === "PatL") {
                $textElement7->setText("X")
                ->setCoordinates(73, 521)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        } elseif ($leave === "SpecialL") {
                $textElement7->setText("X")
                ->setCoordinates(73, 508)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        } elseif ($leave === "SoloPL") {
                $textElement7->setText("X")
                ->setCoordinates(73, 490)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        } elseif ($leave === "StudyL") {
                $textElement7->setText("X")
                ->setCoordinates(73, 479)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        } elseif ($leave === "10DL") {
                $textElement7->setText("X")
                ->setCoordinates(73, 463)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        } elseif ($leave === "RehabL") {
                $textElement7->setText("X")
                ->setCoordinates(73, 450)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        } elseif ($leave === "SpecialBWL") {
                $textElement7->setText("X")
                ->setCoordinates(73, 443)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        } elseif ($leave === "SpecialCL") {
                $textElement7->setText("X")
                ->setCoordinates(73, 430)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        } elseif ($leave === "AdoptL") {
                $textElement7->setText("X")
                ->setCoordinates(73, 408)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        }
        $textElement8 = new TextElement();
        $textElement8->setText($others)
                ->setCoordinates(73, 370)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        
        $textElement9 = new TextElement();
        if($incaseofVS === "select1") {
                $textElement9->setText(" ")
                ->setCoordinates(0, 0)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
                $textElement10 = new TextElement();
                $textElement10->setText($specify)
                        ->setCoordinates(430, 560)
                        ->setPages(1)
                        ->setTextAlign("center")
                        ->setFontFamily("Times New Roman")
                        ->setFontColor("#000000") // Orange
                        ->setBold();
        }elseif($incaseofVS === "withinPh") {
                $textElement9->setText("X")
                ->setCoordinates(334, 560)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();

        $textElement10 = new TextElement();
        $textElement10->setText($specify)
                        ->setCoordinates(430, 560)
                        ->setPages(1)
                        ->setTextAlign("center")
                        ->setFontFamily("Times New Roman")
                        ->setFontColor("#000000") // Orange
                        ->setBold();
        
               
        }elseif ($incaseofVS === "abroad") {
                $textElement9->setText("X")
                ->setCoordinates(333, 546)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();

        $textElement10 = new TextElement();
        $textElement10->setText($specify)
                        ->setCoordinates(410, 546)
                        ->setPages(1)
                        ->setTextAlign("center")
                        ->setFontFamily("Times New Roman")
                        ->setFontColor("#000000") // Orange
                        ->setBold();
                
        }

        $textElement11 = new TextElement();
        if($incaseofSL === "select2") {
                $textElement11->setText(" ")
                ->setCoordinates( 0, 0)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
                $textElement12 = new TextElement();
                $textElement12->setText($specifyill)
                        ->setCoordinates(443, 521)
                        ->setPages(1)
                        ->setTextAlign("center")
                        ->setFontFamily("Times New Roman")
                        ->setFontColor("#000000") // Orange
                        ->setBold();
        }elseif($incaseofSL === "inhospital") {
                $textElement11->setText("X")
                ->setCoordinates(333, 521)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();

        $textElement12 = new TextElement();
        $textElement12->setText($specifyill)
                        ->setCoordinates(443, 521)
                        ->setPages(1)
                        ->setTextAlign("center")
                        ->setFontFamily("Times New Roman")
                        ->setFontColor("#000000") // Orange
                        ->setBold();
        
               
        }elseif ($incaseofSL === "outP") {
                $textElement11->setText("X")
                ->setCoordinates(334, 505)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();

        $textElement12 = new TextElement();
        $textElement12->setText($specifyill)
                        ->setCoordinates(334, 490)
                        ->setPages(1)
                        ->setTextAlign("center")
                        ->setFontFamily("Times New Roman")
                        ->setFontColor("#000000") // Orange
                        ->setBold();
                
        }

        $textElement13 = new TextElement();
        $textElement13->setText($specifyillBFW)
                        ->setCoordinates(334, 450)
                        ->setPages(1)
                        ->setTextAlign("center")
                        ->setFontFamily("Times New Roman")
                        ->setFontColor("#000000") // Orange
                        ->setBold();

        
        $textElement14 = new TextElement();
        if($incaseofStudy === "select3") {
                $textElement14->setText(" ")
                ->setCoordinates(0, 0)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        }elseif($incaseofStudy === "completion") {
                $textElement14->setText("X")
                ->setCoordinates(333, 425)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        }elseif ($incaseofStudy === "bar") {
                $textElement14->setText("X")
                ->setCoordinates(333, 408)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
                
        }

        $textElement15 = new TextElement();
        if($otherP === "select4") {
                $textElement15->setText(" ")
                ->setCoordinates(0, 0)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        }elseif($otherP === "monetize") {
                $textElement15->setText("X")
                ->setCoordinates(333, 380)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        }elseif ($otherP === "terminal") {
                $textElement15->setText("X")
                ->setCoordinates(333, 367)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
                
        }

        $textElement16 = new TextElement();
        $textElement16->setText($numwk)
                        ->setCoordinates(80, 340)
                        ->setPages(1)
                        ->setTextAlign("center")
                        ->setFontFamily("Times New Roman")
                        ->setFontColor("#000000") // Orange
                        ->setBold();

        $textElement17 = new TextElement();
        $textElement17->setText($inclusive)
                        ->setCoordinates(80, 310)
                        ->setPages(1)
                        ->setTextAlign("center")
                        ->setFontFamily("Times New Roman")
                        ->setFontColor("#000000") // Orange
                        ->setBold();


    
        $textElement18 = new TextElement();
        if($commutation === "notreq") {
                $textElement18->setText("X")
                ->setCoordinates(333, 338)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
        }elseif ($commutation === "req") {
                $textElement18->setText("X")
                ->setCoordinates(333, 325)
                ->setPages(1)
                ->setTextAlign("center")
                ->setFontFamily("Times New Roman")
                ->setFontColor("#000000") // Orange
                ->setBold();
                
        }

        $editpdfTask->addElement($textElement);
        $editpdfTask->addElement($textElement1);
        $editpdfTask->addElement($textElement2);
        $editpdfTask->addElement($textElement3);
        $editpdfTask->addElement($textElement4);
        $editpdfTask->addElement($textElement5);
        $editpdfTask->addElement($textElement6);
        $editpdfTask->addElement($textElement7);
        $editpdfTask->addElement($textElement8);
        $editpdfTask->addElement($textElement9);
        $editpdfTask->addElement($textElement10);
        $editpdfTask->addElement($textElement11);
        $editpdfTask->addElement($textElement12);
        $editpdfTask->addElement($textElement13);
        $editpdfTask->addElement($textElement14);
        $editpdfTask->addElement($textElement15);
        $editpdfTask->addElement($textElement16);
        $editpdfTask->addElement($textElement17);
        $editpdfTask->addElement($textElement18);

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
          
          $editpdfTask->setOutputFilename('Leave Application' . $lastname);
          $editpdfTask->execute();
          $editpdfTask->download('C:\Users\ANGELO C. DURAN\Downloads\Leave Application');
        

        echo "Successfully submitted"
        ?>
        
        <br><br>
        <a href="form.php">RETURN</a>
            <?php

            
        

} else {
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
}

