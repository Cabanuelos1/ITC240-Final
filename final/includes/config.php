<?php
define('DEBUG',TRUE);
//config.php - will allow us to swap html pieces dynamically
//echo basename($_SERVER['PHP_SELF']);
//die;

$nav1 = array();
$nav1['index.php'] = "Home";
$nav1['nutrition.php'] = "Nutrition";
$nav1['workouts.php'] = "Workouts";
$nav1['personal-training.php'] = "Personal Training";

//--- end config area
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
	case "index.php":
			$title="Home";
			
			echo THIS_PAGE;
	break;
		
	case "nutrition.php":
			$title="Nutrition";
			
			echo THIS_PAGE;
	break;
	
	case "workouts.php":
			$title="Workouts";
			
			echo THIS_PAGE;
	break;
	
	case "personal-training.php":
			$title="Personal Training";
			
			echo THIS_PAGE;
	break;
	
	case "about.php":
			$title="About";
			
			echo THIS_PAGE;
	break;
	
	default: 
			$title="THIS_PAGE";
			
			echo THIS_PAGE;
}

function makeLinks($linkArray)
{
    $myReturn = '';
    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {
        
	    	$myReturn .= '<li class="navigation,current"><a href="' . $url . '"><span>' . $text . '</span></a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li class="navigation"><a href="' . $url . '"><span>' . $text . '</span></a></li>'  . PHP_EOL;
    	}    
    }
    
    $myReturn .= 
    '
    	</ul>
    </nav>
    ';
        
    return $myReturn;    
}

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}
	
//die;

?>