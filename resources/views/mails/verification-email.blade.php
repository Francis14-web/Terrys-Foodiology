@component('mail::message')
# Account Verification

Hello {{ $mailData['name'] }},

@if($mailData['approved'])
Thank you for registering an account with our platform. We are pleased to inform you that your account has been **approved**.

If you have any questions or need further assistance, please feel free to contact our support team.
@else
Thank you for registering an account with our platform. We regret to inform you that your account verification has been **denied**.

If you have any questions or need further assistance, please feel free to contact our support team.
@endif

Thanks,
{{ config('app.name') }}
@endcomponent
