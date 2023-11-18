<article class="bg-primary">
    <p class="text-white text-center leading-none text-xs lg:text-base py-2.5">Get EXCLUSIVE Access Australia’s largest database of lenders | Get matched with the right loan instantly!</p>
</article>

<header>
    <nav class="container">
        <div class="flex flex-wrap justify-center md:justify-between py-6 items-center gap-y-6">
            <div class="w-fit">
                <a href="./" class="text-2xl flex gap-x-2">
                    <svg width="30" height="16" viewBox="0 0 30 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.5373 13.4015L27.2331 11.1769V3.81293C27.2331 3.14074 26.6683 2.59563 25.9719 2.59563H22.7101C22.0136 2.59563 21.4488 3.14074 21.4488 3.81293V5.59407L16.1143 0.445954C15.4982 -0.148651 14.5004 -0.148651 13.8843 0.445954L0.462042 13.4022C-0.154014 13.9961 -0.154014 14.9599 0.462042 15.5539C0.770417 15.8508 1.17373 16 1.57704 16C1.98035 16 2.38367 15.8515 2.69135 15.5539L15 3.67448L21.4488 9.8981L26.8631 15.1238L27.308 15.5532C27.924 16.1471 28.9219 16.1478 29.538 15.5532C30.154 14.9593 30.154 13.9955 29.538 13.4015H29.5373Z" fill="#5DC1A9" />
                    </svg>
                    <p class="leading-none"><span class="font-articulat-heavy">Home</span>LoanOptions</p>
                </a>
            </div>

            <ul class="w-fit hidden xl:flex flex-row gap-x-8">
                <li><a href="#home-loans" class="capitalize">Home Loans</a></li>
                <li><a href="#lenders" class="capitalize">Lenders</a></li>
                <li><a href="#why-choose-us" class="capitalize">Why Choose Us</a></li>
                <li><a href="#how-it-works" class="capitalize">How It Works</a></li>
            </ul>

            <div class="w-fit">
                <div class="flex gap-x-2">
                    <div class="w-fit">
                        <a href="" class="border-2 border-primary hover:border-secondary hover:bg-secondary duration-150 text-primary hover:text-white font-bold rounded-full h-[39px] flex items-center justify-center px-4 py-2">Chat to a broker</a>
                    </div>
                    <div class="w-fit">
                        <a href="#form" class="bg-secondary duration-150 text-white hover:bg-primary font-bold rounded-full h-[39px] flex items-center justify-center px-4 py-2">Compare Home Loans</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-16 lg:pt-40 xl:pt-56 xl:pb-40">
        <p class="text-lg md:text-2xl font-bold leading-none">Unlock all of the best<br class="md:hidden" /> offers from 75+ lenders</p>
        <h1 class="text-5xl md:text-[65px] leading-none pt-4">Find the <b>best rates</b> for<br class="hidden md:block" /> your home loan</h1>

        <form action="./src/form" method="POST" id="form" class="mt-44 md:mt-32 rounded-[40px] bg-white py-8 px-6 md:px-10 shadow-3xl min-h-[188px]">
            <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse" />

            <div id="form-tab-1">
                <div class="flex flex-wrap xl:flex-nowrap xl:flex-row xl:gap-x-10 gap-y-10">
                    <div class="w-full md:w-1/2 xl:w-[30%] md:px-2 xl:px-0">
                        <p class="text-xl text-primary font-bold mb-4">Loan Type</p>
                        <div class="bg-[#F0F0F6] h-[40px] w-full flex justify-center rounded-full p-0.5 shadow-4xl">
                            <div class="w-1/2">
                                <input type="radio" id="loanType1" name="loanType" value="Refinance" checked>
                                <label for="loanType1" class="flex justify-center items-center text-center leading-none h-full w-full rounded-full font-bold text-secondary">
                                    Refinance
                                </label>
                            </div>
                            <div class="w-1/2">
                                <input type="radio" id="loanType2" name="loanType" value="New Home Loan">
                                <label for="loanType2" class="flex justify-center items-center text-center leading-none h-full w-full rounded-full font-bold text-secondary">
                                    New Home Loan
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 xl:w-[30%] md:px-2 xl:px-0">
                        <p class="text-xl text-primary font-bold mb-6">What is the Loan Balance?</p>
                        <div class="range">
                            <div class="sliderThumb"></div>
                            <div class="progressBar"></div>
                            <input type="range" id="borrowSlider" name="borrowAmount" min="5000" max="2000000" value="5000" step="5000">
                        </div>

                        <p class="borrowAmount text-xl font-semibold text-primary mt-5 text-center">$<span id="borrowAmount">5000</span></p>
                    </div>

                    <div class="w-full md:w-1/2 xl:w-[30%] md:px-2 xl:px-0">
                        <p class="text-xl text-primary font-bold mb-4">How will this property be used?</p>
                        <div class="bg-[#F0F0F6] h-[40px] w-full flex justify-center rounded-full p-0.5 shadow-4xl">
                            <div class="w-1/2">
                                <input type="radio" id="propertyUse1" name="propertyUse" value="Owner Occupier" checked>
                                <label for="propertyUse1" class="flex justify-center items-center text-center leading-none h-full w-full rounded-full font-bold text-secondary">
                                    Owner Occupier
                                </label>
                            </div>
                            <div class="w-1/2">
                                <input type="radio" id="propertyUse2" name="propertyUse" value="Investment">
                                <label for="propertyUse2" class="flex justify-center items-center text-center leading-none h-full w-full rounded-full font-bold text-secondary">
                                    Investment
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 xl:w-[10%] md:px-2 xl:px-0">
                        <button id="show-form-tab-2" type="button" class="bg-primary rounded-full h-[40px] text-white px-4 flex items-center justify-center font-bold md:mt-10 w-full">Continue</button>
                    </div>
                </div>
            </div>

            <div id="form-tab-2">
                <div class="flex flex-wrap xl:flex-nowrap xl:flex-row xl:gap-x-10 gap-y-10">
                    <div class="w-full md:w-1/2 xl:w-[30%] md:px-2 xl:px-0">
                        <p class="text-xl text-primary font-bold mb-6">What is your name?</p>
                        <input type="text" id="fullname" placeholder="Enter your name" name="fullname" class="text-2xl text-primary" />
                        <small id="fullname_error" class="hidden text-sm text-red-600">Please enter full name.</small>
                    </div>

                    <div class="w-full md:w-1/2 xl:w-[30%] md:px-2 xl:px-0">
                        <p class="text-xl text-primary font-bold mb-6">What is your mobile number?</p>
                        <input type="tel" id="phone_number" placeholder="Enter your mobile number" name="phone_number" class="text-2xl text-primary" />
                        <small id="phonenumber_error" class="text-sm text-red-600">Please enter valid phone number.</small>
                    </div>

                    <div class="w-full md:w-1/2 xl:w-[30%] md:px-2 xl:px-0">
                        <p class="text-xl text-primary font-bold mb-6">What is your email address?</p>
                        <input type="email" id="email" placeholder="Enter your email address" name="email" class="text-2xl text-primary" />
                        <small id="email_error" class="text-sm text-red-600">Please enter valid email address.</small>
                    </div>

                    <div class="w-full md:w-1/2 xl:w-[10%] md:px-2 xl:px-0">
                        <button class="bg-primary rounded-full h-[40px] text-white px-4 flex items-center justify-center font-bold md:mt-10 w-full" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</header>

