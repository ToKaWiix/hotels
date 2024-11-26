<?php


class PaymenttypesControleur
{
    private $parametre = array();
    private $oModele;
    private $oVue;

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        $this->oModele = new PaymenttypesModele($parametre);
        $this->oVue = new PaymenttypesVue($parametre);
    }

    public function lister()
    {
        $valeurs = $this->oModele->getListePaymenttypes();

        $this->oVue->genererAffichagePaymenttypes($valeurs);
    }


    public function form_consulter()
{
    $paymentId = isset($this->parametre['Payment']) ? $this->parametre['Payment'] : null;
    if ($paymentId) {
        $valeurs = $this->oModele->getUnPaymenttype($paymentId);
        $this->oVue->genererAffichageFiche($valeurs);
    } else {
        throw new Exception("L'ID du paiement n'a pas été fourni.");
    }
}

    public function form_modifier()
    {
        $payment = isset($this->parametre['Payment']) ? $this->parametre['Payment'] : null;
        
        if ($payment) {
            $paymenttype = $this->oModele->getUnPaymenttype($payment);
            if ($paymenttype) {
                $this->oVue->genererFormulaireModifier($paymenttype);
            } else {
                header('Location: index.php?gestion=paymenttypes');
            }
        } else {
            header('Location: index.php?gestion=paymenttypes');
        }
    }

    public function modifier()
    {
        $payment = isset($this->parametre['Payment']) ? $this->parametre['Payment'] : null;
        $description = isset($this->parametre['Description']) ? $this->parametre['Description'] : null;
        
        if ($payment && $description) {
            if ($this->oModele->modifierPaymenttype($payment, $description)) {
                header('Location: index.php?gestion=paymenttypes');
                exit();
            }
        }
        $this->form_modifier();
    }

    public function form_ajouter() {
        $this->oVue->genererFormulaireAjout();
    }

    public function ajouter() 
    {
        $description = isset($this->parametre['Description']) ? $this->parametre['Description'] : null;
        
        if ($description) {
            try {
                $success = $this->oModele->ajouterPaymenttype($description);
                if ($success) {
                    header('Location: index.php?gestion=paymenttypes');
                    exit();
                }
            } catch (Exception $e) {
            }
        }
        $this->oVue->genererFormulaireAjout();
    }

    public function form_supprimer()
    {
        $paymentId = isset($this->parametre['Payment']) ? $this->parametre['Payment'] : null;
        if ($paymentId) {
            $valeurs = $this->oModele->getUnPaymenttype($paymentId);
            $this->oVue->genererFormulaireSupprimer($valeurs);
        } else {
            header('Location: index.php?gestion=paymenttypes');
        }
    }

    public function supprimer()
    {
        $payment = isset($this->parametre['Payment']) ? $this->parametre['Payment'] : null;
        if ($payment) {
            $success = $this->oModele->supprimerPaymenttype($payment);
            if ($success) {
                header('Location: index.php?gestion=paymenttypes');
                exit();
            }
        }
        header('Location: index.php?gestion=paymenttypes');
    }

}
