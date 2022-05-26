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
                                    <div class="inputbox"> <input type="text" name="name" class="form-control" required="required">
                                        <span>Nom du titulaire</span>
                                    </div>
                                    <div class="inputbox">
                                        <input type="text" name="name" min="1" max="999" class="form-control" required="required">
                                        <span>Numéro de la carte</span>
                                        <i class="fa fa-eye"></i>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>Date d'expiration</span> </div>
                                        <div class="inputbox"> <input type="text" name="name" min="1" max="999" class="form-control" required="required"> <span>CVV</span> </div>
                                    </div>
                                    <div class="px-5 pay">
                                        <button class="btn btn-success btn-block" onclick="location.href='reserver.php'">Payer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                            <div class="px-5 mt-5" style="text-align: center;">
                                <div class="text-center"> <h5>Paypal</h5> </div>
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="FB67VDTHFLDPJ">
                                    <table>
                                    <tr><td><input type="hidden" name="on0" value="Prestation">Prestation</td></tr><tr><td><select name="os0">
                                        <option value="Consultation">Consultation €27,00 EUR</option>
                                        <option value="Test en laboratoire">Test en laboratoire €42,00 EUR</option>
                                        <option value="M. Hina">M. Hina €0,01 EUR</option>
                                    </select> </td></tr>
                                    </table>
                                    <input type="hidden" name="currency_code" value="EUR"><br>
                                    <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne"><br>
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