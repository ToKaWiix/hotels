<?php


class PaymenttypesVue
{
    private $parametre = array(); //tableau
    private $tpl; // objet smarty


    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        $this->tpl = new Smarty();
    }

    private function chargementValeurs()
    {
        $this->tpl->assign('login', isset($_SESSION['login']) ? $_SESSION['login'] : 'Utilisateur');
        $this->tpl->assign('titreVue', 'Les modes de paiement');
        $this->tpl->assign('titrePage', 'Gestion des modes de paiement');
    }

    public function genererAffichagePaymenttypes($valeurs)
    {
        $this->chargementValeurs(); // Charge les variables globales comme le titre

        // Assigner les valeurs à Smarty
        $this->tpl->assign('listePaymenttypes', $valeurs);

        // Afficher le template de la liste
        $this->tpl->display('mod_paymenttypes/vue/paymenttypesListeVue.tpl');
    }



    public function genererAffichageFiche($valeurs)
    {
        $this->chargementValeurs();
        $this->tpl->assign('unPaiementtype', $valeurs);
        $this->tpl->display('mod_paymenttypes/vue/paymenttypesFicheVue.tpl');
    }


    // Nouvelle méthode pour générer le formulaire d'ajout
    public function genererFormulaireAjout()
    {
        $this->chargementValeurs();
        $this->tpl->assign('titrePage', 'Ajouter un mode de paiement');
        $this->tpl->display('mod_paymenttypes/vue/paymenttypesFormulaireAjout.tpl');
    }

    public function genererFormulaireModifier($paymenttype)
    {
        $this->chargementValeurs();
        $this->tpl->assign('paymenttype', $paymenttype);
        $this->tpl->display('mod_paymenttypes/vue/paymenttypesFormulaireModifier.tpl');
    }

    public function genererFormulaireSupprimer($paymenttype)
    {
        $this->chargementValeurs();
        $this->tpl->assign('titrePage', 'Supprimer un mode de paiement');
        $this->tpl->assign('paymenttype', $paymenttype);
        $this->tpl->display('mod_paymenttypes/vue/paymenttypesFormulaireSupprimer.tpl');
    }

}
