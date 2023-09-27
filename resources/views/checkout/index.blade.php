<x-app-layout>
    <div class="fixed left-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-900" aria-hidden="true"></div>
    <div class="fixed right-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-800" aria-hidden="true"></div>

    <div class="relative mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2 gap-x-16 gap-x-8">
        <section
            aria-labelledby = "summary-heading"
            class="bg-tertiary-800 py-12 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-tranparent lg:px-0 lg:pb-24 lg:px-0 lg:pb-24 lg:pt-0"
        >
            <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:pg-0">
                <dl>
                    <dt class="text-lg font-medium text-primary-100">Resume</dt>
                </dl>

                <x-checkout.product-list>
                    <x-checkout.product-item 
                        name="High Wall Tote"
                        price="210,00"
                        :features="[
                            'white and Black',
                            '15L'
                        ]"
                    >
                    </x-checkout.product-item>
                </x-checkout.porduct-list>     
                
                <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-sm font-medium">
                    <x-checkout.summary-item title="Sbtotal" value="570,00"/>
                    <x-checkout.summary-item title="Frete" value="50,00"/>
                    <x-checkout.summary-item title="Total" value="620,00" :isLast="true"/>
                </dl>

            </div>
        </section>

        <section 
            aria-labelledby="payment-and-shipping-heading"
            class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:mx-auto lg:w-full lg:max-lg lg:pb-24 lg:pt-0"
        >
            <form>
                <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                    <div>
                        <x-section-title title="Informações de Contato" />

                        <div class="mt-6">
                            <x-input-label for="email-address" value="Email Address" />
                            <div class="mt-1">
                                <x-text-input type="email" id="email-address" name="email-address" autocomplete="email" placeholder="Digite seu email"/>
                            </div>
                        </div>

                        <div class="mt-10">
                            <x-section-title title="Detalhe do Pagamento" />

                            <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
                                <div class="col-span-3 sm:col-sqpn-4">
                                    <x-input-label for="card-number" value="Número do Cartão" />
                                    <div class="mt-1">
                                        <x-text-input type="text" id="card-number" name="card-number" placeholder="Numero do Cartão" />
                                    </div>
                                </div>

                                <div class="col-span-2 sm:col-span-3">
                                    <x-input-label for="expiration-date" value="Data Expiracao" />
                                    <div class="mt-1">
                                        <x-text-input type="text" id="expiration-date" name="expiration-date" placeholder="MM / AA" />
                                    </div>

                                    <div class="col-span-2 sm:col-span-3">
                                        <x-input-label for="cvc" value="CVC" />
                                        <div class="mt-1">
                                            <x-text-input type="text" id="cvc" name="cvc" placeholder="CVC" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </section>
    </div>
    
</x-app-layout>