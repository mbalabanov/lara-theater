<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LARÁ Theater</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg width="8%" height="8%" viewBox="0 0 470 360" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M300.6,297.9C295.7,299.7 290.2,297.2 288.5,292.2C286.7,287.3 289.2,281.8 294.2,280.1L297,279.1L293.9,270.5L291.1,271.5C286.2,273.3 280.7,270.8 279,265.8C277.2,260.9 279.7,255.4 284.7,253.7L287.5,252.7L283.7,242.1C270.2,247 255.2,240 250.3,226.5L103.1,280.1C108,293.6 101,308.6 87.5,313.5L91.3,324.1L94.1,323.1C99,321.3 104.5,323.8 106.2,328.8C108,333.7 105.5,339.2 100.5,340.9L97.7,341.9L100.8,350.5L103.6,349.5C108.5,347.7 114,350.2 115.7,355.2C117.5,360.1 115,365.6 110,367.3L107.2,368.3L111,378.9C124.5,374 139.5,381 144.4,394.5L291.6,340.9C286.7,327.4 293.7,312.4 307.2,307.5L303.4,296.9L300.6,297.9Z" style="fill:rgb(240,86,99);fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M144.4,396.7C143.5,396.7 142.6,396.1 142.3,395.2C140.1,389.2 135.7,384.4 130,381.7C124.2,379 117.8,378.7 111.8,380.9C111.2,381.1 110.6,381.1 110.1,380.8C109.6,380.5 109.1,380.1 108.9,379.5L105.1,368.9C104.7,367.7 105.3,366.5 106.4,366L109.2,365C111,364.3 112.5,363 113.3,361.3C114.1,359.5 114.2,357.6 113.5,355.8C112.8,354 111.5,352.5 109.8,351.7C108,350.9 106.1,350.8 104.3,351.5L101.5,352.5C100.3,352.9 99.1,352.3 98.6,351.2L95.5,342.6C95.3,342 95.3,341.4 95.6,340.9C95.9,340.4 96.3,339.9 96.9,339.7L99.7,338.7C101.5,338 103,336.7 103.8,335C104.6,333.2 104.7,331.3 104,329.5C103.3,327.7 102,326.2 100.3,325.4C98.5,324.6 96.6,324.5 94.8,325.2L92,326.2C90.8,326.6 89.6,326 89.1,324.9L85.2,314.3C84.8,313.1 85.4,311.9 86.5,311.4C92.5,309.2 97.3,304.8 100,299.1C102.7,293.3 103,286.9 100.8,280.9C100.4,279.7 101,278.5 102.1,278L249.3,224.4C249.9,224.2 250.5,224.2 251,224.5C251.5,224.8 252,225.2 252.2,225.8C254.4,231.8 258.8,236.6 264.5,239.3C270.3,242 276.7,242.3 282.7,240.1C283.3,239.9 283.9,239.9 284.4,240.2C284.9,240.5 285.4,240.9 285.6,241.5L289.4,252.1C289.8,253.3 289.2,254.5 288.1,255L285.3,256C281.6,257.4 279.6,261.5 281,265.3C282.4,269 286.5,271 290.3,269.6L293.1,268.6C293.7,268.4 294.3,268.4 294.8,268.7C295.3,269 295.8,269.4 296,270L299.1,278.6C299.5,279.8 298.9,281 297.8,281.5L295,282.5C291.3,283.9 289.3,288 290.7,291.8C292.1,295.5 296.2,297.5 300,296.1L302.8,295.1C304,294.7 305.2,295.3 305.7,296.4L309.6,307C309.8,307.6 309.8,308.2 309.5,308.7C309.2,309.2 308.8,309.7 308.2,309.9C302.2,312.1 297.4,316.5 294.7,322.2C292,328 291.7,334.4 293.9,340.4C294.3,341.6 293.7,342.8 292.6,343.3L145.4,396.9C145,396.7 144.7,396.7 144.4,396.7ZM120,375.1C124.1,375.1 128.1,376 131.9,377.8C138.1,380.7 142.9,385.6 145.7,391.7L288.9,339.6C285.2,326.2 291.8,312 304.4,306.3L302,299.8L301.3,300.1C298.4,301.2 295.2,301 292.3,299.7C289.5,298.4 287.3,296 286.2,293.1C284,287 287.1,280.3 293.2,278.1L293.9,277.8L292.3,273.4L291.6,273.7C285.5,275.9 278.8,272.8 276.6,266.7C275.5,263.8 275.7,260.6 277,257.7C278.3,254.9 280.7,252.7 283.6,251.6L284.3,251.3L282,244.8C275.5,246.6 268.7,246.1 262.5,243.2C256.3,240.3 251.5,235.4 248.7,229.3L105.5,281.4C107.3,287.9 106.8,294.7 103.9,300.9C101,307.1 96.1,311.9 90,314.7L92.3,321.2L93,320.9C95.9,319.8 99.1,320 102,321.3C104.8,322.6 107,325 108.1,327.9C109.2,330.8 109,334 107.7,336.9C106.4,339.7 104,341.9 101.1,343L100.4,343.3L102,347.7L102.7,347.4C105.6,346.3 108.8,346.5 111.7,347.8C114.5,349.1 116.7,351.5 117.8,354.4C118.9,357.3 118.7,360.5 117.4,363.4C116.1,366.2 113.7,368.4 110.8,369.5L110.1,369.8L112.4,376.3C114.9,375.4 117.4,375.1 120,375.1Z" style="fill:rgb(80,45,26);fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(1.72974,-0.629533,0.629533,1.72974,-326.109,-251.887)">
                            <rect x="131.4" y="271.5" width="131.7" height="78" style="fill:rgb(244,154,165);"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M148.7,371.3C148.5,371.3 148.2,371.2 148,371.2C147.6,371 147.3,370.7 147.2,370.3L120.5,297C120.2,296.2 120.6,295.3 121.5,295L134.8,290.2C135.6,289.9 136.5,290.3 136.8,291.2C137.1,292 136.7,292.9 135.8,293.2L124,297.5L149.6,367.8L270.4,323.8L244.8,253.5L161,283.9C160.2,284.2 159.3,283.8 159,282.9C158.7,282.1 159.1,281.2 160,280.9L245.4,249.8C245.8,249.7 246.2,249.7 246.6,249.9C247,250.1 247.3,250.4 247.4,250.8L274.1,324.1C274.4,324.9 274,325.8 273.1,326.1L149.3,371.2C149.1,371.2 148.9,371.3 148.7,371.3Z" style="fill:rgb(80,45,26);fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M144.5,289.8C143.8,289.8 143.2,289.4 143,288.7C142.7,287.9 143.1,287 144,286.7L150.7,284.3C151.5,284 152.4,284.4 152.7,285.3C153,286.1 152.6,287 151.7,287.3L145,289.7C144.9,289.7 144.7,289.8 144.5,289.8Z" style="fill:rgb(80,45,26);fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M188.4,305.6L174.2,309.4L164.2,298.7C162.7,297 159.9,298.1 159.8,300.3L159.1,314.9L145.8,321.1C143.7,322.1 143.8,325 146,325.8L159.7,331L161.5,345.6C161.8,347.8 164.6,348.7 166,346.9L175.2,335.5L189.6,338.3C191.8,338.7 193.5,336.3 192.2,334.4L184.2,322.1L191.3,309.3C192.4,307.4 190.6,305.1 188.4,305.6Z" style="fill:rgb(80,45,26);fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M243.6,285.6L229.4,289.4L219.4,278.7C217.9,277 215.1,278.1 215,280.3L214.3,294.9L201,301.1C198.9,302.1 199,305 201.2,305.8L214.9,311L216.7,325.6C217,327.8 219.8,328.7 221.2,326.9L230.4,315.5L244.8,318.3C247,318.7 248.7,316.3 247.4,314.4L239.4,302.1L246.5,289.3C247.6,287.3 245.8,285 243.6,285.6Z" style="fill:rgb(80,45,26);fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M334.9,377.7C329.7,377.7 325.4,373.5 325.4,368.2C325.4,363 329.6,358.7 334.9,358.7L337.9,358.7L337.9,349.6L334.9,349.6C329.7,349.6 325.4,345.4 325.4,340.1C325.4,334.9 329.6,330.6 334.9,330.6L337.9,330.6L337.9,319.3C323.5,319.3 311.8,307.6 311.8,293.2L155.1,293.2C155.1,307.6 143.4,319.3 129,319.3L129,330.6L132,330.6C137.2,330.6 141.5,334.8 141.5,340.1C141.5,345.3 137.3,349.6 132,349.6L129,349.6L129,358.7L132,358.7C137.2,358.7 141.5,362.9 141.5,368.2C141.5,373.4 137.3,377.7 132,377.7L129,377.7L129,389C143.4,389 155.1,400.7 155.1,415.1L311.8,415.1C311.8,400.7 323.5,389 337.9,389L337.9,377.7L334.9,377.7Z" style="fill:rgb(255,208,103);fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M311.8,417.3L155.1,417.3C153.9,417.3 152.9,416.3 152.9,415.1C152.9,402 142.2,391.3 129.1,391.3C127.9,391.3 126.9,390.3 126.9,389.1L126.9,377.8C126.9,376.6 127.9,375.6 129.1,375.6L132.1,375.6C136.1,375.6 139.3,372.4 139.3,368.4C139.3,364.4 136.1,361.2 132.1,361.2L129.1,361.2C127.9,361.2 126.9,360.2 126.9,359L126.9,349.9C126.9,348.7 127.9,347.7 129.1,347.7L132.1,347.7C136.1,347.7 139.3,344.5 139.3,340.5C139.3,336.5 136.1,333.3 132.1,333.3L129.1,333.3C127.9,333.3 126.9,332.3 126.9,331.1L126.9,319.8C126.9,318.6 127.9,317.6 129.1,317.6C142.2,317.6 152.9,306.9 152.9,293.8C152.9,292.6 153.9,291.6 155.1,291.6L311.8,291.6C313,291.6 314,292.6 314,293.8C314,306.9 324.7,317.6 337.8,317.6C339,317.6 340,318.6 340,319.8L340,331.1C340,332.3 339,333.3 337.8,333.3L334.8,333.3C330.8,333.3 327.6,336.5 327.6,340.5C327.6,344.5 330.8,347.7 334.8,347.7L337.8,347.7C339,347.7 340,348.7 340,349.9L340,359C340,360.2 339,361.2 337.8,361.2L334.8,361.2C330.8,361.2 327.6,364.4 327.6,368.4C327.6,372.4 330.8,375.6 334.8,375.6L337.8,375.6C339,375.6 340,376.6 340,377.8L340,389C340,390.2 339,391.2 337.8,391.2C324.7,391.2 314,401.9 314,415C314,416.3 313,417.3 311.8,417.3ZM157.2,412.8L309.6,412.8C310.7,399 321.8,387.9 335.6,386.8L335.6,379.9L334.8,379.9C328.3,379.9 323.1,374.6 323.1,368.2C323.1,361.7 328.4,356.5 334.8,356.5L335.6,356.5L335.6,351.8L334.8,351.8C328.3,351.8 323.1,346.5 323.1,340.1C323.1,333.7 328.4,328.4 334.8,328.4L335.6,328.4L335.6,321.5C321.8,320.4 310.7,309.3 309.6,295.5L157.2,295.5C156.1,309.3 145,320.4 131.2,321.5L131.2,328.4L132,328.4C138.5,328.4 143.7,333.7 143.7,340.1C143.7,346.5 138.4,351.8 132,351.8L131.2,351.8L131.2,356.5L132,356.5C138.5,356.5 143.7,361.8 143.7,368.2C143.7,374.7 138.4,379.9 132,379.9L131.2,379.9L131.2,386.8C145.1,387.9 156.2,399 157.2,412.8Z" style="fill:rgb(80,45,26);fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <rect x="167.6" y="315.2" width="131.7" height="78" style="fill:rgb(244,216,168);"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M299.3,394.8L167.6,394.8C166.7,394.8 166,394.1 166,393.2L166,315.2C166,314.3 166.7,313.6 167.6,313.6L181.8,313.6C182.7,313.6 183.4,314.3 183.4,315.2C183.4,316.1 182.7,316.8 181.8,316.8L169.2,316.8L169.2,391.6L297.7,391.6L297.7,316.8L208.5,316.8C207.6,316.8 206.9,316.1 206.9,315.2C206.9,314.3 207.6,313.6 208.5,313.6L299.3,313.6C300.2,313.6 300.9,314.3 300.9,315.2L300.9,393.2C300.9,394.1 300.2,394.8 299.3,394.8Z" style="fill:rgb(80,45,26);fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M198.7,316.8L191.6,316.8C190.7,316.8 190,316.1 190,315.2C190,314.3 190.7,313.6 191.6,313.6L198.7,313.6C199.6,313.6 200.3,314.3 200.3,315.2C200.3,316.1 199.6,316.8 198.7,316.8Z" style="fill:rgb(80,45,26);fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M226.7,346.6L212.1,345.3L206.4,331.8C205.5,329.7 202.6,329.7 201.7,331.8L196,345.3L181.4,346.6C179.1,346.8 178.2,349.6 179.9,351.1L191,360.7L187.7,375C187.2,377.2 189.6,378.9 191.5,377.8L204.1,370.2L216.7,377.8C218.6,379 221,377.2 220.5,375L217.2,360.7L228.3,351.1C229.9,349.6 229,346.8 226.7,346.6Z" style="fill:rgb(80,45,26);fill-rule:nonzero;"/>
                        </g>
                        <g transform="matrix(1.84074,0,0,1.84074,-152.526,-410.545)">
                            <path d="M285.5,346.6L270.9,345.3L265.2,331.8C264.3,329.7 261.4,329.7 260.5,331.8L254.8,345.3L240.2,346.6C237.9,346.8 237,349.6 238.7,351.1L249.8,360.7L246.5,375C246,377.2 248.4,378.9 250.3,377.8L262.9,370.2L275.5,377.8C277.4,379 279.8,377.2 279.3,375L276,360.7L287.1,351.1C288.7,349.6 287.7,346.8 285.5,346.6Z" style="fill:rgb(80,45,26);fill-rule:nonzero;"/>
                        </g>
                    </svg>
                </div>
                <div class="flex justify-center mt-3">
                    <h1 class="ml-3">LARÁ Theater</h1>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1">

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="flex justify-center mt-3">
                                     <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Welcome to the LARÁ Theater</h2>
                                </div>
                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    LARÁ is a blend of timeless charm and innovative design in the heart of the city. Our revolutionary stage and state-of-the-art acoustics guarantee immersive performances that captivate and inspire. Our diverse program celebrates all facets of theater, with inclusivity at our core. At LARÁ, we don't just offer performances, we craft unforgettable journeys. Join us and experience the magic of theater like never before.
                                </p>
                                <div class="flex justify-center mt-3">
                                    <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Reserve a Ticket</a>
                                </div>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">At Luminary Theatre, we are not just putting up a show; we are crafting an unforgettable journey. We believe in the magic of the stage, the power of stories, and the unique bond between performers and audience. When the curtains rise, we promise not only a performance but an experience that lingers long after the final applause fades.</p>

                                <p class="mt-4 mb-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">Come, lose yourself in the world of stories, and become a part of the Luminary Theatre family. Let's keep the magic of theater alive together.</p>
                                <img src="img/lara-theater-stage.jpg" alt="The LARÁ Theater" class="mt-2 rounded">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        This is not a real theater. It is an application created using Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
