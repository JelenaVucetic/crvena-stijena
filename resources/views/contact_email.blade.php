<p>
    You have received a new message from
    <strong>{{ $data['name'] }}</strong>.
</p>

<p>
    <strong>Email:</strong>
    {{ $data['email'] }}
</p>

<p>
    <strong>Message:</strong>
</p>

<p>
    {!! nl2br(e($data['message'])) !!}
</p>

<hr>

<p style="font-size: 12px; color: #777;">
    This message was sent through the website contact form.
</p>
