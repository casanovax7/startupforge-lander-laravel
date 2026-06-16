@extends('layouts.app')

@section('title', 'Terms of Service — StartupForge')
@section('description', 'StartupForge terms of service. Read the terms and conditions for using our platform.')

@section('content')
<section class="py-20 sm:py-28">
    <div class="max-w-3xl mx-auto px-6 prose prose-gray prose-headings:text-primary prose-a:text-accent-dark">
        <h1>Terms of Service</h1>
        <p class="lead text-gray-600">Last updated: {{ date('F j, Y') }}</p>

        <h2>1. Acceptance of Terms</h2>
        <p>By accessing or using the StartupForge platform ("Service"), you agree to be bound by these Terms of Service
            ("Terms"). If you do not agree to these Terms, do not use the Service. If you are using the Service on
            behalf of an organization, you represent that you have the authority to bind that organization to these
            Terms.</p>

        <h2>2. Description of Service</h2>
        <p>StartupForge is a CRM and management platform designed for university startup accelerators and
            entrepreneurship programs. The Service provides tools for contact management, event organization, calendar
            integration, activity tracking, and related functionality.</p>

        <h2>3. Account Registration</h2>
        <ul>
            <li>You must provide accurate and complete information when creating an account.</li>
            <li>You are responsible for maintaining the security of your account credentials.</li>
            <li>You must notify us immediately of any unauthorized use of your account.</li>
            <li>You must be at least 16 years old to use the Service.</li>
        </ul>

        <h2>4. Acceptable Use</h2>
        <p>You agree not to:</p>
        <ul>
            <li>Use the Service for any unlawful purpose or in violation of any applicable laws or regulations.</li>
            <li>Upload, store, or transmit any content that is harmful, threatening, abusive, defamatory, or otherwise
                objectionable.</li>
            <li>Attempt to gain unauthorized access to any part of the Service, other accounts, or connected systems.
            </li>
            <li>Interfere with or disrupt the Service or servers connected to it.</li>
            <li>Scrape, harvest, or collect information from the Service without authorization.</li>
            <li>Use the Service to send unsolicited communications (spam).</li>
            <li>Impersonate any person or entity or misrepresent your affiliation.</li>
            <li>Use the Service to store or process data in violation of any applicable data protection laws.</li>
        </ul>

        <h2>5. User Content and Data</h2>
        <h3>5.1 Ownership</h3>
        <p>You retain ownership of all data and content you input into the Service ("User Content"). By using the
            Service, you grant us a limited license to host, store, and process your User Content solely to provide the
            Service to you.</p>

        <h3>5.2 Organizational Data</h3>
        <p>Data entered into an organization's workspace is governed by that organization's administrator.
            Administrators control access permissions and data retention policies within their workspace.</p>

        <h3>5.3 Responsibility</h3>
        <p>You are responsible for the accuracy and legality of User Content you submit. You represent that you have the
            right to input any personal data you add to the Service (e.g., contact information for third parties) and
            that doing so complies with applicable privacy and data protection laws.</p>

        <h2>6. Third-Party Integrations</h2>
        <p>The Service may integrate with third-party services (e.g., Google Calendar, Gmail). Your use of third-party
            integrations is subject to the terms and privacy policies of those services. We are not responsible for the
            practices of third-party services.</p>
        <p>You authorize StartupForge to access and sync data from connected third-party services only as directed by
            you and as described in our Privacy Policy. You may disconnect integrations at any time.</p>

        <h2>7. Availability and Modifications</h2>
        <ul>
            <li>We strive to maintain high availability but do not guarantee uninterrupted access to the Service.</li>
            <li>We may modify, suspend, or discontinue any part of the Service with reasonable notice.</li>
            <li>We may update these Terms from time to time. Material changes will be communicated via email or in-app
                notification.</li>
            <li>Continued use after changes constitutes acceptance of the revised Terms.</li>
        </ul>

        <h2>8. Intellectual Property</h2>
        <p>The Service, including its design, code, features, documentation, and branding, is owned by StartupForge and
            protected by intellectual property laws. These Terms do not grant you any right to use our trademarks,
            logos, or brand assets without prior written consent.</p>

        <h2>9. Termination</h2>
        <ul>
            <li>You may close your account at any time by contacting us.</li>
            <li>We may suspend or terminate your access if you violate these Terms or for any reason with reasonable
                notice.</li>
            <li>Upon termination, your right to access the Service ceases. We will retain your data for a reasonable
                period to allow retrieval, after which it will be deleted in accordance with our Privacy Policy.</li>
        </ul>

        <h2>10. Limitation of Liability</h2>
        <p>To the maximum extent permitted by law:</p>
        <ul>
            <li>The Service is provided "as is" and "as available" without warranties of any kind, express or implied.
            </li>
            <li>We are not liable for any indirect, incidental, special, consequential, or punitive damages arising from
                your use of the Service.</li>
            <li>Our total liability for any claim related to the Service shall not exceed the amount you paid us in the
                12 months preceding the claim.</li>
        </ul>

        <h2>11. Indemnification</h2>
        <p>You agree to indemnify and hold harmless StartupForge, its officers, employees, and agents from any claims,
            damages, losses, or expenses arising from your use of the Service, your User Content, or your violation of
            these Terms.</p>

        <h2>12. Privacy</h2>
        <p>Your use of the Service is subject to our <a href="/privacy">Privacy Policy</a>, which describes how we
            collect, use, and protect your information.</p>

        <h2>13. Governing Law</h2>
        <p>These Terms are governed by and construed in accordance with the laws of the State of Indiana, United States,
            without regard to conflict of law principles. Any disputes arising from these Terms or the Service shall be
            resolved in the courts located in St. Joseph County, Indiana.</p>

        <h2>14. Severability</h2>
        <p>If any provision of these Terms is found to be unenforceable, the remaining provisions will continue in full
            force and effect.</p>

        <h2>15. Contact</h2>
        <p>For questions about these Terms of Service, please contact us at:</p>
        <ul>
            <li>Email: <a href="mailto:legal@startupforge.app">legal@startupforge.app</a></li>
            <li>Website: <a href="https://startupforge.app">startupforge.app</a></li>
        </ul>
    </div>
</section>
@endsection