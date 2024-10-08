<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
        <!-- Ajouter Material Icons pour les icônes -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="box-border" style="color: #000;
font-family: Aspekta Variable,sans-serif;
font-size: 16px;
line-height: 150%;">
    <!---- Header ----->
    <header class="fixed w-full h-20 bg-gradient-to-b from-[#070d13b8] to-[#070d133d] backdrop-blur-lg flex items-center justify-between px-5 min-[1170px]:px-20 z-20 ">
        <div class="flex items-center justify-between w-full">
            <div class="left">
                <a href="/" aria-current="page" class="g-nav-brand-link logo-light flex items-center">
                    <img class="h-[5rem] w-auto" src="https://www.alhambra-web.com/assets/360_F_277496258_5IhE5FT8VoYdByzr0FUjkTBz968ea6zV-removebg-preview-DjTx7Qcd.png" alt="Logo" />
                    <h1 class="text-white text-2xl font-extralight">Almbra web</h1>
                </a>
            </div>
            <div class="hidden min-[1170px]:flex text-white space-x-10 tracking-[-.008em]">
                <button class="bg-[#ffffff1f] px-[1vw] py-[0.1vw] rounded-full">Home</button>
                <button>Services</button>
                <button>About</button>
                <button>Work</button>
                <button>Contact</button>
                <button>Resources</button>
                <div class="flex items-center justify-center">
                    <div class="bg-[#ffffff1f] w-[1.5px] h-[1.25rem]"></div>
                </div>
                <div class="text-white">
                    <button class="bg-[#0070cc] px-5 py-3 rounded-full">Request a Proposal</button>
                </div>
            </div>
            <div class="min-[1170px]:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden min-[1170px]:hidden bg-[#070d133d] absolute w-full top-20 left-0 z-10 ">
            <div class="flex flex-col items-center py-4 space-y-4 text-white">
                <button class="bg-[#ffffff1f] w-full text-left px-5 py-3 rounded-full">Home</button>
                <button class="w-full text-left px-5 py-3">Services</button>
                <button class="w-full text-left px-5 py-3">About</button>
                <button class="w-full text-left px-5 py-3">Work</button>
                <button class="w-full text-left px-5 py-3">Contact</button>
                <button class="w-full text-left px-5 py-3">Resources</button>
                <button class="bg-[#0070cc] w-full text-left px-5 py-3 rounded-full">Request a Proposal</button>
            </div>
        </div>
    </header>

    <section id="1" class="bg-[#0d1f3f] text-white h-screen w-screen overflow-hidden">
        <div class="absolute inset-0 flex items-end space-y-20 py-[4rem] px-20 lg:flex justify-between" style="background: linear-gradient(180deg, rgba(2,0,36,0) 20%, rgba(0,0,0,1) 100%);">
            <div class="grid grid-flow-row gap-10 w-full">
                <div class="flex flex-col items-start">
                    <h1 class="text-[4rem] font-semibold tracking-[0.02em] leading-[5rem]">
                        Award-Winning<br>Marketing Agency
                    </h1>
                </div>
                <div class="bg-[#ffffff1f] w-[15rem] h-[0.1rem]"></div>
                <div class="text-white w-full flex flex-col sm:flex-row items-start">
                    <button class="bg-[#008afc] px-5 py-3 rounded-full mb-4 lg:mb-0 lg:mr-4 blink">
                        Request a Proposal
                    </button>
            
                    <button class="px-10 py-3 rounded-full flex items-center justify-between cursor-pointer z-10">
                        <span>Let's Discuss</span>
                        <span class="ml-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                <title>arrow-right</title>
                                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="border-b border-[#ffffff29] hover:border-[#fff6] w-[8rem] h-[.09375rem] px-10 py-5 absolute"></span>
                    </button>
                </div>
            </div>
            <div class="leading-[1.56em] text-[17px]  tracking-[-.01em] space-y-4 lg:inline hidden">
                <h2>Brand Vision</h2>
                <h3>[/brænd-ˈvɪʒn/] noun</h3>
                <p class="w-[30rem]">
                    We are Brand Vision, an award-winning Marketing and Web Design Agency that will offer you transparency and creativity.
                </p>
                <p class="lg:w-[30rem]">
                    Our goal is to nurture your vision and provide innovative, custom solutions for all your marketing needs.  We provide a range of customized services, including branding, website design & development, SEO, marketing consultation, and more.
                </p>
            </div>
        </div>
        <div class="w-full h-screen" style="pointer-events: none;">
            <img class="w-full h-full object-contain px-[6.25rem] py-[2.4rem] lg:block hidden" src="https://cdn.prod.website-files.com/630bc5625ada9a1e2dbb10a6/66e48e7b92b08da6d3a56f16_Frame%202147223283.png" loading="eager" alt="" />
            <img class="w-screen h-screen object-contain  lg:hidden block" src="https://cdn.prod.website-files.com/630bc5625ada9a1e2dbb10a6/66e49370359b9fd3a0554b79_iPhone%20Pro%20Max%20-%20430px%20x%20932px.png" loading="eager" alt="" />
        </div>
    </section>

    <section id="2" class="bg-[#f2f3f5] h-full w-full flex items-center justify-center lg:hidden inline">
        <div class="text-center leading-[1.56em] text-[17px] tracking-[-.01em] space-y-4 pt-[80px]">
            <h2>Brand Vision</h2>
            <h3>[/brænd-ˈvɪʒn/] noun</h3>
            <p class="w-[30rem] mx-auto">
                We are Brand Vision, an award-winning Marketing and Web Design Agency that will offer you transparency and creativity.
            </p>
            <p class="w-[30rem] mx-auto">
                Our goal is to nurture your vision and provide innovative, custom solutions for all your marketing needs. We provide a range of customized services, including branding, website design & development, SEO, marketing consultation, and more.
            </p>
        </div>
    </section>
    
    <section id="3" class="bg-[#f9fafb] min-h-[100vh] relative z-2" style="padding: 200px 30px; @media (min-width: 1024px) { padding: 200px 80px; }">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 place-items-start ">
            <div class="flex flex-col justify-start items-start max-w-[280px] lg:sticky top-[200px] gap-8 ">
                <div class="flex justify-center items-center h-[1.75rem] rounded-[1.5rem] border border-[#ffffff29] bg-[#eef0f3] px-3 relative">
                    <p class="text-[0.75rem]">OUR SERVICES</p>
                </div>
                <div>
                    <p class="text-[1.5rem] lg:w-full w-[200%]">Creative solutions crafted to help you achieve the perfect digital presence</p>
                </div>
                <div>
                    <button class="flex justify-center items-center h-[3rem] rounded-[1.5rem] bg-[#008afc] text-[#f2f5f7] z-4 tracking-tight text-[1rem] leading-[1em] px-5 transition-colors duration-200">Request a Proposal</button>
                </div>
                <div>
                    <button class="rounded-full flex items-center justify-between cursor-pointer z-10">
                        <span>Contact Us</span>
                        <span class="ml-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                <title>arrow-right</title>
                                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="border-b border-[#070d1366] hover:border-black w-[8rem] h-[.09375rem] px-10 py-5 absolute"></span>
                    </button>
                </div>
            </div>
            <div class="col-span-2 flex flex-col gap-4">
                <div class="text-[3.5rem] font-semibold leading-[1.2em] tracking-[-0.02em] mb-10">
                    <h1 class="lg:block hidden">How can we help you?</h1>
                </div>
                <!---Bloc 1---->
                <div class="flex flex-col gap-4 w-full relative">
                    <div class="flex flex-col gap-10 pt-[64px] px-[64px] bg-white rounded-[12px] shadow-[0_0_24px_#00223d05] w-full p-[40px]">
                        <div class="flex flex-col gap-6">
                            <div class="flex gap-[18px] items-stretch">
                                <div class="bg-[#008afc] w-[2px] h-[36px]"></div>
                                <h2>
                                    <a class="text-inherit text-decoration-none tracking-[-0.006em] text-[2rem] font-semibold leading-[1.2em] cursor-pointer">Web Design</a>
                                </h2>
                            </div>
                            <div class="flex flex-col gap-6">
                                <p class="tracking-[-0.008em] text-[1.125rem] font-normal leading-[1.56em]">
                                    Project at Brand Vision stands out as unique, receiving unparalleled attention and care. Our team, composed of award-winning web designers and web developers, is renowned for its ability to craft visually striking websites. These sites are not only a feast for the eyes but also excel in functionality, effectively meeting their intended objectives.
                                </p>
                                <p class="tracking-[-0.008em] text-[1.125rem] font-normal leading-[1.56em]">
                                    Project at Brand Vision stands out as unique, receiving unparalleled attention and care. Our team, composed of award-winning web designers and web developers, is renowned for its ability to craft visually striking websites. These sites are not only a feast for the eyes but also excel in functionality, effectively meeting their intended objectives.
                                </p>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <a href="https://www.brandvm.com/sub-services/wordpress-web-design" class="max-w-full inline-block cursor-pointer text-inherit text-decoration-none">
                                    <h5 class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">WordPress</h5>
                                </a>
                                <a href="https://www.brandvm.com/sub-services/wordpress-web-design" class="max-w-full inline-block cursor-pointer text-inherit text-decoration-none">
                                    <h5 class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">Webflow</h5>
                                </a>
                                <a href="https://www.brandvm.com/sub-services/wordpress-web-design" class="max-w-full inline-block cursor-pointer text-inherit text-decoration-none">
                                    <h5 class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">UI/UX</h5>
                                </a>
                                <div class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">Custom Design</div>
                                <div class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">Testing</div>
                            </div>
                            <div class="mt-auto bg-[#212a310f] rounded-[2px] w-full h-[1px]"></div>
                            <div class="flex flex-wrap justify-between items-center w-full gap-6">
                                <button class="py-3 rounded-full flex items-center justify-between cursor-pointer z-10">
                                    <span>Let's Discuss</span>
                                    <span class="ml-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                            <title>arrow-right</title>
                                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="border-b border-[#ffffff29] hover:border-[#fff6] w-[8rem] h-[0.09375rem] px-10 py-5 absolute"></span>
                                </button>
                                <a class="flex justify-center items-center text-uppercase text-[12px] font-semibold transition-colors text-[#5d7d98]" href="http://">View Our Work</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Bloc 2---->
                <div class="flex flex-col gap-4 w-full relative">
                    <div class="flex flex-col gap-10 pt-[64px] px-[64px] bg-white rounded-[12px] shadow-[0_0_24px_#00223d05] w-full p-[40px]">
                        <div class="flex flex-col gap-6">
                            <div class="flex gap-[18px] items-stretch">
                                <div class="bg-[#1cb96e] w-[2px] h-[36px]"></div>
                                <h2>
                                    <a class="text-inherit text-decoration-none tracking-[-0.006em] text-[2rem] font-semibold leading-[1.2em] cursor-pointer">SEO</a>
                                </h2>
                            </div>
                            <div class="flex flex-col gap-6">
                                <p class="tracking-[-0.008em] text-[1.125rem] font-normal leading-[1.56em]">
                                    Optimizing your online presence requires a strategic approach, and our SEO experts ensure your website not only climbs the search rankings but also engages your target audience effectively. With a deep understanding of search algorithms and user behavior, we tailor SEO solutions that drive results, helping your brand stand out an
                                </p>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <img class="w-full" src="https://cdn.prod.website-files.com/630bc5625ada9a1e2dbb10a6/65e89880dfb807c2eec418ab_Frame%203656665.svg" alt="">
                            </div>
                            <div class="mt-auto bg-[#212a310f] rounded-[2px] w-full h-[1px]"></div>
                            <div class="flex flex-wrap justify-between items-center w-full gap-6">
                                <button class=" py-3 rounded-full flex items-center justify-between cursor-pointer z-10">
                                    <span>See plans</span>
                                    <span class="ml-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                            <title>arrow-right</title>
                                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="border-b border-[#ffffff29] hover:border-[#fff6] w-[8rem] h-[0.09375rem] px-10 py-5 absolute"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                                <!---Bloc 3---->
                                <div class="flex flex-col gap-4 w-full relative">
                                    <div class="flex flex-col gap-10 pt-[64px] px-[64px] bg-white rounded-[12px] shadow-[0_0_24px_#00223d05] w-full p-[40px]">
                                        <div class="flex flex-col gap-6">
                                            <div class="flex gap-[18px] items-stretch">
                                                <div class="bg-orange w-[2px] h-[36px]"></div>
                                                <h2>
                                                    <a class="text-inherit text-decoration-none tracking-[-0.006em] text-[2rem] font-semibold leading-[1.2em] cursor-pointer">Visual Branding</a>
                                                </h2>
                                            </div>
                                            <div class="flex flex-col gap-6">
                                                <p class="tracking-[-0.008em] text-[1.125rem] font-normal leading-[1.56em]">
                                                    Shaping your brand's visual identity requires precision, creativity, and expertise, all of which our award-winning team delivers. From designing logos to crafting cohesive color palettes, we ensure your brand communicates effectively across all channels. With a focus on creating a distinct and lasting impression, we help your business stand out in the competitive marketplace, leaving a memorable mark wherever your audience encounters it.
                                                </p>
                                            </div>
                                            <div class="flex flex-wrap gap-1 capitalize">
                                                <a href="https://www.brandvm.com/sub-services/wordpress-web-design" class="max-w-full inline-block cursor-pointer text-inherit text-decoration-none">
                                                    <h5 class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3 ">logo design</h5>
                                                </a>
                                                <a href="https://www.brandvm.com/sub-services/wordpress-web-design" class="max-w-full inline-block cursor-pointer text-inherit text-decoration-none">
                                                    <h5 class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">typography</h5>
                                                </a>
                                                <a href="https://www.brandvm.com/sub-services/wordpress-web-design" class="max-w-full inline-block cursor-pointer text-inherit text-decoration-none">
                                                    <h5 class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">iconography</h5>
                                                </a>
                                                <div class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">brand style guide</div>
                                                <div class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">colour palette</div>
                                                <div class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">textures and patterns</div>
                                            </div>
                                            <div class="mt-auto bg-[#212a310f] rounded-[2px] w-full h-[1px]"></div>
                                            <div class="flex flex-wrap justify-between items-center w-full gap-6">
                                                <button class="py-3 rounded-full flex items-center justify-between cursor-pointer z-10">
                                                    <span>Let's Discuss</span>
                                                    <span class="ml-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                                            <title>arrow-right</title>
                                                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                                                <path d="M5 12h14"></path>
                                                                <path d="M12 5l7 7-7 7"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <span class="border-b border-[#ffffff29] hover:border-[#fff6] w-[8rem] h-[0.09375rem] px-10 py-5 absolute"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!---Bloc 4---->
                                <div class="flex flex-col gap-4 w-full relative">
                                    <div class="flex flex-col gap-10 pt-[64px] px-[64px] bg-white rounded-[12px] shadow-[0_0_24px_#00223d05] w-full p-[40px]">
                                        <div class="flex flex-col gap-6">
                                            <div class="flex gap-[18px] items-stretch">
                                                <div class="bg-[#5200ff] w-[2px] h-[36px]"></div>
                                                <h2>
                                                    <a class="text-inherit text-decoration-none tracking-[-0.006em] text-[2rem] font-semibold leading-[1.2em] cursor-pointer">Brand Research & Strategy</a>
                                                </h2>
                                            </div>
                                            <div class="flex flex-col gap-6">
                                                <p class="tracking-[-0.008em] text-[1.125rem] font-normal leading-[1.56em]">
                                                    Comprehensive brand research and strategy are the foundations of effective branding. Through in-depth analysis of competitors, market trends, and target audiences, we inform strategic decision-making to shape your brand’s future. Our approach includes developing brand personas, tone, voice, and mission statements, ensuring consistent and impactful communication that aligns seamlessly with your business objectives.
                                                </p>
                                            </div>
                                            <div class="flex flex-wrap gap-1 capitalize">
                                                <a href="https://www.brandvm.com/sub-services/wordpress-web-design" class="max-w-full inline-block cursor-pointer text-inherit text-decoration-none">
                                                    <h5 class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3 ">
                                                    brand positioning</h5>
                                                </a>
                                                <a href="https://www.brandvm.com/sub-services/wordpress-web-design" class="max-w-full inline-block cursor-pointer text-inherit text-decoration-none">
                                                    <h5 class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">competitor analysis</h5>
                                                </a>
                                                <a href="https://www.brandvm.com/sub-services/wordpress-web-design" class="max-w-full inline-block cursor-pointer text-inherit text-decoration-none">
                                                    <h5 class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">brand messaging framework</h5>
                                                </a>
                                                <div class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">brand voice and tone</div>
                                                <div class="bg-[#eef0f3] border border-[#ffffff29] rounded-[1.5rem] flex items-center justify-center h-[1.75rem] px-3">brand value and promise</div>
                                            </div>
                                            <div class="mt-auto bg-[#212a310f] rounded-[2px] w-full h-[1px]"></div>
                                            <div class="flex flex-wrap justify-between items-center w-full gap-6">
                                                <button class="py-3 rounded-full flex items-center justify-between cursor-pointer z-10">
                                                    <span>Let's Discuss</span>
                                                    <span class="ml-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                                            <title>arrow-right</title>
                                                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                                                <path d="M5 12h14"></path>
                                                                <path d="M12 5l7 7-7 7"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <span class="border-b border-[#ffffff29] hover:border-[#fff6] w-[8rem] h-[0.09375rem] px-10 py-5 absolute"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

