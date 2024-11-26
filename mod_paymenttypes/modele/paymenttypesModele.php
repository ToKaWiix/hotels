<?php

class PaymenttypesModele extends Modele
{
    public function getListePaymenttypes()
    {
        $sql = "SELECT * FROM paymenttypes";
        $resultat = $this->executeRequete($sql);
        
        $listePaymenttypes = array();
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $listePaymenttypes[] = new PaymenttypesTable($row);
        }
        return $listePaymenttypes;
    }

    public function getUnPaymenttype($payment)
    {
        $sql = "SELECT * FROM paymenttypes WHERE Payment = ?";
        $resultat = $this->executeRequete($sql, array($payment));
        
        if ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            return new PaymenttypesTable($row);
        }
        return null;
    }

    public function getDernierIdPayment()
    {
        $sql = "SELECT MAX(Payment) as maxId FROM paymenttypes";
        $resultat = $this->executeRequete($sql);
        $row = $resultat->fetch(PDO::FETCH_ASSOC);
        return ($row['maxId']) ? $row['maxId'] + 1 : 1;
    }

    public function ajouterPaymenttype($description)
    {
        try {
            $nouveauId = $this->getDernierIdPayment();
            
            $sql = "INSERT INTO paymenttypes (Payment, Description) VALUES (?, ?)";
            $this->executeRequete($sql, array($nouveauId, $description));
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function modifierPaymenttype($payment, $description)
    {
        $sql = "UPDATE paymenttypes SET Description = ? WHERE Payment = ?";
        try {
            $this->executeRequete($sql, array($description, $payment));
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function supprimerPaymenttype($payment)
    {
        $sql = "DELETE FROM paymenttypes WHERE Payment = ?";
        try {
            $this->executeRequete($sql, array($payment));
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
