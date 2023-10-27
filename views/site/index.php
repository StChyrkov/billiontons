<?php

/** @var yii\web\View $this */

use yii\bootstrap5\ActiveForm;

$this->title = 'Billiontons Handels und Consulting GmbH';
?>
<div>
    <div class="site-banner">
        <div class="container">
            <div class="company-logo flex-container justify-center">
                <img src="../logo/logo-main.png" alt="main-logo" class="main-logo">
            </div>
            <div class="company-logo flex-container justify-center">
                <div class="main-text">Grain brokerage company</div>
            </div>
            <div class="company-logo flex-container justify-center">
                <div class="low-text">Europe. Black Sea region</div>
            </div>
        </div>
    </div>
    <div class="why-us container">
        <div class="flex-container">
            <div class="why-text">
                <h2 class="section-header why-header">WHY US</h2>
                <p class="why-par">
                    Deep understanding of the region: Our company is founded by a team of experts with rich experience and insights into the grain market in Europe 
                    and the Black Sea region. We know the intricacies of trading, the risks, and the opportunities, allowing us to offer comprehensive advice 
                    and up-to-date information to our clients.
                </p>
                <p class="why-par">
                    Partnership approach: We aim for long-term and mutually beneficial relationships with our clients. Your success is our success, and we are 
                    committed to providing a personalized approach to each client to meet your needs best.
                </p>
                <p class="why-par">
                    Professionalism and reliability: We recognize the responsibility of operating in such an important industry. Our company is built on principles 
                    of honesty, transparency, and reliability. You can trust that your grain trade is in safe hands.
                </p>
            </div>
            <div class="why-image">
                <img src="../images/why-us-image.png" alt="grain" class="why-image-right">
            </div>
        </div>
    </div>
    <div class="partners">
        <div class="container">
            <div class="flex-container justify-center">
                <h2 class="section-header partners-header">PARTNERS AND MEMBERSHIPS</h2>
            </div>
        </div>
    </div>
    <div class="about container flex-container justify-center">
        <div class="about-card first-card">
            <div class="flex-container justify-center">
                <h3 class="card-header">GRAIN TRADING</h3>
            </div>
            <p class="card-text">We offer a wide selection of high-quality grain commodities, including wheat, barley, corn, and more. We carefully 
                select our suppliers and control the quality of products to meet the most demanding requirements of our clients.
            </p>
        </div>
        <div class="about-card">
            <div class="flex-container justify-center">
                <h3 class="card-header">LOGISTICS</h3>
            </div>
            <p class="card-text">We provide a full range of logistics services, including sea, rail, and road transportation, to ensure timely 
                delivery of your cargo to any destination.
            </p>
        </div>
        <div class="about-card">
            <div class="flex-container justify-center">
                <h3 class="card-header">RISK MANAGEMENT</h3>
            </div>
            <p class="card-text">Stability and protection of your business are our priority. We offer risk management services to help you 
                minimize potential losses and safeguard your investments.
            </p>
        </div>
    </div>
    <div class="products">
        <div class="container">
                <div class="flex-container justify-center">
                    <h2 class="section-header products-header">TRADED PRODUCTS</h2>
                </div>
                <div class="flex-container justify-around">
                    <div class="product-card">
                        <img src="../images/soya-image.png" alt="soaybeans" class="product-image">
                        <div class="flex-container justify-center">
                            <p class="product-name">Soyabean</p>
                        </div>
                        <div class="button-container flex-container justify-center">
                            <a href="#contact-form" class="contact-button">CONTACT US</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <img src="../images/wheat-image.png" alt="wheat" class="product-image">
                        <div class="flex-container justify-center">
                            <p class="product-name">Wheat</p>
                        </div>
                        <div class="button-container flex-container justify-center">
                            <a href="#contact-form" class="contact-button">CONTACT US</a>
                        </div>
                    </div>
                    <div class="product-card">
                        <img src="../images/corn-image.png" alt="corn" class="product-image">
                        <div class="flex-container justify-center">
                            <p class="product-name">Corn</p>
                        </div>
                        <div class="button-container flex-container justify-center">
                            <a href="#contact-form" class="contact-button">CONTACT US</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="shipments container">
        <div class="flex-container justify-center">
             <h2 class="section-header shipments-header">OUR SHIPMENTS</h2>
        </div>
        <div class="shipments-content flex-container">
            <div class="shipment-card">
                <h3 class="shipment-header">BAKAN <span class="ship-header-small">- Soyabean (6000 tons)</span></h3>
                <div class="images-block flex-container">
                    <img src="../images/bakan-1.png" alt="bakan-shipment-1" class="shipment-image-small">
                    <img src="../images/bakan-2.png" alt="bakan-shipment-2" class="shipment-image-small">
                    <img src="../images/bakan-3.png" alt="bakan-shipment-3" class="shipment-image-small">
                </div>
            </div>
            <div class="shipment-card">
                <h3 class="shipment-header">AMIR BEY <span class="ship-header-small">- Soyabean (6000 tons)</span></h3>
                <div class="images-block flex-container">
                    <img src="../images/amir-1.png" alt="amir-bey-shipment-1" class="shipment-image-small">
                    <img src="../images/amir-2.png" alt="amir-bey-shipment-2" class="shipment-image-small">
                    <img src="../images/amir-3.png" alt="amir-bey-shipment-3" class="shipment-image-small">
                </div>
            </div>
            <div class="shipment-card">
                <h3 class="shipment-header">LADY MERAL <span class="ship-header-small">- Corn (30k tons)</span></h3>
                <div class="images-block flex-container">
                    <img src="../images/lady-meral-1.png" alt="lady-meral-shipment-1" class="shipment-image-big">
                </div>
            </div>
            <div class="shipment-card">
                <h3 class="shipment-header">KEMET STAR <span class="ship-header-small">- Corn (13k tons)</span></h3>
                <div class="images-block flex-container">
                    <img src="../images/kemet-star-1.png" alt="kemet-star-shipment-1" class="shipment-image-big">
                </div>
            </div>
            <div class="shipment-card">
                <h3 class="shipment-header">TRIUPMH IV <span class="ship-header-small">- Soyabean (6000 tons)</span></h3>
                <div class="images-block flex-container">
                    <img src="../images/triuph-iv-1.png" alt="triuph-iv-shipment-1" class="shipment-image-small">
                    <img src="../images/triuph-iv-2.png" alt="triuph-iv-shipment-2" class="shipment-image-small">
                    <img src="../images/triuph-iv-3.png" alt="triuph-iv-shipment-3" class="shipment-image-small">
                </div>
            </div>
            <div class="shipment-card">
                <h3 class="shipment-header">BOSPHORUS QUEEN <span class="ship-header-small">- Fodder (6000 tons)</span></h3>
                <div class="images-block flex-container">
                    <img src="../images/bosphorus-queen-1.png" alt="bosphorus-queen-shipment-1" class="shipment-image-small">
                    <img src="../images/bosphorus-queen-2.png" alt="bosphorus-queen-shipment-2" class="shipment-image-small">
                    <img src="../images/bosphorus-queen-3.png" alt="bosphorus-queen-shipment-3" class="shipment-image-small">
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us-block container flex-container justify-center">
        <div class="form-container">
            <div class="flex-container justify-center">
                <h3 class="form-header">LEAVE US YOUR CONTACTS</h3>
            </div>
            <div class="1">
            <form id="contact-form" action="" method="post" class="contact-form flex-container">
                <p class="form-text">
                    <label for="post-email">E-mail</label>
                    <input id="post-email" type="email" name="email" class="form-field" required/>
                </p>
                <p class="and">and</p>
                <p class="form-text">
                    <label for="post-phone">Phone</label>
                    <input id="post-phone" type="tel" name="phone" class="form-field" required/>
                </p>
                <p>
                    <input type="button" value="SEND" class="form-button"/>
                </p>
            </form>
            </div>
        </div>
    </div>
</div>
