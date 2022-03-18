<?php

class Router {

    public function routerRequest() {

        if(isset($_GET['route'])) {

			switch($_GET['route']) {

                case 'test' :

                    echo'test routeur ok';

                    break;

                default :

                    header('location: /404/');
                    break;

			}

		} else {

			$homeCTRL = new HomeController();
			$homeCTRL->afficher();

		}

    }

}

?>
