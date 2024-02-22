<?php

/*

type: layout

name: Hero 1

position: 1

categories: Hero

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section <?php print $layout_classes; ?>">

    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />

    <div class="container mw-layout-container no-element   edit  " field="layout-hero-skin-1-<?php print $params['id'] ?>" rel="module">



        <div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                    <div class="safe-mode edit" field="header-content" rel="page">
                        <h1>
                            <span class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">Coming soon</span>
                            <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                              <span class="block text-gray-900">Data to enrich your</span>
                              <span class="block text-indigo-600">online business</span>
                            </span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua ad ad non deserunt sunt.</p>
                        <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
                            <p class="text-base font-medium text-gray-900">Sign up to get notified when it’s ready.</p>
                            <module type="newsletter" />
                            <p class="mt-3 text-sm text-gray-500">
                                We care about the protection of your data. Read our
                                <a href="#" class="font-medium text-gray-900 underline">Privacy Policy</a>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                    <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden" width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
                        <defs>
                            <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
                        <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
                    </svg>
                    <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
                        <module type="video" />
                    </div>
                </div>
            </div>
        </div>


    </div>

    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