<section class="lenders bg-white py-16 md:py-24" id="lenders">
    <div class="container">
        <p class="text-center uppercase text-gray-500 font-bold">Save Time & Money</p>
        <h3 class="text-4xl text-center font-bold text-black pt-2 pb-5">Access to 75+ all in one place!</h3>

        <div class="xl:w-9/12 mx-auto">
            <div id="banks-slider">
                <?php for ($i = 1; $i < 19; $i++) : ?>
                    <div><?= renderImg('bank-' . $i . '.png', 'logo') ?></div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary text-white py-16 md:py-20 lg:py-28" id="home-loans">
    <div class="container">
        <div class="flex flex-wrap xl:items-center gap-y-5">
            <div class="w-full lg:w-1/2 order-2 lg:order-1 lg:px-3">
                <?= renderImg('about.jpg', 'lib', 'rounded-[40px]') ?>
            </div>
            <div class="w-full lg:w-1/2 order-1 lg:order-2 lg:px-3">
                <h3 class="text-4xl md:text-[65px] lg:text-5xl xl:text-[65px] font-thin leading-none">Everything about <span class="font-articulat-heavy">home loan</span> options</h3>

                <article class="description font-light text-base md:text-xl pt-5 md:pt-10 lg:pt-5 xl:pt-10">
                    <p class="text-2xl md:text-3xl font-bold">Reasons for a home loan.</p>

                    <p>A home loan isn't just about purchasing a property; it's an investment in your future. Whether you're a first-time homebuyer looking for a place to call your own or a seasoned homeowner wanting to upgrade, a home loan can make your dreams a reality.</p>

                    <p class="text-2xl md:text-3xl font-bold">The importance of research.</p>

                    <p>Researching your home loan options is essential for making informed decisions. Understanding the different types of loans, interest rates, and terms will empower you to choose the option that aligns with your financial goals and budget.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-16 md:py-28" id="why-choose-us">
    <div class="container">
        <div class="flex flex-wrap lg:flex-nowrap lg:flex-row lg:gap-x-4 gap-y-5">
            <div class="w-full lg:w-1/3">
                <article class="shadow-3xl rounded-[40px] h-full p-10">
                    <div class="h-[56px] w-[56px] rounded-full bg-primary flex justify-center items-center">
                        <svg width="21" height="29" viewBox="0 0 21 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.54177 14.4417C8.65642 13.5465 7.9223 12.632 7.347 11.5291C6.49538 9.89568 6.13763 8.60488 6.0719 6.85103L8.34229 6.77192L4.82704 1.14159C4.70023 0.944969 4.40938 0.95544 4.29769 1.16078L1 7.02787L3.30181 6.94759C3.3815 9.11678 3.84396 10.8055 4.88929 12.81C5.53149 14.0415 6.33483 15.0822 7.29173 16.0909" stroke="#5DC1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.857 27.9722C17.857 25.6162 17.2841 23.7461 16.1538 21.578C15.5232 20.3693 14.7373 19.3437 13.8037 18.3525" stroke="#5DC1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.5562 20.0005C12.4171 20.8777 13.1332 21.7793 13.6962 22.8596C14.6183 24.628 15.0854 26.0671 15.0854 27.9722" stroke="#5DC1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.95796 27.9722C5.95796 26.0671 6.42565 24.6279 7.34707 22.8596C8.28304 21.0644 9.64074 19.6643 11.3841 18.2792C13.4329 16.651 15.0378 14.9519 16.1547 12.81C17.1994 10.8066 17.6613 9.11908 17.7416 6.95107L19.9439 7.02785L16.6462 1.16076C16.5345 0.955422 16.2437 0.944369 16.1169 1.14157L12.6016 6.7719L14.9715 6.8545C14.9052 8.60718 14.548 9.89624 13.6964 11.5291C12.7604 13.3242 11.4027 14.7244 9.65935 16.1094C7.61058 17.7376 6.00566 19.4368 4.88878 21.5786C3.75853 23.7467 3.18555 25.6168 3.18555 27.9728" stroke="#5DC1A9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <p class="text-2xl md:text-3xl font-bold pt-8 pb-6">Flexibility</p>

                    <p class="text-base md:text-xl">We provide individuals with the financial flexibility needed to make homeownership more affordable. By choosing the right loan type, borrowers can tailor their monthly payments to fit within their budget.</p>
                </article>
            </div>

            <div class="w-full lg:w-1/3">
                <article class="shadow-3xl rounded-[40px] h-full p-10">
                    <div class="h-[56px] w-[56px] rounded-full bg-primary flex justify-center items-center">
                        <?= renderImg('door.png', 'icons') ?>
                    </div>

                    <p class="text-2xl md:text-3xl font-bold pt-8 pb-6">Access</p>

                    <p class="text-base md:text-xl">Home Loan Options open the door to homeownership for a wide range of individuals and families. Mortgages are an essential tool to achieve this significant life goal.</p>
                </article>
            </div>

            <div class="w-full lg:w-1/3">
                <article class="shadow-3xl rounded-[40px] h-full p-10">
                    <div class="h-[56px] w-[56px] rounded-full bg-primary flex justify-center items-center">
                        <svg width="23" height="28" viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10.5714V11.4286C2 13.796 6.25255 15.7143 11.5 15.7143C16.7475 15.7143 21 13.796 21 11.4286V10.5714M2 15.7143V16.5714C2 18.9389 6.25255 20.8571 11.5 20.8571C16.7475 20.8571 21 18.9389 21 16.5714V15.7143M2 20.8571V21.7143C2 24.0817 6.25255 26 11.5 26C16.7475 26 21 24.0817 21 21.7143V20.8571M18.8522 9C20.1945 8.26091 21 7.31575 21 6.28571C21 3.91878 16.7467 2 11.5 2C6.25329 2 2 3.91878 2 6.28571C2 8.57699 5.98572 10.4483 11 10.5656" stroke="#5DC1A9" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <p class="text-2xl md:text-3xl font-bold pt-8 pb-6">Investment</p>

                    <p class="text-base md:text-xl">
                        As you make mortgage payments, you're gradually building equity in your home. Over time, this equity can be leveraged for other financial goals, such as home improvements, education, or retirement.
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary text-white pt-16 md:pt-20 xl:py-40 relative">
    <div class="container">
        <article class="w-full xl:w-5/12">
            <p class="text-2xl md:text-4xl font-bold">Make that dream home a reality.</p>

            <h3 class="text-4xl md:text-[64px] font-bold leading-none py-6">More Options. <br /> More Freedom.</h3>

            <article class="description text-base md:text-xl">
                <p>Your home is more than just a vision; it's a place where your aspirations take root, where cherished memories are made, and where your future unfolds. At Home Loan Options, we're here to help you transform that dream into a living reality.</p>

                <p>With our expertise in home loans, personalized solutions, and unwavering commitment, we'll guide you every step of the way on your journey to making your dream home a reality. Imagine waking up each day in a place that truly feels like home – it's not just a dream; it's within reach.</p>
            </article>
        </article>
    </div>

    <div class="flex justify-end">
        <?= renderImg('building.png', 'lib', 'xl:absolute right-0 bottom-0') ?>
    </div>
