{{-- @dd($mailData);
{{ die() }} --}}
Dear {{ $mailData['name'] }},
<p>Thank you for Booking Your Appointment With Global Medical Center</p>
<p>Them Details Of Your Appointment are below:</p>
Time & Date: {{ $mailData['time'] }}, {{ $mailData['date'] }}
With: Dr. {{ $mailData['doctorName'] }}

Where: 1 Post Office, Dhaka, Dhanmondi,
Mobile: 01835069168
