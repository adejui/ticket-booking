<x-mail::message>
    Hi {{ $booking->name }},

    Terimakasih telah memesan tiket wisata di Tiket-live. Kami sedang memeriksa pembayaran Anda saat ini. Anda dapat
    memeriksa secara berkala pada website kami, dan berikut adalah booking transaction ID Anda:
    {{ $booking->booking_trx_id }}

    <x-mail::button :url="route('front.check_booking')">
        Check Booking
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
