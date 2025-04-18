@extends('layouts.main')
@section('main-section')

<div class="bg-gray-100 min-h-screen">
    <!-- Hero Section -->
    <div class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Terms of Service</h1>
            <p class="text-xl max-w-3xl">Please review the terms and conditions for using this platform.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="prose max-w-none">
                <div class="flex items-center justify-between mb-6">
                    <p class="font-semibold">Effective Date: April 2025</p>
                    <p class="font-semibold">Issued by: Special Taskforce on Empowering Local Miners in Tanzania</p>
                </div>
                
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">1. Acceptance of Terms</h2>
                    <p class="mb-4">
                        By accessing and using this web application, you agree to be bound by
                        these Terms of Service ("Terms") and to comply with all applicable laws
                        and regulations of the United Republic of Tanzania. If you do not agree
                        with any part of these Terms, please do not use the platform.
                    </p>
                    <p class="mb-4">
                        This platform is owned and managed by the <strong>Special Taskforce on
                        Empowering Local Miners</strong>, under the guidance of the <strong>Ministry of
                        Minerals</strong>.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">2. Purpose of the Platform</h2>
                    <p class="mb-4">This platform is developed to:</p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            Collect, manage, and analyse data relevant to Tanzania's artisanal
                            and small-scale mining (ASM) sector
                        </li>
                        <li class="mb-2">
                            Facilitate stakeholder feedback, consultations, and engagement
                        </li>
                        <li class="mb-2">
                            Support the development of evidence-based policies, financial tools,
                            and regulatory reforms
                        </li>
                    </ul>
                    <p class="mb-4">
                        The platform is intended strictly for <strong>non-commercial</strong>, public policy,
                        and developmental purposes.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">3. User Responsibilities</h2>
                    <p class="mb-4">As a user, you agree to:</p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            Provide accurate, honest, and complete information when filling out
                            any data forms or responding to surveys
                        </li>
                        <li class="mb-2">
                            Use the platform for lawful purposes only
                        </li>
                        <li class="mb-2">
                            Refrain from uploading malicious content, spam, or false information
                        </li>
                        <li class="mb-2">
                            Respect the privacy and rights of other users or stakeholders
                        </li>
                    </ul>
                    <p class="mb-4">
                        Misuse of this platform may lead to suspension of access, removal of
                        data, or legal action as per Tanzanian law.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">4. Data Usage and Consent</h2>
                    <p class="mb-4">
                        By submitting data through this platform, you grant the Taskforce and
                        its authorized partners permission to:
                    </p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            Collect and store your information in secure, encrypted systems
                        </li>
                        <li class="mb-2">
                            Analyze and aggregate your data to inform reports and policy
                            recommendations
                        </li>
                        <li class="mb-2">
                            Share anonymized summaries with government institutions, donors, or
                            researchers
                        </li>
                    </ul>
                    <p class="mb-4">
                        Your personal data will never be sold or used for commercial purposes.
                        Refer to the <a href="{{ route('privacy') }}" class="text-blue-600 hover:underline">Privacy Policy</a> for full details.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">5. Intellectual Property</h2>
                    <p class="mb-4">
                        All content provided on this platform—including forms, reports, tools,
                        and materials—is the intellectual property of the Taskforce and the
                        Ministry of Minerals, unless otherwise stated.
                    </p>
                    <p class="mb-4">
                        You may not reproduce, distribute, modify, or publicly display content
                        from this platform without written permission, except for educational or
                        public-interest purposes with proper citation.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">6. Availability and Maintenance</h2>
                    <p class="mb-4">
                        We strive to ensure the platform is available at all times; however:
                    </p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            We do not guarantee uninterrupted or error-free access
                        </li>
                        <li class="mb-2">
                            The system may undergo maintenance or updates without prior notice
                        </li>
                        <li class="mb-2">
                            The Taskforce is not liable for any data loss due to technical
                            errors beyond our control
                        </li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">7. Termination of Access</h2>
                    <p class="mb-4">
                        Access to the platform may be suspended or terminated without notice if:
                    </p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            You violate any of these Terms
                        </li>
                        <li class="mb-2">
                            You attempt to disrupt or compromise the platform's security or
                            data integrity
                        </li>
                        <li class="mb-2">
                            Your participation is no longer relevant to the scope of data
                            collection
                        </li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">8. Limitation of Liability</h2>
                    <p class="mb-4">
                        This platform is provided "as-is" for public good. The Taskforce
                        disclaims any liability for:
                    </p>
                    <ul class="list-disc pl-8 mb-4">
                        <li class="mb-2">
                            Losses arising from the use or inability to use the platform
                        </li>
                        <li class="mb-2">
                            Errors in user-submitted data
                        </li>
                        <li class="mb-2">
                            Third-party actions beyond our control
                        </li>
                    </ul>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">9. Governing Law</h2>
                    <p class="mb-4">
                        These Terms are governed by and construed in accordance with the laws of
                        the United Republic of Tanzania. Any disputes shall be resolved through
                        appropriate government legal mechanisms.
                    </p>
                </section>

                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-blue-800 mb-4">10. Contact Information</h2>
                    <p class="mb-4">
                        For questions, technical support, or complaints, please contact:
                    </p>
                    <div class="pl-4 border-l-4 border-blue-800 p-4 bg-blue-50">
                        <p class="font-bold mb-2">Secretariat — Special Taskforce on Empowering Local Miners</p>
                        <p class="mb-1">
                            <span class="inline-block w-6 text-center">📧</span> 
                            Email: <a href="mailto:info@kamatimadini.tz" class="text-blue-600 hover:underline">info@kamatimadini.tz</a>
                        </p>
                        <p>
                            <span class="inline-block w-6 text-center">📍</span> 
                            Ministry of Minerals, Government of Tanzania
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>


@endsection