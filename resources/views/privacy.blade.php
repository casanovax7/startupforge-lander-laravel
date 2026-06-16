@extends('layouts.app')

@section('title', 'Privacy Policy — StartupForge')
@section('description', 'StartupForge privacy policy. Learn how we collect, use, and protect your information.')

@section('content')
<section class="py-20 sm:py-28">
    <div class="max-w-3xl mx-auto px-6 prose prose-gray prose-headings:text-primary prose-a:text-accent-dark">
        <h1>Privacy Policy</h1>
        <p class="lead text-gray-600">Last updated: {{ date('F j, Y') }}</p>

        <h2>1. Introduction</h2>
        <p>StartupForge ("we," "our," or "us") operates the StartupForge platform, a CRM and management tool designed
            for university startup accelerators and entrepreneurship programs. This Privacy Policy explains how we
            collect, use, disclose, and safeguard your information when you use our platform and related services.</p>

        <h2>2. Information We Collect</h2>

        <h3>2.1 Information You Provide</h3>
        <ul>
            <li><strong>Account Information:</strong> Name, email address, phone number, and organizational affiliation
                when you create an account or request access.</li>
            <li><strong>Profile Information:</strong> Role, title, biography, and profile photos you choose to add.</li>
            <li><strong>CRM Data:</strong> Contact information, company details, event records, notes, tags, and other
                data entered by authorized users of your organization's workspace.</li>
            <li><strong>Communications:</strong> Messages, notes, and activity logs you create within the platform.</li>
        </ul>

        <h3>2.2 Information from Third-Party Services</h3>
        <p>When you connect third-party services to StartupForge, we may collect:</p>
        <ul>
            <li><strong>Google Sign-In:</strong> Your Google account email and profile name for authentication purposes.
                We do not store Google OAuth tokens for sign-in.</li>
            <li><strong>Google Calendar Integration:</strong> Calendar metadata, event details (titles, descriptions,
                times, attendees, locations), and sync tokens necessary to mirror your calendar data. Access tokens are
                stored encrypted and used solely to sync calendar data you have authorized.</li>
            <li><strong>Google Gmail Integration:</strong> Email metadata (sender, recipient, subject, date), message
                content, and thread information for emails you authorize us to access. We use this to match
                communications to CRM contacts. Access tokens are stored encrypted.</li>
        </ul>
        <p>You may revoke third-party access at any time from your account settings or directly through the third-party
            service.</p>

        <h3>2.3 Automatically Collected Information</h3>
        <ul>
            <li><strong>Usage Data:</strong> Pages visited, features used, timestamps, and general interaction patterns.
            </li>
            <li><strong>Device Information:</strong> Browser type, operating system, and device identifiers.</li>
            <li><strong>Log Data:</strong> IP addresses, access times, and referring URLs.</li>
        </ul>

        <h2>3. How We Use Your Information</h2>
        <p>We use the information we collect to:</p>
        <ul>
            <li>Provide, maintain, and improve the StartupForge platform.</li>
            <li>Authenticate your identity and manage your account.</li>
            <li>Sync data between StartupForge and authorized third-party services (Google Calendar, Gmail).</li>
            <li>Enable CRM functionality: contact management, event tracking, activity logging, and search.</li>
            <li>Send transactional communications (account verification, password resets, important notifications).</li>
            <li>Respond to your requests and provide customer support.</li>
            <li>Protect against fraud, unauthorized access, and abuse.</li>
            <li>Comply with legal obligations.</li>
        </ul>

        <h2>4. Data Sharing and Disclosure</h2>
        <p>We do not sell your personal information. We may share information in the following circumstances:</p>
        <ul>
            <li><strong>Within Your Organization:</strong> Data entered into your organization's workspace is accessible
                to other authorized members of that workspace as determined by your administrator.</li>
            <li><strong>Service Providers:</strong> We use third-party services for hosting, email delivery, and
                infrastructure. These providers process data on our behalf under contractual obligations to protect your
                information.</li>
            <li><strong>Legal Requirements:</strong> We may disclose information if required by law, regulation, legal
                process, or governmental request.</li>
            <li><strong>Safety:</strong> We may disclose information to protect the rights, property, or safety of
                StartupForge, our users, or others.</li>
        </ul>

        <h2>5. Data Security</h2>
        <p>We implement industry-standard security measures to protect your information:</p>
        <ul>
            <li>All data is transmitted over HTTPS/TLS encryption.</li>
            <li>OAuth tokens and sensitive credentials are encrypted at rest.</li>
            <li>Access to production systems is restricted and audited.</li>
            <li>We use secure authentication with support for two-factor authentication.</li>
        </ul>
        <p>While we strive to protect your information, no method of electronic storage or transmission is 100% secure.
        </p>

        <h2>6. Data Retention</h2>
        <p>We retain your information for as long as your account is active or as needed to provide services. When you
            delete your account, we will delete or anonymize your personal information within 30 days, except where
            retention is required by law or for legitimate business purposes (e.g., resolving disputes, enforcing
            agreements).</p>
        <p>CRM data belonging to your organization is retained according to your organization's data policies and
            administrator settings.</p>

        <h2>7. Your Rights</h2>
        <p>Depending on your jurisdiction, you may have the right to:</p>
        <ul>
            <li>Access the personal information we hold about you.</li>
            <li>Correct inaccurate or incomplete information.</li>
            <li>Delete your personal information.</li>
            <li>Withdraw consent for data processing.</li>
            <li>Export your data in a portable format.</li>
            <li>Object to or restrict certain processing activities.</li>
        </ul>
        <p>To exercise these rights, contact us at <a
                href="mailto:privacy@startupforge.app">privacy@startupforge.app</a>.</p>

        <h2>8. Third-Party Services and Google API</h2>
        <p>StartupForge's use and transfer of information received from Google APIs adheres to the <a
                href="https://developers.google.com/terms/api-services-user-data-policy" target="_blank"
                rel="noopener">Google API Services User Data Policy</a>, including the Limited Use requirements.</p>
        <p>Specifically:</p>
        <ul>
            <li>We only use Google data for the purposes described in this policy and as authorized by you.</li>
            <li>We do not use Google data for advertising purposes.</li>
            <li>We do not allow humans to read your Google data unless you provide explicit consent, it is necessary for
                security purposes, or it is required by law.</li>
            <li>We limit our use of Google data to the practices disclosed in this privacy policy.</li>
        </ul>

        <h2>9. Cookies</h2>
        <p>We use essential cookies for authentication and session management. We do not use advertising or third-party
            tracking cookies.</p>

        <h2>10. Children's Privacy</h2>
        <p>StartupForge is not intended for use by individuals under the age of 16. We do not knowingly collect personal
            information from children.</p>

        <h2>11. Changes to This Policy</h2>
        <p>We may update this Privacy Policy from time to time. We will notify you of material changes by posting the
            updated policy on this page and updating the "Last updated" date. Continued use of the platform after
            changes constitutes acceptance of the revised policy.</p>

        <h2>12. Contact Us</h2>
        <p>If you have questions about this Privacy Policy or our data practices, please contact us at:</p>
        <ul>
            <li>Email: <a href="mailto:privacy@startupforge.app">privacy@startupforge.app</a></li>
            <li>Website: <a href="https://startupforge.app">startupforge.app</a></li>
        </ul>
    </div>
</section>
@endsection