<!-- Bloc 5 -->
<div class="flex flex-col gap-4 w-full relative grid grid-cols-1 md:grid-cols-2">
    <div class="flex flex-col gap-10 pt-[64px] px-[64px] bg-white rounded-[12px] shadow-[0_0_24px_#00223d05] w-full p-[40px]">
        <div class="flex flex-col gap-6">
            <div class="flex gap-[18px] items-stretch">
                <div class="bg-[#10ffc6] w-[2px] h-[36px]"></div>
                <h2>
                    <a class="text-inherit text-decoration-none tracking-[-0.006em] text-[2rem] font-semibold leading-[1.2em] cursor-pointer">Consultation & Audit</a>
                </h2>
            </div>
            <p class="tracking-[-0.008em] text-[1.125rem] font-normal leading-[1.56em]">
                Tailored solutions for your business through one-on-one personalized sessions.
            </p>
            <div class="mt-auto bg-[#212a310f] rounded-[2px] w-full h-[1px]"></div>
            <div class="flex flex-wrap justify-between items-center w-full gap-6">
                <a href="http://" class="py-3 rounded-full flex items-center justify-between cursor-pointer z-10">
                    <span>Learn more</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="flex flex-col gap-10 pt-[64px] px-[64px] bg-white rounded-[12px] shadow-[0_0_24px_#00223d05] w-full p-[40px]">
        <div class="flex flex-col gap-6">
            <div class="flex gap-[18px] items-stretch">
                <div class="bg-[#008afc] w-[2px] h-[36px]"></div>
                <h2>
                    <a class="text-inherit text-decoration-none tracking-[-0.006em] text-[2rem] font-semibold leading-[1.2em] cursor-pointer">Graphic Design</a>
                </h2>
            </div>
            <p class="tracking-[-0.008em] text-[1.125rem] font-normal leading-[1.56em]">
                Impactful marketing visuals and illustrations that elevate brand recognition.
            </p>
            <div class="mt-auto bg-[#212a310f] rounded-[2px] w-full h-[1px]"></div>
            <div class="flex flex-wrap justify-between items-center w-full gap-6">
                <a href="http://" class="py-3 rounded-full flex items-center justify-between cursor-pointer z-10">
                    <span>Learn more</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="flex flex-col gap-10 pt-[64px] px-[64px] bg-white rounded-[12px] shadow-[0_0_24px_#00223d05] w-full p-[40px]">
        <div class="flex flex-col gap-6">
            <div class="flex gap-[18px] items-stretch">
                <div class="bg-[#ff1ba4] w-[2px] h-[36px]"></div>
                <h2>
                    <a class="text-inherit text-decoration-none tracking-[-0.006em] text-[2rem] font-semibold leading-[1.2em] cursor-pointer">Content Marketing</a>
                </h2>
            </div>
            <p class="tracking-[-0.008em] text-[1.125rem] font-normal leading-[1.56em]">
                Unique content that adds value, boosts organic reach, and engages your audience.
            </p>
            <div class="mt-auto bg-[#212a310f] rounded-[2px] w-full h-[1px]"></div>
            <div class="flex flex-wrap justify-between items-center w-full gap-6">
                <a href="http://" class="py-3 rounded-full flex items-center justify-between cursor-pointer z-10">
                    <span>Learn more</span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="flex flex-col gap-10 pt-[64px] px-[64px] bg-white rounded-[12px] shadow-[0_0_24px_#00223d05] w-full p-[40px]">
        <div class="flex flex-col gap-6">
            <div class="flex gap-[18px] items-stretch">
                <div class="bg-[#94ef00] w-[2px] h-[36px]"></div>
                <h2>
                    <a class="text-inherit text-decoration-none tracking-[-0.006em] text-[2rem] font-semibold leading-[1.2em] cursor-pointer">User Interface & User Experience</a>
                </h2>
            </div>
            <p class="tracking-[-0.008em] text-[1.125rem] font-normal leading-[1.56em]">
                User-centric designs ensuring intuitive and satisfying digital experiences.
            </p>
            <div class="mt-auto bg-[#212a310f] rounded-[2px] w-full h-[1px]"></div>
            <div class="flex flex-wrap justify-between items-center w-full gap-6">
                <a href="http://" class="py-3 rounded-full flex items-center justify-between cursor-pointer z-10">
                    <span>Learn more</span>
                </a>
            </div>
        </div>
    </div>
