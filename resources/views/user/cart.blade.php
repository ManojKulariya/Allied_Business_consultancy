@include('user.includes.header')

        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="heading text-center">Shopping Cart</div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- page-cart -->
        <section class="flat-spacing-11">
            <div class="container">
                <!-- <div class="tf-page-cart text-center mt_140 mb_200">
                    <h5 class="mb_24">Your cart is empty</h5>
                    <p class="mb_24">You may check out all the available products and buy some in the shop</p>
                    <a href="shop-default.html" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">Return to shop<i class="icon icon-arrow1-top-left"></i></a>
                </div> -->
                <div class="tf-cart-countdown">
                    <div class="title-left">
                        <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24" fill="rgb(219 18 21)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0899 24C11.3119 22.1928 11.4245 20.2409 10.4277 18.1443C10.1505 19.2691 9.64344 19.9518 8.90645 20.1924C9.59084 18.2379 9.01896 16.1263 7.19079 13.8576C7.15133 16.2007 6.58824 17.9076 5.50148 18.9782C4.00436 20.4517 4.02197 22.1146 5.55428 23.9669C-0.806588 20.5819 -1.70399 16.0418 2.86196 10.347C3.14516 11.7228 3.83141 12.5674 4.92082 12.8809C3.73335 7.84186 4.98274 3.54821 8.66895 0C8.6916 7.87426 11.1062 8.57414 14.1592 12.089C17.4554 16.3071 15.5184 21.1748 10.0899 24Z">
                            </path>
                        </svg>
                        <p>These products are limited, checkout within </p>
                    </div>
                    <div class="js-countdown timer-count" data-timer="600" data-labels="d:,h:,m:,s"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item" style="display: none;"><span class="countdown__value countdown__value--0 js-countdown__value--0">0</span><span class="countdown__label">d:</span></span><span class="countdown__item" style="display: none;"><span class="countdown__value countdown__value--1 js-countdown__value--1">00</span><span class="countdown__label">h:</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">09</span><span class="countdown__label">m:</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">26</span><span class="countdown__label">s</span></span></div></div>
                </div>
                <div class="tf-page-cart-wrap">
                    <div class="tf-page-cart-item">
                        <form>
                            <table class="tf-table-page-cart">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="tf-cart-item file-delete">
                                        <td class="tf-cart-item_product">
                                            <a href="https://themesflat.co/html/ecomus/product-detail.html" class="img-box">
                                                <img src="{{ asset('frontend/img/shop/white-2.jpg') }}" alt="img-product">
                                            </a>
                                            <div class="cart-info">
                                                <a href="https://themesflat.co/html/ecomus/product-detail.html" class="cart-title link">Oversized Printed
                                                    T-shirt</a>
                                                <div class="cart-meta-variant">White / M</div>
                                                <span class="remove-cart link remove">Remove</span>
                                            </div>
                                        </td>
                                        <td class="tf-cart-item_price tf-variant-item-price" cart-data-title="Price">
                                            <div class="cart-price price">$18.00</div>
                                        </td>
                                        <td class="tf-cart-item_quantity" cart-data-title="Quantity">
                                            <div class="cart-quantity">
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity btndecrease">
                                                        <svg class="d-inline-block" width="9" height="1" viewBox="0 0 9 1" fill="currentColor">
                                                            <path d="M9 1H5.14286H3.85714H0V1.50201e-05H3.85714L5.14286 0L9 1.50201e-05V1Z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <input type="text" name="number" value="1">
                                                    <span class="btn-quantity btnincrease">
                                                        <svg class="d-inline-block" width="9" height="9" viewBox="0 0 9 9" fill="currentColor">
                                                            <path d="M9 5.14286H5.14286V9H3.85714V5.14286H0V3.85714H3.85714V0H5.14286V3.85714H9V5.14286Z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="tf-cart-item_total tf-variant-item-total" cart-data-title="Total">
                                            <div class="cart-total price">$18.00</div>
                                        </td>
                                    </tr>
                                    <tr class="tf-cart-item file-delete">
                                        <td class="tf-cart-item_product">
                                            <a href="https://themesflat.co/html/ecomus/product-detail.html" class="img-box">
                                                <img src="{{ asset('frontend/img/shop/orange-1.jpg')}}" alt="img-product">
                                            </a>
                                            <div class="cart-info">
                                                <a href="https://themesflat.co/html/ecomus/product-detail.html" class="cart-title link">Ribbed Tank
                                                    Top</a>
                                                <div class="cart-meta-variant">Orange / S</div>
                                                <span class="remove-cart link remove">Remove</span>
                                            </div>
                                        </td>
                                        <td class="tf-cart-item_price tf-variant-item-price" cart-data-title="Price">
                                            <div class="cart-price price">$18.00</div>
                                        </td>
                                        <td class="tf-cart-item_quantity" cart-data-title="Quantity">
                                            <div class="cart-quantity">
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity btndecrease">
                                                        <svg class="d-inline-block" width="9" height="1" viewBox="0 0 9 1" fill="currentColor">
                                                            <path d="M9 1H5.14286H3.85714H0V1.50201e-05H3.85714L5.14286 0L9 1.50201e-05V1Z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <input type="text" name="number" value="1">
                                                    <span class="btn-quantity btnincrease">
                                                        <svg class="d-inline-block" width="9" height="9" viewBox="0 0 9 9" fill="currentColor">
                                                            <path d="M9 5.14286H5.14286V9H3.85714V5.14286H0V3.85714H3.85714V0H5.14286V3.85714H9V5.14286Z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="tf-cart-item_total tf-variant-item-total" cart-data-title="Total">
                                            <div class="cart-total price">$18.00</div>
                                        </td>
                                    </tr>
                                    <tr class="tf-cart-item file-delete">
                                        <td class="tf-cart-item_product">
                                            <a href="https://themesflat.co/html/ecomus/product-detail.html" class="img-box">
                                                <img src="{{ asset('frontend/img/shop/black-4.jpg')}}" alt="img-product">
                                            </a>
                                            <div class="cart-info">
                                                <a href="https://themesflat.co/html/ecomus/product-detail.html" class="cart-title link">Regular Fit Oxford
                                                    Shirt</a>
                                                <div class="cart-meta-variant">Black / L</div>
                                                <span class="remove-cart link remove">Remove</span>
                                            </div>
                                        </td>
                                        <td class="tf-cart-item_price tf-variant-item-price" cart-data-title="Price">
                                            <div class="cart-price price">$18.00</div>
                                        </td>
                                        <td class="tf-cart-item_quantity" cart-data-title="Quantity">
                                            <div class="cart-quantity">
                                                <div class="wg-quantity">
                                                    <span class="btn-quantity btndecrease">
                                                        <svg class="d-inline-block" width="9" height="1" viewBox="0 0 9 1" fill="currentColor">
                                                            <path d="M9 1H5.14286H3.85714H0V1.50201e-05H3.85714L5.14286 0L9 1.50201e-05V1Z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                    <input type="text" name="number" value="1">
                                                    <span class="btn-quantity btnincrease">
                                                        <svg class="d-inline-block" width="9" height="9" viewBox="0 0 9 9" fill="currentColor">
                                                            <path d="M9 5.14286H5.14286V9H3.85714V5.14286H0V3.85714H3.85714V0H5.14286V3.85714H9V5.14286Z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="tf-cart-item_total tf-variant-item-total" cart-data-title="Total">
                                            <div class="cart-total price">$18.00</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="tf-page-cart-note">
                                <label for="cart-note">Add Order Note</label>
                                <textarea name="note" id="cart-note" placeholder="How can we help you?"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="tf-page-cart-footer">
                        <div class="tf-cart-footer-inner">
                            <div class="tf-free-shipping-bar">
                                <div class="tf-progress-bar">
                                    <span style="width: 50%;">
                                        <div class="progress-car">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="currentColor">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.875C0 0.391751 0.391751 0 0.875 0H13.5625C14.0457 0 14.4375 0.391751 14.4375 0.875V3.0625H17.3125C17.5867 3.0625 17.845 3.19101 18.0104 3.40969L20.8229 7.12844C20.9378 7.2804 21 7.46572 21 7.65625V11.375C21 11.8582 20.6082 12.25 20.125 12.25H17.7881C17.4278 13.2695 16.4554 14 15.3125 14C14.1696 14 13.1972 13.2695 12.8369 12.25H7.72563C7.36527 13.2695 6.39293 14 5.25 14C4.10706 14 3.13473 13.2695 2.77437 12.25H0.875C0.391751 12.25 0 11.8582 0 11.375V0.875ZM2.77437 10.5C3.13473 9.48047 4.10706 8.75 5.25 8.75C6.39293 8.75 7.36527 9.48046 7.72563 10.5H12.6875V1.75H1.75V10.5H2.77437ZM14.4375 8.89937V4.8125H16.8772L19.25 7.94987V10.5H17.7881C17.4278 9.48046 16.4554 8.75 15.3125 8.75C15.0057 8.75 14.7112 8.80264 14.4375 8.89937ZM5.25 10.5C4.76676 10.5 4.375 10.8918 4.375 11.375C4.375 11.8582 4.76676 12.25 5.25 12.25C5.73323 12.25 6.125 11.8582 6.125 11.375C6.125 10.8918 5.73323 10.5 5.25 10.5ZM15.3125 10.5C14.8293 10.5 14.4375 10.8918 14.4375 11.375C14.4375 11.8582 14.8293 12.25 15.3125 12.25C15.7957 12.25 16.1875 11.8582 16.1875 11.375C16.1875 10.8918 15.7957 10.5 15.3125 10.5Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                                <div class="tf-progress-msg">
                                    Buy <span class="price fw-6">$75.00</span> more to enjoy <span class="fw-6">Free
                                        Shipping</span>
                                </div>
                            </div>
                            <div class="tf-page-cart-checkout">
                                <div class="shipping-calculator">
                                    <summary class="accordion-shipping-header d-flex justify-content-between align-items-center collapsed" data-bs-target="#shipping" data-bs-toggle="collapse" aria-controls="shipping">
                                        <h3 class="shipping-calculator-title">Estimate Shipping</h3>
                                        <span class="shipping-calculator_accordion-icon"></span>
                                    </summary>
                                    <div class="collapse" id="shipping">
                                        <div class="accordion-shipping-content">
                                            <fieldset class="field">
                                                <label class="label">Country</label>
                                                <select class="tf-select w-100" id="ShippingCountry_CartDrawer-Form" name="address[country]" data-default="">
                                                    <option value="---" data-provinces="[]">---</option>
                                                    <option value="Australia" data-provinces="[[&#39;Australian Capital Territory&#39;,&#39;Australian Capital Territory&#39;],[&#39;New South Wales&#39;,&#39;New South Wales&#39;],[&#39;Northern Territory&#39;,&#39;Northern Territory&#39;],[&#39;Queensland&#39;,&#39;Queensland&#39;],[&#39;South Australia&#39;,&#39;South Australia&#39;],[&#39;Tasmania&#39;,&#39;Tasmania&#39;],[&#39;Victoria&#39;,&#39;Victoria&#39;],[&#39;Western Australia&#39;,&#39;Western Australia&#39;]]">
                                                        Australia</option>
                                                    <option value="Austria" data-provinces="[]">Austria</option>
                                                    <option value="Belgium" data-provinces="[]">Belgium</option>
                                                    <option value="Canada" data-provinces="[[&#39;Alberta&#39;,&#39;Alberta&#39;],[&#39;British Columbia&#39;,&#39;British Columbia&#39;],[&#39;Manitoba&#39;,&#39;Manitoba&#39;],[&#39;New Brunswick&#39;,&#39;New Brunswick&#39;],[&#39;Newfoundland and Labrador&#39;,&#39;Newfoundland and Labrador&#39;],[&#39;Northwest Territories&#39;,&#39;Northwest Territories&#39;],[&#39;Nova Scotia&#39;,&#39;Nova Scotia&#39;],[&#39;Nunavut&#39;,&#39;Nunavut&#39;],[&#39;Ontario&#39;,&#39;Ontario&#39;],[&#39;Prince Edward Island&#39;,&#39;Prince Edward Island&#39;],[&#39;Quebec&#39;,&#39;Quebec&#39;],[&#39;Saskatchewan&#39;,&#39;Saskatchewan&#39;],[&#39;Yukon&#39;,&#39;Yukon&#39;]]">
                                                        Canada</option>
                                                    <option value="Czech Republic" data-provinces="[]">Czechia</option>
                                                    <option value="Denmark" data-provinces="[]">Denmark</option>
                                                    <option value="Finland" data-provinces="[]">Finland</option>
                                                    <option value="France" data-provinces="[]">France</option>
                                                    <option value="Germany" data-provinces="[]">Germany</option>
                                                    <option value="Hong Kong" data-provinces="[[&#39;Hong Kong Island&#39;,&#39;Hong Kong Island&#39;],[&#39;Kowloon&#39;,&#39;Kowloon&#39;],[&#39;New Territories&#39;,&#39;New Territories&#39;]]">
                                                        Hong Kong SAR</option>
                                                    <option value="Ireland" data-provinces="[[&#39;Carlow&#39;,&#39;Carlow&#39;],[&#39;Cavan&#39;,&#39;Cavan&#39;],[&#39;Clare&#39;,&#39;Clare&#39;],[&#39;Cork&#39;,&#39;Cork&#39;],[&#39;Donegal&#39;,&#39;Donegal&#39;],[&#39;Dublin&#39;,&#39;Dublin&#39;],[&#39;Galway&#39;,&#39;Galway&#39;],[&#39;Kerry&#39;,&#39;Kerry&#39;],[&#39;Kildare&#39;,&#39;Kildare&#39;],[&#39;Kilkenny&#39;,&#39;Kilkenny&#39;],[&#39;Laois&#39;,&#39;Laois&#39;],[&#39;Leitrim&#39;,&#39;Leitrim&#39;],[&#39;Limerick&#39;,&#39;Limerick&#39;],[&#39;Longford&#39;,&#39;Longford&#39;],[&#39;Louth&#39;,&#39;Louth&#39;],[&#39;Mayo&#39;,&#39;Mayo&#39;],[&#39;Meath&#39;,&#39;Meath&#39;],[&#39;Monaghan&#39;,&#39;Monaghan&#39;],[&#39;Offaly&#39;,&#39;Offaly&#39;],[&#39;Roscommon&#39;,&#39;Roscommon&#39;],[&#39;Sligo&#39;,&#39;Sligo&#39;],[&#39;Tipperary&#39;,&#39;Tipperary&#39;],[&#39;Waterford&#39;,&#39;Waterford&#39;],[&#39;Westmeath&#39;,&#39;Westmeath&#39;],[&#39;Wexford&#39;,&#39;Wexford&#39;],[&#39;Wicklow&#39;,&#39;Wicklow&#39;]]">
                                                        Ireland</option>
                                                    <option value="Israel" data-provinces="[]">Israel</option>
                                                    <option value="Italy" data-provinces="[[&#39;Agrigento&#39;,&#39;Agrigento&#39;],[&#39;Alessandria&#39;,&#39;Alessandria&#39;],[&#39;Ancona&#39;,&#39;Ancona&#39;],[&#39;Aosta&#39;,&#39;Aosta Valley&#39;],[&#39;Arezzo&#39;,&#39;Arezzo&#39;],[&#39;Ascoli Piceno&#39;,&#39;Ascoli Piceno&#39;],[&#39;Asti&#39;,&#39;Asti&#39;],[&#39;Avellino&#39;,&#39;Avellino&#39;],[&#39;Bari&#39;,&#39;Bari&#39;],[&#39;Barletta-Andria-Trani&#39;,&#39;Barletta-Andria-Trani&#39;],[&#39;Belluno&#39;,&#39;Belluno&#39;],[&#39;Benevento&#39;,&#39;Benevento&#39;],[&#39;Bergamo&#39;,&#39;Bergamo&#39;],[&#39;Biella&#39;,&#39;Biella&#39;],[&#39;Bologna&#39;,&#39;Bologna&#39;],[&#39;Bolzano&#39;,&#39;South Tyrol&#39;],[&#39;Brescia&#39;,&#39;Brescia&#39;],[&#39;Brindisi&#39;,&#39;Brindisi&#39;],[&#39;Cagliari&#39;,&#39;Cagliari&#39;],[&#39;Caltanissetta&#39;,&#39;Caltanissetta&#39;],[&#39;Campobasso&#39;,&#39;Campobasso&#39;],[&#39;Carbonia-Iglesias&#39;,&#39;Carbonia-Iglesias&#39;],[&#39;Caserta&#39;,&#39;Caserta&#39;],[&#39;Catania&#39;,&#39;Catania&#39;],[&#39;Catanzaro&#39;,&#39;Catanzaro&#39;],[&#39;Chieti&#39;,&#39;Chieti&#39;],[&#39;Como&#39;,&#39;Como&#39;],[&#39;Cosenza&#39;,&#39;Cosenza&#39;],[&#39;Cremona&#39;,&#39;Cremona&#39;],[&#39;Crotone&#39;,&#39;Crotone&#39;],[&#39;Cuneo&#39;,&#39;Cuneo&#39;],[&#39;Enna&#39;,&#39;Enna&#39;],[&#39;Fermo&#39;,&#39;Fermo&#39;],[&#39;Ferrara&#39;,&#39;Ferrara&#39;],[&#39;Firenze&#39;,&#39;Florence&#39;],[&#39;Foggia&#39;,&#39;Foggia&#39;],[&#39;Forlì-Cesena&#39;,&#39;Forlì-Cesena&#39;],[&#39;Frosinone&#39;,&#39;Frosinone&#39;],[&#39;Genova&#39;,&#39;Genoa&#39;],[&#39;Gorizia&#39;,&#39;Gorizia&#39;],[&#39;Grosseto&#39;,&#39;Grosseto&#39;],[&#39;Imperia&#39;,&#39;Imperia&#39;],[&#39;Isernia&#39;,&#39;Isernia&#39;],[&#39;L&#39;Aquila&#39;,&#39;L’Aquila&#39;],[&#39;La Spezia&#39;,&#39;La Spezia&#39;],[&#39;Latina&#39;,&#39;Latina&#39;],[&#39;Lecce&#39;,&#39;Lecce&#39;],[&#39;Lecco&#39;,&#39;Lecco&#39;],[&#39;Livorno&#39;,&#39;Livorno&#39;],[&#39;Lodi&#39;,&#39;Lodi&#39;],[&#39;Lucca&#39;,&#39;Lucca&#39;],[&#39;Macerata&#39;,&#39;Macerata&#39;],[&#39;Mantova&#39;,&#39;Mantua&#39;],[&#39;Massa-Carrara&#39;,&#39;Massa and Carrara&#39;],[&#39;Matera&#39;,&#39;Matera&#39;],[&#39;Medio Campidano&#39;,&#39;Medio Campidano&#39;],[&#39;Messina&#39;,&#39;Messina&#39;],[&#39;Milano&#39;,&#39;Milan&#39;],[&#39;Modena&#39;,&#39;Modena&#39;],[&#39;Monza e Brianza&#39;,&#39;Monza and Brianza&#39;],[&#39;Napoli&#39;,&#39;Naples&#39;],[&#39;Novara&#39;,&#39;Novara&#39;],[&#39;Nuoro&#39;,&#39;Nuoro&#39;],[&#39;Ogliastra&#39;,&#39;Ogliastra&#39;],[&#39;Olbia-Tempio&#39;,&#39;Olbia-Tempio&#39;],[&#39;Oristano&#39;,&#39;Oristano&#39;],[&#39;Padova&#39;,&#39;Padua&#39;],[&#39;Palermo&#39;,&#39;Palermo&#39;],[&#39;Parma&#39;,&#39;Parma&#39;],[&#39;Pavia&#39;,&#39;Pavia&#39;],[&#39;Perugia&#39;,&#39;Perugia&#39;],[&#39;Pesaro e Urbino&#39;,&#39;Pesaro and Urbino&#39;],[&#39;Pescara&#39;,&#39;Pescara&#39;],[&#39;Piacenza&#39;,&#39;Piacenza&#39;],[&#39;Pisa&#39;,&#39;Pisa&#39;],[&#39;Pistoia&#39;,&#39;Pistoia&#39;],[&#39;Pordenone&#39;,&#39;Pordenone&#39;],[&#39;Potenza&#39;,&#39;Potenza&#39;],[&#39;Prato&#39;,&#39;Prato&#39;],[&#39;Ragusa&#39;,&#39;Ragusa&#39;],[&#39;Ravenna&#39;,&#39;Ravenna&#39;],[&#39;Reggio Calabria&#39;,&#39;Reggio Calabria&#39;],[&#39;Reggio Emilia&#39;,&#39;Reggio Emilia&#39;],[&#39;Rieti&#39;,&#39;Rieti&#39;],[&#39;Rimini&#39;,&#39;Rimini&#39;],[&#39;Roma&#39;,&#39;Rome&#39;],[&#39;Rovigo&#39;,&#39;Rovigo&#39;],[&#39;Salerno&#39;,&#39;Salerno&#39;],[&#39;Sassari&#39;,&#39;Sassari&#39;],[&#39;Savona&#39;,&#39;Savona&#39;],[&#39;Siena&#39;,&#39;Siena&#39;],[&#39;Siracusa&#39;,&#39;Syracuse&#39;],[&#39;Sondrio&#39;,&#39;Sondrio&#39;],[&#39;Taranto&#39;,&#39;Taranto&#39;],[&#39;Teramo&#39;,&#39;Teramo&#39;],[&#39;Terni&#39;,&#39;Terni&#39;],[&#39;Torino&#39;,&#39;Turin&#39;],[&#39;Trapani&#39;,&#39;Trapani&#39;],[&#39;Trento&#39;,&#39;Trentino&#39;],[&#39;Treviso&#39;,&#39;Treviso&#39;],[&#39;Trieste&#39;,&#39;Trieste&#39;],[&#39;Udine&#39;,&#39;Udine&#39;],[&#39;Varese&#39;,&#39;Varese&#39;],[&#39;Venezia&#39;,&#39;Venice&#39;],[&#39;Verbano-Cusio-Ossola&#39;,&#39;Verbano-Cusio-Ossola&#39;],[&#39;Vercelli&#39;,&#39;Vercelli&#39;],[&#39;Verona&#39;,&#39;Verona&#39;],[&#39;Vibo Valentia&#39;,&#39;Vibo Valentia&#39;],[&#39;Vicenza&#39;,&#39;Vicenza&#39;],[&#39;Viterbo&#39;,&#39;Viterbo&#39;]]">
                                                        Italy</option>
                                                    <option value="Japan" data-provinces="[[&#39;Aichi&#39;,&#39;Aichi&#39;],[&#39;Akita&#39;,&#39;Akita&#39;],[&#39;Aomori&#39;,&#39;Aomori&#39;],[&#39;Chiba&#39;,&#39;Chiba&#39;],[&#39;Ehime&#39;,&#39;Ehime&#39;],[&#39;Fukui&#39;,&#39;Fukui&#39;],[&#39;Fukuoka&#39;,&#39;Fukuoka&#39;],[&#39;Fukushima&#39;,&#39;Fukushima&#39;],[&#39;Gifu&#39;,&#39;Gifu&#39;],[&#39;Gunma&#39;,&#39;Gunma&#39;],[&#39;Hiroshima&#39;,&#39;Hiroshima&#39;],[&#39;Hokkaidō&#39;,&#39;Hokkaido&#39;],[&#39;Hyōgo&#39;,&#39;Hyogo&#39;],[&#39;Ibaraki&#39;,&#39;Ibaraki&#39;],[&#39;Ishikawa&#39;,&#39;Ishikawa&#39;],[&#39;Iwate&#39;,&#39;Iwate&#39;],[&#39;Kagawa&#39;,&#39;Kagawa&#39;],[&#39;Kagoshima&#39;,&#39;Kagoshima&#39;],[&#39;Kanagawa&#39;,&#39;Kanagawa&#39;],[&#39;Kumamoto&#39;,&#39;Kumamoto&#39;],[&#39;Kyōto&#39;,&#39;Kyoto&#39;],[&#39;Kōchi&#39;,&#39;Kochi&#39;],[&#39;Mie&#39;,&#39;Mie&#39;],[&#39;Miyagi&#39;,&#39;Miyagi&#39;],[&#39;Miyazaki&#39;,&#39;Miyazaki&#39;],[&#39;Nagano&#39;,&#39;Nagano&#39;],[&#39;Nagasaki&#39;,&#39;Nagasaki&#39;],[&#39;Nara&#39;,&#39;Nara&#39;],[&#39;Niigata&#39;,&#39;Niigata&#39;],[&#39;Okayama&#39;,&#39;Okayama&#39;],[&#39;Okinawa&#39;,&#39;Okinawa&#39;],[&#39;Saga&#39;,&#39;Saga&#39;],[&#39;Saitama&#39;,&#39;Saitama&#39;],[&#39;Shiga&#39;,&#39;Shiga&#39;],[&#39;Shimane&#39;,&#39;Shimane&#39;],[&#39;Shizuoka&#39;,&#39;Shizuoka&#39;],[&#39;Tochigi&#39;,&#39;Tochigi&#39;],[&#39;Tokushima&#39;,&#39;Tokushima&#39;],[&#39;Tottori&#39;,&#39;Tottori&#39;],[&#39;Toyama&#39;,&#39;Toyama&#39;],[&#39;Tōkyō&#39;,&#39;Tokyo&#39;],[&#39;Wakayama&#39;,&#39;Wakayama&#39;],[&#39;Yamagata&#39;,&#39;Yamagata&#39;],[&#39;Yamaguchi&#39;,&#39;Yamaguchi&#39;],[&#39;Yamanashi&#39;,&#39;Yamanashi&#39;],[&#39;Ōita&#39;,&#39;Oita&#39;],[&#39;Ōsaka&#39;,&#39;Osaka&#39;]]">
                                                        Japan</option>
                                                    <option value="Malaysia" data-provinces="[[&#39;Johor&#39;,&#39;Johor&#39;],[&#39;Kedah&#39;,&#39;Kedah&#39;],[&#39;Kelantan&#39;,&#39;Kelantan&#39;],[&#39;Kuala Lumpur&#39;,&#39;Kuala Lumpur&#39;],[&#39;Labuan&#39;,&#39;Labuan&#39;],[&#39;Melaka&#39;,&#39;Malacca&#39;],[&#39;Negeri Sembilan&#39;,&#39;Negeri Sembilan&#39;],[&#39;Pahang&#39;,&#39;Pahang&#39;],[&#39;Penang&#39;,&#39;Penang&#39;],[&#39;Perak&#39;,&#39;Perak&#39;],[&#39;Perlis&#39;,&#39;Perlis&#39;],[&#39;Putrajaya&#39;,&#39;Putrajaya&#39;],[&#39;Sabah&#39;,&#39;Sabah&#39;],[&#39;Sarawak&#39;,&#39;Sarawak&#39;],[&#39;Selangor&#39;,&#39;Selangor&#39;],[&#39;Terengganu&#39;,&#39;Terengganu&#39;]]">
                                                        Malaysia</option>
                                                    <option value="Netherlands" data-provinces="[]">Netherlands</option>
                                                    <option value="New Zealand" data-provinces="[[&#39;Auckland&#39;,&#39;Auckland&#39;],[&#39;Bay of Plenty&#39;,&#39;Bay of Plenty&#39;],[&#39;Canterbury&#39;,&#39;Canterbury&#39;],[&#39;Chatham Islands&#39;,&#39;Chatham Islands&#39;],[&#39;Gisborne&#39;,&#39;Gisborne&#39;],[&#39;Hawke&#39;s Bay&#39;,&#39;Hawke’s Bay&#39;],[&#39;Manawatu-Wanganui&#39;,&#39;Manawatū-Whanganui&#39;],[&#39;Marlborough&#39;,&#39;Marlborough&#39;],[&#39;Nelson&#39;,&#39;Nelson&#39;],[&#39;Northland&#39;,&#39;Northland&#39;],[&#39;Otago&#39;,&#39;Otago&#39;],[&#39;Southland&#39;,&#39;Southland&#39;],[&#39;Taranaki&#39;,&#39;Taranaki&#39;],[&#39;Tasman&#39;,&#39;Tasman&#39;],[&#39;Waikato&#39;,&#39;Waikato&#39;],[&#39;Wellington&#39;,&#39;Wellington&#39;],[&#39;West Coast&#39;,&#39;West Coast&#39;]]">
                                                        New Zealand</option>
                                                    <option value="Norway" data-provinces="[]">Norway</option>
                                                    <option value="Poland" data-provinces="[]">Poland</option>
                                                    <option value="Portugal" data-provinces="[[&#39;Aveiro&#39;,&#39;Aveiro&#39;],[&#39;Açores&#39;,&#39;Azores&#39;],[&#39;Beja&#39;,&#39;Beja&#39;],[&#39;Braga&#39;,&#39;Braga&#39;],[&#39;Bragança&#39;,&#39;Bragança&#39;],[&#39;Castelo Branco&#39;,&#39;Castelo Branco&#39;],[&#39;Coimbra&#39;,&#39;Coimbra&#39;],[&#39;Faro&#39;,&#39;Faro&#39;],[&#39;Guarda&#39;,&#39;Guarda&#39;],[&#39;Leiria&#39;,&#39;Leiria&#39;],[&#39;Lisboa&#39;,&#39;Lisbon&#39;],[&#39;Madeira&#39;,&#39;Madeira&#39;],[&#39;Portalegre&#39;,&#39;Portalegre&#39;],[&#39;Porto&#39;,&#39;Porto&#39;],[&#39;Santarém&#39;,&#39;Santarém&#39;],[&#39;Setúbal&#39;,&#39;Setúbal&#39;],[&#39;Viana do Castelo&#39;,&#39;Viana do Castelo&#39;],[&#39;Vila Real&#39;,&#39;Vila Real&#39;],[&#39;Viseu&#39;,&#39;Viseu&#39;],[&#39;Évora&#39;,&#39;Évora&#39;]]">
                                                        Portugal</option>
                                                    <option value="Singapore" data-provinces="[]">Singapore</option>
                                                    <option value="South Korea" data-provinces="[[&#39;Busan&#39;,&#39;Busan&#39;],[&#39;Chungbuk&#39;,&#39;North Chungcheong&#39;],[&#39;Chungnam&#39;,&#39;South Chungcheong&#39;],[&#39;Daegu&#39;,&#39;Daegu&#39;],[&#39;Daejeon&#39;,&#39;Daejeon&#39;],[&#39;Gangwon&#39;,&#39;Gangwon&#39;],[&#39;Gwangju&#39;,&#39;Gwangju City&#39;],[&#39;Gyeongbuk&#39;,&#39;North Gyeongsang&#39;],[&#39;Gyeonggi&#39;,&#39;Gyeonggi&#39;],[&#39;Gyeongnam&#39;,&#39;South Gyeongsang&#39;],[&#39;Incheon&#39;,&#39;Incheon&#39;],[&#39;Jeju&#39;,&#39;Jeju&#39;],[&#39;Jeonbuk&#39;,&#39;North Jeolla&#39;],[&#39;Jeonnam&#39;,&#39;South Jeolla&#39;],[&#39;Sejong&#39;,&#39;Sejong&#39;],[&#39;Seoul&#39;,&#39;Seoul&#39;],[&#39;Ulsan&#39;,&#39;Ulsan&#39;]]">
                                                        South Korea</option>
                                                    <option value="Spain" data-provinces="[[&#39;A Coruña&#39;,&#39;A Coruña&#39;],[&#39;Albacete&#39;,&#39;Albacete&#39;],[&#39;Alicante&#39;,&#39;Alicante&#39;],[&#39;Almería&#39;,&#39;Almería&#39;],[&#39;Asturias&#39;,&#39;Asturias Province&#39;],[&#39;Badajoz&#39;,&#39;Badajoz&#39;],[&#39;Balears&#39;,&#39;Balears Province&#39;],[&#39;Barcelona&#39;,&#39;Barcelona&#39;],[&#39;Burgos&#39;,&#39;Burgos&#39;],[&#39;Cantabria&#39;,&#39;Cantabria Province&#39;],[&#39;Castellón&#39;,&#39;Castellón&#39;],[&#39;Ceuta&#39;,&#39;Ceuta&#39;],[&#39;Ciudad Real&#39;,&#39;Ciudad Real&#39;],[&#39;Cuenca&#39;,&#39;Cuenca&#39;],[&#39;Cáceres&#39;,&#39;Cáceres&#39;],[&#39;Cádiz&#39;,&#39;Cádiz&#39;],[&#39;Córdoba&#39;,&#39;Córdoba&#39;],[&#39;Girona&#39;,&#39;Girona&#39;],[&#39;Granada&#39;,&#39;Granada&#39;],[&#39;Guadalajara&#39;,&#39;Guadalajara&#39;],[&#39;Guipúzcoa&#39;,&#39;Gipuzkoa&#39;],[&#39;Huelva&#39;,&#39;Huelva&#39;],[&#39;Huesca&#39;,&#39;Huesca&#39;],[&#39;Jaén&#39;,&#39;Jaén&#39;],[&#39;La Rioja&#39;,&#39;La Rioja Province&#39;],[&#39;Las Palmas&#39;,&#39;Las Palmas&#39;],[&#39;León&#39;,&#39;León&#39;],[&#39;Lleida&#39;,&#39;Lleida&#39;],[&#39;Lugo&#39;,&#39;Lugo&#39;],[&#39;Madrid&#39;,&#39;Madrid Province&#39;],[&#39;Melilla&#39;,&#39;Melilla&#39;],[&#39;Murcia&#39;,&#39;Murcia&#39;],[&#39;Málaga&#39;,&#39;Málaga&#39;],[&#39;Navarra&#39;,&#39;Navarra&#39;],[&#39;Ourense&#39;,&#39;Ourense&#39;],[&#39;Palencia&#39;,&#39;Palencia&#39;],[&#39;Pontevedra&#39;,&#39;Pontevedra&#39;],[&#39;Salamanca&#39;,&#39;Salamanca&#39;],[&#39;Santa Cruz de Tenerife&#39;,&#39;Santa Cruz de Tenerife&#39;],[&#39;Segovia&#39;,&#39;Segovia&#39;],[&#39;Sevilla&#39;,&#39;Seville&#39;],[&#39;Soria&#39;,&#39;Soria&#39;],[&#39;Tarragona&#39;,&#39;Tarragona&#39;],[&#39;Teruel&#39;,&#39;Teruel&#39;],[&#39;Toledo&#39;,&#39;Toledo&#39;],[&#39;Valencia&#39;,&#39;Valencia&#39;],[&#39;Valladolid&#39;,&#39;Valladolid&#39;],[&#39;Vizcaya&#39;,&#39;Biscay&#39;],[&#39;Zamora&#39;,&#39;Zamora&#39;],[&#39;Zaragoza&#39;,&#39;Zaragoza&#39;],[&#39;Álava&#39;,&#39;Álava&#39;],[&#39;Ávila&#39;,&#39;Ávila&#39;]]">
                                                        Spain</option>
                                                    <option value="Sweden" data-provinces="[]">Sweden</option>
                                                    <option value="Switzerland" data-provinces="[]">Switzerland</option>
                                                    <option value="United Arab Emirates" data-provinces="[[&#39;Abu Dhabi&#39;,&#39;Abu Dhabi&#39;],[&#39;Ajman&#39;,&#39;Ajman&#39;],[&#39;Dubai&#39;,&#39;Dubai&#39;],[&#39;Fujairah&#39;,&#39;Fujairah&#39;],[&#39;Ras al-Khaimah&#39;,&#39;Ras al-Khaimah&#39;],[&#39;Sharjah&#39;,&#39;Sharjah&#39;],[&#39;Umm al-Quwain&#39;,&#39;Umm al-Quwain&#39;]]">
                                                        United Arab Emirates</option>
                                                    <option value="United Kingdom" data-provinces="[[&#39;British Forces&#39;,&#39;British Forces&#39;],[&#39;England&#39;,&#39;England&#39;],[&#39;Northern Ireland&#39;,&#39;Northern Ireland&#39;],[&#39;Scotland&#39;,&#39;Scotland&#39;],[&#39;Wales&#39;,&#39;Wales&#39;]]">
                                                        United Kingdom</option>
                                                    <option value="United States" data-provinces="[[&#39;Alabama&#39;,&#39;Alabama&#39;],[&#39;Alaska&#39;,&#39;Alaska&#39;],[&#39;American Samoa&#39;,&#39;American Samoa&#39;],[&#39;Arizona&#39;,&#39;Arizona&#39;],[&#39;Arkansas&#39;,&#39;Arkansas&#39;],[&#39;Armed Forces Americas&#39;,&#39;Armed Forces Americas&#39;],[&#39;Armed Forces Europe&#39;,&#39;Armed Forces Europe&#39;],[&#39;Armed Forces Pacific&#39;,&#39;Armed Forces Pacific&#39;],[&#39;California&#39;,&#39;California&#39;],[&#39;Colorado&#39;,&#39;Colorado&#39;],[&#39;Connecticut&#39;,&#39;Connecticut&#39;],[&#39;Delaware&#39;,&#39;Delaware&#39;],[&#39;District of Columbia&#39;,&#39;Washington DC&#39;],[&#39;Federated States of Micronesia&#39;,&#39;Micronesia&#39;],[&#39;Florida&#39;,&#39;Florida&#39;],[&#39;Georgia&#39;,&#39;Georgia&#39;],[&#39;Guam&#39;,&#39;Guam&#39;],[&#39;Hawaii&#39;,&#39;Hawaii&#39;],[&#39;Idaho&#39;,&#39;Idaho&#39;],[&#39;Illinois&#39;,&#39;Illinois&#39;],[&#39;Indiana&#39;,&#39;Indiana&#39;],[&#39;Iowa&#39;,&#39;Iowa&#39;],[&#39;Kansas&#39;,&#39;Kansas&#39;],[&#39;Kentucky&#39;,&#39;Kentucky&#39;],[&#39;Louisiana&#39;,&#39;Louisiana&#39;],[&#39;Maine&#39;,&#39;Maine&#39;],[&#39;Marshall Islands&#39;,&#39;Marshall Islands&#39;],[&#39;Maryland&#39;,&#39;Maryland&#39;],[&#39;Massachusetts&#39;,&#39;Massachusetts&#39;],[&#39;Michigan&#39;,&#39;Michigan&#39;],[&#39;Minnesota&#39;,&#39;Minnesota&#39;],[&#39;Mississippi&#39;,&#39;Mississippi&#39;],[&#39;Missouri&#39;,&#39;Missouri&#39;],[&#39;Montana&#39;,&#39;Montana&#39;],[&#39;Nebraska&#39;,&#39;Nebraska&#39;],[&#39;Nevada&#39;,&#39;Nevada&#39;],[&#39;New Hampshire&#39;,&#39;New Hampshire&#39;],[&#39;New Jersey&#39;,&#39;New Jersey&#39;],[&#39;New Mexico&#39;,&#39;New Mexico&#39;],[&#39;New York&#39;,&#39;New York&#39;],[&#39;North Carolina&#39;,&#39;North Carolina&#39;],[&#39;North Dakota&#39;,&#39;North Dakota&#39;],[&#39;Northern Mariana Islands&#39;,&#39;Northern Mariana Islands&#39;],[&#39;Ohio&#39;,&#39;Ohio&#39;],[&#39;Oklahoma&#39;,&#39;Oklahoma&#39;],[&#39;Oregon&#39;,&#39;Oregon&#39;],[&#39;Palau&#39;,&#39;Palau&#39;],[&#39;Pennsylvania&#39;,&#39;Pennsylvania&#39;],[&#39;Puerto Rico&#39;,&#39;Puerto Rico&#39;],[&#39;Rhode Island&#39;,&#39;Rhode Island&#39;],[&#39;South Carolina&#39;,&#39;South Carolina&#39;],[&#39;South Dakota&#39;,&#39;South Dakota&#39;],[&#39;Tennessee&#39;,&#39;Tennessee&#39;],[&#39;Texas&#39;,&#39;Texas&#39;],[&#39;Utah&#39;,&#39;Utah&#39;],[&#39;Vermont&#39;,&#39;Vermont&#39;],[&#39;Virgin Islands&#39;,&#39;U.S. Virgin Islands&#39;],[&#39;Virginia&#39;,&#39;Virginia&#39;],[&#39;Washington&#39;,&#39;Washington&#39;],[&#39;West Virginia&#39;,&#39;West Virginia&#39;],[&#39;Wisconsin&#39;,&#39;Wisconsin&#39;],[&#39;Wyoming&#39;,&#39;Wyoming&#39;]]">
                                                        United States</option>
                                                    <option value="Vietnam" data-provinces="[]">Vietnam</option>
                                                </select>
                                            </fieldset>
                                            <fieldset class="field">
                                                <label class="label">Zip code</label>
                                                <input type="text" name="text" placeholder="">
                                            </fieldset>
                                            <button class="tf-btn btn-fill animate-hover-btn radius-3 justify-content-center">
                                                <span>Estimate</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-checkbox">
                                    <input type="checkbox" class="tf-check" id="cart-gift-checkbox">
                                    <label for="cart-gift-checkbox" class="fw-4">
                                        <span>Do you want a gift wrap?</span> Only <span class="fw-5">$5.00</span>
                                    </label>
                                </div>
                                <div class="tf-cart-totals-discounts">
                                    <h3>Subtotal</h3>
                                    <span class="total-value">$18.00 USD</span>
                                </div>
                                <p class="tf-cart-tax">
                                    Taxes and <a href="https://themesflat.co/html/ecomus/shipping-delivery.html">shipping</a> calculated at checkout
                                </p>
                                <div class="cart-checkbox">
                                    <input type="checkbox" class="tf-check" id="check-agree">
                                    <label for="check-agree" class="fw-4">
                                        I agree with the <a href="https://themesflat.co/html/ecomus/terms-conditions.html">terms and conditions</a>
                                    </label>
                                </div>
                                <div class="cart-checkout-btn">
                                    <a href="{{ route('users.checkout') }}" class="tf-btn w-100 btn-fill animate-hover-btn radius-3 justify-content-center">
                                        <span>Check out</span>
                                    </a>
                                </div>
                                <div class="tf-page-cart_imgtrust">
                                    <p class="text-center fw-6">Guarantee Safe Checkout</p>
                                    <div class="cart-list-social">
                                        <div class="payment-item">
                                            <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa">
                                                <title id="pi-visa">Visa</title>
                                                <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                </path>
                                                <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                </path>
                                                <path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path>
                                            </svg>
                                        </div>
                                        <div class="payment-item">
                                            <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal">
                                                <title id="pi-paypal">PayPal</title>
                                                <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                </path>
                                                <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                </path>
                                                <path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z">
                                                </path>
                                                <path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z">
                                                </path>
                                                <path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="payment-item">
                                            <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master">
                                                <title id="pi-master">Mastercard</title>
                                                <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
                                                </path>
                                                <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32">
                                                </path>
                                                <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                                                <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                                                <path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="payment-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="pi-american_express" viewBox="0 0 38 24" width="38" height="24">
                                                <title id="pi-american_express">American Express</title>
                                                <path fill="#000" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3Z" opacity=".07"></path>
                                                <path fill="#006FCF" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32Z">
                                                </path>
                                                <path fill="#FFF" d="M22.012 19.936v-8.421L37 11.528v2.326l-1.732 1.852L37 17.573v2.375h-2.766l-1.47-1.622-1.46 1.628-9.292-.02Z">
                                                </path>
                                                <path fill="#006FCF" d="M23.013 19.012v-6.57h5.572v1.513h-3.768v1.028h3.678v1.488h-3.678v1.01h3.768v1.531h-5.572Z">
                                                </path>
                                                <path fill="#006FCF" d="m28.557 19.012 3.083-3.289-3.083-3.282h2.386l1.884 2.083 1.89-2.082H37v.051l-3.017 3.23L37 18.92v.093h-2.307l-1.917-2.103-1.898 2.104h-2.321Z">
                                                </path>
                                                <path fill="#FFF" d="M22.71 4.04h3.614l1.269 2.881V4.04h4.46l.77 2.159.771-2.159H37v8.421H19l3.71-8.421Z">
                                                </path>
                                                <path fill="#006FCF" d="m23.395 4.955-2.916 6.566h2l.55-1.315h2.98l.55 1.315h2.05l-2.904-6.566h-2.31Zm.25 3.777.875-2.09.873 2.09h-1.748Z">
                                                </path>
                                                <path fill="#006FCF" d="M28.581 11.52V4.953l2.811.01L32.84 9l1.456-4.046H37v6.565l-1.74.016v-4.51l-1.644 4.494h-1.59L30.35 7.01v4.51h-1.768Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="payment-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-amazon">
                                                <title id="pi-amazon">Amazon</title>
                                                <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" fill-rule="nonzero" opacity=".07"></path>
                                                <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF" fill-rule="nonzero"></path>
                                                <path d="M25.26 16.23c-1.697 1.48-4.157 2.27-6.275 2.27-2.97 0-5.644-1.3-7.666-3.463-.16-.17-.018-.402.173-.27 2.183 1.504 4.882 2.408 7.67 2.408 1.88 0 3.95-.46 5.85-1.416.288-.145.53.222.248.47v.001zm.706-.957c-.216-.328-1.434-.155-1.98-.078-.167.024-.193-.148-.043-.27.97-.81 2.562-.576 2.748-.305.187.272-.047 2.16-.96 3.063-.14.138-.272.064-.21-.12.205-.604.664-1.96.446-2.29h-.001z" fill="#F90" fill-rule="nonzero"></path>
                                                <path d="M21.814 15.291c-.574-.498-.676-.73-.993-1.205-.947 1.012-1.618 1.315-2.85 1.315-1.453 0-2.587-.938-2.587-2.818 0-1.467.762-2.467 1.844-2.955.94-.433 2.25-.51 3.25-.628v-.235c0-.43.033-.94-.208-1.31-.212-.333-.616-.47-.97-.47-.66 0-1.25.353-1.392 1.085-.03.163-.144.323-.3.33l-1.677-.187c-.14-.033-.296-.153-.257-.38.386-2.125 2.223-2.766 3.867-2.766.84 0 1.94.234 2.604.9.842.82.762 1.918.762 3.11v2.818c0 .847.335 1.22.65 1.676.113.164.138.36-.003.482-.353.308-.98.88-1.326 1.2a.367.367 0 0 1-.414.038zm-1.659-2.533c.34-.626.323-1.214.323-1.918v-.392c-1.25 0-2.57.28-2.57 1.82 0 .782.386 1.31 1.05 1.31.487 0 .922-.312 1.197-.82z" fill="#221F1F"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-cart -->

        <!-- Testimonial -->
        <section class="flat-spacing-17 pt_0 flat-testimonial">
            <div class="container">
                <div class="flat-title">
                    <span class="title">Happy Clients</span>
                </div>
                <div class="wrap-carousel">
                    <div dir="ltr" class="swiper tf-sw-testimonial swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="15">
                        <div class="swiper-wrapper" id="swiper-wrapper-104766db7bf92a9a7" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 365.667px; margin-right: 30px;">
                                <div class="testimonial-item style-column">
                                    <div class="rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="heading">Best Online Fashion Site</div>
                                    <div class="text">
                                        “ I always find something stylish and affordable on this web fashion site ”
                                    </div>
                                    <div class="author">
                                        <div class="name">Robert smith</div>
                                        <div class="metas">Customer from USA</div>
                                    </div>
                                    <div class="product">
                                        <div class="image">
                                            <a href="https://themesflat.co/html/ecomus/product-detail.html">
                                                <img class=" ls-is-cached lazyloaded" data-src="images/shop/products/img-p2.png" src="./cart_files/img-p2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="content-wrap">
                                            <div class="product-title">
                                                <a href="https://themesflat.co/html/ecomus/product-detail.html">Jersey thong body</a>
                                            </div>
                                            <div class="price">$105.95</div>
                                        </div>
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class=""><i class="icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" style="width: 365.667px; margin-right: 30px;">
                                <div class="testimonial-item style-column">
                                    <div class="rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="heading">Great Selection and Quality</div>
                                    <div class="text">
                                        "I love the variety of styles and the high-quality clothing on this web fashion
                                        site."
                                    </div>
                                    <div class="author">
                                        <div class="name">Allen Lyn</div>
                                        <div class="metas">Customer from France</div>
                                    </div>
                                    <div class="product">
                                        <div class="image">
                                            <a href="https://themesflat.co/html/ecomus/product-detail.html">
                                                <img class=" ls-is-cached lazyloaded" data-src="images/shop/products/img-p3.png" src="./cart_files/img-p3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="content-wrap">
                                            <div class="product-title">
                                                <a href="https://themesflat.co/html/ecomus/product-detail.html">Cotton jersey top</a>
                                            </div>
                                            <div class="price">$7.95</div>
                                        </div>
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class=""><i class="icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="3 / 4" style="width: 365.667px; margin-right: 30px;">
                                <div class="testimonial-item style-column">
                                    <div class="rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="heading">Best Customer Service</div>
                                    <div class="text">
                                        "I finally found a web fashion site with stylish and flattering options in my
                                        size."
                                    </div>
                                    <div class="author">
                                        <div class="name">Peter Rope</div>
                                        <div class="metas">Customer from USA</div>
                                    </div>
                                    <div class="product">
                                        <div class="image">
                                            <a href="https://themesflat.co/html/ecomus/product-detail.html">
                                                <img class=" ls-is-cached lazyloaded" data-src="images/shop/products/img-p4.png" src="./cart_files/img-p4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="content-wrap">
                                            <div class="product-title">
                                                <a href="https://themesflat.co/html/ecomus/product-detail.html">Ribbed modal T-shirt</a>
                                            </div>
                                            <div class="price">From $18.95</div>
                                        </div>
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class=""><i class="icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 365.667px; margin-right: 30px;">
                                <div class="testimonial-item style-column">
                                    <div class="rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                    </div>
                                    <div class="heading">Great Selection and Quality</div>
                                    <div class="text">
                                        "I love the variety of styles and the high-quality clothing on this web fashion
                                        site."
                                    </div>
                                    <div class="author">
                                        <div class="name">Hellen Ase</div>
                                        <div class="metas">Customer from Japan</div>
                                    </div>
                                    <div class="product">
                                        <div class="image">
                                            <a href="https://themesflat.co/html/ecomus/product-detail.html">
                                                <img class=" ls-is-cached lazyloaded" data-src="images/shop/products/img-p5.png" src="./cart_files/img-p5.png" alt="">
                                            </a>
                                        </div>
                                        <div class="content-wrap">
                                            <div class="product-title">
                                                <a href="https://themesflat.co/html/ecomus/product-detail.html">Customer from Japan</a>
                                            </div>
                                            <div class="price">$16.95</div>
                                        </div>
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class=""><i class="icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <div class="nav-sw nav-next-slider nav-next-testimonial lg swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-104766db7bf92a9a7" aria-disabled="true"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-testimonial lg" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-104766db7bf92a9a7" aria-disabled="false"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-testimonial justify-content-center swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->

        <!-- product -->
        <section class="flat-spacing-17 pt_0">
            <div class="container">
                <div class="flat-title">
                    <span class="title">You may also like</span>
                </div>
                <div class="hover-sw-nav hover-sw-2">
                    <div dir="ltr" class="swiper tf-sw-product-sell wrap-sw-over swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                        <div class="swiper-wrapper" id="swiper-wrapper-eda367e0fda10aaf10" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" lazy="true" role="group" aria-label="1 / 6" style="width: 266.75px; margin-right: 30px;">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="images/products/orange-1.jpg" src="{{ asset('frontend/img/shop/orange-1.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/white-1.jpg" src="{{ asset('frontend/img/shop/white-1.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="title link">Ribbed Tank Top</a>
                                        <span class="price">$16.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Orange</span>
                                                <span class="swatch-value bg_orange-3"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/orange-1.jpg" src="{{ asset('frontend/img/shop/orange-1.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/black-1.jpg" src="{{ asset('frontend/img/shop/black-1.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/white-1.jpg" src="{{ asset('frontend/img/shop/white-1.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" lazy="true" role="group" aria-label="2 / 6" style="width: 266.75px; margin-right: 30px;">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="images/products/brown.jpg" src="{{ asset('frontend/img/shop/brown.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/purple.jpg" src="{{ asset('frontend/img/shop/purple.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="on-sale-wrap">
                                            <div class="on-sale-item">-33%</div>
                                        </div>
                                        <div class="countdown-box">
                                            <div class="js-countdown" data-timer="1007500" data-labels="d :,h :,m :,s"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item"><span class="countdown__value countdown__value--0 js-countdown__value--0">11</span><span class="countdown__label">d :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">15</span><span class="countdown__label">h :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">51</span><span class="countdown__label">m :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">06</span><span class="countdown__label">s</span></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="title link">Ribbed modal T-shirt</a>
                                        <span class="price">From $18.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/brown.jpg" src="{{ asset('frontend/img/shop/brown.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Purple</span>
                                                <span class="swatch-value bg_purple"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/purple.jpg" src="{{ asset('frontend/img/shop/purple.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Green</span>
                                                <span class="swatch-value bg_light-green"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/green.jpg" src="{{ asset('frontend/img/shop/green.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true" role="group" aria-label="3 / 6" style="width: 266.75px; margin-right: 30px;">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="images/products/white-3.jpg" src="{{ asset('frontend/img/shop/white-3.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/white-4.jpg" src="{{ asset('frontend/img/shop/white-4.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="title link">Oversized Printed T-shirt</a>
                                        <span class="price">$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true" role="group" aria-label="4 / 6" style="width: 266.75px; margin-right: 30px;">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="images/products/white-2.jpg" src="{{ asset('frontend/img/shop/white-2.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/pink-1.jpg" src="{{ asset('frontend/img/shop/pink-1.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="title">Oversized Printed T-shirt</a>
                                        <span class="price">$16.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/white-2.jpg" src="{{ asset('frontend/img/shop/white-2.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Pink</span>
                                                <span class="swatch-value bg_purple"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/pink-1.jpg" src="{{ asset('frontend/img/shop/pink-1.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/black-2.jpg" src="{{ asset('frontend/img/shop/black-2.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true" role="group" aria-label="5 / 6" style="width: 266.75px; margin-right: 30px;">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="images/products/brown-2.jpg" src="{{ asset('frontend/img/shop/brown-2.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/brown-3.jpg" src="{{ asset('frontend/img/shop/brown-3.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="title link">V-neck linen T-shirt</a>
                                        <span class="price">$114.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/brown-2.jpg" src="{{ asset('frontend/img/shop/brown-2.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/white-5.jpg" src="{{ asset('frontend/img/shop/white-5.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true" role="group" aria-label="6 / 6" style="width: 266.75px; margin-right: 30px;">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="images/products/light-green-1.jpg" src="{{ asset('frontend/img/shop/light-green-1.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="images/products/light-green-2.jpg" src="{{ asset('frontend/img/shop/light-green-2.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="https://themesflat.co/html/ecomus/view-cart.html#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="https://themesflat.co/html/ecomus/product-detail.html" class="title link">Loose Fit Sweatshirt</a>
                                        <span class="price">$10.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Light Green</span>
                                                <span class="swatch-value bg_light-green"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/light-green-1.jpg" src="{{ asset('frontend/img/shop/light-green-1.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/black-3.jpg" src="{{ asset('frontend/img/shop/black-3.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Blue</span>
                                                <span class="swatch-value bg_blue-2"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/blue.jpg" src="{{ asset('frontend/img/shop/blue.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Dark Blue</span>
                                                <span class="swatch-value bg_dark-blue"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/dark-blue.jpg" src="{{ asset('frontend/img/shop/dark-blue.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/white-6.jpg" src="{{ asset('frontend/img/shop/white-6.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Grey</span>
                                                <span class="swatch-value bg_light-grey"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="images/products/light-grey.jpg" src="{{ asset('frontend/img/shop/light-grey.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-eda367e0fda10aaf10" aria-disabled="true"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-eda367e0fda10aaf10" aria-disabled="false"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-product justify-content-center swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
                </div>
            </div>
        </section>
        <!-- /product -->

      @include('user.includes.footer')