<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>this is php</p>
    <?php 
        $weekname = "tuesday";
        switch ($weekname){
            case "monday":
            case "tuesday":
            case "wednesday":
            case "thursday":
            case "friday":
                echo "weeekdays";
                break;
            
               /* echo "weeekdays";
                break;
            
                echo "weeekdays";
                break;
            
                echo "weeekdays";
                break;
            
                echo "weeekdays";
                break;*/
            case "saturday":
            case "sunday":
                echo "weekend";
                break;
            
                /*echo "weekend";
                break;*/
            default:
                echo "not valid day";                                     
                break;



        }
    
        
    ?>
</body>
</html>