</section>

<section id="how-it-works" class="bg-white py-16 md:py-24">
    <div class="container">
        <h3 class="text-center text-4xl md:text-[65px] leading-none">More <strong>Control</strong></h3>
        <p class="text-base md:text-xl text-center font-semibold pt-5 md:pt-7">We make it simple for you. There are three easy steps to follow when applying.</p>

        <div class="flex flex-wrap gap-y-6 pt-16">
            <div class="w-full lg:w-5/12 px-3">
                <article class="shadow-3xl rounded-2xl md:rounded-[40px] h-full pt-8 md:pt-16 md:pb-10 px-6 md:px-16 lg:px-6 xl:px-16 text-center flex flex-col justify-center items-center overflow-hidden">
                    <p class="uppercase text-gray-500 text-sm md:text-base">Step 1</p>
                    <p class="text-3xl md:text-[50px] leading-none font-bold">Input</p>

                    <p class="text-gray-700 text-sm md:text-lg py-6 grow">
                        Input your information in our AI options tool and it will calculate and present you with the best options available!
                        Remember, the more information you provide, the more accurate your loan options will be.
                    </p>

                    <?= renderImg('step-1.png', 'lib') ?>
                </article>
            </div>

            <div class="w-full lg:w-7/12 px-3">
                <article class="shadow-3xl rounded-2xl md:rounded-[40px] h-full pt-8 md:pt-16 md:pb-10 px-6 md:px-16 lg:px-6 xl:px-16 text-center flex flex-col justify-center items-center overflow-hidden">
                    <p class="uppercase text-gray-500 text-sm md:text-base">Step 2</p>
                    <p class="text-3xl md:text-[50px] leading-none font-bold">Compare</p>

                    <p class="text-gray-700 text-sm md:text-lg py-6 grow">
                        Let our AI options tool do the work instantly! No waiting around! With over 75 Lenders, our AI options tool will curate and personalise the best results based on your priorities.
                    </p>

                    <?= renderImg('step-2.jpg', 'lib') ?>
                </article>
            </div>

            <div class="w-full px-3">
                <article class="shadow-3xl rounded-2xl md:rounded-[40px] h-full pt-8 md:pt-16 md:pb-10 px-6 md:px-16 lg:px-6 xl:px-16 text-center xl:text-start flex flex-col lg:flex-row justify-center items-center overflow-hidden">
                    <div class="w-full xl:w-5/12 lg:px-3">
                        <p class="uppercase text-gray-500 text-sm md:text-base">Step 3</p>
                        <p class="text-3xl md:text-[50px] leading-none font-bold">Choose</p>

                        <article class="text-gray-700 text-sm md:text-lg py-6 grow description">
                            <p>Now the easy part! Pick from the list and if you need further clarity, the platform can provide you with a granular level of detail to help find what you are looking for.</p>

                            <p>For a more personal touch our Customer Service Consultants are available to talk to you.</p>
                        </article>
                    </div>
                    <div class="w-full xl:w-7/12 lg:px-3">
                        <?= renderImg('step-3.jpg', 'lib', 'w-full') ?>
                    </div>

                </article>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary">
    <div class="container">
        <div class="flex flex-wrap justify-center md:justify-between py-10 md:py-16 items-center gap-y-5">
            <div class="w-fit">
                <a href="./" class="text-2xl flex gap-x-2 text-white">
                    <svg width="30" height="16" viewBox="0 0 30 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M29.5373 13.4015L27.2331 11.1769V3.81293C27.2331 3.14074 26.6683 2.59563 25.9719 2.59563H22.7101C22.0136 2.59563 21.4488 3.14074 21.4488 3.81293V5.59407L16.1143 0.445954C15.4982 -0.148651 14.5004 -0.148651 13.8843 0.445954L0.462042 13.4022C-0.154014 13.9961 -0.154014 14.9599 0.462042 15.5539C0.770417 15.8508 1.17373 16 1.57704 16C1.98035 16 2.38367 15.8515 2.69135 15.5539L15 3.67448L21.4488 9.8981L26.8631 15.1238L27.308 15.5532C27.924 16.1471 28.9219 16.1478 29.538 15.5532C30.154 14.9593 30.154 13.9955 29.538 13.4015H29.5373Z" fill="#5DC1A9" />
                    </svg>
                    <p class="leading-none"><span class="font-articulat-heavy">Home</span>LoanOptions</p>
                </a>
            </div>

            <div class="w-fit">
                <div class="flex gap-x-2">
                    <div class="w-fit">
                        <a href="" class="border-2 border-white hover:border-secondary hover:bg-secondary duration-150 text-white hover:text-white font-bold rounded-full h-[39px] flex items-center justify-center px-4 py-2">Chat to a broker</a>
                    </div>
                    <div class="w-fit">
                        <a href="#form" class="bg-secondary duration-150 text-white hover:bg-primary font-bold rounded-full h-[39px] flex items-center justify-center px-4 py-2">Compare Home Loans</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-t-2 m-0">

        <ul class="w-fit flex flex-col md:flex-row md:gap-x-8 py-10 md:py-16 gap-y-4">
            <li><a href="#home-loans" class="capitalize text-white">Home Loans</a></li>
            <li><a href="#lenders" class="capitalize text-white">Lenders</a></li>
            <li><a href="#why-choose-us" class="capitalize text-white">Why Choose Us</a></li>
            <li><a href="#how-it-works" class="capitalize text-white">How It Works</a></li>
        </ul>
    </div>
</section>