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
                    <x-checkout.summary-item>
                    </x-checkout.summary-item>
                </dl>

            </div>
        </section>
    </div>
</x-app-layout>