@extends('layouts.main')
@section('main-section')

<div class="bg-gray-100 min-h-screen">
    <!-- Hero Section -->
    <div class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">About Us</h1>
            <p class="text-xl max-w-3xl">Learn about the Special Taskforce on Empowering Local Miners in Tanzania and our mission to transform the artisanal and small-scale mining sector.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="prose max-w-none">
                <p class="text-lg mb-6">
                    Welcome to the official Data Collection Platform of the <strong>Special 
                    Taskforce on Empowering Local Miners in Tanzania</strong>.
                </p>
                
                <p class="mb-6">
                    This platform is a digital initiative established by the Taskforce to 
                    facilitate the <strong>real-time collection, analysis, and management of 
                    data</strong> from stakeholders across the artisanal and small-scale mining 
                    (ASM) sector. It is designed to enhance the Taskforce's ability to 
                    gather accurate insights, inform evidence-based recommendations, and 
                    promote inclusive participation in shaping the future of Tanzania's 
                    mining industry.
                </p>

                <h2 class="text-2xl font-bold text-blue-800 mt-8 mb-4">Who We Are</h2>
                <p class="mb-6">
                    The Taskforce was appointed by the <strong>Minister of Minerals</strong>, following 
                    the directive of <strong>H.E. President Dr. Samia Suluhu Hassan</strong>, to develop 
                    a roadmap that ensures local miners benefit more meaningfully from 
                    Tanzania's vast mineral wealth. Comprising experts in mining, finance, 
                    law, geology, and community development, the Taskforce brings together 
                    both government and private sector perspectives.
                </p>

                <h2 class="text-2xl font-bold text-blue-800 mt-8 mb-4">What We Do</h2>
                <p class="mb-4">Our mandate is to:</p>
                <ul class="list-disc pl-8 mb-6">
                    <li class="mb-2">Identify key challenges facing small-scale miners</li>
                    <li class="mb-2">Propose policy, legal, and institutional reforms</li>
                    <li class="mb-2">Design sustainable financial and technical support mechanisms</li>
                    <li class="mb-2">Promote transparency, safety, and value addition in the mining sector</li>
                </ul>

                <h2 class="text-2xl font-bold text-blue-800 mt-8 mb-4">Purpose of This Platform</h2>
                <p class="mb-4">This web application supports the Taskforce's work by:</p>
                <ul class="list-disc pl-8 mb-6">
                    <li class="mb-2">Collecting detailed profiles and feedback from miners, cooperatives, financial institutions, and local stakeholders</li>
                    <li class="mb-2">Mapping sector-wide gaps in access to finance, technical knowledge, and markets</li>
                    <li class="mb-2">Tracking reforms and evaluating their impact across regions</li>
                </ul>

                <h2 class="text-2xl font-bold text-blue-800 mt-8 mb-4">Our Commitment</h2>
                <p class="mb-6">
                    We are committed to a <strong>transparent, inclusive, and data-driven 
                    process</strong>. All information collected through this platform will be 
                    handled with strict confidentiality and used solely to inform national 
                    mining reforms that uplift local communities and strengthen the economy.
                </p>

                <h2 class="text-2xl font-bold text-blue-800 mt-8 mb-4">Get Involved</h2>
                <p class="mb-6">
                    If you're a miner, stakeholder, or partner—<strong>your voice matters</strong>. 
                    Contribute to shaping the policies that impact your work and livelihood. 
                    Help us build a more equitable and prosperous future for Tanzania's 
                    mining sector.
                </p>
            </div>
        </div>

        <!-- Swahili Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-blue-800 mb-6">Kuhusu Sisi</h2>
            <div class="prose max-w-none">
                <p class="mb-6">
                    Karibu kwenye Tovuti Rasmi ya Ukusanyaji Taarifa ya <strong>Kikosi Kazi Maalum 
                    cha Kuwainua Wachimbaji Wadogo wa Madini Tanzania</strong>.
                </p>
                
                <p class="mb-6">
                    Jukwaa hili la kidijitali limeundwa na Kikosi Kazi ili kurahisisha 
                    ukusanyaji wa taarifa, uchambuzi wa takwimu, na usimamizi wa taarifa 
                    kutoka kwa wadau mbalimbali wa sekta ya wachimbaji wadogo wa madini 
                    nchini. Lengo ni kuhakikisha kuwa mapendekezo ya sera, sheria, na 
                    mikakati ya kifedha yanajengwa kwa msingi wa takwimu halisi na maoni ya 
                    wahusika wote.
                </p>

                <h3 class="text-xl font-bold mt-6 mb-3">Sisi ni Nani</h3>
                <p class="mb-6">
                    Kikosi Kazi kiliundwa na <strong>Waziri wa Madini</strong> kufuatia agizo la <strong>Mhe. 
                    Rais Dkt. Samia Suluhu Hassan</strong>, kwa lengo la kuandaa mwongozo wa 
                    kitaifa wa kuhakikisha wachimbaji wadogo wananufaika zaidi na rasilimali 
                    za madini. Kikosi hiki kina wataalam kutoka sekta ya umma na binafsi 
                    wakiwemo wachumi, wanamipango, wanasheria, wanasayansi wa jiolojia na 
                    wataalamu wa maendeleo ya jamii.
                </p>

                <h3 class="text-xl font-bold mt-6 mb-3">Tunachofanya</h3>
                <p class="mb-4">Kikosi kazi kinajihusisha na:</p>
                <ul class="list-disc pl-8 mb-6">
                    <li class="mb-2">Kufanya tathmini ya changamoto za wachimbaji wadogo</li>
                    <li class="mb-2">Kupendekeza maboresho ya kisera, kisheria na kitaasisi</li>
                    <li class="mb-2">Kubuni mifumo ya kifedha na kiufundi itakayowasaidia wachimbaji</li>
                    <li class="mb-2">Kukuza uwazi, usalama, na thamani ya madini yanayochimbwa nchini</li>
                </ul>

                <h3 class="text-xl font-bold mt-6 mb-3">Lengo la Jukwaa Hili</h3>
                <p class="mb-4">Tovuti hii inalenga:</p>
                <ul class="list-disc pl-8 mb-6">
                    <li class="mb-2">Kukusanya taarifa za wachimbaji, vyama, taasisi za fedha, na wadau wengine</li>
                    <li class="mb-2">Kufanya ramani ya changamoto na fursa katika sekta ya madini ya wachimbaji wadogo</li>
                    <li class="mb-2">Kufuatilia utekelezaji wa mageuzi na kupima athari zake kitaifa na kikanda</li>
                </ul>

                <h3 class="text-xl font-bold mt-6 mb-3">Ahadi Yetu</h3>
                <p class="mb-6">
                    Tumejidhatiti kufuata <strong>mchakato wa uwazi, ushirikishwaji, na msingi wa 
                    takwimu</strong> katika kila hatua. Taarifa zote zitakazokusanywa zitahifadhiwa 
                    kwa usiri na kutumika tu kwa madhumuni ya kisera na kimkakati kwa 
                    manufaa ya wachimbaji na taifa kwa ujumla.
                </p>

                <h3 class="text-xl font-bold mt-6 mb-3">Shiriki Nasi</h3>
                <p class="mb-6">
                    Iwapo wewe ni mchimbaji, mdau au mshirika—<strong>sauti yako ina thamani</strong>. 
                    Changia maoni yako na tusaidie kuunda sera na mfumo bora wa sekta ya 
                    madini kwa ajili ya maendeleo ya watu na uchumi wa Tanzania.
                </p>
            </div>
        </div>
    </div>
</div>



@endsection