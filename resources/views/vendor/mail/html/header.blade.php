<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                <img src="http://upton4ever.com.mx/img/upton-logo.jpg" style="height: 120px">
                {{-- {{ $slot }} --}}
            @endif
        </a>
    </td>
</tr>
