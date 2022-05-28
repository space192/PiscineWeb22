<link rel="stylesheet" href="Paiement.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<button type="button" data-toggle="modal" data-target="#staticBackdrop" id="BoutonPayer">
    <i class="fa-solid fa-cash-register"></i> Payer
</button>
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                <div class="tabs mt-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="true"> <i class="fa-solid fa-credit-card"></i> Carte de crédit </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false"> <i class="fa-brands fa-paypal"></i> Paypal </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab">
                            <div class="mt-4 mx-4">
                                <div class="text-center"> <h5>Carte de crédit</h5> </div>
                                <div class="form mt-3">
                                    <form method="post" action="querryPaiement.php">
                                        <div class="inputbox"> <input type="text" name="name" class="form-control" required="required">
                                            <span>Nom du titulaire</span>
                                        </div>
                                        <div class="inputbox">
                                            <input type="text" name="name" minlength="16" maxlength="16" class="form-control" required="required" pattern="^[0-9]*$">
                                            <span>Numéro de la carte</span>
                                            <i class="fa fa-eye"></i>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <select class="form-select" name='expireMM' id='expireMM' required>
                                                <option value=''>Mois</option>
                                                <option value='01'>Janvier</option>
                                                <option value='02'>Février</option>
                                                <option value='03'>Mars</option>
                                                <option value='04'>Avril</option>
                                                <option value='05'>Mai</option>
                                                <option value='06'>Juin</option>
                                                <option value='07'>Juillet</option>
                                                <option value='08'>Août</option>
                                                <option value='09'>Septembre</option>
                                                <option value='10'>Octobre</option>
                                                <option value='11'>Novembre</option>
                                                <option value='12'>Décembre</option>
                                            </select>
                                            <select class="form-select" name='expireYY' id='expireYY' required>
                                                <option value=''>Année</option>
                                                <option value='22'>2022</option>
                                                <option value='23'>2023</option>
                                                <option value='24'>2024</option>
                                                <option value='24'>2025</option>
                                                <option value='24'>2026</option>
                                                <option value='24'>2027</option>
                                            </select>
                                            <input class="inputCard" type="hidden" name="expiry" id="expiry" maxlength="4"/>
                                            <!--<div class="inputbox"> <input type="date" name="name"  class="form-control" required="required"> <span>Date d'expiration</span> </div>-->
                                            <div class="inputbox"> <input type="text" name="name" minlength="3" maxlength="3" class="form-control" required="required" pattern="^[0-9]*$"> <span>CVV</span> </div>
                                        </div>
                                        <div class="px-5 pay">
                                            <button class="btn btn-success btn-block" type="submit">Payer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                            <div class="px-5 mt-5" style="text-align: center;">
                                <div class="text-center"> <h5>Paypal</h5> </div>
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_xclick">
                                    <input type="hidden" name="business" value="blair.adrien@outlook.com">
                                    <input type="hidden" name="lc" value="FR">
                                    <input type="hidden" name="item_name" value="Projet Web">
                                    <input type="hidden" name="button_subtype" value="services">
                                    <input type="hidden" name="no_note" value="1">
                                    <input type="hidden" name="no_shipping" value="1">
                                    <input type="hidden" name="rm" value="1">
                                    <input type="hidden" name="return" value="http://localhost/piscineweb22/AffichageRDV.php">
                                    <input type="hidden" name="cancel_return" value="http://localhost/piscineweb22/index.php">
                                    <input type="hidden" name="currency_code" value="EUR">
                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
                                <table>
                                    <tr><td><input type="hidden" name="on0" value="Prestation">Prestation</td></tr><tr><td><select name="os0">
                                        <option value="Consultation">Consultation €20,00 EUR</option>
                                        <option value="Test en laboratoire">Test en laboratoire €42,00 EUR</option>
                                        <option value="M. Hina">M. Hina €0,01 EUR</option>
                                    </select> </td></tr>
                                </table>
                                    <input type="hidden" name="option_select0" value="Consultation">
                                    <input type="hidden" name="option_amount0" value="20.00">
                                    <input type="hidden" name="option_select1" value="Test en laboratoire">
                                    <input type="hidden" name="option_amount1" value="42.00">
                                    <input type="hidden" name="option_select2" value="M. Hina">
                                    <input type="hidden" name="option_amount2" value="0.01">
                                    <input type="hidden" name="option_index" value="0">
                                    <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>