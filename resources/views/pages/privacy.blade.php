@extends('layouts.main')
@section('main-section')


<div class="bg-gray-100 min-h-screen">
    <!-- Hero Section -->
    <div class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">
                @if(session('locale') == 'sw')
                    Sera ya Faragha
                @else
                    Privacy Policy
                @endif
            </h1>
            <p class="text-xl max-w-3xl">
                @if(session('locale') == 'sw')
                    Jifunze jinsi tunavyokusanya, kutumia, na kulinda taarifa zako kwenye jukwaa hili.
                @else
                    Learn how we collect, use, and protect your information on this platform.
                @endif
            </p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="prose max-w-none">
                <div class="flex items-center justify-between mb-6">
                    <p class="font-semibold">
                        @if(session('locale') == 'sw')
                            Tarehe ya Kuanza: Aprili 2025
                        @else
                            Effective Date: April 2025
                        @endif
                    </p>
                    <p class="font-semibold">
                        @if(session('locale') == 'sw')
                            Imetolewa na: Kikosi Kazi Maalum cha Kuwainua Wachimbaji Wadogo wa Madini Tanzania
                        @else
                            Issued by: Special Taskforce on Empowering Local Miners in Tanzania
                        @endif
                    </p>
                </div>
                
                @if(session('locale') == 'sw')
                    <!-- Swahili Content -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">1. Utangulizi</h2>
                        <p class="mb-4">
                            Sera hii ya Faragha inaelezea jinsi tunavyokusanya, kutumia, kuhifadhi, na kulinda
                            data za kibinafsi zilizotolewa kupitia programu hii ya wavuti iliyotengenezwa na
                            <strong>Kikosi Kazi Maalum cha Kuwainua Wachimbaji Wadogo</strong>. Kwa kutumia jukwaa
                            hili, unakubali masharti yaliyoelezwa hapa chini.
                        </p>
                        <p class="mb-4">
                            Dhamira yetu ni kulinda usiri, uadilifu, na usalama wa taarifa zote zinazokusanywa,
                            kwa mujibu wa sheria za Tanzania, kanuni za kimataifa za ulinzi wa data, na malengo
                            ya uundaji wa sera jumuishi na zenye maadili.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">2. Taarifa Tunazokusanya</h2>
                        <p class="mb-4">Tunaweza kukusanya aina zifuatazo za taarifa:</p>
                        <ul class="list-disc pl-8 mb-4">
                            <li class="mb-2">
                                <strong>Data za Utambulisho wa Kibinafsi</strong>: Jina, nambari ya simu, kitambulisho cha 
                                taifa, jinsia, umri, kiwango cha elimu
                            </li>
                            <li class="mb-2">
                                <strong>Taarifa za Kitaaluma</strong>: Nambari ya leseni ya uchimbaji, uanachama wa 
                                ushirika, usajili wa biashara
                            </li>
                            <li class="mb-2">
                                <strong>Taarifa za Eneo</strong>: Mkoa, wilaya, kata ya shughuli
                            </li>
                            <li class="mb-2">
                                <strong>Taarifa za Kijamii na Kiuchumi</strong>: Vyanzo vya mapato, upatikanaji wa 
                                fedha, uwezo wa kiufundi, changamoto zinazokabiliwa
                            </li>
                            <li class="mb-2">
                                <strong>Maoni na Mapendekezo</strong>: Majibu kwa tafiti, mahojiano, au maoni ya wazi
                            </li>
                        </ul>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">3. Madhumuni ya Ukusanyaji wa Data</h2>
                        <p class="mb-4">Tunakusanya data kwa madhumuni yafuatayo:</p>
                        <ul class="list-disc pl-8 mb-4">
                            <li class="mb-2">
                                Kutathmini changamoto na fursa katika sekta ya uchimbaji mdogo wa madini Tanzania
                            </li>
                            <li class="mb-2">
                                Kufahamisha uundaji wa sera, fedha, sheria, na mageuzi ya kitaasisi
                            </li>
                            <li class="mb-2">
                                Kuwezesha utoaji wa maamuzi na ushirikishwaji wa wadau unaozingatia ushahidi
                            </li>
                            <li class="mb-2">
                                Kuhakikisha uwakilishi wa haki wa mienendo ya kikanda na kidemografia katika mipango ya kitaifa
                            </li>
                        </ul>
                        <p class="mb-4">
                            Hatutaitumia data yako ya kibinafsi kwa madhumuni ya kibiashara, wala hatutauza au 
                            kukodisha taarifa yako kwa wahusika wengine.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">4. Uhifadhi wa Data na Usalama</h2>
                        <ul class="list-disc pl-8 mb-4">
                            <li class="mb-2">
                                Data zote zinahifadhiwa kwa usalama katika hifadhidata zilizosimbwa zilizohifadhiwa
                                ndani ya Tanzania au kwenye mifumo iliyoidhinishwa na serikali.
                            </li>
                            <li class="mb-2">
                                Upatikanaji umewekewa vikwazo kwa wafanyakazi walioidhinishwa wanaosaidia kazi za 
                                kiufundi za Kikosi Kazi.
                            </li>
                            <li class="mb-2">
                                Ukaguzi wa mara kwa mara, nakala rudufu, na kumbukumbu za upatikanaji zinadumishwa 
                                kuzuia matumizi au ufichuzi wa data bila idhini.
                            </li>
                        </ul>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">5. Kushiriki Data</h2>
                        <p class="mb-4">Tunaweza kushiriki data zilizokusanywa na kutojulikana na:</p>
                        <ul class="list-disc pl-8 mb-4">
                            <li class="mb-2">Wizara za serikali (kama vile Wizara ya Madini)</li>
                            <li class="mb-2">Washirika wa maendeleo au wataalamu wa kiufundi wanaosaidia Kikosi Kazi</li>
                            <li class="mb-2">Wadau wa umma kupitia ripoti za muhtasari au matokeo ya utafiti</li>
                        </ul>
                        <p class="mb-4">
                            Hatutawahi kushiriki taarifa za utambulisho bila idhini yako ya wazi, isipokuwa
                            kama inavyohitajika kisheria.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">6. Haki Zako</h2>
                        <p class="mb-4">Una haki ya:</p>
                        <ul class="list-disc pl-8 mb-4">
                            <li class="mb-2">Kuomba kupata taarifa ulizotoa</li>
                            <li class="mb-2">Kusahihisha au kusasisha data yoyote isiyo sahihi</li>
                            <li class="mb-2">Kuondoa idhini au kuomba kufutwa kwa data yako</li>
                            <li class="mb-2">Kuuliza jinsi data yako inavyotumika na nani</li>
                        </ul>
                        <p class="mb-4">
                            Ili kutumia haki hizi, tafadhali wasiliana na Sekretarieti ya Kikosi Kazi kupitia:
                            <a href="mailto:info@kamatimadini.tz" class="text-blue-600 hover:underline">info@kamatimadini.tz</a>
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">7. Vidakuzi na Ufuatiliaji</h2>
                        <p class="mb-4">
                            Programu hii ya wavuti <strong>haitumii</strong> vidakuzi au mifumo ya ufuatiliaji ya wahusika
                            wengine kwa ajili ya matangazo au utambulisho. Uchambuzi wa msingi unaweza
                            kukusanywa (k.m. idadi ya watumiaji, muda uliotumika kwenye kurasa) ili kuboresha
                            matumizi ya jukwaa.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">8. Masasisho ya Sera</h2>
                        <p class="mb-4">
                            Sera hii inaweza kusasishwa ikihitajika ili kuakisi mabadiliko katika sheria,
                            teknolojia, au shughuli za jukwaa. Masasisho yote yatachapishwa kwenye ukurasa huu,
                            pamoja na tarehe ya "ilisasishwa mwisho" juu.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">9. Wasiliana Nasi</h2>
                        <p class="mb-4">
                            Ikiwa una maswali au wasiwasi kuhusu sera hii au data yako, tafadhali wasiliana na:
                        </p>
                        <div class="pl-4 border-l-4 border-blue-800 p-4 bg-blue-50">
                            <p class="font-bold mb-2">Sekretarieti -- Kikosi Kazi Maalum cha Kuwainua Wachimbaji Wadogo</p>
                            <p class="mb-1">Barua pepe: <a href="mailto:info@kamatimadini.tz" class="text-blue-600 hover:underline">info@kamatimadini.tz</a></p>
                            <p>Wizara ya Madini, Serikali ya Tanzania</p>
                        </div>
                    </section>
                @else
                    <!-- English Content -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">1. Introduction</h2>
                        <p class="mb-4">
                            This Privacy Policy outlines how we collect, use, store, and protect
                            personal data submitted through this web application developed by the
                            <strong>Special Taskforce on Empowering Local Miners</strong>. By using this
                            platform, you agree to the terms described below.
                        </p>
                        <p class="mb-4">
                            Our commitment is to protect the confidentiality, integrity, and
                            security of all information collected, in accordance with Tanzanian
                            laws, global data protection principles, and the objectives of inclusive
                            and ethical policy development.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">2. Information We Collect</h2>
                        <p class="mb-4">We may collect the following types of information:</p>
                        <ul class="list-disc pl-8 mb-4">
                            <li class="mb-2">
                                <strong>Personal Identification Data</strong>: Name, phone number, national ID,
                                gender, age, education level
                            </li>
                            <li class="mb-2">
                                <strong>Professional Information</strong>: Mining license number, cooperative
                                membership, business registration
                            </li>
                            <li class="mb-2">
                                <strong>Location Information</strong>: Region, district, ward of operation
                            </li>
                            <li class="mb-2">
                                <strong>Socioeconomic Information</strong>: Income sources, access to finance,
                                technical capacity, challenges faced
                            </li>
                            <li class="mb-2">
                                <strong>Feedback and Opinions</strong>: Responses to surveys, interviews, or open
                                comments
                            </li>
                        </ul>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">3. Purpose of Data Collection</h2>
                        <p class="mb-4">We collect data for the following purposes:</p>
                        <ul class="list-disc pl-8 mb-4">
                            <li class="mb-2">
                                To assess challenges and opportunities in Tanzania's artisanal and
                                small-scale mining sector
                            </li>
                            <li class="mb-2">
                                To inform the design of policy, financial, legal, and institutional
                                reforms
                            </li>
                            <li class="mb-2">
                                To enable evidence-based decision-making and inclusive stakeholder
                                engagement
                            </li>
                            <li class="mb-2">
                                To ensure fair representation of regional and demographic dynamics
                                in national planning
                            </li>
                        </ul>
                        <p class="mb-4">
                            We will not use your personal data for commercial purposes, nor will we
                            sell or rent your information to third parties.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">4. Data Storage and Security</h2>
                        <ul class="list-disc pl-8 mb-4">
                            <li class="mb-2">
                                All data is stored securely in encrypted databases hosted within
                                Tanzania or on approved government systems.
                            </li>
                            <li class="mb-2">
                                Access is restricted to authorized personnel supporting the
                                Taskforce's technical work.
                            </li>
                            <li class="mb-2">
                                Routine audits, back-ups, and access logs are maintained to prevent
                                unauthorized use or disclosure.
                            </li>
                        </ul>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">5. Data Sharing</h2>
                        <p class="mb-4">We may share aggregated, anonymized data with:</p>
                        <ul class="list-disc pl-8 mb-4">
                            <li class="mb-2">Government agencies (e.g., Ministry of Minerals)</li>
                            <li class="mb-2">Development partners or technical experts supporting the Taskforce</li>
                            <li class="mb-2">Public stakeholders via summary reports or research findings</li>
                        </ul>
                        <p class="mb-4">
                            We will never share personally identifiable information without your
                            explicit consent, unless required by law.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">6. Your Rights</h2>
                        <p class="mb-4">You have the right to:</p>
                        <ul class="list-disc pl-8 mb-4">
                            <li class="mb-2">Request access to the information you have submitted</li>
                            <li class="mb-2">Correct or update any inaccurate data</li>
                            <li class="mb-2">Withdraw consent or request deletion of your data</li>
                            <li class="mb-2">Ask how your data is being used and by whom</li>
                        </ul>
                        <p class="mb-4">
                            To exercise these rights, please contact the Taskforce Secretariat at:
                            <a href="mailto:info@kamatimadini.tz" class="text-blue-600 hover:underline">info@kamatimadini.tz</a>
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">7. Cookies and Tracking</h2>
                        <p class="mb-4">
                            This web application does <strong>not</strong> use cookies or third-party tracking
                            systems for advertising or profiling. Basic analytics may be collected
                            (e.g., number of users, time spent on pages) to improve the platform's
                            usability.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">8. Policy Updates</h2>
                        <p class="mb-4">
                            This policy may be updated as needed to reflect changes in law,
                            technology, or platform operations. All updates will be posted on this
                            page, with a "last updated" date at the top.
                        </p>
                    </section>

                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-blue-800 mb-4">9. Contact Us</h2>
                        <p class="mb-4">
                            If you have questions or concerns about this policy or your data, please
                            contact:
                        </p>
                        <div class="pl-4 border-l-4 border-blue-800 p-4 bg-blue-50">
                            <p class="font-bold mb-2">Secretariat -- Special Taskforce on Empowering Local Miners</p>
                            <p class="mb-1">Email: <a href="mailto:info@kamatimadini.tz" class="text-blue-600 hover:underline">info@kamatimadini.tz</a></p>
                            <p>Ministry of Minerals, Government of Tanzania</p>
                        </div>
                    </section>
                @endif
            </div>
        </div>
    </div>
</div>



@endsection