</div>
        </div>
    </section>

    <section id="4" class="bg-[#070d13] text-white w-full pt-[7.5rem] pb-[7.5rem]">
        <div class="relative z-24 flex flex-col w-full max-w-[120rem] min-h-[1rem] mx-auto px-[4rem] gap-16">
            <div class="flex flex-col justify-start items-center w-full gap-6">
                <div class="flex justify-center items-center h-[1.75rem] rounded-[1.5rem] border border-[#ffffff29] bg-[#eef0f31f] px-3">
                    <div class="text-white uppercase font-semibold text-[1rem]  lg:text-[0.75rem] leading-[1em]">Clients & Achievements</div>
                </div>
                <div class="text-white font-semibold lg:text-[3.5rem] text-[3rem] leading-[1.2em] text-center">Our Recent Clients</div>
            </div>
            <div class="relative z-2 w-full">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2">
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                    <div>
                        <a href="/case-studies/flipp" class="flex justify-center items-center aspect-[216.12/145.31] bg-[#1f1f1f] rounded-md transition-opacity duration-200 opacity-100">
                            <img src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/6631621d59af3ec65fa65476_uc.png" alt="Flipp" class="award-section-client-logo"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-[#f2f5f71f] w-full h-px min-h-px"></div>
            <div class="flex flex-wrap justify-center items-center gap-x-16 gap-y-8 service-award-list">
                <a href="https://www.awwwards.com/brandvision/" target="_blank" class="service-award-link w-inline-block opacity-70 transition-opacity duration-300 ease-in-out cursor-pointer">
                    <img src="https://cdn.prod.website-files.com/630bc5625ada9a1e2dbb10a6/661d47db67d58ced2f661103_Awwwards%20Logo.svg" loading="lazy" alt="" class="service-award-image filter saturate-50 brightness-200 h-16 max-h-16 inline-block align-middle max-w-full">
                </a>
                <a href="https://clutch.co/profile/brand-vision-1#reviews" target="_blank" class="service-award-link w-inline-block opacity-70 transition-opacity duration-300 ease-in-out cursor-pointer">
                    <img src="https://cdn.prod.website-files.com/630bc5625ada9a1e2dbb10a6/661d47dcfa8d01daa6b85a7a_Clutch%20Logo.svg" loading="lazy" alt="" class="service-award-image filter saturate-50 brightness-200 h-16 max-h-16 inline-block align-middle max-w-full">
                </a>
                <a href="https://g.co/kgs/qXiLS2M" target="_blank" class="service-award-link w-inline-block opacity-70 transition-opacity duration-300 ease-in-out cursor-pointer">
                    <img src="https://cdn.prod.website-files.com/630bc5625ada9a1e2dbb10a6/661d47dc8bd93e0c3ceb94df_Generic%20Award.svg" loading="lazy" alt="" class="service-award-image filter saturate-50 brightness-200 h-16 max-h-16 inline-block align-middle max-w-full">
                </a>
                <a href="https://g.co/kgs/qXiLS2M" target="_blank" class="service-award-link w-inline-block opacity-70 transition-opacity duration-300 ease-in-out cursor-pointer">
                    <img src="https://cdn.prod.website-files.com/630bc5625ada9a1e2dbb10a6/661d47db1a93a19ceda6299b_Google%20Reviews%20Logo.svg" loading="lazy" alt="" class="service-award-image filter saturate-50 brightness-200 h-16 max-h-16 inline-block align-middle max-w-full">
                </a>
                <a href="https://upcity.com/profiles/brand-vision-marketing" target="_blank" class="service-award-link w-inline-block opacity-70 transition-opacity duration-300 ease-in-out cursor-pointer">
                    <img src="https://cdn.prod.website-files.com/630bc5625ada9a1e2dbb10a6/661d47db73a1d5d1c49ab6c5_Upcity%20Logo.svg" loading="lazy" alt="" class="service-award-image filter saturate-50 brightness-200 h-16 max-h-16 inline-block align-middle max-w-full">
                </a>
            </div>
        </div>
    </section>
    <section id="5"class="bg-[#f9fafb] min-h-[100vh] relative z-2" style="padding: 200px 30px; @media (min-width: 1024px) { padding: 200px 80px; }">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 place-items-start">
            <div class="flex flex-col justify-start items-start max-w-[280px] lg:sticky top-[200px] gap-8 ">
                <div class="flex justify-center items-center h-[1.75rem] rounded-[1.5rem] border border-[#ffffff29] bg-[#eef0f3] px-3 relative">
                    <p class="text-[0.75rem]">FEATURED WORK</p>
                </div>
                <div>
                    <p class="text-[1.5rem] lg:w-screen w-[200%]">Some work we are proud of</p>
                </div>
                <div>
                    <p class="text-[1rem] lg:w-full w-[100%] text-[#070d137a]">Our goal is to nurture your vision and provide innovative, custom solutions for all your marketing needs.</p>
                </div>
                <div>
                    <button class="flex justify-center items-center h-[3rem] rounded-[1.5rem] bg-[#008afc] text-[#f2f5f7] z-4 tracking-tight text-[1rem] leading-[1em] px-5 transition-colors duration-200">Request a Proposal</button>
                </div>
                <div>
                    <button class="rounded-full flex items-center justify-between cursor-pointer z-10">
                        <span>See all work</span>
                        <span class="ml-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                <title>arrow-right</title>
                                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="border-b border-[#070d1366] hover:border-black w-[8rem] h-[.09375rem] px-10 py-5 absolute"></span>
                    </button>
                </div>
            </div>
            <div class="col-span-2 flex flex-col gap-4 h-full">
                <div class="text-[3.5rem] font-semibold leading-[1.2em] tracking-[-0.02em] mb-10">
                    <h1 class="hidden lg:block">Featured Projects</h1>
                </div>
                
                <!-- Bloc 1 -->
                <div class="flex flex-col gap-4 w-full relative pr-20 mb-10">
                    <div class="flex flex-col gap-10 rounded-[12px] shadow-[0_0_24px_#00223d05] w-full">
                        <div class="relative w-full"> <!-- Hauteur fixe ajoutée -->
                            <img class="w-full h-full object-cover" src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/660b301ac894a15467ca5ce7_Dribbble_Shot.webp" alt="">
                            <div class="absolute inset-0 z-2 flex flex-col justify-end items-start p-[6.875rem_2.5rem_2.5rem] bg-gradient-to-t from-black to-transparent">
                                <div class="grid grid-cols-2 w-full">
                                    <div class="flex flex-col gap-4 max-w-[33.75rem]">
                                        <div class="flex flex-wrap gap-1 items-center">
                                            <div class="flex items-center justify-center border border-[#ffffff29] rounded-[1.5rem] h-[1.75rem] px-3">
                                                <div class="uppercase text-[0.75rem] font-semibold leading-[1em] text-white">Website</div>
                                            </div>
                                        </div>
                                        <div class="text-[2rem] font-semibold leading-[1.2em] text-white">Flipp</div>
                                        <p class="text-[1rem] font-normal leading-[1.56em] text-white lg:block hidden">Web Design and Development for a Professional Business</p>
                                    </div>
                                    <div class="flex flex-col max-w-[33.75rem] items-end justify-end">
                                        <a href="/case-studies/flipp" class="flex items-center justify-center h-[3rem] bg-[#008afc] text-[#f2f5f7] rounded-[1.5rem] px-5 transition-colors duration-200 ease-in-out ">
                                            <span class="hidden md:block relative z-4 text-[1rem] font-medium leading-[1em]">Case Study</span>
                                            <div class="w-[30px] lg:w-[18px] h-[24px] ml-2 relative z-4 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <title>arrow-right</title>
                                                    <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                                        <path d="M5 12h14"></path>
                                                        <path d="M12 5l7 7-7 7"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bloc 2 -->
                <div class="flex flex-col gap-4 w-full relative pr-20 mb-10">
                    <div class="flex flex-col gap-10 rounded-[12px] shadow-[0_0_24px_#00223d05] w-full">
                        <div class="relative w-full"> <!-- Hauteur fixe ajoutée -->
                            <img class="w-full h-full object-cover" src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/65f9ebe04c23d445dcb3dd8d_65f9e44caaa111ed222d33d4_657b4b1f32a4b17e2e73c10a_Desktop%20(1).jpg" alt="">
                            <div class="absolute inset-0 z-2 flex flex-col justify-end items-start p-[6.875rem_2.5rem_2.5rem] bg-gradient-to-t from-black to-transparent">
                                <div class="grid grid-cols-2 w-full">
                                    <div class="flex flex-col gap-4 max-w-[33.75rem]">
                                        <div class="flex flex-wrap gap-1 items-center">
                                            <div class="flex items-center justify-center border border-[#ffffff29] rounded-[1.5rem] h-[1.75rem] px-3">
                                                <div class="uppercase text-[0.75rem] font-semibold leading-[1em] text-white">Website</div>
                                            </div>
                                        </div>
                                        <div class="text-[2rem] font-semibold leading-[1.2em] text-white">Aequitas Partners</div>
                                        <p class="text-[1rem] font-normal leading-[1.56em] text-white lg:block hidden">Web Design and Development for a Professional Business</p>
                                    </div>
                                    <div class="flex flex-col max-w-[33.75rem] items-end justify-end">
                                        <a href="/case-studies/flipp" class="flex items-center justify-center h-[3rem] bg-[#008afc] text-[#f2f5f7] rounded-[1.5rem] px-5 transition-colors duration-200 ease-in-out ">
                                            <span class="hidden md:block relative z-4 text-[1rem] font-medium leading-[1em]">Case Study</span>
                                            <div class="w-[30px] lg:w-[18px] h-[24px] ml-2 relative z-4 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <title>arrow-right</title>
                                                    <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                                                        <path d="M5 12h14"></path>
                                                        <path d="M12 5l7 7-7 7"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section id="6" class="bg-white mt-[10rem] pb-30">
        <div class="relative z-24 mx-auto max-w-[120rem] min-h-[1rem] md:px-16">
            <div class="flex flex-col justify-between items-end w-full gap-6 lg:grid lg:grid-cols-2 px-[3rem] lg:px-0">
                <div class="flex flex-col justify-start items-start gap-8">
                    <div class="flex items-center justify-center h-[1.75rem] border border-[#ffffff29] rounded-[1.5rem] px-3">
                        <div class="text-xs font-semibold uppercase leading-[1em] tracking-[0.01em] px-[1rem] py-[0.5rem] bg-[#f9fafb] rounded-full">Testimonials</div>
                    </div>
                    <div class="text-[3.5rem] font-semibold leading-[1.2em] tracking-[-0.02em]">Hear From Our Clients</div>
                </div>
                <div class="flex flex-col justify-start items-end gap-8">
                    <div class="flex flex-wrap justify-center items-center gap-10 ">
                        <img class="max-w-[17rem] h-[4rem] mb-0" src="https://www.dimeda.fr/wp-content/uploads/2020/04/gmbstars-1080x675.png" alt="">
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-10 w-full h-auto">
                <div class="relative overflow-hidden mx-auto w-full h-auto">
                    <div class=" py-[4rem] px-5 w-full h-full">
                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5">
                            <!-- Bloc d'avis 1 -->
                            <div class="p-6 border rounded-lg bg-white grid grid-rows-2 gap-10 font-normal leading-[1.56em]">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 40 40" fill="none" class="_0301-testimonial-icon w-[2.5rem] h-[2.5rem]"><path d="M22.5087 31.1091V21.2652L28.205 8H33.4217L28.8046 20.2448H36V31.1091H22.5087ZM5 31.1091V21.2652L10.7563 8H15.913L11.3559 20.2448H18.4913V31.1091H5Z" fill="black" fill-opacity="0.08"></path></svg>
                                </div>
                                <div>
                                    <p class="text-lg ">Communication was very simple and easy with Brand Vision.</p>
                                </div>
                                <div>
                                    <p class="mt-2">Brand Vision was able to successfully produce a requirement-accurate website and even deliver an animated logo as a sign of good gesture. The team was highly responsive, and internal stakeholders were particularly impressed with their deep knowledge of Website development.</p>
                                </div>
                                <div class="flex space-x-4 w-full h-full items-center justify-content-center">
                                    <div>
                                        <img class="h-[40px] w-[40px]" src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/64baee432c8f1603971cfe98_63828ae6c7e9ad1d4d84352a_Frame%203655963.webp" alt="">
                                    </div>
                                    <div>
                                        <p class="mt-4 font-bold">Jim Willis</p>
                                        <p>CEO, KINSHASA LIFESTYLE</p>
                                    </div>
                                </div>
                            </div>
                             <!-- Bloc d'avis 1 -->
                             <div class="p-6 border rounded-lg bg-white grid grid-rows-2 gap-10 font-normal leading-[1.56em]">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 40 40" fill="none" class="_0301-testimonial-icon w-[2.5rem] h-[2.5rem]"><path d="M22.5087 31.1091V21.2652L28.205 8H33.4217L28.8046 20.2448H36V31.1091H22.5087ZM5 31.1091V21.2652L10.7563 8H15.913L11.3559 20.2448H18.4913V31.1091H5Z" fill="black" fill-opacity="0.08"></path></svg>
                                </div>
                                <div>
                                    <p class="text-lg ">Communication was very simple and easy with Brand Vision.</p>
                                </div>
                                <div>
                                    <p class="mt-2">Brand Vision was able to successfully produce a requirement-accurate website and even deliver an animated logo as a sign of good gesture. The team was highly responsive, and internal stakeholders were particularly impressed with their deep knowledge of Website development.</p>
                                </div>
                                <div class="flex space-x-4 w-full h-full items-center justify-content-center">
                                    <div>
                                        <img class="h-[40px] w-[40px]" src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/64baee432c8f1603971cfe98_63828ae6c7e9ad1d4d84352a_Frame%203655963.webp" alt="">
                                    </div>
                                    <div>
                                        <p class="mt-4 font-bold">Jim Willis</p>
                                        <p>CEO, KINSHASA LIFESTYLE</p>
                                    </div>
                                </div>
                            </div>
                             <!-- Bloc d'avis 1 -->
                             <div class="p-6 border rounded-lg bg-white grid grid-rows-2 gap-10 font-normal leading-[1.56em]">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 40 40" fill="none" class="_0301-testimonial-icon w-[2.5rem] h-[2.5rem]"><path d="M22.5087 31.1091V21.2652L28.205 8H33.4217L28.8046 20.2448H36V31.1091H22.5087ZM5 31.1091V21.2652L10.7563 8H15.913L11.3559 20.2448H18.4913V31.1091H5Z" fill="black" fill-opacity="0.08"></path></svg>
                                </div>
                                <div>
                                    <p class="text-lg ">Communication was very simple and easy with Brand Vision.</p>
                                </div>
                                <div>
                                    <p class="mt-2">Brand Vision was able to successfully produce a requirement-accurate website and even deliver an animated logo as a sign of good gesture. The team was highly responsive, and internal stakeholders were particularly impressed with their deep knowledge of Website development.</p>
                                </div>
                                <div class="flex space-x-4 w-full h-full items-center justify-content-center">
                                    <div>
                                        <img class="h-[40px] w-[40px]" src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/64baee432c8f1603971cfe98_63828ae6c7e9ad1d4d84352a_Frame%203655963.webp" alt="">
                                    </div>
                                    <div>
                                        <p class="mt-4 font-bold">Jim Willis</p>
                                        <p>CEO, KINSHASA LIFESTYLE</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Bloc d'avis 1 -->
                            <div class="p-6 border rounded-lg bg-white grid grid-rows-2 gap-10 font-normal leading-[1.56em]">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 40 40" fill="none" class="_0301-testimonial-icon w-[2.5rem] h-[2.5rem]"><path d="M22.5087 31.1091V21.2652L28.205 8H33.4217L28.8046 20.2448H36V31.1091H22.5087ZM5 31.1091V21.2652L10.7563 8H15.913L11.3559 20.2448H18.4913V31.1091H5Z" fill="black" fill-opacity="0.08"></path></svg>
                                </div>
                                <div>
                                    <p class="text-lg ">Communication was very simple and easy with Brand Vision.</p>
                                </div>
                                <div>
                                    <p class="mt-2">Brand Vision was able to successfully produce a requirement-accurate website and even deliver an animated logo as a sign of good gesture. The team was highly responsive, and internal stakeholders were particularly impressed with their deep knowledge of Website development.</p>
                                </div>
                                <div class="flex space-x-4 w-full h-full items-center justify-content-center">
                                    <div>
                                        <img class="h-[40px] w-[40px]" src="https://cdn.prod.website-files.com/630d4d1c4a462569dd189855/64baee432c8f1603971cfe98_63828ae6c7e9ad1d4d84352a_Frame%203655963.webp" alt="">
                                    </div>
                                    <div>
                                        <p class="mt-4 font-bold">Jim Willis</p>
                                        <p>CEO, KINSHASA LIFESTYLE</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="7" class="bg-[#f9fafb]">
        <div class="w-full h-full p-5">
            <div class="grid grid-cols-1 md:grid-cols-12">
                <div class="md:col-span-4 p-10 text-white">
                    <p class="mt-4 text-sm leading-7 font-regular uppercase text-black">Contact</p>
                    <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tigh text-black">Get In <span class="text-black">Touch</span></h3>
                    <p class="mt-4 leading-7 text-black">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    <div class="flex items-center mt-5">
                        <svg class="h-6 mr-2 text-black" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 489.536 489.536">
                            <g>
                                <g>
                                    <path d="m488.554,476l-99-280.2c-1-4.2-5.2-7.3-9.4-7.3h-45.6c12.9-31.1 19.6-54.9 19.6-70.8 0-64.6-50-117.7-112.5-117.7-61.5,0-112.5,52.1-112.5,117.7 0,17.6 8.2,43.1 19.9,70.8h-39.7c-4.2,0-8.3,3.1-9.4,7.3l-99,280.2c-3.2,10.3 6.3,13.5 9.4,13.5h468.8c4.2,0.5 12.5-4.2 9.4-13.5zm-246.9-455.3c51,1.06581e-14 91.7,43.7 91.7,96.9 0,56.5-79.2,182.3-91.7,203.1-31.3-53.1-91.7-161.5-91.7-203.1 0-53.1 40.6-96.9 91.7-96.9zm-216.7,448l91.7-259.4h41.7c29.9,64.1 83.3,151 83.3,151s81.4-145.7 83.8-151h47.4l91.7,259.4h-439.6z"/>
                                    <rect width="136.5" x="177.054" y="379.1" height="20.8"/>
                                    <path d="m289.554,108.2c0-26-21.9-47.9-47.9-47.9s-47.9,21.9-47.9,47.9 20.8,47.9 47.9,47.9c27.1,0 47.9-21.8 47.9-47.9zm-75-1c0-14.6 11.5-27.1 27.1-27.1s27.1,12.5 27.1,27.1-11.5,27.1-27.1,27.1c-14.6,2.84217e-14-27.1-12.5-27.1-27.1z"/>
                                </g>
                            </g>
                        </svg>
                        <span class="text-sm text-black">House #14, Street #12, Darulaman Road, Kabul, Afghanistan.</span>
                    </div>
                    <div class="flex items-center mt-5 text-black">
                        <svg class="h-6 mr-2 text-black" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.002 60.002">
                            <g>
                                <path d="M59.002,37.992c-3.69,0-6.693-3.003-6.693-6.693c0-0.553-0.447-1-1-1s-1,0.447-1,1c0,4.794,3.899,8.693,8.693,8.693c0.553,0,1-0.447,1-1S59.554,37.992,59.002,37.992z"/>
                                <path d="M58.256,35.65c0.553,0,1-0.447,1-1s-0.447-1-1-1c-0.886,0-1.605-0.72-1.605-1.605c0-0.553-0.447-1-1-1s-1,0.447-1,1C54.65,34.033,56.267,35.65,58.256,35.65z"/>
                                <path d="M20.002,2.992c3.691,0,6.693,3.003,6.693,6.693c0,0.553,0.448,1,1,1s1-0.447,1-1c0-4.794-3.9-8.693-8.693-8.693c-0.552,0-1,0.447-1,1S19.449,2.992,20.002,2.992z"/>
                                <path d="M19.748,6.334c0,0.553,0.448,1,1,1c0.885,0,1.604,0.72,1.604,1.605c0,0.553,0.448,1,1,1s1-0.447,1-1c0-1.988-1.617-3.605-3.604-3.605C20.196,5.334,19.748,5.781,19.748,6.334z"/>
                                <path d="M44.076,37.889c-1.276-0.728-2.597-0.958-3.721-0.646c-0.844,0.234-1.532,0.768-1.996,1.546c-1.02,1.22-2.286,2.646-2.592,2.867c-2.367,1.604-4.25,1.415-6.294-0.629L17.987,29.542c-2.045-2.045-2.233-3.928-0.631-6.291c0.224-0.31,1.65-1.575,2.87-2.596c0.778-0.464,1.312-1.152,1.546-1.996c0.311-1.123,0.082-2.444-0.652-3.731c-0.173-0.296-4.291-7.27-8.085-9.277c-1.926-1.019-4.255-0.669-5.796,0.872L4.7,9.059c-4.014,4.014-5.467,8.563-4.321,13.52c0.956,4.132,3.742,8.529,8.282,13.068l14.705,14.706c5.762,5.762,11.258,8.656,16.298,8.656c3.701,0,7.157-1.562,10.291-4.695l2.537-2.537c1.541-1.541,1.892-3.87,0.872-5.796C51.356,42.186,44.383,38.069,44.076,37.889z M51.078,50.363L48.541,52.9c-6.569,6.567-14.563,5.235-23.76-3.961L10.075,34.233c-4.271-4.271-6.877-8.344-7.747-12.104c-0.995-4.301,0.244-8.112,3.786-11.655l2.537-2.537c0.567-0.566,1.313-0.862,2.07-0.862c0.467,0,0.939,0.112,1.376,0.344c3.293,1.743,7.256,8.454,7.29,8.511c0.449,0.787,0.62,1.608,0.457,2.196c-0.1,0.36-0.324,0.634-0.684,0.836l-0.15,0.104c-0.853,0.712-2.883,2.434-3.308,3.061c-0.612,0.904-1.018,1.792-1.231,2.665c-0.711-1.418-1.286-3.06-1.475-4.881c-0.057-0.548-0.549-0.935-1.098-0.892c-0.549,0.058-0.949,0.549-0.892,1.099c0.722,6.953,6.129,11.479,6.359,11.668c0.025,0.02,0.054,0.028,0.08,0.045l10.613,10.613c0.045,0.045,0.092,0.085,0.137,0.129c0.035,0.051,0.058,0.108,0.104,0.154c0.189,0.187,4.704,4.567,11.599,5.283c0.035,0.003,0.07,0.005,0.104,0.005c0.506,0,0.94-0.383,0.994-0.896c0.057-0.55-0.342-1.041-0.892-1.099c-2.114-0.219-3.987-0.839-5.548-1.558c0.765-0.23,1.543-0.612,2.332-1.146c0.628-0.426,2.35-2.455,3.061-3.308l0.104-0.151c0.202-0.359,0.476-0.583,0.836-0.684c0.588-0.159,1.409,0.008,2.186,0.45c0.067,0.04,6.778,4.003,8.521,7.296C52.202,48.062,51.994,49.447,51.078,50.363z"/>
                            </g>
                        </svg>
                        <span class="text-sm">+93 749 99 65 50</span>
                    </div>
                    <div class="flex items-center mt-5 text-black">
                        <svg class="h-6 mr-2 text-black" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300.988 300.988">
                            <g>
                                <g>
                                    <path d="M150.494,0.001C67.511,0.001,0,67.512,0,150.495s67.511,150.493,150.494,150.493s150.494-67.511,150.494-150.493S233.476,0.001,150.494,0.001z M150.494,285.987C75.782,285.987,15,225.206,15,150.495S75.782,15.001,150.494,15.001s135.494,60.782,135.494,135.493S225.205,285.987,150.494,285.987z"/>
                                    <polygon points="142.994,142.995 83.148,142.995 83.148,157.995 157.994,157.995 157.994,43.883 142.994,43.883 		"/>
                                </g>
                            </g>
                        </svg>
                        <span class="text-sm">24/7</span>
                    </div>
                </div>
                <form class="md:col-span-8 p-10" action="mail.php" method="POST">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first-name">First Name</label>
                            <input class="appearance-none bg-transparent border-b border-red-500 w-full text-gray-700 mr-3 p-4 leading-tight focus:outline-none focus:bg-gray-200" type="text" name="first_name" placeholder="Jane" required>
                            <p class="text-red-500 text-xs italic mt-1">Please fill out this field.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last-name">Last Name</label>
                            <input class="appearance-none bg-transparent border-b border-black w-full text-gray-700 mr-3 p-4 leading-tight focus:outline-none focus:bg-gray-200" type="text" name="last_name" placeholder="Doe" required>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">Email Address</label>
                            <input class="appearance-none bg-transparent border-b border-black w-full text-gray-700 mr-3 p-4 leading-tight focus:outline-none focus:bg-gray-200" type="email" name="email" placeholder="jane@exp.com" required>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="message">Your Message</label>
                            <textarea rows="10" class="appearance-none bg-transparent border-b border-black w-full text-gray-700 mr-3 p-4 focus:bg-gray-200 leading-tight focus:outline-none" name="message" placeholder="Your message here..." required></textarea>
                        </div>
                        <div class="flex justify-between w-full px-3">
                            <button class="shadow bg-black focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer class="bg-[#070d13] text-white py-[2.5rem] grid grid-rows-1 item-start justify-start">
        <div class="p-[4rem] space-y-10">
            <div class="grid grid-cols-1 md:grid-cols-3 w-5/12">
                <img class="h-[42px] w-auto mx-auto" src="https://cdn.prod.website-files.com/630bc5625ada9a1e2dbb10a6/6356fc6eb1dd160d0f9de5bc_Brand%20Vision%20Logo.svg" alt="Brand Vision Logo">
                <img class="h-[42px] w-auto mx-auto" src="https://cdn.prod.website-files.com/630bc5625ada9a1e2dbb10a6/6356fc6eb1dd160d0f9de5bc_Brand%20Vision%20Logo.svg" alt="Brand Vision Logo">
                <img class="h-[42px] w-auto mx-auto" src="https://cdn.prod.website-files.com/630bc5625ada9a1e2dbb10a6/6356fc6eb1dd160d0f9de5bc_Brand%20Vision%20Logo.svg" alt="Brand Vision Logo">
            </div>
            <div class="w-5/12">
                <p>We are Brand Vision, an award-winning marketing agency that will offer you transparency and creativity. Our goal is to nurture your vision and provide innovative, custom solutions for your marketing needs.</p>
            </div>
            <div>
                <p>Follow Us:</p>
                <div class="grid grid-cols-3 gap-10 w-10 py-5">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 32 32"><path d="M18.42,14.009L27.891,3h-2.244l-8.224,9.559L10.855,3H3.28l9.932,14.455L3.28,29h2.244l8.684-10.095,6.936,10.095h7.576l-10.301-14.991h0Zm-3.074,3.573l-1.006-1.439L6.333,4.69h3.447l6.462,9.243,1.006,1.439,8.4,12.015h-3.447l-6.854-9.804h0Z" stroke="currentColor" fill="currentColor" stroke-width="0"></path></svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 32 32"><path d="M16,2c-7.732,0-14,6.268-14,14,0,6.566,4.52,12.075,10.618,13.588v-9.31h-2.887v-4.278h2.887v-1.843c0-4.765,2.156-6.974,6.835-6.974,.887,0,2.417,.174,3.043,.348v3.878c-.33-.035-.904-.052-1.617-.052-2.296,0-3.183,.87-3.183,3.13v1.513h4.573l-.786,4.278h-3.787v9.619c6.932-.837,12.304-6.74,12.304-13.897,0-7.732-6.268-14-14-14Z" stroke="currentColor" fill="currentColor" stroke-width="0"></path></svg>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 32 32"><path d="M10.202,2.098c-1.49,.07-2.507,.308-3.396,.657-.92,.359-1.7,.84-2.477,1.619-.776,.779-1.254,1.56-1.61,2.481-.345,.891-.578,1.909-.644,3.4-.066,1.49-.08,1.97-.073,5.771s.024,4.278,.096,5.772c.071,1.489,.308,2.506,.657,3.396,.359,.92,.84,1.7,1.619,2.477,.779,.776,1.559,1.253,2.483,1.61,.89,.344,1.909,.579,3.399,.644,1.49,.065,1.97,.08,5.771,.073,3.801-.007,4.279-.024,5.773-.095s2.505-.309,3.395-.657c.92-.36,1.701-.84,2.477-1.62s1.254-1.561,1.609-2.483c.345-.89,.579-1.909,.644-3.398,.065-1.494,.081-1.971,.073-5.773s-.024-4.278-.095-5.771-.308-2.507-.657-3.397c-.36-.92-.84-1.7-1.619-2.477s-1.561-1.254-2.483-1.609c-.891-.345-1.909-.58-3.399-.644s-1.97-.081-5.772-.074-4.278,.024-5.771,.096m.164,25.309c-1.365-.059-2.106-.286-2.6-.476-.654-.252-1.12-.557-1.612-1.044s-.795-.955-1.05-1.608c-.192-.494-.423-1.234-.487-2.599-.069-1.475-.084-1.918-.092-5.656s.006-4.18,.071-5.656c.058-1.364,.286-2.106,.476-2.6,.252-.655,.556-1.12,1.044-1.612s.955-.795,1.608-1.05c.493-.193,1.234-.422,2.598-.487,1.476-.07,1.919-.084,5.656-.092,3.737-.008,4.181,.006,5.658,.071,1.364,.059,2.106,.285,2.599,.476,.654,.252,1.12,.555,1.612,1.044s.795,.954,1.051,1.609c.193,.492,.422,1.232,.486,2.597,.07,1.476,.086,1.919,.093,5.656,.007,3.737-.006,4.181-.071,5.656-.06,1.365-.286,2.106-.476,2.601-.252,.654-.556,1.12-1.045,1.612s-.955,.795-1.608,1.05c-.493,.192-1.234,.422-2.597,.487-1.476,.069-1.919,.084-5.657,.092s-4.18-.007-5.656-.071M21.779,8.517c.002,.928,.755,1.679,1.683,1.677s1.679-.755,1.677-1.683c-.002-.928-.755-1.679-1.683-1.677,0,0,0,0,0,0-.928,.002-1.678,.755-1.677,1.683m-12.967,7.496c.008,3.97,3.232,7.182,7.202,7.174s7.183-3.232,7.176-7.202c-.008-3.97-3.233-7.183-7.203-7.175s-7.182,3.233-7.174,7.203m2.522-.005c-.005-2.577,2.08-4.671,4.658-4.676,2.577-.005,4.671,2.08,4.676,4.658,.005,2.577-2.08,4.671-4.658,4.676-2.577,.005-4.671-2.079-4.676-4.656h0" stroke="currentColor" fill="currentColor" stroke-width="0"></path></svg>
                    </div>
                </div>
            </div>
            <div class="w-full h-1 bg-[#f2f5f71f]"></div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <div class="font-light space-y-2">
                    <p class="font-semibold">Quick Links</p>
                    <p>Home</p>
                    <p>Our Work</p>
                    <p>About</p>
                    <p>Contact</p>
                </div>
                <div class="font-light space-y-2">
                    <p class="font-semibold">Services</p>
                    <p>All Services</p>
                    <p>Web Design</p>
                    <p>Branding</p>
                    <p>UI UX</p>
                    <p>Consultation & Audit</p>
                    <p>SEO</p>
                </div>
                <div class="font-light space-y-2">
                    <p class="font-semibold">Company</p>
                    <p>Insights</p>
                    <p>Career</p>
                    <p>FAQ</p>
                    <p>Privacy Policy</p>
                    <p>Sitemap</p>
                </div>
                <div class="font-light space-y-2">
                    <p class="font-semibold">Contacts</p>
                    <p class="flex items-center">
                        <span class="material-icons mr-2">email</span>
                        info@brandvm.com
                    </p>
                    <p class="flex items-center">
                        <span class="material-icons mr-2">phone</span>
                        +1 416 360-3434
                    </p>
                    <p class="flex items-center">
                        <span class="material-icons mr-2">location_on</span>
                        Suite 120 - 2005 Sheppard Ave E, North York, ON M2J 5B4
                    </p>
                </div>
            </div>
            <div class="w-full h-1 bg-[#f2f5f71f]"></div>
            <div class="w-full text-center text-[#f2f5f78f]">
                © All Copyright Reserved by Brand Vision Marketing.
            </div>
        </div>
    </footer>
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
    
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>