<?php

class HomeModel {

    //return array of infos about users and users' portfolios
    public function fetchAll() {

        $connect = new Connect();
        $conn = $connect->connect();
        $query = $conn->prepare("select * from people p, portfolio_people pp, portfolio pf 
                                 where p.id = pp.people_id and pp.portfolio_id = pf.id");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public function fetchRecent(): array {

        $connect = new Connect();
        $conn = $connect->connect();
        $query = $conn->prepare("select * from people p, portfolio_people pp, portfolio pf
                                    where p.id = pp.people_id 
                                    and pp.portfolio_id = pf.id 
                                    order by p.id desc limit 6");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);

    }


}

?>
