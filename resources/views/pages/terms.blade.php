@extends('layouts.main')
@section('main-section')

<div class="bg-gray-100 min-h-screen">
    <!-- Hero Section -->
    <div class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">
                @if(session('locale') == 'sw')
                Masharti ya Matumizi
                @else
                Terms of Service
                @endif
            </h1>
            <p class="text-xl max-w-3xl">
                @if(session('locale') == 'sw')
                Tafadhali kagua masharti na vigezo vya kutumia jukwaa hili.
                @else
                Please review the terms and conditions for using this platform.
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
                
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">
                        @if(session('locale') == 'sw')
                        1. Kukubali Masharti
                        @else
                        1. Acceptance of Terms
                        @endif
                    </h2>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Kwa kufikia na kutumia programu hii ya wavuti, unakubali kufungwa na Masharti haya ya Huduma ("Masharti") na kufuata sheria na kanuni zote zinazotumika za Jamhuri ya Muungano wa Tanzania. Ikiwa hukubaliani na sehemu yoyote ya Masharti haya, tafadhali usitumie jukwaa hili.
                        @else
                        By accessing and using this web application, you agree to be bound by these Terms of Service ("Terms") and to comply with all applicable laws and regulations of the United Republic of Tanzania. If you do not agree with any part of these Terms, please do not use the platform.
                        @endif
                    </p>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Jukwaa hili linamilikiwa na kuendeshwa na <strong>Kikosi Kazi Maalum cha Kuwainua Wachimbaji Wadogo</strong>, chini ya mwongozo wa <strong>Wizara ya Madini</strong>.
                        @else
                        This platform is owned and managed by the <strong>Special Taskforce on Empowering Local Miners</strong>, under the guidance of the <strong>Ministry of Minerals</strong>.
                        @endif
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">
                        @if(session('locale') == 'sw')
                        2. Madhumuni ya Jukwaa
                        @else
                        2. Purpose of the Platform
                        @endif
                    </h2>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Jukwaa hili limeundwa ili:
                        @else
                        This platform is developed to:
                        @endif
                    </p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Kukusanya, kusimamia, na kuchambua data zinazohusiana na sekta ya uchimbaji mdogo na wa kati (ASM) ya Tanzania
                            @else
                            Collect, manage, and analyse data relevant to Tanzania's artisanal and small-scale mining (ASM) sector
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Kuwezesha maoni, mashauriano, na ushiriki wa wadau
                            @else
                            Facilitate stakeholder feedback, consultations, and engagement
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Kusaidia maendeleo ya sera zinazotegemea ushahidi, zana za kifedha, na mageuzi ya udhibiti
                            @else
                            Support the development of evidence-based policies, financial tools, and regulatory reforms
                            @endif
                        </li>
                    </ul>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Jukwaa hili linakusudiwa kwa dhati kwa madhumuni ya <strong>yasiyo ya kibiashara</strong>, sera za umma, na maendeleo.
                        @else
                        The platform is intended strictly for <strong>non-commercial</strong>, public policy, and developmental purposes.
                        @endif
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">
                        @if(session('locale') == 'sw')
                        3. Majukumu ya Mtumiaji
                        @else
                        3. User Responsibilities
                        @endif
                    </h2>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Kama mtumiaji, unakubali:
                        @else
                        As a user, you agree to:
                        @endif
                    </p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Kutoa taarifa sahihi, za kweli, na kamili wakati wa kujaza fomu zozote za data au kujibu utafiti
                            @else
                            Provide accurate, honest, and complete information when filling out any data forms or responding to surveys
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Kutumia jukwaa kwa madhumuni ya kisheria tu
                            @else
                            Use the platform for lawful purposes only
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Kujiepusha na kupakia maudhui yenye nia mbaya, barua taka, au taarifa za uongo
                            @else
                            Refrain from uploading malicious content, spam, or false information
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Kuheshimu faragha na haki za watumiaji wengine au wadau
                            @else
                            Respect the privacy and rights of other users or stakeholders
                            @endif
                        </li>
                    </ul>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Matumizi mabaya ya jukwaa hili yanaweza kusababisha kusimamishwa kwa ufikiaji, kuondolewa kwa data, au hatua za kisheria kwa mujibu wa sheria za Tanzania.
                        @else
                        Misuse of this platform may lead to suspension of access, removal of data, or legal action as per Tanzanian law.
                        @endif
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">
                        @if(session('locale') == 'sw')
                        4. Matumizi ya Data na Idhini
                        @else
                        4. Data Usage and Consent
                        @endif
                    </h2>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Kwa kuwasilisha data kupitia jukwaa hili, unampa Kikosi Kazi na washirika wake walioidhinishwa ruhusa ya:
                        @else
                        By submitting data through this platform, you grant the Taskforce and its authorized partners permission to:
                        @endif
                    </p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Kukusanya na kuhifadhi taarifa zako katika mifumo salama na iliyosimbwa
                            @else
                            Collect and store your information in secure, encrypted systems
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Kuchanganua na kukusanya data yako ili kutoa taarifa na mapendekezo ya sera
                            @else
                            Analyze and aggregate your data to inform reports and policy recommendations
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Kushirikisha muhtasari usio na majina na taasisi za serikali, wafadhili, au watafiti
                            @else
                            Share anonymized summaries with government institutions, donors, or researchers
                            @endif
                        </li>
                    </ul>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Data yako ya binafsi haitauzwa au kutumiwa kwa madhumuni ya kibiashara kamwe. Rejea <a href="{{ route('privacy') }}" class="text-blue-600 hover:underline">Sera ya Faragha</a> kwa maelezo kamili.
                        @else
                        Your personal data will never be sold or used for commercial purposes. Refer to the <a href="{{ route('privacy') }}" class="text-blue-600 hover:underline">Privacy Policy</a> for full details.
                        @endif
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">
                        @if(session('locale') == 'sw')
                        5. Mali ya Kiakili
                        @else
                        5. Intellectual Property
                        @endif
                    </h2>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Maudhui yote yanayotolewa kwenye jukwaa hili—ikiwa ni pamoja na fomu, ripoti, zana, na nyenzo—ni mali ya kiakili ya Kikosi Kazi na Wizara ya Madini, isipokuwa imeelezwa vinginevyo.
                        @else
                        All content provided on this platform—including forms, reports, tools, and materials—is the intellectual property of the Taskforce and the Ministry of Minerals, unless otherwise stated.
                        @endif
                    </p>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Huwezi kuzalisha, kusambaza, kubadilisha, au kuonyesha hadharani maudhui kutoka kwenye jukwaa hili bila ruhusa ya maandishi, isipokuwa kwa madhumuni ya kielimu au maslahi ya umma pamoja na nukuu sahihi.
                        @else
                        You may not reproduce, distribute, modify, or publicly display content from this platform without written permission, except for educational or public-interest purposes with proper citation.
                        @endif
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">
                        @if(session('locale') == 'sw')
                        6. Upatikanaji na Matengenezo
                        @else
                        6. Availability and Maintenance
                        @endif
                    </h2>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Tunajitahidi kuhakikisha jukwaa linapatikana wakati wote; hata hivyo:
                        @else
                        We strive to ensure the platform is available at all times; however:
                        @endif
                    </p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Hatuhakikishi ufikiaji usiokatizwa au usio na hitilafu
                            @else
                            We do not guarantee uninterrupted or error-free access
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Mfumo unaweza kupitia matengenezo au masasisho bila taarifa ya awali
                            @else
                            The system may undergo maintenance or updates without prior notice
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Kikosi Kazi hakiwajibiki kwa upotevu wowote wa data kutokana na hitilafu za kiufundi nje ya udhibiti wetu
                            @else
                            The Taskforce is not liable for any data loss due to technical errors beyond our control
                            @endif
                        </li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">
                        @if(session('locale') == 'sw')
                        7. Kusitishwa kwa Ufikiaji
                        @else
                        7. Termination of Access
                        @endif
                    </h2>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Ufikiaji wa jukwaa unaweza kusimamishwa au kusitishwa bila taarifa ikiwa:
                        @else
                        Access to the platform may be suspended or terminated without notice if:
                        @endif
                    </p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Ukiuka mojawapo ya Masharti haya
                            @else
                            You violate any of these Terms
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Ukijaribu kuvuruga au kuhatarisha usalama wa jukwaa au uadilifu wa data
                            @else
                            You attempt to disrupt or compromise the platform's security or data integrity
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Ushiriki wako hautafaa tena kwa upeo wa ukusanyaji wa data
                            @else
                            Your participation is no longer relevant to the scope of data collection
                            @endif
                        </li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">
                        @if(session('locale') == 'sw')
                        8. Kikomo cha Dhima
                        @else
                        8. Limitation of Liability
                        @endif
                    </h2>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Jukwaa hili linatokana na "kama-linavyo" kwa faida ya umma. Kikosi Kazi kinakataa dhima yoyote kwa:
                        @else
                        This platform is provided "as-is" for public good. The Taskforce disclaims any liability for:
                        @endif
                    </p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Hasara zinazotokana na matumizi au kutoweza kutumia jukwaa
                            @else
                            Losses arising from the use or inability to use the platform
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Makosa katika data iliyowasilishwa na watumiaji
                            @else
                            Errors in user-submitted data
                            @endif
                        </li>
                        <li class="mb-2">
                            @if(session('locale') == 'sw')
                            Vitendo vya wahusika wengine nje ya udhibiti wetu
                            @else
                            Third-party actions beyond our control
                            @endif
                        </li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">
                        @if(session('locale') == 'sw')
                        9. Sheria Zinazotumika
                        @else
                        9. Governing Law
                        @endif
                    </h2>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Masharti haya yanaongozwa na kutafsiriwa kulingana na sheria za Jamhuri ya Muungano wa Tanzania. Migogoro yoyote itatatuliwa kupitia mifumo ya kisheria ya serikali inayofaa.
                        @else
                        These Terms are governed by and construed in accordance with the laws of the United Republic of Tanzania. Any disputes shall be resolved through appropriate government legal mechanisms.
                        @endif
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">
                        @if(session('locale') == 'sw')
                        10. Maelezo ya Mawasiliano
                        @else
                        10. Contact Information
                        @endif
                    </h2>
                    <p class="mb-4">
                        @if(session('locale') == 'sw')
                        Kwa maswali, msaada wa kiufundi, au malalamiko, tafadhali wasiliana na:
                        @else
                        For questions, technical support, or complaints, please contact:
                        @endif
                    </p>
                    <div class="pl-4 border-l-4 border-blue-800 p-4 bg-blue-50">
                        <p class="font-bold mb-2">
                            @if(session('locale') == 'sw')
                            Sekretarieti — Kikosi Kazi Maalum cha Kuwainua Wachimbaji Wadogo wa Madini
                            @else
                            Secretariat — Special Taskforce on Empowering Local Miners
                            @endif
                        </p>
                        <p class="mb-1">
                            <span class="inline-block w-6 text-center">📧</span> 
                            @if(session('locale') == 'sw')
                            Barua pepe: <a href="mailto:info@kamatimadini.tz" class="text-blue-600 hover:underline">info@kamatimadini.tz</a>
                            @else
                            Email: <a href="mailto:info@kamatimadini.tz" class="text-blue-600 hover:underline">info@kamatimadini.tz</a>
                            @endif
                        </p>
                        <p>
                            <span class="inline-block w-6 text-center">📍</span> 
                            @if(session('locale') == 'sw')
                            Wizara ya Madini, Serikali ya Tanzania
                            @else
                            Ministry of Minerals, Government of Tanzania
                            @endif
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>


@endsection